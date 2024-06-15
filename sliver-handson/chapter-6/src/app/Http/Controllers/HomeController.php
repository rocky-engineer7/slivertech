<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;      // この行を追記する(認証機能を司るクラス)
use Illuminate\Support\Facades\DB;
use App\Models\Memo;      // この行を追記する
use App\Models\MemoTag;  // この行を追記
use App\Models\Tag;  // この行を追記

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $memosQuery = Memo::where('user_id', Auth::id());

        if ($request->has('tag_id')) {
            // tag_idがクエリパラメータに存在する場合のみ、以下の条件をクエリビルダに追加する
            $memosQuery->whereHas('tags', function ($query) use ($request) { // 外部キーで繋がっているtagsテーブルを使って絞り込む際の記述
                $query->where('tag_id', $request->tag_id);
            });
        }

        $memos = $memosQuery->get();

        $tags = Tag::where('user_id', Auth::id()) // ログインしているユーザーが登録したタグのみ取得
            ->orderBy('created_at', 'ASC') // 作成順で昇順
            ->get();

        return view('create', compact('memos', 'tags')); // tagsで画面に渡す変数を追加
    }

    public function store(Request $request)
    {
        // contentが空かチェック
        $request->validate(['content' => 'required']);

        // ーーートランザクション処理 STARTーーー
        DB::transaction(function () use ($request) {
            // 1. メモを登録し、その後登録したメモのidを取得
            $memo_id = Memo::insertGetId(['content' => $request->content, 'user_id' => Auth::id()]);
            // 2. 新規タグが入力されているかをチェック
            if ($request->filled('new_tag_name')) {
                // 3. 新規タグと同名のタグが既にtagsテーブルに存在しているかを確認
                $tag_exist = Tag::where('user_id', Auth::id())
                    ->where('name', $request->new_tag_name)
                    ->exists();
                if (!$tag_exist) {
                    // 4. 新規タグと同名のタグがなければ、tagsテーブルに登録し、登録したタグIDを取得
                    $new_tag_id = Tag::insertGetId(['name'=> $request->new_tag_name, 'user_id' => Auth::id()]);
                    // 5. memo_tagsテーブルにメモとタグを紐づける情報を登録
                    MemoTag::insert(['memo_id' => $memo_id, 'tag_id' => $new_tag_id]);
                }
            }
            // 6. チェックボックスにてチェックされたtag_idのタグをMemoTagに登録する
            if ($request->filled('tag_ids')) {
                foreach ($request->tag_ids as $tag_id) {
                    MemoTag::insert(['memo_id' => $memo_id, 'tag_id' => $tag_id]);
                }
            }
        });
        // ーーートランザクション処理 ENDーーー
        return redirect(route('home'));
    }

    public function edit($memo_id)   // ルートパラメータは、コントローラの引数に加えましょう。混同しないように、変数名はルートパラメータと同じ名前にしましょう。
    {
        $memos = Memo::where('user_id', Auth::id())
            ->orderBy('updated_at', 'DESC')
            ->get();

        $edit_memo = Memo::find($memo_id);  // この行は、以下にコメントアウトした行と同じ処理になっている。idカラムで指定して1件のみ取得する、といったことは非常によくあるため簡略化したメソッドが用意されている。
        // $edit_memo = Memo::where('id', $memo_id)->first();
        if ($edit_memo === null) {
            return redirect(route('home'));
        }

        $tags = Tag::where('user_id', Auth::id())->get(); // この行を追加

        // 表示するviewファイルをresources/views/edit.blade.phpに変更する。また、$edit_memoもviewで使えるようにする。複数の変数をviewで使う際は、連想配列にする。
        return view('edit')->with([
            'memos' => $memos,
            'edit_memo' => $edit_memo,
            'tags' => $tags, // この行を追加
        ]);
    }

    // メモ編集
    public function update($memo_id, Request $request)
    {
        // contentが空かチェック
        $request->validate(['content' => 'required']);

        DB::transaction(function () use ($memo_id, $request) {
            //トランザクション処理　START

            // 1. メモの内容を更新
            Memo::find($memo_id)->update(['content' => $request->content]);
            // 2. メモとタグの紐づけを一旦消去
            MemoTag::where('memo_id', $memo_id)->delete();

            if ($request->filled('tag_ids')) {
                // 再度メモとタグを紐付け
                foreach($request->tag_ids as $tag_id) {
                    MemoTag::insert(['memo_id' => $memo_id, 'tag_id' => $tag_id]);
                }
            }

            if ($request->filled('new_tag_name')) {
                $tag_exist = Tag::where('user_id', Auth::id())
                    ->where('name', $request->new_tag_name)
                    ->exists();
                if(!$tag_exist){
                    // 新規タグと同名のタグがなければ、tagsテーブルに新規登録してidを取得
                    $new_tag_id = Tag::insertGetId(['name' => $request->new_tag_name, 'user_id' => Auth::id()]);

                    // memo_tagsテーブルに、メモに新規タグを登録するという情報を登録
                    MemoTag::insert(['memo_id' => $memo_id, 'tag_id' => $new_tag_id]);
                }
            }
        });

        return redirect(route('home'));
    }

    // メモ削除
    public function destroy(Request $request)
    {
        // updateメソッドの処理とほとんど同じ。まずは　Modelに搭載されているfindメソッドでidからレコードを特定して、それに対しdeleteメソッドを実行するとレコードが削除されるように作られている。
        $memo = Memo::find($request->memo_id);

        if ($memo !== null) {
            $memo->delete();
        }

        return redirect(route('home'));
    }
}

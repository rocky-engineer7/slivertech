@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            メモ編集
        </div>
        <div class="card-body my-card-body">
            <form action="{{ route('update', $edit_memo->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="3" placeholder="ここにメモを入力">{{ $edit_memo->content }}</textarea>
                </div>
                @if($errors->has('content'))
                    <div class="alert alert-danger">メモ内容を入力してください</div>
                @endif
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline my-2">
                        <input type="checkbox" name="tag_ids[]" value="{{ $tag->id }}"
                            id="{{ $tag->id }}" class="form-check-input"
                            {{ $edit_memo->createCheckedText($tag->id) }}>
                        <!-- 上の行は、登録済みのタグの場合は「checked」という文字列に変換される -->
                        <label class="form-check-label" for="{{ $tag->id }}">{{ $tag->name }}</label>
                    </div>
                @endforeach
                <input type="text" name="new_tag_name" class="form-control w-50 my-3" placeholder="新しいタグを入力">
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">メモの更新</button>
                </div>
            </form>

            <form class="m-2" action="{{ route('destroy', $edit_memo->id) }}" method="post">
                @csrf
                @method('DELETE')  <!-- DELETEメソッドを指定 -->
                <button class="btn btn-danger">メモを削除</button>
            </form>
        </div>
    </div>
@endsection

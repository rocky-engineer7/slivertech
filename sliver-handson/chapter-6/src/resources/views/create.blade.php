@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            新規メモ作成
        </div>
        <div class="card-body my-card-body">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="form-group">
                    <textarea class="form-control" name="content" rows="3" placeholder="ここにメモを入力"></textarea>
                </div>
                @if($errors->has('content'))
                    <div class="alert alert-danger">メモ内容を入力してください</div>
                @endif
                @foreach ($tags as $tag)
                    <div class="form-check form-check-inline my-2">
                        <!-- name属性が、末尾に[]を入れる特殊な名前！これは、このデータが配列型になることを示している -->
                        <input type="checkbox" name="tag_ids[]" value="{{ $tag->id }}"
                            id="{{ $tag->id }}" class="form-check-input">
                        <label class="form-check-label" for="{{ $tag->id }}">{{ $tag->name }}</label>
                    </div>
                @endforeach
                <input type="text" name="new_tag_name" class="form-control w-50 my-3" placeholder="新しいタグを入力">
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">新規メモ作成</button>
                </div>
            </form>
        </div>
    </div>
@endsection

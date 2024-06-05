@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            新規メモ作成
        </div>
        <div class="card-body my-card-body">
            <form action="" method="post">
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="3" placeholder="ここにメモを入力"></textarea>
                </div>
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">新規メモ作成</button>
                </div>
            </form>
        </div>
    </div>
@endsection

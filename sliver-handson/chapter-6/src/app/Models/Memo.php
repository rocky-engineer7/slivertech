<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // SoftDeletes トレイトを追加

class Memo extends Model
{
    use HasFactory;
    use SoftDeletes; // SoftDeletes トレイトを使用する

    // ここから追記する
    protected $fillable = [
        'content',
        'user_id',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'memo_tags'); // このModelの1つのデータに対し、複数のTag Modelが属していることを定義した
    }

    public function createCheckedText($tag_id)
    {
        if ($this->tags()->where('id', $tag_id)->exists()) {
            return 'checked';
        }
    }
}

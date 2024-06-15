<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToMemosTable extends Migration
{
    public function up()
    {
        Schema::table('memos', function (Blueprint $table) {
            $table->softDeletes();  // 論理削除のカラムを追加する
        });
    }

    public function down()
    {
        Schema::table('memos', function (Blueprint $table) {
            $table->dropSoftDeletes();  // ロールバック時にカラムを削除する
        });
    }
}

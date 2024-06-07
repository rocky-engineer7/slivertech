<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('memos', function (Blueprint $table) {
            $table->id(); // 「id」という名称の、UNSIGNED BIGINT型かつAUTO INCREMENTのカラムが作られる。主キーに設定される。
            $table->text('content');  // 「content」という名前のTEXT型のカラムが作られる
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // 「user_id」という外部キーのカラムを作成する。どのテーブルのどのカラムと結合するかは、カラム名からLaravelが判断する。この場合は、usersテーブルのidカラム。
            $table->timestamps(); // Laravelの日時管理用の特殊名カラム「created_at」と「updated_at」が作られる(TIMESTAMP型)。開発者が実装しなくても、自動でcreated_atカラムにはINSERTされた日時が、updated_atカラムにはUPDATEされた日時が入れられる。
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memos');
    }
};

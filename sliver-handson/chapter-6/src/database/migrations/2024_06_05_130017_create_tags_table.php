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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);  // 「name」という名前のVARCHAR型のカラムが作られる。第二引数で、最大何字かを指定する。
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // onDeleteメソッドは、この外部キーが依存しているテーブル(この場合はusersテーブル)の紐づいたレコードが削除された時にこのレコードをどうするか、を設定するメソッド。「cascade」は、一緒に削除されるという設定。
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};

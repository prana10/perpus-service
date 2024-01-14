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
        Schema::table('rating_books', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_users_user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('book_id', 'fk_rating_books_book_id')->references('id')->on('books')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rating_books', function (Blueprint $table) {
            $table->dropForeign('fk_users_user_id');
            $table->dropForeign('fk_rating_books_book_id');
        });
    }
};

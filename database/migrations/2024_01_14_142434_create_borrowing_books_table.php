<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('borrowing_books', function (Blueprint $table) {
            $table->id();
            $table->string('loan_number');
            $table->foreignId('user_id')->nullable()->index('fk_borrowing_books_user_id');
            $table->foreignId('book_id')->nullable()->index('fk_borrowing_books_book_id');
            $table->date('book_borrowing_date');
            $table->date('book_return_date')->nullable();
            $table->string('loan_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrowing_books');
    }
};

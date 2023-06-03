<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('photo_name');
            $table->text('photo_path');
            $table->string('book_name', 40);
            $table->string('book_type', 50);
            $table->integer('book_page');
            $table->text('book_summary');
            $table->integer('stock');
            $table->timestamps();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
}


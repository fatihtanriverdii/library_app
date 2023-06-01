<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;

class BookController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'book-title' => 'required',
            'book-genre' => 'required',
            'book-pages' => 'required|numeric',
            'book-summary' => 'required',
            'book-stock' => 'required|numeric',
            'book-image' => 'required|image',
        ]);

        $bookTitle = $request->input('book-title');
        $bookGenre = $request->input('book-genre');
        $bookPages = $request->input('book-pages');
        $bookSummary = $request->input('book-summary');
        $bookStock = $request->input('book-stock');
        $bookImage = $request->file('book-image');

        // Dosyayı Storage'a kaydet
        $filePath = $bookImage->store('kitaplar', 'Images');

        // Veritabanına kaydet
        $book = new Book();
        $book->photo_name = $bookImage->getClientOriginalName();
        $book->photo_path = $filePath;
        $book->book_name = $bookTitle;
        $book->book_type = $bookGenre;
        $book->book_page = $bookPages;
        $book->book_summary = $bookSummary;
        $book->stock = $bookStock;
        $book->save();

        return "Kitap başarıyla kaydedildi.";
    }
}

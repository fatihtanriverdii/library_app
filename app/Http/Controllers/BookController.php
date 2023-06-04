<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

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

    public function show($id)
    {
        // İlgili kitabı veritabanından çekme
        $book = book::find($id);

        // Kitap verilerini göndererek view'i render etme
        return view('kitapornek', ['book' => $book]);
    }

    public function updateBook(Request $request)
    {
        $bookId = $request->input('bookId');
        $title = $request->input('title');
        $genre = $request->input('genre');
        $pages = $request->input('pages');
        $summary = $request->input('summary');
        $stock = $request->input('stock');

        // Kitap güncelleme işlemini gerçekleştir (örneğin, veritabanında güncelleme yapılabilir)
        // Örnek olarak, Eloquent ORM kullanarak kitap modelini güncelleme:
        $book = Book::find($bookId);
        $book->title = $title;
        $book->genre = $genre;
        $book->pages = $pages;
        $book->summary = $summary;
        $book->stock = $stock;
        $book->save();

        // İşlem başarılıysa başarılı bir yanıt döndür
        return response()->json(['success' => true, 'message' => 'Kitap güncellendi']);
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
    
        // Kitabı ara ve sonucu döndür
        $book = Book::where('book_name', 'LIKE', "%$query%")->first();
    
        if ($book) {
            return view('kitapornek', compact('book'));
        } else {
            $book = null;
            return view('kitapornek')->with('error', 'Aradığınız kitap bulunamadı.');
        }
    }
    
    
}

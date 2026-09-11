<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Book::create($request->all());
        
        return redirect()->back()->with('success', 'Criado com sucesso!');
    }

    public function index(){
        $books = Book::all();

        return view('book', compact('books'));
    }

        
    public function destroy($id)
    {
        $book = Book::find($id);
        
        if ($book) {
            $book->delete();
        }
        return redirect()->back()->with('success', 'Removido!');
    }

        // 1. Mostra o formulário de edição com os dados atuais do produto
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }

    // 2. Salva as alterações feitas no produto
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());

        // Dá um "refresh" ou volta para a página anterior com sucesso
        return redirect()->back()->with('success', 'Produto atualizado com sucesso!');
    }
}

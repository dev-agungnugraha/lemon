<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.book.index',[
            'title' => 'Data Buku',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create',[
            'title' => 'Laporan Evaluasi Monitoring (Lemon)',
            'authors' => Author::orderBy('name','ASC')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'cover' => 'file|image',
            'qty'   => 'required|numeric'

        ]);

        $cover = null;
        
        if($request->hasFile('cover')){
            $cover = $request->file('cover')->store('assets/covers');
        }

        Book::create([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
            'cover' => $cover,
            'qty' => $request->qty,
        ]);

        // $book->update($request->only('name'));
        return redirect()->route('admin.book.index')
            ->with('info','Data berhasil diubah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', [
            'title' => 'Laporan Evaluasi Monitoring (Lemon)',
            'book' => $book,
            'authors' => Author::orderBy('name', 'ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required|min:20',
            'author_id' => 'required',
            'cover' => 'file|image',
            'qty'   => 'required|numeric'

        ]);
        $cover = $book->cover;

        if($request->hasFile('cover')){
            Storage::delete($book->cover);
            $cover = $request->file('cover')->store('assets/covers');
        }

        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'author_id' => $request->author_id,
             'cover' => $cover,
            'qty' => $request->qty,
        ]);

        // $book->update($request->only('name'));
        return redirect()->route('admin.book.index')
            ->with('info','Data berhasil diperbaharui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('admin.book.index')
            ->with('warning','Data berhasil dihapus');
    }
}

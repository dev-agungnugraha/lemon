<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Kontrak;
use App\Models\Paket;
use App\Models\Pegawai;
use App\Models\Progreskegiatan;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name','ASC');

        return datatables()->of($authors)
            ->addColumn('action','admin.author.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function books()
    {
        $books = Book::orderBy('title','ASC');

        return datatables()->of($books)
            ->addColumn('author', function(Book $model){
                return $model->author->name;
            })
            ->editColumn('cover', function(Book $model){
                return '<img src="'. $model->getCover().'" height="150px">' ;
            })
            ->addColumn('action','admin.book.action')
            ->addIndexColumn()
            ->rawColumns(['action','cover'])
            ->toJson();
    }

    public function pegawais()
    {
        $pegawais = Pegawai::orderBy('name','ASC');

        return datatables()->of($pegawais)
            ->addColumn('action','admin.pegawai.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function pakets()
    {
        $pakets = Paket::orderBy('name','ASC');

        return datatables()->of($pakets)
            ->addColumn('action','admin.paket.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function kontraks()
    {
        $kontraks = Kontrak::orderBy('paket_id','ASC');

        return datatables()->of($kontraks)
            ->addColumn('namapaket', function(Kontrak $model){
                return $model->paket->name;
            })
            ->editColumn('cover', function(Kontrak $model){
                // return '<img src="'. $model->cover.'" height="150px">' ;
            })
            ->addColumn('action','admin.kontrak.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }

    public function progreskegiatans()
    {
        $progreskegiatans = Progreskegiatan::orderBy('paket_id','ASC');

        return datatables()->of($progreskegiatans)
            ->addColumn('namapaket', function(Progreskegiatan $model){
                return $model->paket->name;
            })
            ->editColumn('cover', function(Progreskegiatan $model){
                // return '<img src="'. $model->cover.'" height="150px">' ;
            })
            ->addColumn('action','admin.progreskegiatan.action')
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->toJson();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FilmeController extends Controller
{
    public function getAllMovies()
    {
        return DB::table('tbfilme')
            ->join('tbFilmeGenero', 'tbFilmeGenero.idFilme', '=', 'tbfilme.idFilme')
            ->join('tbgenero', 'tbgenero.idGenero', '=', 'tbFilmeGenero.idGenero')
            ->get();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GeneroController extends Controller
{
    public function getAllGenres()
    {
        return DB::table('tbgenero')
            ->get();
    }
}

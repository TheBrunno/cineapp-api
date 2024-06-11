<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class FilmeController extends Controller
{
    public function getAllMoviesAndInfos()
    {
        $resultados = DB::select('
            SELECT
                tbfilme.idFilme,
                tbfilme.filme,
                tbfilme.diretor,
                tbfilme.duracao,
                tbfilme.img, 
                tbfilme.sinopse,
                GROUP_CONCAT(DISTINCT tbgenero.genero) AS generos,
                GROUP_CONCAT(DISTINCT tbTag.tag) AS tags
            FROM
                tbfilme
            LEFT JOIN tbFilmeGenero ON tbFilmeGenero.idFilme = tbfilme.idFilme
            LEFT JOIN tbgenero ON tbgenero.idGenero = tbFilmeGenero.idGenero
            LEFT JOIN tbFilmeTag ON tbFilmeTag.idFilme = tbfilme.idFilme
            LEFT JOIN tbTag ON tbTag.idTag = tbFilmeTag.idTag
            GROUP BY tbfilme.idFilme
        ');
    
    
        foreach ($resultados as $resultado) {
            if($resultado->generos != null){
                $resultado->generos = explode(',', $resultado->generos);
            }
            if($resultado->tags != null){
                $resultado->tags = explode(',', $resultado->tags);
            }
        }

        return $resultados;
    }

    public function getOnlyMovies()
    {
        $resultados = DB::table('tbfilme')
        ->select(['idFilme', 'filme', 'diretor', 'duracao', 'img', 'sinopse'])
        ->get();
        return $resultados;
    }

    public function getMoviesByName($name)
    {
        $resultados = DB::select('
            SELECT
                tbfilme.idFilme,
                tbfilme.filme,
                tbfilme.diretor,
                tbfilme.duracao,
                tbfilme.img, 
                tbfilme.sinopse,
                GROUP_CONCAT(DISTINCT tbgenero.genero) AS generos,
                GROUP_CONCAT(DISTINCT tbTag.tag) AS tags
            FROM
                tbfilme
            LEFT JOIN tbFilmeGenero ON tbFilmeGenero.idFilme = tbfilme.idFilme
            LEFT JOIN tbgenero ON tbgenero.idGenero = tbFilmeGenero.idGenero
            LEFT JOIN tbFilmeTag ON tbFilmeTag.idFilme = tbfilme.idFilme
            LEFT JOIN tbTag ON tbTag.idTag = tbFilmeTag.idTag
            GROUP BY tbfilme.idFilme
            HAVING filme LIKE \'%'.$name.'%\'
        ');

        foreach ($resultados as $resultado) {
            if($resultado->generos != null){
                $resultado->generos = explode(',', $resultado->generos);
            }
            if($resultado->tags != null){
                $resultado->tags = explode(',', $resultado->tags);
            }
        }

        return $resultados;
    }
}

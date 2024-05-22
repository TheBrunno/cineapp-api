<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class GeneroController extends Controller
{
    public function getOnlyGenres()
    {
        return DB::table('tbgenero')
            ->get();
    }

    public function getMoviesByGenre($genre)
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
            HAVING generos LIKE \'%'.$genre.'%\'
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

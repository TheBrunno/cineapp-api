<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    function getUser($id){
        $resultados = DB::select('
            SELECT
                tbUsuarios.idUsuario,
                tbUsuarios.nome,
                tbUsuarios.img,
                tbUsuarios.email,
                tbUsuarios.senha, 
                tbUsuarios.cpf,
                tbUsuarios.cartao,
                tbUsuarios.bandeira,
                GROUP_CONCAT(DISTINCT tbFilme.filme) AS favoritos
            FROM
                tbUsuarios
            LEFT JOIN tbFavoritos ON tbUsuarios.idUsuario = tbFavoritos.idUsuario
            LEFT JOIN tbFilme ON tbFavoritos.idFilme = tbFilme.idFilme
            WHERE tbUsuarios.idUsuario = '.$id.'
            GROUP BY tbUsuarios.idUsuario
        ');
    
    
        foreach ($resultados as $resultado) {
            if($resultado->favoritos != null){
                $resultado->favoritos = explode(',', $resultado->favoritos);
            }
        }

        return $resultados;
    }

        public function getUserFavorites($id)
    {
        $resultados = DB::select('
            SELECT
                GROUP_CONCAT(DISTINCT tbFilme.filme) AS favoritos
            FROM
                tbUsuarios
            LEFT JOIN tbFavoritos ON tbUsuarios.idUsuario = tbFavoritos.idUsuario
            LEFT JOIN tbFilme ON tbFavoritos.idFilme = tbFilme.idFilme
            WHERE tbUsuarios.idUsuario = '.$id.'
            GROUP BY tbUsuarios.idUsuario
        ');
    
    
        foreach ($resultados as $resultado) {
            if($resultado->favoritos != null){
                $resultado->favoritos = explode(',', $resultado->favoritos);
            }
        }

        return $resultados;
    }
}

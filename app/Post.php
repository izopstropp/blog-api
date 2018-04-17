<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =  ['user_id','titulo','descricao','situacao'];
    
    // pesquisando a palavra pelas colunas na tabela
    public static function findAllField($pesquisa){

        return Post::orWhere('user_id','LIKE','%'.$pesquisa.'%')
        ->orWhere('titulo','LIKE','%'.$pesquisa.'%')
        ->orWhere('descricao','LIKE','%'.$pesquisa.'%')
        ->where('situacao','=','A')
        ->orderBy('id', 'DESC')
        ->get();
    }
}

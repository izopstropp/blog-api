<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public $post;
    public function __construct(Post $post){
        $this->post = $post;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $post = null;
        //verificando se a requisição veio com alguma pesquisa na requisição apartir do header
        if($request->q){
            $pesquisa = $request->q;
            //realizando pesquisa pelos campos
            $post = Post::findAllField($pesquisa);
        }else{
             $post = Post::where('situacao','=','A')->orderBy('id', 'DESC')->get();
        }   

        return response()->json(['posts'=> $post],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->post->user_id = 1;
        $this->post->titulo = $request->titulo;
        $this->post->descricao = $request->descricao;
        $this->post->situacao = $request->situacao;
        if($this->post->save()){
            return response()->json(['message'=>"post adicionado com sucesso"],200);
        }   

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->post::find($id);
        return response()->json(['post'=>$post],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $id)
    {
        $post = $this->post->find($id);
        $post->titulo = $request->titulo;
        $post->descricao = $request->descricao;
        $post->situacao = $request->situacao;
        if($post->save()){
            return response()->json(['message'=>'post atualizado'],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->post->find($id);
        if($post->delete()){
            return response()->json(['message'=>'post deletado'],200);
        }
    }
}

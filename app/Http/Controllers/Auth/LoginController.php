<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use JWTAuth;
use JWTAuthException;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    public function login(Request $request){
        //capturando o login digitado na requisição
        $credencias = $request->only('email','password');
        $token= "";

        try{
            //se não retornar token significa que o usuario esta invalido
            if(!$token = JWTAuth::attempt($credencias)){
                return response()->json([
                    'response'=>'error',
                    'message'=>'login ou senha inválido'
                ],400);
            }
        }catch (JWTAuthException $e){
            return response()->json([
                'response' => 'error',
                'message' => 'failed_to_create_token',
            ],400);
        }

        // caso o usuario estaja autenticado, retornar o token
        return response()->json([
            'email'=> $request->email,
            'token' => $token,
        ],200);

    }


}

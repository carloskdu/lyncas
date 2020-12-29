<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\favoritos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class favoritosController extends Controller
{
    public function salvar(Request $req)
    {
      $dados = $req->all();
      favoritos::create($dados);

      return redirect()->route('pesquisar');

    }

    
    public function favoritos(){

        $favoritos = json_decode(DB::table('favoritos')->select('link')->get());

        foreach($favoritos as $favorito){
            
           $lista[] = json_decode(Http::get($favorito->link));
        }
        return view('favoritos', compact('lista'));
    }  
    
    
}
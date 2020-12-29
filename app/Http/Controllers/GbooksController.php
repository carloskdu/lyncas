<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GbooksController extends Controller
{
    public function home(){        
        return view('home');
    } 

    public function search(Request $pesq){
        $q = isset($pesq['search']) ? $pesq['search'] : 'google';
       // dd($q);
        $response = json_decode(Http::get('https://www.googleapis.com/books/v1/volumes?q='. $q));    
        $items = $response->items;
        return view('pesquisar', compact('items'));
    } 
}

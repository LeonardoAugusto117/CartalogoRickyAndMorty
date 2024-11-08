<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

class CharacterController extends Controller
{
    public function index()
    {
        // Fazendo a requisição para a API
        $response = Http::get('https://rickandmortyapi.com/api/character');

        // Verificando se a requisição foi bem-sucedida
        if ($response->successful()) {
            // Decodifica a resposta JSON automaticamente
            $characters = $response->json()['results'];

            // Retorna uma view com os personagens
            return view('home.index', compact('characters'));
        } else {
            // Caso haja um erro, exibe uma mensagem de erro
            return "Erro ao obter dados da API.";
        }
    }

    public function characters($id)
    {
        // Fazendo a requisição para a API com o ID fornecido
        $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");
    
        // Verificando se a requisição foi bem-sucedida
        if ($response->successful()) {
            // Decodifica a resposta JSON automaticamente
            $character = $response->json();
    
            // Retorna uma view com o personagem
            return view('chars.characters', compact('character'));
        } else {
            // Caso haja um erro, exibe uma mensagem de erro
            return "Erro ao obter dados da API.";
        }
    }

    public function login()
    {
        return view('acess.login'); 
    }

    public function register()
    {
        return view('acess.register'); 
    }

    public function sobre()
    {
        return view('information.sobre'); 
    }
    
}


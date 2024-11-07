<?php

namespace App\Http\Controllers;

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

    public function characters()
    {
        // Fazendo a requisição para a API
        $response = Http::get('https://rickandmortyapi.com/api/character');

        // Verificando se a requisição foi bem-sucedida
        if ($response->successful()) {
            // Decodifica a resposta JSON automaticamente
            $characters = $response->json()['results'];

            // Retorna uma view com os personagens
            return view('chars.characters', compact('characters'));
        } else {
            // Caso haja um erro, exibe uma mensagem de erro
            return "Erro ao obter dados da API.";
        }
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ator;

class AtoresController extends Controller
{
    public function index()
    {
        $atores = Ator::all();
        return view('atores', ['atores' => $atores]);
    }

    public function show($id)
    {
        return "Atores - Exibindo o ator de ID: {$id}";
    }
}

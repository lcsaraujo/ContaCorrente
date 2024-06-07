<?php

namespace App\Http\Controllers;

use App\Models\Conta;
use App\Models\Credito;
use Illuminate\Http\Request;

class ContaController extends Controller
{
    public function index(Request $request)
    {

        return view('contas.index');
    }

    public function novaconta(Request $request)
    {
        return view('contas.novaconta');
    }

    public function store(Request $request)
    {

        return Credito::create($request->all());
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;
use function Laravel\Prompts\table;

class FornecedorController extends Controller
{
    public function index(Request $request)
    {
        return view('fornecedores.index');
    }

    public function novofornecedor(Request $request)
    {
        return view('fornecedores.novofornecedor');
    }

    public function store(Request $request)
    {


    }
}

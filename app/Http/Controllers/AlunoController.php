<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alunos = [
            [    
                'id'          => 1,
                'nome'        => 'Israelly',
                'idade'       => 18, 
                'sexo'        => 'feminino',
                'cpf'         => '12345678912', 
                'rg'          => 3142143,
                'email'       => 'israellybmaia12@gmail.com',
                'senha'       => 123456
            ],

            [    
                'id'          => 2,
                'nome'        => 'Caua',
                'idade'       => 17, 
                'sexo'        => 'masculino',
                'cpf'         => '12345678913', 
                'rg'          => 3142144,
                'email'       => 'cacaua@gmail.com',
                'senha'       => 123456
            ],

            [    
                'id'          => 3,
                'nome'        => 'Jhennyfer',
                'idade'       => 18, 
                'sexo'        => 'feminino',
                'cpf'         => '12345678914', 
                'rg'          => 3142145,
                'email'       => 'cristine22@gmail.com',
                'senha'       => 123456
            ]
        ];

        $alunosList = array_column($alunos, 'nome');

        return view ('ListaAlunos', compact('alunos', 'alunosList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

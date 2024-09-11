<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $disciplinas = [
            [    
                'id'           => 1,
                'nome'         => 'Quimica',
                'professor'    => 'Nilson', 
                'escola'       => 'IFRO',
                'qtd_aluno'    => '200' 
            ],

            [    
                'id'           => 2,
                'nome'         => 'Matematica',
                'professor'    => 'Ozemar', 
                'escola'       => 'IFRO',
                'qtd_aluno'    => '180' 
        
            ],

            [    
                'id'           => 3,
                'nome'         => 'Filosofia',
                'professor'    => 'Mateus', 
                'escola'       => 'IFRO',
                'qtd_aluno'    => '300' 
        
            ]
            
        ];

        $disciplinaList = array_column($disciplinas, 'nome');

        return view ('ListaDisciplinas', compact('disciplinas', 'disciplinaList'));
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

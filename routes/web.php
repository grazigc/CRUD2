<?php


use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use Illuminate\Support\Facades\Route;


Route::get('/ListDisciplina', [DisciplinaController::class, 'index'])->name('disciplinas.index');
Route::get('/ListAluno', [AlunoController::class, 'index'])->name('alunos.index');
Route::get('/CadDisciplina', function () {
    return view('CadastrarDisciplina');
});
Route::get('/CadAluno', function () {
    return view('CadastrarAluno');
});
Route::get('/Home', function () {
    return view('home');
});
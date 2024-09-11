<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: center;
        }
        h1 {
            margin-bottom: 30px;
        }
        .button-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .btn {
            padding: 15px 30px;
            background-color: #2b153d;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .btn:hover {
            background-color: #2b153d;
        }
    </style>
</head>
<body>

    <h1>Home</h1>

    <div class="button-container">
        <a href="/CadAluno" class="btn">Cadastrar Aluno</a>
        <a href="/CadDisciplina" class="btn">Cadastrar Disciplina</a>
        <a href="/ListAluno" class="btn">Lista de Alunos</a>
        <a href="/ListDisciplina" class="btn">Lista de Disciplinas</a>
    </div>

</body>
</html>

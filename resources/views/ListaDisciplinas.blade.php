<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Disciplinas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <h1>Lista de Disciplinas</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Professor</th>
                <th>Escola</th>
                <th>Qtd de Alunos</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
            <tr>
                <td>{{ $disciplina['id'] }}</td>
                <td>{{ $disciplina['nome'] }}</td>
                <td>{{ $disciplina['professor'] }}</td>
                <td>{{ $disciplina['escola'] }}</td>
                <td>{{ $disciplina['qtd_aluno'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

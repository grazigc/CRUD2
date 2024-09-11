<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
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

    <h1>Lista de Alunos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
            <tr>
                <td>{{ $aluno['id'] }}</td>
                <td>{{ $aluno['nome'] }}</td>
                <td>{{ $aluno['idade'] }}</td>
                <td>{{ $aluno['sexo'] }}</td>
                <td>{{ $aluno['cpf'] }}</td>
                <td>{{ $aluno['rg'] }}</td>
                <td>{{ $aluno['email'] }}</td>
                <td>{{ $aluno['senha'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

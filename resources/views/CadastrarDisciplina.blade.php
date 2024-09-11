<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Disciplina</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .form-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .form-group {
            flex: 1;
            margin-right: 10px;
        }
        .form-group:last-child {
            margin-right: 0;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .submit-btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: #2b153d;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }
        .submit-btn:hover {
            background-color: #2b153d;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Cadastrar Disciplina</h1>

    <form action="#" method="post">
        <div class="form-container">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="professor">Professor</label>
                <input type="text" id="professor" name="professor" required>
            </div>
            <div class="form-group">
                <label for="escola">Escola</label>
                <input type="text" id="escola" name="escola" required>
            </div>
            <div class="form-group">
                <label for="quantidade-alunos">Quantidade de Alunos</label>
                <input type="number" id="quantidade-alunos" name="quantidade-alunos" required>
            </div>
        </div>

        <div class="button-container">
            <button type="submit" class="submit-btn">Cadastrar</button>
        </div>
    </form>

</body>
</html>

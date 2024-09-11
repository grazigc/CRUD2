<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno</title>
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
        input[type="text"], input[type="email"], input[type="number"], input[type="password"] {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .submit-btn {
            padding: 10px 20px;
            background-color: #2b153d;
            color: white;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #2b153d;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .form-section {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <h1>Cadastrar Aluno</h1>

    <form action="#" method="post">
        <!-- Primeira linha de formulários -->
        <div class="form-container form-section">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" id="idade" name="idade">
            </div>
            <div class="form-group">
                <label for="sexo">Sexo</label>
                <input type="text" id="sexo" name="sexo">
            </div>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="number" id="cpf" name="cpf">
            </div>
        </div>

        <!-- Segunda linha de formulários -->
        <div class="form-container form-section">
            <div class="form-group">
                <label for="rg">RG</label>
                <input type="number" id="rg" name="rg">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha">
            </div>
        </div>

        <!-- Botão de cadastro -->
        <div class="button-container">
            <button type="submit" class="submit-btn">Cadastrar</button>
        </div>
    </form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista dos produtos</title>
</head>
<body>
    
    <div>
        <nav>
            <ul>
                <li>HOME</li>
                <li>LISTA PRODUTOS</li>
            </ul>
        </nav>

        <div>
            <h1>Lista de Produtos</h1>
            <hr>

            <ul>

                @foreach ($productList as $productName)
                <li> {{ $productName }} </li>
                @endforeach

            </ul>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>PREÇO</th>
                        <th>CATEGORIA</th>
                    </tr>
                </thead>
                <TBody>
                    @foreach ($products as $product)
                    <tr>
                        <td> {{ $product['id'] }}</td>    
                        <td> {{ $product['name'] }}</td>    
                        <td> {{ $product['valor'] }}</td>    
                        <td> {{ $product['categoria'] }}</td>    
                    </tr>   
                    @endforeach
                </TBody>
            </table>
        </div>
    </div>

</body>
</html>
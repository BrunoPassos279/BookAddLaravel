<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca de livros</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            width: 100%;
            max-width: 450px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 24px;
            color: #111827;
            text-align: center;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        a {
            display: flex;
            width: 100%;
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            justify-content: center;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin-top: 10px;
        }

        a:hover {
            background-color:rgb(226, 247, 246);
        }

        a:active {
            background-color:rgb(2, 17, 65);
        }

        .link-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-link {
            color:rgb(255, 255, 255);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s ease;
            display: inline-flex;
            gap: 5px;
        }
    
        .btn-link:hover {
            color:rgb(3, 22, 61);
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Biblioteca de Livros</h1>
        <div class="link-container">
            <a class="btn-link" href="/book">Livros</a>
            <a class="btn-link" href="/book/create">Cadastrar Livro</a>
        </div>
    </div> 
</body>
</html>
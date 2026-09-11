<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
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

        label {
            display: block;
            margin-bottom: 6px;
            font-size: 14px;
            font-weight: 500;
            color: #4b5563;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.2s ease-in-out;
            outline: none;
            background-color: #f9fafb;
        }

        input:focus {
            border-color: #3b82f6;
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.15);
        }

        button {
            width: 100%;
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        button:active {
            background-color: #1e40af;
        }

        .link-container {
            text-align: center;
            margin-top: 20px;
        }

        .btn-link {
            color: #4b5563;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            transition: color 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .btn-link:hover {
            color: #2563eb;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Cadastrar Novo Livro</h1>

        <form action="/book" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nome do Livro</label>
                <input type="text" id="name" name="name" placeholder="Ex: The Caiballion" required>
            </div>

            <div class="form-group">
                <label for="price">Preço (R$)</label>
                <input type="number" id="price" name="price" step="0.01" placeholder="0,00" required>
            </div>

            <button type="submit">Salvar Livro</button>
        </form>

        <div class="link-container">
            <a href="/book" class="btn-link">← Visualizar Livros</a>
        </div>
    </div>
    
</body>
</html>

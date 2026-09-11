<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Livros</title>
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
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 850px;
        }

        /* Alerta de Sucesso */
        .alert-success {
            background-color: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
            padding: 14px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 15px;
            font-weight: 500;
            width: 100%;
        }

        .header-area {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            width: 100%;
        }

        h1 {
            font-size: 24px;
            color: #111827;
            font-weight: 600;
        }

        .btn-create {
            background-color: #2563eb;
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: background-color 0.2s ease, transform 0.1s ease;
            box-shadow: 0 2px 4px rgba(37, 99, 235, 0.2);
        }

        .btn-create:hover {
            background-color: #1d4ed8;
        }

        .btn-create:active {
            transform: scale(0.98);
        }

        .table-responsive {
            width: 100%;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th, td {
            padding: 16px 20px;
            font-size: 15px;
            vertical-align: middle;
        }

        th {
            background-color: #f9fafb;
            color: #4b5563;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e5e7eb;
        }

        td {
            color: #374151;
            border-bottom: 1px solid #f3f4f6;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background-color: #f9fafb;
        }

        .text-center {
            text-align: center;
            color: #9ca3af;
            padding: 32px;
            font-style: italic;
        }

        .price-tag {
            font-weight: 600;
            color: #111827;
        }

        /* Container de botões alinhados */
        .actions-cell {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .btn-edit {
            background-color: #e5e7eb;
            color: #1f2937;
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 13px;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .btn-edit:hover {
            background-color: #d1d5db;
        }

        .btn-edit:active {
            transform: scale(0.96);
        }

        .btn-delete {
            background-color: #ef4444;
            color: white;
            border: none;
            padding: 8px 14px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            font-size: 13px;
            transition: background-color 0.2s ease, transform 0.1s ease;
        }

        .btn-delete:hover {
            background-color: #dc2626;
        }

        .btn-delete:active {
            transform: scale(0.96);
        }
    </style>
</head>
<body>

    <div class="container">
        
        <!-- Alerta de sucesso dinâmico do Laravel -->
        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Topo com Alinhamento do Título e Botão -->
        <div class="header-area">
            <h1>Livros Disponíveis</h1>
            <a href="/book/create" class="btn-create">+ Cadastrar Livro</a>
        </div>

        <!-- Tabela Estilizada dentro de um Card -->
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Nome do Livro</th>
                        <th>Preço</th>
                        <th style="width: 180px;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($books as $book)
                        <tr>
                            <td>{{ $book->name }}</td>
                            <td class="price-tag">R$ {{ number_format($book->price, 2, ',', '.') }}</td>
                            <td>
                                <div class="actions-cell">
                                    <!-- Botão Editar -->
                                    <a href="/book/{{ $book->id }}/edit" class="btn-edit">Editar</a>

                                    <!-- Formulário para exclusão segura -->
                                    <form action="/book/{{ $book->id }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir o livro &quot;{{ $book->name }}&quot;?');" style="margin: 0;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-delete">Excluir</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center">Nenhum Livro cadastrado no banco de dados.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>

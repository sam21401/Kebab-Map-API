<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 36px;
            color: #343a40;
        }

        .btn-light {
            background-color: #f0f0f0;
            border: 1px solid #ced4da;
            margin-right: 10px;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        .btn-light:hover {
            background-color: #e2e6ea;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            font-size: 16px;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        a {
            text-decoration: none;
        }

        .btn-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h1>Welcome to the Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST" class="mt-4">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <div class="btn-container">
        <a href="{{ route('suggestions.index') }}">
            <button class="btn btn-light">Sugestie</button>
        </a>
        <a href="{{ route('kebabs.index') }}">
            <button class="btn btn-light">Kebaby</button>
        </a>
    </div>
</div>

</body>
</html>

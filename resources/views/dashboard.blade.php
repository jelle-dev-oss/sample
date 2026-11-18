
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>

    <style>
        body {
            font-family: sans-serif;
            background-color: #3b6c7c;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background-color: white;
            width: 350px;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
        }

        h2 {
            color: #200348;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin-bottom: 25px;
        }

        .btn {
            display: inline-block;
            background-color: #200348;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 15px;
        }

        .btn:hover {
            background-color: #4b1680;
        }

        form {
            margin-top: 15px;
        }
    </style>
</head>

<body>

    <div class="card">

        <h1>YOOHOOO WELCOME!</h1>

        <p>You are successfully logged in.</p>

        <a href="{{ route('books.index') }}" class="btn">
            Go to Books
        </a>

        <form action="{{ route('logout') }}" method="POST">
            
            <button type="submit" class="btn">
                Logout
            </button>
        </form>

    </div>

</body>
</html>
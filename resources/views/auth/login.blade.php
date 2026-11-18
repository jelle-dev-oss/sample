
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Login</title>

    <style>
        body {
            font-family: sans-serif;
            background-color: #3b6c7c;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .main-container {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .login-container, .info-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
        }

        .login-container {
            width: 300px;
        }

        .info-container {
            width: 230px;
        }

        h2, h3 {
            color: #050307;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            color: #000000;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        input:focus {
            border-color: #200348;
        }

        .btn {
            width: 100%;
            padding: 11px;
            background-color: #200348;
            color: white;
            border-radius: 6px;
            font-size: 15px;
        }


        .alert {
            background-color: #fcfcfc;
            color: #c0392b;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .test-user {
            color: #0a0505;
            font-size: 24px;
        }

        .test-user p {
            margin: 10px 0;
        }

        @media (max-width: 650px) {
            .main-container {
                flex-direction: column;
                padding: 20px;
            }

            .login-container, .info-container {
                width: 280px;
            }
        }
    </style>
</head>

<body>

<div class="main-container">

    <div class="login-container">

        <h2>TEST LOGIN</h2>

        @if($errors->any())
            <div class="alert">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif

        @if(session('error'))
            <div class="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST" id="loginForm">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email"
                       value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <button type="submit" class="btn" id="submitBtn">
                Login
            </button>
        </form>

    </div>

    <div class="info-container">

        <div class="test-user">
            <h3>Testing nga account</h3>

            <p><strong>Email:</strong> test@example.com</p>
            <p><strong>Password:</strong> password</p>
        </div>

    </div>

</div>

<script>
    document.getElementById('loginForm').addEventListener('submit', function() {
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerText = 'Logging in...';
    });
</script>

</body>
</html>

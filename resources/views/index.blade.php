<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Login</title>
    <!-- Include CSS, JavaScript, atau library-->
    <style>
        .center {
            text-align: center;
        }
        .border {
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .rounded {
            border-radius: 8px;
        }
        .px-3 {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
        .py-3 {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
        }
        .form-control {
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: black;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        .btn-primary {
            color: #fff;
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1rem;
            padding-right: 1rem;
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 0.25rem;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>
<body class="center">
    <div class="w-50 border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form method="POST" action="{{ route('loginCus') }}">
            @csrf
            @if ($errors->any())
                <script>
                    window.onload = function() {
                        alert("{{ $errors->first() }}");
                    };
                </script>
            @endif
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <br>
                <input type="text" name="username_cus" placeholder="Username" value="{{ old('username_cus') }}" class="form-control">
            </div>
            <br>
            <div class="mb-3">
                <label for="password-container" class="form-label">Password</label>
                <br>
                <input type="password" name="pw_cus" placeholder="Password" class="form-control password-input">
                <button type="button" class="toggle-password btn btn-outline-primary">Show</button>
            </div>
            <br>
            <div class="mb-3 d-grid">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            <br>
            <div class="mb-3">
                <a>Belum punya akun? </a>
                <a href="{{ route('register') }}">Daftar di sini.</a>
            </div>
        </form>
    </div>
    <footer class="center">
        &copy; JemberWonder
    </footer>
    <script>
        const togglePasswordBtns = document.querySelectorAll('.toggle-password');
        togglePasswordBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const passwordInput = btn.parentElement.querySelector('.password-input');
                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    btn.textContent = 'Hide';
                } else {
                    passwordInput.type = 'password';
                    btn.textContent = 'Show';
                }
            });
        });
    </script>
</body>
</html>

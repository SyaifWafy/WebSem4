<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Lupa Password Admin</title>
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
        <h1>Lupa Password Admin</h1>
        <form action="{{ route('admin.lupaPasswordAdmin') }}" method="post">
            @csrf
            @if ($errors->any())
                <script>
                    window.onload = function() {
                        alert("{{ $errors->first() }}");
                    };
                </script>
            @endif
            <div class="mb-3">
                <label for="username_admin" class="form-label">Username</label>
                <br>
                <input type="text" name="username_admin" placeholder="Username" value="{{ old('username_admin') }}" class="form-control">
            </div>
            <br>
            <div class="mb-3">
                <label for="pertanyaan" class="form-label">Pertanyaan Keamanan</label>
                <br>
                <select name="pertanyaan" class="form-control">
                    <option disabled selected>Pilih Pertanyaan</option>
                    <option value="Apa makanan favoritmu?">Apa makanan favoritmu?</option>
                    <option value="Apa minuman favoritmu?">Apa minuman favoritmu?</option>
                    <option value="Siapa nama hewan peliharaanmu?">Siapa nama hewan peliharaanmu?</option>
                    <option value="Apa warna favoritmu?">Apa warna favoritmu?</option>
                    <option value="Dimana kota lahirmu?">Dimana kota lahirmu?</option>
                </select>
            </div>
            <br>
            <div class="mb-3">
                <label for="jawaban" class="form-label">Jawaban</label>
                <br>
                <input type="text" name="jawaban" id="jawaban" placeholder="Jawaban" value="{{ old('jawaban') }}" class="form-control">
            </div>
            <br>
            <div class="mb-3">
                <label for="pw_admin" class="form-label">Password Baru</label>
                <br>
                <input type="password" name="pw_admin" id="pw_admin" placeholder="Password baru" class="form-control">
                <button type="button" class="toggle-password btn btn-outline-primary">Show</button>
            </div>
            <br>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Konfirmasi Password Baru</label>
                <br>
                <input type="password" name="password_confirm" id="password_confirm" placeholder="Konfirmasi password baru" class="form-control">
                <button type="button" class="toggle-password btn btn-outline-primary">Show</button>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Reset Password</button>
            <br>
            <br>
            <a href="{{ route('indexadmin') }}">Kembali</a>
        </form>
    </div>
    <footer class="center">
        &copy; JemberWonder
    </footer>
    <script>
        const togglePasswordBtns = document.querySelectorAll('.toggle-password');
        togglePasswordBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const passwordInput = btn.previousElementSibling;
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder - Register</title>
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
        <h1>Customer</h1>
        <h1>Daftar</h1>
        <form action="/tambah-customer" method="POST">
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
                <input type="username_cus" name="username_cus" class="form-control">
            </div>
            <br>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <br>
                <div class="password-container">
                    <input type="password" name="pw_cus" class="form-control password-input">
                    <button type="button" class="toggle-password">Show</button>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="password_confirm" class="form-label">Konfirmasi Password</label>
                <br>
                <div class="password-confirm-container">
                    <input type="password" name="password_confirm" class="form-control password-input" placeholder="Masukkan kembali password anda">
                    <button type="button" class="toggle-password">Show</button>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="fullname" class="form-label">Nama Lengkap</label>
                <br>
                <input type="fullname_cus" name="fullname_cus" class="form-control">
            </div>
            <br>
            <div class="mb-3">
                <label for="pertanyaan" class="form-label">Pertanyaan</label>
                <br>
                <div class="mb-3">
                    <select name="pertanyaan" class="form-control">
                        <option disabled selected>Pilih Pertanyaan</option>
                        <option value="Apa makanan favoritmu?">Apa makanan favoritmu?</option>
                        <option value="Apa minuman favoritmu?">Apa minuman favoritmu?</option>
                        <option value="Siapa nama hewan peliharaanmu?">Siapa nama hewan peliharaanmu?</option>
                        <option value="Apa warna favoritmu?">Apa warna favoritmu?</option>
                        <option value="Dimana kota lahirmu?">Dimana kota lahirmu?</option>
                    </select>
                </div>
            </div>
            <br>
            <div class="mb-3">
                <label for="jawaban" class="form-label">Jawaban</label>
                <br>
                <input type="jawaban" name="jawaban" class="form-control" placeholder="Perhatikan huruf kapitalnya...">
            </div>
            <br>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-primary">Daftar</button>
            </div>
            <br>
            <div class="mb-3">
                <a href="{{ ('logincustomer') }}">Kembali ke login</a>
            </div>
        </form>
    </div>
    <footer class="center">
        &copy; JemberWonder
    </footer>

    <!-- JavaScript -->
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

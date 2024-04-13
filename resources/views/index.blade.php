<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JemberWonder</title>
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
<body>
    <h1>Welcome to JemberWonder</h1>
    <h2>Wisata Alam</h2>
    <h2>Nikmati keindahan alam kota Jember yang asri</h2>
    <button class="btn btn-primary" onclick="window.location.href='{{ route('indexcus') }}'">Masuk</button>
    <button class="btn btn-primary" onclick="window.location.href='{{ route('registercus') }}'">Daftar</button>
</body>
</html>

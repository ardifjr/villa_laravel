
<!DOCTYPE html>


<html>
<head>
    
    <title>Edit Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 20px; /* Tambahkan padding atas untuk menyempurnakan tampilan */
        }

        .container-lg {
            padding: 20px; /* Tambahkan padding untuk membuat tampilan lebih responsif */
            max-width: 100%; /* Gunakan full-width pada layar kecil */
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        textarea {
            resize: vertical;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .cancel-btn {
            display: inline-block;
            margin-left: 10px;
            padding: 10px 20px;
            background-color: #ccc;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .cancel-btn:hover {
            background-color: #b3b3b3;
        }

        img {
            max-width: 200px;
            max-height: 200px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Tambahkan gaya lain yang mungkin Anda butuhkan */
    </style>
</head>
<body>
<div class="container-lg">
    <h1>Edit Pegawai</h1>

    <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data" class="row g-8">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ $pegawai->name }}" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $pegawai->email }}" required>
        </div>

        <!-- Tambahkan form fields untuk data lain yang ingin di-edit -->
        <div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>       
        <br>
        <br>
        <div>
            <a href="{{ route('pegawai.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>

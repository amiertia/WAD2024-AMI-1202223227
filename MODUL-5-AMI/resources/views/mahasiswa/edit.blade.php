<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f5f5f5; 
        }

        section {
            background-color: #ffffff; 
            width: 50%;
            margin: auto;
            margin-top: 50px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border: 2px solid #8B0000;
            border-radius: 10px;
            background-color: #ffffff;
        }

        .form-control:focus {
            border-color: #8B0000; 
            box-shadow: 0 0 10px rgba(139, 0, 0, 0.5); 
        }

        .btn-primary {
            background-color: #8B0000; 
            border-color: #8B0000;
            color: white;
        }

        .btn-primary:hover {
            background-color: #660000; 
            border-color: #660000;
        }

        .btn-secondary {
            background-color: #d1cdcd;
            border-color: #d1cdcd;
            color: #000; 
        }

        .btn-secondary:hover {
            background-color: #a9a8a8;
            border-color: #a9a8a8;
        }

        h2 {
            color: #8B0000; 
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            color: #8B0000; 
        }
    </style>
</head>

<body>
    <section>
        <h2><b>Edit Data Mahasiswa</b></h2>
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" name="nim" id="nim" class="form-control" value="{{ $mahasiswa->nim }}" required>
            </div>
            <div class="mb-3">
                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="form-control" value="{{ $mahasiswa->nama_mahasiswa }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $mahasiswa->email }}" required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}" required>
            </div>
            <div class="mb-3">
                <label for="dosen_id" class="form-label">Dosen Pembimbing</label>
                <select name="dosen_id" id="dosen_id" class="form-control" required>
                    <option value="" disabled selected>Pilih Dosen</option>
                    @foreach ($dosens as $dosen)
                        <option value="{{ $dosen->id }}" {{ $mahasiswa->dosen_id == $dosen->id ? 'selected' : '' }}>{{ $dosen->kode_dosen }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

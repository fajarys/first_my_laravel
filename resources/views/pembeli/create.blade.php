<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Pembeli</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="card-title">Tambah Data</div>
            <form action="{{ url('pembeli/tambah')}}" method="POST" class="form-row">
            @csrf

            <div class="form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama')
            <small class="text-danger"><i>{{ $message }}</i></small>
            @enderror
            </div>
            <div class="form-group">
            <label for="nomor" class="form-label">Nomor</label>
            <input type="text" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor" value="{{ old('nomor') }}">

            @error('nomor')
            <small class="text-danger"><i>{{ $message }}</i></small>
            @enderror
            </div>
            <button class="btn btn-success">Simpan</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
            <a href="{{ url('pembeli')}}" class="btn btn-primary">Kembali</a>
            </form>
        </div>
    </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
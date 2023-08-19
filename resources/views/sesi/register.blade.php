<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <br>
    <center>
    <div class="w-50 center border rounded px-3">
        <h1>Form Register</h1>
        <form action="/sesi/create" method="POST">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="name" value="{{ Session::get('nama') }}" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenis Kelamin</label>
                <select name="gender" class="form-control @error('jk') is-invalid @enderror">
                    <option value="">Pilih</option>
                    <option @selected(old('jk') == 'Laki-Laki') value="Laki-Laki">Laki-Laki</option>
                    <option @selected(old('jk') == 'Perempuan') value="Perempuan">Perempuan</option>
                </select>
                @error('jk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" value="{{ Session::get('tgl_lahir') }}" name="tgl_lahir" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">No WhatsApp</label>
                <input type="text" value="{{ Session::get('whatsapp') }}" name="no_wa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" value="{{ Session::get('alamat') }}" name="alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Provinsi</label>
                <input type="text" value="{{ Session::get('alamat') }}" name="alamat" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="kabupaten" class="form-label">Kabupaten</label>
                <input type="text" value="{{ Session::get('kabupaten') }}" name="kabupaten" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" value="{{ Session::get('kecamatan') }}" name="kecamatan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="kodepos" class="form-label">Kode Pos</label>
                <input type="text" value="{{ Session::get('kodepos') }}" name="kodepos" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="ktp" class="form-label">KTP</label>
                <input type="file" value="{{ Session::get('ktp') }}" name="ktp" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="sim" class="form-label">SIM</label>
                <input type="file" value="{{ Session::get('sim') }}" name="sim" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="stnk" class="form-label">STNK</label>
                <input type="file" value="{{ Session::get('stnk') }}" name="stnk" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="join" class="form-label">Tanggal Bergabung</label>
                <input type="date" value="{{ Session::get('tgl_gabung') }}" name="tgl_gabung" class="form-control" required>
            </div>
            <div class="mb-3 d-grid">
                <button name="submit" type="submit" class="btn btn-warning">Register</button>
            </div>
        </form>

    </div>
</center>
</body>
</html>

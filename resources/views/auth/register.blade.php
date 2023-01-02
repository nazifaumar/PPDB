@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/css/reg.css') }}">
</head>
<body>
    <div class="registration-form">
        <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" id="nisn" class="form-control item" @error('nisn') is-invalid @enderror  name="nisn" value="{{old('nisn')}}" autofocus placeholder="Masukan NISN">
               
                @error('nisn')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                    <option hidden>-- Pilih jenis kelamin -- </option>
                    <option value="perempuan">Perempuan</option>
                    <option value="laki-laki">Laki-laki</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nama lengkap">Nama Lengkap</label>
                <input type="text"  id="name" class="form-control item"  @error('name') is-invalid @enderror name="name" value="{{old('name')}}" autofocus placeholder="Masukan Nama Lengkap">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email"  id="email" class="form-control item"  @error('email') is-invalid @enderror name="email" value="{{old('email')}}" autofocus placeholder="Masukan Email Aktif">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="asal sekolah">Asal Sekolah</label>
                <select class="form-control" name="asal_sekolah" id="asal_sekolah">
                    <option hidden>Pilih asal sekolah</option>
                    <option value="">SMP Satu</option>
                    <option value="">SMP Dua</option>
                    <option value="">SMP Tiga</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Nomor Handphone</label>
                <input type="number" id="no" class="form-control item" name="no" autofocus placeholder="Contoh : 08 ----">
            </div>

            <div class="form-group">
                <label for="">Nomor HP Ayah</label>
                <input type="number" id="no_ayah" class="form-control item" name="no_ayah" autofocus placeholder="Contoh : 08 ----">
            </div>

            <div class="form-group">
                <label for="">Nomor HP Ibu</label>
                <input type="number" id="no_ibu" class="form-control item" name="no_ibu" autofocus placeholder="Contoh : 08 ----">
            </div>

            <div class="form-group">
                <label for="">Referensi</label>
                <select class="form-control " name="referensi" id="referesi" onclick="ref">
                    <option hidden>Pilih referensi</option>
                    <option value="">Guru - staff - laboran</option>
                    <option value="">Siswa Wikrama</option>
                    <option value="">Alumni Wikrama</option>
                    <option value="">Sosial media</option>
                </select>

            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Registrasi</button>
            </div>
        </form>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>

@endsection

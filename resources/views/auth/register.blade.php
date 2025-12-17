<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center" style="height:100vh;">
<div class="card shadow-lg p-4" style="width: 400px;">
    <h4 class="text-center mb-4">Register</h4>

    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first('Registrasi gagal!') }}
            Registrasi gagal, silahkan coba lagi.
        </div>
    @endif


    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <input type="text" name="full_name" class="form-control" placeholder="Full Name" required>
        </div>

        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>

        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="mb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
        </div>

            <input type="hidden" name="role" class="form-control" value="siswa" required>

        <select class="form-select mb-3" name="vark_type">
            <option value="" disabled selected>Pilih Tipe VARK</option>
            <option value="Visual">Visual</option>
            <option value="Auditory">Auditory</option>
            <option value="Reading/Writing">Reading/Writing</option>
            <option value="Kinesthetic">Kinesthetic</option>
        </select>

        <div class="mb-3">
            <button class="btn btn-primary w-100" type="submit">Daftar</button>
        </div>

        <p class="text-center">
            Sudah punya akun?
            <a href="{{ route('login.form') }}" class="text-indigo-600">Login di sini</a>
        </p>
    </form>
</div>
</body>
</html>

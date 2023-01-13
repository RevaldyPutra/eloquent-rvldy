<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Show</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <style>
      body{
        padding:20px;
      }
    </style>
</head>
<body>
    <h1>Profile</h1>
  @csrf
  <div class="form-group">
    <input type="text" name="nama" value="{{ $profiles->nama}}" disabled>
  </div>
  
  <div class="form-group">
    <input type="text" name="alamat"  value="{{ $profiles->alamat}}" disabled>
  </div>
  
    <a href="/profile"class="btn btn-info">KEMBALI</a>
  
</body>
</html>
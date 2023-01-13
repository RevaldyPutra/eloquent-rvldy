<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Data</title>
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
    <h1>Create Profile</h1>
<form action="/profile" method="POST">
  @csrf
    <div class="form-group">
    <input type="text" name="nama" placeholder="Masukan Nama">
    </div>
    <div class="form-group">
    <input type="text" name="alamat" placeholder="Masukan Alamat">
    </div>
    <button class="btn btn-info"type="submit">Submit</button>
  </form>
</body>
</html>
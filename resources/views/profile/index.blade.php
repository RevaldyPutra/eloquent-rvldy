<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      body{
        padding:20px;
      }
      a{
        transition:1s;
      }
      a:hover{
        border-radius:10px;
      }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Halaman index Profile</h1>
    <em>
    <p class="float-right">© Revaldy Putra Pradipta Barus</p>
    </em>
    <a href="/profile/create" class="btn btn-info mb-2">CREATE</a>
    <a href="/post" class="btn btn-secondary mb-2">Halaman Post</a>
    <table class="table table-bordered table-hover">
        <thead>
            <tbody>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Actions</th>
                </tr>
            </tbody>
        </thead>
        @foreach ($profiles as $profile)
        <tbody>
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $profile->nama }}</td>
            <td>{{ $profile->alamat }}</td>
            <td>
            <form action="{{ route('profile.destroy', [$profile->id]) }}"method="POST">
            <a class="btn btn-primary"href="{{ route('profile.show', $profile->id)}}">Detail</a>
            <a class="btn btn-warning"href="{{ route('profile.edit', $profile->id)}}">Edit</a>
            @csrf
            @method('DELETE')   
           <input class="btn btn-danger"type="submit"value="Delete">
           </form>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>

</body>
</html>
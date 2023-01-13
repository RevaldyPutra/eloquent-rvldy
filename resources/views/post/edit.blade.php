<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit</title>
</head>
<body>
  <h1>Halaman Edit</h1>
  <form action="/post/{{ $showpostsbyid->id }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="title" placeholder="Title"value="{{ $showpostsbyid->title }}">
    <input type="text" name="body" placeholder="Body"value="{{ $showpostsbyid->body }}">
    <button type="submit">Submit</button>
  </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Post</title>
</head>
<body>
  <h1>Halaman Index Post</h1>

  <table>
  <thead>
    <tbody>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Body</th>
          <th>Actions</th>
        </tr>
  </thead>
    <thead>
      @forelse($dataPost as $item=>$value)
      <tr>
      <td>{{ $item + 1}}</td>
      <td>{{ $value->title}}</td>
      <td>{{ $value->body}}</td>
      <td>
        <form action="/post/{{$value->id}}"method="POST">
          <a href="post/{{$value->id}}">Details</a>
          <a href="post/{{$value->id}}/edit">Edit</a>
          @csrf
          @method('DELETE')
           <input type="submit" class="btn btn-danger" value="Delete">
          </form>
            </td>
         </tr>
         @empty
         <tr>
          <td>Data Masih Kosong</td>
        </tr>
        @endforelse
        </form>
      </td>
      </tr>
    </tbody>
  </table>
</body>
</html>
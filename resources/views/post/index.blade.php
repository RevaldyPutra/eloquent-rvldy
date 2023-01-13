<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Post</title>
  <style>
    a{
      text-decoration:none;
      color:red;
      transition:1s;
    }
    button{
      padding:10px;
      background:white;
      text-decoration:none; 
      border-radius:15px;
      transition:1s;
      border:none;
    }
    button:hover{
      background:cyan;
      color:white;
      border:none;
    }
    a:hover{
      padding:10px;
    }
    .submit{
      background:white;
      border:0px;
    }
    h1{
      transition:1s;
    }
    h1:hover{
      background:cyan;
      border-radius:5px;
      color:white;
    }
    .detail{
      color:black;
      background:lightblue;
      transition:1s;
      padding:5px;
    }
    .edit{
      color:black;
      padding:5px;
      background:yellow;
    }
    .delete{
      color:black;
      padding:5px;
      background:red;
      border:none;
      transition:1s;
    }
    .delete:hover{
      padding:10px;
    }
    .create{
      color:black;
      background:cyan;
      padding:9px;
    }
  </style>
</head>
<body>
  <span>
    <h1>Halaman Index Post</h1>
  </span>
  
  <button>
    <a class="create"href="/post/create">CREATE</a>
 </button>
  <button>
    <a class="create"href="/profile">Halaman Profile</a>
 </button>
  <br>
  <table>
  <thead>
    <tbody>
        <tr>
          <th>No</th>
          <th>Title</th>
          <th>Body</th>
          <th>Actions</th>
        </tr>
    </tbody>
  </thead>
      @forelse($dataPost as $item=>$value)
      <tr>
      <td>{{ $item + 1}}</td>
      <td>{{ $value->title}}</td>
      <td>{{ $value->body}}</td>
      <td>
        <form action="/post/{{$value->id}}"method="POST">
          <a class="detail"href="post/{{$value->id}}">Details</a>
          <a class="edit"href="post/{{$value->id}}/edit">Edit</a>
          @csrf
          @method('DELETE')
           <input class="delete"type="submit"value="Delete">
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
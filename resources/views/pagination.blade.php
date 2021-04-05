<h1>Hello From Pagination Components</h1>

<table>
    <tr>
      <th>FirstName</th>
      <th>Lastname</th>
      <th>Email</th>
      <th>Status</th>
      <th>createdAt</th>
      <th colspan="2">Operations</th>
    </tr>
    @foreach($users as $user)
        <tr>
          <td>{{$user['firstName']}}</td>
          <td>{{$user['lastName']}}</td>
          <td>{{$user['email']}}</td>
          <td>{{$user['status']}}</td>
          <td>{{$user['createdAt']}}</td>
          <td><a href={{"delete/" .$user['id']}} >DELETE</a></td>
          <td><a href={{"edit/" .$user['id']}}>EDIT</a></td>
        </tr>
    @endforeach
</table>

<span> {{$users->links()}} </span>

  <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 60%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even) {
        background-color: #dddddd;
        }
  </style>
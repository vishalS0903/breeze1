<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
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
</head>
<body>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<center><h2>user form Table</h2></center>

<table>
  <tr>
    <th>sr No</th>
    <th>title</th>
    <th>discription</th>
    <th>Action</th>
  </tr>
  @foreach ($product as $v)
  <tr>
    <td>{{$v->id}}</td>
    <td>{{$v->text}}</td>
    <td>{{$v->description}}</td>

    <td>
        <a href="{{Route('edit', $v->id)}}"><button class="btn btn-success">Edit</button></a>
        <a href="{{Route('delete', $v->id)}}"><button class="btn btn-danger">delete</button></a>
        </td>

  </tr>

  @endforeach


</table>

</body>
</html>
</x-app-layout>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Breeze </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>contact Information</h2>

  <form action="{{Route('store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="text">Title:</label>
      <input type="text" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter text" name="text">
    </div>
    <div class="form-group">
      <label for="description">description:</label> <br>
      <textarea name="description" id="description" cols="100" class="form-check-input" rows="10" placeholder="Enter your query" ></textarea>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html> --}}
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Breeze </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


    <div class="container">
      <h2>contact Information</h2>
       @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
      @endif
      <form action="{{Route('store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="text">Title:</label>
          <input type="text" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter text" name="text" value="{{old('text')}}">
        </div>
        <div class="form-group">
          <label for="description">description:</label> <br>
          <textarea name="description" id="description" cols="100" class="form-check-input" rows="10" placeholder="Enter your query" >{{old('description')}} </textarea>
        </div>
        <div class="form-group">
            <label for="text">status:</label>
            <input type="text" class="form-control" id="status" aria-describedby="emailHelp" placeholder="Enter status" name="status" value="{{old('status')}}">
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>


</x-app-layout>

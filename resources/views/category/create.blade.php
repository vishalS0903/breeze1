    @extends('layouts.master')
    @section('content')


    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Category</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Category v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>


    <div class="container">
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif




    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Add Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{Route('category.store')}}" method="POST">
            @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" select id="status" class="form-control" >
                    <option value="{{old('status')}}" class="option_color">Select Status</option>
                    <option value="1">Active</option>
                    <option value="0">Deactive</option>
                </select>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    <div class="card-footer">
        <a href="{{route('category.index')}}"><button  class="btn btn-primary">back</button></a>
    </div>
    </div>
    </div>
    @endsection

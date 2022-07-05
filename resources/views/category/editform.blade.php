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
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
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
</div>
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Data</h3>
        </div>


    <form action="{{route('category.update',$product->id)}}" method="POST">
        @csrf
        <div class="card-body">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name" value="{{$product->name}}">
        </div>

        <div class="form-group">
            <label for="title">Status</label>
            <select name="status" select id="status" class="form-control" >
                <option value="" class="option_color">Select Status</option>
                <option value="1" @if ($product->status==1) selected='selected' @endif>Active</option>
                <option value="0"  @if ($product->status==0) selected='selected' @endif>Deactive</option>
            </select>
          </div>
        </div>
          <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
      </form>
      <div class="card-footer">
        <a href="{{route('category.index')}}"><button class="btn btn-primary">back</button></a>
    </div>
    </div>
</div>


@endsection

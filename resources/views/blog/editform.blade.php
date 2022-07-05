@extends('layouts.master')
@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>


<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Blogs</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('welcome')}}">Home</a></li>
            <li class="breadcrumb-item active">Blogs </li>
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
            <h3>Blog Edit Form</h3>
        </div>

    <form action="{{route('blog.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
        <div class="form-group">

          <label for="text">Title:</label>
          <input type="text" class="form-control" id="text" aria-describedby="emailHelp" placeholder="Enter text" name="title" value="{{$product->title}}">
        </div>
        <div class="form-group">
          <label for="description">description:</label> <br>
          <textarea name="description" id="body" cols="100" class="form-control" rows="10" placeholder="Enter your query" value="{{$product->description}}">{{$product->description}}</textarea>
        </div>


        <div class="form-group">
            <label for="title">select Category</label>
            <select name="category" select id="category" class="form-control" >

                {{-- <option value="{{old('category')}}" class="option_color">Select Category</option> --}}
                @foreach ($categories as $c)

                <option value="{{$c->id}}" @if($c->id == $product->category->id) selected='selected' @endif>{{$c->name}}</option>

                @endforeach
            </select>

        </div>

        <div class="form-group">
            <label for="title">Status</label>
            <select name="status" select id="status" class="form-control" >
                <option value="" class="option_color">Select Status</option>
                <option value="1" @if ($product->status==1) selected='selected' @endif>Active</option>
                <option value="0"  @if ($product->status==0) selected='selected' @endif>Deactive</option>
            </select>
          </div>
          <div class="form-group">
            <label for="image"> Image</label>
            <input type="file" class="form-control" name="image" placeholder="upload profile image" value="{{$product->image}}">
          </div>
        </div>
          <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
      </form>
      <div class="card-footer">
        <a href="{{route('blog.index')}}"><button type="submit" class="btn btn-primary">back</button></a>
    </div>
    </div>
    </div>
    <script>
        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
        console.error( error );
        } );
        </script>
@endsection

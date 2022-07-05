



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
  <div class="row">
     <div class="col-12">

         @if(session()->has('message'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
             <strong>{{ session()->get('message') }}</strong>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>

     @endif

       <div class="card">
         <div class="card-header">
           <h3 class="card-title">Category Table</h3>

           <div class="card-tools">
             <div class="input-group input-group-sm" style="width: 150px;">
                 <a href="{{Route('category.create')}} "><button class="btn btn-info">Add</button></a>

               </div>

           </div>
         </div>
         <!-- /.card-header -->
         <div class="card-body table-responsive p-0">
             <table class="table table-hover text-nowrap">
               <thead>
                 <tr>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Status</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>
                 @foreach ($product as $v)
               <tr>
                 <td>{{$v->id}}</td>
                 <td>{{$v->name}}</td>
                 <td>
                     @if($v->status==1)
                     <span class="badge badge-primary">Active</span>

                     @else
                     <span class="badge badge-danger">Deactive</span>
                     @endif
                 </td>
                 <td>
                     <a href="{{Route('category.editform', $v->id)}}"><button class="btn btn-success">Edit</button></a>
                     <a href="{{Route('caregory.delete', $v->id)}}"><button class="btn btn-danger">delete</button></a>
                     </td>
                   </tr>
               @endforeach

             </tbody>
           </table>
           {{$product->links()}}
         </div>
         <!-- /.card-body -->
       </div>
       <!-- /.card -->
     </div>
   </div>
 </div>
 @endsection

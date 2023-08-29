@extends('backend.layout.master')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
     @include('backend.sessionMsg')
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Job Portal Dashboard</h3>
              <a href="{{route('category.create')}}" class="float-right btn btn-outline-dark btn-sm mb-2"><i class="fas fa-plus-square"></i></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                  <th>Category Name</th>
                  <th>Status</th>
                 
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($category as $key=>$item)
                <tr>
                   
                    <td>{{++$key}}</td>
                    <td>
                        {{$item->name}}
                    </td>
                    <td> 
                        @if ($item->status == 0)
                            <p class="text-secondary">InActive</p>
                        @else
                        <p class="text-success">Active</p>
                        @endif
                    </td>
                 
                    <td>
                        <a href="{{route('category.edit',[$item])}}"><button class="btn btn-outline-info btn-sm"><i class="fas fa-pen-square"></i></button></a>
                    
                        <form action="{{route('category.destroy',[$item])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>
            
                </tr>
                @endforeach
      
               
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Status</th>
                   
                    <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection
 @extends('admin/layouts/app')
@section('main-content')
 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>
             @include('includes/message')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  action="{{route('category.update',$category->id)}}" method="post">
                  {{csrf_field()}}
                    {{method_field('PATCH')}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Category Title</label>
                    <input type="text" class="form-control" id="name" value="{{$category->name}}" placeholder="Enter Category title" name="name">
                  </div>
                  
                   <div class="form-group">
                    <label for="slug">Category Slug</label>
                    <input type="text" class="form-control" id="slug" value="{{$category->slug}}" placeholder="Enter Category slug" name="slug">
                  </div>
                                    
                
                <!-- /.card-body -->
                     
       
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                     <a class="btn btn-danger" href="{{route('category.index')}}">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
 
      <!-- ./row -->
    </section>
    <!-- /.content -->

  @endsection
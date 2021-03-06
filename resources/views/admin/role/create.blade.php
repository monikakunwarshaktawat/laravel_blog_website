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
                <h3 class="card-title">Roles</h3>
              </div>
                @include('includes/message')
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('role.store')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Role</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter role " name="name">
                  </div>
                  
                    <div class="row">
                <div class="col-lg-4">
                  <label for="name">Posts Permissions</label>
                  @foreach ($permissions as $permission)
                    @if ($permission->for == 'post')
                      <div class="checkbox">
                        <p><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</p>
                      </div>
                    @endif
                  @endforeach
                </div>
                <div class="col-lg-4">
                  <label for="name">User Permissions</label>
                    @foreach ($permissions as $permission)
                      @if ($permission->for == 'user')
                        <div class="checkbox">
                          <p><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</p>
                        </div>
                      @endif
                    @endforeach
                </div>

                <div class="col-lg-4">
                  <label for="name">User Permissions</label>
                    @foreach ($permissions as $permission)
                      @if ($permission->for == 'other')
                        <div class="checkbox">
                          <p><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</p>
                        </div>
                      @endif
                    @endforeach
                </div>
              </div>
                                    
                
                <!-- /.card-body -->
                     
       
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary mr-5">Submit</button>
                  <a class="btn btn-danger" href="{{route('role.index')}}">Back</a>
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
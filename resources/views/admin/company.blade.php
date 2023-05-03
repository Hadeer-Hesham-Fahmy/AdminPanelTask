<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        
        .input_color
        {
            color:black;
            background-color: white;
        }
        form li
        {
            list-style-type: none;
            padding-bottom: 40px;
        }
        

    </style>

  </head>
  <body>
    <div class="container-scroller">
        
        <!-- partial -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <div class="main-panel" >
            <div class="content-wrapper text-center" >
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
                    </button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <div class=" text-center p-t-3" >
                    <h2 class="h2 pb-5">Add Company</h2>
                </div>
                <div class="w-50 d-inline-block form-group">
                    <form action="{{ url('/add_company') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <li>
                        <input type="text" class="input_color bg-light input-group rounded form-control" name="company_name" placeholder="Write Company Name">
                            @if ($errors->has('company_name'))
                            <span class="text-danger form-control">{{ $errors->first('company_name') }}</span>
                                
                            @endif
                        </li>
                        <li>
                        <input type="email" class="input_color bg-light input-group rounded form-control" name="email" placeholder="Write Company Email">
                        </li>

                        <li>
                        <input type="url" class="input_color bg-light input-group rounded form-control" name="website" placeholder="Company Website URL">
                        </li>
                        <li>
                            <input type="file" class="w-60 input-group rounded form-control" name="path" placeholder="Upload Company Logo">
                            @if ($errors->has('path'))
                            <span class="text-danger">{{ $errors->first('path') }}</span>
                                
                            @endif
                        </li>
                        <li>
                        <input type="submit" class="btn btn-primary rounded " name="submit" value="Add Company">
                        </li>
                    </form>
                </div>

                <table class="m-auto text-center w-50 mt-10 table table-bordered">
                    <div>
                    <tr class="table-dark">
                        <td>Company Id</td>
                        <td>Company Name</td>
                        <td>Email</td>
                        <td>Logo</td>
                        <td>Delete</td>
                        <td>Edit</td>
                    </tr>
                    @foreach ($companies as $data)
                        
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td ><a href="{{ $data->website }}">{{ $data->company_name }}</a></td>
                        <td>{{ $data->email }}</td>
                        <td >     
                            @if ($data->path)
                                
                            <img alt="" src="{{ asset('/storage/logo/'. $data->path) }}">
                            
                            @endif                           
                        </td>
                        <td>
                            <a onclick="return confirm('Are You Sure To Delete This')" class="btn btn-danger" href="{{ url('delete_company', $data->id) }}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ url('update_company',$data->id) }}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                    </div>
                </table>
                <div class="m-auto p-3 text-center w-50">
                 
                    {{ $companies->onEachSide(1)->links()}}
                
               </div>
            </div>
        </div>
       
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
  </body>
</html>
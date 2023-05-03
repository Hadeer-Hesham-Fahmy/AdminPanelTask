<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">

    @include('admin.css')

    <style type="text/css">
        
        .input_color
        {
            color:black;
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
                <div class="text-center pt-4" >
                    <h2 class="h2 pb-5">Update Company</h2>
                </div>
                <div class="w-50 d-inline-block form-group">
                    <form action="{{ url('/update_company_confirm',$company->id) }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        <li>
                        <input type="text" class="input_color bg-light input-group rounded form-control" name="company_name" placeholder="Write Company Name" value="{{ $company->company_name }}">
                            @if ($errors->has('company_name'))
                            <span class="text-danger form-control">{{ $errors->first('company_name') }}</span>
                                
                            @endif
                        </li>
                        <li>
                        <input type="email" class="input_color  bg-light input-group rounded form-control" name="email" placeholder="Write Company Email" value="{{ $company->email }}">
                        </li>

                        <li>
                        <input type="url" class="input_color  bg-light input-group rounded form-control" name="website" placeholder="Company Website URL" value="{{ $company->website }}">
                        </li>
                        <li>
                            @if ( $company->path)
                                
                            <img class="m-auto w-50 h-50 form-control" src="{{ asset('/storage/logo/'. $company->path) }}">
                            
                            @endif
                            
                            <input type="file" class="w-60 input-group rounded form-control" value="{{ asset('/storage/logo/'. $company->path) }}" name="path" placeholder="Change Company Logo">
                            


                            @if ($errors->has('path'))
                            <span class="text-danger">{{ $errors->first('path') }}</span>
                                
                            @endif
                        </li>
                        <li>
                        <input type="submit" class="btn btn-primary rounded " name="submit" value="Update Company">
                        </li>
                    </form>
                </div>

                    
            </div>
        </div>
       
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
  </body>
</html>
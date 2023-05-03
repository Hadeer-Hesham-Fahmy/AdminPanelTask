<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style type="text/css">
        .text_color
        {
            color:black;
            padding-bottom: 20px;
            margin-bottom: 15px;
        }
        label
        {
            width: 200px;
        }
        .div_design
        {
            padding-bottom: 15px;
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


                <div class="text-center bt-3 form-group w-50 d-inline-block ">
                    <h1 class="h2 pb-5">Add Employee</h1>
                    <form action="{{ url('/add_employee') }}" method="POST">
                        @csrf
                    <div class="div_design">
                        <label class="col-form-label">First Name :</label>
                        <input class="text_color bg-light rounded form-control col-4 d-inline " type="text" name="firstname" placeholder="Write Your First Name"> 
                        @if ($errors->has('firstname'))
                        
                        <span class="text-danger form-control">{{ $errors->first('firstname') }}</span>
                        @endif
                    </div>
                    <div class="div_design">
                        <label>Last Name :</label>
                        <input class="text_color bg-light rounded form-control col-4 d-inline" type="text" name="lastname" placeholder="Write Your Last Name"> 
                        @if ($errors->has('lastname'))

                        <span class="text-danger form-control">{{ $errors->first('lastname') }}</span>
                            
                        @endif
                    </div>
                    <div class="div_design">
                        <label>Email :</label>
                        <input class="text_color bg-light rounded form-control col-4 d-inline" type="email" name="email" placeholder="Write Your Email"> 
                    </div>
                    <div class="div_design">
                        <label>Phone Number :</label>
                        <input class="text_color bg-light rounded form-control col-4 d-inline" type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" name="phone" placeholder="0123-456-7890"> 
                    </div>
                    <div class="div_design">
                        <label>Employee Company :</label>
                        <select class="text_color bg-light rounded p-auto form-control col-4 d-inline bg-white" name="company">
                            <option value="" selected="">Add a company here</option>
                            @foreach ($company as $company)
                                
                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('company'))
    
                            <span class="text-danger form-control">{{ $errors->first('company') }}</span>
                        
                        @endif
                    </div>
                    <div class="div_design">
                        <input type="submit" value="Add Employee" class="btn btn-primary">
                    </div>
                </form>
                </div>

            </div>
        </div>
       
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
  </body>
</html>
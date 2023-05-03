<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
                    <h1 class="h2 pb-5">Update Employee</h1>
                    <form action="{{ url('/update_employee_confirm',$employee->id) }}" method="POST">
                        @csrf
                    <div class="div_design">
                        <label class="col-form-label ">First Name :</label>
                        <input class="text_color  bg-light rounded form-control col-4 d-inline " type="text" name="firstname" placeholder="Write Your First Name" value="{{ $employee->firstname }}"> 
                        @if ($errors->has('firstname'))
                        
                        <span class="text-danger form-control">{{ $errors->first('firstname') }}</span>
                        @endif
                    </div>
                    <div class="div_design">
                        <label>Last Name :</label>
                        <input class="text_color  bg-light rounded form-control col-4 d-inline" type="text" name="lastname" placeholder="Write Your Last Name" value="{{ $employee->lastname }}"> 
                        @if ($errors->has('lastname'))

                        <span class="text-danger form-control">{{ $errors->first('lastname') }}</span>
                            
                        @endif
                    </div>
                    <div class="div_design">
                        <label>Email :</label>
                        <input class="text_color  bg-light rounded form-control col-4 d-inline" type="email" name="email" placeholder="Write Your Email" value="{{ $employee->email}}"> 
                    </div>
                    <div class="div_design">
                        <label>Phone Number :</label>
                        <input class="text_color  bg-light rounded form-control col-4 d-inline" type="text" name="phone" placeholder="Write Your Phone Number" value="{{ $employee->phone}}"> 
                    </div>
                    <div class="div_design">
                        <label>Employee Company :</label>
                        <select class="text_color rounded p-auto form-control col-4 d-inline bg-white" name="company">
                            <option value="{{ $employee->company }}" selected="">{{ $employee->company->company_name}}</option>
                            @foreach ($company as $company)
                                
                            <option value="{{ $company->id }}">{{ $company->company_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="div_design">
                        <input type="submit" value="Update Employee" class="btn btn-primary">
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
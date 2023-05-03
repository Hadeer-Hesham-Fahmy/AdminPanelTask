<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
        
        <!-- partial -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <div class="main-panel " >
            <div class="content-wrapper text-center" >
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x
                    </button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <h2 class="text-center h2 bt-5 mb-5">All Employees</h2>
                <table class="m-auto text-center w-50 table table-bordered">
                    <tr class="table-dark">
                        <th>Employee Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Company</th>
                        <th>Delete</th>
                        <th>Edit</th>

                    </tr>
                    @foreach ($employees as $employee)
                        
                    
                    <tr>
                        <td>{{ $employee->id ?? ''}}</td>
                        <td>{{ $employee->firstname ?? ''}}</td>
                        <td>{{ $employee->lastname ?? ''}}</td>
                        <td>{{ $employee->email ?? ''}}</td>
                        <td>{{ $employee->phone ?? ''}}</td>
                        <td>{{ $employee->company->company_name ?? ''}}</td>
                        <td>

                            <a class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This')" href="{{ url('delete_employee', $employee->id) }}">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{ url('update_employee',$employee->id) }}">Edit</a>
                        </td>
                    </tr>

                    
                    @endforeach
                    
                </table>

                <div class="m-auto text-center w-50 p-5">
                 
                     {{ $employees->onEachSide(1)->links() }}
                 
                </div>
            </div>
        </div>
       
       
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   
  </body>
</html>
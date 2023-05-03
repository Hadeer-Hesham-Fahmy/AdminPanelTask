<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Http\Requests\StoreCompany;
use App\Http\Requests\StoreEmployee;

class AdminController extends Controller
{
    public function view_company()
    {
        $companies = company::paginate(10);
        return view('admin.company', compact('companies'));
    }


    public function add_company(StoreCompany $request)
    {
        $data = new Company;
        $data->company_name=$request->company_name;
        $data->email=$request->email;
        $data->website=$request->website;

         

        if($request->path)
        {
            $path = $request->path;
            $imagename=time(). '.' . $path->getClientOriginalExtension();
            $request->path->storeAs('public/logo', $imagename);
            $data->path=$imagename;
        }
        

        $data->save();
        return redirect()->back()->with('message','Company Added Successfully');
    }


    public function delete_company($id)
    {
        $data=company::find($id);
        $data->delete();
        return redirect()->back()->with('message','Company Deleted Successfully');
    }


    public function view_employee()
    {
        $company= Company::all();
        return view('admin.employee', compact('company'));
    }


    public function add_employee(StoreEmployee $request)
    {
        $employee = new Employee;

        $employee->firstname=$request->firstname;
        $employee->lastname=$request->lastname;
        $employee->email=$request->email;
        $employee->phone=$request->phone;
        $employee->company_id=$request->company;
        $employee->save();

        return redirect()->back()->with('message','Employee Created Successfully');
    }


    public function show_employee()
    {
        $employees=Employee::paginate(10);
        $company= Company::all();
        return view('admin.show_employee', compact(['employees','company']));
    }

    public function delete_employee($id)
    {
        $employee=employee::find($id);
        $employee->delete();
        return redirect()->back()->with('message','Employee Deleted Successfully');
    }

    public function update_employee($id)
    {
        $employee=employee::find($id);
        $company=company::all();
        return view('admin.update_employee',compact('employee','company'));
    }

    public function update_company($id)
    {
        $company=company::find($id);
        $employee=employee::all();
        return view('admin.update_company',compact('company', 'employee'));
    }
    
    public function update_employee_confirm(StoreEmployee $request, $id)
    {   
        $employee=employee::find($id);
        $employee->firstname=$request->firstname;
        $employee->lastname=$request->lastname;
        $employee->company_id=$request->company;
        
        if($request->email)
        {
        $employee->email=$request->email;
        }else {
            $employee->email=null;
        }

        if($request->phone)
        {
        $employee->phone=$request->phone;
        }else {
            $employee->phone=null;
        }
        $employee->save();
        return redirect()->back()->with('message','Employee Updated Successfully');
        
    }

    public function update_company_confirm(StoreCompany $request, $id)
    {
        $company=company::find($id);
        $company->company_name=$request->company_name;
        $company->email=$request->email;
        $company->website=$request->website;
        
        if($request->path)
        {
        $path=$request->path;
        $imagename=time(). '.' .$path->getClientOriginalExtension();
        $request->path->storeAs('public/logo', $imagename);
        $company->path=$imagename;
        }

        $company->save();
        return redirect()->back()->with('message','Company Updated Successfully');
        
    }
}

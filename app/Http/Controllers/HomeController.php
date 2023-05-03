<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Company;
use App\Models\Employee;

class HomeController extends Controller
{
    public function index()
    {
        $companies=Company::all();
        return view('home.userpage',compact('companies'));
    }
    public function redirect()
    {
        
        
        $usertype=Auth::user()->usertype;
        if($usertype=='1')
        {
            $total_employee=employee::all()->count();
            $total_company=company::all()->count();
            $total_user=user::all();
            return view('admin.home', compact('total_employee', 'total_company', 'total_user'));
        }
        else
        {
            return view('home.userpage');
        }
    }

    
     

    
}

<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        return view('admin-pages.user.index');
    }

    public function create(){
        return view('admin-pages.user.create');
    }

    public function store(Request $request){
        
    }

    public function edit(){
        return view('admin-pages.user.edit');
    }
    
    public function update(Request $request){ 
        
    }
    
    public function destroy(){
        
    }

    public function getAllUserData(){
       
        if(request()->ajax())
        {
            return datatables()->of(User::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<a href="/admin/users/'.$data->id.'/edit" class="btn btn-warning">Edit</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a    href="/admin/users/'.$data->id.'/delete" class="btn btn-danger">Delete</a>';
                        return $button;
                    })->editColumn('status', function($data) {
                        if($data->userStatus == 1){
                            return "Active";
                        }else{
                            return "Inactive";
                        }
                    })->rawColumns(['action'])
                    ->make(true); 
            
           
        }
        
    }


}

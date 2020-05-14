<?php

namespace App\Http\Controllers\Admin;

use Yajra\Datatables\Datatables;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin-pages.contact.index');
    }
    
    public function view($id)
    {   
        $contact = Contact::findOrFail($id);
        $contact->status = 1;
        $contact->save();
        
        return view('admin-pages.contact.view', compact('contact'));
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        
        $contact = Contact::findOrFail($id);
        $contact->delete();
        toast('Contact deleted','success')->autoClose(5000);
        return redirect()->route('contacts.index');
    }

    public function getAllContactData(){
       
        if(request()->ajax())
        {
            return datatables()->of(Contact::latest()->get())
                    ->addColumn('action', function($data){
                        $button = '<a href="/admin/contact-list/'.$data->id.'/view" class="btn btn-warning">View</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<a    href="/admin/contact-list/'.$data->id.'/delete" class="btn btn-danger">Delete</a>';
                        return $button;
                    })->editColumn('status', function($data) {
                        if($data->status == 1){
                            return "Read";
                        }else{
                            return "Unread";
                        }
                    })
                    ->rawColumns(['action'])
                    ->make(true); 
            
           
        }
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\countrie;
use Illuminate\Http\Request;
use App\Mail\welcome;

use Hash;
use Session;
use Mail;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('website.signup');
        
		$countrie=countrie::all();  
        return view('website.signup',['countrie'=>$countrie]);
    }
	public function login(Request $request)
    {
        return view('website.login');
    }
	
	public function loginauth(Request $request)
    {
        $unm=$request->unm;
		$data=customer::where('unm','=',$unm)->first();
       
        if($data)
		{
			
			if(Hash::check($request->pass,$data->pass))
			{
				if($data->status=="unblock")
				{
					//create session
					session()->put('userid',$data->id);
					session()->put('unm',$data->unm);
					session()->put('name',$data->name);
					return redirect('/');
					
				}
				else
				{
					return redirect('/login')->with('failed','Login Failed Due To Blocked Account');
				}
				
			}
			else
			{
				return redirect('/login')->with('failed','Pasword Not Valid');
			}
		}
		else
		{
			return redirect('/login')->with('failed','Username Not Valid');
		}	
		
    }
	
	public function logout()
    {
		// destroy session
		session()->pull('userid');
		session()->pull('unm');
		session()->pull('name');
		return redirect('/');
	}	
	
	
    public function signup()
    {
		$countrie=countrie::all();  
        return view('website.signup',['countrie'=>$countrie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            //'unm' => 'required|unique:customers',
            'pass' => 'required|min:3|max:12',
            'gen' => 'required',
            'cid' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        
        
        
        
        $data=new customer;
        $data->name=$request->name;
        $email=$data->email=$request->email;
        $data->unm=$request->unm;
        $data->pass=Hash::make($request->pass);
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag); 
		$data->cid=$request->cid;
		
		$file=$request->file('file');
		$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
		$file->move('upload/customer/',$filename); 
		
		$data->file=$filename;
		

       
        $data->save();
        $data=array("email"=>$email);
        Mail::to($email)->send(new welcome($data));
        return redirect('/signup')->with('SUCESSS','Register Succeess');
    }

    /**
     * Display the specified resource.
     */
    public function show(customer $customer)
    {
		 //$data=customer::all(); 	
         $data=customer::join('countries','customers.cid','=','countries.id')->get(['customers.*','countries.cname']);
		 return view('admin.manage_user',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */



     public function profile(customer $customer)
     {
         $data=customer::join('countries','customers.cid','=','countries.id')->where('customers.id','=',session('userid'))
         ->first(['customers.*','countries.cname']);
         return view('website.profile',['data'=>$data]);
     }
    public function edit(customer $customer,$id)
    {
        $countrie=countrie::all();
		$data=customer::find($id);
        return view('website.editprofile',['countrie'=>$countrie,'data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, customer $customer,$id)
    {
        $data=customer::find($id);
		$data->name=$request->name;
        $data->unm=$request->unm;
		$data->gen=$request->gen;
		$data->lag=implode(",",$request->lag); 
		$data->cid=$request->cid;
		
		if($request->hasFile('file'))
		{
			$old_img=$data->file;
			unlink('upload/customer/'.$old_img);
			
			$file=$request->file('file');
			$filename=time().'_img.'.$request->file('file')->getClientOriginalExtension();
			$file->move('upload/customer/',$filename); 			
			$data->file=$filename;
			
		}
        $data->save();
		session()->put('name',$data->name);
		
        return redirect('/profile')->with('success','Update Succeess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(customer $customer,$id)
    {
        $data=customer::find($id);  //fetch select where id
		$delfile=$data->file; // get old file
		$data->delete();
		unlink('upload/customer/'.$delfile); // delete image from public/upload/customer
		return redirect('/manage_user')->with('success','Delete Succeess');
    }
}

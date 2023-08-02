<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Hash;
use Session;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin_login');
    }
	
	public function loginauth(Request $request)
    {
        $anm=$request->anm;
		$data=admin::where('anm','=',$anm)->first();
        
        if($data)
		{
			
			if(Hash::check($request->apass,$data->apass))
			{
					//create session
					session()->put('adminid',$data->id);
					session()->put('anm',$data->anm);
					return redirect('/dashboard');
			}
			else
			{
				return redirect('/dashboard')->with('failed','Pasword Not Valid');
			}
		}
		else
		{
			return redirect('/dashboard')->with('failed','Username Not Valid');
		}	
		
    }
	
	
	public function logout()
    {
		// destroy session
		session()->pull('adminid');
		session()->pull('anm');
		return redirect('/admin_login');
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admin $admin)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Department;
use App\User;
use Auth;
use Hash;


class UserController extends Controller
{


	public function index(Request $request)
	{
		$Users = new User;        

		if($request->has('department_id')) {
			$Users = $Users->where('department_id', $request->department_id);
		}

		if($request->has('batch')) {
			$Users = $Users->where('batch', $request->batch);
		}

		$Users = $Users->get();

		if($request->ajax()) {
			return $Users;
		}

		return view('staff.student.index', compact('Users'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$Departments = Department::all();
    	return view('staff.student.create', compact('Departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'first_name' => 'required|string|max:255',
    		'last_name' => 'required|string|max:255',
    		'email' => 'required|string|max:255|unique:users',
    		'dob' => 'required|date',
    		'department_id' => 'required|exists:departments,id',
    	]);

    	User::create([
    		'first_name' => $request->first_name,
    		'last_name' => $request->last_name,
    		'email' => $request->email,
    		'dob' => Carbon::parse($request->dob),
    		'department_id' => $request->department_id,
    		'password' => bcrypt($request->dob),
    		'batch' => $request->batch,
    	]);

    	return redirect()->route('staff.student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request){
    	$credentials = $request->only('email', 'password');
    	if(Auth::attempt($credentials)){
    		$token = Str::random(80);
    		Auth::user()->api_token = $token;
    		Auth::user()->save();
    		$role = strtolower(Auth::user()->profile->role);
			//$hello = Auth::user()->hello();

    		return response()->json(['user' => Auth::user(), 'role' => $role], 200);	
    	}
    	return response()->json(['status' => 'Email or password is wrong!'], 403);	
    }



    public function verify(Request $request, $role){
    	if($role == Auth::user()->roleName()){
    		return response()->json(['status' => 1], 200);
    	}else{
    		return response()->json(['status' => 0], 200);				
    	}		
    }


    public function listUsers(){
        $users = User::where('id', '>',  1)->with(['profile'])->get();
        return response()->json(['users' => $users], 200);
    }

}

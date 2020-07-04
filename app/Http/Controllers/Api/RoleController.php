<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use Auth;
use Hash;


class RoleController extends Controller
{
    public function index(Request $request)
    {
        $per_page = $request->per_page;
        return response()->json(['roles' => Role::paginate($per_page)], 200); 
    }

    public function store(Request $request)
    {
        $role = Role::create([
            'name' => $request->name,
        ]);
        return response()->json(['role' => $role], 200);
    }

    public function show($searchTerm)
    {
     $roles = Role::where('name', 'LIKE', "%$searchTerm%")->paginate();
     return response()->json(['roles' => $roles], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $role = Role::find($id);
        $role->name = $request->name;
        $role->save();
        return response()->json(['role' => $role], 200);
    }

    public function destroy($id)
    {
        $role = Role::find($id)->delete();
        return response()->json(['role' => $role], 200);
    }

    public function deleteAll(Request $request)
    {
        $role = Role::whereIn('id', $request->roles)->delete();
        return response()->json(['message' => 'Records deleted successfully!'], 200);
    }
  
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class permissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        // foreach($roles as $role){
            
        //     $user_amount = User::role($role->name)->get();
        //     $role->role_count= $user_amount->count();
            
        // }


        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $permission = Permission::create(['name' => $request->name]);

        return redirect('/admin/permissions')->with('success', 'Permiso creado exitosamente!');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);


        return view('permissions.edit', compact('permission'));
    }



    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();

        return redirect('/admin/permissions')->with('success', 'Permiso eliminado exitosamente!');

    }
}

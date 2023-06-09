<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    private $permission;

    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }
    public function index()
    {

        return view('server.page.role.grid')->with('data', Role::paginate(10));
    }

    public function create()
    {

        return view('server.page.permission.create');
    }

    public function store(Request $request)
    {

        $this->permission->create(['name' => $request->name]);
        return redirect()->route('admin.permission.create');
    }
    public function edit()
    {

        return view('server.page.role.edit');
    }

    public function update()
    {

        return redirect()->route('admin.role.index');
    }

    public function show()
    {

        return view('server.page.role.detail');
    }

    public function destroy()
    {
        return redirect()->route('admin.role.index');
    }
}

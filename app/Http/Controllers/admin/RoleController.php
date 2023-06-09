<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Exceptions\GuardDoesNotMatch;

class RoleController extends Controller
{
    private $role;
    private $permission;
    public function __construct(Role $role, Permission $permission)
    {
        $this->role = $role;
        $this->permission = $permission;
    }
    public function index()
    {
        return view('server.page.role.grid')->with('data', Role::with('permissions')->paginate(10));
    }

    public function create()
    {
        $permissions = $this->permission->all();

        $result = [];
        foreach ($permissions as $key => $item) {

            array_push($result, [
                'id' => $item['id'],
                'title' => $item['name']
            ]);
        }
        return view('server.page.role.create')->with('permissions', $result);
    }

    public function store(Request $request)
    {
        try {
            $role = $this->role->create(['name' => $request->name]);
            $permissionsArr = explode(',', $request->permission);

            $permissions = $this->permission->whereIn('id', $permissionsArr)->get();

            foreach ($permissions as $key => $item) {
                $role->givePermissionTo($item);
            }

            return redirect()->route('admin.role.index');
        } catch (\Throwable $th) {
            return   self::create();
        }
    }
    public function edit($id)
    {
        $permissions = $this->permission->all();

        $result = [];
        foreach ($permissions as $key => $item) {

            array_push($result, [
                'id' => $item['id'],
                'title' => $item['name']
            ]);
        }
        $role = $this->role->findById($id, config('auth.defaults.guard'));
        $permission = $role->permissions()->pluck('id');

        return view('server.page.role.edit')
            ->with('role', $role)
            ->with('permission', $permission)
            ->with('permissions', $result);
    }

    public function update(Request $request,$id)
    {
        $role = $this->role->findByName($request->name,config('auth.defaults.guard'));
        $role->syncPermissions(explode(', ',$request->permission));
        return redirect()->route('admin.role.index');
    }

    public function destroy()
    {
        return redirect()->route('admin.role.index');
    }
}

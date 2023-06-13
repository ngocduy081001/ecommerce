<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    private $user;

    private $role;

    public function __construct(User $user, Role $role)
    {
        $this->middleware('role:Super Admin');

        // $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:product-delete', ['only' => ['destroy']]);
        $this->role = $role;
        $this->user = $user;
    }

    public function index()
    {

        return view('server.page.user.grid')->with('data', $this->user->with('roles')->paginate(10));
    }

    public function create()
    {

        return view('server.page.user.create')->with('roles', $this->role->all());
    }

    public function store(UserRequest $request)
    {

        $user =   $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            $user->assignRole($request->roles);
            return redirect()->route('admin.user.index');
        }
    }

    public function edit($id)
    {
        $user = $this->user->findOrFail($id);
        $role = $user->roles()->pluck('id');
        $roles = $this->role->all();

        $result = [];
        foreach ($roles as $key => $item) {
            array_push($result, [
                'id' => $item['id'],
                'title' => $item['name']
            ]);
        }
        return view('server.page.user.edit')
            ->with('user', $user)
            ->with('role', $role)
            ->with('roles', $result);
    }

    public function update(UserRequest $request, $id)
    {

        if ($request->hasFile('avatar')) {

            $request->file('avatar')->store('public/avatars');
            $link = $request->file('avatar')->hashName();;
        }
        

        $user =   $this->user->findOrFail($id);
        if ($user) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'avatar' => $link ?? '',
            ]);

            $user->syncRoles(explode(', ', $request->role));
        }


        return redirect()->route('admin.user.index');
    }
}

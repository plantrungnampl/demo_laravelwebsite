<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // Hiển thị danh sách người dùng
        $users = User::all();
        return view('admin.users.user', compact('users'));
    }

    public function store(Request $request)
    {


        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|confirmed',
            ]);

            // Tạo người dùng mới
            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));


            $user->save();

            return redirect()->route('admin.users.user')->with('success', 'User create success');
        } catch (\Exception $e) {
            return redirect()->route('admin.users.create')->with('error', 'ERROR');
        }
    }
    public function create()
    {
        return view('admin.users.create');
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        //cập nhật thông tin người dùng
        $user = User::find($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6|required_with:password_confirmation',

        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        $user->save();

        return redirect()->route('admin.users.user')->with('success', 'Thông tin người dùng đã được cập nhật thành công');
    }
    public function destroy($id)
    {
        // Xóa người dùng
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.users.user')->with('success', 'Người dùng đã được xóa thành công');
    }
}

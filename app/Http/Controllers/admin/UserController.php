<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $users;
    public function manage()
    {
        $this->users = Customer::all();
        return view('admin.user.manage',['users' => $this->users]);
    }

    public function delete($id)
    {
        Customer::deleteCustomer($id);
        return redirect()->back()->with('message', 'Delete User Successfully');
    }
}

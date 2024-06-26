<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Google\Rpc\Context\AttributeContext\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }  

    public function list(Request $request)
    {
        $user = User::get();
        return view('user.index', compact('user'));
    }
}

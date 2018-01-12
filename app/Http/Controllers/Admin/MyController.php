<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
    public function passwordForm()
    {
        return view('admin.my.passwordForm');
    }

    public function changePassword(AdminPost $request)
    {
        echo '成功';

    }
}

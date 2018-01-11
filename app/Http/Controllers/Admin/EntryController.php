<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

/**
 * Class EntryController
 * @package App\Http\Controllers\Admin
 */
class EntryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth')->except('loginForm', 'login');
    }

    /**
     * 后台主页
     * @return string
     */
    public function index()
    {
        return view('admin.entry.index');
    }

    /**
     * 登陆视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginForm()
    {
        return view('admin.entry.login');
    }


    /**
     * 用户登陆
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request)
    {
        $status = Auth::guard('admin')->attempt([
                'username' => $request->input('username'),
                'password' => $request->input('password'),
            ]

        );
        if ($status) {
            //登陆成功
            return redirect('/admin/index');
        }
        return redirect('/admin/login')->with('error', '用户名密码错误');

    }
}


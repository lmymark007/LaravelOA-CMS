<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class SettingController extends Controller
{

    public function index()
    {
        return view('admin.setting');
    }

    public function update()
    {

        return view('admin.setting')->with(['message'=>'修改成功11111111111111111']);
    }
}

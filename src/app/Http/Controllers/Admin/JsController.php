<?php

namespace App\Http\Controllers\Admin;
use App\Models\Testform;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class JsController extends Controller
{
    public function jschange4(Request $request)
    {
        return view('admin.jschange4');
    }
}

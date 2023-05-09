<?php

namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Billingmanagement_list;
use App\Models\Billingmanagement_tax;
use Carbon\Carbon;

class BmController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.Bm');
    }
}

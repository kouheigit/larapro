<?php

namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jstest;
use App\Models\Jstest3;
use App\Models\guest;
use App\Models\First;
use App\Models\Someform;
use App\Models\Testform;
use Carbon\Carbon;

class BmController extends Controller
{
    public function index(Request $request)
    {
        //bmstart
        return view('admin.Bm');
    }
}

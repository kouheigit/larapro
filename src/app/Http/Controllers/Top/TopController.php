<?php

namespace App\Http\Controllers\Top;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index(Request $request)
    {
        return view('top.top');
    }
    public function information(Request $request)
    {
        $News = News::all();
        return view('top.information',compact('News'));
    }
}

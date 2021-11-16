<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;

class MobileController extends Controller
{
    public function phones()
    {
        $posts = Mobile::paginate(2);
        return view('phones', compact('posts'));
    }
    public function show($id)
    {
        $bookinfo = Mobile::find($id);
        return view('show', compact('bookinfo'));
    }
}

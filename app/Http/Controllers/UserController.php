<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bookmark;

class UserController extends Controller
{
    public function usershow()
    {
        $userssh = User::all();
        return view('users', compact('userssh'));
    }
    public function bookshow()
    {
        $bookssh = Bookmark::all();
        return view('bookmarks', compact('bookssh'));
    }
    public function bookshowinfo($id)
    {
        $bookinfo = Bookmark::find($id);
        return view('show', compact('bookinfo'));
    }
}

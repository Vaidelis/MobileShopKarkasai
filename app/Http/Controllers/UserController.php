<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Session;
use App\Models\Bookmark;

class UserController extends Controller
{
    public function usershow()
    {
        $userssh = User::all();
        $roleall = Role::all();
        return view('users', compact('userssh', 'roleall'));
    }
    public function bookshow()
    {
        $bookssh = Bookmark::all();
        return view('bookmarks', compact('bookssh'));
    }
    public function bookshowinfo($id)
    {
        $bookinfo = Bookmark::find($id);
        return view('bookmarksearch', compact('bookinfo'));
    }
    public function bookmarkdelete($id){
        $bookdelete = Bookmark::find($id);
        $bookdelete->delete();
        return redirect()->route('book')->with('status', 'Paieškos rezultatų rinkinys sėkmingai ištrintas');
    }
    public function createrole(Request $request){
        $newrole = new Role();
        $newrole->role = $request->get('role');
        $newrole->save();
        return redirect()->route('usersview');
    }
    public function deleterole($id){
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('usersview');
    }

    //Role update
    public function editrole($id){

        $rol = Role::find($id);

        return view('roledit',compact('rol'));
    }

    public function update(Request $request, $id){

        $rol= $request->get('role');

        Role::where('id',$id)->update(['role' => $rol]);

        //$comments = Comments::find($id);
        return redirect()->route('usersview');
    }


}

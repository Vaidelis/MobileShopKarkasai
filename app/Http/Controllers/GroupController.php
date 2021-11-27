<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Comments;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function groupshow()
    {
        $groupssh = Group::all();
        return view('groups', compact('groupssh'));
    }
    public function show($id)
    {
        $group = Group::find($id)->first();
        //$group = Group::with('comment');
        //dd($group);
        $comments = Comments::where(['Group_id' => $id])->get();
        return view('groupComments', compact('comments', 'group'));
    }
}

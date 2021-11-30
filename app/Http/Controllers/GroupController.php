<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupsHasUsers;
use App\Models\Comments;
use Illuminate\Http\Request;
use Auth;
use Session;

class GroupController extends Controller
{
    public function groupshow($id)
    {
        $groupssh = Group::all();
        $grouphasuser = GroupsHasUsers::where(['user_id' => $id])->get();

        $check = GroupsHasUsers::where(['user_id' => $id])->first();
        if($check == null){
            $check = null;
        }

        return view('groups', compact('groupssh', 'grouphasuser'))->with('id', $id)->with('check', $check);
    }
    public function show($id)
    {
        //dd($id);
        $group = GroupsHasUsers::where(['group_id' => $id])->get();
        $groupname = GroupsHasUsers::where(['group_id' => $id])->first();
        //dd($groupname);
        //$group = Group::with('comment');
        //dd($group);
        $comments = Comments::all();
        //dd($comments);
        return view('groupComments', compact('comments', 'group', 'groupname'));
    }
    public function join($id, $groupid){

        $newmember = new GroupsHasUsers;
        $newmember->user_id = $id;
        $newmember->group_id = $groupid;
        $newmember->save();
        return redirect()->route('groupshow', $groupid);
    }
    public function writecomment(Request $request,$grouphas, $id){

        $hasUsersId = GroupsHasUsers::Where(['user_id' => Auth::User()->id, 'group_id' => $grouphas])->value('id');
        //dd($hasUsersId);

        $newcomments = new Comments;
        $newcomments->comment = $request->input('bookmarkn');
        $newcomments->groups_has_users_id = $hasUsersId;

        //dd($hasUsersId);
        $newcomments->save();
        return redirect()->route('groupshow', $grouphas);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupsHasUsers extends Model
{
    use HasFactory;
    public $table = "groups_has_users";
    public $primaryKey = 'id';


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }


    public function comments()
    {
        return $this->hasMany(Comments::class, 'groups_has_users_id');
    }
}

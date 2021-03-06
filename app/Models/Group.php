<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public $table = "groups";
    public $primaryKey = 'id';

    public function groupshasusers(){
        return $this->hasMany(GroupsHasUsers::class, 'group_id');
    }
}

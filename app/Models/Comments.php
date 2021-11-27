<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    public $table = "comments";
    public $primaryKey = 'id';
    protected $fillable = [
        'comment', 'Group_id', 'user_username'
    ];

    public function comment()
    {
        return $this->belongsToMany(Group::class);
    }

}

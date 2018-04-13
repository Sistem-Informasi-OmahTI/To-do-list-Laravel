<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        "users_id", "content",
    ];

    public function users(){
        return $this->belongsTo("App\User");
    }
}

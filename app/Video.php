<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public function complete()
    {
        $this->completed = true;
        $this->save();
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}

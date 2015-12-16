<?php namespace Tickets;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

    public function users()
    {
        return $this->hasMany('Tickets\User');
    }

}

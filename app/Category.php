<?php namespace Tickets;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public function students()
    {
        return $this->hasMany('Tickets\Student');
    }

}

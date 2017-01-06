<?php namespace Tickets;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    public function Call()
    {
        return $this->hasMany('Tickets\Call');
    }


    public function Category()
    {
        return $this->belongsTo('Tickets\Category');
    }

    public function User()
    {
        return $this->belongsTo('Tickets\User');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['full_name', 'identification', 'category_id', 'state', 'user_id'  ];

}

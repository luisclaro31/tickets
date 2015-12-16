<?php namespace Tickets;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = ['student_id', 'user_id' ];

    public function Student()
    {
        return $this->belongsTo('Tickets\Student');
    }

    public function User()
    {
        return $this->belongsTo('Tickets\User');
    }
}

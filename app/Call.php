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

    public function scopeStudentid($query, $student_id)
    {
        if (trim($student_id) != "")
        {
            $query->where('student_id', $student_id);
        }

    }

    public function scopeDate($query, $date)
    {

        if (trim($date) != "")
        {
            $query->where('calls.created_at', "LIKE", "%$date%");
        }

    }
}

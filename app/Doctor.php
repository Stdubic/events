<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{


    public function calendar_events()
    {
        return $this->hasMany(CalendarEvent::class);
    }
}

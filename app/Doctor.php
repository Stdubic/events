<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CalendarEvent;

class Doctor extends Model
{
    public function calendar_events()
    {
        return $this->hasMany(CalendarEvent::class);
    }
}

<?php
namespace App\Http\Controllers;
use App\CalendarEvent;
use App\Http\Requests;
use Carbon\Carbon;
use App\Doctor;
class DoctorsEventsController extends Controller
{
    /**
     * @var CalendarEvent
     */
    private $calendarEvent;
    /**
     * @param CalendarEvent $calendarEvent
     */
    public function __construct(CalendarEvent $calendarEvent)
    {
        $this->middleware('auth');

        $this->calendarEvent = $calendarEvent;
    }
    public function calendar($id)
    {
        $staticEvent = \Calendar::event(
            'Today\'s Sample',
            true,
            Carbon::today()->setTime(0, 0),
            Carbon::today()->setTime(23, 59),
            null,
            [
                'color' => '#0F0',
                'url' => 'http://google.com',
            ]
        );
        $databaseEvents = $this->calendarEvent->where('doctor_id', $id)->get();
        $drcalendar = \Calendar::addEvents($databaseEvents);
        $doctors = Doctor::all();
        return view('drcalendar', compact('drcalendar','doctors'));
    }
}
<?php namespace App\Http\Controllers;
use App\CalendarEvent;
use App\Doctor;
use App\Http\Requests;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class CalendarEventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $now = Carbon::now();
        $calendar_events = CalendarEvent::where('start', '>', $now)->orderBy('start', 'asc')->paginate(10);
        //$calendar_events = DB::table('calendar_events')->where('start', '>', $now)->get();
        return view('calendar_events.index', compact('calendar_events'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('calendar_events.create', compact('doctors'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $calendar_event = new CalendarEvent();
        $calendar_event->title            = $request->input("title");
        $calendar_event->user_id          = auth()->id();
        $calendar_event->doctor_id        = $request->input("dr");
        $calendar_event->start            = $request->input("start");
        $calendar_event->end              = $request->input("end");
        $calendar_event->is_all_day       = '0';
        $calendar_event->background_color = $request->input("background_color");
        $calendar_event->save();
        return redirect()->route('calendar_events.index')->with('message', 'Item created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $calendar_event = CalendarEvent::findOrFail($id);
        return view('calendar_events.show', compact('calendar_event'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $calendar_event = CalendarEvent::findOrFail($id);
        $doctors = Doctor::all();
        return view('calendar_events.edit', compact('calendar_event','doctors'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  int    $id
     * @param Request $request
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $calendar_event = CalendarEvent::findOrFail($id);
        $calendar_event->user_id          = auth()->id();
        $calendar_event->title            = $request->input("title");

        $calendar_event->start            = $request->input("start");
        $calendar_event->end              = $request->input("end");
        $calendar_event->is_all_day       = '0';
        $calendar_event->background_color = $request->input("background_color");
        $calendar_event->save();
        return redirect()->route('calendar_events.index')->with('message', 'Item updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $calendar_event = CalendarEvent::findOrFail($id);
        $calendar_event->delete();
        return redirect()->route('calendar_events.index')->with('message', 'Item deleted successfully.');
    }
}
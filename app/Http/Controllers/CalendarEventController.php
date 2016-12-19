<?php namespace App\Http\Controllers;

use App\CalendarEvent;
use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;

class CalendarEventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $calendar_events = CalendarEvent::all();

        return view('calendar_events.index', compact('calendar_events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('calendar_events.create');
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
         $calendar_event->id = CalendarEvent::all()->sortBy($calendar_event->id)->last()->id + 1;
        $calendar_event->name                = $request->input("name");
        $calendar_event->description       = $request->input("description");
        $calendar_event->location           = $request->input("location");
        $calendar_event->eventstart            = $request->input("eventstart");
        $calendar_event->eventend              = $request->input("eventend");

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

        //var_dump($id);
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

        return view('calendar_events.edit', compact('calendar_event'));
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
        $calendar_event->name                   = $request->input("name");
        $calendar_event->description       = $request->input("description");
        $calendar_event->location           = $request->input("location");
        $calendar_event->eventstart            = $request->input("eventstart");
        $calendar_event->eventend              = $request->input("eventend");


        // create table calendar_events(id int primary key not null,
        // name char(100),description char(100), location char(100),
        //eventStart timestamp, eventEnd timestamp,
        //created_at timestamp, updated_at timestamp );

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\GoogleCalendar\Event;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventCreatedMail;

class EventController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,8}$/',
            'email' => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'time' => 'required|date_format:H:i',
            'date' => 'required|date|after_or_equal:today'
        ]);

        $dateTime = $request->date . ' ' . $request->time;

        $startDateTime = Carbon::createFromFormat('Y-m-d H:i', $dateTime, 'Europe/Belgrade');
        $endDateTime = Carbon::createFromFormat('Y-m-d H:i', $dateTime, 'Europe/Belgrade')->addHour();

        $event = Event::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'startDateTime' => $startDateTime,
            'endDateTime' => $endDateTime,
        ]);

        Mail::to($request->email)->send(new EventCreatedMail($data));

        return redirect('/')->with('status', 'Event created!');
    }
}

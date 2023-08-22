<?php

namespace App\Http\Controllers;

use App\Models\EventUser;
use Illuminate\Http\Request;

class EventUserController extends Controller
{
    public function index()
    {
        $event_users = EventUser::all();
        return view('eventusers.index', compact('event_users'));
    }
}

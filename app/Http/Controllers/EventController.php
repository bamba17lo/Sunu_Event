<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Models\CategoryEvent;
use App\Models\Event;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index(){
        $category = CategoryEvent::all();
        $regions = Region::all();
        return view('Event/index',compact('category','regions'));
    }

    public function indexOffice(){
        $events = Event::where('status', 'A venir')->orderBy('eventDate','asc')->get();
        
        return view('home',compact('events'));
    }

    public function storeEvent(EventRequest $request){
        $data = $request->validated();
        $image1 = $request->file('media1');
        $video = $request->file('media2');
        
        $event  = new Event();
        if($video !== null && !$video->getError()){
            $event->media2 = $video->store('video','public');
        }
        if($image1 && !$image1->getError()){
            $event->media1 = $image1->store('photo','public');
        }

        $event->region_id = $data['region_id'];
        $event->user_id = Auth::id();
        $event->category_event_id = $data['category_event_id'];
        $event->eventName = $data['eventName'];
        $event->eventDate = $data['eventDate'];
        $event->lieu = $data['lieu'];
        $event->startTime = $data['startTime'];
        $event->endTime = $data['endTime'];
        $event->description = $data['description'];
        $event->capacity = $data['capacity'];
        $event->status = "Non publie";  // Non publie || A venir || Termine || Annulee 
        $event->save();

        return redirect('billets');
    }

    public function showEvent(Event $event){
        dd($event);
        return view('Event.event');
    }
}

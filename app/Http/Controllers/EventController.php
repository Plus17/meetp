<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\EventRequest;

use App\Event;
use App\Category;

class EventController extends Controller
{
    public function getIndex()
    {
        $events = Event::with('user')->paginate(5);

        return view('welcome', ['events' => $events] );
    }

    public function indexByCategory($idCategory)
    {
        $events = Category::find($idCategory)->events()->paginate(5);

        return view('Event.byCategory', ['events' => $events]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(5);

        return view('User.events', ['events' => $events] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         $categories = Category::lists('name', 'id');

         return view('Event.create',['categories' => $categories]);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(EventRequest $request)
     {
         $request['user_id'] = 1;
         Event::create($request->all());

         $request->session()->flash('message', 'Evento registrado exitosamente!');

         return redirect()->route('event.create');
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         $event = Event::findOrFail($id);

         return view('Event.show', ['event' => $event] );
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $event = Event::find($id);
         $categories = Category::lists('name', 'id');
         $user = $event->user->id;
         
         return view('Event.edit', ['event' => $event, 'categories' => $categories, 'user' => $user ] );
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(EventRequest $request, $id)
     {
         $request['user_id'] = 1;
         $event = Event::findOrFail($id);
         $event->fill($request->all());
         $event->save();

         $request->session()->flash('message','Evento actualizado');

         return redirect()->route('event.edit',[$id]);
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         $event = Event::findOrFail($id);
         if (! $event->delete()) {
             return "Error al eliminar el evento";
         }

         return "Evento eliminado";
     }
}

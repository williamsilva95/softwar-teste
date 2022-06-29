<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Watched_time;

class WatchedTimeController extends Controller
{
    private $watched_time;
    public function __construct(Watched_time $watched_time)
    {
        $this->watched_time = $watched_time;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $watched = $this->watched_time::leftJoin('users','users.id','=','watched_times.user_id')
        ->leftJoin('channels','channels.id','=','watched_times.channels_id')
        ->select('watched_times.minute','watched_times.date','users.name as userName','channels.name')
        ->orderBy('minute','desc')->paginate(20);

        return $watched;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $this->watched_time->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Watched_time  $watched_time
     * @return \Illuminate\Http\Response
     */
    public function show(Watched_time $watched_time)
    {
        return $watched_time;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   Watched_time  $watched_time
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Watched_time  $watched_time)
    {
       $watched_time->update($request->all());

       return $watched_time;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param   Watched_time  $watched_time
     * @return \Illuminate\Http\Response
     */
    public function destroy( Watched_time  $watched_time)
    {
        return $watched_time->delete();
    }
}

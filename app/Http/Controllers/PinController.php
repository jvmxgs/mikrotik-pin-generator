<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \RouterOS\Client;
use \RouterOS\Query;
use App\Models\Pin;

class PinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pin = Pin::create([
            'pin' => pin(),
            'server' => 'HotspotPlaneta',
            'duration' => '00:30:00',
            'profile' => '8mb',
            'comment' => '30 min'
        ]);

        dd($pin->toArray());

        /*$client = new Client([
            'host' => '192.168.1.65',
            'user' => 'admin',
            'pass' => '4531212410'
        ]);

        $query =
            (new Query('/ip/hotspot/user/add'))
                ->equal('server', 'HotspotPlaneta')
                ->equal('name', 'bypassed')
                ->equal('limit-uptime', '00:30:00')
                ->equal('profile', '8mb')
                ->equal('comment', '30 min');

        $response = $client->query($query)->read();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

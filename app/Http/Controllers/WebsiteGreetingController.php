<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Greeting;

class WebsiteGreetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['greeting'] = $this->random();

        return view('website.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Greeting::create([
            'from' => $request['from'],
            'to' => $request['to'],
            'body' => $request['body'],
        ]);

        return redirect()->back()->with('OK', 'Pesan berhasil dikirim, semoga tersampaikan :D');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $greetings = Greeting::where('showed', false)->get();

        if (count($greetings) == 0) {
            $greetings = Greeting::all();

            foreach ($greetings as $item){
                $item->update([
                    'showed' => false
                ]);
            }

            $greetings = Greeting::where('showed', false)->get();
        }

        $greeting = $greetings->random();

        $greeting->update([
            'showed' => true,
        ]);

        return $greeting;
    }
}

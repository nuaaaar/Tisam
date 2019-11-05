<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Greeting;

class GreetingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['greetings'] = Greeting::orderBy('id', 'DESC')->get();
        $data['no_greetings'] = 1;

        return view('dashboard.greeting.index', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $greeting = Greeting::findOrFail($id);

        return $greeting;
    }

    /**
     * Update status in greeting tabel
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Greeting::findOrFail($id);
        $data->update([
            'confirmed' => true
        ]);

        return redirect()->back()->with("OK", "Berhasil mengkonfirmasi.");
    }

    /**
     * Delete wrong data in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Greeting::findOrFail($id)->delete();

        return redirect()->back()->with("OK", "Berhasil menghapus data.");
    }

}

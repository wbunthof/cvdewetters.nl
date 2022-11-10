<?php

namespace App\Http\Controllers;

use App\Models\SteunendLid;
use Illuminate\Http\Request;

class SteunendLidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('index-steunend-leden', ['steunendLid' => true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);

        try {
            SteunendLid::create($request->all());
        } catch (\Exception $exception) {
            return back()->with(['error' => $exception]);
        }

        return redirect('https://tikkie.me');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SteunendLid  $steunendLid
     * @return \Illuminate\Http\Response
     */
    public function show(SteunendLid $steunendLid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SteunendLid  $steunendLid
     * @return \Illuminate\Http\Response
     */
    public function edit(SteunendLid $steunendLid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SteunendLid  $steunendLid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SteunendLid $steunendLid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SteunendLid  $steunendLid
     * @return \Illuminate\Http\Response
     */
    public function destroy(SteunendLid $steunendLid)
    {
        //
    }
}

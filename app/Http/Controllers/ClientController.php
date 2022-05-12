<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('back/clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('create-client')) {
            abort(403);
        }

        return view('back/clients.create')->with('message', 'Successfully created.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'date' => 'required',
            'category' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $this->authorize('create', Client::class);

        $client = new Client;
        $client->profile_pic = 'storage/img/' . $request->profile_pic->hashName();
        $request->profile_pic->storePublicly('img', 'public');
        $client->name = $request->name;
        $client->position = $request->position;
        $client->date = $request->date;
        $client->category = $request->category;
        $client->rating = $request->rating;
        $client->comment = $request->comment;
        $client->save();

        return redirect()->route('clients.index')->with('message', 'Successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Client $client)
    {
        if (! Gate::allows('edit-client', $client)) {
            abort(403);
        }
        if ($client->id !== decrypt($request->_verif)) {
            abort(403);
        }

        return view('back/clients.edit', compact('client'))->with('message', 'Successfully edited.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $validated = $request->validate([
            'name' => 'required',
            'position' => 'required',
            'date' => 'required',
            'category' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $this -> authorize('update', [$client]);

        $client->profile_pic = $request->profile_pic;
        $client->name = $request->name;
        $client->position = $request->position;
        $client->date = $request->date;
        $client->category = $request->category;
        $client->rating = $request->rating;
        $client->comment = $request->comment;

        return redirect()->route('clients.index')->with('message', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Client $client)
    {
        if ($client->id !== decrypt($request->_verif)) {
            abort(403);
        }

        $this -> authorize('delete', [$client]);

        $client->delete();

        return redirect()->route('clients.index')->with('message', 'Successfully deleted.');
    }
}

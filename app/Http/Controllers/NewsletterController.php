<?php

namespace App\Http\Controllers;


use App\Models\Subscribe;
use App\Http\Requests\StoreSubscribeRequest;
use App\Http\Requests\UpdateSubscribeRequest;
use App\Mail\SubscribeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribes = Subscribe::all();

        return view('back/newsletter.index', compact('subscribes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('create-subscribe')) {
            abort(403);
        }

        return view('back/newsletter.create')->with('message', 'Successfully created.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePricingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'email_address' => 'required',
        ]);

        // cannot put because it will not allow guest to subscribe without being an authorized user
        $this->authorize('create', Subscribe::class);

        $subscribe = new Subscribe;
        $subscribe->email_address = $request->address;
        
        $subscribe->save();

        return redirect()->route('newsletter.index')->with('message', 'Successfully created.');
    }

    public function send(Request $request) {
        Mail::to($request->address)->send(new SubscribeMail());

        if (!Subscribe::where('email_address', $request->address)->get()->count() > 0) {
            $subscribe = new Subscribe;
            $subscribe->email_address = $request->address;
            $subscribe->save();
            return redirect()->back()->with('success', 'You have been successfully subscribed to our newsletter and shall receive an email shortly.');
        } else {
            return redirect()->back()->with('fail', 'You are already subscribed to our newsletter.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show(Subscribe $subscribe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Subscribe $subscribe)
    {
        if (! Gate::allows('edit-subscribe', $subscribe)) {
            abort(403);
        }
        if ($subscribe->id !== decrypt($request->_verif)) {
            abort(403);
        }

        return view('back/newsletter.edit', compact('subscribe'))->with('message', 'Successfully edited.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubscribeRequest  $request
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        $validated = $request->validate([
            'email_address' => 'required',
        ]);

        $this->authorize('create', Subscribe::class);

        $subscribe->email_address = $request->address;
        
        $subscribe->save();

        return redirect()->route('newsletter.index')->with('message', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Subscribe $subscribe)
    {
        if ($subscribe->id !== decrypt($request->_verif)) {
            abort(403);
        }

        $this -> authorize('delete', [$subscribe]);

        $subscribe->delete();

        return redirect()->route('newsletter.index')->with('message', 'Successfully deleted.');
    }
}

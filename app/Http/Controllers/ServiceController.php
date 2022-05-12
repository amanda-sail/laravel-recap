<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();

        return view('back/services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('create-service')) {
            abort(403);
        }

        return view('back/services.create')->with('message', 'Successfully created.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $this->authorize('create', Service::class);

        $service = new Service;
        $service->icon = $request->icon;
        $service->service =  $request->service;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->btn_text = $request->btn_text;
        $service->btn_icon = $request->btn_icon;
        $service->save();

        return redirect()->route('services.index')->with('message', 'Successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Service $service)
    {
        if (! Gate::allows('edit-service', $service)) {
            abort(403);
        }
        if ($service->id !== decrypt($request->_verif)) {
            abort(403);
        }

        return view('back/services.edit', compact('service'))->with('message', 'Successfully edited.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validated = $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $this -> authorize('update', [$service]);

        $service->icon = $request->icon;
        $service->service = $request->service;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->btn_text = $request->btn_text;
        $service->btn_icon = $request->btn_icon;

        return redirect()->route('services.index')->with('message', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Service $service)
    {
        if ($service->id !== decrypt($request->_verif)) {
            abort(403);
        }

        $this -> authorize('delete', [$service]);

        $service->delete();

        return redirect()->route('services.index')->with('message', 'Successfully deleted.');
    }
}

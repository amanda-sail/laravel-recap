<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::first();

        return view('back/banner.index', compact('banner'));
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
     * @param  \App\Http\Requests\StoreBannerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Banner $banner)
    {
        if (! Gate::allows('edit-banner', $banner)) {
            abort(403);
        }
        if ($banner->id !== decrypt($request->_verif)) {
            abort(403);
        }

        return view('back/banner.edit', compact('banner'))->with('message', 'Successfully edited.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBannerRequest  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerRequest $request, Banner $banner)
    {
        $validated = $request->validate([
            'header' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);

        $this -> authorize('update', [$banner]);

        $banner->header = $request->header;
        $banner->description = $request->description;
        $banner->apple_btn = $request->apple_btn;
        $banner->playstore_btn = $request->playstore_btn;
        $banner->apple_icon = $request->apple_icon;
        $banner->playstore_icon = $request->playstore_icon;
        $banner->img = $request->img;

        return redirect()->route('banner.index')->with('message', 'Successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}

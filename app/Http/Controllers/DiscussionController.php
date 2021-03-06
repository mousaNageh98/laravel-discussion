<?php

namespace App\Http\Controllers;

use App\Discussion;
use App\Http\Requests\StoreDesussionReqest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscussionController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->only(["create","store"]) ;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("discussions.index")->with("discussions",Discussion::paginate(5)) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("discussions.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesussionReqest $request)
    {
        //this is first methd
        // Discussion::create([
        //     "title"=>$request->tite ,
        //     "content"=>$request->content ,
        //     "channel_id"=>$request->channel ,
        //     "user_id" =>auth()->user()->id
        // ]) ;

        auth()->user()->discussions()->create([
            "title"=>$request->title ,
            "content"=>$request->content,
            "channel_id"=>$request->channel ,
            "slug"=>Str::slug($request->title)
        ]) ;
        session()->flash("success","discussion created successfully .") ;
        return redirect(route("discussion.index")) ;
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

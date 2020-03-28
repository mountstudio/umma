<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SubscriberController extends Controller
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
        return view('admin.subscribers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Subscriber::create($request->all());
        return redirect()->route('admin.subscriber.datatable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscriber $subscriber
     * @return \Illuminate\Http\Response
     */
    public function show(Subscriber $subscriber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscriber $subscriber
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscriber $subscriber)
    {
        return view('admin.subscribers.edit', ['subscriber' => $subscriber]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Subscriber $subscriber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        $subscriber->update($request->all());
        return redirect()->route('admin.subscriber.datatable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscriber $subscriber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect()->route('admin.subscriber.datatable');
    }

    public function datatableData()
    {

        return DataTables::of(Subscriber::query())
            ->addColumn('actions', function (Subscriber $subscriber) {
                return view('admin.actions', ['type' => 'subscribers', 'model' => $subscriber]);
            })
            ->make(true);

    }

    public function datatable()
    {
        return view('admin.subscribers.index');
    }

    public function userStore(Request $request)
    {
        Subscriber::create($request->all());
        return redirect()->back();
    }
}

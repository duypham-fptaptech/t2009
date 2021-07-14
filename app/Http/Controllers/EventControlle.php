<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventList()
    {
        return view('admin.products.eventList', ['list'=> Event::paginate(2)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEvent()
    {
        return view('admin.products.eventForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(StoreProductRequest $request)
    {
        $request->validate(
            [
                'eventName' => 'required|min:20',
                'bandNames' => 'required',
                'ticketPrice' => 'required|min:1',
                'status' => 'required|value:0, 1, 2, 3',
            ],
            [
                'eventName.required' => 'Vui lòng nhập tên.',
                'eventName.min' => 'Tên phải lớn hơn 20 ký tự.',
                'bandNames.required' => 'Vui lòng nhập tên ban nhạc.',
                'ticketPrice.min' => 'Giá phải lớn hơn 1.',
                'status.value' => 'Giá phải là 0, 1, 2, 3.',
            ]
        );
        $request->validate();
//        return 'Hello';
//        $obj = new Event();
//        $obj->eventName = $request->get('eventName');
//        $obj->bandNames = $request->get('bandNames');
//        $obj->ticketPrice = $request->get('ticketPrice');
//        $obj->status = $request->get('status');
//        $obj->startDate = Carbon::now()->addDays(-1);
//        $obj->endDate = Carbon::now()->addDays(-2);
//        $obj->save();
//        return redirect('/admin/products/eventForm');
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

<?php

namespace App\Http\Controllers;

use App\DetailsOrder;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DetailOrderController extends Controller
{
    /**
     * @var int
     * Number of pagination result
     */
    protected $pagination_No = 5;
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $detailsOrder=DetailsOrder::paginate($this->pagination_No);
        return view('detailOrders.all')->with(['detailOrders'=>$detailsOrder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //

        return view('detailOrders.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'trader_id' => 'required',
            'detail_id' => 'required',
            'product_id' => 'required',
        ]);
        $order =DetailsOrder::create($request->all());
        return redirect('detail_orders/' . $order->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        $order = DetailsOrder::find($id);
        if ($order) {
            return view('detailOrders.show')->with(['order' => $order]);
        } else {
            return view('errors.Unauth')->with(['msg' => 'variables.not_found']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $order = DetailsOrder::find($id);
        if ($order) {
            return view('detailOrders.edit')->with(['order' => $order]);
        } else {
            return view('errors.Unauth')->with(['msg' => 'variables.not_found']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'trader_id' => 'required',
            'detail_id' => 'required',
            'product_id' => 'required',
        ]);
        $order=DetailsOrder::findOrFail($id);
        if($order)
        {
            $order->update($request->all());
            return redirect('detail_order/' . $order->id);
        }
        else{
            return view('errors.Unauth')->with(['msg' => 'variables.not_found']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        DetailsOrder::destroy($id);
        return redirect('detail_order');
    }
}

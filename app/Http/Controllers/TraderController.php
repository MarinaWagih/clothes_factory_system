<?php

namespace App\Http\Controllers;

use App\Trader;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TraderController extends Controller
{
    /**
     * @var int
     * Number of pagination result
     */
    protected $pagination_No = 5;
    /**
     * Constructor
     * to add Middleware That needed to this controller
     *which are:
     *  1. user should be authenticated
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
        //  $this->middleware('admin',['only'=>['destroy']]);

    }

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $type=$request->get('type');
        $traders=Trader::where('type',$type)->paginate($this->pagination_No);
//        dd($traders[0]);
        return view('trader.all')->with(['traders' => $traders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        $type=$request->get('type');
        return view('trader.create')->with(['add_type'=>$type]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
        $trader =Trader::create($request->all());
        return redirect('trader/' . $trader->id);
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
        $trader = Trader::find($id);
        if ($trader) {
            return view('trader.show')->with(['trader' => $trader]);
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
        $trader = Trader::find($id);
        if ($trader) {
            return view('trader.edit')->with(['trader' => $trader]);
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
        $this->validate($request, ['name' => 'required']);
        $trader = Trader::find($id);
        if ($trader) {
            $trader->update($request->all());
            return redirect('trader/' . $trader->id);
        } else {
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
        Trader::destroy($id);
        return redirect('trader');
    }
    /**
     * search by name or phone or address
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        $name=$request->get('query');
        $type=$request->get('type');
        $products = Product::where('type',$type)
            ->where(function($query) use ($name){
                $query->where('name', 'like', $name . "%")
                    ->orWhere('phone', 'like', '%' .$name . "%")
                    ->orWhere('address','like', '%' . $name . "%");
            })->paginate($this->pagination_No);
        $result=$products->toArray();
        if($request->get('type')=='json')
        {
            return response()->json($result);
        }
        return view('product.all')->with(['products' => $products]);
    }
    public function ajax_search(Request $request)
    {
        $name=$request->get('query');
        $type=$request->get('type');
        if($name!==null) {
            $items =
                Trader::select('id', 'name as text')
                    ->where('name', 'like',$name. "%")
                    ->where('type', '=', $type)
                    ->get();
            return response()->json($items);
        }
        return response()->json([]);
    }
}

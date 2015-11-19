<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
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
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::paginate($this->pagination_No);
        return view('product.all')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('product.create');
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
        $product =Product::create($request->all());
        return redirect('product/' . $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
            return view('product.show')->with(['product' => $product]);
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
        $product = Product::find($id);
        if ($product) {
            return view('product.edit')->with(['product' => $product]);
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
        $product = Product::find($id);
        if ($product) {
            $product->update($request->all());
            return redirect('product/' . $product->id);
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
        Product::destroy($id);
        return redirect('product');
    }

    /**
     * search by name or cost price or selling price
     * @param Request $request
     * @return $this|\Illuminate\Http\JsonResponse
     */
    public function search(Request $request)
    {
        $products = Product::where('name', 'like', $request->get('query') . "%")
            ->orWhere('cost_price', 'like', '%' . $request->get('query') . "%")
            ->orWhere('selling_price','like', '%' . $request->get('query') . "%")
            ->paginate($this->pagination_No);
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
        if($name!==null) {
            $products = Product::select('id', 'name as text')
                ->where('name', 'like', $name . "%")
                ->get();
            return response()->json($products);
        }
        return response()->json([]);

    }
}

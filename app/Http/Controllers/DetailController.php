<?php

namespace App\Http\Controllers;

use App\Detail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DetailController extends Controller
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
//        $this->middleware('admin',['only'=>['destroy']]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $details = Detail::paginate($this->pagination_No);
        return view('detail.all')->with(['details' => $details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('detail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, ['name' => 'required',
            'price' => 'required']);
        $detail =Detail::create($request->all());
        return redirect()->action('DetailController@show' ,['id'=> $detail->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
        $detail = Detail::find($id);
        if ($detail) {
            return view('detail.show')->with(['detail' => $detail]);
        } else {
            return view('errors.Unauth')->with(['msg' => 'variables.not_found']);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $detail = Detail::find($id);
        if ($detail) {
            return view('detail.edit')->with(['detail' => $detail]);
        } else {
            return view('errors.Unauth')->with(['msg' => 'variables.not_found']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, ['name' => 'required',
            'price' => 'required']);
        $detail = Detail::find($id);
        if ($detail) {
            $detail->update($request->all());
            return redirect()->action('DetailController@show' ,['id'=> $detail->id]);
        } else {
            return view('errors.Unauth')->with(['msg' => 'variables.not_found']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
        Detail::destroy($id);
        return redirect()->action('DetailController@index');
    }
    public function search(Request $request)
    {
        $details = Detail::where('name', 'like', $request->get('query') . "%")
            ->orWhere('price', 'like', '%' . $request->get('query') . "%")
            ->get();
//            ->paginate($this->pagination_No);
        $result=$details->toArray();
//        $result['render']=$details->render();
        if($request->get('type')=='json')
        {
            return response()->json($result);
        }
        return view('detail.all')->with(['details' => $details]);
    }

    public function ajax_search(Request $request)
    {
        $name=$request->get('query');
        if($name!==null) {
            $details = Detail::select('id', 'name as text','price')
                ->where('name', 'like', $name . "%")
                ->get();
            return response()->json($details);
        }
        return response()->json([]);

    }

}

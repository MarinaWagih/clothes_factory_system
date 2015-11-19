<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
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
        $materials = Material::paginate($this->pagination_No);

        return view('material.all')->with(['materials' => $materials]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('material.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required',
            'price' => 'required']);
        $material =Material::create($request->all());
        return redirect('material/' . $material->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $material = Material::find($id);
        if ($material) {
            return view('material.show')->with(['material' => $material]);
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
        $material = Material::find($id);
        if ($material) {
            return view('material.edit')->with(['material' => $material]);
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
        $this->validate($request, ['name' => 'required',
            'price' => 'required']);
        $material = Material::find($id);
        if ($material) {
            $material->update($request->all());
            return redirect('material/' . $material->id);
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
        //
        Material::destroy($id);
        return redirect('material');
    }
    public function search(Request $request)
    {
        $materials = Material::where('name', 'like', $request->get('query') . "%")
            ->orWhere('price', 'like', '%' . $request->get('query') . "%")
//            ->get();
            ->paginate($this->pagination_No);
        $result=$materials->toArray();
//        $result['render']=$materials->render();
        if($request->get('type')=='json')
        {
            return response()->json($result);
        }
        return view('material.all')->with(['materials' => $materials]);
    }
}

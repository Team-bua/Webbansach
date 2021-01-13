<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductTypeRepository;
use App\Models\ProductType;
use App\Http\Requests\ProductTypeRequest;


class ProductTypeController extends Controller
{   /**
    * The MemberRepository instance.
    *
    * @var \App\Repositories\ProductTypeRepository
    */
   protected $repository;


  /**
   * Create a new PostController instance.
   *
   * @param  \App\Repositories\ProductTypeRepository $repository
   */
  public function __construct(ProductTypeRepository $repository)
  {
      $this->repository = $repository;
  }
   /**
    * Display a listing of the resource.
    *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product_type = $this->repository->getAll();
        $product_type = $this->repository->search($request); 
        return view('layout_admin.product_type.create_type', compact('product_type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  $this->repository->create($request);
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
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getUpdate(Request $request)
    {
        return $this->repository->update($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $product_type = ProductType::find($id);
        $product_type->delete();
        return response()->json([
            'code' => 200,
            'message' => 'success',
        ], 200);
       
    }

    public function getEdit(Request $request)
    {   
        $type = ProductType::find($request->id);         
        return json_encode((object)['type'=>$type]);
    }
}

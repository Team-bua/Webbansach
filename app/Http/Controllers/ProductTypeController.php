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
    public function index()
    {
        $product_type = $this->repository->getAll();
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
        $this->repository->create($request);
        return redirect(route('book_type.index'));
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
        $product_type = $this->repository->getAll();
        $type = ProductType::find($id);
        return view('layout_admin.product_type.edit_type', compact('type','product_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductTypeRequest $request, $id)
    {
        $this->repository->update($request, $id);
        return redirect(route('book_type.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_type)
    {
        $this->repository->destroy($product_type);
        return redirect()->back();
    }
}

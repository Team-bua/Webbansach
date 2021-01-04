<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
       /**
     * The ProductRepository instance.
     *
     * @var \App\Repositories\ProductRepository
     */
    protected $repository;


   /**
    * Create a new PostController instance.
    *
    * @param  \App\Repositories\ProductRepository $repository
    */
   public function __construct(ProductRepository $repository)
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
        $products = $this->repository->getAll();
        $product = $this->repository->search($request);
        return view('layout_admin.product.products_list', compact('products','product'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = $this->repository->getTypeAll();
        return view('layout_admin.product.products_create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $this->repository->create($request);
        return redirect(route('book.index'));
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
        $product = $this->repository->getproduct($id);
        $type = $this->repository->getTypeAll();
        return view('layout_admin.product.products_edit', compact('type','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $this->repository->update($request, $id);
        return redirect(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $this->repository->destroy($product);
        return redirect()->back();
    }
}

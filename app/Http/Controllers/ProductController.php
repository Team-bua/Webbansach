<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Models\Product;
use App\Models\Product_type;
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

     
    public function index()
    {
        $product = $this->repository->getAll();
        return view('layout_admin.product.products_list', compact('product'));
        //return view('layout_admin.chart.chart_book' );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = Product_type::orderby('id','asc')->get();
        return view('layout_admin.product.products_create', compact('product'));
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

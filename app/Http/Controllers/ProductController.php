<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Models\Product;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
       /**
     * The MemberRepository instance.
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout_admin.product.products_create');
    }

   public function getlaysanpham(){
        return view('layout_admin.product.products_list');
    }
    public function getthemsanpham(){
        return view('layout_admin.product.products_create');
    }
    
}


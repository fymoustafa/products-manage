<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;

class ProductController extends Controller
{
    public function index()
    {
        $products = ProductService::getApiProduct();
        $products = ProductResource::collection($products);
        return response()->json($products, 200);
    }

    function getUser()
    {
       $users = User::get('name','email');    
       $products = UserResources::collection($users);
       return response()->json($users, 200);
    }

}

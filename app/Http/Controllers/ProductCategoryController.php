<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartOpen;
use App\Models\CartUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index($id): JsonResponse
    {
        $types = ProductCategory::where('user_id', auth()->user()->id)
            ->where('cart_id', $id)
            ->get();

        return response()->json(['data' => $types], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $type = new ProductCategory;

        $type->user_id = auth()->user()->id;
        $type->cart_id = $request->cartId;
        $type->cate_name = $request->cate;

        $type->save();

        return response()->json(['id' => $type->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $product_type = Cart::select('id', 'cart_name as cart', 'important_details as description', 'user_id', 'main_photo as cart_photo')->with(['product_categories' => function ($query) {
            $query->select('id as typeId', 'cate_name as type', 'user_id as uid', 'cart_id');
        }, 'user' => function ($query) {
            $query->select('id', 'name');
        }])->withCount('cart_opens as opens')->where('id', $id)->get();

        if(count($product_type) > 0) {
            //add cart opens
            $cartOpen = new CartOpen;

            $cartOpen->user_id = $product_type[0]->user_id;
            $cartOpen->cart_id = $id;
            $cartOpen->open = 1;

            $cartOpen->save();
        }

        // getting save cart
        $saveCart = CartUser::where('user_id', auth()->user()->id)
            ->where('cart_id', $id)
            ->get();

        return response()->json(['cart' => $product_type, 'save_cart' => count($saveCart)], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ProductCategory $productCategory
     * @return JsonResponse
     */
    public function destroy($id): JsonResponse
    {
        ProductCategory::where('id', $id)
            ->where('user_id', auth()->user()->id)
            ->delete();

        return response()->json(['status' => 'success']);
    }
}

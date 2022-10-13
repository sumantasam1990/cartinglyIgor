<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartUser;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class SaveCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $carts = User::with('save_cart_many_single.product_categories.products.product_image')
            ->where('id', auth()->user()->id)
            ->get();

        return response()->json(['carts' => $carts], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        ////
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request): JsonResponse
    {
        $check = Cart::where('status', 1)
            ->where('id', $request->cart)
            ->count('id');
        if($check > 0) {
            $saveCart = new CartUser;

            $saveCart->user_id = auth()->user()->id;
            $saveCart->cart_id = $request->cart;
            $saveCart->type = 'single';

            $saveCart->save();

            return response()->json(['id' => $saveCart->id], 200);
        } else {
            return response()->json(['error' => 'This cart is unpublished.'], 200);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaveCart  $saveCart
     * @return Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaveCart  $saveCart
     * @return Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaveCart  $saveCart
     * @return Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaveCart  $saveCart
     * @return Response
     */
    public function destroy()
    {
        //
    }
}

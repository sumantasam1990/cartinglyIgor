<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$carts = Cart::with(['product_categories.products.product_image'])->get();


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
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        try {
            $file = '';
            if ($request->photo) {
                $folderPath = "uploads/";

                $image_base64 = base64_decode($request->photo);
                $file = $folderPath . 'cartingly_'.uniqid().time() . '.jpg';

                file_put_contents($file, $image_base64);
            }

            $cart = new Cart;

            $cart->user_id = auth()->user()->id;
            $cart->level_two_id = $request->two;
            $cart->cart_name = $request->cart;
            $cart->main_photo = env('APP_URL') . '/' . $file;
            $cart->important_details = $request->desc;
            $cart->main_category_id = $request->main_cate;
            $cart->status = 0;

            $cart->save();

            return response()->json(['id' => $cart->id], 200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Something is wrong. Please try again later.' . $th->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $carts = Cart::select('id', 'cart_name as cart', 'important_details as description', 'user_id', 'main_photo as cart_photo')->with(['product_categories' => function ($query) {
            $query->select('id as typeId', 'cate_name as type', 'user_id as uid', 'cart_id');
        }, 'user' => function ($query) {
            $query->select('id', 'name');
        }])->withCount('cart_opens as opens')->where('level_two_id', $id)->whereStatus(1)->get();

        return response()->json(['carts' => $carts], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    public function update(int $id): JsonResponse
    {
        $published = Cart::where('id', $id)->update(['status' => 1]);
        return response()->json(['id' => $published], 200);
    }

    public function destroy($id): JsonResponse
    {
        Cart::where('id', $id)
            ->delete();
        return response()->json(['delete' => 'deleted']);
    }
}

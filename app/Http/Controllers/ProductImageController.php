<?php

namespace App\Http\Controllers;

use App\Models\ProductImage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id): JsonResponse
    {
        $images = ProductImage::where('product_id', $id)
            ->get();

        return response()->json(['data' => $images], 200);
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

    public function store(Request $request): JsonResponse
    {
        if ($request->photo) {
            $folderPath = "uploads/";

            $image_base64 = base64_decode($request->photo);
            $file = $folderPath . 'cartingly_'.uniqid().time() . '.jpg';

            file_put_contents($file, $image_base64);

            $image = new ProductImage;

            $image->product_id = $request->prod;
            $image->img_url = env('APP_URL') . '/' . $file;

            $image->save();
        }
        return response()->json(['upload' => 'success'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function show(ProductImage $productImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImage $productImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductImage $productImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductImage  $productImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImage $productImage)
    {
        //
    }
}

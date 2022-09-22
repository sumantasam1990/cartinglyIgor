<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Follower;
use App\Models\MainCategory;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function unpublishedCarts(int $id = 0, int $status = 0): JsonResponse
    {
        return $this->extracted($id, $status);
    }

    public function publishedCarts(int $id = 0, int $status = 1): JsonResponse
    {
        return $this->extracted($id, $status);
    }

    public function savedCarts(int $id = 0): JsonResponse
    {
        if($id === 0) {
            $saved_carts = User::with('save_cart_many')
                ->whereId(auth()->user()->id)
                ->get();

        } else {
            $saved_carts = User::with('save_cart_many')
                ->whereId($id)
                ->get();
        }

        return response()->json(['saved_carts' => $saved_carts], 200);
    }

    public function cartsFollowing(int $id = 0): JsonResponse
    {
        if($id === 0) {
            $followers = Follower::with(['followings.carts' => function($query) {
                $query->withCount('cart_opens as opens');
            }])
                ->where('user_id', \auth()->user()->id)
                ->get();
        } else {
            $followers = Follower::with(['followings.carts' => function($query) {
                $query->withCount('cart_opens as opens');
            }])
                ->where('user_id', $id)
                ->get();
        }

        return response()->json(['follow_carts' => $followers], 200);
    }

    public function cartsListing(int $id = 0, int $main = 0): JsonResponse
    {
        if($id === 0) {
            $listing = Cart::where('user_id', \auth()->user()->id)
                ->where('main_category_id', $main)
                ->where('status', 1)
                ->withCount('cart_opens as opens')
                ->get();
        } else {
            $listing = Cart::where('user_id', $id)
                ->where('main_category_id', $main)
                ->where('status', 1)
                ->withCount('cart_opens as opens')
                ->get();
        }

        return response()->json(['listings' => $listing], 200);
    }

    public function totalCartsOpens(int $id = 0): JsonResponse
    {
        if($id === 0) {
            $opens = DB::select('select count(id) as opens from cart_opens where cart_id in (select id from carts where carts.user_id = ?) and user_id = ?', [\auth()->user()->id, \auth()->user()->id]);
        } else {
            $opens = DB::select('select count(id) as opens from cart_opens where cart_id in (select id from carts where carts.user_id = ?) and user_id = ?', [\auth()->user()->id, \auth()->user()->id]);
        }

        return \response()->json(['total' => $opens], 200);
    }

    public function totalFollowers(int $id = 0): JsonResponse
    {
        if($id === 0) {
            $followers = User::withCount('followers as followers')
                ->where('id', \auth()->user()->id)
                ->get();
        } else {
            $followers = User::withCount('followers as followers')
                ->where('id', $id)
                ->get();
        }

        return \response()->json(['total' => $followers], 200);
    }


    private function extracted(int $id, int $status): JsonResponse
    {
        if ($id === 0) {
            $unpublished = Cart::withCount('cart_opens as opens')->where('status', $status)->where('user_id', auth()->user()->id)->get();

        } else {
            $unpublished = Cart::withCount('cart_opens as opens')->where('status', $status)->where('user_id', $id
            )->get();
        }
        return response()->json(['carts' => $unpublished], 200);
    }
}

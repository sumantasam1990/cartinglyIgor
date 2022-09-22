<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LevelOneController;
use App\Http\Controllers\LevelTwoController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaveCartController;
use App\Http\Controllers\SearchController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {

    Route::get('/users', function () {
        return response()->json(User::all());
    });


    // main categories
    Route::get('main/categories', [MainCategoryController::class, 'index']);

    // levels
    Route::get('level/one/show/{id}', [LevelOneController::class, 'show']);
    Route::get('level/two/show/{id}', [LevelTwoController::class, 'show']);

    //carts
    Route::get('carts/show/{id}', [CartController::class, 'show']);
    Route::get('user/save/carts/', [SaveCartController::class, 'index']);

    // product type / category
    Route::get('product/type/{id}', [ProductCategoryController::class, 'show']);

    // product listing
    Route::get('product/list/{id}', [ProductController::class, 'show']);

    // search carts
    Route::get('search/{term}', [SearchController::class, 'index']);

    // profile
    Route::get('profile/unpublished/carts/{id?}', [\App\Http\Controllers\ProfileController::class, 'unpublishedCarts']);

    Route::get('profile/published/carts/{id?}', [\App\Http\Controllers\ProfileController::class, 'publishedCarts']);

    Route::get('profile/saved/carts/{id?}', [\App\Http\Controllers\ProfileController::class, 'savedCarts']);

    Route::get('profile/follow/carts/{id?}', [\App\Http\Controllers\ProfileController::class, 'cartsFollowing']);

    Route::get('profile/listing/carts/{id?}/{main}', [\App\Http\Controllers\ProfileController::class, 'cartsListing']);

    Route::get('profile/total/opens/{id?}', [\App\Http\Controllers\ProfileController::class, 'totalCartsOpens']);

    Route::get('profile/total/followers/{id?}', [\App\Http\Controllers\ProfileController::class, 'totalFollowers']);








});

Route::prefix('v1')->group(function () {

    Route::post('register', [PassportAuthController::class, 'register']);

    Route::post('/sanctum/token', function (Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json(['err' => 'Please check your email or password.'], 401);
        }

        return response()->json(['token' => $user->createToken($request->email.uniqid())->plainTextToken], 200);
    });



});

//Route::get('follow', function () {
//    $user1 = User::find(10001);
//    $user2 = User::find(1);
//    $user1->follow($user2);
//
//    $posts = \App\Models\Cart::whereUserId('1')->pluck('id');
//
//    //dd($posts);
//    //$user1->follow([1,2]); // targets: $post->id, $class = App\Post
//});

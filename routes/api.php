<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FoodStatusController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\OptionDetailController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\ToppingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryFoodController;
use App\Http\Controllers\FoodFoodStatusController;
use App\Http\Controllers\MyCouponController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\FoodOptionController;

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

// ========== Authentication Api ==========
// Login & Register
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    // ========== General Api ==========
    // Food
    Route::get('food/getAll', [FoodController::class, 'getAllFood']);
    Route::get('food/getOne/{id}', [FoodController::class, 'getOneFood']);
    Route::get('food/search', [FoodController::class, 'searchFood']);
    Route::post('food/create', [FoodController::class, 'createFood']);
    Route::put('food/update/{id}', [FoodController::class, 'updateFood']);
    Route::delete('food/delete/{id}', [FoodController::class, 'deleteFood']);
    // Category
    Route::get('category/getAll', [CategoryController::class, 'getAllCategory']);
    Route::get('category/getOne/{id}', [CategoryController::class, 'getOneCategory']);
    Route::get('category/search', [CategoryController::class, 'searchCategory']);
    Route::post('category/create', [CategoryController::class, 'createCategory']);
    Route::put('category/update/{id}', [CategoryController::class, 'updateCategory']);
    Route::delete('category/delete/{id}', [CategoryController::class, 'deleteCategory']);
    // Food Status
    Route::get('foodStatus/getAll', [FoodStatusController::class, 'getAllFoodStatus']);
    Route::get('foodStatus/getOne/{id}', [FoodStatusController::class, 'getOneFoodStatus']);
    Route::get('foodStatus/search', [FoodStatusController::class, 'searchFoodStatus']);
    Route::post('foodStatus/create', [FoodStatusController::class, 'createFoodStatus']);
    Route::put('foodStatus/update/{id}', [FoodStatusController::class, 'updateFoodStatus']);
    Route::delete('foodStatus/delete/{id}', [FoodStatusController::class, 'deleteFoodStatus']);
    // Coupon
    Route::get('coupon/getAll', [CouponController::class, 'getAllCoupon']);
    Route::get('coupon/getOne/{id}', [CouponController::class, 'getOneCoupon']);
    Route::get('coupon/search', [CouponStatusController::class, 'searchCoupon']);
    Route::post('coupon/create', [CouponController::class, 'createCoupon']);
    Route::put('coupon/update/{id}', [CouponController::class, 'updateCoupon']);
    Route::delete('coupon/delete/{id}', [CouponController::class, 'deleteCoupon']);
    // Option
    Route::get('option/getAll', [OptionController::class, 'getAllOption']);
    Route::get('option/getOne/{id}', [OptionController::class, 'getOneOption']);
    Route::get('option/search', [OptionStatusController::class, 'searchOption']);
    Route::post('option/create', [OptionController::class, 'createOption']);
    Route::put('option/update/{id}', [OptionController::class, 'updateOption']);
    Route::delete('option/delete/{id}', [OptionController::class, 'deleteOption']);
    // Option Detail
    Route::get('optionDetail/getAll', [OptionDetailController::class, 'getAllOptionDetail']);
    Route::get('optionDetail/getOne/{id}', [OptionDetailController::class, 'getOneOptionDetail']);
    Route::post('optionDetail/create', [OptionDetailController::class, 'createOptionDetail']);
    Route::put('optionDetail/update/{id}', [OptionDetailController::class, 'updateOptionDetail']);
    Route::delete('optionDetail/delete/{id}', [OptionDetailController::class, 'deleteOptionDetail']);
    // Order
    Route::get('order/getAll', [OrderController::class, 'getAllOrder']);
    Route::get('order/getOne/{id}', [OrderController::class, 'getOneOrder']);
    Route::post('order/create', [OrderController::class, 'createOrder']);
    Route::put('order/update/{id}', [OrderController::class, 'updateOrder']);
    Route::delete('order/delete/{id}', [OrderController::class, 'deleteOrder']);
    // Order Status
    Route::get('orderStatus/getAll', [OrderStatusController::class, 'getAllOrderStatus']);
    Route::get('orderStatus/getOne/{id}', [OrderStatusController::class, 'getOneOrderStatus']);
    Route::get('orderStatus/search', [OrderStatusStatusController::class, 'searchOrderStatus']);
    Route::post('orderStatus/create', [OrderStatusController::class, 'createOrderStatus']);
    Route::put('orderStatus/update/{id}', [OrderStatusController::class, 'updateOrderStatus']);
    Route::delete('orderStatus/delete/{id}', [OrderStatusController::class, 'deleteOrderStatus']);
    // Phone Number
    Route::get('phoneNumber/getAll', [PhoneNumberController::class, 'getAllPhoneNumber']);
    Route::get('phoneNumber/getOne/{id}', [PhoneNumberController::class, 'getOnePhoneNumber']);
    Route::get('phoneNumber/search', [PhoneNumberStatusController::class, 'searchPhoneNumber']);
    Route::post('phoneNumber/create', [PhoneNumberController::class, 'createPhoneNumber']);
    Route::put('phoneNumber/update/{id}', [PhoneNumberController::class, 'updatePhoneNumber']);
    Route::delete('phoneNumber/delete/{id}', [PhoneNumberController::class, 'deletePhoneNumber']);
    // Topping
    Route::get('topping/getAll', [ToppingController::class, 'getAllTopping']);
    Route::get('topping/getOne/{id}', [ToppingController::class, 'getOneTopping']);
    Route::get('topping/search', [ToppingStatusController::class, 'searchTopping']);
    Route::post('topping/create', [ToppingController::class, 'createTopping']);
    Route::put('topping/update/{id}', [ToppingController::class, 'updateTopping']);
    Route::delete('topping/delete/{id}', [ToppingController::class, 'deleteTopping']);
    // User
    Route::get('user/getAll', [UserController::class, 'getAllUser']);
    Route::get('user/getOne/{id}', [UserController::class, 'getOneUser']);
    Route::get('user/search', [UserController::class, 'searchUser']);
    Route::put('user/update/{id}', [UserController::class, 'updateUser']);
    Route::delete('user/delete/{id}', [UserController::class, 'deleteUser']);

    // ========== Map Api ==========
    // Category Food
    Route::get('categoryFood/getAll', [CategoryFoodController::class, 'getAllCategoryFood']);
    Route::get('categoryFood/getOne/{id}', [CategoryFoodController::class, 'getOneCategoryFood']);
    Route::post('categoryFood/create', [CategoryFoodController::class, 'createCategoryFood']);
    Route::put('categoryFood/update/{id}', [CategoryFoodController::class, 'updateCategoryFood']);
    Route::delete('categoryFood/delete/{id}', [CategoryFoodController::class, 'deleteCategoryFood']);
    // Food Food Status
    Route::get('foodFoodStatus/getAll', [FoodFoodStatusController::class, 'getAllFoodFoodStatus']);
    Route::get('foodFoodStatus/getOne/{id}', [FoodFoodStatusController::class, 'getOneFoodFoodStatus']);
    Route::post('foodFoodStatus/create', [FoodFoodStatusController::class, 'createFoodFoodStatus']);
    Route::put('foodFoodStatus/update/{id}', [FoodFoodStatusController::class, 'updateFoodFoodStatus']);
    Route::delete('foodFoodStatus/delete/{id}', [FoodFoodStatusController::class, 'deleteFoodFoodStatus']);
    // Order Detail
    Route::get('foodOption/getAll', [FoodOptionController::class, 'getAllFoodOption']);
    Route::get('foodOption/getOne/{id}', [FoodOptionController::class, 'getOneFoodOption']);
    Route::post('foodOption/create', [FoodOptionController::class, 'createFoodOption']);
    Route::put('foodOption/update/{id}', [FoodOptionController::class, 'updateFoodOption']);
    Route::delete('foodOption/delete/{id}', [FoodOptionController::class, 'deleteFoodOption']);
    // My Coupon
    Route::get('myCoupon/getAll', [MyCouponController::class, 'getAllMyCoupon']);
    Route::get('myCoupon/getOne/{id}', [MyCouponController::class, 'getOneMyCoupon']);
    Route::post('myCoupon/create', [MyCouponController::class, 'createMyCoupon']);
    Route::put('myCoupon/update/{id}', [MyCouponController::class, 'updateMyCoupon']);
    Route::delete('myCoupon/delete/{id}', [MyCouponController::class, 'deleteMyCoupon']);
    // Order Detail
    Route::get('orderDetail/getAll', [OrderDetailController::class, 'getAllOrderDetail']);
    Route::get('orderDetail/getOne/{id}', [OrderDetailController::class, 'getOneOrderDetail']);
    Route::post('orderDetail/create', [OrderDetailController::class, 'createOrderDetail']);
    Route::put('orderDetail/update/{id}', [OrderDetailController::class, 'updateOrderDetail']);
    Route::delete('orderDetail/delete/{id}', [OrderDetailController::class, 'deleteOrderDetail']);

    // ========== Authentication Api ==========
    // Log Out
    Route::post('logout', [AuthController::class, 'logout']);
});
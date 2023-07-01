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
use App\Http\Controllers\OrderListStatusController;
use App\Http\Controllers\PhoneNumberController;
use App\Http\Controllers\ToppingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryFoodController;
use App\Http\Controllers\FoodToppingController;
use App\Http\Controllers\MyCouponController;
use App\Http\Controllers\OrderListController;
use App\Http\Controllers\OrderListOptionController;
use App\Http\Controllers\OrderListToppingController;
use App\Http\Controllers\FoodOptionController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\IngredientGroupController;
use App\Http\Controllers\IngredientUnitController;
use App\Http\Controllers\IngredientFoodController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockDateController;
use App\Http\Controllers\LogDateStockController;
use App\Http\Controllers\TimeCountdownController;

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

Route::group(['middleware' => 'auth:sanctum'], function () {
    // ========== Authentication Api ==========
    // Log Out
    Route::post('auth/logout', [AuthController::class, 'logout']);
    
    // ======== General Api Protected =========
    // Ingredient
    Route::post('ingredient/create', [IngredientController::class, 'createIngredient']);
    Route::put('ingredient/update/{id}', [IngredientController::class, 'updateIngredient']);
    Route::delete('ingredient/delete/{id}', [IngredientController::class, 'deleteIngredient']);
    // Stock
    Route::post('stock/create', [StockController::class, 'createStock']);
    Route::put('stock/update/{id}', [StockController::class, 'updateStock']);
    Route::delete('stock/delete/{id}', [StockController::class, 'deleteStock']);
    // Food
    Route::post('food/create', [FoodController::class, 'createFood']);
    Route::post('food/update/{id}', [FoodController::class, 'updateFood']);
    Route::delete('food/delete/{id}', [FoodController::class, 'deleteFood']);
    // Category
    Route::post('category/create', [CategoryController::class, 'createCategory']);
    Route::post('category/update/{id}', [CategoryController::class, 'updateCategory']);
    Route::delete('category/delete/{id}', [CategoryController::class, 'deleteCategory']);
    // Option
    Route::post('option/create', [OptionController::class, 'createOption']);
    Route::put('option/update/{id}', [OptionController::class, 'updateOption']);
    Route::delete('option/delete/{id}', [OptionController::class, 'deleteOption']);
    // Option Detail
    Route::post('optionDetail/create', [OptionDetailController::class, 'createOptionDetail']);
    Route::put('optionDetail/update/{id}', [OptionDetailController::class, 'updateOptionDetail']);
    Route::delete('optionDetail/delete/{id}', [OptionDetailController::class, 'deleteOptionDetail']);
    // Order Status
    Route::post('orderStatus/create', [OrderStatusController::class, 'createOrderStatus']);
    Route::put('orderStatus/update/{id}', [OrderStatusController::class, 'updateOrderStatus']);
    Route::delete('orderStatus/delete/{id}', [OrderStatusController::class, 'deleteOrderStatus']);
    // Countdown
    Route::post('countdown/create', [TimeCountdownController::class, 'createCountdown']);
    Route::put('countdown/update/{id}', [TimeCountdownController::class, 'updateCountdown']);
    Route::delete('countdown/delete/{id}', [TimeCountdownController::class, 'deleteCountdown']);
    // Order List Status
    Route::post('orderListStatus/create', [OrderListStatusController::class, 'createOrderListStatus']);
    Route::put('orderListStatus/update/{id}', [OrderListStatusController::class, 'updateOrderListStatus']);
    Route::delete('orderListStatus/delete/{id}', [OrderListStatusController::class, 'deleteOrderListStatus']);
    // Topping
    Route::post('topping/create', [ToppingController::class, 'createTopping']);
    Route::put('topping/update/{id}', [ToppingController::class, 'updateTopping']);
    Route::delete('topping/delete/{id}', [ToppingController::class, 'deleteTopping']);

    // ========== Map Api Protected ==========
    // Category Food
    Route::post('categoryFood/create', [CategoryFoodController::class, 'createCategoryFood']);
    Route::put('categoryFood/update/{id}', [CategoryFoodController::class, 'updateCategoryFood']);
    Route::delete('categoryFood/delete/{id}', [CategoryFoodController::class, 'deleteCategoryFood']);
    // Food Option
    Route::post('foodOption/create', [FoodOptionController::class, 'createFoodOption']);
    Route::put('foodOption/update/{id}', [FoodOptionController::class, 'updateFoodOption']);
    Route::delete('foodOption/delete/{id}', [FoodOptionController::class, 'deleteFoodOption']);
    // Food Topping
    Route::post('foodTopping/create', [FoodToppingController::class, 'createFoodTopping']);
    Route::put('foodTopping/update/{id}', [FoodToppingController::class, 'updateFoodTopping']);
    Route::delete('foodTopping/delete/{id}', [FoodToppingController::class, 'deleteFoodTopping']);
    // My Coupon
    Route::post('myCoupon/create', [MyCouponController::class, 'createMyCoupon']);
    Route::put('myCoupon/update/{id}', [MyCouponController::class, 'updateMyCoupon']);
    Route::delete('myCoupon/delete/{id}', [MyCouponController::class, 'deleteMyCoupon']);

    // Order List Option
    Route::post('orderListOption/create', [OrderListOptionController::class, 'createOrderListOption']);
    Route::put('orderListOption/update/{id}', [OrderListOptionController::class, 'updateOrderListOption']);
    Route::delete('orderListOption/delete/{id}', [OrderListOptionController::class, 'deleteOrderListOption']);
    // Order List Topping
    Route::post('orderListTopping/create', [OrderListToppingController::class, 'createOrderListTopping']);
    Route::put('orderListTopping/update/{id}', [OrderListToppingController::class, 'updateOrderListTopping']);
    Route::delete('orderListTopping/delete/{id}', [OrderListToppingController::class, 'deleteOrderListTopping']);
     // Ingredient Group
    Route::post('ingredientGroup/create', [IngredientGroupController::class, 'createIngredientGroup']);
    Route::put('ingredientGroup/update/{id}', [IngredientGroupController::class, 'updateIngredientGroup']);
    Route::delete('ingredientGroup/delete/{id}', [IngredientGroupController::class, 'deleteIngredientGroup']);
    // Ingredient Unit
    Route::post('ingredientUnit/create', [IngredientUnitController::class, 'createIngredientUnit']);
    Route::put('ingredientUnit/update/{id}', [IngredientUnitController::class, 'updateIngredientUnit']);
    Route::delete('ingredientUnit/delete/{id}', [IngredientUnitController::class, 'deleteIngredientUnit']);
    // Ingredient Food
    Route::post('ingredientFood/create', [IngredientFoodController::class, 'createIngredientFood']);
    Route::put('ingredientFood/update/{id}', [IngredientFoodController::class, 'updateIngredientFood']);
    Route::delete('ingredientFood/delete/{id}', [IngredientFoodController::class, 'deleteIngredientFood']);
    // Stock Date
    Route::post('stockDate/create', [StockDateController::class, 'createStockDate']);
    Route::put('stockDate/update/{id}', [StockDateController::class, 'updateStockDate']);
    Route::delete('stockDate/delete/{id}', [StockDateController::class, 'deleteStockDate']);
    // Log Date Stock
    Route::post('logDateStock/create', [LogDateStockController::class, 'createLogDateStock']);
    Route::put('logDateStock/update/{id}', [LogDateStockController::class, 'updateLogDateStock']);
    Route::delete('logDateStock/delete/{id}', [LogDateStockController::class, 'deleteLogDateStock']);
});

// ========== Authentication Api ==========
// Admin Login
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/register', [AuthController::class, 'register']);

// ============= General Api ==============
// Food
Route::get('food/getAll', [FoodController::class, 'getAllFood']);
Route::get('food/getOne/{id}', [FoodController::class, 'getOneFood']);
Route::get('food/getAndCount', [FoodController::class, 'getAndCountFood']);
Route::get('food/search', [FoodController::class, 'searchFood']);
// Category
Route::get('category/getAll', [CategoryController::class, 'getAllCategory']);
Route::get('category/getOne/{id}', [CategoryController::class, 'getOneCategory']);
Route::get('category/getAndCount', [CategoryController::class, 'getAndCountCategory']);
Route::get('category/search', [CategoryController::class, 'searchCategory']);
// Option
Route::get('option/getAll', [OptionController::class, 'getAllOption']);
Route::get('option/getOne/{id}', [OptionController::class, 'getOneOption']);
Route::get('option/getAndCount', [OptionController::class, 'getAndCountOption']);
Route::get('option/search', [OptionController::class, 'searchOption']);
// Option Detail
Route::get('optionDetail/getAll', [OptionDetailController::class, 'getAllOptionDetail']);
Route::get('optionDetail/getOne/{id}', [OptionDetailController::class, 'getOneOptionDetail']);
Route::get('optionDetail/getAndCount', [OptionDetailController::class, 'getAndCountOptionDetail']);
Route::get('optionDetail/search', [OptionDetailController::class, 'searchOptionDetail']);
// Order
Route::get('order/getAll', [OrderController::class, 'getAllOrder']);
Route::get('order/getAndCount', [OrderController::class, 'getAndCountOrder']);
Route::get('order/getOne/{id}', [OrderController::class, 'getOneOrder']);
Route::post('order/create', [OrderController::class, 'createOrder']);
Route::put('order/update/{id}', [OrderController::class, 'updateOrder']);
Route::delete('order/delete/{id}', [OrderController::class, 'deleteOrder']);
// Order Status
Route::get('orderStatus/getAll', [OrderStatusController::class, 'getAllOrderStatus']);
Route::get('orderStatus/getOne/{id}', [OrderStatusController::class, 'getOneOrderStatus']);
Route::get('orderStatus/getAndCount', [OrderStatusController::class, 'getAndCountStatus']);
Route::get('orderStatus/search', [OrderStatusController::class, 'searchOrderStatus']);
// Countdown
Route::get('countdown/getAll', [TimeCountdownController::class, 'getAllCountdown']);
Route::get('countdown/getOne/{id}', [TimeCountdownController::class, 'getOneCountdown']);
Route::get('countdown/getAndCount', [TimeCountdownController::class, 'getAndCountCountdown']);
Route::get('countdown/search', [TimeCountdownController::class, 'searchCountdown']);
// Order List Status
Route::get('orderListStatus/getAll', [OrderListStatusController::class, 'getAllOrderListStatus']);
Route::get('orderListStatus/getAndCount', [OrderListStatusController::class, 'getAndCountOrderListStatus']);
Route::get('orderListStatus/getOne/{id}', [OrderListStatusController::class, 'getOneOrderListStatus']);
Route::get('orderListStatus/search', [OrderListStatusController::class, 'searchOrderListStatus']);
// Topping
Route::get('topping/getAll', [ToppingController::class, 'getAllTopping']);
Route::get('topping/getOne/{id}', [ToppingController::class, 'getOneTopping']);
Route::get('topping/getAndCount', [ToppingController::class, 'getAndCountTopping']);
Route::get('topping/search', [ToppingController::class, 'searchTopping']);
// User
Route::get('user/getAll', [UserController::class, 'getAllUser']);
Route::get('user/getOne/{id}', [UserController::class, 'getOneUser']);
Route::get('user/search', [UserController::class, 'searchUser']);
Route::post('user/create', [UserController::class, 'createUser']);
Route::put('user/update/{id}', [UserController::class, 'updateUser']);
Route::delete('user/delete/{id}', [UserController::class, 'deleteUser']);
// Ingredient
Route::get('ingredient/getAll', [IngredientController::class, 'getAllIngredient']);
Route::get('ingredient/getOne/{id}', [IngredientController::class, 'getOneIngredient']);
Route::get('ingredient/getAndCount', [IngredientController::class, 'getAndCountIngredient']);
Route::get('ingredient/search', [IngredientController::class, 'searchIngredient']);
// Stock
Route::get('stock/getAll', [StockController::class, 'getAllStock']);
Route::get('stock/getOne/{id}', [StockController::class, 'getOneStock']);
Route::get('stock/getAndCount', [StockController::class, 'getAndCountStock']);

// ============== Map Api ==============
// Category Food
Route::get('categoryFood/getAll', [CategoryFoodController::class, 'getAllCategoryFood']);
Route::get('categoryFood/getOne/{id}', [CategoryFoodController::class, 'getOneCategoryFood']);
// Food Option
Route::get('foodOption/getAll', [FoodOptionController::class, 'getAllFoodOption']);
Route::get('foodOption/getOne/{id}', [FoodOptionController::class, 'getOneFoodOption']);
// Food Topping
Route::get('foodTopping/getAll', [FoodToppingController::class, 'getAllFoodTopping']);
Route::get('foodTopping/getOne/{id}', [FoodToppingController::class, 'getOneFoodTopping']);
// Order List
Route::get('orderList/getAll', [OrderListController::class, 'getAllOrderList']);
Route::get('orderList/getAndCount', [OrderListController::class, 'getAndCountOrderList']);
Route::get('orderList/getAndCountOrderListID1', [OrderListController::class, 'getAndCountOrderListID1']);
Route::get('orderList/getAndCountOrderListID2', [OrderListController::class, 'getAndCountOrderListID2']);
Route::get('orderList/getAndCountOrderListID3', [OrderListController::class, 'getAndCountOrderListID3']);
Route::get('orderList/getAndCountOrderListID4', [OrderListController::class, 'getAndCountOrderListID4']);
Route::get('orderList/getOne/{id}', [OrderListController::class, 'getOneOrderList']);
Route::post('orderList/create', [OrderListController::class, 'createOrderList']);
Route::put('orderList/update/{id}', [OrderListController::class, 'updateOrderList']);
Route::delete('orderList/delete/{id}', [OrderListController::class, 'deleteOrderList']);
// Order List Option
Route::get('orderListOption/getAll', [OrderListOptionController::class, 'getAllOrderListOption']);
Route::get('orderListOption/getOne/{id}', [OrderListOptionController::class, 'getOneOrderListOption']);
// Order List Topping
Route::get('orderListTopping/getAll', [OrderListToppingController::class, 'getAllOrderListTopping']);
Route::get('orderListTopping/getOne/{id}', [OrderListToppingController::class, 'getOneOrderListTopping']);
// Log Stock Date
Route::get('logDateStock/getAll', [LogDateStockController::class, 'getAllLogDateStock']);
Route::get('logDateStock/getOne/{id}', [LogDateStockController::class, 'getOneLogDateStock']);
// Stock Date
Route::get('stockDate/getAll', [StockDateController::class, 'getAllStockDate']);
Route::get('stockDate/getOne/{id}', [StockDateController::class, 'getOneStockDate']);
Route::get('stockDate/getAndCount', [StockDateController::class, 'getAndCountStockDate']);
Route::get('stockDate/search', [StockDateController::class, 'searchStockDate']);
// Ingredient Group
Route::get('ingredientGroup/getAll', [IngredientGroupController::class, 'getAllIngredientGroup']);
Route::get('ingredientGroup/getOne/{id}', [IngredientGroupController::class, 'getOneIngredientGroup']);
Route::get('ingredientGroup/getAndCount', [IngredientGroupController::class, 'getAndCountIngredientGroup']);
Route::get('ingredientGroup/search', [IngredientGroupController::class, 'searchIngredientGroup']);
// Ingredient Unit
Route::get('ingredientUnit/getAll', [IngredientUnitController::class, 'getAllIngredientUnit']);
Route::get('ingredientUnit/getOne/{id}', [IngredientUnitController::class, 'getOneIngredientUnit']);
Route::get('ingredientUnit/getAndCount', [IngredientUnitController::class, 'getAndCountIngredientUnit']);
Route::get('ingredientUnit/search', [IngredientUnitController::class, 'searchIngredientUnit']);
// Ingredient Food
Route::get('ingredientFood/getAll', [IngredientFoodController::class, 'getAllIngredientFood']);
Route::get('ingredientFood/getOne/{id}', [IngredientFoodController::class, 'getOneIngredientFood']);
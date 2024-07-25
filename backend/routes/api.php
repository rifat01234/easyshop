<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/getvisitor',[VisitorController::class, 'GetVisitorDetails']);
// Contact page route
Route::post('/postcontact',[ContactController::class, 'PostContactDetails']);

// Site Info Route
Route::get('/Allsiteinfo',[SiteinfoController::class, 'AllSiteinfo']);

// All Category Route
Route::get('/allcategory',[CategoryController::class, 'AllCategory']);

// ProductList Route
Route::get('/productlistbyremark/{remark}',[ProductListController::class, 'ProductListByRemark']);

Route::get('/productlistbysubcategory/{category}',[ProductListController::class, 'ProducctListByCategory']);

// Slider Route
Route::get('/allslider',[CategoryController::class, 'AllSlider']);

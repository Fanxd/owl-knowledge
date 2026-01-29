<?php

use Illuminate\Support\Facades\Route;
use Fanxd\OwlKnowledge\Http\Controllers\KnowledgeCategoryController;
use Fanxd\OwlKnowledge\Http\Controllers\KnowledgeController;
use Fanxd\OwlKnowledge\Http\Controllers\KnowledgeSceneController;

/*
|--------------------------------------------------------------------------
| Knowledge Routes
|--------------------------------------------------------------------------
*/

Route::prefix('knowledge')->group(function () {
    Route::resource('items', KnowledgeController::class);
    Route::resource('categories', KnowledgeCategoryController::class);
    Route::resource('scenes', KnowledgeSceneController::class);
});

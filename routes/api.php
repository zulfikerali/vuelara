<?php

use App\Http\Resources\TodayTaskResource;
use App\Http\Resources\UpcomingResource;
use App\Models\Today;
use App\Models\Upcoming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//get all Upcoming
Route::get('/upcoming', function () {
    $upcoming = Upcoming::all();
    return UpcomingResource::collection($upcoming);
});
//add new task
Route::post('/upcoming', function (Request $req) {
    return Upcoming::create([
        'title' => $req->title,
        'taskId' => $req->taskId,
        'waiting' => $req->waiting
    ]);
});
//delete task
Route::delete('/upcoming/{taskId}', function ($taskId) {
    Upcoming::where('taskId', $taskId)->delete();
    return '204';
});
//get all daily task
Route::get('/dailytask', function () {
    $today = Today::all();
    return TodayTaskResource::collection($today);
});

//add daily task
Route::post('/dailytask', function (Request $req) {
    return Today::create([
        'title' => $req->title,
        'taskId' => $req->taskId,
        'waiting' => $req->waiting
    ]);
});

//delete daily task

Route::delete('/dailytask/{taskId}', function ($taskId) {
    Today::where('taskId', $taskId)->delete();
    return '204';
});

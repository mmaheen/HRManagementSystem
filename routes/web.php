<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\NoticeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [HomeController::class,'dashboard'])->name('dashboard');
Route::get('/organization', [OrganizationController::class,'index'])->name('organization');
Route::get('/employee/list', [EmployeeController::class,'index'])->name('employee.list');
Route::get('/leave', [LeaveController::class,'index'])->name('leave.list');
Route::get('/department/list', [DepartmentController::class,'index'])->name('department.list');
Route::get('/atendance/list', [AttendanceController::class,'index'])->name('attendance.list');
Route::get('/designations', [DesignationController::class,'index'])->name('designation');
Route::get('/rolls', [RoleController::class,'index'])->name('roll.list');
Route::get('/permission', [PermissionController::class,'index'])->name('permission.list');
Route::get('/asset/list', [AssetController::class,'index'])->name('asset.list');
Route::get('/notice/list', [NoticeController::class,'index'])->name('notice.list');

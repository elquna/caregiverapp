<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LogicController;

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

Route::get('/', [PagesController::class,'login'])->name('login');
Route::get('/login', [PagesController::class,'login'])->name('adminlogin');
Route::post('mainlogin', [LogicController::class,'processlogin']);
Route::get('dashboard/main', [LogicController::class,'dashboard'])->name('dashboard');
Route::get('dashboard/quicksearch', [LogicController::class,'quicksearch'])->name('quicksearch');
Route::get('dashboard/agency_setup', [LogicController::class,'agency'])->name('agency');
Route::get('dashboard/manage_zones', [LogicController::class,'zones'])->name('zone');
Route::post('processaddzone', [LogicController::class,'processaddzone'])->name('processaddzone');
Route::get('dashboard/viewzones', [LogicController::class,'viewzones'])->name('viewzones');
Route::post('agency/addemployeegeneral', [LogicController::class,'addemployeegeneral'])->name('addemployeegeneral');
Route::get('dashboard/employee/update', [LogicController::class,'dashboard_employee_update'])->name('dashboard_employee_update');
Route::post('agency/updatelocationemployee', [LogicController::class,'updatelocationemployee']);
Route::get('agency/loadadvancedformforemployee', [LogicController::class,'loadadvancedformforemployee']);
Route::post('agency/updateemployeeadvanced', [LogicController::class,'updateemployeeadvanced']);
Route::get('dashboard/view/employees', [LogicController::class,'viewemployees'])->name('viewemployees');
Route::get('view_employee_details/{addedsecond}', [LogicController::class,'view_employee_details'])->name('view_employee_details');
Route::get('agency/loadcertifications', [LogicController::class,'loadcertifications']);
Route::post('admin/uploadfile', [LogicController::class,'uploadfile']);











Route::get('dashboard/add_employee/{holder}', [LogicController::class,'addemployee'])->name('addemployee');

Route::get('dashboard/messaging', [LogicController::class,'messaging'])->name('messaging');
Route::get('dashboard/schedule', [LogicController::class,'schedule'])->name('schedule');
Route::get('dashboard/add_shift', [LogicController::class,'addshift'])->name('addshift');
Route::get('dashboard/add_timecard', [LogicController::class,'addtimecard'])->name('addtimecard');
Route::get('dashboard/edit_timecard', [LogicController::class,'viewtimecard'])->name('edittimecard');
Route::get('dashboard/view_timecard', [LogicController::class,'viewtimecard'])->name('viewtimecard');
Route::get('dashboard/map', [LogicController::class,'map'])->name('map');
Route::get('dashboard/authorization', [LogicController::class,'authorization'])->name('authorization');
Route::get('logout', [LogicController::class,'logout'])->name('logout');
Route::post('agency/changestate', [LogicController::class,'changestate'])->name('changestate');
Route::post('agency/changecity', [LogicController::class,'changecity'])->name('changecity');
Route::post('agency/updatestageone', [LogicController::class,'updatestageone'])->name('updatestageone');
Route::get('manage/managemember', [LogicController::class,'managemember'])->name('managemember');
Route::get('dashboard/view_members', [LogicController::class,'viewmembers'])->name('viewmembers');
Route::post('agency/processeditemployee', [LogicController::class,'processeditemployee'])->name('processeditemployee');
Route::post('agency/configuration', [LogicController::class,'configuration'])->name('configuration');
Route::post('agency/notification', [LogicController::class,'notification'])->name('notification');
Route::post('agency/threshold', [LogicController::class,'threshold'])->name('threshold');
Route::post('agency/processaddemployee', [LogicController::class,'processaddemployee'])->name('processaddemployee');
Route::post('agency/updateaddemployeelocation', [LogicController::class,'updateaddemployeelocation'])->name('updateaddemployeelocation');
Route::post('agency/updateaddemployeeadvance', [LogicController::class,'updateaddemployeeadvance'])->name('updateaddemployeeadvance');
Route::post('agency/updatepreference', [LogicController::class,'updatepreference'])->name('updatepreference');
Route::post('agency/updatecertification', [LogicController::class,'updatecertification'])->name('updatecertification');
Route::get('dashboard/edit_employee_data/locale/english/{holder}', [LogicController::class,'editemployee'])->name('editemployee');
Route::post('members/addmembers', [LogicController::class,'addmembers'])->name('addmembers');
Route::post('members/updatememberlocation', [LogicController::class,'updatememberlocation'])->name('updatememberlocation');
Route::post('members/updatememberadvance', [LogicController::class,'updatememberadvance'])->name('updatememberadvance');
Route::post('members/updatemembercareplandoc', [LogicController::class,'updatemembercareplandoc'])->name('updatemembercareplandoc');
Route::post('members/updatememberbilling', [LogicController::class,'updatememberbilling'])->name('updatememberbilling');
Route::post('members/updatememberinsurance', [LogicController::class,'updatememberinsurance'])->name('updatememberinsurance');

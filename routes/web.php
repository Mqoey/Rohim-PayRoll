<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Models\Employee;
use App\Models\EmployeeType;
use App\Models\Payroll;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::group(['middleware' => 'auth'], function () {

Route::get('/dashboard', function () {

    return view(
        'admin.dashboard.dashboard')
        ->with('users', User::all()->count())
        ->with('pay', Payroll::all()->sum('net_salary'))
        ->with('employees', Employee::all()->count());
    
})->middleware(['auth'])->name('dashboard');

//payroll
Route::get('/report', function () {
    return view('admin.payroll.report');
});

//employee
// Route::get('/salary_manage', function () {
//     return view('admin.payroll.salary_manage',
//      ['employees' => Employee::all()] ,
//     //  ['employee_types' => EmployeeType::all()] ,
//      ['settings'=> Setting::all()]);
// });

//manage salary
Route::get('/salary_manage', [PayrollController::class, 'index']);
// Route::post('/salary_manage', [PayrollController::class, 'store']);
Route::get('/salary_list', [PayrollController::class, 'list']);

Route::get('/users', function () {
    return view('admin.employee.users', ['users' => User::all()]);
});
Route::get('/users/{user}', [UserController::class, 'delete']);

Route::get('/employee_manange', [EmployeeController::class, 'index']);
Route::get('/employee_manange/{employee}', [EmployeeController::class, 'delete']);
Route::get('/employee_manange/{employee}/edit', [EmployeeController::class, 'edit']);
Route::post('/employee_manange/update', [EmployeeController::class, 'update']);

Route::get('/employee_new', function () {
    return view('admin.employee.employee_new', ['users' => User::all()]);
});

//accessories
Route::get('/profile', function () {
    return view('admin.dashboard.profile');
});

//accessories
Route::get('/contact_us', function () {
    return view('admin.dashboard.contact');
});


// Route::get('/', function () {
//     return view('admin.settings.settings', ['settings'=> Setting::all()]);
// });

Route::get('/settings' , [SettingController::class , 'index']);
Route::post('/settings' , [SettingController::class , 'update']);

Route::resource('salary', SalaryController::class);

Route::resource('employees', EmployeeController::class);

Route::resource('salary', PayrollController::class);

});
require __DIR__ . '/auth.php';
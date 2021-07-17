<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\UserController;
use App\Models\Employee;
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
    //
    Route::get('/salary_list', function () {
        return view('admin.payroll.salary_list', ['employees' => Employee::all()]);
    });



Route::get('/dashboard', function () {

    return view(
        'admin.dashboard.dashboard',
        ['users' => User::all()->count()],
        ['employees' => Employee::all()->count()]
    );
})->middleware(['auth'])->name('dashboard');

//payroll
Route::get('/report', function () {
    return view('admin.payroll.report');
});

//employee
Route::get('/salary_manage', function () {
    return view('admin.payroll.salary_manage',
     ['employees' => Employee::all()] ,
     ['settings'=> Setting::all()]);
});

Route::get('/users', function () {
    return view('admin.employee.users', ['users' => User::all()]);
});
Route::get('/users/{user}', [UserController::class, 'delete']);

Route::get('/employee_manange', [EmployeeController::class, 'index']);
Route::get('/employee_manange/{employee}', [EmployeeController::class, 'delete']);
Route::get('/employee_manange/{employee}/edit', [EmployeeController::class, 'edit']);

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


Route::get('/settings', function () {
    return view('admin.settings.settings', ['settings'=> Setting::all()]);
});

Route::resource('salary', SalaryController::class);

Route::resource('employees', EmployeeController::class);

});
require __DIR__ . '/auth.php';

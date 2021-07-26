<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.employee.employee_manage', ['employees' => Employee::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if (Employee::create($data)) {
            return redirect('employee_new')->withMessage('New employee added');
        }
        return redirect('employee_new')->withMessage('Error while creating');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {

        $_employee = $employee;

        return view('admin.employee.employee_edit')
        ->with('employee', $_employee)
        ->with('users' , User::all());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $id = $request->input('h_id');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $address = $request->input('address');
        $city = $request->input('city');
        $gender = $request->input('gender');
        $id_passport_number = $request->input('id_passport_number');
        $phone_number = $request->input('phone_number');
        $email_adderss = $request->input('email_adderss');
        $start_date = $request->input('start_date');
        $user_id = $request->input('user_id');

        DB::update('UPDATE employees SET first_name = ?, last_name = ?,
         address = ?, city = ?, gender = ?, id_passport_number = ?, phone_number = ?,
         email_adderss = ?, start_date = ?, user_id = ? WHERE `employees`.`id` = ?', 
         [$first_name, $last_name, $address, $city, $gender, $id_passport_number,
          $phone_number, $email_adderss, $start_date, $user_id, $id]);

        return view('admin.employee.employee_manage', ['employees' => Employee::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function delete(Employee $employee)
    {
        if ($employee->delete()) {
            return redirect('employee_manange')->withMessage('Employee deleted');
        }
        return redirect('employee_manange')->withMessage('Error while deleting');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeType;
use App\Models\Payroll;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PayrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paye = DB::table('settings')->where('id', '1')->value('paye');
        $paye = floatval($paye);

        $pension = DB::table('settings')->where('id', '1')->value('pension');
        $pension = floatval($pension);

        $nassa = DB::table('settings')->where('id', '1')->value('nassa');
        $nassa = floatval($nassa);

        $zero_payee = DB::table('settings')->where('id', '1')->value('zero_payee');
        $zero_payee = floatval($zero_payee);

        $period_earning = DB::table('settings')->where('id', '1')->value('period_earning');
        $period_earning = floatval($period_earning);

        return view('admin.payroll.salary_manage')
            ->with('employees', Employee::all())
            ->with('employee_types', EmployeeType::all())

            ->with('paye', $paye)
            ->with('pension', $pension)
            ->with('nassa', $nassa)
            ->with('zero_payee', $zero_payee)
            ->with('period_earning', $period_earning);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user_id)
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
        $data = new Payroll;
        $data->employee_id = $request->input('employee_id');
        $data->basic_salary = $request->input('basic_salary');
        $data->house_rent_allowance = $request->input('house_rent_allowance');
        $data->medical_allowance = $request->input('medical_allowance');
        $data->special_allowance = $request->input('special_allowance');
        $data->provident_fund_contribution = $request->input('provident_fund_contribution');
        $data->other_allowance = $request->input('other_allowance');
        $data->paye_deduction = $request->input('paye_val');
        $data->zero_paye_deduction = $request->input('zero_payee_val');
        $data->pension_deduction = $request->input('pension_val');
        $data->nassa_deduction = $request->input('nassa_val');
        $data->period_earning_deduction = $request->input('period_earning_val');
        $data->save();



        if ($data->save()) {
            return redirect('salary_manage')->withMessage('New employee added');
        }
        return redirect('salary_manage')->withMessage('Error while creating');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function show(Payroll $payroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function edit(Payroll $payroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payroll $payroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payroll  $payroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payroll $payroll)
    {
        //
    }

    public function list()
    {
        // $id = DB::select('select * from payrolls where id = ?', [1]);
        
        // $list = Employee::find($id);
        // foreach ($list->role as $role) {
        //     return $role->id;
        // }
        return view('admin.payroll.salary_list', ['employees' => Payroll::all()]);
    }
}

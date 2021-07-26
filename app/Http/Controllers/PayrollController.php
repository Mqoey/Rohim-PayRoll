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

        $nassa = DB::table('settings')->where('id', '1')->value('nassa');
        $nassa = floatval($nassa);

        $aids_levy = DB::table('settings')->where('id', '1')->value('aids_levy');
        $aids_levy = floatval($aids_levy);

        return view('admin.payroll.salary_manage')
            ->with('employees', Employee::all())
            ->with('employee_types', EmployeeType::all())

            ->with('paye', $paye)
            ->with('nassa', $nassa)
            ->with('aids_levy', $aids_levy);
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
        $data->zero_paye_deduction = $request->input('aids_levy_val');
        $data->nassa_deduction = $request->input('nassa_val');
        $data->net_salary = $request->input('net_salary');
        $data->total_deduction = $request->input('total_deduction');
        $data->save();

        if ($data->save()) {
            return redirect('salary_manage')->withMessage('Salary Saved successfully');
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

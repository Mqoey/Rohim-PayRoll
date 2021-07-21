<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $table = 'payrolls';

    protected $fillable = [

        'id', 'employee_id', 'basic_salary',
        'house_rent_allowance', 'medical_allowance', 'special_allowance',
        'provident_fund_contribution', 'other_allowance', 'paye_deduction',
        'zero_paye_deduction', 'nassa_deduction', 'period_earning_deduction',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->hasMany(Type::class);
    }

    public function allowances()
    {
        return $this->hasMany(Allowance::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}

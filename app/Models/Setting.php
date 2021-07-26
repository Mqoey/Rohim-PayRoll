<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table = 'settings';

    protected $fillable = [

        'id', 'paye', 'basic_salary','nassa',

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

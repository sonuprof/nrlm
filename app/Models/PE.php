<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PE extends Model
{
    use HasFactory;
    protected $fillable = [
        'state',
        'promoting_agency',
        'fpo',
        'district',
        'regs_date',
        'commodity',
        'members',
        'Sales_Revenue_2017_18',
        'Sales_Revenue_2018_19',
        'Sales_Revenue_2019_20',
        'Sales_Revenue_2020_21',
        'Sales_Revenue_2021_22',
        'Sales_Revenue_2022_23',
        'Mem_target_fy_2023_24',
        'Sales_Revenue_2023_24',
        'created_by',
        'regs_date',
    ];
}

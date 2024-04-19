<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PG extends Model
{
    use HasFactory;
    protected $fillable = [
        'state',
        'district',
        'block',
        'village',
        'int_producer_id',
        'pgroupname',
        'date_of_formation',
        'category_Name',
        'commoditties',
        'office_address',
        'member_no_in_pgroup',
        'bank_name',
        'branch_name',
        'signatoryname1',
        'signatorydesignation1',
        'desg_commoditties',
        'community_cader_name',
        'promotedunderschemename',
        'financial_month_year',
        'initial_cash_in_hand',
        'initial_cash_in_bank',
        'initial_stock_cost',
        'initial_total_amount',
        'entered_mis_date',
        'created_by',
    ];
}

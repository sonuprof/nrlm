<?php

namespace App\Imports;
use App\Models\PG;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class PGImport implements  ToModel, WithStartRow
{
    private $savedCount;

    public function __construct()
    {
        $this->savedCount = 0;
    }
    public function startRow(): int
    {
        return 2; // Skip the first row (header row)
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $pg= new PG([
            'state' => $row[0],
            'district' => $row[1],
            'block' => $row[2],
            'village' => $row[3],
            'int_producer_id' => $row[4],
            'pgroupname' => $row[5],
            'date_of_formation' => $row[6],
            'category_Name' => $row[7],
            'commoditties' => $row[8],
            'office_address' => $row[9],
            'member_no_in_pgroup' => $row[10],
            'bank_name' => $row[11],
            'branch_name' => $row[12],
            'signatoryname1' => $row[13],
            'signatorydesignation1' => $row[14],
            'desg_commoditties' => $row[15],
            'community_cader_name' => $row[16],
            'promotedunderschemename' => $row[17],
            'financial_month_year' => $row[18],
            'initial_cash_in_hand' => $row[19],
            'initial_cash_in_bank' => $row[20],
            'initial_stock_cost' => $row[21],
            'initial_total_amount' => $row[22],
            'entered_mis_date' => $row[23],
            'created_by' => 1111,

           
        ]);
        if ($pg->save()) {
            $this->savedCount++;
        }

        return $pg;
    }

    public function getSavedCount()
    {
        return $this->savedCount;
    }
    }


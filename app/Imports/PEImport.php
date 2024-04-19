<?php

namespace App\Imports;

use App\Models\PE;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;


class PEImport implements ToModel, WithStartRow
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
        $pe= new PE([
            'state' => $row[0],
            'promoting_agency' => $row[1],
            'fpo' => $row[2],
            'district' => $row[3],
            'regs_date' => $row[4],
            'commodity' => $row[5],
            'members' => $row[6],
            'Sales_Revenue_2017_18' => $row[7],
            'Sales_Revenue_2018_19' => $row[8],
            'Sales_Revenue_2019_20' => $row[9],
            'Sales_Revenue_2020_21' => $row[10],
            'Sales_Revenue_2021_22' => $row[11],
            'Sales_Revenue_2022_23' => $row[12],
            'Mem_target_fy_2023_24' => $row[13],
            'Sales_Revenue_2023_24' => $row[14],
            'created_by' => 1111,
        ]);
        if ($pe->save()) {
            $this->savedCount++;
        }

        return $pe;
    }

    public function getSavedCount()
    {
        return $this->savedCount;
    }
    }


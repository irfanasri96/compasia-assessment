<?php

namespace App\Imports;

use App\Models\TempProduct;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        // dd($rows);
        foreach ($rows as $key => $row) {
            return new TempProduct([
                'product_id' => $row['product_id'],
                'types' => $row['types'],
                'brand' => $row['brand'],
                'model' => $row['model'],
                'capacity' => $row['capacity'],
                'status' => $row['status']
            ]);
        }
    }
}

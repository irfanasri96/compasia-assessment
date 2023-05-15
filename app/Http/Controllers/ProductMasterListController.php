<?php

namespace App\Http\Controllers;

use App\Imports\ProductImport;
use App\Models\ProductMasterList;
use App\Models\TempProduct;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProductMasterListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductMasterList::all();

        return response()->json($products, 200);
    }

    public function upload(Request $request)
    {
        $temps = Excel::import(new ProductImport, request()->file('upload'));
        // $temps = TempProduct::all();
        return response()->json($temps, 200);
    }
}

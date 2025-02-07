<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\SellerProductsDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerProductController extends Controller
{
    public function index(SellerProductsDataTable $dataTables) {

        return $dataTables->render('admin.products.seller-product.index');

    }
}

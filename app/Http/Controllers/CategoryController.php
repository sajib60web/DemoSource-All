<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function selectCategories()
    {	
    	$categories = DB::table('categories')
                ->get();
        $products = DB::table('products')
                ->get();
        return view('selectCategory.selectCategories', compact('categories', 'products'));
    }

    public function selcelProduct(Request $request, $id)
    {   
        //$id = $request->subcat;
        if ($request->ajax())
        {
            $output = "";
        	$products = DB::table('products')
                    ->join('categories', 'products.categoryId', '=', 'categories.id')
                    ->select('products.*', 'categories.categoryName')
                    ->where('categoryId', $id)
                    ->get();
               
        //return Response($output);
        return view('selectCategory.selcelProduct', compact('products'));
        } 
    }








    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
class SearchController extends Controller
{
    public function scearchPage()
    {
       return view('search.scearchPage');
    }

    public function scearch(Request $request)
    {
        // $search = Input::get ('search');
        $search = $request->search;
        $user = DB::table('apps_countries')
                ->where('id','LIKE','%'.$search.'%')
                ->orwhere('country_code','LIKE','%'.$search.'%')
                ->orwhere('country_name','LIKE','%'.$search.'%')
                ->get();
        if(count($user) > 0){
            return view('posts')->withDetails($user)->withQuery($search);
        }else{ 
            return view ('posts')->withMessage('No Details found. Try to search again !');
        }

    }

    public function posts()
    {
        return view('search.posts');
    }

    public function autocompletePage()
    {
        return view('search.autocomplete');
    }

    // Kokhon Code

    // public function livesearch(Request $request)
    // {   
    //     if ($request->ajax()){
    //         $output = "";
    //         $listdata = DB::table('apps_countries')
    //             ->where('country_name','LIKE','%'.$request->livesearch."%")
    //             ->get();
          
    //         if (count($listdata) == 0) {
    //             echo "No Data Found";
    //         }else{
    //             foreach ($listdata as $key => $value) {
    //                 $output .= '<li>'. $value->country_name.'</li>';  
    //             }
    //             return Response($output);
    //         }
    //     }  
        
    // }

    public function search(Request $request)
    {   
        $term = $request->term;
        $listdata = DB::table('products')
                ->where('productName','LIKE','%'.$term."%")
                ->get();
        // $searchReault = array();
        if (count($listdata) == 0) {
            $searchReault[] = "No Data Found";
        }else{
            foreach ($listdata as $key => $value) {
                // $searchReault[] = $value->country_name;
                $searchReault[] = ['id'=>$value->id, 'value'=>$value->productName];
            }
        }
        return $searchReault;
    }
}

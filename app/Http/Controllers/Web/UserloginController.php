<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
use Session;
use Helper;


class UserloginController extends Controller
{
  public function userlogin(Request $request)
  {
    if(Session::has('bamaCust')){
        return redirect()->route('webhome');
    }

    $logo = DB::table('tbl_web_setting')
                ->where('set_id', '1')
                ->first();

  	return view('web.index', compact('logo'));
  }

  public function logincheck(Request $request)
  {
  	$phone= $request->phone;
    $password = $request->password;

    $custLoginCheck = DB::table('users')
                    ->where('user_phone', $phone)
            	    ->first();

    if($custLoginCheck){
      if ($password==$custLoginCheck->user_password) {
        Session::put('bamaCust', $phone);
        Session::put('customerData', $custLoginCheck);
        Session::put('webLogin', true);
        Session::save();
        return redirect()->route('webhome');
      }
      else{
        return redirect()->route('userLogin')->withErrors('Wrong Password');
      }
    }
    else{
      return redirect()->route('userLogin')->withErrors('Phone/Password Wrong');
    }
  }


  public function logout(Request $request)
  {
   	Session::forget('bamaCust');
   	Session::forget('customerData');
   	Session::forget('webLogin');
   	return redirect()->route('userLogin')->withSuccess("User logged out.");
  }

  public function category_list(Request $request,$catid)
  {
    $products = DB::table('product as p')->select('p.*','c.title','c.slug','v.varient_id','v.quantity','v.unit','v.mrp','v.price','v.description','v.varient_image')
      ->leftJoin('categories as c', 'p.cat_id', '=', 'c.cat_id')
      ->leftJoin('product_varient as v', 'p.product_id', '=', 'v.product_id')
      ->where('p.cat_id',$catid)->get();

      $prod_variant =  DB::table('product_varient')
                      ->get();
      $category = DB::table('categories')
                    ->where('cat_id',$catid)
                  ->first();
//      $category_sub = DB::table('categories')
//                     ->where('level',1)
//                     ->get();
//      $category_child = DB::table('categories')
//                     ->where('level',2)
//                     ->get();
      return view('web.product.cat_product', compact("category","products","prod_variant"));
  }
}

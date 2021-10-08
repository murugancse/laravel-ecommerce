<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use DB;

class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function get_categories($level)
    {
        return DB::table('categories')->where('parent','<>',0)->where('level',$level)->get();
    }

    public static function get_product_categories($level)
    {
       $categories = DB::table('product as p')->select('c.title','c.slug','c.cat_id')
      	->leftJoin('categories as c', 'p.cat_id', '=', 'c.cat_id')
      	->where('c.level',$level)
      	->limit(4)
      	->groupBy('p.cat_id')
      	->get();

      	return $categories;
    }

    public static function cat_Products($catid){
    	$products = DB::table('product as p')->select('p.*','v.varient_id','v.quantity','v.unit','v.mrp','v.price','v.description','v.varient_image')
      	->leftJoin('product_varient as v', 'p.product_id', '=', 'v.product_id')
      	->where('p.cat_id',$catid)
      	->limit(5)
      	->get();

      	return $products;
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Category;
use\App\account;
use\App\Product;
use\App\post;
use\App\tag;
class CategoryController extends Controller
{
    public function many()
		{
		    $manys = Category::get();

		    return view('onetomany.many', compact('manys'));
		}

		public function one()
		{
		    $ones = account::get();

		    return view('onetoone.one', compact('ones'));
		}
		public function manytomany(tag $tag)
		{
		  
		    return view('manytomany.many', compact('tag'));
		}
		

}

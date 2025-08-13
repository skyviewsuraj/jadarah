<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    public function index(Request $request)
    {   
        abort_if(!auth()->user()->can('users.view'),403,__('User does not have the right permissions.'));

        $subcategories = SubCategory::paginate(10);
        // dd($subcategories->toArray());
        return view('subcategories.index',compact('subcategories'));
    }
}

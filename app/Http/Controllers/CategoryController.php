<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {   
        abort_if(!auth()->user()->can('users.view'),403,__('User does not have the right permissions.'));

        $categories = Category::paginate(10);
        // dd($categories->toArray());
        return view('categories.index',compact('categories'));
    }
}

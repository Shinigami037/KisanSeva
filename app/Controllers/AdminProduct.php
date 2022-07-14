<?php

namespace App\Controllers;

class AdminProduct extends BaseController
{
    public function category()
    {
        return view('admin/inventory/' . "category");
    }
    public function mainCategory(){
        $name = $this->request->getVar("mainname");
        $category = new \App\Models\MainCategoryModel();
        $query = $category->insert(['name' => $name]);
        if (!$query) {
            // return redirect()->back()->with('fail','Something wrong');
            // return view('user/login/registration'); 
            return redirect()->back();
        } else {
            return redirect('addcategory');
            // return view('user/login/login'); 
        }
        // die("Hello main");
    }
    public function subCategory(){
        $name = $this->request->getVar("subname");
        $category = new \App\Models\SubCategoryModel();
        $query = $category->insert(['name' => $name]);
        if (!$query) {
            // return redirect()->back()->with('fail','Something wrong');
            // return view('user/login/registration'); 
            return redirect()->back();
        } else {
            return redirect('addcategory');
            // return view('user/login/login'); 
        }
        // die("Hello sub");
    }
}
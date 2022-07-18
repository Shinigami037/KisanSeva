<?php

namespace App\Controllers;
use App\Models\MainCategoryModel;
use App\Models\SubCategoryModel;

class AdminCategory extends BaseController
{
    public function mcategory()
    {
        return view('admin/inventory/' . "maincategory");
    }
    public function scategory()
    {
        $maincategory = new MainCategoryModel();
        $data['name'] = $maincategory->findAll();
        return view('admin/inventory/subcategory',$data);
    }
    public function mainCategory()
    {
        $name = $this->request->getVar("mainname");
        $category = new MainCategoryModel();
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
    public function subCategory()
    {
        $name = $this->request->getVar("subname");
        $category = new SubCategoryModel();
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
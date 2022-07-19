<?php

namespace App\Controllers;
use App\Models\MainCategoryModel;
use App\Models\SubCategoryModel;

class AdminCategory extends BaseController
{
    public function mcategory()
    {
        return view('admin/category/' . "maincategory");
    }
    public function scategory()
    {
        $maincategory = new MainCategoryModel();
        $data['category'] = $maincategory->findAll();
        return view('admin/category/subcategory',$data);
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
            return redirect('addmaincategory');
            // return view('user/login/login'); 
        }
        // die("Hello main");
    }
    public function subCategory()
    {
        $name = $this->request->getVar("subname");
        $maincategoryid = $this->request->getVar("category");
        // die($maincategoryid);
        $category = new SubCategoryModel();
        $data = [
            'name' => $name, 
            'category_id' => $maincategoryid,
        ];
        $query = $category->insert($data);
        if (!$query) {
            return redirect()->back()->with('status','Something wrong');
            // return view('user/login/registration'); 
            // return redirect()->back();
        } else {
            return redirect('addsubcategory');
            // return view('user/login/login'); 
        }
        
    }
}
<?php

namespace App\Controllers;

use App\Models\MainCategoryModel;
use App\Models\SubCategoryModel;

class AdminCategory extends BaseController
{
    public function displaymain()
    {
        $maincategory = new MainCategoryModel();
        $data = $maincategory->findAll();
        return view('admin/category/category', ['name' => $data]);
    }
    public function displaysub()
    {
        $subcategory = new SubCategoryModel();
        $subcategory->select('*');
        $subcategory->join('main_category', 'main_category.id = sub_category.category_id');
        // $maincategory = new MainCategoryModel();
        // $data2 = $maincategory->findAll();
        $data = $subcategory->get()->getResultArray();
        // echo "<pre>"; print_r($data); echo "</pre>";
        // echo '<pre>'.print_r($data).'</pre>';
        // die();
        return view('admin/category/sub_category', ['name' => $data]);
    }
    public function mcategory()
    {
        return view('admin/category/' . "maincategory");
    }
    public function scategory()
    {
        $maincategory = new MainCategoryModel();
        $data['category'] = $maincategory->orderBy('main_cat_name', 'ASC')->findAll();
        return view('admin/category/subcategory', $data);
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
            'sub_cat_name' => $name,
            'category_id' => $maincategoryid,
        ];
        $query = $category->insert($data);
        if (!$query) {
            return redirect()->back()->with('status', 'Something wrong');
            // return view('user/login/registration'); 
            // return redirect()->back();
        } else {
            return redirect('addsubcategory');
            // return view('user/login/login'); 
        }
    }
}

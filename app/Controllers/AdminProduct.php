<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\MainCategoryModel;
use App\Models\SubCategoryModel;

class AdminProduct extends BaseController
{
    public function category()
    {
        return view('admin/inventory/' . "category");
    }
    public function product()
    {
        return view('admin/inventory/' . "product");
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
    public function addproduct()
    {
        $product = new ProductModel();
        $file = $this->request->getFile('image');

        if ($file->isValid() && ! $file->hasMoved()) {
            $imageName = $file->getName();
            $file->move('uploads/', $imageName);
        }
        $data =[
            'category' => $this->request->getPost('maincat'),
            'sub_category' => $this->request->getPost('subcat'),
            'detail' => $this->request->getPost('detail'),
            'name' => $this->request->getPost('name'),
            'quantity' => $this->request->getPost('quantity'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];
        $product->save($data);
        return redirect()->to('product')->with('status','Product and Image Saved');
    }
}

<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\MainCategoryModel;
use App\Models\SubCategoryModel;
use CodeIgniter\Config\View;
use CodeIgniter\Entity\Cast\BaseCast;

class AdminProduct extends BaseController
{
    public function update($id = null) {
        $var = $this->request->getPost('maincat');
        $var2 = $this->request->getPost('subcat');
        $data = [
            'category' => $var,
            'sub_category' => $var2,
            'detail' => $this->request->getPost('detail'),
            'name' => $this->request->getPost('name'),
            'quantity' => $this->request->getPost('quantity'),
            'price' => $this->request->getPost('price'),
            // 'image' => $imageName,
        ];
        $product = new ProductModel();
        
        // die($var);
        // var_dump($var);
        if (isset($var)){
            $col = $product->where('id',$id)->findColumn('category');
            // $data = ['category' => $col[0]];
            echo print_r($data['category']);
            // die(print_r($col[0]));
        }
        die($data['category']);
        // var_dump($var);
        if (isset($var2)){
            $col = $product->where('id',$id)->findColumn('sub_category');
            $var2 = $col[0];
            // echo print_r($col);
            // die(print_r($col[0]));
        }
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getName();
            $file->move('public/uploads/', $imageName);
        }
        // die($var);
        
        $product->update($id,$data);
        return redirect()->to('inventory');
    }
    public function edit($id = null){
        echo $id;
        $maincategory = new MainCategoryModel();
        $product = new ProductModel();
        $subcategory = new SubCategoryModel();

        $data = $maincategory->findAll();
        $data2 = $subcategory->findAll();
        $data3 = $product->find($id);
        return view('admin/inventory/edit',['subcategory' => $data2 , 'category' => $data , 'product' => $data3]);
    }
    public function inventory()
    {
        $product = new ProductModel();
        $data = $product->findAll();
        $maincategory = new MainCategoryModel();
        $data2 = $maincategory->findAll();
        // $hell = $data['name'];
        // // echo $data
        // // echo $data
        // die($hell);
        // foreach ($data as $row) {
        //     echo $row->category;    
        //     echo $row->name;
        //         // $oldPass = $row->user_password;
        //         // break;
        //     }
        return view('admin/inventory/inventory', ['name' => $data , 'category' => $data2]);
    }
    public function product()
    {
        return view('admin/inventory/' . "product");
    }
    public function addproduct()
    {
        $product = new ProductModel();
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getName();
            $file->move('public/uploads/', $imageName);
        }
        $data = [
            'category' => $this->request->getPost('maincat'),
            'sub_category' => $this->request->getPost('subcat'),
            'detail' => $this->request->getPost('detail'),
            'name' => $this->request->getPost('name'),
            'quantity' => $this->request->getPost('quantity'),
            'price' => $this->request->getPost('price'),
            'image' => $imageName,
        ];
        $product->save($data);
        return redirect()->to('product')->with('status', 'Product and Image Saved');
    }
    // public function show()
    // {
    //     $product = new ProductModel();
    //     $data = $product->findAll();
    // }
}

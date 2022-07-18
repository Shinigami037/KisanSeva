<?php

namespace App\Controllers;

use App\Models\ProductModel;


class AdminProduct extends BaseController
{
    public function inventory()
    {
        $product = new ProductModel();
        $data = $product->findAll();
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
        return view('admin/inventory/inventory', ['name' => $data]);
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
    public function show()
    {
        $product = new ProductModel();
        $data = $product->findAll();
    }
}

<?php

namespace App\Controllers;

use App\Models\CategoryModel;  
use CodeIgniter\Controller;

class Categories extends Controller  
{
    public function index()
    {
        $model = new CategoryModel(); 
        $data['categories'] = $model->findAll();  

        return view('categories/index', $data);  
    }

    public function create()
    {
        return view('categories/create');
    }

    public function store()
    {
        helper('form');

        $model = new CategoryModel(); 
        $data = [
            'nomcategory' => $this->request->getPost('nomcategory'),  
        ];

        $model->insert($data);

        return redirect()->to('/categories');
    }

    public function edit($id)
    {
        $model = new CategoryModel();  
        $data['category'] = $model->find($id);  

        return view('categories/edit', $data);  
    }

    public function update($id)
    {
        helper('form');

        $model = new CategoryModel();  
        $data = [
            'nomcategory' => $this->request->getPost('nomcategory'), 
        ];

        $model->update($id, $data);

        return redirect()->to('/categories');  
    }

    public function delete($id)
    {
        $model = new CategoryModel();  
        $model->delete($id);

        return redirect()->to('/categories');
    }
    public function search()
    {
        $model = new CategoryModel();

    
        $searchTerm = $this->request->getGet('search');

        $data['categories'] = $model->searchByName($searchTerm);

        return view('categories/index', $data);
    }
    
}

<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\CategoryModel;
use CodeIgniter\Controller;

class Articles extends Controller
{
    public function index()
    {
        $articleModel = new ArticleModel();
        $categoryModel = new CategoryModel();

        $data['articles'] = $articleModel->findAll();  
        $data['categories'] = $categoryModel->findAll(); 

        // Ajoutez le chemin complet de chaque image
        foreach ($data['articles'] as &$article) {
            $article['imagePath'] = base_url($article['image']); 
        }

        return view('articles/index', $data);
    }

    public function create()
    {
        $model = new CategoryModel();
        $data['categories'] = $model->findAll();

        return view('articles/create', $data);
    }

    public function store()
    {
        helper(['form', 'url']);

        $articleModel = new ArticleModel();

        // Validate form data
        $validationRules = [
            'idcategory' => 'required',
            'nomarticle' => 'required',
            'description' => 'required',
            'qtestock' => 'required|numeric',
            'prix' => 'required|numeric',
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
        ];

        if ($this->validate($validationRules)) {
            // Handle image upload
            $image = $this->request->getFile('image');

            if ($image->isValid()) {
                
                $newName = $image->getRandomName();

                
                $image->move(ROOTPATH . 'uploads', $newName);

                if ($image->hasMoved()) {
                    
                    $data['image'] = 'uploads/' . $newName;

                    
                    $data += [
                        'idcategory' => $this->request->getPost('idcategory'),
                        'nomarticle' => $this->request->getPost('nomarticle'),
                        'description' => $this->request->getPost('description'),
                        'qtestock' => $this->request->getPost('qtestock'),
                        'prix' => $this->request->getPost('prix'),
                    ];

                    $articleModel->insert($data);

                    return redirect()->to('/articles');
                }
            }
        }

        
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return view('articles/create', $data);
    }

    public function update($idArticle)
    {
        
        $validationRules = [
            'idcategory' => 'required',
            'nomarticle' => 'required',
            'description' => 'required',
            'qtestock' => 'required|numeric',
            'prix' => 'required|numeric',
        ];

        if ($this->validate($validationRules)) {
            $articleModel = new ArticleModel();

            $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
               
                $newName = $image->getRandomName();

               
                $image->move(ROOTPATH . 'uploads', $newName);

                
                $data['image'] = 'uploads/' . $newName;
            }

           
            $data += [
                'idcategory' => $this->request->getPost('idcategory'),
                'nomarticle' => $this->request->getPost('nomarticle'),
                'description' => $this->request->getPost('description'),
                'qtestock' => $this->request->getPost('qtestock'),
                'prix' => $this->request->getPost('prix'),
            ];

            $articleModel->update($idArticle, $data);

            return redirect()->to('/articles');
        } else {
           
            return redirect()->to("/articles/edit/{$idArticle}")->withInput()->with('validation', $this->validator);
        }
    }

    public function edit($idArticle)
    {
        $articleModel = new ArticleModel();
        $categoryModel = new CategoryModel();

        // Find the article by ID
        $data['article'] = $articleModel->find($idArticle);

        if (empty($data['article'])) {
            
            return redirect()->to('/articles');
        }

        // Fetch all categories
        $data['categories'] = $categoryModel->findAll();

        return view('articles/edit', $data);
    }

    public function delete($idArticle)
    {
        $articleModel = new ArticleModel();

        // Find the article by ID
        $article = $articleModel->find($idArticle);

        if (empty($article)) {
            
            return redirect()->to('/articles');
        }

        

        
        $articleModel->delete($idArticle);

        return redirect()->to('/articles');
    }
  

    public function search()
    {
        $articleModel = new ArticleModel();
        $data['articles'] = $articleModel->findAll();
    
        $searchTerm = $this->request->getGet('search');
    
        if (!empty($searchTerm)) {
            
            $data['searchResults'] = $articleModel->like('nomarticle', $searchTerm)->findAll();
        } else {
           
            $data['searchResults'] = $articleModel->findAll();
        }
    
        return view('articles/search', $data);
    }
}
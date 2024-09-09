<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\CategoryModel;
use App\Models\CommandeModel;
use CodeIgniter\Controller;

class Articles extends Controller 
{
    public function index()
{
    $articleModel = new ArticleModel();
    $data['articles'] = $articleModel->getAllArticlesWithCategory();

    return view('articles/index', $data);
}


    public function create()
    {
        $categoryModel = new CategoryModel();
        $data['categories'] = $categoryModel->findAll();

        return view('articles/create', $data);
    }

    public function store()
    {
        helper('form');
    
        $articleModel = new ArticleModel();
    
        // Récupérer le fichier image téléchargé
        $image = $this->request->getFile('image');
    
        // Vérifier si un fichier image a été téléchargé
        if ($image->isValid() && !$image->hasMoved())
        {
            // Générer un nom unique pour le fichier image
            $newName = $image->getRandomName();
    
            // Déplacer le fichier vers le dossier de destination (public/images/)
            $image->move('public/images/', $newName);
    
            // Données à insérer dans la base de données
            $data = [
                'idcategory' => $this->request->getPost('idcategory'), 
                'nomarticle' => $this->request->getPost('nomarticle'),
                'image' => $newName, // Utiliser le nom généré pour le fichier image
                'description' => $this->request->getPost('description'),
                'qtestock' => $this->request->getPost('qtestock'),
                'prix' => $this->request->getPost('prix'),
            ];
    
            
            $articleModel->insert($data);
    
            return redirect()->to('/articles');
        }
        else
        {
            
           
            return redirect()->back()->with('error', 'Veuillez sélectionner un fichier image valide.');
        }
    }

    public function edit($id)
    {
        $articleModel = new ArticleModel();
        $categoryModel = new CategoryModel();
        $data['article'] = $articleModel->find($id);
        $data['categories'] = $categoryModel->findAll();

        return view('articles/edit', $data);
    }

    public function update($id)
    {
        helper(['form', 'url']);
    
        $articleModel = new ArticleModel();
        $data = [
            'idcategory' => $this->request->getPost('idcategory'), 
            'nomarticle' => $this->request->getPost('nomarticle'),
            'description' => $this->request->getPost('description'),
            'qtestock' => $this->request->getPost('qtestock'),
            'prix' => $this->request->getPost('prix'),
        ];
    
        $image = $this->request->getFile('image');
    
        if ($image->isValid() && !$image->hasMoved())
        {
            
            $newName = $image->getRandomName();
    
            
            $image->move('public/images/', $newName);
    
            
            $data['image'] = $newName;
        }
    
        
        $articleModel->update($id, $data);
    
        return redirect()->to('/articles');
    }

    public function delete($id)
    {
        $articleModel = new ArticleModel();
        $articleModel->delete($id);

        return redirect()->to('/articles');
    }
    public function search()
{
    $articleModel = new ArticleModel();
    $searchTerm = $this->request->getGet('search');
    $data['articles'] = $articleModel->searchByName($searchTerm);
    return view('article_cards', $data); 
}
public function search_article()
{
    $articleModel = new ArticleModel();
    $searchTerm = $this->request->getGet('search');
    $data['articles'] = $articleModel->searchByName($searchTerm);
    return view('articles/index', $data); 
}


public function showArticleCards()
{
    $articleModel = new ArticleModel();
    $data['articles'] = $articleModel->getAllArticlesWithCategory();

    return view('article_cards', $data);
}
public function showCategoryOneArticles()
{
    $articleModel = new ArticleModel();
    $data['articles'] = $articleModel->getArticlesByCategoryId(1); 
    return view('pages', $data); 
}
public function showCategoryTwoArticles()
{
    $articleModel = new ArticleModel();
    $data['articles'] = $articleModel->getArticlesByCategoryId(2); 
    return view('luminaires', $data); 
}
public function showCategoryFourArticles()
{
    $articleModel = new ArticleModel();
    $data['articles'] = $articleModel->getArticlesByCategoryId(5); 
    return view('decor', $data); 
}







}

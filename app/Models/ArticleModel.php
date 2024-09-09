<?php
namespace App\Models;

use CodeIgniter\Model;


class ArticleModel extends Model
{
    protected $table      = 'articles';
    protected $primaryKey = 'idArticle';
    protected $allowedFields = ['idcategory', 'nomarticle', 'image', 'description', 'qtestock', 'prix'];
    public function getAllArticlesWithCategory()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('articles');
        $builder->select('articles.*, category.nomcategory as nomcategory');
        $builder->join('category', 'category.idcategory = articles.idcategory');
        $query = $builder->get();

        return $query->getResultArray();
    }
    public function searchByName($searchTerm)
    {
        return $this->like('nomarticle', $searchTerm)->findAll();
    }
    
    public function getAllArticles()
    {
        return $this->findAll(); 
    }
    public function searchArticles($searchTerm)
    {
        
        $this->like('nomarticle', $searchTerm);
        $this->orLike('description', $searchTerm);

       
        $query = $this->get();

        
        return $query->getResult();
    }
    public function getArticlesByCategoryId($categoryId)
    {
        return $this->where('idcategory', $categoryId)
                    ->findAll();
    }
  
    

    
}

<?php
namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table      = 'articles';
    protected $primaryKey = 'idArticle';
    protected $allowedFields = ['idcategory', 'nomarticle', 'description', 'qtestock', 'prix', 'image'];

    public function uploadImage($file)
    {
        if ($file->isValid() && !$file->hasMoved()) {
            // Déplacer la nouvelle image avec un nouveau nom généré aléatoirement
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'uploads', $newName);
            return $newName;
        }

        return null;
    }
    // app/Models/ArticleModel.php

public function searchByName($searchTerm)
{
    // Utilisez la méthode `like` pour rechercher des articles par nom
    return $this->like('nomarticle', $searchTerm)->findAll();
}

}

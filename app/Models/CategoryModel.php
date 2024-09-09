<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'category'; 
    protected $primaryKey = 'idcategory';  
    protected $allowedFields = ['nomcategory'];  

    public function searchByName($searchTerm)
    {
        return $this->like('nomcategory', $searchTerm)->findAll();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class CommandeModel extends Model
{
    protected $table = 'commandes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nomarticle', 'nom', 'prenom', 'ville', 'adresse', 'quantite', 'telephone', 'prix', 'prix_total', 'created_at'];

    
}

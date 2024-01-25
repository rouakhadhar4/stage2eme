<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Acceuil extends Controller
{
    public function index()
    {
        
        return view('accueil'); 
    }
}

<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
    // Configuration de l'administrateur (à remplacer par vos propres valeurs)
    private $adminUsername = 'roua';
    private $adminPassword = '2111';

    public function index()
    {
        return view('admin');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Vérifiez si les informations soumises correspondent à l'administrateur
        if ($username === $this->adminUsername && $password === $this->adminPassword) {
            // Authentification réussie, redirigez vers la page des catégories
            return redirect()->to('/accueil');
        } else {
            // Authentification échouée, redirigez vers la page d'administration avec un message d'erreur
            return redirect()->to('/admin')->with('error', 'username or password incorrect.');
        }
    }
}

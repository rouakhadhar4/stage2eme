<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Admin extends Controller
{
   
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

     
        if ($username === $this->adminUsername && $password === $this->adminPassword) {
            
            return redirect()->to('/accueil');
        } else {
           
            return redirect()->to('/admin')->with('error', 'username or password incorrect.');
        }
    }
}

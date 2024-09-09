<?php

namespace App\Controllers;

use App\Models\ClientModel;

use CodeIgniter\Controller;

class Clients extends Controller
{
    public function login()
    {
        return view('clients/login');
    }

    public function processLogin()
    {
        $model = new ClientModel();
        
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        
        $client = $model->where('email', $email)->first();
        
        if ($client && password_verify($password, $client['password'])) {
           
            $_SESSION['client_authenticated'] = true;
            $_SESSION['client_id'] = $client['id'];
            $_SESSION['client_name'] = $client['prenom'] . ' ' . $client['nom'];
    
           
            if (isset($_SESSION['account_created']) && $_SESSION['account_created'] === true) {
                $data['success'] = 'Compte créé avec succès !';
                unset($_SESSION['account_created']); 
            }
    
            return redirect()->to('/articles/cards'); 
        } else {
          
            $data['error'] = 'Email or password incorrect please try again';
            $data['email'] = $email; 
            return view('clients/login', $data);
        }
    }
    
   

    

    public function register()
    {
        return view('clients/register');
    }

    
public function processRegister()
{
    helper('form');

    $model = new ClientModel();
    $data = [
        'nom' => $this->request->getPost('nom'),
        'email' => $this->request->getPost('email'),
        'prenom' => $this->request->getPost('prenom'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'telephone' => $this->request->getPost('telephone'),
    ];

   
    if (!$model->insert($data)) {
       
        $data['error'] = $model->errors();
        return view('clients/register', $data);
    }

    
    $_SESSION['success'] = 'Inscription réussie !';
    return redirect()->to(base_url('clients/login'));

}
public function index()
{
    $model = new ClientModel();
    $data['clients'] = $model->findAll();

    return view('clients/index', $data);
}




}

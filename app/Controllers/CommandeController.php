<?php

namespace App\Controllers;

use App\Models\CommandeModel;
use App\Models\ArticleModel;
use CodeIgniter\Controller;

class CommandeController extends Controller
{
    


    public function order($idArticle)
    {
        $articleModel = new ArticleModel();
        $article = $articleModel->find($idArticle);
    
        if ($article) {
            return view('formulaire_commande', ['article' => $article]);
        } else {
            return redirect()->to('/');
        }
    }
  

    public function processOrder()
{
   
    $nomarticle = $this->request->getPost('nomarticle');
    $nom = $this->request->getPost('nom');
    $prenom = $this->request->getPost('prenom');
    $ville = $this->request->getPost('ville');
    $adresse = $this->request->getPost('adresse');
    $quantite = $this->request->getPost('quantite');
    $telephone = $this->request->getPost('telephone');
    $prix_unitaire = $this->request->getPost('prix');

  
    log_message('debug', 'Nom de l\'article : ' . $nomarticle);
    log_message('debug', 'Nom : ' . $nom);
    log_message('debug', 'Prénom : ' . $prenom);
    log_message('debug', 'Ville : ' . $ville);
    log_message('debug', 'Adresse : ' . $adresse);
    log_message('debug', 'Quantité : ' . $quantite);
    log_message('debug', 'Téléphone : ' . $telephone);
    log_message('debug', 'Prix unitaire : ' . $prix_unitaire);

    
    $articleModel = new ArticleModel();
    $article = $articleModel->where('nomarticle', $nomarticle)->first();

    if ($article) {
     
        $prix_total = $prix_unitaire * $quantite;

      
        log_message('debug', 'Prix total : ' . $prix_total);

       
        $data = [
            'nomarticle' => $nomarticle,
            'nom' => $nom,
            'prenom' => $prenom,
            'ville' => $ville,
            'adresse' => $adresse,
            'quantite' => $quantite,
            'telephone' => $telephone,
            'prix' => $prix_unitaire,
            'prix_total' => $prix_total
        ];

       
        $commandeModel = new CommandeModel();
        $result = $commandeModel->insert($data);

        
        if ($result === false) {
            
            $error = $commandeModel->errors(); 
            log_message('error', 'Erreur lors de l\'insertion de la commande : ' . print_r($error, true));
        }

        
        return redirect()->to('articles/cards')->with('data', $data);
    } else {
       
        return redirect()->to('/');
    }
}

    public function listOrders()
    {
        $commandeModel = new CommandeModel();
        $commandes = $commandeModel->findAll();
        return view('liste_commandes', ['commandes' => $commandes]);
    }
    public function deleteOrder()
{
    $commandeId = $this->request->getPost('commande_id');

  
    if ($commandeId) {
        
        $commandeModel = new CommandeModel();
        $commandeModel->delete($commandeId);

        
        return redirect()->to('/commande/liste')->with('success', 'Commande supprimée avec succès.');
    } else {
        
        return redirect()->to('/commande/liste')->with('error', 'Impossible de supprimer la commande.');
    }
}


}

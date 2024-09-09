<?php

namespace App\Controllers;

use App\Models\ContactModel;

class Contacts extends BaseController
{
    public function index()
    {
        $model = new ContactModel();
        $data['contacts'] = $model->findAll();
        
        return view('contacts/index', $data);
    }

    public function create()
    {
        return view('contacts/create');
    }

    public function store()
    {
        $model = new ContactModel();
        $data = [
            'objet' => $this->request->getVar('objet'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
        ];
        $model->insert($data);
        return redirect()->to('contacts/create')->with('success', 'Message sent successfully!');
}
    

    public function edit($id = null)
    {
        $model = new ContactModel();
        $data['contact'] = $model->find($id);
        return view('contacts/edit', $data);
    }

    public function update()
    {
        $model = new ContactModel();
        $id = $this->request->getVar('id');
        $data = [
            'objet' => $this->request->getVar('objet'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
        ];
        $model->update($id, $data);
        return redirect()->to('/contacts');
    }

    public function delete($id = null)
    {
        $model = new ContactModel();
        $model->delete($id);
        return redirect()->to('/contacts');
    }
}

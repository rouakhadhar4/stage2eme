<?
namespace App\Controllers;

use App\Models\ContactsModel;

class Contacts extends BaseController
{
    public function index()
    {
        $model = new ContactsModel();
        $data['contacts'] = $model->findAll();

        return view('contacts/index', $data);
    }

    public function create()
    {
        return view('contacts/create');
    }

    public function store()
    {
        $model = new ContactsModel();

        $data = [
            'objet'   => $this->request->getPost('objet'),
            'email'   => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
        ];

        $model->insert($data);

        return redirect()->to('/contacts');
    }

    public function edit($id = null)
    {
        $model = new ContactsModel();
        $data['contact'] = $model->find($id);

        return view('contacts/edit', $data);
    }

    public function update()
    {
        $model = new ContactsModel();

        $data = [
            'objet'   => $this->request->getPost('objet'),
            'email'   => $this->request->getPost('email'),
            'message' => $this->request->getPost('message'),
        ];

        $id = $this->request->getPost('idcontact');

        $model->update($id, $data);

        return redirect()->to('/contacts');
    }

    public function delete($id = null)
    {
        $model = new ContactsModel();
        $model->delete($id);

        return redirect()->to('/contacts');
    }
}

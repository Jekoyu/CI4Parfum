<?php

namespace App\Controllers;

use App\Models\ParfumModel;
use CodeIgniter\Controller;

class ParfumController extends Controller
{
    public function index()
    {
        $model = new ParfumModel();
        $data['parfum'] = $model->findAll();  // Mengambil semua data parfum
        return view('parfum/index', $data);
    }

    public function create()
    {
        return view('parfum/create');
    }

    public function store()
    {
        $model = new ParfumModel();

        // Validasi input
        if (!$this->validate([
            'nama' => 'required|min_length[3]|max_length[255]',
            'jenis' => 'required|max_length[100]',
            'harga' => 'required|decimal',
            'stok' => 'required|integer',
        ])) {
            return redirect()->back()->withInput();
        }

        // Menyimpan data
        $model->save([
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
        ]);

        return redirect()->to('/parfum');
    }

    public function edit($id)
    {
        $model = new ParfumModel();
        $data['parfum'] = $model->find($id);
        return view('parfum/edit', $data);
    }

    public function update($id)
    {
        $model = new ParfumModel();

        if (!$this->validate([
            'nama' => 'required|min_length[3]|max_length[255]',
            'jenis' => 'required|max_length[100]',
            'harga' => 'required|decimal',
            'stok' => 'required|integer',
        ])) {
            return redirect()->back()->withInput();
        }

        $model->update($id, [
            'nama' => $this->request->getPost('nama'),
            'jenis' => $this->request->getPost('jenis'),
            'harga' => $this->request->getPost('harga'),
            'stok' => $this->request->getPost('stok'),
        ]);

        return redirect()->to('/parfum');
    }

    public function delete($id)
    {
        $model = new ParfumModel();
        $model->delete($id);

        return redirect()->to('/parfum');
    }
}

<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;
use CodeIgniter\HTTP\ResponseInterface;

class BukuController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new BukuModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $data = [
            'buku' => $this->model->paginate(10),
            'pager' => $this->model->pager,
            'title' => 'Daftar Buku'
        ];
        return view('buku/index', $data);
    }

    public function create()
    {
        $data = ['title' => 'Buat Buku Baru'];
        return view('buku/create', $data);
    }

    public function store()
    {
        $data = $this->request->getPost(['judul', 'penulis', 'penerbit', 'tahun_terbit']);

        $validationRules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
        ];

        $validationMessages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
            ],
            'tahun_terbit' => [
                'required' => 'Tahun Terbit harus diisi.',
                'integer' => 'Tahun Terbit harus berupa angka.',
                'greater_than_equal_to' => 'Tahun Terbit harus lebih besar atau sama dengan 1800.',
                'less_than_equal_to' => 'Tahun Terbit harus kurang dari atau sama dengan 2024.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return view('buku/create', [
                'title' => 'Buat Buku Baru',
                'validation' => $this->validator
            ]);
        }

        $this->model->save($data);

        session()->setFlashdata('berhasil', 'Buku Telah Ditambahkan');
        return redirect()->to(base_url('buku'));
    }

    public function edit($id)
    {
        $post = $this->model->find($id);

        if (empty($post)) {
            session()->setFlashdata('error', 'Post not found');
            return redirect()->back();
        }

        $data = [
            'title' => 'Edit Buku',
            'post' => $post
        ];

        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $post = $this->model->find($id);

        if (empty($post)) {
            session()->setFlashdata('error', 'Post not found');
            return redirect()->back();
        }

        $data = $this->request->getPost(['judul', 'penulis', 'penerbit', 'tahun_terbit']);

        $validationRules = [
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]',
        ];

        $validationMessages = [
            'judul' => [
                'required' => 'Judul harus diisi.',
            ],
            'penulis' => [
                'required' => 'Penulis harus diisi.',
            ],
            'penerbit' => [
                'required' => 'Penerbit harus diisi.',
            ],
            'tahun_terbit' => [
                'required' => 'Tahun Terbit harus diisi.',
                'integer' => 'Tahun Terbit harus berupa angka.',
                'greater_than' => 'Tahun Terbit harus lebih besar dari 1800.',
                'less_than' => 'Tahun Terbit harus kurang dari 2024.'
            ]
        ];

        if (!$this->validate($validationRules, $validationMessages)) {
            return view('buku/edit', [
                'title' => 'Edit Buku',
                'post' => $post,
                'validation' => $this->validator
            ]);
        }

        $this->model->update($id, $data);

        session()->setFlashdata('success', 'Buku berhasil diupdate');
        return redirect()->to(base_url('buku'));
    }

    public function destroy($id)
    {
        if (empty($id)) {
            return redirect()->to(base_url('buku'));
        }

        $delete = $this->model->delete($id);

        if ($delete) {
            session()->setFlashdata('success', 'Buku telah dihapus');
            return redirect()->to(base_url('buku'));
        } else {
            session()->setFlashdata('error', 'Some problems occured, please try again.');
            return redirect()->to(base_url('buku'));
        }
    }
}
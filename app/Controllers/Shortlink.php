<?php

namespace App\Controllers;

use App\Models\Bph_m;
use App\Models\Shortlink_m;

class Shortlink extends BaseController
{
    public function __construct()
    {
        helper('form');
        session();
        $this->bphModel = new Bph_m();
        $this->shortlinkModel = new Shortlink_m();
    }
    public function index()
    {
        session();
        $link = $this->shortlinkModel->select('id, nama, link, dinas')->join('tbl_users','link.dinas =' . session()->dinas)->groupBy('id, nama, link, dinas')->findAll();
        // $link = $this->shortlinkModel->orderBy('id', 'desc')->findAll();
        $data = [
            'tittle' => 'Shortlink',
            'link' => $link
        ];
        return view('shortlink/index', $data);
    }
    public function tambah()
    {
        session();
        $data = [
            'tittle' => 'Tambah Shortlink',
            'validation' => \Config\Services::validation(),
            'nama' => $this->shortlinkModel->orderBy('id', 'desc')->findAll(),
        ];
        // dd($data['nama']);
        return view('shortlink/tambah2', $data);
    }
    public function tambahShortlink()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required|is_unique[link.nama]',
                'errors' => [
                    'required' => 'Short URL harus diisi',
                    'is_unique' => 'Short URL sudah terdaftar'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Long URL harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('shortlink/tambah')->withInput();
        }

        $this->shortlinkModel->save([
            'nama' => $this->request->getVar('nama'),
            'link' => $this->request->getVar('link'),
            'dinas' => session()->dinas
        ]);
        
        $nama = $this->request->getVar('nama');
        $link = $this->request->getVar('link');
        $input = array( 'nama'=>$nama, 'link'=>$link);
        $this->shortlinkModel->getCreateRedirect($input);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('shortlink');
    }
    public function detail($id)
    {
        $data = [
            'tittle' => 'Detail Shortlink',
            'link' => $this->shortlinkModel->getLink($id)
        ];
        return view('shortlink/detail', $data);
    }
    public function ubah($id)
    {
        session();
        $data = [
            'tittle' => 'Edit Shortlink',
            'validation' => \Config\Services::validation(),
            'link' => $this->shortlinkModel->getLink($id)
        ];
        echo view('shortlink/ubah2', $data);
    }
    public function ubahShortlink($id)
    {
        //cek judul link
        $linkLama = $this->shortlinkModel->getLink($this->request->getVar('id'));
        if($linkLama['nama'] == $this->request->getVar('nama')){
            $rule_nama = 'required';
        } else {
            $rule_nama = 'required|is_unique[link.nama]';
        }

        if (!$this->validate([
            'nama' => [
                'rules' => $rule_nama,
                'errors' => [
                    'required' => 'Short URL harus diisi',
                    'is_unique' => 'Short URL sudah terdaftar'
                ]
            ],
            'link' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Long URL harus diisi'
                ]
            ]
        ])) {
            return redirect()->to('shortlink/ubah/' . $id)->withInput();
        }

        //unlink file controller
        $data = $this->shortlinkModel->getLink($id);
        $namaLama = $data['nama'];
        unlink("C:/xampp2/htdocs/BEM2022/shortlink-ci4/app/Controllers/$namaLama.php");

        //update database
        $this->shortlinkModel->save([
            'id' => $id,
            'nama' => $this->request->getVar('nama'),
            'link' => $this->request->getVar('link'),
        ]);

        //Create Redirect
        $nama = $this->request->getVar('nama');
        $link = $this->request->getVar('link');

        $input = array( 'nama'=>$nama, 'link'=>$link);
        $this->shortlinkModel->getCreateRedirect($input);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('shortlink');
    }

    public function hapus($id)
    {
        $data = $this->shortlinkModel->getLink($id);
        $namaLama = $data['nama'];
        unlink("C:/xampp2/htdocs/BEM2022/shortlink-ci4/app/Controllers/$namaLama.php");
    
        $this->shortlinkModel->delete($id);

        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('shortlink');
    }
}

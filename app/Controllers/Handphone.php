<?php namespace App\Controllers;

use App\Models\HandphoneModel;

class Handphone extends BaseController
{
    protected $handphoneModel;
    public function __construct()
    {
        $this->handphoneModel = new HandphoneModel();
    }
    public function index()
    {
        //$handphone = $this->handphoneModel->findAll();

        $data = [
            'tittle' => 'Daftar handphone',
            'handphone' => $this->handphoneModel->getHandphone()
        ];

        // $handphoneModel = new \App\Models\HandphoneModel();
        
        return view('handphone/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'tittle' => 'Detail handphone',
            'handphone' => $this->handphoneModel->getHandphone($slug)       
        ];

        // jika handphone tidak ada di tabel
        if(empty($data['handphone'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Merk handphone' . $slug . 'tidak ditemukan.');
        }
        return view('handphone/detail', $data);
    }

    public function create()
    {
        //session();
        $data = [
            'tittle' => 'Form Tambah Data handphone'  ,
            'validation' => \Config\Services::validation()
        ];
        return view('handphone/create', $data);
    }

    public function save()
    {
        //validasi input
        if(!$this->validate([
            'merk' => [
                'rules' => 'required|is_unique[handphone.merk]',
                'errors' =>[
                    'required' => '{field} handphone harus diisi',
                    'is_unique' => '{field} handphone sudah ada'
                ]
                ],
                'foto' => [
                    'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'errors' => [   
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                        ]
                ]
        ])){
            // $validation = \Config\Services::validation();
            // return redirect()->to('/handphone/create')->withInput()->with('validation', $validation);
            return redirect()->to('/handphone/create')->withInput();
        }

        // ambil gambar
        $fileFoto = $this->request->getFile('foto');
        // apakah tidak ada gambar yang di upload
        if($fileFoto->getError() == 4) {
            $namaFoto = 'default.png';
        } else{
            // generate nama foto random
            $namaFoto = $fileFoto->getRandomName();
            // pindahkan file ke folder img
            $fileFoto->move('img', $namaFoto);
        }

        $slug = url_title($this->request->getVar('merk'), '-', true);
        $this->handphoneModel->save([
            'merk' => $this->request->getVar('merk'),
            'slug' => $slug,
            'layar' => $this->request->getVar('layar'),
            'kamera' => $this->request->getVar('kamera'),
            'video' => $this->request->getVar('video'),
            'baterai' => $this->request->getVar('baterai'),
            'penyimpanan' => $this->request->getVar('penyimpanan'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/handphone');
    }

    public function delete($id)
    {
        // cari gambar berdasarkan id
        $handphone = $this->handphoneModel->find($id);

       // cek jika file gambarrnya default
        if ($handphone['foto'] != 'default.png') {
            // hapus gambar
            unlink('img/' . $handphone['foto']);
        }


        $this->handphoneModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/handphone');
    }

    public function edit($slug)
    {
        $data = [
            'tittle' => 'Form Ubah Data handphone'  ,
            'validation' => \Config\Services::validation(),
            'handphone' => $this->handphoneModel->getHandphone($slug)
        ];
        return view('handphone/edit', $data);
    }

    public function update($id)
    {
        // cek merk
        $handphoneLama = $this->handphoneModel->getHandphone($this->request->getVar('slug'));
        if($handphoneLama['merk'] == $this->request->getVar('judul')) {
            $rule_merk =  'required';
        } else {
            $rule_merk = 'required|is_unique[handphone.merk]';
        }
        if(!$this->validate([
            'merk' => [
                'rules' => $rule_merk,
                'errors' =>[
                    'required' => '{field} handphone harus diisi',
                    'is_unique' => '{field} handphone sudah ada'
                ]
                ],
                'foto' => [
                    'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'errors' => [   
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang anda pilih bukan gambar',
                        'mime_in' => 'Yang anda pilih bukan gambar'
                        ]
                ]
        ])){
            return redirect()->to('/handphone/edit/' . $this->request->getVar('slug'))->withInput();
        }

        $fileFoto = $this->request->getFile('foto');

        // cek gambar, apakah tetap gambar lama
        if($fileFoto->getError() == 4){
            $namaFoto = $this->request->getVar('fotoLama');
        } else {
            //generate nama file random
            $namaFoto = $fileFoto->getRandomName();
            // pindahkan gambar
            $fileFoto->move('img', $namaFoto);
            //hapus file yang lama
            unlink('img/' . $this->request->getVar('fotoLama')); 
        }

        $slug = url_title($this->request->getVar('merk'), '-', true);
        $this->handphoneModel->save([
            'id' => $id,
            'merk' => $this->request->getVar('merk'),
            'slug' => $slug,
            'layar' => $this->request->getVar('layar'),
            'kamera' => $this->request->getVar('kamera'),
            'video' => $this->request->getVar('video'),
            'baterai' => $this->request->getVar('baterai'),
            'penyimpanan' => $this->request->getVar('penyimpanan'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/handphone');
    }
}
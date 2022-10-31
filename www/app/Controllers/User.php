<?php

namespace App\Controllers;

use App\Models\GetSiswaSmaModel;
use App\Models\GetSiswaSmpModel;
use App\Models\GetUserModel;
use CodeIgniter\I18n\Time;

class User extends BaseController
{
    protected $db, $builder;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
        // $this->builder = $this->db->table('users');
    }

    public function dashboard()
    {

        $siswaModel = new GetSiswaSmpModel();

        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $smaModel = new GetSiswaSmaModel();
        $totalLulus = $siswaModel->like('status', 'Lulus')
            ->countAllResults();
        $totalLulusSma = $smaModel->like('status', 'Lulus')
            ->countAllResults();
        $dataSma = $smaModel->join_all_data_sma()->where('status', 'Aktif')->get()->getResultArray();

        // $dataSiswa = $siswaModel->join_all_data_sma()->whereIn('thn_ajaran_2', $names)->like('kls_2', '8')
        //     ->orderBy('kls_2', 'ASC')
        //     ->get()->getResultArray();
        $totalSiswaSma = $smaModel->countAll();
        $siswa_per_gender = $siswaModel->select('gender_siswa, COUNT(id_siswa_smp) AS jumlahSiswa')
            ->groupBy('gender_siswa')
            ->get();
        $nis = $siswaModel->like('nis_siswa_smp', 2021)
            ->get()->getResultArray();
        // dd($nis);

        $data = [
            'title' => 'Dashboard',
            'totalSiswa' => $totalSiswa,
            'totalLulus' => $totalLulus,
            'totalLulusSma' => $totalLulusSma,
            'totalSiswaSma' => $totalSiswaSma,
            'totalSiswaPerGender' => $siswa_per_gender,
            'thn' => '2020-2021',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('userContent/index', $data);
    }

    public function index()
    {

        $siswaModel = new GetSiswaSmpModel();
        session()->markAsTempdata('pesan', 3);
        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $data = [
            'title' => 'My Profile',
            'totalSiswa' => $totalSiswa,
            'thn' => '2020-2021',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('userContent/profile', $data);
    }

    public function insert()
    {
        echo "Hello";
        $userModel = new GetSiswaSmpModel();
        $siswaModel = new GetSiswaSmpModel();

        $dataSiswa = $siswaModel->get_all_data_siswa()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        // Add operation
        $dataSekolah = array();
        $userModel->insert_data_siswa(array(
            "nis_siswa_6thn" => "123456789",
            "nama_lengkap_siswa" => "Sanjaya Poor",
            "nama_panggilan_siswa" => "Poor",
            "gender_siswa" => "Laki-laki",
            "nisn" => "987654321",
            "tmp_lahir_siswa" => "Land Of Dawn",
        ), $dataSekolah);
        $data = [
            'title' => 'Page Abadi Sanjaya',
            'totalSiswa' => $totalSiswa,
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('userContent/profile', $data);
    }
    public function edit($username)
    {
        $siswaModel = new GetSiswaSmpModel();
        session()->markAsTempdata('pesan', 3);

        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $data = [
            'title' => 'Edit My Profile',
            'totalSiswa' => $totalSiswa,
            'thn' => '2020-2021',
            'validation' => \Config\Services::validation(),
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('userContent/edit', $data);
    }
    public function update($id)
    {
        $userModel = new GetUserModel();
        session()->markAsTempdata('pesan', 3);

        $userCek = $userModel->cekUser($this->request->getPost('username'));
        // dd($userCek);
        if ($userCek) {
            $user = $userCek['username'];
            if ($this->request->getPost('username') == $user) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-solid fa-circle-check"></i> The Username is already used.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/User/edit/' . user()->username)->withInput();
            }

        }

        $dataSet = [
            'fullname' => $this->request->getPost('fullname'),
            'username' => $this->request->getPost('username'),
        ];
        // dd($data);
        $userModel->update_profile($id, $dataSet);
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The data has been updated.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
       </div></div>');
        return redirect()->to('/User');
    }
    public function updatePhoto($id)
    {
        $validation = \Config\Services::validation();
        $userModel = new GetUserModel();
        $fileimg = $this->request->getFile('user_img');
        session()->markAsTempdata('pesan', 3);
        if (!$this->validate([
            'user_img' => [
                'rules' => 'uploaded[user_img]'
                . '|is_image[user_img]'
                . '|mime_in[user_img,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
            ],
        ])) {
            $errors = $validation->getErrors();
            // dd($errors);
            session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-solid fa-circle-check"></i> The file is not valid.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
           </div></div>');
            return redirect()->to('/User/edit/' . user()->username)->withInput($errors);
        }

        $slug = url_title(user()->fullname, '-', true);

        $name = $this->request->getPost('imgLama');
        $nam = $fileimg->getRandomName();
        $imgku = $slug . "_" . $nam;
        // dd($imgku)$this->request->getPost('username');
        // dd($this->request->getPost('username'));
        if ($name != 'default.png') {
            $fileimg->move('public/assets/images/profile', $imgku);
            unlink('public/assets/images/profile/' . $name);
        } else {
            $fileimg->move('public/assets/images/profile', $imgku);
        }
        $dataSet = [
            'user_img' => $imgku,
        ];
        // dd($data);
        $userModel->update_profile($id, $dataSet);
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The photo profile has been updated.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
       </div></div>');
        return redirect()->to('/User');
    }

}

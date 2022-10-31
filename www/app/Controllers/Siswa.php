<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GetSiswaSmaModel;
use App\Models\GetSiswaSmpModel;
use CodeIgniter\I18n\Time;

class Siswa extends BaseController
{

    public function index()
    {
        //
        $siswaModel = new GetSiswaSmpModel();
        $smaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $totalSiswaSma = $smaModel->countAll();

        $upd = $siswaModel->join_all_data_smp()->like('nis_siswa_smp', 1819)
            ->get()->getResultArray();
        // dd($upd);
        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'totalSiswaSma' => $totalSiswaSma,
            'title' => 'Siswa',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('smpContent/index', $data);
    }

    public function get_siswa()
    {
        $siswaModel = new GetSiswaSmpModel();

        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();

        $output = "";
        // dd($dataSiswa);

        foreach ($dataSiswa as $row) {
            // dd($row['tmp_lahir_siswa']);

            $output .= '
                <tr>
                <td>' . $row['nis_siswa_smp'] . '</td>
                <td> <div class="bg-poto-data">
                <div class="img-pro-data">
                <img class="img-fluid  rounded-circle rounded-circle" src="' . base_url() . "/public/assets/images/profile/" . $row['img_1'] . '" alt="">
                </div>
                </div></td>
                <td>' . $row['nama_lengkap_siswa'] . '</td>
                <td>' . $row['tmp_lahir_siswa'] . '</td>
                <td><div class="d-flex">' . $row['status'] . '</td>
                <td><div class="d-flex"><a href="" class="btn btn-sm btn-success">Detail</a>
                <a href="" class="mx-2 btn btn-sm btn-warning">Edit</a>

                 <form class="" method="post" action="">

                  <input type="hidden" name="_method" value="DELETE" >
                  <button onclick="return confirm("Apakah Anda yakin ?");" class="btn btn-sm btn-danger" type="submit">Delete</button>
                   </form>  </div></td>
                </tr>
                ';
        }
        echo $output;
    }

    public function detail($slug)
    {
        //
        $siswaModel = new GetSiswaSmpModel();

        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->getSmp($slug);
        // dd($siswa);
        // dd($dataSiswa);
        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Detail Siswa',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('smpContent/detailInduk', $data);
    }
    public function detailSma($slug)
    {
        //
        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->getSma($slug);
        // dd($siswa);
        // dd($dataSiswa);
        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'title' => 'Detail Siswa',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        // return view('authContent/registration', $data);
        return view('smaContent/detailInduk', $data);
    }

}

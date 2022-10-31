<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GetSiswaSmaModel;
use CodeIgniter\I18n\Time;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class Sma extends BaseController
{
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        session()->markAsTempdata('pesan', 3);
        // $this->builder = $this->db->table('users');
    }

    public function induksma()
    {
        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->get()->getResultArray();
        $names = ['2021'];
        // $dataSiswa = $siswaModel->join_all_data_sma()->whereIn('thn_ajaran_2', $names)->like('kls_2', '8')
        //     ->orderBy('kls_2', 'ASC')
        //     ->get()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $totalLulus = $siswaModel->like('status', 'Lulus')
            ->countAllResults();
        $totalMutasi = $siswaModel->notLike('status', 'Aktif')->notLike('status', 'Lulus')
            ->countAllResults();
        $totalAktif = $siswaModel->like('status', 'Aktif')
            ->countAllResults();
        $totalKls7 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '7')
            ->countAllResults();
        $totalKls8 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '8')
            ->countAllResults();
        $totalKls9 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '9')
            ->countAllResults();
        $totalKls0 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->notLike('kls_4', '7')->notLike('kls_4', '8')->notLike('kls_4', '9')
            ->countAllResults();

        $siswa_per_kls9 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '9')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls8 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '8')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls7 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '7')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls0 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->notLike('kls_4', '7')->notLike('kls_4', '8')->notLike('kls_4', '9')
            ->groupBy('kls_4')
            ->get();
        // dd($siswa_per_kls);

        $siswa_per_gender = $siswaModel->select('gender_siswa, COUNT(id_siswa_sma) AS jumlahSiswa')
            ->groupBy('gender_siswa')
            ->get();
        $siswa_per_thn = $siswaModel->join_all_data_sma()->select('thn_ajaran_1, COUNT(id_siswa_sma) AS jumlahSiswa2')
            ->groupBy('thn_ajaran_1')
            ->get();
        $siswa_per_mutasi = $siswaModel->join_all_data_sma()->select('status, COUNT(id_siswa_sma) AS jumlahSiswa3')
            ->groupBy('status')
            ->get();
        // dd($totalLulus);
        // dd($dataSiswa);
        // dd($siswa_per_thn->getResultArray());
        // dd($siswa_per_gender);
        $data = [
            'dt7a' => $dataSiswa,
            'totalSiswa' => $totalSiswa,
            'totalSiswaPerGender' => $siswa_per_gender,
            'totalSiswaPerMutasi' => $siswa_per_mutasi,
            'totalSiswaPerThn' => $siswa_per_thn,
            'totalSiswaPerKls9' => $siswa_per_kls9,
            'totalSiswaPerKls8' => $siswa_per_kls8,
            'totalSiswaPerKls7' => $siswa_per_kls7,
            'totalSiswaPerKls0' => $siswa_per_kls0,
            'totalSiswa' => $totalSiswa,
            'totalLulus' => $totalLulus,
            'totalMutasi' => $totalMutasi,
            'totalAktif' => $totalAktif,
            'totalKls7' => $totalKls7,
            'totalKls8' => $totalKls8,
            'totalKls9' => $totalKls9,
            'totalKls0' => $totalKls0,
            'thn' => '2020-2021',
            'title' => 'Buku Induk sma',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        return view('smaContent/induksma', $data);
    }

    public function lulus()
    {
        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->join_all_data_sma()->where('status', 'Lulus')->get()->getResultArray();
        $names = ['2021'];
        // $dataSiswa = $siswaModel->join_all_data_sma()->whereIn('thn_ajaran_2', $names)->like('kls_2', '8')
        //     ->orderBy('kls_2', 'ASC')
        //     ->get()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $totalLulus = $siswaModel->like('status', 'Lulus')
            ->countAllResults();
        $totalMutasi = $siswaModel->notLike('status', 'Aktif')->notLike('status', 'Lulus')
            ->countAllResults();
        $totalAktif = $siswaModel->like('status', 'Aktif')
            ->countAllResults();
        $totalKls7 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '7')
            ->countAllResults();
        $totalKls8 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '8')
            ->countAllResults();
        $totalKls9 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '9')
            ->countAllResults();
        $totalKls0 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->notLike('kls_4', '7')->notLike('kls_4', '8')->notLike('kls_4', '9')
            ->countAllResults();

        $siswa_per_kls9 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '9')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls8 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '8')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls7 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '7')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls0 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->notLike('kls_4', '7')->notLike('kls_4', '8')->notLike('kls_4', '9')
            ->groupBy('kls_4')
            ->get();
        // dd($siswa_per_kls);

        $siswa_per_gender = $siswaModel->select('gender_siswa, COUNT(id_siswa_sma) AS jumlahSiswa')
            ->groupBy('gender_siswa')
            ->get();
        $siswa_per_thn = $siswaModel->join_all_data_sma()->select('thn_ajaran_1, COUNT(id_siswa_sma) AS jumlahSiswa2')
            ->groupBy('thn_ajaran_1')
            ->get();
        $siswa_per_mutasi = $siswaModel->join_all_data_sma()->select('status, COUNT(id_siswa_sma) AS jumlahSiswa3')
            ->groupBy('status')
            ->get();
        // dd($totalLulus);
        // dd($dataSiswa);
        // dd($siswa_per_thn, $siswa_per_gender);
        // dd($siswa_per_gender);
        $data = [
            'dt7a' => $dataSiswa,
            'totalSiswa' => $totalSiswa,
            'totalSiswaPerGender' => $siswa_per_gender,
            'totalSiswaPerMutasi' => $siswa_per_mutasi,
            'totalSiswaPerThn' => $siswa_per_thn,
            'totalSiswaPerKls9' => $siswa_per_kls9,
            'totalSiswaPerKls8' => $siswa_per_kls8,
            'totalSiswaPerKls7' => $siswa_per_kls7,
            'totalSiswaPerKls0' => $siswa_per_kls0,
            'totalSiswa' => $totalSiswa,
            'totalLulus' => $totalLulus,
            'totalMutasi' => $totalMutasi,
            'totalAktif' => $totalAktif,
            'totalKls7' => $totalKls7,
            'totalKls8' => $totalKls8,
            'totalKls9' => $totalKls9,
            'totalKls0' => $totalKls0,
            'thn' => '2020-2021',
            'title' => 'Dashboard sma',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        return view('smaContent/lulussma', $data);
    }
    public function search()
    {
//
        $request = service('request');
        $searchData = $request->getGet(); // OR $this->request->getGet();
        $search = "";
        if (isset($searchData) && isset($searchData['search'])) {
            $search = $searchData['search'];
        }

        $siswaModel = new GetSiswaSmaModel();

        if ($search == '') {

            $searchDatasma = $siswaModel->get_all_data_sma();
        } else {
            $searchDatasma = $siswaModel->select('*')
                ->join('siswa_sma_data_sekolah', 'siswa_sma_data_sekolah.data_id_siswa_sma = siswa_sma.id_siswa_sma')
                ->Like('nis_siswa_sma', $search)->get();

            $writer = user()->username;

            $dataSiswa = $searchDatasma->getResultArray();
            // dd($dataSiswa);

            $excel = new Spreadsheet();

            $excel->getProperties()->setCreator('Admin Sekolah')
                ->setLastModifiedBy($writer)
                ->setTitle("Data Siswa")
                ->setSubject("Siswa")
                ->setDescription("Laporan Semua Data Siswa")
                ->setKeywords("Data Siswa");
            $style_col = array(
                'font' => array('bold' => true),
                'alignment' => array(
                    'horizontal' => Alignment::HORIZONTAL_CENTER,
                    'vertical' => Alignment::VERTICAL_CENTER,

                ),
                'borders' => array(
                    'top' => array('style' => Border::BORDER_THIN),
                    'right' => array('style' => Border::BORDER_THIN),
                    'bottom' => array('style' => Border::BORDER_THIN),
                    'left' => array('style' => Border::BORDER_THIN),
                ),
            );
            $styleDate = array(
                'font' => array('style' => DataType::TYPE_NULL));

            $style_row = array(
                'font' => array('bold' => true,
                    'size' => 8),
                'alignment' => array(
                    'vertical' => Alignment::VERTICAL_CENTER,
                ),
                'borders' => array(
                    'top' => array('style' => Border::BORDER_THIN),
                    'right' => array('style' => Border::BORDER_THIN),
                    'bottom' => array('style' => Border::BORDER_THIN),
                    'left' => array('style' => Border::BORDER_THIN),
                ),
            );
            $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA SISWA");
            $excel->getActiveSheet()->mergeCells('A1:E1');
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
            $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);

            $excel->getActiveSheet()->getStyle('A2:I2')
                ->getAlignment()->setWrapText(true);
            $excel->setActiveSheetIndex(0)->setCellValue('A2', "ID SISWA sma");
            $excel->setActiveSheetIndex(0)->setCellValue('B2', "NIS ");
            $excel->setActiveSheetIndex(0)->setCellValue('C2', "NAMA SISWA");
            $excel->setActiveSheetIndex(0)->setCellValue('D2', "Thn Ajaran 1");
            $excel->setActiveSheetIndex(0)->setCellValue('E2', "Thn Ajaran 2");
            $excel->setActiveSheetIndex(0)->setCellValue('F2', "Thn Ajaran 3");
            $excel->setActiveSheetIndex(0)->setCellValue('G2', "Status");
            $excel->setActiveSheetIndex(0)->setCellValue('H2', "Tahun Ajaran Saat Ini");
            $excel->setActiveSheetIndex(0)->setCellValue('I2', "Saat Ini Di Kelas");

            $excel->getActiveSheet()->getStyle('A2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('B2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('C2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('D2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('E2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('F2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('G2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('H2')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('I2')->applyFromArray($style_col);

            $siswa = $dataSiswa;
            // var_dump($siswa);
            // die();
            $tm = time();
            $numrow = 3;

            foreach ($siswa as $dt) {
                // dd($dt['id_siswa_sma']);
                $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $dt['id_siswa_sma']);
                $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $dt['nis_siswa_sma']);
                $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $dt['nama_lengkap_siswa']);
                $excel->setActiveSheetIndex(0)->setCellValueExplicit('D' . $numrow, $dt['thn_ajaran_1'], DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValueExplicit('E' . $numrow, $dt['thn_ajaran_1'], DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValueExplicit('F' . $numrow, $dt['thn_ajaran_1'], DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValueExplicit('G' . $numrow, $dt['thn_ajaran_1'], DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValueExplicit('H' . $numrow, $dt['thn_ajaran_1'], DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValueExplicit('I' . $numrow, $dt['thn_ajaran_1'], DataType::TYPE_STRING);

                $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($styleDate);
                $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
                $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);

                $numrow++;
            }

            $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5);
            $excel->getActiveSheet()->getColumnDimension('B')->setWidth(13);
            $excel->getActiveSheet()->getColumnDimension('C')->setWidth(33);
            $excel->getActiveSheet()->getColumnDimension('D')->setWidth(14);
            $excel->getActiveSheet()->getColumnDimension('E')->setWidth(13);
            $excel->getActiveSheet()->getColumnDimension('F')->setWidth(14);
            $excel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
            $excel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
            $excel->getActiveSheet()->getColumnDimension('I')->setWidth(17);

            // $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

            // $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);

            $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
            $excel->setActiveSheetIndex(0);

            header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
            header("Content-Transfer-Encoding: Binary");
            header("Content-Disposition: attachment; filename= UpdateData.xlsx");

            $objWriter = IOFactory::createWriter($excel, 'Xlsx');

            $objWriter->save('php://output');
        }
        $totalSiswa = $siswaModel->countAll();
        $data = [
            'title' => 'All Users',
            'totalSiswa' => $totalSiswa,
            'dt7a' => $searchDatasma,
            'search' => $search,
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];

        return view('smaContent/searchData', $data);
    }

    public function editsma($nis)
    {
//

        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswa = $siswaModel->getsma($nis);

        $totalSiswa = $siswaModel->countAll();
        $data = [
            'title' => 'Edit Data',
            'totalSiswa' => $totalSiswa,
            'siswa' => $siswa,
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];

        return view('smaContent/editsma', $data);
    }

    public function deletesma($id)
    {
//

        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $siswaModel->deleteData($id);
        $siswaModel->where('id_siswa_sma', $id)->delete();
        $totalSiswa = $siswaModel->countAll();
        session()->markAsTempdata('pesan', 3);
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The data has been deleted.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
       </div></div>');
        return redirect()->to('/Sma');
    }

    public function index()
    {

        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->get()->getResultArray();
        $names = ['2021'];
        // $dataSiswa = $siswaModel->join_all_data_sma()->whereIn('thn_ajaran_2', $names)->like('kls_2', '8')
        //     ->orderBy('kls_2', 'ASC')
        //     ->get()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $totalLulus = $siswaModel->like('status', 'Lulus')
            ->countAllResults();
        $totalMutasi = $siswaModel->notLike('status', 'Aktif')->notLike('status', 'Lulus')
            ->countAllResults();
        $totalAktif = $siswaModel->like('status', 'Aktif')
            ->countAllResults();
        $totalKls7 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '10')
            ->countAllResults();
        $totalKls8 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '11')
            ->countAllResults();
        $totalKls9 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', '12')
            ->countAllResults();
        $totalKls0 = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->notLike('kls_4', '10')->notLike('kls_4', '11')->notLike('kls_4', '12')
            ->countAllResults();

        $siswa_per_kls9 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '12')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls8 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '11')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls7 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->like('kls_4', '10')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls0 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->where('status', 'Aktif')->notLike('kls_4', '10')->notLike('kls_4', '11')->notLike('kls_4', '12')
            ->groupBy('kls_4')
            ->get();
        // dd($siswa_per_kls);

        $siswa_per_gender = $siswaModel->select('gender_siswa, COUNT(id_siswa_sma) AS jumlahSiswa')
            ->groupBy('gender_siswa')
            ->get();
        $siswa_per_thn = $siswaModel->join_all_data_sma()->select('thn_ajaran_1, COUNT(id_siswa_sma) AS jumlahSiswa2')
            ->groupBy('thn_ajaran_1')
            ->get();
        $siswa_per_mutasi = $siswaModel->join_all_data_sma()->select('status, COUNT(id_siswa_sma) AS jumlahSiswa3')
            ->groupBy('status')
            ->get();
        // dd($totalLulus);
        // dd($dataSiswa);
        // dd($siswa_per_thn, $siswa_per_gender);
        // dd($siswa_per_gender);
        $data = [
            'dt7a' => $dataSiswa,
            'totalSiswa' => $totalSiswa,
            'totalSiswaPerGender' => $siswa_per_gender,
            'totalSiswaPerMutasi' => $siswa_per_mutasi,
            'totalSiswaPerThn' => $siswa_per_thn,
            'totalSiswaPerKls9' => $siswa_per_kls9,
            'totalSiswaPerKls8' => $siswa_per_kls8,
            'totalSiswaPerKls7' => $siswa_per_kls7,
            'totalSiswaPerKls0' => $siswa_per_kls0,
            'totalSiswa' => $totalSiswa,
            'totalLulus' => $totalLulus,
            'totalMutasi' => $totalMutasi,
            'totalAktif' => $totalAktif,
            'totalKls7' => $totalKls7,
            'totalKls8' => $totalKls8,
            'totalKls9' => $totalKls9,
            'totalKls0' => $totalKls0,
            'jenjang' => 'SMA',
            'title' => 'Dashboard Sma',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        return view('smaContent/indexsma', $data);
    }

    public function tahunsma($thn_ajaran_1)
    {
        $siswaModel = new GetSiswaSmaModel();
        $lm = 50;
        $off = 0;

        $dataSiswa = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, $off)->get()->getResultArray();
        $dataSiswa2 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 50)->get()->getResultArray();
        $dataSiswa3 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 100)->get()->getResultArray();
        $dataSiswa4 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 150)->get()->getResultArray();
        $dataSiswa5 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 200)->get()->getResultArray();
        $dataSiswa6 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 250)->get()->getResultArray();
        $dataSiswa7 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 300)->get()->getResultArray();
        $dataSiswa8 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 350)->get()->getResultArray();
        $dataSiswa9 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 400)->get()->getResultArray();
        $dataSiswa10 = $siswaModel->join_all_data_sma()->where('thn_ajaran_1', $thn_ajaran_1)->orderBy('nis_siswa_sma', 'ASC')->limit($lm, 450)->get()->getResultArray();

        // dd($dataSiswa,$dataSiswa2,$dataSiswa3,$dataSiswa4,$dataSiswa5,$dataSiswa6);
        $names = ['2021'];
        // $dataSiswa = $siswaModel->join_all_data_sma()->whereIn('thn_ajaran_2', $names)->like('kls_2', '8')
        //     ->orderBy('kls_2', 'ASC')
        //     ->get()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $totalLulus = $siswaModel->like('status', 'Lulus')
            ->countAllResults();
        $totalMutasi = $siswaModel->notLike('status', 'Aktif')->notLike('status', 'Lulus')
            ->countAllResults();
        $totalAktif = $siswaModel->like('status', 'Aktif')
            ->countAllResults();
        $totalKls7 = $siswaModel->join_all_data_sma()->like('kls_4', '10')
            ->countAllResults();
        $totalKls8 = $siswaModel->join_all_data_sma()->like('kls_4', '11')
            ->countAllResults();
        $totalKls9 = $siswaModel->join_all_data_sma()->like('kls_4', '12')
            ->countAllResults();
        $siswa_per_kls = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->like('kls_4', '12')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls8 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->like('kls_4', '11')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls7 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->like('kls_4', '10')
            ->groupBy('kls_4')
            ->get();
        // dd($siswa_per_kls);

        $siswa_per_gender = $siswaModel->select('gender_siswa, COUNT(id_siswa_sma) AS jumlahSiswa')
            ->groupBy('gender_siswa')
            ->get();
        $nis = $siswaModel->like('nis_siswa_sma', 2021)
            ->get()->getResultArray();
        $siswa_per_thn = $siswaModel->join_all_data_sma()->select('thn_ajaran_2, COUNT(id_siswa_sma) AS jumlahSiswa2')
            ->groupBy('thn_ajaran_2')
            ->get();
        // dd($totalLulus);
        // dd($dataSiswa);
        // dd($siswa_per_thn, $siswa_per_gender);
        // dd($siswa_per_gender);
        $data = [
            'dt7a' => $dataSiswa,
            'totalSiswa' => $totalSiswa,
            'totalSiswaPerGender' => $siswa_per_gender,
            'totalSiswaPerThn' => $siswa_per_thn,
            'totalSiswaPerKls' => $siswa_per_kls,
            'totalSiswaPerKls8' => $siswa_per_kls8,
            'totalSiswaPerKls7' => $siswa_per_kls7,
            'totalSiswa' => $totalSiswa,
            'totalLulus' => $totalLulus,
            'totalMutasi' => $totalMutasi,
            'totalAktif' => $totalAktif,
            'totalKls7' => $totalKls7,
            'totalKls8' => $totalKls8,
            'totalKls9' => $totalKls9,
            'dataSiswa' => $dataSiswa,
            'dataSiswa2' => $dataSiswa2,
            'dataSiswa3' => $dataSiswa3,
            'dataSiswa4' => $dataSiswa4,
            'dataSiswa5' => $dataSiswa5,
            'dataSiswa6' => $dataSiswa6,
            'dataSiswa7' => $dataSiswa7,
            'dataSiswa8' => $dataSiswa8,
            'thn' => $thn_ajaran_1,
            'title' => 'Buku Induk sma',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        return view('smaContent/cetakInduk/tahunInduk', $data);
    }

    public function kelassma($kls_4)
    {
        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->join_all_data_sma()->where('status', 'Aktif')->like('kls_4', $kls_4)->get()->getResultArray();
        $names = ['2021'];
        // $dataSiswa = $siswaModel->join_all_data_sma()->whereIn('thn_ajaran_2', $names)->like('kls_2', '8')
        //     ->orderBy('kls_2', 'ASC')
        //     ->get()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        $totalLulus = $siswaModel->like('status', 'Lulus')
            ->countAllResults();
        $totalMutasi = $siswaModel->notLike('status', 'Aktif')->notLike('status', 'Lulus')
            ->countAllResults();
        $totalAktif = $siswaModel->like('status', 'Aktif')
            ->countAllResults();
        $totalKls7 = $siswaModel->join_all_data_sma()->like('kls_4', '10')
            ->countAllResults();
        $totalKls8 = $siswaModel->join_all_data_sma()->like('kls_4', '11')
            ->countAllResults();
        $totalKls9 = $siswaModel->join_all_data_sma()->like('kls_4', '12')
            ->countAllResults();
        $siswa_per_kls = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->like('kls_4', '12')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls8 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->like('kls_4', '11')
            ->groupBy('kls_4')
            ->get();
        $siswa_per_kls7 = $siswaModel->join_all_data_sma()->select('kls_4, COUNT(id_siswa_sma) AS jumlahSiswaKls')->like('kls_4', '10')
            ->groupBy('kls_4')
            ->get();
        // dd($siswa_per_kls);

        $siswa_per_gender = $siswaModel->select('gender_siswa, COUNT(id_siswa_sma) AS jumlahSiswa')
            ->groupBy('gender_siswa')
            ->get();
        $nis = $siswaModel->like('nis_siswa_sma', 2021)
            ->get()->getResultArray();
        $siswa_per_thn = $siswaModel->join_all_data_sma()->select('thn_ajaran_2, COUNT(id_siswa_sma) AS jumlahSiswa2')
            ->groupBy('thn_ajaran_2')
            ->get();
        // dd($totalLulus);
        // dd($dataSiswa);
        // dd($siswa_per_thn, $siswa_per_gender);
        // dd($siswa_per_gender);
        $data = [
            'dt7a' => $dataSiswa,
            'totalSiswa' => $totalSiswa,
            'totalSiswaPerGender' => $siswa_per_gender,
            'totalSiswaPerThn' => $siswa_per_thn,
            'totalSiswaPerKls' => $siswa_per_kls,
            'totalSiswaPerKls8' => $siswa_per_kls8,
            'totalSiswaPerKls7' => $siswa_per_kls7,
            'totalSiswa' => $totalSiswa,
            'totalLulus' => $totalLulus,
            'totalMutasi' => $totalMutasi,
            'totalAktif' => $totalAktif,
            'totalKls7' => $totalKls7,
            'totalKls8' => $totalKls8,
            'totalKls9' => $totalKls9,
            'thn' => '2020-2021',
            'title' => 'Dashboard sma',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        return view('smaContent/kelas', $data);
    }

    public function createsma()
    {
        //
        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        // dd($dataSiswa);
        $data = [
            'dt7a' => $dataSiswa,
            'linksma' => '/smaVIIA',
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'title' => 'Create Data sma',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        return view('smaContent/createsma', $data);
    }
    public function inputsma()
    {
        //
        $siswaModel = new GetSiswaSmaModel();

        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        $totalSiswa = $siswaModel->countAll();
        // dd($dataSiswa);
        $data = [
            'dt7a' => $dataSiswa,
            'thn' => '2020-2021',
            'totalSiswa' => $totalSiswa,
            'title' => 'Input Data sma',
            'time' => Time::parse(date('F d, Y l. h:i A', strtotime(user()->created_at)))->humanize(),
        ];
        return view('smaContent/inputsma', $data);
    }

    public function importSiswa()
    {
        //
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->get_all_data_sma()->getResultArray();
        // dd($dataSiswa);

        $data['title'] = 'Masukan Data';
        $file = $this->request->getFile('excelFile');
        new Spreadsheet;

        // $siswaModel->update_data_siswa(45, array(
        //     "nis_siswa_sma" => "18190700121",
        // ));

        $fileLocation = $file->getTempName();
        // dd($fileLocation);
        $reader = IOFactory::createReaderForFile($fileLocation);
        $objPHPExcel = $reader->load($fileLocation);
        $sheet7a = $objPHPExcel->getActiveSheet()->toArray();
        // dd($sheet7a);
        foreach ($sheet7a as $key => $dataE7) {
            // dd($dataE7['0']);
            if ($dataE7['0'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, The format is wrong. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($key == 0) {
                continue;
            }
            // dd($dataE7[4]);
            // dd($siswaModel);
            // $this->db->table('siswa_sma')->where('nis_siswa_sma', $dataE7[1])->get();

            $nis = $siswaModel->cekDatasma($dataE7[0]);
            // dd($nis);

            // dd($nis['nis_siswa_sma'],$dataE7[1]);
            //     $pesan = session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, the file does not fit the format. Please check it!
            //     <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
            //     </button>
            //    </div></div>');
            session()->markAsTempdata('pesan', 3);
            if ($nis) {
                $nisnya = $nis['nis_siswa_sma'];
                if ($dataE7['0'] == $nisnya) {
                    continue;
                }
            }
            // dd($nisnya);
            if ($dataE7['2'] == "L") {
                $gender = "Laki-laki";
            } elseif ($dataE7['2'] == "P") {
                $gender = "Perempuan";
            }
            // dd($gender);
            if ($dataE7['0'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the NIS column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7['1'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the NAMA SISWA column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7['2'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the JENIS KELAMIN column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7['4'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the NISN column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7['5'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the TEMPAT LAHIR column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7['6'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the TANGGAL LAHIR column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }

            if ($dataE7[7] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the ALAMAT column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7[8] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the NAMA AYAH column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7[10] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the NO HP AYAH column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7[11] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the NAMA IBU column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($dataE7[13] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a blank cell in the NO HP IBU column. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }

            // dd($dataE7['5']);
            if ($dataE7['6'] != "-") {
                //dari excel => mm-dd-yy asalnya-> dd-mm-yyyy, di php yyyy-mm-dd
                $date_explode = explode("-", $dataE7['6']);
                $date = $date_explode[2] . "-" . $date_explode[1] . "-" . $date_explode[0];
                // $date2 = PHPExcel_Style_NumberFormat::toFormattedString();
                // dd($date);
            } elseif ($dataE7['6'] == "-") {
                $date = "-";
            }

            // $tgl = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($dataE7['F']);
            $slug = url_title($dataE7['1'], '-', true);
            $dataE7 = array(
                // BUKA IMPORT DARI DATA ADMIN
                'nis_siswa_sma' => $dataE7['0'],
                'nama_lengkap_siswa' => $dataE7['1'],
                'gender_siswa' => $gender,
                'nik_siswa_sma' => $dataE7['3'],
                'nisn' => $dataE7['4'],
                'tmp_lahir_siswa' => $dataE7['5'],
                'tgl_lahir_siswa' => $date,
                'alamat_siswa' => $dataE7['7'],

                'ayah' => $dataE7['8'],
                'tlp_ayah' => $dataE7['10'],
                'ibu' => $dataE7['11'],
                'tlp_ibu' => $dataE7['13'],

                'slug' => $slug,
                'updated_by' => user()->email,
                'updated_at' => time(),
                // TUTUP IMPORT DARI DATA ADMIN

                //IMPORT DARI DATA GOOGLE FORM
                // TUTUP IMPORT DARI DATA GOOGLE FORM

            );
            $dataSekolah = array();

            $siswaModel->import_data_sma($dataE7, $dataSekolah);
        }
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The file was already imported.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
        return redirect()->to('/Sma/input');
    }

    public function updateSiswa()
    {
        //
        $siswaModel = new GetSiswaSmaModel();

        $data['title'] = 'Input Data';
        $file = $this->request->getFile('excelFile');
        new Spreadsheet;

        // $siswaModel->update_data_siswa(45, array(
        //     "nis_siswa_sma" => "18190700121",
        // ));

        $fileLocation = $file->getTempName();
        // dd($fileLocation);
        $reader = IOFactory::createReaderForFile($fileLocation);
        $objPHPExcel = $reader->load($fileLocation);

        $sheet7a = $objPHPExcel->getActiveSheet()->toArray();

        foreach ($sheet7a as $key => $dataE7) {
            if ($dataE7['0'] == null) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, The format is wrong. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/Sma/input');
            }
            if ($key == 0) {
                continue;
            }
            // dd($dataE7[5]);
            // dd($siswaModel);
            // $this->db->table('siswa_sma')->where('nis_siswa_sma', $dataE7[1])->get();

            $nis = $siswaModel->cekDatasma($dataE7[0]);
            session()->markAsTempdata('pesan', 3);

            $ids2 = array(
                'data_id_siswa_sma' => $dataE7['0'],
            );
            $dataE72 = array(
                // BUKA IMPORT DARI DATA ADMIN
                'thn_ajaran_1' => $dataE7['3'],
                'thn_ajaran_2' => $dataE7['4'],
                'thn_ajaran_3' => $dataE7['5'],
                'thn_ajaran_4' => $dataE7['7'],
                'kls_4' => $dataE7['8'],

            );
            $ids = array(
                'id_siswa_sma' => $dataE7['0'],
            );
            $slug = url_title($dataE7['2'], '-', true);
            $dataE7 = array(
                // BUKA IMPORT DARI DATA ADMIN
                'nama_lengkap_siswa' => $dataE7['2'],
                'status' => $dataE7['6'],
                'slug' => $slug,
                'updated_by' => user()->email,
                'updated_at' => time(),

            );
            $dataSekolah = array();

            $siswaModel->update_data2($ids2, $dataE72);
            $siswaModel->update_data($ids, $dataE7);
        }
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The file was already imported.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
        return redirect()->to('/Sma/input');
    }

    public function updatesma($id)
    {

        // $db20_21 = db_connect('dbTahun20_21');
        $siswaModel = new GetSiswaSmaModel();

        // if ($this->request->getVar('nis') == $nis['nis']) {
        //   session()->setFlashdata('pesanNis', ' NIS SUDAH TERDAFTAR');

        // }

        if (!$this->validate([
            'thn_ajaran_1' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama lengkap harus diisi.']],

        ])) {

            return redirect()->to('/sma/edit/' . $this->request->getVar('slug'))->withInput();
        }
        $dataSekolah = array(
            'thn_ajaran_1' => $this->request->getVar('thn_ajaran_1'),
            'thn_ajaran_2' => $this->request->getVar('thn_ajaran_2'),
            'thn_ajaran_3' => $this->request->getVar('thn_ajaran_3'),
            'thn_ajaran_4' => $this->request->getVar('thn_ajaran_4'),
            'kls_1' => $this->request->getVar('kls_1'),
            'kls_2' => $this->request->getVar('kls_2'),
            'kls_3' => $this->request->getVar('kls_3'),
            'kls_4' => $this->request->getVar('kls_4'),
            // 'kls_4' => htmlspecialchars($this->request->getVar('kls_4')),

        );
        $dataID = array(
            'data_id_siswa_sma' => $id,
        );
        $dtID = array(
            'id_siswa_sma' => $id,
        );
        $dataUtama = array(
            'status' => $this->request->getVar('status'),
        );
        $siswaModel->update_data($dtID, $dataUtama);
        $siswaModel->update_data2($dataID, $dataSekolah);
        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The Data has been updated.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');

        return redirect()->to('/Sma');
    }
    public function savesma()
    {

        // $db20_21 = db_connect('dbTahun20_21');
        $siswaModel = new GetSiswaSmaModel();
        $nis = $siswaModel->cekDatasma($this->request->getVar('nis_siswa_sma'));
        if ($nis) {
            $nisnya = $nis['nis_siswa_sma'];
            if ($this->request->getVar('nis_siswa_sma') == $nisnya) {
                session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-danger"><i class="fas fa-exclamation-triangle"></i>  Hey, There is a same NIS in the database. Please check it out!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');
                return redirect()->to('/sma/create')->withInput();
            }
        }

        // if (!$this->validate([
        //     'thn_ajaran_1' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => 'Nama lengkap harus diisi.']],

        // ])) {

        //     return redirect()->to('/sma/edit/' . $this->request->getVar('slug'))->withInput();
        // }

        $slug = url_title($this->request->getVar('nama_lengkap_siswa'), '-', true);
        $data = array(
            'nis_siswa_sma' => $this->request->getVar('nis_siswa_sma'),
            'nama_lengkap_siswa' => $this->request->getVar('nama_lengkap_siswa'),
            'gender_siswa' => $this->request->getVar('gender_siswa'),
            'tmp_lahir_siswa' => $this->request->getVar('tmp_lahir_siswa'),
            'tgl_lahir_siswa' => $this->request->getVar('tgl_lahir_siswa'),
            'nisn' => $this->request->getVar('nisn'),
            'alamat_siswa' => $this->request->getVar('alamat_siswa'),
            'ayah' => $this->request->getVar('ayah'),
            'ibu' => htmlspecialchars($this->request->getVar('ibu')),
            'slug' => $slug,
            'updated_by' => user()->email,
            'updated_at' => time(),

        );
        // dd($data);
        $dataSekolah = array();
        $siswaModel->insert_data_sma($data, $dataSekolah);

        session()->setTempdata('pesan', '<div class="col-md-9 col-sm-9 "> <div class="alert alert-success"><i class="fas fa-solid fa-circle-check"></i> The Data has been added.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
               </div></div>');

        return redirect()->to('/Sma');
    }
}

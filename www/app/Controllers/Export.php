<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GetSiswaSmaModel;
use App\Models\GetSiswaSmpModel;
use CodeIgniter\I18n\Time;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

class Export extends BaseController
{
    public function export($thn_ajaran_1)
    {
        $siswaModel = new GetSiswaSmpModel();
        $dataSiswa = $siswaModel->join_all_data_smp()->like('thn_ajaran_1', $thn_ajaran_1)->get()->getResultArray();

        $writer = user()->username;
        $nameFile = "data_thn_ajaran" . $thn_ajaran_1 . "_Smp";

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

        $excel->getActiveSheet()->getStyle('A2:BK2')
            ->getAlignment()->setWrapText(true);
        $excel->setActiveSheetIndex(0)->setCellValue('A2', "ID SISWA SMP");
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
        $tm = time();
        $numrow = 3;
        foreach ($siswa as $dt) {
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $dt['id_siswa_smp']);
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $dt['nis_siswa_smp']);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $dt['nama_lengkap_siswa']);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $dt['thn_ajaran_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $dt['thn_ajaran_2']);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $dt['thn_ajaran_3']);
            $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $dt['status']);
            $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $dt['thn_ajaran_4']);
            $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $dt['kls_4']);

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

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename= "' . $nameFile . '.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = IOFactory::createWriter($excel, 'Xls');

        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename= "' . $nameFile . '.xlsx"');
        // header('Cache-Control: max-age=0');
        // $objWriter = IOFactory::createWriter($excel, 'Xlsx');

        $objWriter->save('php://output');

    }

    public function exportSma($thn_ajaran_1)
    {
        $siswaModel = new GetSiswaSmaModel();
        $dataSiswa = $siswaModel->join_all_data_sma()->like('thn_ajaran_1', $thn_ajaran_1)->get()->getResultArray();

        $writer = user()->username;
        $nameFile = "data_thn_ajaran" . $thn_ajaran_1 . "_Sma";

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

        $excel->getActiveSheet()->getStyle('A2:BK2')
            ->getAlignment()->setWrapText(true);
        $excel->setActiveSheetIndex(0)->setCellValue('A2', "ID SISWA SMA");
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
        $tm = time();
        $numrow = 3;
        foreach ($siswa as $dt) {
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $dt['id_siswa_sma']);
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $dt['nis_siswa_sma']);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $dt['nama_lengkap_siswa']);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $dt['thn_ajaran_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $dt['thn_ajaran_2']);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $dt['thn_ajaran_3']);
            $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $dt['status']);
            $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $dt['thn_ajaran_4']);
            $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $dt['kls_4']);

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

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename= "' . $nameFile . '.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = IOFactory::createWriter($excel, 'Xls');

        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename= "' . $nameFile . '.xlsx"');
        // header('Cache-Control: max-age=0');
        // $objWriter = IOFactory::createWriter($excel, 'Xlsx');

        $objWriter->save('php://output');

    }

    public function templateImport()
    {
        $writer = user()->username;
        $nameFile = "TemplateInputData";

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

        $excel->getActiveSheet()->getStyle('A2:BK2')
            ->getAlignment()->setWrapText(true);
        $excel->setActiveSheetIndex(0)->setCellValue('A2', "ID SISWA SMP");
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

        $excel->getActiveSheet(0)->setTitle("Template Input Data Siswa");
        $excel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename= "' . $nameFile . '.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = IOFactory::createWriter($excel, 'Xls');

        // header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        // header('Content-Disposition: attachment; filename= "' . $nameFile . '.xlsx"');
        // header('Cache-Control: max-age=0');
        // $objWriter = IOFactory::createWriter($excel, 'Xlsx');

        $objWriter->save('php://output');
    }

    public function exportAll($thn_ajaran_1)
    {
        $siswaModel = new GetSiswaSmpModel();
        $dataSiswa = $siswaModel->join_all_data_smp()->like('thn_ajaran_1', $thn_ajaran_1)->get()->getResultArray();

        $writer = user()->username;
        $nameFile = "data_thn_ajaran" . $thn_ajaran_1 . "_Smp";
        $writer = user()->username;
        $siswaModel = new GetSiswaSmpModel();

        $dataSiswa = $siswaModel->get_all_data_smp()->getResultArray();
        $totalSiswa = $siswaModel->countAll();

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

        $excel->getActiveSheet()->getStyle('A2:BK2')
            ->getAlignment()->setWrapText(true);
        $excel->setActiveSheetIndex(0)->setCellValue('A2', "NO");
        $excel->setActiveSheetIndex(0)->setCellValue('B2', "NIS");
        $excel->setActiveSheetIndex(0)->setCellValue('C2', "NAMA");
        $excel->setActiveSheetIndex(0)->setCellValue('D2', "JENIS KELAMIN [L / P]");
        $excel->setActiveSheetIndex(0)->setCellValue('E2', "NISN");
        $excel->setActiveSheetIndex(0)->setCellValue('F2', "TEMPAT LAHIR ");
        $excel->setActiveSheetIndex(0)->setCellValue('G2', "TANGGAL LAHIR [dd-mm-yy]");

        $excel->setActiveSheetIndex(0)->setCellValue('H2', "Kewarganegaraan");
        $excel->setActiveSheetIndex(0)->setCellValue('I2', "Agama");
        $excel->setActiveSheetIndex(0)->setCellValue('J2', "Anak ke");
        $excel->setActiveSheetIndex(0)->setCellValue('K2', "Saudara Kandung");
        $excel->setActiveSheetIndex(0)->setCellValue('L2', "Saudara Tiri");
        $excel->setActiveSheetIndex(0)->setCellValue('M2', "Saudara Angkat");
        $excel->setActiveSheetIndex(0)->setCellValue('N2', "Anak Yatim/Yatim/Yatim Piatu");
        $excel->setActiveSheetIndex(0)->setCellValue('O2', "Bahasa Sehari-hari");
        $excel->setActiveSheetIndex(0)->setCellValue('P2', "Alamat");
        $excel->setActiveSheetIndex(0)->setCellValue('Q2', "Tinggal Bersama");
        $excel->setActiveSheetIndex(0)->setCellValue('R2', "Jarak ke sekolah");
        $excel->setActiveSheetIndex(0)->setCellValue('S2', "Ke Sekolah Dengan");

        $excel->setActiveSheetIndex(0)->setCellValue('T2', "Berat Badan saat diterima");
        $excel->setActiveSheetIndex(0)->setCellValue('U2', "Berat Badan saat meninggalkan");
        $excel->setActiveSheetIndex(0)->setCellValue('V2', "Tinggi Badan saat diterima");
        $excel->setActiveSheetIndex(0)->setCellValue('W2', "Tinggi Badan saat meninggalkan");
        $excel->setActiveSheetIndex(0)->setCellValue('X2', "Gol. Darah");
        $excel->setActiveSheetIndex(0)->setCellValue('Y2', "Penyakit berat yang pernah diderita ");
        $excel->setActiveSheetIndex(0)->setCellValue('Z2', "Pernah diderita saat kelas");
        $excel->setActiveSheetIndex(0)->setCellValue('AA2', "Pernah diderita di tahun");
        $excel->setActiveSheetIndex(0)->setCellValue('AB2', "Pernah diderita selama");
        $excel->setActiveSheetIndex(0)->setCellValue('AC2', "Keterangan");
        $excel->setActiveSheetIndex(0)->setCellValue('AD2', "Kelainan jasmaniah / lainnya");

        $excel->setActiveSheetIndex(0)->setCellValue('AE2', "Diterima di sekolah ini sebagai siswa baru tanggal");
        $excel->setActiveSheetIndex(0)->setCellValue('AF2', "Asal sekolah");
        $excel->setActiveSheetIndex(0)->setCellValue('AG2', "Alamatnya");
        $excel->setActiveSheetIndex(0)->setCellValue('AH2', "Tanggal & nomor ijazah");
        $excel->setActiveSheetIndex(0)->setCellValue('AI2', "Diterima di sekolah ini sebagai siswa pindahan pada tanggal");
        $excel->setActiveSheetIndex(0)->setCellValue('AJ2', "Di kelas");
        $excel->setActiveSheetIndex(0)->setCellValue('AK2', "Dari sekolah");
        $excel->setActiveSheetIndex(0)->setCellValue('AL2', "Alamatnya");
        $excel->setActiveSheetIndex(0)->setCellValue('AM2', "Asal tamatan sekolah sebelumnya & no. ijazah");
        $excel->setActiveSheetIndex(0)->setCellValue('AN2', "Beralamat");
        $excel->setActiveSheetIndex(0)->setCellValue('AO2', "Alasan pindah ke sekolah ini");

        $excel->setActiveSheetIndex(0)->setCellValue('AP2', "Nama Ayah");
        $excel->setActiveSheetIndex(0)->setCellValue('AQ2', "Tempat, tanggal lahir");
        $excel->setActiveSheetIndex(0)->setCellValue('AR2', "Kewarganegaraan");
        $excel->setActiveSheetIndex(0)->setCellValue('AS2', "Pendidikan tertinggi");
        $excel->setActiveSheetIndex(0)->setCellValue('AT2', "Pekerjaan");
        $excel->setActiveSheetIndex(0)->setCellValue('AU2', "Penghasilan /bulan/tahun");
        $excel->setActiveSheetIndex(0)->setCellValue('AV2', "Alamat");

        $excel->setActiveSheetIndex(0)->setCellValue('AW2', "Nama Ibu");
        $excel->setActiveSheetIndex(0)->setCellValue('AX2', "Tempat, tanggal lahir");
        $excel->setActiveSheetIndex(0)->setCellValue('AY2', "Kewarganegaraan");
        $excel->setActiveSheetIndex(0)->setCellValue('AZ2', "Pendidikan tertinggi");
        $excel->setActiveSheetIndex(0)->setCellValue('BA2', "Pekerjaan");
        $excel->setActiveSheetIndex(0)->setCellValue('BB2', "Penghasilan /bulan/tahun");
        $excel->setActiveSheetIndex(0)->setCellValue('BC2', "Alamat");

        $excel->setActiveSheetIndex(0)->setCellValue('BD2', "Nama Wali");
        $excel->setActiveSheetIndex(0)->setCellValue('BE2', "Tempat, tanggal lahir");
        $excel->setActiveSheetIndex(0)->setCellValue('BF2', "Kewarganegaraan");
        $excel->setActiveSheetIndex(0)->setCellValue('BG2', "Pendidikan tertinggi");
        $excel->setActiveSheetIndex(0)->setCellValue('BH2', "Pekerjaan");
        $excel->setActiveSheetIndex(0)->setCellValue('BI2', "Penghasilan /bulan/tahun");
        $excel->setActiveSheetIndex(0)->setCellValue('BJ2', "Alamat");
        $excel->setActiveSheetIndex(0)->setCellValue('BK2', "Hubungan dengan peserta didik");

        $excel->getActiveSheet()->getStyle('A2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('B2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('C2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('D2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('E2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('F2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('G2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('H2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('I2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('J2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('K2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('L2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('M2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('N2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('O2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('P2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Q2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('R2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('S2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('T2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('U2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('V2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('W2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('X2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Y2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('Z2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AA2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AB2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AC2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AD2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AE2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AF2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AG2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AH2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AI2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AJ2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AK2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AL2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AM2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AN2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AO2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AP2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AQ2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AR2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AS2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AT2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AU2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AV2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AW2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AX2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AY2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('AZ2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BA2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BB2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BC2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BD2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BE2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BF2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BG2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BH2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BI2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BJ2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BK2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BL2')->applyFromArray($style_col);
        $excel->getActiveSheet()->getStyle('BM2')->applyFromArray($style_col);

        $siswa = $dataSiswa;
        // var_dump($siswa);
        // die();
        $tm = time();
        $no = 1;
        $numrow = 3;

        foreach ($siswa as $dt) {
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $dt['nis_siswa_smp']);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $dt['nama_lengkap_siswa']);
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $dt['gender_siswa']);
            $excel->setActiveSheetIndex(0)->setCellValueExplicit('E' . $numrow, $dt['nisn'], DataType::TYPE_STRING);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $dt['tmp_lahir_siswa']);
            // $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, date('d-m-Y', strtotime($dt['tgl_lahir'])));
            $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, date('d/m/Y', strtotime($dt['tgl_lahir_siswa'])));

            $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $dt['negara_siswa']);
            $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $dt['agama_siswa']);
            $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $dt['ank_ke']);
            $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $dt['jml_sdra_kndung']);
            $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $dt['jml_sdra_tiri']);
            $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $dt['jml_sdra_angkat']);
            $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $dt['status_ortu']);
            $excel->setActiveSheetIndex(0)->setCellValue('O' . $numrow, $dt['bhs_daily']);
            $excel->setActiveSheetIndex(0)->setCellValue('P' . $numrow, $dt['alamat_siswa']);
            $excel->setActiveSheetIndex(0)->setCellValue('Q' . $numrow, $dt['tinggal_dgn']);
            $excel->setActiveSheetIndex(0)->setCellValue('R' . $numrow, $dt['jrak_kesekolah']);
            $excel->setActiveSheetIndex(0)->setCellValue('S' . $numrow, $dt['kesekolah_dgn']);

            $excel->setActiveSheetIndex(0)->setCellValue('T' . $numrow, $dt['berat_badan_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('U' . $numrow, $dt['berat_badan_2']);
            $excel->setActiveSheetIndex(0)->setCellValue('V' . $numrow, $dt['tinggi_badan_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('W' . $numrow, $dt['tinggi_badan_2']);
            $excel->setActiveSheetIndex(0)->setCellValue('X' . $numrow, $dt['gol_darah']);
            $excel->setActiveSheetIndex(0)->setCellValue('Y' . $numrow, $dt['pnykit_berat_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('Z' . $numrow, $dt['trjngkit_saat_kls_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AA' . $numrow, $dt['trjngkit_di_thn_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AB' . $numrow, $dt['trjngkit_selama_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AC' . $numrow, $dt['ketrngan_1']);

            $excel->setActiveSheetIndex(0)->setCellValue('AD' . $numrow, $dt['kelainan_lainnya']);

            $excel->setActiveSheetIndex(0)->setCellValue('AE' . $numrow, $dt['sswa_bru_ditgl_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AF' . $numrow, $dt['asl_sklah_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AG' . $numrow, $dt['alamat_sklah_asl_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AH' . $numrow, $dt['tgl_nmr_ijazah_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AI' . $numrow, $dt['sswa_pndhan_ditgl_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AJ' . $numrow, $dt['pndh_di_kls_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AK' . $numrow, $dt['nmskolah_pndahan_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AL' . $numrow, $dt['alamat_sklh_pndahn_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AM' . $numrow, $dt['asl_sklah_before_nmrijazahnya_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AN' . $numrow, $dt['alamat_aslsekolah_before_1']);
            $excel->setActiveSheetIndex(0)->setCellValue('AO' . $numrow, $dt['alasan_pindah_kesini_1']);

            $excel->setActiveSheetIndex(0)->setCellValue('AP' . $numrow, $dt['ayah']);
            $excel->setActiveSheetIndex(0)->setCellValue('AQ' . $numrow, $dt['ttl_ayah']);
            $excel->setActiveSheetIndex(0)->setCellValue('AR' . $numrow, $dt['negara_ayah']);
            $excel->setActiveSheetIndex(0)->setCellValue('AS' . $numrow, $dt['pnddkan_akhir_ayah']);
            $excel->setActiveSheetIndex(0)->setCellValue('AT' . $numrow, $dt['job_ayah']);
            $excel->setActiveSheetIndex(0)->setCellValue('AU' . $numrow, $dt['gaji_ayah']);
            $excel->setActiveSheetIndex(0)->setCellValue('AV' . $numrow, $dt['almt_ayah']);

            $excel->setActiveSheetIndex(0)->setCellValue('AW' . $numrow, $dt['ibu']);
            $excel->setActiveSheetIndex(0)->setCellValue('AX' . $numrow, $dt['ttl_ibu']);
            $excel->setActiveSheetIndex(0)->setCellValue('AY' . $numrow, $dt['negara_ibu']);
            $excel->setActiveSheetIndex(0)->setCellValue('AZ' . $numrow, $dt['pnddkan_akhir_ibu']);
            $excel->setActiveSheetIndex(0)->setCellValue('BA' . $numrow, $dt['job_ibu']);
            $excel->setActiveSheetIndex(0)->setCellValue('BB' . $numrow, $dt['gaji_ibu']);
            $excel->setActiveSheetIndex(0)->setCellValue('BC' . $numrow, $dt['almt_ibu']);

            $excel->setActiveSheetIndex(0)->setCellValue('BD' . $numrow, $dt['wali']);
            $excel->setActiveSheetIndex(0)->setCellValue('BE' . $numrow, $dt['ttl_wali']);
            $excel->setActiveSheetIndex(0)->setCellValue('BF' . $numrow, $dt['negara_wali']);
            $excel->setActiveSheetIndex(0)->setCellValue('BG' . $numrow, $dt['pnddkn_akhir_wali']);
            $excel->setActiveSheetIndex(0)->setCellValue('BH' . $numrow, $dt['job_wali']);
            $excel->setActiveSheetIndex(0)->setCellValue('BI' . $numrow, $dt['gaji_wali']);
            $excel->setActiveSheetIndex(0)->setCellValue('BJ' . $numrow, $dt['almt_wali']);
            $excel->setActiveSheetIndex(0)->setCellValue('BK' . $numrow, $dt['status_dgn_sswa']);

            $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($styleDate);
            $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row);

            $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('P' . $numrow)->applyFromArray($style_row);

            $excel->getActiveSheet()->getStyle('Q' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('R' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('S' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('T' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('U' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('V' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('W' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('X' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('Y' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('Z' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AA' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AB' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AC' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AD' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AE' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AF' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AG' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
            $excel->getActiveSheet()->getStyle('AH' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AI' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AJ' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AK' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AL' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getColumnDimension('AL')->setAutoSize(true);
            $excel->getActiveSheet()->getStyle('AM' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AN' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getColumnDimension('AN')->setAutoSize(true);
            $excel->getActiveSheet()->getStyle('AO' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AP' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AQ' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AR' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AS' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AT' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AU' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AV' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getColumnDimension('AV')->setAutoSize(true);
            $excel->getActiveSheet()->getStyle('AW' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AX' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AY' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('AZ' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BA' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BB' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BC' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getColumnDimension('BC')->setAutoSize(true);
            $excel->getActiveSheet()->getStyle('BD' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BE' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BF' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BG' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BH' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BI' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BJ' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BK' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BL' . $numrow)->applyFromArray($style_row);
            $excel->getActiveSheet()->getStyle('BM' . $numrow)->applyFromArray($style_row);

            $no++;
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
        $excel->getActiveSheet()->getColumnDimension('J')->setWidth(16);
        $excel->getActiveSheet()->getColumnDimension('K')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('L')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('M')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('N')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('O')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('P')->setWidth(80);
        $excel->getActiveSheet()->getColumnDimension('Q')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('R')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('S')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('T')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('U')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('V')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('W')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('X')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('Y')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('Z')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AA')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AB')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AC')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AD')->setWidth(17);

        $excel->getActiveSheet()->getColumnDimension('AE')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AF')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AG')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AH')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AI')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AJ')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AK')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AL')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AM')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AN')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AO')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AP')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AQ')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AR')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AS')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AT')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AU')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AV')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AW')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AX')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AY')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('AZ')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BA')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BB')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BC')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BD')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BE')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BF')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BG')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BH')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BI')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BJ')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BK')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BL')->setWidth(17);
        $excel->getActiveSheet()->getColumnDimension('BM')->setWidth(17);

        // $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);

        // $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);

        $excel->getActiveSheet(0)->setTitle("Laporan Data Siswa");
        $excel->setActiveSheetIndex(0);

        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename= "' . $nameFile . '.xls"');
        header('Cache-Control: max-age=0');
        $objWriter = IOFactory::createWriter($excel, 'Xls');

        // header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        // header("Content-Transfer-Encoding: Binary");
        // header("Content-Disposition: attachment; filename= Kelas_7a_2020_2021.xlsx");

        // $objWriter = IOFactory::createWriter($excel, 'Xlsx');

        $objWriter->save('php://output');

    }
}

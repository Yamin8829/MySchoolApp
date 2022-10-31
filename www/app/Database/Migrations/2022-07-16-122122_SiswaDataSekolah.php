<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaDataSekolah extends Migration
{
    protected $DBGroup = "siswa";
    public function up()
    {
        //
        $fields = [
            'data_id_siswa_6thn' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],

            'iq_siswa_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_tes_iq_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kedisiplinan_sswa_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kreativitas_sswa_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tnggungjwb_sswa_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'penyesuian_diri_sswa_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kontrol_emosi_sswa_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kerjasama_sswa_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'iq_siswa_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_tes_iq_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kedisiplinan_sswa_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kreativitas_sswa_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tnggungjwb_sswa_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'penyesuian_diri_sswa_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kontrol_emosi_sswa_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kerjasama_sswa_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'iq_siswa_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_tes_iq_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kedisiplinan_sswa_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kreativitas_sswa_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tnggungjwb_sswa_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'penyesuian_diri_sswa_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kontrol_emosi_sswa_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kerjasama_sswa_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'prestasi_kesenian' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'prestasi_olahraga' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'prestasi_organisasi' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'prestasi_pramuka' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'prestasi_karya_tulis' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'prestasi_lainnya' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'nerima_beasiswa_thn1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_thn2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_thn3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_thn4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_thn5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_thn6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'sswa_bru_ditgl_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklah_asl_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_nmr_ijazah_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'sswa_pndhan_ditgl_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_di_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nmskolah_pndahan_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklh_pndahn_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah_before_nmrijazahnya_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_aslsekolah_before_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_pindah_kesini_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'sswa_bru_ditgl_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklah_asl_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_nmr_ijazah_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'sswa_pndhan_ditgl_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_di_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nmskolah_pndahan_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklh_pndahn_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah_before_nmrijazahnya_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_aslsekolah_before_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_pindah_kesini_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_tmat_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'no_ijzah_tmt_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'lnjut_ke_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_lnjut_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_pndah_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_dri_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_ke_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_pndh_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_tmat_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'no_ijzah_tmt_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'lnjut_ke_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_lnjut_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_pndah_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_dri_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_ke_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_pndh_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_putus_sklh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_putus_sklh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'thn_ajaran_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'jml_hari_efektif_semester_1_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'hadir_semester_1_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'hadir_semester_2_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_1_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_2_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_1_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_2_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_1_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_2_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'hadir_semester_1_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'hadir_semester_2_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_1_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_2_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_1_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_2_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_1_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_2_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'hadir_semester_1_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'hadir_semester_2_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_1_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_2_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_1_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_2_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_1_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_2_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'hadir_semester_1_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'hadir_semester_2_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_1_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_2_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_1_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_2_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_1_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_2_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'hadir_semester_1_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'hadir_semester_2_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_1_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_2_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_1_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_2_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_1_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_2_kls_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'hadir_semester_1_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'hadir_semester_2_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_1_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'sakit_semester_2_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_1_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'ijin_semester_2_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_1_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alpa_semester_2_kls_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'catatan_siswa_di_sklh_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'catatan_siswa_di_sklh_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'img_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_5' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_6' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],

        ];
        $this->forge->addField($fields);
        $this->forge->addKey(['data_id_siswa_6thn', 'data_nis_siswa_6thn']);
        $this->forge->addForeignKey('data_id_siswa_6thn', 'siswa_6thn', 'id_siswa_6thn', '', 'CASCADE');
        $this->forge->createTable('siswa_6thn_data_sekolah', true);
    }

    public function down()
    {
        // drop constraints first to prevent errors
        if ($this->db->DBDriver != 'SQLite3') // @phpstan-ignore-line
        {
            $this->forge->dropForeignKey('siswa_6thn_data_sekolah', 'siswa_6thn_data_sekolah_data_id_siswa_6thn_foreign');
        }

        $this->forge->dropTable('siswa_6thn_data_sekolah', true);
    }
}

<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaDataSmp extends Migration
{
    protected $DBGroup = "siswa_smp";
    public function up()
    {
        //
        $fields = [
            'data_id_siswa_smp' => ['type' => 'int', 'constraint' => 11, 'unsigned' => true],

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
            'nerima_beasiswa_dari1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nerima_beasiswa_dari3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'sswa_bru_ditgl' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklah_asl' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'tgl_nmr_ijazah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'sswa_pndhan_ditgl' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_di_kls' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'nmskolah_pndahan' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_sklh_pndahn' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'asl_sklah_before_nmrijazahnya' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alamat_aslsekolah_before' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_pindah_kesini' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_tmat' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'no_ijzah_tmt' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'lnjut_ke' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'almt_lnjut' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_pndah' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_dri_kls' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'pndh_ke' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_pndh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'tgl_putus_sklh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'alasan_putus_sklh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'thn_ajaran_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'thn_ajaran_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'jml_hari_efektif_semester_1_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_1_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],
            'jml_hari_efektif_semester_2_kls_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

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

            'catatan_siswa_di_sklh' => ['type' => 'varchar', 'constraint' => 225, 'default' => '-'],

            'img_1' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_2' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_3' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],
            'img_4' => ['type' => 'varchar', 'constraint' => 225, 'default' => 'default.png'],

        ];
        $this->forge->addField($fields);
        $this->forge->addKey(['data_id_siswa_smp']);
        $this->forge->addForeignKey('data_id_siswa_smp', 'siswa_smp', 'id_siswa_smp', '', 'CASCADE');
        $this->forge->createTable('siswa_smp_data_sekolah', true);
    }

    public function down()
    {
        // drop constraints first to prevent errors
        if ($this->db->DBDriver != 'SQLite3') // @phpstan-ignore-line
        {
            $this->forge->dropForeignKey('siswa_smp_data_sekolah', 'siswa_smp_data_sekolah_data_id_siswa_smp_foreign');
        }

        $this->forge->dropTable('siswa_smp_data_sekolah', true);
    }
}

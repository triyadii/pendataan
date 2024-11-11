<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Model_pendataan;
use App\Models\Model_log;
use App\Models\Model_data;

class Pendataan_ extends BaseController
{
    use ResponseTrait;
    public function sinkronisasiData()
    {
        $session        = session();
        $modelPendataan = new Model_pendataan();
        $modelLog       = new Model_log();
        $usernameAkses  = $session->get('username');
        $idUser         = $session->get('idUser');
        $token          = $session->get('token');
        $nik            = $this->request->getPost('nik');
        $nama           = $this->request->getPost('nama');
        // proses API Pegawai
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://diskopukm.deliserdangkab.go.id/API/api/Pencarian',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => '{
            "nik" : "' . $nik . '",
            "nama" : "' . $nama . '"
        }',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $token
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $hasilResponse = json_decode($response, true);
        // Logika 
        if ($hasilResponse['data'] == null) {
            $ses_data = [
                'status'         => "Gagal",
                'keterangan'    => "Data tidak ditemukan di database, Silahkan input melalui button penambahan data"
            ];
            $session->set($ses_data);
            return redirect()->back();
        } else {
            // Proses Sinkronisasi Data
            $modelData  = new Model_data();
            $cekDataNik = $modelData->cekDataNik($nik);
            if ($cekDataNik != null) {
                $ses_data = [
                    'status'        => "Gagal",
                    'keterangan'    => "Mohon maaf data sudah tersimpan dalam sistem, silahkan melakukan penambahan pendataan"
                ];
                $session->set($ses_data);
            } else {
                $data = [
                    'user'      => $idUser,
                    'nik'       => $hasilResponse['data'][0]['nomorIndukKependudukan'],
                    'nama'      => $hasilResponse['data'][0]['namaLengkap'],
                    'alamat'    => $hasilResponse['data'][0]['alamatPribadi'],
                    'desa'      => $hasilResponse['data'][0]['kodeDesaPribadi'],
                    'kecamatan' => $hasilResponse['data'][0]['kodeKecamatanPribadi']
                ];
                $modelPendataan->insert($data);
                $dataLog = [
                    'username'      => $usernameAkses,
                    'waktu'         => date('Y-m-d H:i:s'),
                    'keterangan'    => "Melakukan Sinkronisasi pendataan"
                ];
                $modelLog->insert($dataLog);
                $ses_data = [
                    'status'    => "Berhasil",
                    'keterangan' => "Sinkronisasi Data Berhasil"
                ];
                $session->set($ses_data);
            }
            return redirect()->back();
        }
    }
    public function create()
    {
        $session           = session();
        $modelPendataan    = new Model_pendataan();
        $modelData         = new Model_data();
        $modelLog          = new Model_log;
        $usernameAkses     = $session->get('username');
        $idUser            = $session->get('idUser');
        $nik               = $this->request->getPost('nik');
        $nama              = $this->request->getPost('nama');
        $alamat            = $this->request->getPost('alamat');
        $kecamatan         = $this->request->getPost('kecamatan');
        $desa              = $this->request->getPost('desa');
        $cekDataNik        = $modelData->cekDataNik($nik);
        if ($cekDataNik != null) {
            $ses_data = [
                'status'        => "Gagal",
                'keterangan'    => "Mohon maaf data sudah tersimpan dalam sistem"
            ];
            $session->set($ses_data);
        } else {
            $data = [
                'user'      => $idUser,
                'nik'       => $nik,
                'nama'      => $nama,
                'alamat'    => $alamat,
                'kecamatan' => $kecamatan,
                'desa'      => $desa
            ];
            $modelPendataan->insert($data);
            $dataLog = [
                'username'      => $usernameAkses,
                'waktu'         => date('Y-m-d H:i:s'),
                'keterangan'    => "Melakukan Penambahan pendataan"
            ];
            $modelLog->insert($dataLog);
            $ses_data = [
                'status'    => "Berhasil",
                'keterangan' => "Sinkronisasi Data Berhasil"
            ];
            $session->set($ses_data);
        }
        return redirect()->back();
    }
    public function hapus($id = null, $usernameAkses = null)
    {
        $session        = session();
        $modelPendataan = new Model_pendataan;
        $modelLog       = new Model_log;
        $usernameAkses  = $session->get('username');
        $modelPendataan->delete($id);
        $dataLog = [
            'username'   => $usernameAkses,
            'waktu'      => date('Y-m-d H:i:s'),
            'keterangan' => "Melakukan Penghapusan Pendataan"
        ];
        $modelLog->insert($dataLog);
        $response = [
            'status'    => 200,
            'messages'  => "Berhasil Menghapus Pendataan",
        ];
        return redirect()->back();
    }
}

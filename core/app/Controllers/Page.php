<?php

namespace App\Controllers;

use App\Models\Model_data;

class page extends BaseController
{
    // Halaman Admin
    // ====================================================================
    public function login_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 1) {
            return redirect()->to(base_url() . 'Dashboard');
        }
        return view('_login');
    }
    public function dashboard_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        $modelData      = new Model_data;
        $jumlahData     = $modelData->jumlahData();
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        return view('_dashboard', compact('jumlahData'));
    }
    public function user_()
    {
        $session = session();
        $statusLogin = $session->get('statusLogin');
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        $modelData = new Model_data;
        $data      = $modelData->tampilUser();
        return view('_user', compact('data'));
    }
    public function pendataan_()
    {
        $session     = session();
        $hakAkses    = $session->get('hakAkses');
        $idUser      = $session->get('idUser');
        $statusLogin = $session->get('statusLogin');
        $modelData      = new Model_data;
        if ($statusLogin == 0) {
            return redirect()->to(base_url() . 'Login_');
        }
        if ($hakAkses == 1) {
            $data = $modelData->tampilPendataan();
        } else if ($hakAkses == 2) {
            $data = $modelData->tampilDataByUser($idUser);
        }
        $dataDesa       = $modelData->tampilDataDesa();
        $dataKecamatan  = $modelData->tampilDataKecamatan();
        return view('_pendataan', compact('data', 'dataDesa', 'dataKecamatan'));
    }
}

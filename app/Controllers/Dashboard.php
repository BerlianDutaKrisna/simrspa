<?php

namespace App\Controllers;

use App\Models\HpaModel;
use App\Models\ProsesModel\PenerimaanModel;
use App\Models\ProsesModel\PengirisanModel;
use App\Models\ProsesModel\PemotonganModel;
use App\Models\ProsesModel\PemprosesanModel;
use App\Models\ProsesModel\PenanamanModel;
use App\Models\ProsesModel\PemotonganTipisModel;
use App\Models\ProsesModel\PewarnaanModel;
use App\Models\ProsesModel\PembacaanModel;
use App\Models\ProsesModel\PenulisanModel;
use App\Models\ProsesModel\PemverifikasiModel;
use App\Models\ProsesModel\AutorizedModel;
use App\Models\ProsesModel\PencetakanModel;


class Dashboard extends BaseController
{
    protected $hpaModel;
    protected $penerimaanModel;
    protected $pengirisanModel;
    protected $pemotonganModel;
    protected $pemprosesanModel;
    protected $penanamanModel;
    protected $pemotonganTipisModel;
    protected $pewarnaanModel;
    protected $pembacaanModel;
    protected $penulisanModel;
    protected $pemverifikasiModel;
    protected $autorizedModel;
    protected $pencetakanModel;
    protected $session;

    public function __construct()
    {
        // Menggunakan layanan CodeIgniter untuk manajemen model
        $this->hpaModel = model(HpaModel::class);
        $this->penerimaanModel = model(PenerimaanModel::class);
        $this->pengirisanModel = model(PengirisanModel::class);
        $this->pemotonganModel = model(PemotonganModel::class);
        $this->pemprosesanModel = model(PemprosesanModel::class);
        $this->penanamanModel = model(PenanamanModel::class);
        $this->pemotonganTipisModel = model(PemotonganTipisModel::class);
        $this->pewarnaanModel = model(PewarnaanModel::class);
        $this->pembacaanModel = model(PembacaanModel::class);
        $this->penulisanModel = model(PenulisanModel::class);
        $this->pemverifikasiModel = model(PemverifikasiModel::class);
        $this->autorizedModel = model(AutorizedModel::class);
        $this->pencetakanModel = model(PencetakanModel::class);
        $this->session = session();
    }

    public function index()
    {
        // Mengambil data dari model
        $data = [
            'hpaData' => $this->hpaModel->getHpaWithRelations(),
            'countHpa' => $this->hpaModel->countHpaProcessed(),
            'countPenerimaan' => $this->hpaModel->countPenerimaan(),
            'countPengirisan' => $this->hpaModel->countPengirisan(),
            'countPemotongan' => $this->hpaModel->countPemotongan(),
            'countPemprosesan' => $this->hpaModel->countPemprosesan(),
            'countPenanaman' => $this->hpaModel->countPenanaman(),
            'countPemotonganTipis' => $this->hpaModel->countPemotonganTipis(),
            'countPewarnaan' => $this->hpaModel->countPewarnaan(),
            'countPembacaan' => $this->hpaModel->countPembacaan(),
            'countPenulisan' => $this->hpaModel->countPenulisan(),
            'countPemverifikasi' => $this->hpaModel->countPemverifikasi(),
            'countAutorized' => $this->hpaModel->countAutorized(),
            'countPencetakan' => $this->hpaModel->countPencetakan(),
            'id_user' => $this->session->get('id_user'),
            'nama_user' => $this->session->get('nama_user'),
            'chartData' => json_encode($this->hpaModel->getHpaChartData(), JSON_NUMERIC_CHECK)
        ];

        return view('dashboard/dashboard', $data);
    }
}

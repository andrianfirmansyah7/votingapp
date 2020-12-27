<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Awal extends Controller
{
	public function visimisi(){
		$model = new UserModel();
        $data['calon']  = $model->getCalon()->getResult();
        echo view('visimisi',$data);
	}

	public function pemilihtetap(){
		$model = new UserModel();
		$data['pemilih'] = $model->getPemilih()->getResult();
		echo view('daftarpemilih',$data);
	}

	public function rekapitulasi(){
		$model = new UserModel();
		$data['calon']  = $model->getCalon()->getResult();
		$data['hasil'] = $model->getRekapitulasi();
		echo view('rekapitulasi',$data);
	}

	public function login(){
		echo view('login');
	}

	public function token(){
		$session = session();
		$model = new UserModel();
    	$token = $this->request->getPost('token');
    	$nim = $this->request->getPost('nim');
		$dat = $model->getToken($token,$nim);
		$dit = $model->getSuara($nim);
		if($dat != null){
			if($dit == null){
			$data['biodata'] = $dat;
			$data['calon']  = $model->getCalon()->getResult();
			echo view('surat_suara',$data);
			}else{
				$session->setFlashdata('msg',"<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-times'></i> Selamat</h4>
                Anda Telah Melakukan Proses Pemilihan
              </div>");
				return redirect()->to('/Awal/memilih');
			}
		}else{
			$session->setFlashdata("msg","<div class='alert alert-warning alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-exclamation'></i> Peringatan!</h4>
                Anda Tidak Termasuk Daftar Pemilih Tetap
              </div>");
			return redirect()->to('/Awal/memilih');
		}
	}

    public function pemilihan(){
    	$session = session();
        $model = new UserModel();
        $data = [
            'nim'      => $this->request->getPost('nim'),
            'pilihan'    => $this->request->getPost('pilihan'),
            'status'   => '1'
            ];
        $model->simpan($data,'suara');
		$session->setFlashdata('msg',"<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4><i class='icon fa fa-check'></i> Peringatan!</h4>
                Selamat Anda Telah Melakukan Pemilihan
        </div>");
      	return redirect()->to('/Awal/memilih');
    }

	public function memilih(){
		echo view('memilih');
	}

	public function pengajuan(){
		echo view('pengajuan');
	}
}

?>
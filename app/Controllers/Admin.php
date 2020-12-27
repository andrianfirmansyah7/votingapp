<?php namespace App\Controllers;
use PHPExcel;
use PHPExcel_IOFactory;
use App\Models\AddModel; 
use CodeIgniter\Controller;
use App\Models\UserModel;

class Admin extends Controller
{

    public function index()
    {
    	$model = new UserModel();
        $session = session();
        $data['pemilih'] = $model->countPemilih()->getResult();
        $data['panitia'] = $model->countPanitia()->getResult();
        $data['suara'] = $model->countSuara()->getResult();
        $data['tidak'] = $model->countTidakSah()->getResult();
		echo view('index',$data);
    }

    public function pemilih()
    {		
    	$model = new UserModel();
		$data['pemilih'] = $model->getPemilih()->getResult();
    	echo view('pemilih',$data);
    }

    public function panitia()
    {		
    	$model = new UserModel();
		$data['panitia'] = $model->getPanitia()->getResult();
    	echo view('panitia',$data);
    }

    public function tambah()
    {
    	$session = session();
    	$nim = $this->request->getPost('nim');
	    $a = substr($nim,6,10);
   		$b = rand(1000,9999);
   		$token = "SI".$b.$a;
    	$model = new UserModel();
        $data = array(
            'nim'        		=> $this->request->getPost('nim'),
            'nama_mahasiswa'	=> $this->request->getPost('nama'),
            'email' 			=> $this->request->getPost('email'),
            'token' 			=> $token
        );
        $model->simpan($data,'pemilih');
        return redirect()->to('/Admin/pemilih');
    }

	public function delete($id)
    {
        $model = new UserModel();
        $model->hapus($id,'pemilih','nim');
        return redirect()->to('/Admin/pemilih');
    }

	public function deletePanitia($id)
    {
        $model = new UserModel();
        $model->hapus($id,'users','user_id');
        return redirect()->to('/Admin/panitia');
    }

    public function pemungutanSuara($id)
    {
        $model = new UserModel();
        $model->simpan($id,'users','user_id');
        return redirect()->to('/Admin/panitia');
    }
    
    public function Rekapitulasi(){
		$model = new UserModel();
		$data['calon']  = $model->getCalon()->getResult();
		$data['hasil'] = $model->getRekapitulasi();
		echo view('rekapitulasiAdmin',$data);
    }

    public function updatePemilih()
    {
        $model = new UserModel();
        $id = $this->request->getPost('nim');
        $data = array(
            'nama_mahasiswa'  => $this->request->getPost('nama'),
            'email' 	      => $this->request->getPost('email'),
        );
        $model->ubah($data, $id,'pemilih','nim');
        return redirect()->to('/Admin/pemilih');
    }

    public function updatePanitia()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id');
        $data = array(
            'user_name' 		  => $this->request->getPost('nama'),
            'user_email' 	      => $this->request->getPost('email'),
            'user_password'       => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            'user_role'			  => $this->request->getPost('role')
        );
        $model->ubah($data, $id,'users','user_id');
        return redirect()->to('/Admin/panitia');
    }

    public function register(){
        $model = new UserModel();
        $data = [
            'user_name'     => $this->request->getVar('username'),
            'user_email'    => $this->request->getVar('email'),
            'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
        $model->simpan($data,'users');
        return redirect()->to('/Admin/panitia');
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/Login');
    }
}
?>
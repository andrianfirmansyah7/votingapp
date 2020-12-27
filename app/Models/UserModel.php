<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class UserModel extends Model{
    public function getCalon()
    {
        $builder = $this->db->table('calon');
        return $builder->get();
    }
 	
 	public function getPemilih(){
 		$builder = $this->db->table('pemilih');
        return $builder->get();
 	}

 	public function getPanitia(){
 		$builder = $this->db->table('users');
        return $builder->get();
 	}
 	 public function countPemilih(){
 		$builder = $this->db->table('pemilih');
 		$builder->selectCount('nim');
        return $builder->get();
 	}

 	public function getToken($token,$nim){
 		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM pemilih WHERE token = '".$token."' AND nim = '".$nim."'");
 		$a = $query->getresult();
 		return $a;
 	}

 	 public function getSuara($nim){
 		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM suara WHERE nim = '".$nim."'");
 		$a = $query->getresult();
 		return $a;
 	}

 	public function countPanitia(){
 		$builder = $this->db->table('users');
 		$builder->selectCount('user_name');
        return $builder->get();
 	}

 	public function countSuara(){
 		$builder = $this->db->table('suara');
 		$builder->selectCount('pilihan');
        return $builder->get();
 	}

 	public function countTidakSah(){
 		$builder = $this->db->table('suara');
 		$builder->selectCount('status');
 		$builder->where('status',0);
        return $builder->get();
 	}
 
 	public function getRekapitulasi(){
 		$db = \Config\Database::connect();
		$query = $db->query("SELECT COUNT(IF(pilihan='1' and status = 1,pilihan,null)) AS nomer1, COUNT(IF(pilihan='2' and status = 1,pilihan,null)) AS nomer2, COUNT(IF(pilihan='3' and status = 1,pilihan,null)) AS nomer3, COUNT(IF(status=0,pilihan,null)) AS tdk FROM suara");
		$a = $query->getresult();
 		return $a;
 	}

 	public function simpan($data,$tabel){
        $query = $this->db->table($tabel)->insert($data);
        return $query;
    }

    public function hapus($id,$table,$param)
    {
        $query = $this->db->table($table)->delete(array($param => $id));
        return $query;
    }

   	public function ubah($data, $id, $tabel, $param)
    {
        $query = $this->db->table($tabel)->update($data, array($param => $id));
        return $query;
    }
  
}
?>
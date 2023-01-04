<?php namespace App\Models;
use CodeIgniter\Model;

class produk_model extends Model{

    protected $DBGroup = 'default';

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    protected $returnType = 'array';
    protected $useTimestamps = true;

    protected $allowedFields = ['nama_produk', 'keterangan', 'harga', 'jumlah'];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    
    public function saveProduk($data)    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }

    public function getProduk(){
        return $this->findAll();
    }

    public function getProdukById($id){
        $this->where('id_produk',$id);
        return $this->findAll();
    }

    public function editProduk($data,$id){
        $query = $this->db->table($this->table)->where('id_produk', $id)->update($data);
        return $query;
    }

    public function deleteProduk($id)    {
        $query = $this->db->table($this->table)->where('id_produk', $id)->delete();
        return $query;
    }
}
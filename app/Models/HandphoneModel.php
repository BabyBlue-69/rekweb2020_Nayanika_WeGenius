<?php namespace App\Models;

use CodeIgniter\Model;

class HandphoneModel extends Model
{   
    protected $table = 'handphone';
    protected $allowedFields = ['merk', 'slug', 'layar', 'kamera', 'video', 'baterai', 'penyimpanan', 'foto'];

    public function getHandphone($slug = false)
    {
        if($slug == false){
            return $this->findAll();
        }
        return $this->where(['slug'=> $slug])->first();
    }
}
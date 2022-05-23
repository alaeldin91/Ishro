<?php

namespace App\Models;

use CodeIgniter\Model;

class ProrityModel extends Model
{
    protected $table = 'prority';
    protected $allowedFields = ['id', 'prorityName'];
    function get_prority()
    {
        $sql = 'select * from prority';
        $query = $this->db->query($sql);
       

      
        return $query->getResult();
    }
}

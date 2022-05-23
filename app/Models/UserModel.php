<?php

namespace App\Models;

use CodeIgniter\CI_Model;
use CodeIgniter\Model;

class UserModel extends Model{
    protected $table            = 'users';
    protected $primaryKey       = 'id';

    protected $returnType       = 'array';

    protected $allowedFields    = ['firstNameUser', 'lastNameUser','emailUser','password'];
     // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation     = false;

    
        
       
    

}

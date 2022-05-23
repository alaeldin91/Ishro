
<?php
namespace App\Controllers;

use App\Models\DepartMentModel;
class DepartMentController{
    public function index(){
        $departMentModel = new \App\Models\DepartMentModel();
        $data['departMent']  = $departMentModel->get_department();
    }
}
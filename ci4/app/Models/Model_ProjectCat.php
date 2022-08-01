<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_ProjectCat extends Model
{
    protected $table        = 'project_category';
    protected $primaryKey   = 'pro_cat_id';
    protected $allowedFields= ['pro_cat_name'];

    public function list()
    {
        return $this->table('project_category')
            ->orderBy('pro_cat_name', 'DESC')
            ->get()->getResultArray();
    }

}

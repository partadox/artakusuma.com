<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Project extends Model
{
    protected $table      = 'project';
    protected $primaryKey = 'project_id';
    protected $allowedFields = ['project_name', 'project_category', 'project_order', 'project_roles', 'project_time', 'project_cover', 'project_slug', 'project_description'];

    public function list()
    {
        return $this->table('project')
            ->join('project_category', 'project_category.pro_cat_id = project.project_id')
            ->orderBy('project_order', 'DESC')
            ->get()->getResultArray();
    }

}

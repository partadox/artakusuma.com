<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_Profile extends Model
{
    protected $table      = 'profile';
    protected $primaryKey = 'profile_id';
    protected $allowedFields = ['about_me', 'city', 'email', 'born', 'status', 'birthplace', 'facebook', 'instagram', 'youtube', 'linkedin','github', 'kaggle'];

}

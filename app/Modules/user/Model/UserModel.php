<?php

namespace App\Modules\User\Service;

use CodeIgniter\Controller;

use App\Modules\User\Model\UserModel;

class AdminService extends Controller
{
    public function __construct()
    {
        $this->admin_model = new UserModel();
    }
}
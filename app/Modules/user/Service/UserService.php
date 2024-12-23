<?php
namespace App\Modules\User\Service;

use CodeIgniter\controller;

use App\Module\User\Model\UserModel;

class UserService extends Controller
{
    public function __construct()
    {
        $this->user_model = new UserModel();   
    }
}
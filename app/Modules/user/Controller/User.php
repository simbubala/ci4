<?php
namespace App\Modules\User\Controllers;

use CodeIgniter\Controller;

use App\Modules\User\Service\UserService;

class User extends Controller
{
    public function __construct()
    {
      $this->user_service = new UserService();
    }

    public function getUser() {
        $this->jsonarr = this->user_service->getUser();
        $this->printJson($this->jsonarr);
    }

    public function printJson($data) {
        echo json_encode($data);exit;
    }
}
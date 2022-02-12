<?php
require_once 'model/user.php';
require_once 'service/userService.php';

class UserController
{
    private UserService $service;

    public function __construct()
    {
        $this->service = new UserService();
    }

    public function getUsers()
    {
        $users = $this->service->getUsers();
        
        echo json_encode($users);
    }
}
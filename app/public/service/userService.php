<?php
require_once 'model/user.php';
require_once 'repository/userRepository.php';

class UserService
{

    private userRepository $repository;

    public function __construct()
    {
        $this->repository = new userRepository();
    }

    public function getUsers()
    {
        return $this->repository->findAll();
    }
}
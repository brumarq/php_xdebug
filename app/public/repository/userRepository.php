<?php

require_once('../dbConfig.php');
require_once('repository.php');
require_once('model/user.php');

class UserRepository extends Repository
{

    private DB $db;
    private $stmt;

    public function __construct()
    {
        $this->db = DB::getInstance();
    }

    private string $all_users_sql = "SELECT * FROM users";
    private string $create_user_sql = "insert into users (.., ..) values (:.., :..)";
    private string $delete_user_sql = "delete from users where id = :id";
    private string $one_user_sql = "SELECT * from users where id = :id";

    public function findAll()
    {
        $this->stmt = $this->db->prepare($this->all_users_sql);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $this->stmt->execute();
        return $this->stmt->fetchAll();
    }

    public function findById($id)
    {
        $this->stmt = $this->db->prepare($this->one_user_sql);
        $this->stmt->bindParam(':id', $id);
        $this->stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $this->stmt->execute();
        return $this->stmt->fetch();
    }

    public function saveOne($object): bool
    {
        $this->stmt = $this->db->prepare($this->create_user_sql);
        return $this->stmt->execute($object) ?? false;
    }

    public function deleteOne($id): bool
    {
        $this->stmt = $this->db->prepare($this->delete_user_sql);
        $this->stmt->bindParam(':id', $id);
        return $this->stmt->execute();
    }
}
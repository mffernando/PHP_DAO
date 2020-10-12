<?php

class User {
    private $id;
    private $name;
    private $email;

    //User: getters and setters
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = trim($id); 
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = ucwords(trim($name)); 
    }

    public function getEmail() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = strtolower(trim($email));
    }
}

//interface: User implements DAO (Data Access Object)
//Create, Read, Update and Delete (CRUD)
interface UserDAO {
    public function create(User $user);
    public function findAll();
    public function findByEmail($email);
    public function findById($id);
    public function update(User $user);
    public function delete($id);
}

//infos:
    //trim: remove blanks (beginning and end);
    //ucwords: uppercase the first character;
    //strtolower: lowercase string;

?>
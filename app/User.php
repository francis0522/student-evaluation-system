<?php

class User {
    private $db;

    public function __construct($database) {
        $this->db = $database;
    }

    public function register($email, $password) {
        // Code to register a user
    }

    public function login($email, $password) {
        // Code to login a user
    }

    public function getUserById($id) {
        // Code to get a user by ID
    }

    public function getAllUsers() {
        // Code to get all users
    }

    public function updateUser($id, $data) {
        // Code to update a user
    }

    public function deleteUser($id) {
        // Code to delete a user
    }

    public function emailExists($email) {
        // Code to check if an email exists
    }
}
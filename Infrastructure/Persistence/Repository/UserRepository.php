<?php

namespace Infrastructure\Persistence\Repository;

use Domain\Models\User;
use Infrastructure\Persistence\Config\Connection;
use PDO;

class UserRepository
{
    private PDO $db;

    public function __construct()
    {
        $this->db = Connection::getConnection();
    }

    public function create(User $user): bool
    {
        $sql = "
            INSERT INTO users
            (
                name,
                email,
                password,
                role,
                status
            )
            VALUES
            (
                :name,
                :email,
                :password,
                :role,
                :status
            )
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword(),
            ':role' => $user->getRole(),
            ':status' => $user->getStatus()
        ]);
    }

    public function getAll(): array
    {
        $stmt = $this->db->query(
            "SELECT * FROM users ORDER BY id DESC"
        );

        return $stmt->fetchAll();
    }
}
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

    public function search(string $term = ''): array
    {
        if (empty($term)) {
            return $this->getAll();
        }

        $sql = "
            SELECT *
            FROM users
            WHERE
                name LIKE :term
                OR email LIKE :term
                OR role LIKE :term
            ORDER BY id DESC
        ";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            ':term' => "%{$term}%"
        ]);

        return $stmt->fetchAll();
    }

    public function findById(int $id): ?array
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM users WHERE id = :id"
        );

        $stmt->execute([
            ':id' => $id
        ]);

        $user = $stmt->fetch();

        return $user ?: null;
    }

    public function update(User $user): bool
    {
        $sql = "
            UPDATE users
            SET
                name = :name,
                email = :email,
                role = :role,
                status = :status
            WHERE id = :id
        ";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([
            ':id' => $user->getId(),
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
            ':role' => $user->getRole(),
            ':status' => $user->getStatus()
        ]);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            "DELETE FROM users WHERE id = :id"
        );

        return $stmt->execute([
            ':id' => $id
        ]);
    }

    public function getStatistics(): array
    {
        return [

            'total' => $this->db
                ->query("SELECT COUNT(*) FROM users")
                ->fetchColumn(),

            'active' => $this->db
                ->query("
                    SELECT COUNT(*)
                    FROM users
                    WHERE status='ACTIVE'
                ")
                ->fetchColumn(),

            'inactive' => $this->db
                ->query("
                    SELECT COUNT(*)
                    FROM users
                    WHERE status='INACTIVE'
                ")
                ->fetchColumn(),

            'admins' => $this->db
                ->query("
                    SELECT COUNT(*)
                    FROM users
                    WHERE role='ADMIN'
                ")
                ->fetchColumn()
        ];
    }
}
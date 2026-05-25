<?php

namespace Domain\Models;

class User
{
    private ?int $id;

    private string $name;

    private string $email;

    private string $password;

    private string $role;

    private string $status;

    public function __construct(
        ?int $id,
        string $name,
        string $email,
        string $password,
        string $role,
        string $status = 'ACTIVE'
    ) {
        $this->id = $id;
        $this->name = trim($name);
        $this->email = trim($email);
        $this->password = $password;
        $this->role = $role;
        $this->status = $status;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setName(string $name): void
    {
        $this->name = trim($name);
    }

    public function setEmail(string $email): void
    {
        $this->email = trim($email);
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
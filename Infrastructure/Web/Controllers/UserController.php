<?php

namespace Infrastructure\Web\Controllers;

use Domain\Models\User;
use Infrastructure\Persistence\Repository\UserRepository;

class UserController
{
    private UserRepository $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function index()
    {
        $users = $this->repository->getAll();

        require __DIR__ .
        '/../Views/index.php';
    }

    public function store()
    {
        $user = new User(
            null,
            $_POST['name'],
            $_POST['email'],
            password_hash(
                $_POST['password'],
                PASSWORD_DEFAULT
            ),
            $_POST['role']
        );

        $this->repository->create($user);

        header("Location: index.php");
        exit;
    }
}
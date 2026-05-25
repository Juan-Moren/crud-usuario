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

    public function edit(int $id)
    {
        $user = $this->repository->findById($id);

        require __DIR__ . '/../Views/edit.php';
    }

    public function update()
    {
        $user = new User(
            (int) $_POST['id'],
            $_POST['name'],
            $_POST['email'],
            '',
            $_POST['role'],
            $_POST['status']
        );

        $this->repository->update($user);

        header("Location: index.php");
        exit;
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);

        header("Location: index.php");
        exit;
    }
}

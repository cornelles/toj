<?php

namespace App;

/**
 * Class User
 * @package App
 */
class User
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $password;

    /**
     * User constructor.
     * @param array $user
     */
    public function __construct($user)
    {
        if (!empty($user['name'])) {
          $this->name = $user['name'];
        }

        if (!empty($user['email'])) {
          $this->email = $user['email'];
        }

        if (!empty($user['password'])) {
          $this->password = $user['password'];
        }
    }

    /**
     * @param string $httpMethod
     * @param array $input
     */
    public function store($httpMethod, array $input)
    {
        // TODO: write logic here
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed|string
     */
    public function getPassword()
    {
      return $this->password;
    }
}

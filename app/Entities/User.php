<?php

namespace App\Entities;

use JsonSerializable;
use Doctrine\Common\Collections\Collection;
use Illuminate\Contracts\Auth\Authenticatable;
use LaravelDoctrine\ORM\Auth\Authenticatable as DoctrineAuthenticable;

class User implements Authenticatable, JsonSerializable
{
    use DoctrineAuthenticable;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var email
     */
    protected $email;

    /**
     * @var password
     */
    protected $password;

    /**
     * @var boolean
     */
    protected $isAdmin = false;

    /**
     * @var Collection
     */
    protected $articles;

    /**
     * @{inheritdoc}
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * @{inheritdoc}
     */
    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'isAdmin' => $this->isAdmin,
            'email' => $this->email,
        ];
    }

    /**
     * @{inheritdoc}
     */
    public function getAuthIdentifier()
    {
        return $this->id;
    }

    /**
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @{inheritdoc}
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param  string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets the value of isAdmin.
     *
     * @return boolean
     */
    public function getIsAdmin()
    {
        return $this->isAdmin;
    }

    /**
     * @param  boolean $isAdmin
     *
     * @return self
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    /**
     * @return  email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param  email $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
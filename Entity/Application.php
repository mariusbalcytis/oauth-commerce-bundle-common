<?php

namespace Maba\Bundle\OAuthCommerceCommonBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class Application implements UserInterface, \Serializable
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the roles granted to the user.
     * @return string[]
     */
    public function getRoles()
    {
        return array('ROLE_OAUTH_APPLICATION');
    }

    /**
     * Returns the password used to authenticate the user.
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     * @return string The password
     */
    public function getPassword()
    {
        return null;
    }

    /**
     * Returns the salt that was originally used to encode the password.
     * This can return null if the password was not encoded using a salt.
     * @return string The salt
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * Returns the username used to authenticate the user.
     * @return string The username
     */
    public function getUsername()
    {
        return $this->id;
    }

    public function eraseCredentials()
    {
    }


    public function serialize()
    {
        return serialize(array($this->id));
    }

    public function unserialize($serialized)
    {
        list($this->id) = unserialize($serialized);
    }
}
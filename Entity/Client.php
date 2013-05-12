<?php

namespace Maba\Bundle\OAuthCommerceCommonBundle\Entity;

use Maba\OAuthCommerceInternalClient\Entity\ClientCredentials;
use Symfony\Component\Security\Core\User\UserInterface;

class Client implements UserInterface, \Serializable
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
     * @var string
     */
    protected $redirectUri;

    /**
     * Not persisted, available only after new client creation
     *
     * @var ClientCredentials
     */
    protected $generatedCredentials;

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
     * @param string $redirectUri
     *
     * @return $this
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * @param \Maba\OAuthCommerceInternalClient\Entity\ClientCredentials $generatedCredentials
     *
     * @return $this
     */
    public function setGeneratedCredentials($generatedCredentials)
    {
        $this->generatedCredentials = $generatedCredentials;

        return $this;
    }

    /**
     * @return \Maba\OAuthCommerceInternalClient\Entity\ClientCredentials
     */
    public function getGeneratedCredentials()
    {
        return $this->generatedCredentials;
    }

    /**
     * Returns the roles granted to the user.
     * @return string[]
     */
    public function getRoles()
    {
        return array('ROLE_OAUTH_CLIENT');
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
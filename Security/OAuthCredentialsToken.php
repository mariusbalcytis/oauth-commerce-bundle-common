<?php


namespace Maba\Bundle\OAuthCommerceCommonBundle\Security;

use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;
use Symfony\Component\Security\Core\User\UserInterface;

class OAuthCredentialsToken extends AbstractToken
{
    const TYPE_APPLICATION = 'application';
    const TYPE_CLIENT = 'client';

    /**
     * @var mixed
     */
    protected $credentials;

    /**
     * @var AccessTokenData
     */
    protected $accessToken;

    /**
     * @var integer
     */
    protected $credentialsId;

    /**
     * Returns the user credentials.
     * @return mixed The user credentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    public function getType()
    {
        return $this->getAttribute('type');
    }

    public function setClient($client)
    {
        $this->credentials = $client;
        $this->setAttribute('type', self::TYPE_CLIENT);
        return $this;
    }

    public function setApplication($application)
    {
        $this->credentials = $application;
        $this->setAttribute('type', self::TYPE_APPLICATION);
        return $this;
    }

    public function setAccessTokenData(AccessTokenData $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return \Maba\Bundle\OAuthCommerceCommonBundle\Security\AccessTokenData
     */
    public function getAccessTokenData()
    {
        return $this->accessToken;
    }

    /**
     * @param int $credentialsId
     *
     * @return $this
     */
    public function setCredentialsId($credentialsId)
    {
        $this->credentialsId = $credentialsId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCredentialsId()
    {
        return $this->credentialsId;
    }


}
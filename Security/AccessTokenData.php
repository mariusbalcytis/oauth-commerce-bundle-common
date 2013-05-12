<?php


namespace Maba\Bundle\OAuthCommerceCommonBundle\Security;


class AccessTokenData
{
    protected $scopes;

    protected $userId;

    public function __construct($userId, $scopes = array())
    {
        $this->userId = $userId;
        $this->scopes = $scopes;
    }

    public function getScopes()
    {
        return $this->scopes;
    }

    public function getUserId()
    {
        return $this->userId;
    }
}
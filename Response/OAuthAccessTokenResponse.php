<?php

namespace Maba\Bundle\OAuthCommerceCommonBundle\Response;

use Maba\Bundle\OAuthCommerceCommonBundle\Entity\AccessToken;

class OAuthAccessTokenResponse
{
    /**
     * @var \Maba\Bundle\OAuthCommerceCommonBundle\Entity\AccessToken
     */
    protected $accessToken;

    /**
     * @var array
     */
    protected $headers;


    public function __construct(AccessToken $accessToken, $headers = array())
    {
        $this->accessToken = $accessToken;
        $this->headers = $headers;
    }

    /**
     * @return \Maba\Bundle\OAuthCommerceCommonBundle\Entity\AccessToken
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

}
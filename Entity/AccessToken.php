<?php


namespace Maba\Bundle\OAuthCommerceCommonBundle\Entity;


class AccessToken
{
    protected $scopes = array();

    protected $userId = null;

    protected $credentialsId = null;

    /**
     * @var \DateTime
     */
    protected $expires = null;

    public function create()
    {
        return new static();
    }

    public function toArray()
    {
        return array(
            'scopes' => $this->scopes,
            'userId' => $this->userId,
            'credentialsId' => $this->credentialsId,
            'expires' => $this->expires ? $this->expires->getTimestamp() : time() + 60,
        );
    }

    public function setCredentialsId($credentialsId)
    {
        $this->credentialsId = $credentialsId;

        return $this;
    }

    public function getCredentialsId()
    {
        return $this->credentialsId;
    }

    /**
     * @param \DateTime $expires
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    public function setScopes($scopes)
    {
        $this->scopes = $scopes;

        return $this;
    }

    public function getScopes()
    {
        return $this->scopes;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    public function getUserId()
    {
        return $this->userId;
    }


}
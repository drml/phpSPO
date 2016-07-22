<?php
/**
 * Represents a collection of User resources
 */

namespace SharePoint\PHP\Client;


class UserCollection extends ClientObjectCollection
{

    /**
     * Gets the user with the specified member identifier (ID).
     * @param int $id
     * @return User
     */
    public function getById($id)
    {
        $path = new ResourcePathServiceOperation($this->getContext(),$this->getResourcePath(),"getById",array($id));
        return new User($this->getContext(),$path);
    }

    /**
     * Gets the user with the specified email address.
     * @param string $emailAddress The email of the user to get.
     * @return User
     */
    public function getByEmail($emailAddress)
    {
        $path = new ResourcePathServiceOperation($this->getContext(),$this->getResourcePath(),"getByEmail",array($emailAddress));
        return new User($this->getContext(),$path);
    }

    /**
     * @param string $loginName
     * @return User
     */
    public function getByLoginName($loginName)
    {
        $path = new ResourcePathServiceOperation($this->getContext(),$this->getResourcePath(),"getByLoginName",array($loginName));
        return new User($this->getContext(),$path);
    }


    /**
     * Removes the user with the specified ID.
     * @param int $id
     */
    public function removeById($id)
    {
        $qry = new ClientActionUpdateMethod(
            $this->getResourceUrl(),
            "removebyid",
            array($id));
        $this->getContext()->addQuery($qry);
    }

    /**
     * Removes the user with the specified login name
     * @param string $loginName
     */
    public function removeByLoginName($loginName)
    {
        $qry = new ClientActionUpdateMethod(
            $this->getResourceUrl(),
            "removebyloginname",
            array(rawurlencode($loginName)));
        $this->getContext()->addQuery($qry);
    }
}
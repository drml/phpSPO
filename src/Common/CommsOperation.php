<?php

/**
 * Modified: 2020-05-26T22:12:31+00:00
 */
namespace Office365\Common;

use Office365\Runtime\ClientObject;

class CommsOperation extends ClientObject
{
    /**
     * @return string
     */
    public function getClientContext()
    {
        if (!$this->isPropertyAvailable("ClientContext")) {
            return null;
        }
        return $this->getProperty("ClientContext");
    }
    /**
     * @var string
     */
    public function setClientContext($value)
    {
        $this->setProperty("ClientContext", $value, true);
    }
    /**
     * @return ResultInfo
     */
    public function getResultInfo()
    {
        if (!$this->isPropertyAvailable("ResultInfo")) {
            return null;
        }
        return $this->getProperty("ResultInfo");
    }
    /**
     * @var ResultInfo
     */
    public function setResultInfo($value)
    {
        $this->setProperty("ResultInfo", $value, true);
    }
}
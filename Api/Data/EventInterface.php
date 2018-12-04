<?php

/**
 * @author Mygento Team
 * @copyright 2014-2018 Mygento (https://www.mygento.ru)
 * @package Mygento_Base
 */

namespace Mygento\Base\Api\Data;

interface EventInterface
{
    const ID = 'id';
    const INSTANCE = 'instance';
    const CHANNEL = 'channel';
    const LEVEL = 'level';
    const MESSAGE = 'message';
    const LOGGED_AT = 'logged_at';
    const CONTEXT = 'context';
    const EXTRA = 'extra';

    /**
     * Get id
     * @return int|null
     */
    public function getId();

    /**
     * Set id
     * @param int $id
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setId($id);

    /**
     * Get instance
     * @return string|null
     */
    public function getInstance();

    /**
     * Set instance
     * @param string $instance
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setInstance($instance);

    /**
     * Get channel
     * @return string|null
     */
    public function getChannel();

    /**
     * Set channel
     * @param string $channel
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setChannel($channel);

    /**
     * Get level
     * @return int|null
     */
    public function getLevel();

    /**
     * Set level
     * @param int $level
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setLevel($level);

    /**
     * Get message
     * @return string|null
     */
    public function getMessage();

    /**
     * Set message
     * @param string $message
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setMessage($message);

    /**
     * Get logged at
     * @return string|null
     */
    public function getLoggedAt();

    /**
     * Set logged at
     * @param string $loggedAt
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setLoggedAt($loggedAt);

    /**
     * Get context
     * @return string|null
     */
    public function getContext();

    /**
     * Set context
     * @param string $context
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setContext($context);

    /**
     * Get extra
     * @return string|null
     */
    public function getExtra();

    /**
     * Set extra
     * @param string $extra
     * @return \Mygento\Base\Api\Data\EventInterface
     */
    public function setExtra($extra);
}

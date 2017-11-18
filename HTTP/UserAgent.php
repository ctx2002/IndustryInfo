<?php
namespace Softwarewisdom\Crawler\HTTP;

/**
 * http user agent
 * ****/
class UserAgent
{
    /**
     * @var \SplFixedArray
     * a pool of user agent string, loaded from user_agent.txt
     */
    private $pool;

    /**
     * UserAgent constructor.
     */
    public function __construct()
    {
        $this->initPool();
    }

    /**
     *    initialize user agent pool
     */
    private function initPool()
    {
        $results = file(__DIR__."/user_agents.txt");
        $this->pool = \SplFixedArray::fromArray($results);
    }

    /**
     *   randomly returns a user agent string
     */
    public function getOne()
    {
        $index = rand(1, $this->pool->count ());
        return $this->pool->offsetGet($index);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11/24/2016
 * Time: 9:02 PM
 */

namespace Softwarewisdom\Crawler\Entity;
/**
 * @Entity(repositoryClass="Softwarewisdom\Crawler\Repository\SitemapUrl")
 * @Table(name="sitemap_url")
 **/
class SitemapUrl
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string", length=256, unique=true) **/
    protected $url;
    /** @Column(type="string", length=16,  options={"default" : "pending"}) **/
    protected $status = 'pending';

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
}
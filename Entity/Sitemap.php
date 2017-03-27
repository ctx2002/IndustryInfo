<?php
namespace Softwarewisdom\Crawler\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity(repositoryClass="Softwarewisdom\Crawler\Repository\Sitemap")
 * @Table(name="sitemap")
 **/
class Sitemap
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string", length=128, unique=true) **/
    protected $name;
    /** @Column(type="text") **/
    protected $sitemap;
    /** @Column(type="datetime", nullable=true) **/
    protected $created_date;
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
    public function getCreatedDate()
    {
        return $this->created_date;
    }

    /**
     * @param mixed $created_date
     */
    public function setCreatedDate($created_date)
    {
        $this->created_date = $created_date;
    }

    /**
     * @return mixed
     */
    public function getSitemap()
    {
        return $this->sitemap;
    }

    /**
     * @param mixed $sitemap
     */
    public function setSitemap($sitemap)
    {
        $this->sitemap = $sitemap;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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


}
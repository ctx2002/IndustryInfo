<?php
namespace Softwarewisdom\Crawler\Entity;

/**
 * @Entity @Table(name="sitemap")
 **/
class Sitemap
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string", length=128, unique=true) **/
    protected $name;
    /** @Column(type="text") **/
    protected $sitemap;

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
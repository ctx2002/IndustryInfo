<?php

namespace Softwarewisdom\Crawler\Entity;

/**
 * @Entity @Table(name="urls")
 **/
class Url
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
    /** @Column(type="string", length=256, unique=true) **/
    protected $url;
    /** @Column(type="string", length=16) **/
    protected $changefreq;
    /** @Column(type="string", length=16) **/
    protected $parser = '';

    /** @Column(type="text" , nullable=true) **/
    protected $htmlContent = '';

    /** @Column(type="smallint", nullable=true) **/
    protected $failedCounter = 0;

    /** @Column(type="string", length=16,  options={"default" : "pending"}) **/
    protected $status = 'pending';

    /**
     * @return mixed
     */
    public function getHtmlContent()
    {
        return $this->htmlContent;
    }

    /**
     * @return mixed
     */
    public function getParser()
    {
        return $this->parser;
    }

    /**
     * @param mixed $parser
     */
    public function setParser($parser)
    {
        $this->parser = $parser;
    }

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
     * @param mixed $htmlContent
     */
    public function setHtmlContent($htmlContent)
    {
        $this->htmlContent = $htmlContent;
    }

    /**
     * @return mixed
     */
    public function getFailedCounter()
    {
        return $this->failedCounter;
    }

    /**
     * @param mixed $failedCounter
     */
    public function setFailedCounter($failedCounter)
    {
        $this->failedCounter = $failedCounter;
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

    /**
     * @return mixed
     */
    public function getChangefreq()
    {
        return $this->changefreq;
    }

    /**
     * @param mixed $changefreq
     */
    public function setChangefreq($changefreq)
    {
        $this->changefreq = $changefreq;
    }

    /**
     * @return mixed
     */
    public function getParse()
    {
        return $this->parse;
    }

    /**
     * @param mixed $parse
     */
    public function setParse($parse)
    {
        $this->parse = $parse;
    }


}
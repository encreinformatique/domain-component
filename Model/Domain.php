<?php

/*
 * This file is part of the Domain component.
 *
 * (c) Julien Devergnies
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EncreInformatique\Component\Domain\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass()
 * @author Julien Devergnies <encreinformatique@tousleshoraires.fr>
 */
abstract class Domain implements DomainInterface
{
    /**
     * @var int $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $domain
     *
     * @ORM\Column(name="domain", type="string", length=255)
     */
    protected $host = null;

    /**
     * @var string $ip
     *
     * @ORM\Column(name="ip", type="string", length=30)
     */
    protected $ip;

    /**
     * @var \DateTimeInterface $creation
     *
     * @ORM\Column(name="creation", type="datetime")
     */
    protected $creation;

    /**
     * @var bool $secured
     *
     * @ORM\Column(name="secured", type="boolean")
     */
    protected $secured;

    public function __construct()
    {
        $this->creation = new \DateTime('now');
        $this->secured = false;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set host
     *
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        if (preg_match("`([A-z0-9-]+)\.([A-z]+)$`", $host)) {
            $this->host = $host;
        }
        return $this;
    }
    
    /**
     * Get host
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set creation
     *
     * @param \DateTimeInterface $creation
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    }

    /**
     * Get creation
     *
     * @return \DateTimeInterface
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set secured
     *
     * @param boolean $secured
     */
    public function setSecured($secured)
    {
        $this->secured = $secured;
    }

    /**
     * Get secured
     *
     * @return bool
     */
    public function isSecured(): bool
    {
        return $this->secured;
    }

    /**
     * Get secured
     *
     * @deprecated
     * @return boolean
     */
    public function getSecured()
    {
        return $this->isSecured();
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Domain
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
    
    /**************
     * DEPRECATED *
     **************/
    
    /**
     * Get domain
     * @deprecated Use getHost() instead. 
     * @return string
     */
    public function getDomain()
    {
        return $this->getHost();
    }
    
    /**
     * Set domain
     * @deprecated Use setHost() instead. 
     * @param string $domain
     */
    public function setDomain($domain)
    {
        $this->setHost($domain);
    }
}

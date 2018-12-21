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

/**
 * @author Julien Devergnies <encreinformatique@tousleshoraires.fr>
 */
interface DomainInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set domain
     *
     * @param string $domain
     */
    public function setDomain($domain);

    /**
     * Get domain
     *
     * @return string
     */
    public function getDomain();

    /**
     * Set creation
     *
     * @param \DateTimeInterface $creation
     */
    public function setCreation($creation);

    /**
     * Get creation
     *
     * @return \DateTimeInterface
     */
    public function getCreation();

    /**
     * Set secured
     *
     * @param boolean $secured
     */
    public function setSecured($secured);

    /**
     * Get secured
     *
     * @return boolean
     */
    public function getSecured();

    /**
     * Set ip
     *
     * @param string $ip
     * @return Domain
     */
    public function setIp($ip);

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp();
}

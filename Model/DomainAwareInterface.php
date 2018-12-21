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
interface DomainAwareInterface
{
    /**
     * @return DomainInterface
     */
    public function getDomain();

    /**
     * @param DomainInterface $domain
     */
    public function setDomain(DomainInterface $domain = null);
}

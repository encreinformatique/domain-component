<?php

/*
 * This file is part of the Domain component.
 *
 * (c) Julien Devergnies
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\EncreInformatique\Component\Domain\Model;

use EncreInformatique\Component\Domain\Model\Domain as AbstractDomain;
use PhpSpec\ObjectBehavior;
use PhpSpec\Wrapper\Subject\Expectation\Expectation;

/**
 * @author Julien Devergnies <encreinformatique@tousleshoraires.fr>
 */
final class DomainSpec extends ObjectBehavior
{
    const IP = '::1';

    function let(Expectation $expectation)
    {
        $this->beAnInstanceOf('spec\EncreInformatique\Component\Domain\Model\Domain');
        $this->beConstructedWith($expectation);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Domain::class);
    }

//    function it_implements_domain_interface()
//    {
//        $this->shouldImplement(DomainInterface::class);
//    }

    function it_sets_domain()
    {
        $this->setDomain('domain.com');

        $this->getDomain()->shouldReturn('domain.com');
    }

    function it_sets_secured()
    {
        $this->setSecured(true);

        $this->getSecured()->shouldBeEqualTo(true);
    }

    function it_sets_ip()
    {
        $this->setIp(self::IP);

        $this->getIp()->shouldBeEqualTo(self::IP);
    }
}

class Domain extends AbstractDomain
{
}

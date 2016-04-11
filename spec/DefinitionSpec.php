<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Xabbuh\XApi\Model;

use PhpSpec\ObjectBehavior;

class DefinitionSpec extends ObjectBehavior
{
    function its_properties_can_be_read()
    {
        $this->beConstructedWith(
            array('en-US' => 'test'),
            array('en-US' => 'test'),
            'http://id.tincanapi.com/activitytype/unit-test',
            'https://github.com/adlnet/xAPI_LRS_Test'
        );

        $name = $this->getName();
        $name->shouldBeArray();
        $name->shouldHaveCount(1);
        $name->shouldHaveKeyWithValue('en-US', 'test');

        $description = $this->getName();
        $description->shouldBeArray();
        $description->shouldHaveCount(1);
        $description->shouldHaveKeyWithValue('en-US', 'test');

        $this->getType()->shouldReturn('http://id.tincanapi.com/activitytype/unit-test');
        $this->getMoreInfo()->shouldReturn('https://github.com/adlnet/xAPI_LRS_Test');
    }

    function it_can_be_empty()
    {
        $this->getName()->shouldReturn(null);
        $this->getDescription()->shouldReturn(null);
        $this->getType()->shouldReturn(null);
        $this->getMoreInfo()->shouldReturn(null);
    }
}

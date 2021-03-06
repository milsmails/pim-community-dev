<?php

namespace spec\Akeneo\Component\StorageUtils\Exception;

use Akeneo\Component\StorageUtils\Exception\ImmutablePropertyException;
use PhpSpec\ObjectBehavior;

class ImmutablePropertyExceptionSpec extends ObjectBehavior
{
    function it_creates_an_immutable_property_exception()
    {
        $exception = ImmutablePropertyException::immutableProperty('property', 'property_value', 'action', 'type');

        $this->beConstructedWith(
            'property',
            'property_value',
            'Property "property" cannot be modified, "property_value" given (for action type).',
            0
        );

        $this->shouldBeAnInstanceOf(get_class($exception));
        $this->getPropertyName()->shouldReturn('property');
        $this->getPropertyValue()->shouldReturn($exception->getPropertyValue());
        $this->getMessage()->shouldReturn($exception->getMessage());
        $this->getCode()->shouldReturn($exception->getCode());
    }
}

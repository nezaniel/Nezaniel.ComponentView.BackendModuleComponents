<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\SelectBox;

use Neos\ContentRepository\Core\Projection\ContentGraph\Node;
use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Application\AbstractComponentFactory;

#[Flow\Proxy(false)]
final class OptionFactory extends AbstractComponentFactory
{
    public static function forNode(Node $node): Option
    {
        return new Option(
            $node->nodeAggregateId->value,
            $node->getLabel()
        );
    }
}

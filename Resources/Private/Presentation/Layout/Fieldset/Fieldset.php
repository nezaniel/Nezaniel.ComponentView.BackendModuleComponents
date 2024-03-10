<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Layout\Fieldset;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\ComponentInterface;

#[Flow\Proxy(false)]
final readonly class Fieldset extends AbstractComponent
{
    public function __construct(
        private ComponentInterface|string $content,
        private int $offset = 0,
    ) {
    }

    public function render(): string
    {
        return '
        <fieldset class="neos-span5 neos-offset' . $this->offset . '">
            ' . $this->content . '
        </fieldset>';
    }
}

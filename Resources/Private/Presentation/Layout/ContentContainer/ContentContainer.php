<?php

/*
 * This file is part of the Nezaniel.Nortex package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Layout\ContentContainer;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\ComponentInterface;

#[Flow\Proxy(false)]
final readonly class ContentContainer extends AbstractComponent
{
    public function __construct(
        private ComponentInterface|string $content
    ) {
    }

    public function render(): string
    {
        return '
        <div class="neos-content neos-container-fluid">
            ' . $this->content . '
        </div>';
    }
}

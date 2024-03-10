<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Icon;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class Icon extends AbstractComponent
{
    public function __construct(
        private string $name
    ) {
    }

    public function render(): string
    {
        return '
        <i class="fas fa-' . $this->name . ' icon-white"></i>';
    }
}

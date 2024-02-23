<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class Label extends AbstractComponent
{
    public function __construct(
        private string $text,
    ) {
    }

    public function render(): string
    {
        return '<label class="neos-control-label">' . $this->text . '</label>';
    }
}

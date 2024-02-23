<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\Submit;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class Submit extends AbstractComponent
{
    public function __construct(
        private string $label,
    ) {
    }

    public function render(): string
    {
        return '<input class="neos-button neos-button-primary" type="submit" name="" value="' . $this->label . '">';
    }
}

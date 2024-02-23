<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\HiddenField;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class HiddenField extends AbstractComponent
{
    public function __construct(
        private string $name,
        private string $value
    ) {
    }

    public function render(): string
    {
        return '<input type="hidden" name="' . $this->name . '" value="' . $this->value . '" />';
    }
}

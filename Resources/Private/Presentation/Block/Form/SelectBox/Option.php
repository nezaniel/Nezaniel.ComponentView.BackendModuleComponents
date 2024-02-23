<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\SelectBox;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class Option extends AbstractComponent
{
    public function __construct(
        private string $value,
        private string $label,
        private bool $selected = false
    ) {
    }

    public function render(): string
    {
        return '<option value="' . $this->value . '"' . ($this->selected ? ' selected' : '') . '>'
                . $this->label .
            '</option>';
    }
}

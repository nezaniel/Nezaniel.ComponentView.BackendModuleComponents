<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\RadioGroup;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\CheckedStatement;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class RadioButton extends AbstractComponent
{
    public function __construct(
        private string $name,
        private string $value,
        private ?CheckedStatement $checked = null,
        private ?string $label = '',
    ) {
    }

    public function render(): string
    {
        return '<label class="neos-radio neos-inline">
            <input type="radio" name="' . $this->name . '" value="' . $this->value . '" ' . $this->checked . '><span></span>
            ' . $this->label . '
        </label>';
    }
}

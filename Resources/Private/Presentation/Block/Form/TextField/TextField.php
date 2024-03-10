<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\TextField;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\Label;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\Placeholder;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\RequiredStatement;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class TextField extends AbstractComponent
{
    public function __construct(
        private string $id,
        private string $name,
        private ?Placeholder $placeholder = null,
        private ?RequiredStatement $requiredStatement = null,
        private ?Label $label = null,
        private ?string $value = null
    ) {
    }

    public function render(): string
    {
        return '<div class="neos-control-group">
            ' . $this->label . '
				<div class="neos-controls">
                    <input type="text" id="' . $this->id . '" name="' . $this->name . '" class="neos-span12"'
                    . $this->placeholder
                    . $this->requiredStatement
                    . ($this->value ? ' value="' . $this->value . '"' : '')
                    . ' />
                </div>
            </div>';
    }
}

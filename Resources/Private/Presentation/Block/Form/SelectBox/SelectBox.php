<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\SelectBox;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\Nortex\Presentation\Block\Form\RequiredStatement;

#[Flow\Proxy(false)]
final readonly class SelectBox extends AbstractComponent
{
    public function __construct(
        private string $id,
        private string $name,
        private ?string $label,
        private ?RequiredStatement $requiredStatement,
        private Options|OptionGroups $options
    ) {
    }

    public function render(): string
    {
        return '<div class="neos-control-group">
            ' . ($this->label
                ? '<label for="' . $this->id . '" class="neos-control-label">' . $this->label . '</label>'
                : ''
            ) . '<div class="neos-controls">
                <select id="' . $this->id . '" name="' . $this->name . '" ' . $this->requiredStatement . ' class="neos-span12">'
                    . $this->options .
                '</select>
            </div>
        </div>';
    }
}

<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\SelectBox;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class OptionGroup extends AbstractComponent
{
    public function __construct(
        private string $label,
        private Options $options
    ) {
    }

    public function render(): string
    {
        return '<optgroup label="' . $this->label . '">' . $this->options . '</optgroup>';
    }
}

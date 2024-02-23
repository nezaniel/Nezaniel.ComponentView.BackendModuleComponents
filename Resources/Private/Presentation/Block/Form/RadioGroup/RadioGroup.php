<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\RadioGroup;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\Label;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class RadioGroup extends AbstractComponent
{
    public function __construct(
        private ?Label $label,
        private RadioButtons $radioButtons
    ) {
    }

    public function render(): string
    {
        return '<div class="neos-control-group">
            ' . $this->label . '
            <div class="neos-controls">
                ' . $this->radioButtons . '
            </div>
        </div>';
    }
}

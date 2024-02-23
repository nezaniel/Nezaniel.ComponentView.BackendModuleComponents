<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\TextArea;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\Label;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\Nortex\Presentation\Block\Form\Placeholder;
use Nezaniel\Nortex\Presentation\Block\Form\RequiredStatement;

#[Flow\Proxy(false)]
final readonly class TextArea extends AbstractComponent
{
    public function __construct(
        private string $id,
        private string $name,
        private ?Placeholder $placeholder,
        private ?RequiredStatement $requiredStatement,
        private ?Label $label
    ) {
    }

    public function render(): string
    {
        return $this->label . '<textarea id="' . $this->id . '" name="' . $this->name . '" rows="4" cols="50" class="textArea--regular"'
                . $this->placeholder . $this->requiredStatement . '></textarea>';
    }
}

<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\HiddenField\HiddenField;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\RadioGroup\RadioGroup;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\RichTextArea\RichTextArea;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\SelectBox\SelectBox;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\Submit\Submit;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\TextArea\TextArea;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\TextField\TextField;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Psr\Http\Message\UriInterface;

#[Flow\Proxy(false)]
final readonly class Form extends AbstractComponent
{
    /**
     * @var array<HiddenField|RadioGroup|RichTextArea|SelectBox|Submit|TextArea|TextField|string>
     */
    private array $elements;

    public function __construct(
        private string $name,
        private FormMethod $method,
        private UriInterface $action,
        HiddenField|RadioGroup|RichTextArea|SelectBox|Submit|TextArea|TextField|string ...$elements
    ) {
        $this->elements = $elements;
    }

    public function render(): string
    {
        return '<form name="' . $this->name . '" action="' . $this->action . '" method="' . $this->method->value . '">'
                . implode('', $this->elements)
            . '</form>';
    }
}

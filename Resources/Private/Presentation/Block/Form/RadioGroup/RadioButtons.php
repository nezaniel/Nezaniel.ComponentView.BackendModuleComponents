<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\RadioGroup;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class RadioButtons extends AbstractComponent
{
    /**
     * @var array<RadioButton>
     */
    public array $items;

    public function __construct(RadioButton ...$items)
    {
        $this->items = $items;
    }

    public function render(): string
    {
        return implode('', $this->items);
    }
}

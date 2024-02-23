<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\SelectBox;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class OptionGroups extends AbstractComponent
{
    /**
     * @var array<OptionGroup>
     */
    private array $optionGroups;

    public function __construct(OptionGroup ...$optionGroups)
    {
        $this->optionGroups = $optionGroups;
    }

    public function render(): string
    {
        return implode('', $this->optionGroups);
    }
}

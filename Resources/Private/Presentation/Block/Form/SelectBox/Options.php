<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\SelectBox;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class Options extends AbstractComponent
{
    /**
     * @var array<Option>
     */
    private array $options;

    public function __construct(Option ...$options)
    {
        $this->options = $options;
    }

    public function render(): string
    {
        return implode('', $this->options);
    }
}

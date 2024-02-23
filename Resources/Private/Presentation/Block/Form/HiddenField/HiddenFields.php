<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\HiddenField;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class HiddenFields extends AbstractComponent
{
    /**
     * @var array<int,HiddenField>
     */
    public array $fields;

    public function __construct(HiddenField ...$fields)
    {
        /** @var array<int,HiddenField> $fields */
        $this->fields = $fields;
    }

    public function render(): string
    {
        return implode('', $this->fields);
    }
}

<?php

/*
 * This file is part of the Nezaniel\ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\ComponentInterface;

#[Flow\Proxy(false)]
final readonly class TableHead extends AbstractComponent
{
    public function __construct(
        private TableCellAlignment $alignment = TableCellAlignment::VARIANT_REGULAR,
        private ComponentInterface|string $content = ''
    ) {
    }

    public function render(): string
    {
        return '<th class="'
            . match ($this->alignment) {
                TableCellAlignment::VARIANT_REGULAR => '',
                TableCellAlignment::VARIANT_CENTERED => 'neos-aCenter'
            }
            . '">' . $this->content . '</th>';
    }
}

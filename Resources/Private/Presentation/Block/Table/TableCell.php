<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\ComponentInterface;

#[Flow\Proxy(false)]
final readonly class TableCell extends AbstractComponent
{
    public function __construct(
        private TableCellAlignment $alignment = TableCellAlignment::VARIANT_REGULAR,
        private ?TableCellPriority $priority = null,
        private ComponentInterface|string $content = '',
    ) {
    }

    public function render(): string
    {
        return '<td class="'
            . match ($this->alignment) {
                TableCellAlignment::VARIANT_REGULAR => '',
                TableCellAlignment::VARIANT_CENTERED => 'neos-aCenter'
            }
            . match ($this->priority) {
                null => '',
                TableCellPriority::PRIORITY_ONE => ' neos-priority1',
                TableCellPriority::PRIORITY_TWO => ' neos-priority2',
                TableCellPriority::PRIORITY_THREE => ' neos-priority3',
            } . '">'
                . $this->content
            . '</td>';
    }
}

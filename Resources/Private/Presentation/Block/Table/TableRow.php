<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class TableRow extends AbstractComponent
{
    public function __construct(
        private TableCells|TableHeadSet $content,
        private ?string $title = null,
        private bool $toggleTooltip = false
    ) {
    }

    public function render(): string
    {
        return '<tr'
            . ($this->title ? ' title="' . $this->title . '"' : '')
            . ($this->toggleTooltip ? ' data-neos-toggle="tooltip"' : '')
            . '>'
            . $this->content
        . '</tr>';
    }
}

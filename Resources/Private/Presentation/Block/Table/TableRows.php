<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\NodeMetadataWrapper;

#[Flow\Proxy(false)]
final readonly class TableRows extends AbstractComponent
{
    /**
     * @var array<int|string,TableRow|NodeMetadataWrapper>
     */
    private array $rows;

    public function __construct(TableRow|NodeMetadataWrapper ...$tableRows)
    {
        $this->rows = $tableRows;
    }

    public function render(): string
    {
        return implode('', $this->rows);
    }
}

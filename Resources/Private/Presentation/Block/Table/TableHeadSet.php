<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class TableHeadSet extends AbstractComponent implements \Countable
{
    /**
     * @var array<int|string,TableHead>
     */
    private array $items;

    public function __construct(TableHead ...$items)
    {
        $this->items = $items;
    }

    public function render(): string
    {
        return implode('', $this->items);
    }

    public function count(): int
    {
        return count($this->items);
    }
}

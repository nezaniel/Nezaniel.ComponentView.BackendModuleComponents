<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\CacheSegment;

#[Flow\Proxy(false)]
final readonly class Table extends AbstractComponent
{
    public function __construct(
        private TableRow $headRow,
        private TableRows $bodyRows,
    ) {
    }

    public function render(): string
    {
        return '
            <table class="neos-table">
                <thead>
                    ' . $this->headRow . '
                </thead>
                <tbody>
                    ' . $this->bodyRows . '
                </tbody>
            </div>
        </div>';
    }
}

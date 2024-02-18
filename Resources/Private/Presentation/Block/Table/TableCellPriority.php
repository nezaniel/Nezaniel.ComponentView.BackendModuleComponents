<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

enum TableCellPriority: string
{
    case PRIORITY_ONE = 'neos-priority1';
    case PRIORITY_TWO = 'neos-priority2';
    case PRIORITY_THREE = 'neos-priority3';
}

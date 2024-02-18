<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Table;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Application\AbstractComponentFactory;
use Nezaniel\ComponentView\Domain\CacheSegment;

#[Flow\Proxy(false)]
final class TableFactory extends AbstractComponentFactory
{
    public static function create(
        TableHeadSet $tableHead,
        TableRows|CacheSegment $bodyRows
    ): Table {
        $numberOfSegments = max(0, count($tableHead) - 2);

        return new Table(
            new TableRow($tableHead),
            $bodyRows,
            self::createUpperBorderSegments($numberOfSegments),
            self::createLowerBorderSegments($numberOfSegments)
        );
    }

    private static function createUpperBorderSegments(int $number): TableCells
    {
        return new TableCells(
            ...($number > 0
                ? array_map(
                    fn (int $i): TableCell => new TableCell(
                        TableCellAlignment::VARIANT_BORDER_TOP,
                        ''
                    ),
                    range(1, $number)
                )
                : []
            )
        );
    }

    private static function createLowerBorderSegments(int $number): TableCells
    {
        return new TableCells(
            ...($number > 0
                ? array_map(
                    fn (int $i): TableCell => new TableCell(
                        TableCellAlignment::VARIANT_BORDER_BOTTOM,
                        ''
                    ),
                    range(1, $number)
                )
                : []
            )
        );
    }
}

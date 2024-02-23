<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Link;

enum LinkVariant: string
{
    case VARIANT_DEFAULT = 'default';
    case VARIANT_BUTTON = 'button';
    case VARIANT_PRIMARY_BUTTON = 'primaryButton';

    public function getClasses(): string
    {
        return match ($this) {
            self::VARIANT_DEFAULT => '',
            self::VARIANT_BUTTON => 'neos-button',
            self::VARIANT_PRIMARY_BUTTON => 'neos-button neos-button-primary',
        };
    }
}

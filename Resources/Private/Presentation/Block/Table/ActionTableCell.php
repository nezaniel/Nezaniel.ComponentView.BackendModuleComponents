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
final readonly class ActionTableCell extends AbstractComponent
{
    public function __construct(
        private ComponentInterface|string $content = '',
    ) {
    }

    public function render(): string
    {
        return '
            <td class="neos-action">
                <div class="neos-pull-right">'
                    . $this->content
                . '</div>
            </td>';
    }
}

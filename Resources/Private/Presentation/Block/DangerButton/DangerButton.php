<?php

/*
 * This file is part of the Nezaniel.Nortex package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\DangerButton;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\ComponentInterface;

#[Flow\Proxy(false)]
final readonly class DangerButton extends AbstractComponent
{
    public function __construct(
        private string $targetModal,
        private ComponentInterface|string $content,
        private ?string $title = null,
    ) {
    }

    public function render(): string
    {
        return '
        <button class="neos-button neos-button-danger" title="' . $this->title . '" data-toggle="modal" href="#' . $this->targetModal . '" data-neos-toggle="tooltip">
            ' . $this->content . '
        </button>';
    }
}

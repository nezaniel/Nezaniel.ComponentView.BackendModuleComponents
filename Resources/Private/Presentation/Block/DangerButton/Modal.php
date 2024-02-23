<?php

/*
 * This file is part of the Nezaniel.Nortex package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\DangerButton;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Psr\Http\Message\UriInterface;

#[Flow\Proxy(false)]
final readonly class Modal extends AbstractComponent
{
    public function __construct(
        private string $id,
        private string $header,
        private string $subheader,
        private UriInterface $actionUri,
        private string $csrfProtectionToken,
        private string $buttonText,
        private ?string $buttonTitle = null,
    ) {
    }

    public function render(): string
    {
        return '
        <div class="neos-hide" id="' . $this->id . '">
            <div class="neos-modal-centered">
                <div class="neos-modal-content">
                    <div class="neos-modal-header">
                        <button type="button" class="neos-close neos-button" data-dismiss="modal"></button>
                        <div class="neos-header">
                            ' . $this->header . '
                        </div>
                        <div>
                            <div class="neos-subheader">
                                <p>
                                    ' . $this->subheader . '
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="neos-modal-footer">
                        <a href="#" class="neos-button" data-dismiss="modal">Cancel</a>
                        <form class="neos-inline" action="' . $this->actionUri . '" method="post">
                            <input type="hidden" name="__csrfToken" value="' . $this->csrfProtectionToken . '">
                            <button type="submit" class="neos-button neos-button-danger" title="' . $this->buttonTitle . '">
                                ' . $this->buttonText . '
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="neos-modal-backdrop neos-in"></div>
        </div>';
    }
}

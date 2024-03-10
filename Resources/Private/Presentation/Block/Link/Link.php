<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Link;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;
use Nezaniel\ComponentView\Domain\ComponentInterface;
use Psr\Http\Message\UriInterface;

#[Flow\Proxy(false)]
final readonly class Link extends AbstractComponent
{
    private LinkTarget $linkTarget;

    public function __construct(
        private UriInterface $uri,
        private string|ComponentInterface $content,
        private LinkVariant $variant = LinkVariant::VARIANT_DEFAULT,
        private ?string $title = null,
        ?LinkTarget $linkTarget = null
    ) {
        $this->linkTarget = $linkTarget ?: LinkTarget::forUri($uri);
    }

    public function render(): string
    {
        return '
            <a href="' . $this->uri . '" target="' . $this->linkTarget->value . '"' . $this->linkTarget->getRel()
                . '" class="' . $this->variant->getClasses()
                . '" title="' . $this->title . '"'
            . '">'
                . $this->content
            . '</a>';
    }
}

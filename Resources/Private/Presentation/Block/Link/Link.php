<?php

/*
 * This file is part of the Nezaniel.Nortex package.
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
        ?LinkTarget $linkTarget = null
    ) {
        $this->linkTarget = $linkTarget ?: LinkTarget::forUri($uri);
    }

    public function render(): string
    {
        return '
            <a href="' . $this->uri . '" target="' . $this->linkTarget->value . '"' . $this->linkTarget->getRel() . '">'
                . $this->content
            . '</a>';
    }
}
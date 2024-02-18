<?php

/*
 * This file is part of the Nezaniel.Nortex package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Link;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class Links extends AbstractComponent
{
    /**
     * @var array<Link>
     */
    private array $links;

    public function __construct(Link ...$links)
    {
        $this->links = $links;
    }

    public function render(): string
    {
        return implode('', $this->links);
    }
}

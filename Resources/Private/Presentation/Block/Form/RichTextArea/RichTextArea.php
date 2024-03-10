<?php

/*
 * This file is part of the Nezaniel.ComponentView.BackendModuleComponents package.
 */

declare(strict_types=1);

namespace Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\RichTextArea;

use Neos\Flow\Annotations as Flow;
use Nezaniel\ComponentView\BackendModuleComponents\Presentation\Block\Form\Label;
use Nezaniel\ComponentView\Domain\AbstractComponent;

#[Flow\Proxy(false)]
final readonly class RichTextArea extends AbstractComponent
{
    public function __construct(
        private string $id,
        private string $name,
        private ?Label $label,
        private ?string $placeholder
    ) {
    }

    public function render(): string
    {
        return $this->label . '<textarea id="' . $this->id . '" name="' . $this->name . '">
            </textarea>
            <script type="application/javascript">
                ClassicEditor
                    .create(document.querySelector("#' . $this->id . '"), {
                        "toolbar": ["bulletedList"],
                        "placeholder": "' . $this->placeholder . '"
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>';
    }
}

<?php

namespace Tsg\ProgressBar;

use Laravel\Nova\Fields\Field;

class ProgressBar extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'progress-bar';

    /**
     * Write some text to be displayed on the bar.
     *
     * @param  string  $text
     * @return $this
     */
    public function text(string $text)
    {
        return $this->withMeta([
            'text' => $text
        ]);
    }
}

<?php

namespace Ngiraud\FormHeader;

use Laravel\Nova\Fields\Field;

class FormHeader extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'form-header';

    public function __construct(string $name, ?string $attribute = null, ?mixed $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        
        $this->onlyOnForms();
    }


}

<?php

namespace app\src\form;

use app\src\Model;

class Field
{
    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';

    public Model $model;
    public string $attribute;
    public string $inputType;

    /**
     * Field constructor.
     * @param Model $model
     * @param string $attribute
     */
    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->inputType = self::TYPE_TEXT;
    }

    public function __toString(): string
    {
        return sprintf('
                <label for="%s" class="block text-sm font-medium text-gray-700">%s</label>
                <input type="%s" name="%s" id="%s" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        ',
            $this->attribute,
            $this->attribute,
            $this->inputType,
            $this->attribute,
            $this->attribute
        );
    }

    public function passwordField()
    {
        $this->inputType = self::TYPE_PASSWORD;
        return $this;
    }

}
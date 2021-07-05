<?php

namespace app\models;

use app\src\DbModel;

class Project extends DbModel
{
    public string $name = '';
    public string $priority = '';
    public string $department = '';

    public  function  tableName(): string
    {
        return 'projects';
    }

    public function save(): bool
    {
        return parent::saveToDB();
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'priority' => [self::RULE_REQUIRED],
        ];
    }

    public function attributes(): array
    {
        return ['name', 'priority', 'department'];
    }
}
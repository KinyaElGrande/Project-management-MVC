<?php

namespace app\models;

use app\src\Model;

class ProjectModel extends Model
{
    public string $name;
    public string $priority;
    public string $department;

    public function register()
    {
        echo "Creating new Project";
    }

    public function rules()
    {
        return [
            'name' => [self::RULE_REQUIRED],
            'priority' => [self::RULE_REQUIRED],
        ];
    }
}
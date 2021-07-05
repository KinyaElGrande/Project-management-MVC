<?php

namespace app\controllers;

use app\models\Project;
use app\src\Controller;
use app\src\Request;

class ProjectController extends Controller
{
    public function projectCreate(Request $request): array|string
    {
        $projectModel = new Project();

        if ($request->isPost()) {
            ray($request->getBody());
            $projectModel->loadData($request->getBody());

            if ($projectModel->validate() && $projectModel->save()) {
                return 'Success';
            }
            return $this->render('project/create', [
                'model' => $projectModel
            ]);
        }
        return $this->render('project/create', [
            'model' => $projectModel
        ]);
    }
}
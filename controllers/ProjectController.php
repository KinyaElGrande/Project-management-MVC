<?php

namespace app\controllers;

use app\models\ProjectModel;
use app\src\Controller;
use app\src\Request;

class ProjectController extends Controller
{
    public function projectCreate(Request $request)
    {
        $projectModel = new ProjectModel();

        if ($request->isPost()) {
            $projectModel->loadData($request->getBody());

            if ($projectModel->validate() && $projectModel->register()) {
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
<?php

namespace frontend\controllers;

use Yii;
use common\models\Literature;
use common\models\LiteratureSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
/**
 * LiteratureController implements the CRUD actions for Literature model.
 */
class LiteratureController extends BaseController
{

    /**
     * Lists all Literature models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = Literature::find()->orderBy(['id'=>SORT_DESC])->asArray()->all();
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Literature model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $dataProviderAll = Literature::find()->orderBy(['id'=>SORT_DESC])->asArray()->all();
        return $this->render('view', [
            'dataProvider' => $this->findModel($id),
            'dataProviderAll' =>$dataProviderAll
        ]);
    }

    /**
     * Creates a new Literature model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Literature();
        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->file) {
                $model->file->saveAs('../../uploads/imgs/'.$model->file->name);
                $model->img = $model->file->name;
            }
            $model->created_at = time();
            $model->user_create = Yii::$app->user->id;
            if ($model->save(false)) {
                Yii::$app->session->addFlash('success', 'Thêm thành công');
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->session->addFlash('danger', 'Thêm thất bại');
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Literature model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if ($model->file) {
                $model->file->saveAs('../../uploads/imgs/'.$model->file->name);
                $model->img = $model->file->name;
            }
            $model->updated_at = time();
            if ($model->save(false)) {
                Yii::$app->session->addFlash('success', 'Cập nhật thành công');
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                Yii::$app->session->addFlash('danger', 'Cập nhật thất bại');
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Literature model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Literature model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Literature the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Literature::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

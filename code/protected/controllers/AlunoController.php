<?php

class AlunoController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $caracteristics;

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Aluno;
        $pessoa = new Pessoa;
        
        $caracteristica = new Caracteristica('search');
        $caracteristica->unsetAttributes();  // clear any default values
        if (isset($_GET['Caracteristica']))
            $caracteristica->attributes = $_GET['Caracteristica'];

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Aluno'], $_POST['Pessoa'])) {
            $model->attributes = $_POST['Aluno'];
            $pessoa->attributes = $_POST['Pessoa'];

            $valid = $model->validate();
            $valid = $pessoa->validate() && $valid;
            if ($valid) {
                $pessoa->save(false);
                $model->responsavel_id = 1;
                $model->atendente_id = 3;
                $model->pessoa_id = $pessoa->id;

                $model->save(false);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }


        $this->render('create', array(
            'model' => $model,
            'pessoa' => $pessoa,
            'caracteristica' => $caracteristica
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $pessoa = $model->pessoa;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        if (isset($_POST['Aluno'], $_POST['Pessoa'])) {
            $model->attributes = $_POST['Aluno'];
            $pessoa->attributes = $_POST['Pessoa'];

            $valid = $model->validate();
            $valid = $pessoa->validate() && $valid;
            if ($valid) {
                $pessoa->save(false);
                $model->responsavel_id = 1;
                $model->atendente_id = 3;
                $model->pessoa_id = $pessoa->id;

                $model->save(false);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }


        $this->render('update', array(
            'model' => $model,
            'pessoa' => $pessoa,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Aluno');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Aluno('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Aluno']))
            $model->attributes = $_GET['Aluno'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Aluno the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Aluno::model()->findByPk($id);
        $model->pessoa = Pessoa::model()->findByPk($model->pessoa_id);
        $model->atendente = Funcionario::model()->findByPk($model->atendente_id);
        if ($model->responsavel_id != null) {
            $model->responsavel = Responsavel::model()->findByPk($model->responsavel_id);
        }
        if ($model === null)
            throw new CHttpException(404, 'Página não encontrada.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Aluno $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'aluno-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function view(array $cols, array $tabledata) {
        //$tabledata will be an array of CActiveRecord objects. $cols is an array of strings from getColumnNames().
        echo "<table><thead><tr>";
        foreach ($cols as $col) {
            echo "<th>$col</th>";
        }
        echo "</tr></thead><tbody>";
        foreach ($tabledata as $data) {
            echo "<tr>";
            foreach ($cols as $col) {
                echo "<td>$data->$col</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    }

}

<?php

class EmprestimoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new Emprestimo;

		$users = User::model()->findAll();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Emprestimo']))
		{
			$model->attributes=$_POST['Emprestimo'];
			if($model->save()){

				$valorcet = (float) $_POST['Emprestimo']['valorcet'];

				$parcelas = (float) $_POST['Emprestimo']['parcelas'];

				$valorParcela = $valorcet/$parcelas;

				$data = array();

				for($i=1; $i <= $_POST['Emprestimo']['parcelas']; $i++){
					$data[$i] = date('d/m/Y', strtotime('+'.$i.' month'));
				}
						
				for($i=0; $i < $_POST['Emprestimo']['parcelas']; $i++){
					$parcela = new Parcelas;
					$parcela->valor = $valorParcela;
					$parcela->vencimento = $data[$i+1];
					$parcela->id_emprestimo = $model->id;
					if(!$parcela->save()) var_dump($parcela->errors);
				}

				$this->redirect(array('view','id'=>$model->id));			
			}
		}

		$this->render('create',array(
			'model'=>$model,
			'users'=>$users,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$users = User::model()->findAll();

		$model=$this->loadModel($id);

		if(isset($_POST['Emprestimo']))
		{
			$model->attributes=$_POST['Emprestimo'];
			if($model->save()){

				$valorcet = (float) $_POST['Emprestimo']['valorcet'];

				$_parcelas = (float) $_POST['Emprestimo']['parcelas'];

				$valorParcela = $valorcet/$_parcelas;

				$data = array();

				for($i=1; $i <= $_POST['Emprestimo']['parcelas']; $i++){
					$data[$i] = date('d/m/Y', strtotime('+'.$i.' month'));
				}

				Parcelas::model()->deleteAll('`id_emprestimo`=:id_emprestimo', array(':id_emprestimo' => $id));
									
				for($i=0; $i < $_POST['Emprestimo']['parcelas']; $i++){
					$parcela = new Parcelas;
					$parcela->valor = $valorParcela;
					$parcela->vencimento = $data[$i+1];
					$parcela->id_emprestimo = $model->id;
					if(!$parcela->save()) var_dump($parcela->errors);
				}
				$this->redirect(array('view','id'=>$model->id));
			}	
		}

		$this->render('update',array(
			'model'=>$model,
			'users'=>$users,
		));
	}	

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->fk_user->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Emprestimo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Emprestimo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Emprestimo']))
			$model->attributes=$_GET['Emprestimo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Emprestimo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Emprestimo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Emprestimo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='emprestimo-form'){
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public static function formatPrice($vlprice){
		if(!$vlprice > 0) $vlprice = 0;
		return "R$ " .number_format($vlprice, 2, "," , ".");
		}	
}
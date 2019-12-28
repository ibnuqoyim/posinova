<?php

class OrdersController extends Controller
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
				'actions'=>array('index','view','deleteOrders'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','deleteOrders','ordersDetail'),
				'users'=>array('@'),
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

	public function actionDeleteOrders($id)
	{
		$model = OrdersDetail::model()->findByPk($id);

		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
		$this->redirect(array('ordersDetail','id_orders'=>$model->id_orders));
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		
		$model=new Orders;
		$model->nama_petugas=Yii::app()->user->name;
		$model->tgl_order= date("Y-m-d",time());
		$model->save();
		
		
		$this->redirect(array('ordersDetail','id_orders'=>$model->id_orders));
	}

	public function actionOrdersDetail($id_orders)
	{
		$modelDetail = new OrdersDetail;
		$detail=OrdersDetail::model()->findAllByAttributes(array('id_orders'=>$id_orders),array('order'=>'id DESC'));
		$model=Orders::model()->findByPk($id_orders);
		$produk = [];
		if(isset($_POST['OrdersDetail']))
		{
			$modelDetail->attributes=$_POST['OrdersDetail'];
			$modelDetail->jumlah = 1;
			$modelDetail->save();
			
			$detail=OrdersDetail::model()->findAllByAttributes(array('id_orders'=>$modelDetail->id_orders),array('order'=>'id DESC'));
			$model=Orders::model()->findByPk($modelDetail->id_orders);
			$produk=OrdersDetail::model()->findAllByAttributes(array('product_id'=>$modelDetail->product_id,'id_orders'=>$modelDetail->id_orders));
			
			if($modelDetail->save())
				//$this->redirect(array('ordersDetail','id_orders'=>$modelDetail->id_orders));
				$this->render('createDetail',array(
				'modelDetail'=>$modelDetail,  'model'=>$model, 'detail'=>$detail, 'produk'=>$produk,
			));	
		}else{

		$this->render('createDetail',array(
			'modelDetail'=>$modelDetail,  'model'=>$model,'detail'=>$detail, 'produk'=>$produk,

		));}
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Orders']))
		{
			$model->attributes=$_POST['Orders'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_orders));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model = '';
		$dataProvider=new CActiveDataProvider('Orders');
		$this->render('index',array(
			'dataProvider'=>$dataProvider, 'model'=>$model,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Orders('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Orders']))
			$model->attributes=$_GET['Orders'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Orders the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Orders::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Orders $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='orders-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}

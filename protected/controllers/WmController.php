<?php

class WmController extends Controller
{
	public $layout='//layouts/wmcolumn';
	
	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionShopList()
	{
		$dataProvider=new CActiveDataProvider('TakeawayShops',array(
				'pagination'=>array(
						'pageSize'=>48,
					),
			));
		$this->render('shoplist',array(
			'dataProvider'=>$dataProvider,
		));
	}
	public function actionShop()
	{
		$this->render('shop');
	}


}
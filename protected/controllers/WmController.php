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
		$this->render('shoplist');
	}
	public function actionShop()
	{
		$this->render('shop');
	}


}
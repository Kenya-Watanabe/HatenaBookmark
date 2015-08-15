<?php

App::uses('AppController', 'Controller');

class PagesController extends AppController {

	public $uses = array(
		'Category',
		'Comment',
		'Topic',
		'User',
	);

	public function index() {
		$feed = file_get_contents("http://b.hatena.ne.jp/entrylist?mode=rss&threshold=500");

		$subject =array('social'=>'世の中','economics'=>'政治と経済','life'=>'暮らし','knowledge'=>'学び','it'=>'テクノロジー','fun'=>'おもしろ','entertainment'=>'エンタメ','game'=>'アニメとゲーム');
		$booknumber = array('50'=>'50以上','100'=>'100以上','300'=>'300以上','500'=>'500以上','1000'=>'1000以上');
				# code...
			if($this->request->is('post')){
					foreach ($subject as $key => $value) {
						# code..
						if(isset($this->request->data[$key])){
							$feed = file_get_contents("http://b.hatena.ne.jp/entrylist/".$key."?mode=rss&threshold=500");
						}
					}
			}


		// var_dump($get);
		// $feed = simplexml_load_file($get);
		// var_dump($feed);
		// debug($topics);
		$this->set('feed',$feed);
		$this->set('subject',$subject);
		$this->set('booknumber',$booknumber);
	}

	public function detail() {

	}

}

<div class="row container-side">
	<div class=" col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1">
		<div class="row">
			<div class="form-group col-xs-2">
			<?php echo $this ->Form->input('category',array('type'=>'select','class'=>'form-cotroll','options'=>$subject));?>
			<?php echo $this ->Form->input('bookmark_number',array('type'=>'select','class'=>'form-cotroll','options'=>$booknumber));?>
			<?php echo $this->Form->submit('submit'); ?>
			</div>
		</div>
			<div class="row">
				<?php
				echo $this->Form->create();
				?>


				<?php foreach($subject as $key=>$value): ?>
				<div class="form-group col-xs-2">
	           <?php echo $this->Form->submit($value,array('name'=>$key)); ?>
	            </div>
				<?php endforeach; ?>
			</div>
			<div class ="row">
			<?php foreach($booknumber as $key=>$value): ?>
			<div class="form-group col-xs-2">
		   <?php echo $this->Form->submit($value,array('name'=>$key)); ?>
			</div>
		<?php endforeach; ?>
			</div>

			<article class="row">
				<div class="col-sm-12">
					<?php
						//取得するフィードURLを指定
						$obj = simplexml_load_string($feed);
						//個々のエントリーを読み込んでいく
						foreach($obj->item as $item){

							$url = (string)$item->link;	 //URL
							$date = $item->children("dc",true)->date;	//エントリーの日付
							$title = (string)$item->title;	//タイトル
							$category = $item->children("dc",true)->subject;	//カテゴリ
							$count = $item->children("hatena",true)->bookmarkcount;	//ブクマ数

							//出力
							echo "<p>[{$category}] -({$date}) {$count}users<br></p>";
							echo "<a href=$url>$title</a>";

						}
					?>
				</div>
			</article>
	</div>

	<!-- <?php echo $this->element('aside'); ?> -->
	<?php echo $this->element('modal'); ?>

</div>

<div class="row container-side">
	<div class=" col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
		<div class="alert alert-success">
			<?php echo $this->Session->flash(); ?>

		</div>
		<?php foreach ($topics as $topic):?>
			<article class="row">
				<!-- <?php var_dump($topic);?> -->

				<div class="col-sm-3">
					<h3><?php echo $topic['Topic']['created'];?></h3>
				</div>
				<div class="col-sm-9">
					<h2><?php echo $topic['Topic']['title'];?></h2>
					<button type="button" class="btn btn-dafault">
						<?php echo $this->Form->postLink(
						'Delete',array('controller'=>'topics','action'=>'delete',$topic['Topic']['id'])
					); ?>
					</button>
					<p><?php echo $topic['Topic']['body'];?></p>
					<p><a href="/detail/1">Continue Reading...</a></p>
					<span class="fa fa-tags"></span>
					<a href="">夏目漱石</a>
					<a href="">小説</a>
					<a href="">明治時代</a>
				</div>
			</article>
		<?php endforeach;?>
	</div>
	<?php echo $this->element('aside'); ?>
	<?php echo $this->element('modal'); ?>

</div>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
<div class="col-md-12" id="body">
	<!-- <p>list cate: <?php echo $cate?> -- <?php echo $len?> </p> -->
	<!-- <p><a href="design">design list</a></p>
	<p><a href="photo">photos list</a></p>
	<p><a href="article">article list</a></p> -->
	<div class="inner">
		<!-- 照片 -->
		<?php if($cate=='photo'):?>
		<?php foreach($query as $item):?>
			<div class="col-md-3 list-item">
				<a href="/<?php echo $cate.'/detail/'.$item['id']; ?>" class="thumbnail"><img src="/images/300/<?php echo $item['title_img']?>-300x300.jpg" alt="" /></a>
					<p class="list-inner"><?php echo $item['title']; ?></p>
			</div>
		<?php endforeach;?>
		<!-- 设计图 -->
		<?php elseif($cate=='design'): ?>
			<?php $i=1; ?>
		<?php foreach($query as $item): ?>
			<div class="col-md-12 design-item">
				<?php if($i%2==0): ?>
				<div class="col-md-3 design_img">
					<!-- <a href="#" class="thumbnail"><img src="" alt="" /></a> -->
					<!-- <img src="" alt="" /> -->
					<!-- <?php echo $item['title_img']; ?> -->
					<img src="/images/300/CHPA91091-300x300.png" alt="" />
				</div>
				<div class="col-md-9 design_brief">
					<p class="brief_title"><a href="/<?php echo $cate ?>/detail/<?php echo $item['id'] ?>"><?php echo $item['title']; ?></a></p>
					<p class="brief_content"><?php echo $item['brief']; ?></p>
				</div>
			<?php else: ?>
				<div class="col-md-9 design_brief">
					<p class="brief_title"><a href="/<?php echo $cate ?>/detail/<?php echo $item['id'] ?>"><?php echo $item['title']; ?></a></p>
					<p class="brief_content"><?php echo $item['brief']; ?></p>
				</div>
				<div class="col-md-3 design_img">
					<!-- <?php echo $item['title_img']; ?> -->
					<img src="/images/300/CHPA91091-300x300.png" alt="" />
				</div>
			<?php endif; ?>
			</div>
			<?php $i++; ?>
		<?php endforeach; ?>
		<?php endif; ?>
	</div>
	<?php echo $this->pagination->create_links(); ?>
</div>
</div>

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
		<?php foreach($query as $item):?>
			<div class="col-md-3 list-item">
				<a href="/xg/<?php echo $cate.'/detail/'.$item['id']; ?>" class="thumbnail"><img src="/xg/images/300/<?=$item['title_img']?>-300x300.jpg" alt="" /></a>
				<!-- <div class="list-inner"> -->
					<p class="list-inner"><?php echo $item['title']; ?></p>
				<!-- </div> -->
			</div>
		<?php endforeach;?>
	</div>
	<!-- <p>
		<?php if ($next!=1): ?>
			<a href="/xg/<?php echo $cate.'/next/'.($next-2) ?>">previous</a>
		<?php endif; ?>
		<a href="/xg/<?php echo $cate.'/next/'.$next ?>">next</a>
	</p> -->
	<!-- <div id="list"></div> -->
	<!-- <div class="col-md-12 navi"> -->
	<?php echo $this->pagination->create_links(); ?>
	<!-- </div> -->
	<!-- <p><a href="/xg/<?php echo $cate ?>">back</a></p> -->
</div>
</div>

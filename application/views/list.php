<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
<div class="col-md-12" id="body">
	<p>list cate: <?php echo $cate?> -- <?php echo $len?> </p>
	<!-- <p><a href="design">design list</a></p>
	<p><a href="photo">photos list</a></p>
	<p><a href="article">article list</a></p> -->
	<?php foreach($query as $item):?>
		<p><a href="/xg/<?php echo $cate.'/detail/'.$item['id']; ?>"><?php echo $item['title']; ?></a></p>
	<?php endforeach;?>
	<!-- <p>
		<?php if ($next!=1): ?>
			<a href="/xg/<?php echo $cate.'/next/'.($next-2) ?>">previous</a>
		<?php endif; ?>
		<a href="/xg/<?php echo $cate.'/next/'.$next ?>">next</a>
	</p> -->
	<div id="list"></div>
	<p>
		<?php echo $this->pagination->create_links(); ?>
	</p>
	<p><a href="/xg/<?php echo $cate ?>">back</a></p>
</div>
</div>

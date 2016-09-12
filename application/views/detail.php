<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-md-12" id="body">
		<div class="inner">
			<?php foreach($query as $item):?>
				<div class="col-md-4 list-item">
					<a href="/images/300/<?php echo $item['content']?>-300x300.jpg" class="thumbnail"><img src="/images/300/<?php echo $item['content']?>-300x300.jpg" alt="#" /></a>
				</div>
				<!-- <p><a href=""><?php echo $item['content']; ?></a></p> -->
				<!-- <img src="/images/300/<?php echo $item['content'] ?>-300x300.jpg" alt="" /> -->
			<?php endforeach;?>
		</div>
		<!-- <p>list here: <?php echo $title?></p> -->
		<!-- <p><a href="design">design list</a></p>
		<p><a href="photo">photos list</a></p>
		<p><a href="article">article list</a></p> -->

		<!-- <p><a href="/<?php echo $cate?>">back</a></p> -->
	</div>
</div>

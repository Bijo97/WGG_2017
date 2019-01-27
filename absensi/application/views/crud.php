<div class="span10 offset1">
	<div id="content" class="span11">
		<div class="post-single" id="post">
			<div class="content-outer">
				<div class="content-inner">
					<article>
						<div class="article-header">
							<h1 class="title"><?php echo $pagetitle; ?></h1>
							<div class="separator"></div>
						</div>
						<div class="article-content">
							
							<?php foreach($css_files as $file): ?>
								<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
							<?php endforeach; ?>
							<?php foreach($js_files as $file): ?>
								<script src="<?php echo $file; ?>"></script>
							<?php endforeach; ?>
							<?php echo $output; ?>
							
						</div>
					</article>
				</div>
			</div>
		</div>
	</div>
</div>


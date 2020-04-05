<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; $this->need('header.php'); ?>

<div class="content-container">
<div class="post-info">
    <div class="post-title"><?php $this->title() ?></div>
    <div class="post-date">
	</div>
</div>
<div> <?php $this->content(); ?> </div>
</div>

<?php $this->need('footer.php'); ?>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; $this->need('header.php'); ?>

<div class="content-container">
    <div class="post-info">
        <div class="post-title"><?php $this->title() ?></div>
        <div class="post-date">
			<i class="fa fa-calendar"></i>
			<time class="date"><?php $this->date('Y-m-d'); ?></time>
		</div>
    </div>
    <div>
        <?php $this->content(); ?>
        <h2>其它</h2>
        <p>
            文章开源在 <a href="https://github.com/EthsonLiu/blog-articles">Github - blog-articles</a>，点击 Watch 即可订阅本博客。
            若文章有错误，请在 <a href="https://github.com/EthsonLiu/blog-articles/issues">Issues</a> 中提出，我会及时回复，谢谢。
        </p>
        <p>
            如果您觉得文章不错，或者在生活和工作中帮助到了您，不妨 Buy Me A Coffee，谢谢。
        </p>
        <p>
            <img src="https://resource.ethsonliu.com/image/reward.jpg">
        </p>
        <p>（文章完）</p>
    </div>
    <div class="post-declaration">
        <div>文章作者：刘毅 (Ethson Liu)</div>
        <div>发布日期：<?php $this->date('Y-m-d'); ?></div>
        <div>原文链接：<a href="<?php $this->permalink() ?>"><?php $this->permalink() ?></a></div>
        <div>版权声明：文章版权归本人所有，欢迎转载，但必须保留此段声明，且在文章页面明显位置给出原文链接，否则保留追究法律责任的权利。</div>
    </div>
</div>

<?php $this->need('footer.php'); ?>

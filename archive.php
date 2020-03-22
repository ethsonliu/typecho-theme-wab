<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php 

/**
 * Archives
 *
 * @package custom
 */

$this->need('header.php'); ?>

<div class="content-container">

    <div class="archive-overview">
        <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
        <p>文章总数：<?php $stat->publishedPostsNum() ?> 篇</p>
    </div>
    <?php
    $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
    $year = 0; $i = 0; $j = 0;
    $output = '<div class="post-list">';

    while ($archives->next()):
        $year_tmp = date('Y', $archives->created);
        $y        = $year;

        if ($year != $year_tmp && $year > 0)
            $output .= '</ul>';

        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<h3>'. $year .' 年</h3><ul>';
        }

        $output .= '<li class="item">';
        $output .= '<time class="date">' . date('m-d', $archives->created) . '</time>';
        $output .= '<a style="margin-left: 4rem" href="' . $archives->permalink . '">' . $archives->title . '</a>';
        $output .= '</li>';
    endwhile;

    $output .= '</ul></div>';

    echo $output;
    ?>
    </div>

</div> <!-- end .content-container -->

<?php $this->need('footer.php'); ?>

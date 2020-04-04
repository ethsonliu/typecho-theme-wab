<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php 

/**
 * 归档页面
 *
 * @package custom
 */

$this->need('header.php'); ?>

<div class="content-container" style="flex-direction:row;justify-content:space-between;margin-top:1rem;margin-left:24%;margin-right:24%;">

    <div class="archive">
    <div class="archive-title">
        <?php if ($this->is('page')): ?>
        <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
        <p>文章总数：<?php $stat->publishedPostsNum() ?> 篇</p>
        <?php elseif ($this->is('category')): ?> <!-- 分类页面 -->
        <p>
        <?php
        $this->archiveTitle(array(
            'category'  =>  _t('分类：%s'),
            'search'    =>  _t('搜索：%s'),
            'tag'       =>  _t('标签：%s'),
            'author'    =>  _t('作者：%s')
            ), '', '');
        ?>
        (共 <?php echo $this->getTotal() ?> 篇文章)</p>
        <?php endif; ?>

    </div> <!-- end .archive-title -->
    <?php if ($this->is('page')):  ?>
    <?php
    $this->widget('Widget_Contents_Post_Recent', 'pageSize=1000000')->to($archives);
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
        $output .= '<a href="' . $archives->permalink . '">' . $archives->title . '</a>';
        $output .= '</li>';
    endwhile;
    $output .= '</ul></div>';
    echo $output;
    ?>
    <?php elseif ($this->is('category')): ?> <!-- 分类页面 -->
    <?php
    $year = 0; $i = 0; $j = 0;
    $output = '<div class="post-list">';
    while ($this->next()):
        $year_tmp = $this->year;
        $y        = $year;
        if ($year != $year_tmp && $year > 0)
            $output .= '</ul>';
        if ($year != $year_tmp) {
            $year = $year_tmp;
            $output .= '<h3>'. $year .' 年</h3><ul>';
        }
        $output .= '<li class="item">';
        $output .= '<time class="date">' . (string)$this->month . '-' . (string)$this->day . '</time>';
        $output .= '<a href="' . $this->permalink . '">' . $this->title . '</a>';
        $output .= '</li>';
    endwhile;
    $output .= '</ul></div>';
    echo $output;
    ?>
    <?php endif; ?>
    </div> <!-- end .archive -->

    <div class="category-outline">
    <div class="category">
        <h2>分类</h2>
        <ul style="margin-left:1rem;margin-bottom:0;">
        <?php $category = $this->widget('Widget_Metas_Category_List');
        if ($category->have()): 
        while ($category->next()): ?>
        <li class="item">
            <a style="margin-left:auto;" href="<?php $category->permalink() ?>"><?php $category->name() ?> (<?php $category->count() ?>)</a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>
        </ul>
    </div>
    </div>

</div> <!-- end .content-container -->

<?php $this->need('footer.php'); ?>

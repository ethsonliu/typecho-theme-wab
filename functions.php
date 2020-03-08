<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl',
    NULL,
    NULL,
    _t('站点 LOGO 地址'),
    _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));
    $form->addInput($logoUrl);
}

function themeFields($layout) {
    $description = new Typecho_Widget_Helper_Form_Element_Textarea('description',
    NULL,
    NULL,
    _t('简介'),
    _t('输入文章的简介，用于首页中的展示'));
    $layout->addItem($description);
}



<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php $this->options->charset(); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title><?php $this->archiveTitle(array(
                'category'  =>  _t('分类 %s 下的文章'),
                'search'    =>  _t('包含关键字 %s 的文章'),
                'tag'       =>  _t('标签 %s 下的文章'),
                'author'    =>  _t('%s 发布的文章')
            ), '', ' - '); ?><?php $this->options->title(); ?></title>

        <!--[if lt IE 9]>
        <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
        <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
        <![endif]-->

        <link rel="stylesheet" href="<?php $this->options->adminUrl('css/grid.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/icon.css'); ?>">
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">

        <?php $this->header(); ?>
    </head>

    <body>
        <div class="icon-rocket" id="back-to-top"></div>
        <header class="navbar">
            <section class="container clearfix">
                <h2 class="navbar-header">
                    <a href="<?php $this->options->siteUrl(); ?>" class="nav-brand"><?php $this->options->title(); ?></a>
                </h2>
                <div id="mobile-menu" class="icon-menu"></div>
                <nav class="navbar-inner clearfix">
                    <ul class="navbar-nav">
                        <li <?php if($this->is('index')): ?> class="active"<?php endif; ?>>
                            <a href="<?php $this->options->siteUrl(); ?>">
                                <span class="icon-home"></span>
                                首页
                            </a>
                        </li>
                        <li class="navigator">
                            <a href="#" title="Navigator">
                                <span class="icon-menu"></span>
                                导航
                            </a>
                            <?php $this->need('navigator.php'); ?>
                        </li>
                        <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                        <?php while($pages->next()): ?>
                        <li <?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>>
                            <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>">
                                <span class="icon-<?php $pages->slug(); ?>"><span>
                                <?php $pages->title(); ?>
                            </a>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                </nav>
                <form class="navbar-search" method="post" action="./" role="search">
                    <input type="text" name="s" placeHolder="站内搜索" class="search-input" />
                    <button type="submit" class="search-submit icon-search"></button>
                </form>
            </section>
        </header>

        <article class="container content">
            <article class="row">

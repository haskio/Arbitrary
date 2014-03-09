<section class="article-list col-8 col-mb-12">
    <!-- 在非index页面添加面包屑导航 -->
    <?php if (!$this->is('index')): ?>
    <section class="distant">
        <a href="<?php $this->options->siteUrl(); ?>">首页</a>
        <span>&gt;</span>
        <?php if ($this->is('post')): ?>
            <?php $this->category(); ?>
            <span>&gt;</span>
            <?php $this->title() ?>
        <?php else: ?>      
            <?php $this->archiveTitle('','',''); ?>
        <?php endif; ?>
    </section>
    <?php endif; ?>
    <!-- 面包屑导航结束 -->

    <?php while($this->next()): ?>
    <article class="article">
        <h2 class="article-title">
            <a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a>
        </h2>
    
        <section class="article-meta">
            <ul>
                <li><?php $this->date('Y/m/d'); ?></li>
                <li><span>|</span></li>
                <?php if (!$this->is('page')): ?>
                <li><?php $this->category(', '); ?></li>
                <li><span>|</span></li>
                <?php endif; ?>
                <li><?php $this->commentsNum('%d Replies'); ?></li>
            </ul>
        </section>

        <section class="article-content">
            <?php if ($this->is('archive') || $this->is('index')):
                $this->excerpt(300);
            else:
                $this->content();
            endif;
            ?>
        </section>

        <?php if ($this->is('post')): ?>
        <section class="article-tags">
            Tags: <?php $this->tags(', ', true, 'none'); ?>
        </section>

        <section class="article-near">
            <p>上一篇: <?php $this->thePrev('%s','已是最旧的文章'); ?></p>
            <p>下一篇: <?php $this->theNext('%s','已是最新的文章'); ?></p>
        </section>
        <?php endif;?>

        <?php if ($this->is('single')): ?>
            <?php $this->need('comments.php'); ?>
        <?php endif; ?>
    </article>
    <?php endwhile; ?>

    <?php if (!$this->is('single')): ?>
        <?php $this->pageNav(); ?>
    <?php endif; ?>
</section>

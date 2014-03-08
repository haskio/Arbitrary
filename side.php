<section class="side-list col-4 kit-hidden-tb">
    <article class="article recent-posts">
        <h3>最新文章</h3>
        <ul>
            <?php $this->widget('Widget_Contents_Post_Recent')->parse('
                <li><a href="{permalink}" class="item">{title}</a></li>'); ?>
        </ul>
    </article>

    <article class="article recent-comments">
        <h3>最近回复</h3>
        <ul>
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li class="item">
                <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>：
                <?php $comments->excerpt(35, '...'); ?>
            </li>
        <?php endwhile; ?>
        </ul>
    </article>

    <article class="article friend-list">
        <h3>友情链接</h3>
        <ul>
            <?php Links_Plugin::output('
            <li><a href="{url}">{name}</a></li>', 30); ?>
        </ul>
    </article>
</section>

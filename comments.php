<section id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if($this->allow('comment')): ?>

    <article class="new-comment" id="<?php $this->respondId(); ?>">
        <div class="cancel-comment">
            <?php $comments->cancelReply(); ?>
        </div>
   	    <form method="post" action="<?php $this->commentUrl() ?>">
            <?php if(!$this->user->hasLogin()): ?>
            <p>
                <input type="text" name="author" value="<?php $this->remember('author'); ?>" />
                <label for="author">姓名</label>
            </p>
            <p>
                <input type="email" name="mail" value="<?php $this->remember('mail'); ?>" />
                <label for="mail">邮箱</label>
            </p>
            <p>
                <input type="url" name="url" value="<?php $this->remember('url'); ?>" />
                <label for="url">网站</label>
            </p>
            <?php endif; ?>
            <textarea name="text"><?php $this->remember('text'); ?></textarea>
            <div class="clearfix">
                <button type="submit">发布评论 (Ctrl + Enter)</button>
            </div>
        </form>
    </article>

    <?php else: ?>

    <article>
        <span>楼主残忍的关闭了评论</span>
    </article>

    <?php endif; ?>

    <article class="comments-list">
        <?php $comments->listComments(); ?>
        <?php $comments->pageNav(); ?>
    </article>
</section>

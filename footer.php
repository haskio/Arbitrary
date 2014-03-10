    </article>
</article>

<footer class="footer">
    <p class="container copyright">
        &copy; <?php echo date('Y'); ?> - <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
        Theme By <a href="http://blog.sloger.info">Sloger</a>.
        Designed By <a href="http://mufeng.me">Mufeng</a>.
        Powered by <a href="http://www.typecho.org">Typecho</a>.
    </p>
</footer>

    <script src="<?php $this->options->adminUrl('js/jquery.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/script.js'); ?>"></script>
    <?php $this->footer(); ?>
    </body>
</html>

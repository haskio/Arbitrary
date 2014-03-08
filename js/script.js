$(document).ready(function() {
    $('.new-comment textarea').keydown(function(e) {
        if (e.ctrlKey && e.keyCode == 13 || e.keyCode == 10) {
            $('.new-comment form').submit();
            return false;
        }
    });
    $("body").on("click", ".page-navigator li a, .article-near a", function(e) {
        e.preventDefault();
        var dom = $(this);
        var content = dom.attr('href').indexOf("comments") !== -1 ? "comments" : "article";
        $.ajax({
            url: dom.attr('href'),
            data: "action=ajax_" + content,
            success: function(data) {
                var parents = content === "article" ? dom.parents('.article-list') : dom.parents('#comments');
                parents.replaceWith(data);
                $('html, body').animate({
                    scrollTop: $("." + content + "-list").offset().top - 40
                }, 500);
            }
        });
        return false;
    });
});

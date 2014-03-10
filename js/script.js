$(document).ready(function() {
    $(window).scroll(function() {
        if ($(window).scrollTop() > 700) {
            $("#back-to-top").fadeIn(800);
        } else {
            $("#back-to-top").fadeOut(800);
        }
    });
    $('#back-to-top').click( function(){ 
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 800);
        return false;
    });
    $('#mobile-menu').click(function() {
        $('.navbar-inner').toggle();
    });
    $('.new-comment textarea').keydown(function(e) {
        if (e.ctrlKey && e.keyCode == 13 || e.keyCode == 10) {
            $('.new-comment form').submit();
            return false;
        }
    });
    $("body").on("click", ".page-navigator li a", function(e) {
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

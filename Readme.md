Typecho 主题 - Arbitrary
---

之前看到了 [牧风大神][1] 的主题, 觉得很不错, 问了下没有Typecho版本的, 就移植到Typecho上面来了.

主题很简约, 没有炫酷的特效, 适合喜欢纯净的人. 移动端访问也能有不错的效果. *这一点希望大家帮忙测试一下, 我只测试了我的渣机*


###关于导航栏图标###

导航栏图标采用的是加一个

```php
<span class="icon-<?php $pages->slug(); ?>"></span>
```

实现的, 图标是我从 [Fontello][2] 上自己选择的.

*`$page->slug();`* 表示页面的缩略名。

这个网站很不错, 可以自己选择图标并打包下载.

由于我自己的页面很少, 所以我选择的图标不多, 如果有需要但是我里面没有, 可以自行去选择下.

命名方式如下, 字体名为 icon, 后缀为页面的缩略名, 打包下载解压后直接把 css/icon.css 和 font/icon* 复制覆盖就行了.

![Fontello 图标设置][2]

注意默认使用了

 - icon-home 导航栏首页标签
 - icon-search 搜索框图标
 - icon-menu 导航标签和移动端菜单
 - icon-rocket 返回顶部小火箭

选择的时候一定要选择这四个, 否则会有些不显示图标, 虽然不是什么大问题.

###关于导航标签###

内容都在 navigator.php, 可根据自己的情况自行修改.

###关于页面###

不同于 Typecho 默认主题包含了 index.php post.php archive.php page.php.

本主题统一使用了index.php 调用 article.php, 靠 `$this->is(); ` 决定输出.

###License###

GPLv2

详情参见license.txt

###说明###

Ajax 效果参考牧风的文章 [Typecho评论Ajax翻页][4]

如果使用过程中遇到bug或者问题, 可以在 github 上发 issue, 可以到我的博客给我留言, 也可以给我发邮件 ( *slogerdream@gmail.com* ).


 [1]: http://mufeng.me/
 [2]: http://fontello.com/
 [3]: http://slblog.qiniudn.com/fontello.png
 [4]: http://mufeng.me/typecho-ajax-comment.html

<article class="dropdown">
    <div class="dropdown-arrow1"></div>
    <div class="dropdown-arrow2"></div>
    <div class="submenu">
        <div class="tab-content">
            <table>
                <tbody>
                    <tr>
                        <td class="tdleft">分类</td>
                        <td class="tdright">
                            <?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}">{name}</a>'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="tdleft">标签</td>
                        <td class="tdright">
                            <?php $this->widget('Widget_Metas_Tag_Cloud') ->parse('<a href="{permalink}">{name}</a>'); ?> 
                        </td>
                    </tr>                                       
                    <tr>
                        <td class="tdleft">归档</td>
                        <td class="tdright">
                            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月')->parse('<a href="{permalink}">{date}</a>'); ?>
                        </td>
                    </tr>                                       
                    <tr>
                        <td class="tdleft">其它</td>
                        <td class="tdright">
                            <?php if($this->user->hasLogin()): ?>
                            <a href="<?php $this->options->adminUrl(); ?>">进入后台</a>
                            <a href="<?php $this->options->logoutUrl(); ?>">退出</a>
                            <?php else: ?>
                            <a href="<?php $this->options->adminUrl('login.php'); ?>">登录</a>
                            <?php endif; ?>
                            <a href="<?php $this->options->feedUrl(); ?>">文章 RSS</a>
                        </td>
                    </tr>                                       
                </tbody>
            </table>
        </div>
    </div>
</article>

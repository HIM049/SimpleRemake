<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<head>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/Style/Moudle/sidebar_public.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/Style/Moudle/index_sidebar.css'); ?>">
</head>
<aside class="sidebar" id="IndexSidebar">
    <!-- 侧边栏div -->

    <div class="search_div">
        <form method="post" action="">
            <div class="search_div_out_div">
                <!-- 搜索条 -->
                <div>
                    <input type="text" name="s" class="search_text" />
                    <button type="submit" class="search_submit">搜索</button>
                </div>
            </div>
        </form>
    </div>

    <div class="sidebar-classify">
        <h2>分类</h2>
        <ul>
            <?php $this->widget('Widget_Metas_Category_List@options','ignore=21')
            ->parse('<li><a href="{permalink}"><p>{name}</p><p>（{count}）</p></a></li>'); 
            ?>
        </ul>
    </div>
    <div class="sidebar-tag">
        <div class="sidebar-tag-h2"><h2>标签</h2></div>
        <div class="sidebar-tags">
            <?php Typecho_Widget::widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1')->to($tags); ?>
            <?php if($tags->have()) {while ($tags->next()): ?>
                <a href="<?php $tags->permalink();?>"><span class="sidebar-tag-tags">#<?php $tags->name(); ?>#</span></a>
            <?php endwhile;}?>
        </div>
    </div>

</aside>
<script src="<?php $this->options->themeUrl('/Javascript/sidebar.js'); ?>"></script>
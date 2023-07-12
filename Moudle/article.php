<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<head>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/Style/post/article_style.css'); ?>">

    
    <!-- highlightjs: https://www.fenxianglu.cn/highlightjs/docs/start/ -->
    <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/default.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script> -->
</head>
<div class="post-box">
    <section class="post-body">
        <img class="post-TopImg" src="<?php echo thumb($this); ?>"/>
        <h1 class="post-title"><?php $this->title() ?></h1>
        <div class="post-content">
            <div class="post-content-div"><?php $this->content(); ?></div>
            </div>
    </section>
</div>

<!-- <script>
  hljs.highlightAll();
</script> -->

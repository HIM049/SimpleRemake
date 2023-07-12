<?php

/**
 * 由HIM049制作的极简主题
 * 
 * @package Simple-Remake 
 * @author HIM049
 * @version 1.0
 * @link https://blog.him.usla.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>

<head>   
    <?php $this->need('./Moudle/header.php'); ?>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('./Style/index/index_dark.css'); ?>">
</head>

<body class="index-body">
    <?php $this->need('./Moudle/navbar.php'); ?>

    <div class="banner"> 
         <!-- 头版 -->
        <div class="bn-div">
            <div>
               <h1><?php $this->options->title() ?></h1>
               <p><?php $this->options->description() ?></p>
            </div>
        </div>
    </div>

    <section class="list">
        <!-- 文章列表 -->
        <?php while ($this->next()) : ?>
            <a href="<?php $this->permalink() ?>">
                <div class="list-article">
                    <div class="index-PostTopImg-div">
                        <img src="<?php echo thumb($this); ?>" />
                    </div>
                    <h2><?php $this->title() ?></h2>
                    <p><?php $this->excerpt(150, '...');?></p>
                    <p><?php $this->date('Y-m-d'); ?></p>
                </div>
            </a>
        <?php endwhile; ?>
        <div class="list-nav"><?php $this->pageNav(); ?></div><!-- 翻页按键 -->
    </section>
      
    <?php $this->need('./Moudle/index_sidebar.php'); ?>
    <?php $this->need('./Moudle/footer.php'); ?>
</body>

<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->header(); ?>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html lang='zh-cn'>

<link rel="icon" href="<?php $this->options->themeUrl('./Imagine/favicon.ico'); ?>"/>
<title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>

<link rel="stylesheet" href="<?php $this->options->themeUrl('/Style/public.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('/Style/theme.css'); ?>">

<?php /* Smarty version 2.6.26, created on 2018-10-05 02:22:49
         compiled from index.dwt */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['description']; ?>
" />
<meta name="generator" content="WILL" />
<title><?php echo $this->_tpl_vars['page_title']; ?>
</title>
<link href="http://localhost/douphp/upload/theme/default/style.css" rel="stylesheet" type="text/css" />
<link href="http://localhost/douphp/upload/theme/default/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="http://localhost/douphp/upload/theme/default/css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="http://localhost/douphp/upload/theme/default/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="http://localhost/douphp/upload/theme/default/css/leoslider.css">
<link href="http://localhost/douphp/upload/theme/default/css/iconeffects.css" rel='stylesheet' type='text/css' />
<script type="text/javascript" src="http://localhost/douphp/upload/theme/default/images/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/douphp/upload/theme/default/images/global.js"></script>
<script type="text/javascript" src="http://localhost/douphp/upload/theme/default/images/slide_show.js"></script>
<script src="http://localhost/douphp/upload/theme/default/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="http://localhost/douphp/upload/theme/default/js/move-top.js"></script>
<script type="text/javascript" src="http://localhost/douphp/upload/theme/default/js/easing.js"></script>
<script type="text/javascript" src="http://localhost/douphp/upload/theme/default/js/f1.js"></script>
 <!-- swipe box js -->
<script src="http://localhost/douphp/upload/theme/default/js/jquery.leoslider.js"></script>
<script src="http://localhost/douphp/upload/theme/default/js/main.js"></script>
</head>
<body>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="wrapper">

 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/slide_show.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="index">
  <div class="indexBox">
   <div class="wrap">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/recommend_product.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/recommend_article.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   </div>
  </div>
  <div class="indexBox bg">
   <div class="wrap">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/about.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/contact.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   </div>
  </div>
  <?php if ($this->_tpl_vars['open']['link']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/link.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/online_service.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
</body>
</html>
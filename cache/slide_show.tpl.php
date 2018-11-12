<?php /* Smarty version 2.6.26, created on 2018-11-11 10:18:23
         compiled from inc/slide_show.tpl */ ?>

<section id="line-slider">
 <div class="leoslider">


  <ul class="slides">
   <li>
    <img src="http://localhost/douphp/upload/theme/default/images/1.jpg" alt=" " />
   </li>
   <li>
    <img src="http://localhost/douphp/upload/theme/default/images/2.jpg" alt=" " />
   </li>
   <li>
    <img src="http://localhost/douphp/upload/theme/default/images/3.jpg" alt=" " />
   </li>
  </ul>
 </div>
</section>
<div class="slideShow">
 <ul class="slides">
  <?php $_from = $this->_tpl_vars['show_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['show'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['show']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['show']):
        $this->_foreach['show']['iteration']++;
?>
  <li><a href="<?php echo $this->_tpl_vars['show']['show_link']; ?>
" target="_blank" style="background-image:url(<?php echo $this->_tpl_vars['show']['show_img']; ?>
)"></a></li>
  <?php endforeach; endif; unset($_from); ?>
 </ul>
</div>
<script type="text/javascript">
<?php echo '
$(document).ready(function(){
 $(\'.slides\').bxSlider({
   mode: \'fade\'
 });
})
'; ?>

</script>
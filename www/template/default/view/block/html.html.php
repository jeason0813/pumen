<?php
/**
 * The html block form view file of block module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPL (http://zpl.pub/page/zplv11.html)
 * @author      Xiying Guan <guanxiying@xirangit.com>
 * @package     block
 * @version     $Id$
 * @link        http://www.chanzhi.org
*/
?>
<?php if(!is_object($block->content)) $block->content = json_decode($block->content);?>
<div id="block<?php echo $block->id;?>" class='panel panel-block <?php echo $blockClass;?>'>
  <div class='panel-heading'>
    <strong><?php echo $icon . $block->title;?></strong>
    <?php if(!empty($block->content->moreText) and !empty($block->content->moreUrl)):?>
    <div class='pull-right'><?php echo html::a($block->content->moreUrl, $block->content->moreText);?></div>
    <?php endif;?>
  </div>
  <div class='panel-body'>
    <div class='article-content'><?php echo $block->content->content;?></div>
  </div>
</div>

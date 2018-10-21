<?php
/* Smarty version 3.1.33, created on 2018-10-21 17:17:34
  from '/home/david/NetBeansProjects/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bcc988e46bf29_34819650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff977c0fce67f64d800e25ffe0411cc1e248dcb7' => 
    array (
      0 => '/home/david/NetBeansProjects/prestashop/themes/classic/templates/page.tpl',
      1 => 1540134571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bcc988e46bf29_34819650 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18780202755bcc988e45c277_84114199', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_17971850005bcc988e45e9e9_48302415 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_7092099415bcc988e45d412_81132152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17971850005bcc988e45e9e9_48302415', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_3152486275bcc988e4643e9_99714961 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8365917085bcc988e465cd6_70296729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19577947295bcc988e463033_97041839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3152486275bcc988e4643e9_99714961', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8365917085bcc988e465cd6_70296729', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4042345875bcc988e4693f9_70027665 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_17476453195bcc988e4682a2_29866465 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4042345875bcc988e4693f9_70027665', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18780202755bcc988e45c277_84114199 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18780202755bcc988e45c277_84114199',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_7092099415bcc988e45d412_81132152',
  ),
  'page_title' => 
  array (
    0 => 'Block_17971850005bcc988e45e9e9_48302415',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19577947295bcc988e463033_97041839',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_3152486275bcc988e4643e9_99714961',
  ),
  'page_content' => 
  array (
    0 => 'Block_8365917085bcc988e465cd6_70296729',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_17476453195bcc988e4682a2_29866465',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4042345875bcc988e4693f9_70027665',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7092099415bcc988e45d412_81132152', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19577947295bcc988e463033_97041839', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17476453195bcc988e4682a2_29866465', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

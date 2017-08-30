<?php
/* Smarty version 3.1.31, created on 2017-08-30 14:56:27
  from "/Applications/XAMPP/xamppfiles/htdocs/git/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a6b5fb29ef62_91173419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f071c294ded04165b85cf8fbec6202c0965a3fd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/git/templates/index.tpl',
      1 => 1504096603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a6b5fb29ef62_91173419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Heroic Features - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//test.ithata.com/templates/web/bootstrap/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//test.ithata.com/templates/web/bootstrap/css/heroic-features.css">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="?">shop test work</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/alysenkocom/test-work-search">github</a>
                </li>
            </ul>
        </div>
    </div>
</nav><!-- Page Content -->
<div class="container">

    <div class="container my-4">

        <div class="row">
            <div class="col-lg-3">
                <h5 class="card-header">Filters</h5>
                <div class="card-body">

                    <form action="?">
                        <div class="input-group">
                            <input name="text" class="form-control" placeholder="Search for..."<?php if (isset($_smarty_tpl->tpl_vars['searchData']->value['text'])) {?> value="<?php echo $_smarty_tpl->tpl_vars['searchData']->value['text'];?>
"<?php }?>>
                        </div>
                        <div class="input-group my-4">
                            <select name="brand" class="form-control">
                                <option value="0">Brand...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
                                    <option <?php if (isset($_smarty_tpl->tpl_vars['searchData']->value['brand']) && $_smarty_tpl->tpl_vars['searchData']->value['brand'] === intval($_smarty_tpl->tpl_vars['brand']->value['id'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['brand']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value['name'];?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </select>
                        </div>
                        <div class="input-group my-4">
                            <select <?php if (!isset($_smarty_tpl->tpl_vars['searchData']->value['size']) && !isset($_smarty_tpl->tpl_vars['searchData']->value['size']['selected'])) {?>disabled<?php }?> name="size" class="form-control">
                                <option value="0">Size...</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['searchData']->value['size']['data'], 'size');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['size']->value) {
?>
                                    <option <?php if (isset($_smarty_tpl->tpl_vars['searchData']->value['size']['selected']) && $_smarty_tpl->tpl_vars['searchData']->value['size']['selected'] === intval($_smarty_tpl->tpl_vars['size']->value['id'])) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['size']->value['id'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['size']->value['name'];?>

                                    </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Find!">
                    </form>

                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <div class="row">
                    <?php if (count($_smarty_tpl->tpl_vars['products']->value) > 0) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
                            <div class="col-lg-3">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_img'];?>
" alt=""></a>
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value['brand_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Size: <?php echo $_smarty_tpl->tpl_vars['product']->value['size_name'];?>
</small>
                                    </div>
                                </div>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <?php } else { ?>
                        <div class="col-lg-12 text-center">
                            there are no products..
                        </div>
                    <?php }?>
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>

</div>


<!-- Bootstrap core JavaScript -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $('select[name="brand"]').change(function(){
        var brandId = parseInt(this.value);
        if (brandId > 0) {

            $.ajax({
                method: "POST",
                url: 'ajax.php',
                dataType: "json",
                data: {
                    ajax: true,
                    brandId: brandId
                }
            }).done(function(data) {
                var content = $('select[name="size"]:first-child option')[0].outerHTML;
                if (data.error === false) {
                    $('select[name="size"]').prop( "disabled", false );
                    if (data.result.length > 0) {
                        $.each(data.result, function(key, val){
                            content += '<option value="' + val.id + '">' + val.name + '</option>';
                        });
                        $('select[name="size"]').html(content);
                    }
                } else {
                    $('select[name="size"]').prop( "disabled", true ).html(content);
                }
            }).fail(function(jqXHR, textStatus, errorThrown) {
                $('select[name="size"]').prop( "disabled", true );
            });

        }
    });
<?php echo '</script'; ?>
>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>
</body>
</html><?php }
}

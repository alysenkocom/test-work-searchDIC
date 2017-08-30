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
                            <input name="text" class="form-control" placeholder="Search for..."{if isset($searchData['text'])} value="{$searchData['text']}"{/if}>
                        </div>
                        <div class="input-group my-4">
                            <select name="brand" class="form-control">
                                <option value="0">Brand...</option>
                                {foreach from=$brands item=brand}
                                    <option {if isset($searchData['brand']) && $searchData['brand'] === intval($brand.id)}selected{/if} value="{$brand.id}">{$brand.name}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="input-group my-4">
                            <select {if !isset($searchData['size']) && !isset($searchData['size']['selected'])}disabled{/if} name="size" class="form-control">
                                <option value="0">Size...</option>
                                {foreach from=$searchData['size']['data'] item=size}
                                    <option {if isset($searchData['size']['selected']) && $searchData['size']['selected'] === intval($size.id)}selected{/if} value="{$size.id}">
                                        {$size.name}
                                    </option>
                                {/foreach}
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Find!">
                    </form>

                </div>
            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <div class="row">
                    {if count($products) > 0}
                        {foreach from=$products item=product}
                            <div class="col-lg-3">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="{$product.product_img}" alt=""></a>
                                    <div class="card-body">
                                        <p class="card-text">{$product.brand_name} {$product.product_name}</p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">Size: {$product.size_name}</small>
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    {else}
                        <div class="col-lg-12 text-center">
                            there are no products..
                        </div>
                    {/if}
                </div>
            </div>

        </div>
        <!-- /.row -->

    </div>

</div>


<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
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
</script>
<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <!-- /.container -->
</footer>
</body>
</html>
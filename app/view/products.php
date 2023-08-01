<?php

$url = 'https://fakestoreapi.com/products/?limit=2';
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$products =  json_decode(curl_exec($ch));
curl_close($ch);
foreach($products as $p) {
?>
<section class="container mt-5 ">
<div class="row">
<div class="col-sm-6"> 
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="<?= $p->image ?>" class="img img-thumbnail" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $p->title ?></h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Só R$ <?= $p->price ?></small></p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<?php
}
   
?>

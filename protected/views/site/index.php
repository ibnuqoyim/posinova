<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div class="badan">
 <h2>Produk Baru</h2>;
<?php foreach ($model as $produk) { ?>

	<div class="list-produk">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/product/<?php	echo $produk->product_images; ?>" alt="<?php	echo $produk->product_name; ?>">
 
            <h4><?php	echo $produk->product_name; ?></h4>
            <h5>Rp 150.000,-</h5>
 
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
    
	<?php
} ?>
</div>

<style type="text/css">
	*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}
 
body
{
    background-color: black;
}
 
.badan
{
    width: 880px;
    margin: 35px auto;
    background-color: white;
    padding: 20px;
    overflow: hidden;
}
 
.badan h2
{
    color: crimson;
    border-bottom: 1px solid gainsboro;
    margin: 5px;
    margin-bottom: 13px;
}
 
.list-produk
{
    border: 1px solid gainsboro;
    padding: 10px;
    float: left;
    width: 200px;
    margin: 5px;
}
 
.list-produk:hover
{
    transition-duration: 700ms;
    box-shadow: 5px 5px gainsboro;
}
 
.list-produk img
{
    width: 100%;
    height: 175px;
    display: block;
    margin-bottom: 5px;
}
 
.list-produk h4, .list-produk h5
{
    color: crimson;
    text-align: center;
    margin-bottom: 5px;
}
 
.tombol
{
    text-decoration: none;
    border-radius: 7px;
    padding: 7px;
    display: block;
    float: left;
    width: 45%;
    margin: 4px;
    text-align: center;
    color: white;
}
 
.tombol:hover
{
    background-color: black;
    transition-duration: 700ms;
}
 
.tombol-detail
{
    background-color: green;
}
 
.tombol-beli
{
    background-color: crimson;
}
</style>
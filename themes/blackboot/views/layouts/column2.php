<?php $this->beginContent('//layouts/main'); ?>
      <div class="row-fluid">
        <div class="span3">
         <?php
			$this->beginWidget('zii.widgets.CPortlet', array(
				'title'=>'Operations',
			));
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'sidebar'),
			));
			$this->endWidget();
		?>
		</div><!-- sidebar span3 -->

	<div class="span9">
		<div class="main">
			<?php echo $content; ?>
		</div><!-- content -->
	</div>
</div>
<?php $this->endContent(); ?>
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
 
.detail-produk
{
    border: 1px solid gainsboro;
    padding: 10px;
    float: left;
    width: 350px;
    margin: 5px;
}
 
.detail-produk:hover
{
    transition-duration: 700ms;
    box-shadow: 5px 5px gainsboro;
}
 
.detail-produk img
{
    width: 100%;
    height: 300px;
    display: block;
    margin-bottom: 5px;
}
 
.detail-produk h4, .list-produk h5
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
<!-- Refrence Web: 
http://www.marcofolio.net/webdesign/building_a_blog_with_cakephp_part_1_getting_started.html

http://books.google.com.my/books?id=-sswMuCuUn8C&pg=PT194&lpg=PT194&dq=simple+step+for+cakephp+retrieve+sql+data&source=bl&ots=MAvllb5-_Z&sig=e4q51boVhDYRzhzfayp0_oqhK7A&hl=en&sa=X&ei=NTpvUaKzD9GsrAeTOg&ved=0CEAQ6AEwAzgK

http://www.packtpub.com/article/working-with-simple-associations-using-cakephp

http://tuxradar.com/content/cakephp-tutorial-build-web-apps-faster
-->
<div id="Inventory">
	<?php
		//debug($Items);
		foreach ($Items as $Item) {?>
			<div class="Item" style="width:25%;">

				<h1>
					<a href="Product/index/<?= $Item['Inventory']['ItemID'] ?>" title="<?= $Item['Inventory']['ItemName'] ?>">
						<?= $Item['Inventory']['ItemName'] ?>
					</a>
				</h1>


				<p class="Image">
					<img src="http://<?= $Item['Inventory']['ImageLink'] ?>"></img>
				</p>

							
				<p id="Intro_Description_<?= $Item['Inventory']['ItemID'] ?>">
					<script type="text/javascript">
					    var MyJSStringVar = "<?= $Item['Inventory']['Description'] ?>";
					    	MyJSStringVar = MyJSStringVar.substring(0, 100);
					    var Intro = document.createElement('p');
					    	Intro.innerHTML = MyJSStringVar;
					    document.getElementById("Intro_Description_<?= $Item['Inventory']['ItemID'] ?>").appendChild(Intro);
					</script>
					
					<a href="Product/index/<?= $Item['Inventory']['ItemID'] ?>" title="<?= $Item['Inventory']['ItemName'] ?>" class="readon">
						Read more...
					</a>
					
				</p>
				
			</div>
	<?php } ?>
</div>
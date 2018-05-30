<?php
  while($n = mysqli_fetch_assoc($news))
  {
?>
  	<section class="news-section">
      <img class="news-image" align="center" src="/content/images/news/<?php echo $n['image']; ?>">
  		<a class="news-title" href="/content/news/<?php echo $n['link']; ?>"><?php echo $n['title']; ?></a>
  		<p class="news-pubdate"><?php echo $n['pubdate']; ?></p>
  		<div class="news-text">
  			<?php
  			  if(strlen($n['text']) > 407)
  			  {
  			  	echo mb_substr($n['text'], 0, 408, "UTF-8")."...";
  			  }
  			  else
  			  {
  			  	echo mb_substr($n['text'], 0, 408, "UTF-8");
  			  }
  			?>
  		</div>
  	</section>
<?php
  }
?>
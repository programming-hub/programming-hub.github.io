<?php
  while($nav = mysqli_fetch_assoc($navigation))
  {
?>
    <a class="navlink" href="<?php echo $nav['link']; ?>"><?php echo $nav['name']; ?></a>
<?php  	
  }	
?>

<a class="navlink" id="signup">Sign Up</a>
<a class="navlink" id="login">Log In</a>
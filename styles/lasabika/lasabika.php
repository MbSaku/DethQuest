<?php
switch( $site->getDevice() ){
  case 'mobile':
    echo '<img id="navbutton" src="'.$site->getBaseroot().'styles/'.$site->getStyle().'/images/mobilemenu.png" onclick="$('."'#navigation'".').slideToggle();">
    <a href="'.$site->getBaselink().'/home">
    <img class="logo" src="'.$site->getBaseroot().'styles/'.$site->getStyle().'/icon.png">
    </a>';
  break;
  case 'tablet':
    echo '<a href="'.$site->getBaselink().'/home">
    <img class="logo" src="'.$site->getBaseroot().'styles/'.$site->getStyle().'/icon.png">
    </a><h1 class="title">'.$site->getTitle().'</h1>';
  break;
  default:
    echo '<a href="'.$site->getBaselink().'/home">
    <img class="logo" src="'.$site->getBaseroot().'styles/'.$site->getStyle().'/icon.png">
    </a>
    <h1 class="title">'.$site->getTitle().'</h1>';
}
?>
<script>
window.onload = function() {
  <?php
  if ($site->getDevice() == 'mobile'){
   ?>
   $('#navigation').css('height', (screen.availHeight - $("#header").height()) + "px");
   $('#navigation').slideToggle(0);
   <?php
  }
  if( $site->getDevice() != 'desktop' ){
    ?>
    setHoverables( ".hoverable" );
    <?php
  }
  ?>
};
</script>
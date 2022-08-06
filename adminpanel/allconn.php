<?php
$conn = new mysqli('localhost','root','','phpproject');
if(!$conn){
?>
    <script>
   alert('network disconnected');
  </script>
    <?php
}
?>
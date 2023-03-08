<?php
  require_once('../../private/initialize.php'); 

  $salamanders = array('id' => '1', 'salamanderName' => 'Red-Legged Salamander', 'id' => '2', 'salamanderName' => 'Pigeon Mountain Salamander', 'id' => '3', 'salamanderName' => 'ZigZag Salamander', 'id' => '4', 'salamanderName' => 'Slimy Salamander');

  $pageTitle = 'Salamanders';

  include(SHARED_PATH . '/salamander-header.php');
?>

<h1>Salamanders</h1>

  <a href="#">Create Salamander</a>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>

      <?php foreach($salamanders as $salamander) { ?>
        <tr>
          <!-- <td>Display the salamander id</td> -->
    	    <!-- <td>Display the salamander name</td> -->
          <!-- Use url_for with show.php AND h(u) with the salamander['id'] -->
          <td><a href="#">Edit</a></td>
          <td><a href="#">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

    <?php include(SHARED_PATH . '/salamander-footer.php'); ?>

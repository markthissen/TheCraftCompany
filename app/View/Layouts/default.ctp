<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>


<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>

	<title>

	</title>

	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
        echo $this->Html->css('custom');
        echo $this->Html->css('shop');	

   		echo $this->Html->script('jquery');
    	echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
<?php

	 	echo $this->Html->image('header.png', array(
   									"class" => "img-responsive img-full",
   									"alt"   => "slide 1"
   									 )); 

	
        echo $this->element('navbar');
    ?>

  <center>
	<div id="container">
		<div id="header">
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
  </center>


</body>
</html>

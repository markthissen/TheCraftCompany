<?php echo $this->Session->flash('auth'); ?>

<div class="col-lg-12">
    <?php
		echo $this->Form->create();
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->end('Authenticate');
	?>
</div>
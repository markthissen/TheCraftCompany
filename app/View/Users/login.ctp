<?php echo $this->Session->flash('auth'); ?>
<body>


   <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">

                <hr>
                <h2 class="intro-text text-center"> <strong>Please Login</strong>
                </h2>
                <hr>


                <?php
				echo $this->Form->create('User');
				echo $this->Form->input('email');
				echo $this->Form->input('password');
				echo $this->Form->end('Authenticate');
				?>

				<h6>If you have not registered please do so by going <?php echo $this->Html->link('here', '/users/register');?></h6>

                </div>
            </div>
        </div>
</body>
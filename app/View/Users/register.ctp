<body>


   <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">

                <hr>
                <h2 class="intro-text text-center"> <strong>Register</strong>
                </h2>
                <hr>


                <?php
				echo $this->Form->create();
				echo $this->Form->input('firstname');
				echo $this->Form->input('lastname');
				echo $this->Form->input('email');
				echo $this->Form->input('password');
				echo $this->Form->end('Save');
				?>

                </div>
            </div>
        </div>
</body>




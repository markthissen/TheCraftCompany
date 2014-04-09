    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><?php echo $this->Html->link('Home', '/home/index');?></a>
                    </li>
                    <li><?php echo $this->Html->link('About', '/about/index');?></a>    
                    </li>
                    <li><?php echo $this->Html->link('Products', '/products/index');?></a>
                    </li>   
                    <li><?php 
                    if  (AuthComponent::user()):
                        echo $this->Html->link('<span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart <span class="badge" id="cart-counter">0</span>',
                                        array('controller'=>'carts','action'=>'view'),array('escape'=>false));
                    endif ?>
                    </li></a>
                    <li>
                    <?php
                    if (AuthComponent::user()):
                            // The user is logged in, show the logout link
                            echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));

                            else:
                            // The user is not logged in, show login link
                            echo $this->Html->link('Log in/Register', array('controller' => 'users', 'action' => 'login'));
                            endif;
                            ?></a>

                    </li>
                    </ul>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
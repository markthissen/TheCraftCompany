<!DOCTYPE html>
<html lang="en">

<head>
	    <?php
        echo $this->Html->css('bootstrap');
        echo $this->Html->css('business-casual');
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Craft Company</title>


</head>

<body>

    <div class="brand">The Craft Company</div>


    <?php
        echo $this->element('navbar');
    ?>


    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">

                            	<?php echo $this->Html->image('slide-4.jpg', array(
   									"class" => "img-responsive img-full",
   									"alt"   => "slide 1"
   									 )); ?>  
                            </div>
                            <div class="item">
                                <?php echo $this->Html->image('slide-2.jpg', array(
   									"class" => "img-responsive img-full",
   									"alt"   => "slide 2"
   									 )); ?>  
                            </div>
                            <div class="item">
                                <?php echo $this->Html->image('slide-3.jpg', array(
   									"class" => "img-responsive img-full",
   									"alt" => "slide 3"
   									 )); ?>  
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Welcome to</small>
                    </h2>
                    <h1>
                        <span class="brand-name">The Craft Company</span>
                    </h1>
                    <hr class="tagline-divider">
                    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Fantastic Products <strong>made for you</strong>
                    </h2>
                    <hr>
                    <?php echo $this->Html->image('intro-pic.jpg', array(
   						"class" => "img-responsive img-border img-left",
   						"alt"   => "intro pic"
   						)); ?>  
                    <hr class="visible-xs">
                    <p>123 123</p>
                </div>
            </div>
        </div>


    <!-- JavaScript -->
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 2000
    })
    </script>

</body>

</html>

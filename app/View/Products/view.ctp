


<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><?php echo $this->Html->link('Home','/');?>
            </li>
            <li class="active"><?php echo $product['Product']['name'];?>
            </li>
        </ol>
    </div>
</div>

<body>

    <div class="container">

        <div class="row"

            <div class="col-md-9">

                <?php echo $this->Html->image($product['Product']['image'],array('class'=>'thumbnail'));?>

                  
                        <h4><?php echo $product['Product']['name'];?></a>
                        </h4>
                        <p>><?php echo $product['Product']['Description'];?></p>
                    </div>
                    <div class="ratings">

                        <p>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            4.0 stars
                        </p>
                    </div>
                

                <div class="well">

                    <div class="">
                        <p>
                            <?php 
                            if  (AuthComponent::user()):
                            //here we creates the buy button
                            echo $this->Form->create('Cart',array('id'=>'add-form','url'=>array('controller'=>'carts','action'=>'add')));
                            echo $this->Form->hidden('product_id',array('value'=>$product['Product']['id']));
                            echo $this->Form->submit('Add to cart',array('class'=>'btn-success btn btn-lg'));
                            echo $this->Form->end();
                             endif
                             ?>
                        </p>
                        
                      </p></h4>Price: $<?php echo $product['Product']['price'];?></h4></p>
                        

                        <p>3 reviews</p>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">10 days ago</span>
                            <p> <?php echo $product['Product']['Review1'];?></p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">12 days ago</span>
                            <p><?php echo $product['Product']['Review2'];?></p>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-md-12">
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star-empty"></span>
                            Anonymous
                            <span class="pull-right">15 days ago</span>
                            <p><?php echo $product['Product']['Review3'];?></p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

<script>
$(document).ready(function(){
    $('#add-form').submit(function(e){
        e.preventDefault();
        var tis = $(this);
        $.post(tis.attr('action'),tis.serialize(),function(data){
            $('#cart-counter').text(data);
        });
    });
});
</script>

</html>
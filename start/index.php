<?php
    require 'lib/function.php';
    $pets = get_pets();

    $pets = array_reverse($pets);
    ?>


<?php
            $cleverWelcomeMessage = ucwords('All the love, none of the crap!');
            $pupCount = count($pets);
        ?>

        
    <?php require 'layout/header.php'; ?>

    <div class="jumbotron">
        <div class="container">

            <h1><?php echo $cleverWelcomeMessage; ?> </h1>

            <p>Over <?php echo $pupCount ?> pet friends!<p>


            <p><a class="btn btn-primary btn-lg">Learn more &raquo;</a></p>
        </div>
    </div>

    
    <div class="container">
        <div class="row">
             <?php foreach ($pets as $pet) { ?>
                <div class="col-md-4 pet-list-item">
                <h2><?php echo $pet['name']; ?></h2>
            
                <img src="images/<?php echo $pet['image']; ?>" class="img-rounded" />

             <blockquote class="pet-details">
                <span class="label label-info"><?php echo $pet['breed']; ?> </span>
                <?php 
                    if (!array_key_exists('age', $pet) || $pet['age'] == ''){
                        echo 'Unknown';
                    }
                    elseif ($pet['age'] == 'hidden'){
                        echo '(Contact owner for age)';    
                    }
                    else{
                        echo $pet['age'];
                    }
                ?>
                <?php echo $pet['weight']; ?> lbs
                </blockquote>

                <p>
                <?php echo $pet['bio']; ?>
                </p>
        </div>
        <?php } ?>
           
        </div>

        <hr>
<?php require 'layout/footer.php'; ?>

<?php 

        foreach($articles as $value):
            $statut_id = $value['statut'];
            $statut = get_statut_by_id($statut_id);
    ?>

            <div class="card col-3" >
                <img src="<?=$value['picture_link']?>" class="card-img-top" alt="ballerine">
                <div class="card-body">
                    <h5 class="card-title"><?=$value['name']?></h5>
                    <p class="card-text"><?=$value['comment']?></p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix : <?=$value['price']?></li>
                    <li class="list-group-item"><?=$statut['name']?></li>
                    <li class="list-group-item">Livraison : <?=$value['shipping']?></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
    <?php
        endforeach;
    ?>
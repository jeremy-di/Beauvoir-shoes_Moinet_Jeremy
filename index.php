<?php
    require 'templates/header.tpl';
    require 'data/articles.php';
    require 'functions.php';
?>

    <main class="mt-2 pt-2 border-top border-secondary">
        


    <div id="gallery" class="d-flex flex-wrap col-11 m-auto">

    <?php 
        include('./templates/shop.tpl');
    ?>
        <!--    <div class="card col-3" >
                <img src="./img/bottine1.jpg" class="card-img-top" alt="ballerine">
                <div class="card-body">
                    <h5 class="card-title">Bottines</h5>
                    <p class="card-text">Des bottines jolies et confortables.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix : 69,00€</li>
                    <li class="list-group-item">en rupture !</li>
                    <li class="list-group-item">livraison gratuite</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="./img/sneaker1.jpg" class="card-img-top" alt="ballerine">
                <div class="card-body">
                    <h5 class="card-title">Sneakers</h5>
                    <p class="card-text">Des sneakers au top !</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix : 49,00€</li>
                    <li class="list-group-item">en stock !</li>
                    <li class="list-group-item">livraison gratuite</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="./img/pantoufle1.jpg" class="card-img-top" alt="ballerine">
                <div class="card-body">
                    <h5 class="card-title">Pantoufles licorne</h5>
                    <p class="card-text">des pantoufles légendaires !</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix : 19,00€</li>
                    <li class="list-group-item">en stock !</li>
                    <li class="list-group-item">livraison : 3,60€</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div>
            </div>
            <div class="card col-3" >
                <img src="./img/sandale1.jpg" class="card-img-top" alt="ballerine">
                <div class="card-body">
                    <h5 class="card-title">Sandales</h5>
                    <p class="card-text">des sandales pour cet été !</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix : 35,00€</li>
                    <li class="list-group-item">en stock !</li>
                    <li class="list-group-item">livraison gratuite</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">en savoir plus</a>
                </div> -->
            </div>
        </div>
    </main>

<?php
    require 'templates/footer.tpl';
?>
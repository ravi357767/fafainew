<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Fragrances</title>
    <?php
    include "links.php";
    ?>
</head>

<body>
    <div class="page-header">
        <h2>Discover Fragrances</h2>
        <div class="contact-breadcrupms">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Discover Fragrances</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="discover-fragrance-wrapper">

        <div class="collection">
            <div class="collection-main">
                <span>Collection</span>
                <p>Perfume can be made from both natural and synthetic products. Natural products like flowers, grasses, spices, fruits, woods even animal secretion are used to manufacture perfumes. There are over 250.000 plants which produce essential oils used to make perfume. Beaver’s castor and musk from the deer are key ingredients of perfume making. Some of the animal substances are used as fixatives to make the perfume linger longer.</p>
            </div>
            <img src="./includes/images/DiscoverFragrances/collection.jpg" alt="Collection Image" id="collection-img">
        </div>

        <div class="chemistry-is-magic-wrapper">
            <span>Chemistry is Magic !</span>
            <p>Chemistry is the key to perfume making. The synthetic chemical is used to re-create original scent, especially of the non oily substance.</p>

            <div class="collection">
                <div class="collection-main">
                    <span>Extraction</span>
                    <p>The oil from the plant substances are extracted through distillation. In case of animal products, the essences are found in the fatty substances which is extracted directly from animals.</p>
                </div>
                <img src="./includes/images/DiscoverFragrances/extraction.jpg" alt="Collection Image" id="collection-img">
            </div>

            <div class="collection">
                <div class="collection-main">
                    <span>Steam Distillation</span>
                    <p>Steam is passed through plant material kept in a sill. Essential oils turn to gas which is then passed through cool tubes only to be liquefied.</p>
                </div>
                <img src="./includes/images/DiscoverFragrances/steam_distillation.jpg" alt="Collection Image" id="collection-img">
            </div>

            <div class="collection">
                <div class="collection-main">
                    <span>Solvent extraction</span>
                    <p>Benzene or petroleum ethers are used for extracting essential oils from the flowers. Flowers dissolve leaving oils behind. The oil is then dissolved in ethyl alcohol. The concoction is heated. This evaporates the alcohol leaving behind highly concentrated perfume oil.</p>
                </div>
                <img src="./includes/images/DiscoverFragrances/solvent.jpg" alt="Collection Image" id="collection-img">
            </div>

            <div class="collection">
                <div class="collection-main">
                    <span>Enfleurage</span>
                    <p>The flowers are spread on glass sheets coated with grease, which is then placed between wooden frames in tiers. The flower is then removed by hand after the grease has absorbed the fragrance</p>
                </div>
                <img src="./includes/images/DiscoverFragrances/enfleurage.jpg" alt="Collection Image" id="collection-img">
            </div>

            <div class="collection">
                <div class="collection-main">
                    <span>Maceration</span>
                    <p>Essence of flowers are soaked in warm fat before undergoing solvent extraction.</p>
                </div>
                <img src="./includes/images/DiscoverFragrances/maceration.jpg" alt="Collection Image" id="collection-img">
            </div>

            <div class="collection">
                <div class="collection-main">
                    <span>Blending</span>
                    <p>It takes over 700 different ingredients and several years to develop a special formula for perfume. The perfume oil collected is blended with alcohol based on the amount determined by experts. Most perfumes are made of 10-20% perfume oils dissolved in alcohol. Colognes are made from 3-5% oils diluted in 80-90% alcohol and 10% water.</p>
                </div>
                <img src="./includes/images/DiscoverFragrances/blending.jpg" alt="Collection Image" id="collection-img">
            </div>

            <div class="collection">
                <div class="collection-main">
                    <span>Aging</span>
                    <p>Fine perfume like fine wines are aged for several month sometimes even years after being blended. Once aged to a certain amount of time, it is tested by the experts known as the nose who ensure that the correct note is achieved.</p>
                </div>
                <img src="./includes/images/DiscoverFragrances/aging.jpg" alt="Collection Image" id="collection-img">
            </div>

            <div class="fragrance-note">
                <div class="fragrance-img">
                    <img src="./includes/images/DiscoverFragrances/fragranceNotes.jpg" alt="Fragrance Chart" id="fragrance-chart-img">
                </div>

                <div class="fragrance-text">
                    <span>Fragrance Notes</span>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Notes de Tete
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Notes de tete are also known as top notes which comprises of tangy or citrus smells.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Notes de Tete
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Notes de Coeur or the central notes provide body which comprises of aromatic flowers like rose and jasmine.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    Notes de Tete
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Notes de Fond or base notes provide an enduring woody fragrance.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="./javascript/link.js"></script>
</body>

</html>
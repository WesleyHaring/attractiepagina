<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
        </aside>
        <main>
            <div class="attracties">
                <div class="attractie">
                    <img src="img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg" alt="">
                    <div class="head-attractie">
                        <p>familyland</p>
                        <h2>Reuzenrad</h2>
                    </div>
                    <p>Bekijk het park van grote hoogte met het hele gezin.</p>
                    <div class="minimum-length">
                    <p> ... minimale lengte</p>
                    </div>
                </div>
                <div class="attractie fastpass">
                    <img src="img/attracties/david-murcia-HbYniDwjbVE-unsplash.jpg" alt="">
                    <div class="fastpass-text">   
                        <div class="head-attractie">
                            <p>adventureland</p>
                            <h2>Thunderbolt</h2>
                        </div>
                        <p>Echte thrillseekers komen aan hun trekken.</p>
                        <div class="minimum-length">
                            <p> ... minimale lengte</p>
                        </div>
                        <div class="fastpass-button">
                            
                        </div>
                    </div>
                </div>
                <div class="attractie">
                    <img src="img/attracties/alex-kalinin-6gYjwD4s9xk-unsplash.jpg" alt="">
                    <div class="head-attractie">
                        <p>familyland</p>
                        <h2>Caroussel</h2>
                    </div>
                    <p>Voor de allerkleinsten: maak een rondje in de antieke draaimolen.</p>
                    <div class="minimum-length">
                    <p> ... minimale lengte</p>
                    </div>
                </div>
                <div class="attractie">
                    <img src="img/attracties/brandon-hoogenboom-P0MX2XCqbFc-unsplash.jpg" alt="">
                    <div class="head-attractie">
                        <p>waterland</p>
                        <h2>Reuzeglijbaan</h2>
                    </div>
                    <p>Afkoelen in het waterparadijs (alleen open op warme dagen).</p>
                    <div class="minimum-length">
                    <p> ... minimale lengte</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>

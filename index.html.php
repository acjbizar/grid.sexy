<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Build sophisticated layouts out of the box.">
    <meta property="fb:app_id" content="355615554837150">
    <meta property="og:url" content="https://grid.sexy/">
    <title>Grid.sexy</title>
    <link rel="author" href="https://alexanderchristiaanjacob.com/">
    <link rel="canonical" href="https://grid.sexy/">
    <link rel="stylesheet" href="dist/grid.min.css">
    <style>
        * {
            border: 0;
            margin: 0;
            outline: 0;
            padding: 0;
        }

        h1 {
            color: white;
            font-size: 6em;
            line-height: .75;
            margin: .75em 0;
        }

        html {
            font: normal 100%/1.5 sans-serif, serif;
        }

        h1 span {
            display: block;
        }

        h1 span.dot {
            display: none;
        }

        .row > div {
            padding-bottom: .25em;
            padding-top: .25em;
        }

        .row > div > div {
            background: rgba(0, 0, 0, .125);
            height: 100%;
        }

        .golden {
            background: #f0ca75;
        }

        .silver {
            background: #dddddd;
        }

        #sample {
            background: #f43530;
            height: 100vh;
            position: absolute;
            top: 0;
        }

        #sample .row {
            height: 100%;
            padding: .25em 0;
        }

        #sample .row::after {
            display: none;
        }
    </style>
</head>
<body id="top">
<div class="container-fluid" id="sample">
    <div class="row">
        <?php

        for($d = 1; $d <= 24; ++$d):
            for($n = 0; $n < $d; ++$n):

                echo '<div class="col-xs-1o' . $d . '">';
                echo '<div class="filler"></div>';
                echo '</div>';

            endfor;
        endfor;

        echo '<div class="col-xs-gr1">';
        echo '<div class="filler"></div>';
        echo '</div>';
        echo '<div class="col-xs-gr2">';
        echo '<div class="filler"></div>';
        echo '</div>';
        echo '<div class="col-xs-sr1">';
        echo '<div class="filler"></div>';
        echo '</div>';
        echo '<div class="col-xs-sr2">';
        echo '<div class="filler"></div>';
        echo '</div>';

        ?>
    </div>
</div>
<main>
    <div class="container">
        <h1><span class="grid">Grid</span><span class="dot">.</span><span class="sexy">sexy</span></h1>
    </div>
</main>
</body>
</html>
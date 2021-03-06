<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="description" content="Build sophisticated layouts out of the box.">
    <meta name="theme-color" content="#f43530">
    <meta name="viewport" content="initial-scale=1.0,shrink-to-fit=no,width=device-width">
    <meta property="fb:app_id" content="355615554837150">
    <meta property="og:url" content="https://grid.sexy/">
    <title>Grid.sexy</title>
    <link rel="author" href="https://alexanderchristiaanjacob.com/">
    <link rel="canonical" href="https://grid.sexy/">
    <link rel="stylesheet" href="css/grid.css">
    <style>
        * {
            border: 0;
            box-sizing: border-box;
            font-size: 1em;
            margin: 0;
            outline: 0;
            padding: 0;
        }

        code, pre, samp {
            font-family: "Consolas", "Menlo", "Courier", monospace;
        }

        h1 {
            color: white;
            font-size: 6em;
            line-height: .75;
            margin: .75em 0;
            text-shadow: 0 1px 0 rgba(0, 0, 0, .125);
            transform: rotate(-45deg);
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

        pre {
            background: rgba(255, 255, 255, .5);
            overflow: auto;
            padding: .75rem;
            white-space: pre;
        }

        .row > div {
            padding-bottom: .375em;
            padding-top: .375em;
        }

        .filler {
            background: rgba(0, 0, 0, .0625);
            height: 100%;
            outline: 1px solid rgba(0, 0, 0, .25);
            outline-offset: 0;
        }

        .golden {
            background: #f0ca75;
        }

        .silver {
            background: #dddddd;
        }

        #main {
            /*display: none;*/
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

        echo '<div class="col-xs-gr1 golden">';
        echo '<div class="filler"></div>';
        echo '</div>';
        echo '<div class="col-xs-gr2 golden">';
        echo '<div class="filler"></div>';
        echo '</div>';
        echo '<div class="col-xs-sr1 silver">';
        echo '<div class="filler"></div>';
        echo '</div>';
        echo '<div class="col-xs-sr2 silver">';
        echo '<div class="filler"></div>';
        echo '</div>';

        ?>
    </div>
</div>
<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-xs-1o3">
                <h1>
                    <span class="grid">Grid</span>
                    <span class="dot">.</span>
                    <span class="sexy">sexy</span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col offset-m-1o3">
                <pre><code>&lt;link href=&quot;https://grid.sexy/css/grid.css&quot; rel="stylesheet"&gt;</code>
                </pre>
            </div>
        </div>
    </div>
</main>
<?php

require_once 'app/views/footer.php';

?>
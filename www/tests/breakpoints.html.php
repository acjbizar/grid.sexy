<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#f43530">
    <meta name="viewport" content="initial-scale=1.0,shrink-to-fit=no,width=device-width">
    <meta property="fb:app_id" content="355615554837150">
    <meta property="og:url" content="https://grid.sexy/tests/breakpoints">
    <title>Breakpoints</title>
    <link rel="author" href="https://alexanderchristiaanjacob.com/">
    <link rel="canonical" href="https://grid.sexy/tests/breakpoints">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="main.css">
</head>
<body id="top">
<nav>
    <div class="container-right">
        <div class="row">
            <div class="col">
                <ul>
                    <li><a href="../">Home</a></li>
                    <li><a href="../tests/">Tests</a></li>
                    <li><a href="../examples/">Examples</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-xs-1o1">
            <h1>Breakpoints</h1>
        </div>
    </div>
</div>
<?php

$breakpoints = [
    'xs' => 'Extra small',
    's' => 'Small',
    'm' => 'Medium',
    'l' => 'Large',
    'xl' => 'Extra large',
    'xxl' => 'Extra extra large',
    'xxxl' => 'Triple X'
];

$denominators = 24;

foreach($breakpoints as $breakpoint => $description):

    echo '<section class="container"><h2>' . $description . '</h2>';

    for($d = $denominators; $d > 0; --$d):

        echo '<div class="row">';

        for($n = 0; $n < $d; ++$n):
            echo '<div class="col-' . $breakpoint . '-1o' . $d . '"></div>';
        endfor;

        echo '</div>';

    endfor;

    echo '</section>';

endforeach;

?>
</body>
</html>
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
<?php

$breakpoints = ['xs', 's', 'm', 'l', 'xl', 'xxl', 'xxxl'];
$denominators = 24;

foreach($breakpoints as $breakpoint):

    echo '<section class="container"><h2>' . $breakpoint . '</h2>';

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
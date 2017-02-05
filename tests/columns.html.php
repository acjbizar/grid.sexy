<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="author" href="https://alexanderchristiaanjacob.com/">
    <link rel="stylesheet" href="../dist/grid.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body id="top">
<?php

$breakpoints = ['xs', 'sm', 'lg', 'xl', 'xxl', 'xxxl'];
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
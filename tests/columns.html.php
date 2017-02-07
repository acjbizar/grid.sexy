<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#f43530">
    <meta name="viewport" content="initial-scale=1.0,shrink-to-fit=no,width=device-width">
    <meta property="fb:app_id" content="355615554837150">
    <meta property="og:url" content="https://grid.sexy/tests/columns">
    <title>Columns</title>
    <link rel="author" href="https://alexanderchristiaanjacob.com/">
    <link rel="canonical" href="https://grid.sexy/tests/columns">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="main.css">
    <style>
        [class*="col-"] {
            overflow: visible;
            white-space: nowrap;
        }
    </style>
</head>
<body id="top">
<div class="container">
    <h1>Columns</h1>
    <?php

    define('MAX_COLUMNS', 24);

    function make_columns($b = 'xs')
    {
        global $max_columns;

        // Rules container.
        $r = [];

        for($d = MAX_COLUMNS; $d > 0; --$d) {

            // Numerators.
            for($n = 1; $n <= $d; ++$n) {

                // Percentage.
                $p = 100 / $d * $n;

                // Rule.
                $r["$p"] = [];
                $r["$p"]['d'] = $d;
                $r["$p"]['class'] = 'col-' . $b . '-' . $n . 'o' . $d;
            }
        }

        // Order the rules.
        krsort($r);

        // Return the rules.
        return $r;
    }

    $columns = make_columns();

    for($d = 1; $d <= MAX_COLUMNS; ++$d):

        echo '<h2>' . $d . '</h2>';

        for($n = 1; $n <= $d; ++$n):

            $p = 100 / $d * $n;

            if(isset($columns["$p"]) AND $columns["$p"]['d'] === $d):
                echo '<div class="row">';
                echo '<div class="' . $columns["$p"]['class'] . '"><code>.' . $columns["$p"]['class'] . '</code></div>';
                echo '</div>';
            endif;

        endfor;
    endfor;

    echo '<h2>Gold</h2>';
    echo '<div class="row"><div class="col-xs-gr1"><code>.col-xs-gr1</code></div></div>';
    echo '<div class="row"><div class="col-xs-gr2"><code>.col-xs-gr2</code></div></div>';
    echo '<h2>Silver</h2>';
    echo '<div class="row"><div class="col-xs-sr1"><code>.col-xs-sr1</code></div></div>';
    echo '<div class="row"><div class="col-xs-sr2"><code>.col-xs-sr2</code></div></div>';

    ?>
</div>
<footer>&copy;</footer>
</body>
</html>
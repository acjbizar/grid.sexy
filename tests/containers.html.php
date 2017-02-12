<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#f43530">
    <meta name="viewport" content="initial-scale=1.0,shrink-to-fit=no,width=device-width">
    <meta property="fb:app_id" content="355615554837150">
    <meta property="og:url" content="https://grid.sexy/tests/containers">
    <title>Containers</title>
    <link rel="author" href="https://alexanderchristiaanjacob.com/">
    <link rel="canonical" href="https://grid.sexy/tests/containers">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="main.css">
    <style>
        .examples .container {
            background-color: red;
        }

        .examples .container-fluid {
            background-color: lime;
        }

        .examples .container-left {
            background-color: blue;
        }

        .examples .container-right {
            background-color: magenta;
        }
    </style>
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
        <div class="col">
            <h1>Containers</h1>
            <p>Grid.sexy has four types of containers:</p>
            <dl>
                <dt><code class="css">.container</code></dt>
                <dd>A centered container with a maximum width,
                depending on the responsive breakpoint.</dd>
                <dt><code class="css">.container-fluid</code></dt>
                <dd>A container that uses all available width;
                usually the width of the screen.</dd>
                <dt><code>.container-left</code></dt>
                <dd>The left side of this container lines up with edge of the page,
                while the right side lines up with the regular column.</dd>
                <dt><code>.container-right</code></dt>
                <dd>The same as .container-left,
                but aligning to the right of the page.</dd>
                <dd></dd>
            </dl>
        </div>
    </div>
</div>
<div class="examples">
    <div class="container">Container</div>
    <div class="container-fluid">Container fluid</div>
    <div class="container-left">Container left</div>
    <div class="container-right">Container right</div>
</div>
</body>
</html>
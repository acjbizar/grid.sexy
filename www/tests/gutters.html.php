<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#f43530">
    <meta name="viewport" content="initial-scale=1.0,shrink-to-fit=no,width=device-width">
    <meta property="fb:app_id" content="355615554837150">
    <meta property="og:url" content="https://grid.sexy/tests/gutters">
    <title>Gutters</title>
    <link rel="author" href="https://alexanderchristiaanjacob.com/">
    <link rel="canonical" href="https://grid.sexy/tests/gutters">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="main.css">
    <style>

        h1 {
            text-align: center;
        }

        html {
            background: #0f0a01;
            color: #eaded0;
        }

        pre {
            padding-bottom: .75rem;
            padding-top: .75rem;
        }

        .demo {
            background: #dbb700;
            color: #0f0a01;
            outline: none;
        }

        .demo * {
            background: transparent;
            outline: none;
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
    <h1>Gutters</h1>

    <div class="demo row">
        <div class="col">row</div>
    </div>
    <pre><code class="html">&lt;div class="row">&lt;/div></code></pre>

    <div class="demo row no-gutter">
        <div class="col-xs-1o1">row no-gutter</div>
    </div>
    <pre><code class="html">&lt;div class="row no-gutter">&lt;/div></code></pre>

    <div class="demo row no-gutter">
        <div class="col-xs-1o1">
            <div class="row gutter">
                <div class="col-xs-1o1">row no-gutter &gt; row gutter</div>
            </div>
        </div>
    </div>
    <pre><code class="html">&lt;div class="row no-gutter">
    &lt;div class="row gutter">&lt;/div>
&lt;/div></code></pre>

</div>
</body>
</html>
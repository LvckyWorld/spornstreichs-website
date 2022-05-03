<head>
    <title></title>
    <?php
    // IMPORTS
    include './components/head.php';
    include './components/urlCompiler.php';

    // GET URI


    $url = $_SERVER['REQUEST_URI'];

    // print
    $titleExtra = 'START';
    headerContent::printHead($titleExtra);
    headerContent::printMeta($titleExtra, compiler::compileUrl($url));

    ?>

    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>

<div class="contentContainer">
    <img src='https://lvckyworld.net/images/logooo.svg' alt="logo"/>
    <h1>SPORNSTREICHS.DE</h1>
    <a>So reichet mir spornstreichs den</a> <a target="blank" href="https://github.com/LvckyAPI/spornstreichs-website">Sourcecode</a><a>!</a>
</div>

<footer>
    <div class="footerContainer">
        <div class="footer">
            <p>Powered by <a href='https://lvckyworld.net'>LvckyWorld</a></p>
            <div class="rights">
                <a href='https://lvckyworld.net/rights'>Datenschutz & Impressum</a>
            </div>
        </div>
    </div>
</footer>
</body>

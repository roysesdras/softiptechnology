<!DOCTYPE html>
<html lang="en" data-bs-theme="auto">
<head><script src="../../assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <!-- meta for SEO -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content=" Sterna Africa: Association de solidarité internationale engagée dans le volontariat et le développement communautaire à l'échelle mondiale. Notre action s'étend sur plusieurs pays, œuvrant pour un impact positif et durable au service des communautés.">
    <meta property="og:title" content="Sternaafrica: solidarité internationale" />
    <meta property="og:description" content="Sterna Africa: rapport annuels 2023" />
    <!-- Favicons -->
    <link href="../../assets/img/favicon.png" rel="icon">
    <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- meta for og.graph -->
    <meta property="og:image" content="https://i.ibb.co/QXx1bxs/2023.png" />
    <meta property="og:url" content="https://sternaafrica.org/" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="sternaafrica" />
    <title>sternaafrica: rapport annuels</title>
    <!-- all css -->
    <link rel="canonical" href="https://sternaafrica.org/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="stylesheet" href="../../style.css">
    <link href="../../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <?php include_once ('../../inclusion/mode_theme.php'); ?>
    <?php include_once ('../../inclusion/navbar.php'); ?>
    <div class="bg-primary-subtle">
        <h1 class="text-center p-3">Rapport Annuel 2023</h1>
    </div>
    
    <div class="container mb-4" id="rapport2022">
        <ul class="
          nav nav-tabs
          d-flex
          justify-content-between
          align-items-center
          text-dark
          p-3
        ">
            <li class="nav-item">
            <a
                href="#"
                class="p-1 border rounded-circle"
                id="prev_page"
                title=""
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
            >
            <i class="bi bi-chevron-left"></i></a>

            <input
                type="number"
                id="current_page"
                value="1"
                class="d-inline form-control"
            />

            <a
                href="#"
                class="p-1 border rounded-circle"
                id="next_page"
                data-bs-toggle="tooltip"
                data-bs-placement="bottom"
                title=""
                ><i class="bi bi-chevron-right"></i
            ></a>

            <!-- page 1 of 5 
            Page-->
            <span id="page_num"></span>
            /
            <span id="page_count"></span>
            </li>  
        </ul>

        <div class="row pt-2">
            <div class="col-md-4">
                <canvas
                    id="canvas"
                    class="
                    d-flex
                    flex-column
                    justify-content-center
                    align-items-center
                    mx-auto
                    "
                    style="max-width: 100%; padding-bottom: 0.2em;">
                </canvas>
            </div>

            <div class="col-md-8">
                <p>
                    Rappor Annuel 2023 Sterna Africa
                </p>
                <div>
                    <a href="RAPPORT ANNUEL 2023.pdf" class="get-started" download="rapporAnnuel2022">Télécharger rapport</a>
                </div>
        </div>
                </p>
            </div>
        </div>
    </div>

    

    <?php include_once('../../inclusion/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.10.377/build/pdf.min.js"></script>
    <script src="./script.js"></script>
    <script src="../../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
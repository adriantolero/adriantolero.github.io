
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Learn to Code Online | Treehouse</title>
    <link rel="icon" href="/assets/plugins/images/treehouse-seeklogo.com.svg" />
    <!-- style sheets-->
    <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="/assets/plugins/css/main.css"/>
    
    <!-- javascript-->
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
    
    <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light nav">
        <div class="container">
            <h6>
                <a class="navbar-brand" href="#">
                    <img src="/assets/plugins/images/treehouse-seeklogo.com.svg" alt="" height="50" width="50"/>
                    treehouse
                </a>    
            </h6>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item current">
                        <a class="nav-link active" href="/courses">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/techdegree">Techdegree</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link active" href="/teams">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active button" href="#">Free trial</a>
                    </li>
                    <!--<a class="btn btn-secondary">Free trial</a>-->
                </ul>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('content') ?>
    
</body>
<script src="/assets/plugins/scripts/jquery3.6.js"></script>
<script src="/assets/plugins/scripts/main.js"></script>
</html>
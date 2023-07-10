<?php
    require_once __DIR__ . "/Lib/config.php"; 
    require_once __DIR__ . "/Lib/pdo.php"; 
    require_once __DIR__ . "/Lib/menu.php"; 
    require_once __DIR__ . "/templates/header.php";
?>


<body>
    <div class="container px-4 py-5">
        <h1 class="pb-2 border-bottom">Nos Services</h1>

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">Découvrez tous nos services !</h2>
            <p class="text-body-secondary">Pour prendre rendez-vous et connaitres nos tarif merci de remplir notre formulaire afin d'etre recontacter.</p>
            <a href="Formulaire.php" class="btn btn-danger btn-lg px-4 me-sm-3">Formulaire</a>
        </div>

        <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-4">
            <div class="col d-flex flex-column gap-2">
                <div class="bi bi-clipboard-pulse d-inline-flex align-items-center justify-content-center text-bg-danger fs-1 rounded-3">
                </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">Entretien de votre véhicule</h4>
                <p class="text-body-secondary">Diagnostique, vidanges, filtres à particules</p>
            </div>

            <div class="col d-flex flex-column gap-2">
                <div class= "bi bi-fan feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-danger fs-1 rounded-3">
                </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">Pneumatique</h4>
                <p class="text-body-secondary">Pneumatique tous véhicules, équilibrages</p>
            </div>

            <div class="col d-flex flex-column gap-2">
                <div class="feature-icon-small bi bi-car-front-fill d-inline-flex align-items-center justify-content-center text-bg-danger fs-1 rounded-3">
                </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">Carosserie</h4>
                <p class="text-body-secondary">Pour refaire peau neuve</p>
            </div>

            <div class="col d-flex flex-column gap-2">
                <div class="bi bi-wrench feature-icon-small d-inline-flex justify-content-center text-bg-danger fs-1 rounded-3">
                </svg>
                </div>
                <h4 class="fw-semibold mb-0 text-body-emphasis">Mécanique</h4>
                <p class="text-body-secondary">Faites confiances a nos expert</p>
            </div>
            </div>
        </div>
        </div>
    </div>
</body>

<?php require_once __DIR__ . "/templates/footer.php"; 
?>
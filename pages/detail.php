<?php 
include '../common/header.php'; 
?>

<div class="container py-5">
    <div class="row mb-4 text-center">
        <div class="col">
            <h1 class="display-4 fw-bold">Bulbizarre <span class="text-secondary">N° 0001</span></h1>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-12 col-lg-6">
            <div class="rounded-3 bg-light p-5 text-center shadow-sm mb-4">
                <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png" class="img-fluid" alt="Bulbizarre" style="max-height: 400px;">
            </div>

            <div class="card border-0 bg-secondary bg-opacity-10 p-4 rounded-4">
    <h5 class="fw-bold mb-4">Stats de base</h5>
    
    <div class="d-flex justify-content-between align-items-end" style="height: 200px;">
        
        <div class="text-center h-100 d-flex flex-column justify-content-end align-items-center" style="width: 15%;">
            <div class="progress d-flex flex-column-reverse" style="width: 25px; height: 150px; background-color: #e9ecef;">
                <div class="progress-bar bg-primary" role="progressbar" style="height: 45%; width: 100%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="fw-bold d-block mt-2" style="font-size: 0.7rem;">PV</small>
        </div>

        <div class="text-center h-100 d-flex flex-column justify-content-end align-items-center" style="width: 15%;">
            <div class="progress d-flex flex-column-reverse" style="width: 25px; height: 150px; background-color: #e9ecef;">
                <div class="progress-bar bg-primary" role="progressbar" style="height: 49%; width: 100%;" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="fw-bold d-block mt-2" style="font-size: 0.7rem;">Attaque</small>
        </div>

        <div class="text-center h-100 d-flex flex-column justify-content-end align-items-center" style="width: 15%;">
            <div class="progress d-flex flex-column-reverse" style="width: 25px; height: 150px; background-color: #e9ecef;">
                <div class="progress-bar bg-primary" role="progressbar" style="height: 49%; width: 100%;" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="fw-bold d-block mt-2" style="font-size: 0.7rem;">Défense</small>
        </div>

        <div class="text-center h-100 d-flex flex-column justify-content-end align-items-center" style="width: 15%;">
            <div class="progress d-flex flex-column-reverse" style="width: 25px; height: 150px; background-color: #e9ecef;">
                <div class="progress-bar bg-primary" role="progressbar" style="height: 65%; width: 100%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="fw-bold d-block mt-2" style="font-size: 0.6rem;">Att. Spé.</small>
        </div>

        <div class="text-center h-100 d-flex flex-column justify-content-end align-items-center" style="width: 15%;">
            <div class="progress d-flex flex-column-reverse" style="width: 25px; height: 150px; background-color: #e9ecef;">
                <div class="progress-bar bg-primary" role="progressbar" style="height: 65%; width: 100%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="fw-bold d-block mt-2" style="font-size: 0.6rem;">Déf. Spé.</small>
        </div>

        <div class="text-center h-100 d-flex flex-column justify-content-end align-items-center" style="width: 15%;">
            <div class="progress d-flex flex-column-reverse" style="width: 25px; height: 150px; background-color: #e9ecef;">
                <div class="progress-bar bg-primary" role="progressbar" style="height: 45%; width: 100%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="fw-bold d-block mt-2" style="font-size: 0.7rem;">Vitesse</small>
        </div>
        
    </div>
</div>

        </div>

        <div class="col-12 col-lg-6">
            <p class="fs-5 mb-4">
                Au début de sa vie, il se nourrit des nutriments accumulés dans la graine sur son dos. Cela lui permet de grandir.
            </p>

            <div class="card border-0 bg-info bg-opacity-75 text-white p-4 rounded-4 mb-4 shadow-sm">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="d-block fw-bold opacity-75">Taille</label>
                        <span class="fs-4">0,7 m</span>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="d-block fw-bold opacity-75">Poids</label>
                        <span class="fs-4">6,9 kg</span>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold mb-3">Type</h5>
                <span class="badge rounded-1 px-4 py-2 me-2" style="background-color: #9bcc50; color: #000; font-size: 1rem;">Plante</span>
                <span class="badge rounded-1 px-4 py-2" style="background-color: #b97fc9; font-size: 1rem;">Poison</span>
            </div>
            
            <a href="pokedex.php" class="btn btn-warning fw-bold px-4 py-2 mt-3 shadow-sm">Retour au Pokédex</a>
        </div>
    </div>
</div>


<?php 
include '../common/footer.php'; 
?>
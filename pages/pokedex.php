<?php 
include '../common/header.php'; 
?>



<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
    <div class="col">
        <a href="detail.php?id=1" class="text-decoration-none text-dark">
            <div class="card h-100 border-0 bg-transparent">
                <div class="rounded-3 bg-light p-4 mb-2 shadow-sm text-center">
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png" class="img-fluid" alt="Bulbizarre" style="max-height: 180px;">
                </div>
                
                <div class="card-body p-1">
                    <small class="text-secondary fw-bold">N° 0001</small>
                    <h4 class="card-title fw-bold text-dark mt-1">Bulbizarre</h4>
                    
                    <div class="mt-2">
                        <span class="badge rounded-1 px-3 py-2" style="background-color: #9bcc50; color: #000;">Plante</span>
                        <span class="badge rounded-1 px-3 py-2" style="background-color: #b97fc9;">Poison</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<?php 
include '../common/footer.php'; 
?>
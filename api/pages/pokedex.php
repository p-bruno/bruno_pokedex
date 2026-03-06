<?php
require __DIR__ . '/../config/database.php'; // Recupère la connexion à la BDD

// Requête pour récupérer les Pokémon et leurs types groupés
$query = "SELECT p.pokemon_id, p.pokemon_nom, p.pokemon_img, 
          GROUP_CONCAT(t.type_nom SEPARATOR ',') AS types_list
          FROM pokemon p
          LEFT JOIN assoc_pokemon_type apt ON p.pokemon_id = apt.pokemon_id
          LEFT JOIN type t ON apt.type_id = t.type_id
          GROUP BY p.pokemon_id
          ORDER BY p.pokemon_id ASC";

$stmt = $pdo->prepare($query);
$stmt->execute();
$pokemons = $stmt->fetchAll();

include '../common/header.php'; 
?>



<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
    <?php foreach ($pokemons as $pokemon): ?>
        <div class="col">
            <a href="detail.php?id=<?= $pokemon['pokemon_id'] ?>" class="text-decoration-none text-dark">
                <div class="card h-100 border-0 bg-transparent">
                    
                    <div class="rounded-3 bg-light p-4 mb-2 shadow-sm text-center">
                        <img src="<?= $pokemon['pokemon_img'] ?>" class="img-fluid" alt="<?= $pokemon['pokemon_nom'] ?>" style="max-height: 180px;">
                    </div>
                    
                    <div class="card-body p-1">
                        <small class="text-secondary fw-bold">N° <?= str_pad($pokemon['pokemon_id'], 4, '0', STR_PAD_LEFT) ?></small>
                        
                        <h4 class="card-title fw-bold text-dark mt-1"><?= $pokemon['pokemon_nom'] ?></h4>
                        
                        <div class="mt-2">
                            <?php 
                            $types = explode(',', $pokemon['types_list']);
                            foreach ($types as $type): 
                            ?>
                                <span class="badge rounded-1 px-3 py-2 me-1 bg-secondary text-white">
                                    <?= trim($type) ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
</div>

<?php 
include '../common/footer.php'; 
?>
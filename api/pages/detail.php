<?php
require __DIR__ . '/../config/database.php'; // Recupère la connexion à la BDD

// 1. Récupération de l'ID depuis l'URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$query = "SELECT 
                p.pokemon_id, p.pokemon_nom, p.pokemon_img, p.pokemon_description, 
                p.pokemon_taille, p.pokemon_poids,
                s.stats_pv, s.stats_attaque, s.stats_defense, 
                s.stats_attaque_speciale, s.stats_defense_speciale, s.stats_vitesse,
                GROUP_CONCAT(t.type_nom SEPARATOR ',') AS types_list
              FROM pokemon p
              JOIN stats s ON p.stats_id = s.stats_id
              JOIN assoc_pokemon_type apt ON p.pokemon_id = apt.pokemon_id
              JOIN type t ON apt.type_id = t.type_id
              WHERE p.pokemon_id = :id
              GROUP BY p.pokemon_id";

$stmt = $pdo->prepare($query);
$stmt->execute(['id' => $id]);
$pokemon = $stmt->fetch();


include '../common/header.php'; 
?>

<div class="container py-5">
    <div class="row mb-4 text-center">
        <div class="col">
            <h1 class="display-4 fw-bold">
                <?= htmlspecialchars($pokemon['pokemon_nom']) ?> 
                <span class="text-secondary">N° <?= str_pad($pokemon['pokemon_id'], 4, '0', STR_PAD_LEFT) ?></span>
            </h1>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-12 col-lg-6">
            <div class="rounded-3 bg-light p-5 text-center shadow-sm mb-4">
                <img src="<?= $pokemon['pokemon_img'] ?>" class="img-fluid" alt="<?= $pokemon['pokemon_nom'] ?>" style="max-height: 400px;">
            </div>

            <div class="card border-0 bg-secondary bg-opacity-10 p-4 rounded-4">
                <h5 class="fw-bold mb-4">Stats de base</h5>
                <div class="d-flex justify-content-between align-items-end px-2" style="height: 200px;">
                    
                    <?php 
                    // Liste des stats à afficher (doit correspondre aux colonnes de votre BDD)
                    $stats = [
                        'PV' => $pokemon['stats_pv'],
                        'Attaque' => $pokemon['stats_attaque'],
                        'Défense' => $pokemon['stats_defense'],
                        'Att. Spé.' => $pokemon['stats_attaque_speciale'],
                        'Déf. Spé.' => $pokemon['stats_defense_speciale'],
                        'Vitesse' => $pokemon['stats_vitesse']
                    ];

                    foreach ($stats as $label => $value): 
                        // Calcul du % sur une base de 15
                        // Si $value vaut 15, $percent vaudra 100%
                        $percent = ($value / 15) * 100;
                    ?>
                    <div class="text-center h-100 d-flex flex-column justify-content-end align-items-center" style="width: 15%;">
                        <div class="progress d-flex flex-column-reverse" style="width: 25px; height: 150px; background-color: #e9ecef;">
                            <div class="progress-bar bg-primary shadow-sm" role="progressbar" 
                                 style="height: <?= $percent ?>%; width: 100%;" 
                                 aria-valuenow="<?= $value ?>" aria-valuemin="0" aria-valuemax="255">
                            </div>
                        </div>
                        <small class="fw-bold d-block mt-2" style="font-size: 0.65rem;"><?= $label ?></small>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <p class="fs-5 mb-4">
                <?= htmlspecialchars($pokemon['pokemon_description'] ?? "Aucune description disponible pour ce Pokémon.") ?>
            </p>

            <div class="card border-0 bg-info bg-opacity-75 text-white p-4 rounded-4 mb-4 shadow-sm">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="d-block fw-bold opacity-75">Taille</label>
                        <span class="fs-4"><?= $pokemon['pokemon_taille'] ?> m</span>
                    </div>
                    <div class="col-6 mb-3">
                        <label class="d-block fw-bold opacity-75">Poids</label>
                        <span class="fs-4"><?= $pokemon['pokemon_poids'] ?> kg</span>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold mb-3">Type</h5>
                <?php 
                $types = explode(',', $pokemon['types_list']);
                foreach ($types as $type): ?>
                    <span class="badge rounded-1 px-4 py-2 me-2 bg-secondary" style="font-size: 1rem;">
                        <?= trim($type) ?>
                    </span>
                <?php endforeach; ?>
            </div>
            
            <a href="/pokedex.php" class="btn btn-warning fw-bold px-4 py-2 mt-3 shadow-sm">Retour au Pokédex</a>
        </div>
    </div>
</div>

<?php 
include '../common/footer.php'; 
?>
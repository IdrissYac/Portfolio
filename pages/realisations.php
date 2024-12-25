<?php
require 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

try {
    $contenu = Yaml::parseFile('data/realisations.yaml');
} catch (Exception $e) {
    echo 'Erreur lors du chargement du fichier YAML: ',  $e->getMessage();
    exit;
}

$utilisateur = $contenu['utilisateur'] ?? [];
$competences = $utilisateur['competences'] ?? [];
$realisations = $utilisateur['realisations'] ?? [];
?>

<section id="page3" class="page-realisations">
    <div class="container-realisations">
        <div class="circleR circle-top-realisations"></div>
        <div class="circleR circle-bottom-realisations"></div>

        <h1 class="realisations-title">RÉALISATIONS</h1>

        <div class="projects">
            <?php foreach ($realisations as $realisation): ?>
                <div class="project">
                    <a href="./assets/document/<?php echo htmlspecialchars($realisation['document']); ?>" target="_blank">
                        <div class="project-image-container">
                            <img src="./assets/<?php echo htmlspecialchars($realisation['illustration']); ?>" alt="<?php echo htmlspecialchars($realisation['titre']); ?>" class="project-image">
                            <div class="project-overlay">
                                <p class="project-title"><?php echo htmlspecialchars($realisation['titre']); ?></p>
                            </div>
                        </div>
                    </a>
                    <p class="project-description"><?php echo htmlspecialchars($realisation['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

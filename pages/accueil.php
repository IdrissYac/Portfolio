<section id="accueil">
        <div class="accueil">
            <?php
            require_once("./yaml/yaml.php");

            // Chargez les données du fichier YAML
            $data = yaml_parse_file('./data/accueil.yaml');

            // Affichez le contenu de $data pour vérifier
          

            if ($data) {
                echo "<p>" . htmlspecialchars($data["prenom"]) . " " . htmlspecialchars($data["nom"]) . "</p>";
                echo "<p>" . htmlspecialchars($data["accroche"]) . "</p>";
                echo "<p>" . htmlspecialchars($data["presentation"]) . "</p>";
                echo "<img src='./images/" . htmlspecialchars($data["photo"]) . "' alt='photo'>";
            } else {
                echo "<p>Les données ne sont pas disponibles.</p>";
            }
            ?>
        </div>
    </section>
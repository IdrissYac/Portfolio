<section id="formation">
        <div class="accueil">
            <?php
            require_once("yaml/yaml.php");

            // Chargez les données du fichier YAML
            $data = yaml_parse_file('data/formation.yaml');

            // Affichez le contenu de $data pour vérifier

// Affichage des informations
foreach ($data as $formation) {
    echo "Nom : " . $formation['nom'] . "<br>";
    echo "Établissement : " . $formation['etablissement'] . "<br>";
    echo "Date de début : " . $formation['date_debut'] . "<br>";
    echo "Date de fin : " . $formation['date_fin'] . "<br>";
    echo "Lieu : " . $formation['lieu'] . "<br>";
    echo "Contenu : " . (isset($formation['contenu']) ? $formation['contenu'] : 'Non précisé') . "<br><br>";
}
?>
        </div>
    </section>

<section id="competences">
        <div class="accueil">
            <?php
            require_once("yaml/yaml.php");

            // Chargez les données du fichier YAML
            $data = yaml_parse_file('data/competences.yaml');

            // Affichez le contenu de $data pour vérifier

// Affichage des informations
foreach ($data as $domaine) {
    echo $domaine["domaine"]. "<br>";
    foreach ($domaine["competences"] as $competence){
        echo "nom : " . $competence['nom'] . "<br>";
        echo "Niveau : " . $competence['niveau'] . "<br>";  
    }
    
    /*
    echo "Nom : " . $competences['nom'] . "<br>";
    echo "Niveau : " . $competences['niveau'] . "<br>";
    echo "Date de début : " . $competences['date_debut'] . "<br>";
    echo "Date de fin : " . $competences['date_fin'] . "<br>";
    echo "Lieu : " . $competences['lieu'] . "<br>";
    */
}
?>
        </div>
    </section>
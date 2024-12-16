<section id="contact">
        <div class="accueil">
            <?php
            require_once("yaml/yaml.php");

            // Chargez les données du fichier YAML
            $data = yaml_parse_file('data/contact.yaml');

            // Affichez le contenu de $data pour vérifier

// Affichage des informations
foreach ($data as $contact) {
    echo "Nom : " . $contact['nom'] . "<br>";
    echo "email : " . $contact['email'] . "<br>";
    echo "objet : " . $contact['objet'] . "<br>";
    echo "message : " . $contact['message'] . "<br>";
}
?>
        </div>
    </section>
<?php get_header(); 
/**
Template name: contact
 */
?>
    <div class="page-content">
        <div class="page-content__left">
            <div class="home-content__title stickier" onClick="document.location.href='home'">Antiquaire V1</div>
            <div class="page-content__title">Nous contacter</div>
            <div class="contact-form__wrapper">
                <div>Explications sur le formutaire de contact ici</div>
                <?php
// S'il y des données de postées
if($_POST) {
  // Code PHP pour traiter l'envoi de l'email

    // $nombreErreur = 0; // Variable qui compte le nombre d'erreur

    // // Définit toutes les erreurs possibles
    // if (!isset($_POST['email'])) { // Si la variable "email" du formulaire n'existe pas (il y a un problème)
    //     $nombreErreur++; // On incrémente la variable qui compte les erreurs
    //     $erreur1 = '<p>Il y a un problème avec la variable "email".</p>';
    // } else { // Sinon, cela signifie que la variable existe (c'est normal)
    //     if (empty($_POST['email'])) { // Si la variable est vide
    //     $nombreErreur++; // On incrémente la variable qui compte les erreurs
    //     $erreur2 = '<p>Vous avez oublié de donner votre email.</p>';
    //     }
    // }

    // if (!isset($_POST['message'])) {
    //     $nombreErreur++;
    //     $erreur4 = '<p>Il y a un problème avec le "message".</p>';
    // } else {
    //     if (empty($_POST['message'])) {
    //     $nombreErreur++;
    //     $erreur5 = '<p>Il faut remplir le message.</p>';
    //     }
    // }

    // if (!isset($_POST['name'])) {
    //     $nombreErreur++;
    //     $erreur6 = '<p>Il y a un problème avec le "nom".</p>';
    // } else {
    //     if (empty($_POST['name'])) {
    //     $nombreErreur++;
    //     $erreur7= '<p>Il faut renseigner votre nom.</p>';
    //     }
    // }

//   /* GET File Variables */ 
// $tmpName1 = $_FILES['attachment1']['tmp_name']; 
// $fileType1 = $_FILES['attachment1']['type']; 
// $fileName1 = $_FILES['attachment1']['name']; 

// $tmpName2 = $_FILES['attachment2']['tmp_name']; 
// $fileType2 = $_FILES['attachment2']['type']; 
// $fileName2 = $_FILES['attachment2']['name']; 

// $tmpName3 = $_FILES['attachment3']['tmp_name']; 
// $fileType3 = $_FILES['attachment3']['type']; 
// $fileName3 = $_FILES['attachment3']['name']; 


//   if ($nombreErreur==0) { // S'il n'y a pas d'erreur
//     // Récupération des variables et sécurisation des données
//     $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
//     $phone = htmlentities($_POST['phone']);
//     $emain = htmlentities($_POST['email']);
//     $adress = htmlentities($_POST['adress']);
//     $code = htmlentities($_POST['code']);
//     $city = htmlentities($_POST['city']);
//     $message = htmlentities($_POST['message']);

//     // Variables concernant l'email
//     $destinataire = 'alexis.raimbault.web@gmail.com'; // Adresse email du webmaster
//     $sujet = 'Titre du message'; // Titre de l'email
//     $contenu = '<html><head><title>Titre du message</title></head><body>';
//     $contenu .= '<p>Bonjour, vous avez recu un message depuis votre site web.</p>';
//     $contenu .= '<p><strong>nom</strong>: '.$nom.'</p>';
//     $contenu .= '<p><strong>phone</strong>: '.$phone.'</p>';
//     $contenu .= '<p><strong>email</strong>: '.$email.'</p>';
//     $contenu .= '<p><strong>adress</strong>: '.$adress.'</p>';
//     $contenu .= '<p><strong>code</strong>: '.$code.'</p>';
//     $contenu .= '<p><strong>city</strong>: '.$city.'</p>';
//     $contenu .= '<p><strong>message</strong>: '.$message.'</p>';
//     $contenu .= '</body></html>'; // Contenu du message de l'email

//     // generate a random string to be used as the boundary marker
//     $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

//     // now we'll build the message headers
//     $headers = "From: $from\r\n" .
//     "MIME-Version: 1.0\r\n" .
//     "Content-Type: multipart/mixed;\r\n" .
//     " boundary=\"{$mime_boundary}\"";

//     // next, we'll build the invisible portion of the message body
//     // note that we insert two dashes in front of the MIME boundary 
//     // when we use it
//     $contenu = "This is a multi-part message in MIME format.\n\n" .
//     "--{$mime_boundary}\n" .
//     "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
//     "Content-Transfer-Encoding: 7bit\n\n" .
//     $contenu . "\n\n";

//     // now we'll process our uploaded files
//     foreach($_FILES as $userfile){
//     // store the file information to variables for easier access
//     $tmp_name = $userfile['tmp_name'];
//     $type = $userfile['type'];
//     $name = $userfile['name'];
//     $size = $userfile['size'];

//     // if the upload succeded, the file will exist
//     if (file_exists($tmp_name)){

//         // check to make sure that it is an uploaded file and not a system file
//         if(is_uploaded_file($tmp_name)){

//             // open the file for a binary read
//             $file = fopen($tmp_name,'rb');

//             // read the file content into a variable
//             $data = fread($file,filesize($tmp_name));

//             // close the file
//             fclose($file);

//             // now we encode it and split it into acceptable length lines
//             $data = chunk_split(base64_encode($data));
//         }

//         // now we'll insert a boundary to indicate we're starting the attachment
//         // we have to specify the content type, file name, and disposition as
//         // an attachment, then add the file content.
//         // NOTE: we don't set another boundary to indicate that the end of the 
//         // file has been reached here. we only want one boundary between each file
//         // we'll add the final one after the loop finishes.
//         $contenu .= "--{$mime_boundary}\n" .
//             "Content-Type: {$type};\n" .
//             " name=\"{$name}\"\n" .
//             "Content-Disposition: attachment;\n" .
//             " filename=\"{$fileatt_name}\"\n" .
//             "Content-Transfer-Encoding: base64\n\n" .
//         $data . "\n\n";
//     }
//     }
//     // here's our closing mime boundary that indicates the last of the message
//     $contenu.="--{$mime_boundary}--\n";
//     // now we just send the message

//     @mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email

//     echo '<h2>Message envoyé!</h2>'; // Afficher un message pour indiquer que le message a été envoyé
//   } else { // S'il y a un moins une erreur
//     echo '<div style="border:1px solid #ff0000; padding:5px;">';
//     echo '<p style="color:#ff0000;">Désolé, il y a eu '.$nombreErreur.' erreur(s). Voici le détail des erreurs:</p>';
//     if (isset($erreur1)) echo '<p>'.$erreur1.'</p>';
//     if (isset($erreur2)) echo '<p>'.$erreur2.'</p>';
//     if (isset($erreur3)) echo '<p>'.$erreur3.'</p>';
//     if (isset($erreur4)) echo '<p>'.$erreur4.'</p>';
//     if (isset($erreur5)) echo '<p>'.$erreur5.'</p>';
// 	if (isset($erreur6)) echo '<p>'.$erreur6.'</p>';
// 	if (isset($erreur7)) echo '<p>'.$erreur7.'</p>';
//     echo '</div>';
//   }
        for($i=0; $i < count($_FILES['csv_file']['name']); $i++){
            $ftype[] = $_FILES['csv_file']['type'][$i];
            $fname[] = $_FILES['csv_file']['name'][$i];
        }
        // array with filenames to be sent as attachment
        $files = $fname;

        // email fields: to, from, subject, and so on
        $to = "alexis.raimbault.web@gmail.com";
        $from = "27raimbault.alexis@gmail.com"; 
        $subject ="My subject"; 
        $message = "My message";
        $headers = "From: $from";

        // boundary 
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

        // headers for attachment 
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

        // multipart boundary 
        $message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
        $message .= "--{$mime_boundary}\n";

        // preparing attachments
        for($x=0;$x<count($files);$x++){
            if(!empty($files[$x])) {
                $file = fopen($files[$x],"rb");
                $data = fread($file,filesize($files[$x]));
                fclose($file);
                $data = chunk_split(base64_encode($data));
                $message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
                "Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
                "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                $message .= "--{$mime_boundary}\n";
            }
        }

        // send
        $ok = @mail($to, $subject, $message, $headers); 
        if ($ok) { 
            echo "<p>mail sent to $to!</p>"; 
        } else { 
            echo "<p>mail could not be sent!</p>"; 
        } 
    }
?>
                <form class="contact-form" action="#" method="POST" enctype="multipart/form-data">
                    <input class="contact-form__item" type="text" name="name" placeholder="Nom *"/>
                    <input class="contact-form__item" type="text" name="phone" placeholder="Téléphone"/>
                    <input class="contact-form__item" type="text" name="email" placeholder="Email *"/>
                    <input class="contact-form__item" type="text" name="adress" placeholder="Adresse"/>
                    <div class="contact-form__item-group">
                        <input class="contact-form__item subitem" type="text" name="code" placeholder="Code postal"/>
                        <input class="contact-form__item subitem" type="text" name="city" placeholder="Ville"/>
                    </div>
                    <textarea class="contact-form__item" type="text" name="message" placeholder="Message *"></textarea>
                    <input name="csv_file[]" type="file">
                    <input name="csv_file[]" type="file">
                    <input name="csv_file[]" type="file">
                    <input class = "form_btn" type="submit" name="submit" value="Envoyer"  />
                </form>
            </div>
            <div class="bottom-line"></div>
        </div>
        <div class="page-content__right">
            <div class="page-content__right-sub">
                <div class="page-content__right__infos-title">Adresse</div>
                <div class="page-content__right__infos-content">20, rue de la félicité</div>
                <div class="page-content__right__infos-content">75017</div>
                <div class="page-content__right__infos-content">Paris</div>
                <div class="page-content__right__infos-title">Horaires d'ouverture</div>
                <div class="page-content__right__infos-content">Du lundi au samedi</div>
                <div class="page-content__right__infos-content">9h - 19h</div>
                <div class="page-content__right__infos-content">Fermé le dimanche</div>
                <div class="page-content__right__infos-title">coordonnées</div>
                <div class="page-content__right__infos-content">alexis.raimbault.web@gmail.com</div>
                <div class="page-content__right__infos-content">06 21 10 09 51</div>
                
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
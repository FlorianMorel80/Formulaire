
<!-- // Afficher les données  -->
  <h2 class="resum text-center text-light pt-2">RESUME DE VOTRE INSCRIPTION</h2>
  <h2 class="text-center text-light pt-2">Identité</h2 class="text-center text-light pt-2"><hr>
  <p class="text-light"><?= '<strong>Nom :</strong> ' . $inputName;?></p>
  <p class="text-light"><?= '<strong>Prénom :</strong> ' . $inputFirstName;?></p>
  <p class="text-light"><?= '<strong>Date de naissance :</strong> ' . $inputDateOfBirth;?></p>
  <p class="text-light"><?= '<strong>Pays de naissance :</strong> ' . $inputState;?></p>
  <p class="text-light"><?= '<strong>Votre nationalité :</strong> ' . $inputNationality;?></p>

  <hr><h2 class="text-center text-light pt-2">Coordonnées</h2 class="text-center text-light pt-2">
  <p class="text-light"><?= '<strong>Votre adresse </strong>: ' . $inputAddress;?></p>
  <p class="text-light"><?= '<strong>Code Postal :</strong> ' . $inputZip;?></p>
  <p class="text-light"><?= '<strong>Ville :</strong> ' . $inputCity;?></p>

  <p class="text-light"><?= '<strong>Téléphone :</strong> ' . $inputPhone;?></p>
  <p class="text-light"><?= '<strong>Mail :</strong> ' . $inputEmail;?></p>
  <p class="text-light"><?= '<strong>Identifiant Pôle Emploi :</strong> ' . $inputIDPoleEmploi;?></p>

  <hr><h2 class="text-center text-light pt-2">Parlez-nous de vous </h2 class="text-center text-light pt-2"> 
  <p class="text-light"><?= '<strong>Votre lien Code Academy :</strong> ' . $inputURL;?></p>
  <p class="text-light"><?= '<strong>Nombre de badge :</strong> ' . $inputBadge;?></p>
  <p class="text-light"><?= '<strong>Diplôme :</strong> ' . $inputDiplome;?></p>
  <p class="text-light"><?= '<strong>Si vous étiez un super heros/une super heroïne, qui seriez-vous et pourquoi ? :</strong> ' . $inputSuperHero;?></p>
  <p class="text-light"><?= '<strong>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique :</strong> ' . $inputHack;?></p>
  <p class="text-light"><?= '<strong>Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ? :</strong> ' . $inputXP;?></p>

  <p class="text-light font-bold text-center">Les informations sont-elles correctes ?</br/>
  <button class="btn btn-secondary btn-md"type="submit">🡸 Modifier ses informations</button>
  <button class="btn btn-primary btn-md" type="submit">Envoyer les informations 🡺 </button></p>
  
  
  <!-- <?= include('form/form.php'); ?> -->


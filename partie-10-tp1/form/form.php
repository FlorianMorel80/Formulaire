
<div class="main">
<h1 class="titleForm text-center  pt-2" id="glitch" data-text="VotrePlusBeauFormulaire.com">VotrePlusBeauFormulaire.com</h1></div>
<h2 class="titleForm text-center  pt-2"> Vous aussi créez le formulaire de vos rêves</h2>


  <form action="" method = "POST" class="p-5 text-center align-content-center">
  <div class="row">

      <!-- NAME -->
      <div class="form-inline col-md-6">
        <label for="inputName">Nom</label>
        <input 
          type="text"
          class="form-control"
          value="<?= isset($inputName) ? $inputName : '' ?>"
          name="inputName"
          pattern="[A-Za-z-éèêëàâäôöûüùç'. ]+"
          title ="Le champs ne doit comporter que des lettres et des espaces"
          placeholder="Votre nom"
          required>
        <p class="text-danger"><?= $error['inputName'] ?? ''; ?></p>
      </div>

      <!-- FIRSTNAME -->
      <div class="form-inline col-md-6">
        <label for="inputFirstName">Prénom</label>
        <input
          type="text"
          class="form-control"
          value="<?= isset($inputFirstName) ? $inputFirstName : '' ?>"
          name="inputFirstName"
          pattern="[A-Za-z-éèêëàâäôöûüùç'. ]*"
          title ="Le champs ne doit comporter que des lettres et des espaces"
          placeholder="Votre prénom"
          required>
        <p class="text-danger"><?= $error['inputFirstName'] ?? ''; ?></p>
      </div>
      </div>
      
      <div class="row">

      <!-- DATE OF BIRTH -->
      <div class="form-inline col-md-4">
        <label for="inputDateOfBirth">Votre date de naissance</label>
        <input
          type="date"
          class="form-control"
          value="<?= isset($_POST['inputDateOfBirth']) ? $_POST['inputDateOfBirth'] : '' ?>"
          name="inputDateOfBirth"
          pattern="([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}"
          minlength="8" maxlength="8"
          title ="Le champs doit être remplit sous le format JJ/MM/AAAA"
          placeholder="01/01/1994"
          required>
        <p class="text-danger"><?= $error['inputDateOfBirth'] ?? ''; ?></p>
      </div> 
      
      <!-- STATE -->
      <div class="form-group col-md-4">
        <label for="inputState">Pays de naissance</label>
        <select 
          name="inputState"
          class="form-control"
          required>
          <option selected></option>
                <optgroup label="Afrique">
                  <option value="afriqueDuSud">Afrique Du Sud</option>
                  <option value="algerie">Algérie</option>
                  <option value="angola">Angola</option>
                  <option value="benin">Bénin</option>
                  <option value="botswana">Botswana</option>
                  <option value="burkina">Burkina</option>
                  <option value="burundi">Burundi</option>
                  <option value="cameroun">Cameroun</option>
                  <option value="capVert">Cap-Vert</option>
                  <option value="republiqueCentre-Africaine">République Centre-Africaine</option>
                  <option value="comores">Comores</option>
                  <option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
                  <option value="congo">Congo</option>
                  <option value="coteIvoire">Côte d'Ivoire</option>
                  <option value="djibouti">Djibouti</option>
                  <option value="egypte">Égypte</option>
                  <option value="ethiopie">Éthiopie</option>
                  <option value="erythrée">Érythrée</option>
                  <option value="gabon">Gabon</option>
                  <option value="gambie">Gambie</option>
                  <option value="ghana">Ghana</option>
                  <option value="guinee">Guinée</option>
                  <option value="guinee-Bisseau">Guinée-Bisseau</option>
                  <option value="guineeEquatoriale">Guinée Équatoriale</option>
                  <option value="kenya">Kenya</option>
                  <option value="lesotho">Lesotho</option>
                  <option value="liberia">Liberia</option>
                  <option value="libye">Libye</option>
                  <option value="madagascar">Madagascar</option>
                  <option value="malawi">Malawi</option>
                  <option value="mali">Mali</option>
                  <option value="maroc">Maroc</option>
                  <option value="maurice">Maurice</option>
                  <option value="mauritanie">Mauritanie</option>
                  <option value="mozambique">Mozambique</option>
                  <option value="namibie">Namibie</option>
                  <option value="niger">Niger</option>
                  <option value="nigeria">Nigeria</option>
                  <option value="ouganda">Ouganda</option>
                  <option value="rwanda">Rwanda</option>
                  <option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
                  <option value="senegal">Séngal</option>
                  <option value="seychelles">Seychelles</option>
                  <option value="sierra">Sierra</option>
                  <option value="somalie">Somalie</option>
                  <option value="soudan">Soudan</option>
                  <option value="swaziland">Swaziland</option>
                  <option value="tanzanie">Tanzanie</option>
                  <option value="tchad">Tchad</option>
                  <option value="togo">Togo</option>
                  <option value="tunisie">Tunisie</option>
                  <option value="zambie">Zambie</option>
                  <option value="zimbabwe">Zimbabwe</option>
                </optgroup>
                <optgroup label="Amérique">
                  <option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
                  <option value="argentine">Argentine</option>
                  <option value="bahamas">Bahamas</option>
                  <option value="barbade">Barbade</option>
                  <option value="belize">Belize</option>
                  <option value="bolivie">Bolivie</option>
                  <option value="bresil">Brésil</option>
                  <option value="canada">Canada</option>
                  <option value="chili">Chili</option>
                  <option value="colombie">Colombie</option>
                  <option value="costaRica">Costa Rica</option>
                  <option value="cuba">Cuba</option>
                  <option value="republiqueDominicaine">République Dominicaine</option>
                  <option value="dominique">Dominique</option>
                  <option value="equateur">Équateur</option>
                  <option value="etatsUnis">États Unis</option>
                  <option value="grenade">Grenade</option>
                  <option value="guatemala">Guatemala</option>
                  <option value="guyana">Guyana</option>
                  <option value="haiti">Haïti</option>
                  <option value="honduras">Honduras</option>
                  <option value="jamaique">Jamaïque</option>
                  <option value="mexique">Mexique</option>
                  <option value="nicaragua">Nicaragua</option>
                  <option value="panama">Panama</option>
                  <option value="paraguay">Paraguay</option>
                  <option value="perou">Pérou</option>
                  <option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
                  <option value="sainteLucie">Sainte-Lucie</option>
                  <option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
                  <option value="salvador">Salvador</option>
                  <option value="suriname">Suriname</option>
                  <option value="triniteEtTobago">Trinité-et-Tobago</option>
                  <option value="uruguay">Uruguay</option>
                  <option value="venezuela">Venezuela</option>
                </optgroup>
                <optgroup label="Asie">
                  <option value="afghanistan">Afghanistan</option>
                  <option value="arabieSaoudite">Arabie Saoudite</option>
                  <option value="armenie">Arménie</option>
                  <option value="azerbaidjan">Azerbaïdjan</option>
                  <option value="bahrein">Bahreïn</option>
                  <option value="bangladesh">Bangladesh</option>
                  <option value="bhoutan">Bhoutan</option>
                  <option value="birmanie">Birmanie</option>
                  <option value="brunei">Brunéi</option>
                  <option value="cambodge">Cambodge</option>
                  <option value="chine">Chine</option>
                  <option value="coreeDuSud">Corée Du Sud</option>
                  <option value="coreeDuNord">Corée Du Nord</option>
                  <option value="emiratsArabeUnis">Émirats Arabe Unis</option>
                  <option value="georgie">Géorgie</option>
                  <option value="inde">Inde</option>
                  <option value="indonesie">Indonésie</option>
                  <option value="iraq">Iraq</option>
                  <option value="iran">Iran</option>
                  <option value="israel">Israël</option>
                  <option value="japon">Japon</option>
                  <option value="jordanie">Jordanie</option>
                  <option value="kazakhstan">Kazakhstan</option>
                  <option value="kirghistan">Kirghistan</option>
                  <option value="koweit">Koweït</option>
                  <option value="laos">Laos</option>
                  <option value="liban">Liban</option>
                  <option value="malaisie">Malaisie</option>
                  <option value="maldives">Maldives</option>
                  <option value="mongolie">Mongolie</option>
                  <option value="nepal">Népal</option>
                  <option value="oman">Oman</option>
                  <option value="ouzbekistan">Ouzbékistan</option>
                  <option value="pakistan">Pakistan</option>
                  <option value="philippines">Philippines</option>
                  <option value="qatar">Qatar</option>
                  <option value="singapour">Singapour</option>
                  <option value="sriLanka">Sri Lanka</option>
                  <option value="syrie">Syrie</option>
                  <option value="tadjikistan">Tadjikistan</option>
                  <option value="taiwan">Taïwan</option>
                  <option value="thailande">Thaïlande</option>
                  <option value="timorOriental">Timor oriental</option>
                  <option value="turkmenistan">Turkménistan</option>
                  <option value="turquie">Turquie</option>
                  <option value="vietNam">Viêt Nam</option>
                  <option value="yemen">Yemen</option>
                </optgroup>
                <optgroup label="Europe">
                  <option value="allemagne">Allemagne</option>
                  <option value="albanie">Albanie</option>
                  <option value="andorre">Andorre</option>
                  <option value="autriche">Autriche</option>
                  <option value="bielorussie">Biélorussie</option>
                  <option value="belgique">Belgique</option>
                  <option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
                  <option value="bulgarie">Bulgarie</option>
                  <option value="croatie">Croatie</option>
                  <option value="danemark">Danemark</option>
                  <option value="espagne">Espagne</option>
                  <option value="estonie">Estonie</option>
                  <option value="finlande">Finlande</option>
                  <option value="france">France</option>
                  <option value="grece">Grèce</option>
                  <option value="hongrie">Hongrie</option>
                  <option value="irlande">Irlande</option>
                  <option value="islande">Islande</option>
                  <option value="italie">Italie</option>
                  <option value="lettonie">Lettonie</option>
                  <option value="liechtenstein">Liechtenstein</option>
                  <option value="lituanie">Lituanie</option>
                  <option value="luxembourg">Luxembourg</option>
                  <option value="exRepubliqueYougoslaveDeMacedoine">Ex-République Yougoslave de Macédoine</option>
                  <option value="malte">Malte</option>
                  <option value="moldavie">Moldavie</option>
                  <option value="monaco">Monaco</option>
                  <option value="norvege">Norvège</option>
                  <option value="paysBas">Pays-Bas</option>
                  <option value="pologne">Pologne</option>
                  <option value="portugal">Portugal</option>
                  <option value="roumanie">Roumanie</option>
                  <option value="royaumeUni">Royaume-Uni</option>
                  <option value="russie">Russie</option>
                  <option value="saintMarin">Saint-Marin</option>
                  <option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
                  <option value="slovaquie">Slovaquie</option>
                  <option value="slovenie">Slovénie</option>
                  <option value="suede">Suède</option>
                  <option value="suisse">Suisse</option>
                  <option value="republiqueTcheque">République Tchèque</option>
                  <option value="ukraine">Ukraine</option>
                  <option value="vatican">Vatican</option>
                </optgroup>
                <optgroup label="Océanie">
                  <option value="australie">Australie</option>
                  <option value="fidji">Fidji</option>
                  <option value="kiribati">Kiribati</option>
                  <option value="marshall">Marshall</option>
                  <option value="micronesie">Micronésie</option>
                  <option value="nauru">Nauru</option>
                  <option value="nouvelleZelande">Nouvelle-Zélande</option>
                  <option value="palaos">Palaos</option>
                  <option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
                  <option value="salomon">Salomon</option>
                  <option value="samoa">Samoa</option>
                  <option value="tonga">Tonga</option>
                  <option value="tuvalu">Tuvalu</option>
                  <option value="vanuatu">Vanuatu</option>
                </optgroup>
              </select>

        <p class="text-danger"><?= $error['inputState'] ?? ''; ?></p>
      </div>
      
      <!-- NATIONALITY -->
      <div class="form-group col-md-4">
        <label for="inputNationality">Nationalité</label>
        <input
          type="text"
          class="form-control"
          value="<?= isset($inputNationality) ? $inputNationality : '' ?>"
          name="inputNationality"
          pattern="([A-Za-z éèêëàâäôöûüç.-])+"
          title ="Le champs ne doit comporter que des lettres et des espaces"
          placeholder="Française"
          required>
        <p class="text-danger"><?= $error['inputNationality'] ?? ''; ?></p>
      </div>
      </div>
      
      <div class="row">

      <!-- ADDRESS -->
      <div class="form-group col-md-5">
        <label for="inputAddress">Adresse</label>
        <input
          type="text"
          class="form-control"
          value="<?= isset($inputAddress) ? $inputAddress : '' ?>"
          name="inputAddress"
          pattern="[0-9]{1,6}[A-Za-z0-9-éèêëàâäôöûüç .,-]+"
          title ="Le champs ne doit comporter que des lettres, des chiffres et des espaces"
          required>
        <p class="text-danger"><?= $error['inputAddress'] ?? ''; ?></p>
      </div>

      <!-- ZIP -->
      <div class="form-group col-md-3">
        <label for="inputZip">Code postal</label>
        <input
          type="text"
          maxlength="5"
          pattern="(([0-8][0-9])|(9[0-5]))[0-9]{3}"
          title="Ne doit contenir que des chiffres"
          class="form-control"
          value="<?= isset($inputZip) ? $inputZip : '' ?>"
          name="inputZip"
          required>
        <p class="text-danger"><?= $error['inputZip'] ?? ''; ?></p>
      </div>

      <!-- CITY -->
      <div class="form-group col-md-4">
        <label for="inputCity">Ville</label>
        <input 
          type="text" 
          class="form-control" 
          value="<?= isset($inputCity) ? $inputCity : '' ?>" 
          name="inputCity"  
          pattern="([A-Za-z éèêëàâäôöûüç .-])+" 
          title ="Le champs ne doit comporter que des lettres"
          required>
        <p class="text-danger"><?= $error['inputCity'] ?? ''; ?></p>
      </div>
      </div>
      
      <!-- PHONE -->
      <div class="row">
      <div class="form-group col-md-3">
        <label for="inputPhone">Téléphone</label>
        <input 
          type="text" 
          class="form-control" 
          maxlength="15" 
          value="<?= isset($inputPhone) ? $inputPhone : '' ?>" 
          name="inputPhone" 
          pattern="(\+[0-9]{1,3}[0-9]{8,12})|[0-9]{8,15}" 
          title ="Le champs ne doit comporter que des chiffres"
          required>
        <p class="text-danger"><?= $error['inputPhone'] ?? ''; ?></p>
      </div>

      <!-- EMAIL -->
      <div class="form-group col-md-5">
        <label for="inputEmail">Email</label>
        <input 
          type="email" 
          class="form-control" 
          value="<?= isset($inputEmail) ? $inputEmail : '' ?>" 
          name="inputEmail"
          pattern="[A-Za-z0-9._!#$%&’`*?^+{|}~-]+@[a-z0-9]+\.[a-z]{2,6}"
          title="Le format de l'email est invalide"
          placeholder="jojo@hotmail.fr"
          required>
        <p class="text-danger"><?= $error['inputEmail'] ?? ''; ?></p>
      </div>
      
      <!-- ID POLE EMPLOI -->
      <div class="form-group col-md-4">
          <label for="inputIDPoleEmploi">Numéro Pôle Emploi</label>
          <input
            type="text"
            class="form-control"
            maxlength="8"
            value="<?= isset($inputIDPoleEmploi) ? $inputIDPoleEmploi : '' ?>"
            name="inputIDPoleEmploi"
            pattern="[0-9]{7}[A-Z]{1}"
            title ="Doit contenir 7 chiffres et 1 lettre"
            required>
          <p class="text-danger"><?= $error['inputIDPoleEmploi'] ?? ''; ?></p>
        </div>
        </div>
        
      <div class="row">
        <!-- DIPLOME -->
        <div class="form-group col-md-4">
          <label for="inputDiplome">Diplôme</label>
          <select name="inputDiplome" pattern="([A-Z][a-zéèêëàâäôöûüç-])*" title="Champs invalide" class="form-control" required>
            <option selected></option>
            <option>Sans</option>
            <option>Bac</option>
            <option>Bac +2</option>
            <option>Bac +3 ou suprérieur</option>
          </select>
          <p class="text-danger"><?= $error['inputDiplome'] ?? ''; ?></p>
        </div>
        
        <div class="form-group col-md-2">
          <label for="inputBadge">Badge(s)</label>
          <input
            type="number"
            maxlength="3"
            class="form-control"
            value="<?= isset($inputBadge) ? $inputBadge : '' ?>"
            name="inputBadge"
            min="1"
            pattern="[0-9]{0,2}|[1]?[0-9]{2}"
            title ="Entre 0 et 199"
            required>
          <p class="text-danger"><?= $error['inputBadge'] ?? ''; ?></p>
        </div>

        <div class="form-group col-md-6">
          <label for="inputURL">Lien Code Academy</label>
          <input
            type="text" 
            class="form-control"
            value="<?= isset($inputURL) ? $inputURL : '' ?>"
            name="inputURL"
            pattern="(?:http(s)?://)?[\w.-]+(?:.[\w.-]+)+[\w-._~:/?#[]@!$&'()*+,;=.]+"
            title ="URL invalide"
            required>
          <p class="text-danger"><?= $error['inputURL'] ?? ''; ?></p>
        </div>
        </div>
        
        <div class="form-group col-md-12">
          <label for="inputSuperHero">Si vous étiez un super heros/une super heroïne, qui seriez-vous et pourquoi ? </label>
          <textarea 
            type="text"
            rows="6"
            class="form-control"
            value="<?= isset($inputSuperHero) ? $inputSuperHero : '' ?>"
            name="inputSuperHero"
            required>
          </textarea>
          <p class="text-danger"><?= $error['inputSuperHero'] ?? ''; ?></p>
        </div>

        <div class="form-group col-md-12">
          <label for="inputHack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique</label>
          <textarea 
            type="text"
            rows="6"
            class="form-control"
            value="<?= isset($inputHack) ? $inputHack : '' ?>"
            name="inputHack"required>
          </textarea>
          <p class="text-danger"><?= $error['inputHack'] ?? ''; ?></p>
        </div>
        <!--  -->
        <div class="form-group col-md-12">
          <label for="inputXP">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de
            remplir ce formulaire ?</label>
          <textarea
          type="text"
          rows="6"
          class="form-control"
          value="<?= isset($inputXP) ? $inputXP : '' ?>"
          name="inputXP"
          required></textarea>
        
          <p class="text-danger"><?= $error['inputXP'] ?? ''; ?></p>
        </div>


      <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
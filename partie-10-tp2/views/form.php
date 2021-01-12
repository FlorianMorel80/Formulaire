<form action="" method="POST">
    <div class="container">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="inputGender">Civilité</label>
                <select 
                    name="inputGender"
                    class="form-control"
                    required>
                    <option selected></option>
                    <option <?= isset($gender) && $gender == 'Homme' ? 'selected' : '' ?>value="Homme">Homme</option>
                    <option <?= isset($gender) && $gender == 'Femme' ? 'selected' : '' ?>value="Femme">Femme</option>
                    <option <?= isset($gender) && $gender == 'Autre' ? 'selected' : '' ?>value="Autre">Autre</option>
                </select>
                    <p class="text-danger"><?= $error['inputGender'] ?? ''; ?></p>
            </div>
        
        <!-- NAME -->
            <div class="form-group col-md-4">
                <label for="inputName">Nom</label>
                <!-- Dans la value, je test si l'input name est remplit je l'affiche sinon je ne mets rien -->
                <input 
                    type="text"
                    class="form-control"
                    value="<?= $inputName ?? '' ?>"
                    name="inputName"
                    pattern="[A-Za-z-éèêëàâäôöûüùç' ]+"
                    title ="Le champs ne doit comporter que des lettres et des espaces"
                    placeholder="Votre nom"
                    pattern = "[A-Za-z-éèêëàâäôöûüç' ]*"
                    title ="Veuillez saisir un nom valide"
                    required>
                <p class="text-danger"><?= $error['inputName'] ?? ''; ?></p>
            </div>

        <!-- FIRSTNAME -->
            <div class="form-group col-md-4">
                <label for="inputFirstName">Prénom</label>
                <input
                    type="text"
                    class="form-control"
                    value="<?= $inputFirstName ?? '' ?>"
                    name="inputFirstName"
                    pattern="[A-Za-z-éèêëàâäôöûüùç'. ]*"
                    title ="Le champs ne doit comporter que des lettres et des espaces"
                    placeholder="Votre prénom"
                    pattern = "[A-Za-z-éèêëàâäôöûüç' ]*"
                    title ="Veuillez saisir un nom valide"
                    required>
                <p class="text-danger"><?= $error['inputFirstName'] ?? ''; ?></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="form-group col-md-2">
                <label for="inputAge">Age</label>
                <input 
                type="number"
                class="form-control"
                value="<?= $inputAge ?? '' ?>"
                name="inputAge"
                max = "120"
                min = "18"
                pattern ="[0-9]{2,3}"
                title = "Veuillez saisir un age entre 18 et 119 ans"
                required>
                <p class="text-danger"><?= $error['inputAge'] ?? ''; ?></p>
            </div>
        
            <div class="form-group col-md-10">
                <label for="inputCompany">Société</label>
                <input 
                type="text"
                value="<?= $inputCompany ?? '' ?>"
                name="inputCompany"
                class="form-control"
                required>
                <p class="text-danger"><?= $error['inputCompany'] ?? ''; ?></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <button type="submit" class="btn col-4 justify-content-center btn-primary">Envoyer</button>
        </div>
    </div>
</form>

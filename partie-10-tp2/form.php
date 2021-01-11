<div class="container">
    <div class="row">
        <form action="" method="post">

        <div class="form-row">
        <div class="form-group col-md-4">
            <label for="civility">Civilité</label>
            <select 
                name="inputGender"
                class="form-control"
                required>
                <option selected></option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
                <option value="Autre">Autre</option>
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
            required>
        <p class="text-danger"><?= $error['inputFirstName'] ?? ''; ?></p>
        </div>
        </div>

        <div class="form-row">
        <div class="form-group col-md-2">
            <label for="age">Age</label>
            <input 
            type="number"
            class="form-control"
            name="age"
            required>
        </div>
        </div>
        
        <div class="form-group col-md-10">
            <label for="society">Société</label>
            <input 
            type="text"
            name="society"
            class="form-control"
            required>
            </div>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>


        </div>
    </div>
<h1>Ajout nouvelle société</h1>
<?php
 var_dump($_POST);
 ?>

<form class="formContent" action="" method="post">
    <div class="form">
        <label for="name"><h2>Nom de la société</h2></label>
        <input type="text" name="name" id="name" value="">
    </div>
    <div class="form">
        <label for="tva"><h2>N° de TVA</h2></label>
        <input type="text" name="tva" id="tva" value="">
    </div>
    <div class="form">
        <label for="country"><h2>Pays</h2></label>
        <input type="text" name="country" id="country" value="">
    </div>
    <div class="form">
        <label for="company_type"><h2>Type de société</h2></label>
        <select name="company_type" id="company_type">
            <option value="1">Client</option>
            <option value="2">Fournisseur</option>
        </select>
    </div>
    <div class="form">
        <button type="submit" value="submit" id="submit">Submit</button>
    </div>

</form>

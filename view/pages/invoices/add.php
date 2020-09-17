<?php
    $contactList = $model->data[0];
    $companyList = $model->data[1];
?>

<h1>Ajout nouvelle facture</h1>

<form class="invoiceForm" action="" method="post">
    <section class="invoice_number">
        <label for="invoice_number"><h2>Numéro de facture</h2></label>
        <input type="text" name="invoice_number" id="invoice_number" value="">
    </section>

    <section class="date">
        <label for="date"><h2>Date</h2></label>
        <input type="date" name="date" id="date" value="">
    </section>

    <section class="company">
        <label for="company"><h2>Société</h2></label>
        <select class="company_select" name="company" id="company_select" required onchange="giveSelection(this.value)">
            <option selected value="Selectionnez your company">Selectionnez la société</option>
            <?php
                foreach($companyList as $company){
            ?>
                 <option value="<?php echo $company['company_id']; ?>"><?php echo $company['name'];?></option>
            <?php
                }
            ?>
        </select>    
    </section>

    <section class="contact">
        <label for="contact"><h2>Personne de contact pour la facture</h2></label>
        <select class="contact_select" name="contact" id="contact_select" required>
            <option selected value="Selectionnez your contact">Selectionnez le contact</option>
            <?php
                foreach($contactList as $contact){
            ?>
                 <option data-id="<?php echo $contact['company_id']; ?>" value="<?php echo $contact['contact_id']; ?>"><?php echo $contact['lastname']. " ". $contact['firstname'];?></option>
            <?php
                }
            ?>
        </select>
    </section>

    <section class="submit">
        <button type="submit" value="submit" id="submit" name="submit">Submit</button>
    </section>
</form>
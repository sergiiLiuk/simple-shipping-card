var $form = $('checkout-form');

$form.submit(function(event){
    $(charge-error).addClass('hidden');
    //$form.find('button').prop('disabled', true);
    /* 
        here 3rd party payment validation api 
    */
    
    return false; // stop proceeding submission to Laravel before payment data validated
});

// the form submition
$form.get(0).submit();



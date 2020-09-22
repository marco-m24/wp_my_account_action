function mrc_action_woocommerce_edit_account_form_start(  ) { 
    echo '[dettagli account] prima della form'; 
}; 
         
// add the action 
add_action( 'woocommerce_edit_account_form_start', 'mrc_action_woocommerce_edit_account_form_start', 10, 0 ); 






function mrc_action_woocommerce_edit_account_form(  ) { 
    echo '[dettagli account] interno form'; 
}; 
         
// add the action 
add_action( 'woocommerce_edit_account_form', 'mrc_action_woocommerce_edit_account_form', 10, 0 );




function mrc_action_woocommerce_edit_account_form_end(  ) { 
   echo '[dettagli account] fine della form'; 
}; 
         
// add the action 
add_action( 'woocommerce_edit_account_form_end', 'mrc_action_woocommerce_edit_account_form_end', 10, 0 );


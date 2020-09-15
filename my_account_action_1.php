function mrc_action_woocommerce_before_customer_login_form( ) { 
    echo 'inizio my account'; 
}; 
         
// add the action 
add_action( 'woocommerce_before_customer_login_form', 'mrc_action_woocommerce_before_customer_login_form', 10, 1 );





function mrc_action_woocommerce_login_form_start(  ) { 
    echo 'inizio login';
}; 
         
// add the action 
add_action( 'woocommerce_login_form_start', 'mrc_action_woocommerce_login_form_start', 10, 0 );




function mrc_action_woocommerce_login_form_end(  ) { 
    echo 'fine login'; 
}; 
         
// add the action 
add_action( 'woocommerce_login_form_end', 'mrc_action_woocommerce_login_form_end', 10, 0 );




function mrc_action_woocommerce_register_form_start(  ) { 
    echo 'inizio registrazione'; 
}; 
         
// add the action 
add_action( 'woocommerce_register_form_start', 'mrc_action_woocommerce_register_form_start', 10, 0 );




function mrc_action_woocommerce_register_form(  ) { 
    echo 'registrazione'; 
}; 
         
// add the action 
add_action( 'woocommerce_register_form', 'mrc_action_woocommerce_register_form', 10, 0 );






function mrc_action_woocommerce_register_form_end(  ) { 
    echo 'fine registrazione'; 
}; 
         
// add the action 
add_action( 'woocommerce_register_form_end', 'mrc_action_woocommerce_register_form_end', 10, 0 );




function mrc_action_woocommerce_after_customer_login_form(  ) { 
    echo 'fine my account';
}; 
         
// add the action 
add_action( 'woocommerce_after_customer_login_form', 'mrc_action_woocommerce_after_customer_login_form', 10, 1 );

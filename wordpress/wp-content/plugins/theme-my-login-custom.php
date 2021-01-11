<?php

/*
function modify_tml_forms() {
    // To modify a single form
    if ( $login_form = tml_get_form( 'login' ) ) {
      // Add content before the form
      $login_form->render_args['before'] = '
        <div style="max-width:400px">
      ';

        // Add content after the form
      $login_form->render_args['after'] = '</div>';

        foreach ( $login_form->render_args as $arg) {
          echo $arg;
        }
    }

    // To modify all forms
    foreach ( tml_get_forms() as $form ) {
        // Add content before the form
        $form->render_args['before'] = 'This is above/before the form!!!!';

        // Add content after the form
        $form->render_args['after'] = 'This is below/after the form!!!!!';
    }
}
add_action( 'init', 'modify_tml_forms' );
*/

function remove_forgot_password_from_tml_login_form( $form ) {
	if ( 'login' == $form ) {
		tml_get_form( 'login' )->remove_link( 'lostpassword' );
	}
}
add_action( 'tml_registered_form', 'remove_forgot_password_from_tml_login_form' );

function disable_unused_tml_actions( $action ) {
	if ( 'register' == $action ) {
		tml_unregister_action( $action );
	}
  if ( 'forgotpassword' == $action ) {
    tml_unregister_action( $action );
  }
  if ( 'dashboard' == $action ) {
    tml_unregister_action( $action );
  }
  if ( 'resetpass' == $action ) {
    tml_unregister_action( $action );
  }
}
add_action( 'tml_registered_action', 'disable_unused_tml_actions' );

/*
function make_tml_forms_bootstrap_compatible() {
	foreach ( tml_get_forms() as $form ) {
		foreach ( tml_get_form_fields( $form ) as $field ) {
			if ( 'hidden' == $field->get_type() ) {
				continue;
			}

			$field->render_args['before'] = '<div class="form-group">';
			$field->render_args['after'] = '</div>';
			if ( 'checkbox' != $field->get_type() ) {
				$field->add_attribute( 'class', 'form-control' );
			}
		}
	}
}
add_action( 'init', 'make_tml_forms_bootstrap_compatible' );
*/

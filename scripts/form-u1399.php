<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.0.309
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Feedback Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'dania.arpita@gmail.com',
		'to' => 'dania.arpita@gmail.com,shubham.m2012@gmail.com'
	),
	'fields' => array(
		'custom_U1418' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'NAME',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'NAME\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'EMAIL ID',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'EMAIL ID\' is required.',
				'format' => 'Field \'EMAIL ID\' has an invalid email.'
			)
		),
		'custom_U1409' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'MESSAGE',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U1405' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'HOME ADDRESS',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'HOME ADDRESS\' is required.'
			)
		),
		'custom_U1413' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'CITY',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'CITY\' is required.'
			)
		),
		'custom_U1441' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'STATE',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'STATE\' is required.'
			)
		),
		'custom_U1426' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'ZIP CODE',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'ZIP CODE\' is required.'
			)
		),
		'custom_U1401' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'COUNTRY',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'COUNTRY\' is required.'
			)
		),
		'custom_U1431' => array(
			'order' => 9,
			'type' => 'checkboxgroup',
			'label' => 'GENDER',
			'required' => true,
			'optionItems' => array(
				'MALE',
				'FEMAILE'
			),
			'errors' => array(
				'required' => 'Field \'GENDER\' is required.',
				'format' => 'Field \'GENDER\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>

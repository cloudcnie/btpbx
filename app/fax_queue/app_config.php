<?php

	//application details
		$apps[$x]['name'] = 'FAX Queue';
		$apps[$x]['uuid'] = '3656287f-4b22-4cf1-91f6-00386bf488f4';
		$apps[$x]['category'] = 'Switch';
		$apps[$x]['subcategory'] = 'FAX';
		$apps[$x]['version'] = '1.1';
		$apps[$x]['license'] = 'Mozilla Public License 1.1';
		$apps[$x]['url'] = 'http://www.fusionpbx.com';
		$apps[$x]['description']['en-us'] = '';

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = 'fax_queue_view';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$apps[$x]['permissions'][$y]['groups'][] = 'user';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'fax_queue_domain';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$apps[$x]['permissions'][$y]['groups'][] = 'admin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'fax_queue_add';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'fax_queue_edit';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'fax_queue_delete';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;
		$apps[$x]['permissions'][$y]['name'] = 'fax_queue_all';
		$apps[$x]['permissions'][$y]['groups'][] = 'superadmin';
		$y++;

	//default settings
		$y=0;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "e63df592-9928-4cd3-85bc-afdec2f4cd1c";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "fax_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "enabled";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable or disable the fax queue.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "84a6f2a8-4633-49d9-ad28-c9f96d630050";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "fax_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "limit";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "30";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Limit the records to process at one time.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "4d05c680-6ef8-422a-a26f-845ec0135729";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "fax_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "retry_limit";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "3";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "Number of tries to send before giving up.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "edf13aab-c7df-4966-9895-a085d43e64a1";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "fax_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "retry_interval";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "180";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "How often to try resending the fax. Default 180 seconds.";
		$y++;
		$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "9c379e94-0cb8-41d6-8ee5-8459c5ef7391";
		$apps[$x]['default_settings'][$y]['default_setting_category'] = "fax_queue";
		$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "interval";
		$apps[$x]['default_settings'][$y]['default_setting_name'] = "numeric";
		$apps[$x]['default_settings'][$y]['default_setting_value'] = "30";
		$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		$apps[$x]['default_settings'][$y]['default_setting_description'] = "How often to process the queue. Default 30 seconds.";
		//$y++;
		//$apps[$x]['default_settings'][$y]['default_setting_uuid'] = "afd729d9-cf69-4793-a140-21093814d314";
		//$apps[$x]['default_settings'][$y]['default_setting_category'] = "fax_queue";
		//$apps[$x]['default_settings'][$y]['default_setting_subcategory'] = "enabled";
		//$apps[$x]['default_settings'][$y]['default_setting_name'] = "boolean";
		//$apps[$x]['default_settings'][$y]['default_setting_value'] = "true";
		//$apps[$x]['default_settings'][$y]['default_setting_enabled'] = "true";
		//$apps[$x]['default_settings'][$y]['default_setting_description'] = "Enable or disable the fax queue.";
		//$y++;

	//fax queue
		$y = 0;
		$apps[$x]['db'][$y]['table']['name'] = 'v_fax_queue';
		$apps[$x]['db'][$y]['table']['parent'] = '';
		$z = 0;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_queue_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'primary';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'domain_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_domains';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'domain_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = '';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'origination_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_log_uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'uuid';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'char(36)';
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = 'foreign';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['table'] = 'v_fax_logs';
		$apps[$x]['db'][$y]['fields'][$z]['key']['reference']['field'] = 'fax_log_uuid';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Date of the FAX entered the queue.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'hostname';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Hostname of the server.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_caller_id_name';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the Caller ID name.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_caller_id_number';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the Caller ID number.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_number';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the fax destination.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_prefix';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the fax prefix.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_email_address';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the fax email address.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_file';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the fax file.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_status';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the fax status.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_retry_date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Date the fax was retried';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_notify_sent';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'boolean';
		$apps[$x]['db'][$y]['fields'][$z]['toggle'] = ['true','false'];
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Fax notification sent. true,false';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_notify_date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Date the fax notification was sent';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_retry_count';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'numeric';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the fax retries.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_accountcode';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the accountcode.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = 'fax_command';
		$apps[$x]['db'][$y]['fields'][$z]['type'] = 'text';
		$apps[$x]['db'][$y]['fields'][$z]['search_by'] = '1';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = 'Enter the fax command.';
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "insert_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_date";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = 'timestamptz';
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = 'date';
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "update_user";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";

?>
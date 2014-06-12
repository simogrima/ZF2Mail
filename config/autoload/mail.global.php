<?php
return array(
	
    'mail_options' => array(
        
        /*
         * The mail adapter to be used. Valid options are Zend\Mail\Transport\Smtp and Zend\Mail\Transport\Sendmail
         * Default value is Zend\Mail\Transport\Sendmail
         */
        'mail_adapter' => 'Zend\Mail\Transport\Smtp',
        
        /*
         * Hostname or IP address of mail server to be used.
         * Default value is localhost
         */
        'server' => 'smtp.gmail.com',
        
        /*
         * From email address of the email. It would be used as SMTP username if mail_adapter is set to Zend\Mail\Transport\Smtp and no smtp_user is provided
         * Default value is an empty string
         */
        //'from' => '',
        
        /*
         * From name to be displayed instead of from address.
         * Default value is an empty string
         */
        // 'from_name' => '',
        
        /*
         * Destination addresses of sent emails. It can be an email address as string or an array of email addresses.
         * Default value is an empty array.
         */
        // 'to' => array(),
        
        /*
         * Copy destination addresses of sent emails. It can be an email address as string or an array of email addresses.
         * Default value is an empty array
         */
        // 'cc' => array(),

        /*
         * Hidden copy destination addresses of sent emails. It can be an email address as string or an array of email addresses.
         * Default value is an empty array
         */
        // 'bcc' => array(),
        
        /*
         * If Zend\Mail\Transport\Smtp adapter is used, this is the SMTP authentication identity. If this is not set, from option is used.
         * Default value is an empty string
         */
        'smtp_user' => 'simogrima@gmail.com',
        
        /*
         * If Zend\Mail\Transport\Smtp adapter is used, this is the SMTP authentication credential.
         * Default value is an empty string
         */
        'smtp_password' => 'alfolino72',
        
        /*
         * If Zend\Mail\Transport\Smtp adapter is used, this defines the SSL type to be used, 'ssl' or 'tls'. Boolean false should be used to disable SSL.
         * Default value is false
         */
        'ssl' => 'ssl',
        
        /*
         * Email subject.
         * Default value is an empty string
         */
        // 'subject' => '',
        
        /*
         * Email body. Can be a string or hardcoded HTML. If a more complex value is nedded it will have to be done in the code.
         * Default value is an empty string.
         */
        // 'body' => '',
        
        /*
         * Defines information to create the email body from a view partial. It defines template path and template params. 
         * The path will be resolved by the TemplateMapResolver, so you need to place mail templates inside a view folder of one of your modules or customize your template map and template path stack.
         * Params will be a group of key-value pairs.
         * It has a use_template property wich tells if template should be used automatically, ignoring anything defined at 'body' option. It is false by default.
         */
        // 'template' => array(
        //     'use_template'  => false,
        //     'path'          => 'ac-mailer/mail-templates/mail',
        //     'params'        => array(),
        // ),
        
        /*
         * Attachments directory. If this is a valid directory path, it will be iterated recursively and all found files will be attached to the email.
         * Set this to a non string value (like false) to disable automatic attachments.
         * Default value is data/mail/attachments, relative to project's root path.
         */
        // 'attachments_dir' => 'data/mail/attachments',
        
        /*
         * If Zend\Mail\Transport\Smtp adapter is used, this is the SMTP server port
         */
        'port' => 465,
        
	)
	
);
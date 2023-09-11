<?php
$capabilities = array(
    'local/course_access:get_last_access' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'guest' => CAP_ALLOW,
            'user' => CAP_ALLOW,
        )
    ),
);

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin
$config['recaptcha_site_key'] = '6Lcm1xsaAAAAAIPgByPgb-qrD5kcCryCntDrKpAM';
$config['recaptcha_secret_key'] = '6Lcm1xsaAAAAAFg9gZgTxkAa8s5b3K0jf5oe4fyk';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'tr';
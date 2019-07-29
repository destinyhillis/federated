<?php
$site = 'fed';
set_include_path(get_include_path()
    . PATH_SEPARATOR . str_replace($site, '', $_SERVER['DOCUMENT_ROOT']) . 'library'
);

$page_id = (!empty($_GET['id'])) ? $_GET['id'] : 'main_index';

$page_id = preg_replace("/[^a-zA-Z0-9_]/", "", $page_id);

$pages = array('index', 'contact_us', 'how_it_works', 'sign_up', 'login', 'dealer_index', 'upload_invoice', 'faqs', 'new_labor', 'new_labor_2', 'claim_check', 'claim_statement', 'claim_success', 'upload_error', 'error');
if (in_array($page_id, $pages)) {
    $include_page = $page_id . '.php';

} else {
    $page_id = 'main_index';
    $include_page = 'main_index.php';

}

require_once($include_page);


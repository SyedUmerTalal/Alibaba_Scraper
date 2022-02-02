<?php
error_reporting(0);
ini_set('memory_limit', '-1');
ini_set('max_execution_time', '55500'); //300 seconds = 5 minutes

require "simple_html_dom.php";
$data = [];

for ($i = 0; $i < 20; $i++) {
    $html = file_get_html('https://www.alibaba.com/products/pakistan.html?IndexArea=product_en&page=410&Country=PK&param_order=CNTRY-PK');
    clearstatcache();
    if ($html->find('.fc3 fs12 text-ellipsis list-no-v2-decisionsup__element', 0)) {
        foreach ($html->find('.fc3 fs12 text-ellipsis list-no-v2-decisionsup__element') as $element) :
            $parts = explode('/', $element->href);
            $companies[] = 'https://' . $parts[2];
        endforeach;
    }
}
print_r($companies);

exit;
$data = array();
foreach (array_unique($companies) as $company) :
    $html3 = file_get_html($company . '/contactinfo.html?v=' . rand());
    $html2 = file_get_html($company . '/company_profile.html?v=' . rand());
    $html4 = file_get_html($company . '/company_profile/trade_capacity.html?v=' . rand());
    $html5 = file_get_html($company . '/company_profile/trade_history.html?v=' . rand());
    foreach ($html2->find('tr') as $td) {
        if ($td->children(0)->plaintext == "Business Type") {
            $BusinessType = $td->children(1)->plaintext;
        }
        if ($td->children(2)->plaintext == "Year Established") {
            $YearEstablished = $td->children(3)->plaintext;
        }
        if ($td->children(0)->plaintext == "Total Annual Revenue") {
            $SalesVolume = $td->children(1)->plaintext;
        }
    }
    foreach ($html3->find('tr') as $td) {
        $str[] = array(
            $td->children(0)->plaintext
        );
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'Telephone:') {
            $Telephone = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'MobilePhone:') {
            $Mobile = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'Fax:') {
            $Fax = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'Zip:') {
            $Zip = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'Country/Region:') {
            $Country = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'Province/State:') {
            $Province = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'City:') {
            $City = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'CompanyName:') {
            $Company = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'OperationalAddress:') {
            $Address = $td->children(1)->plaintext;
        }
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'Website:') {
            $Website = $td->children(1)->plaintext;
        }
    }
    foreach ($html4->find('tr') as $td) {
        if (str_replace(' ', '', $td->children(1)->plaintext) == 'ExportPercentage:') {
            $Export = $td->children(2)->plaintext;
        }
    }
    foreach ($html5->find('tr') as $td) {
        if (str_replace(' ', '', $td->children(0)->plaintext) == 'YearJoined:') {
            $YearJoined = $td->children(1)->plaintext;
        }
    }
    $datas[] = array(
        'profile_url' => $company,
        'name' => $html3->find('div.contact-name', 0)->plaintext,
        'contact-department' => $html3->find('div.contact-department', 0)->plaintext,
        'contact-job' => $html3->find('div.contact-job', 0)->plaintext,
        'Telephone' => $Telephone,
        'Mobile' => $Mobile,
        'Fax' => $Fax,
        'Zip' => $Zip,
        'Website' => $Website,
        'Country' => $Country,
        'Province' => $Province,
        'City' => $City,
        'Company' => $Company,
        'Address' => $Address,
        'BusinessType' => $BusinessType,
        'YearEstablished' => $YearEstablished,
        'YearJoined' => $YearJoined,
        'Export' => $Export,
        'SalesVolume' => $SalesVolume
    );

endforeach;


$developer_data = array(
	"sEcho" => 1,
    "iTotalRecords" => count($datas),
    "iTotalDisplayRecords" => count($datas),
    "aaData"=>$datas
  );
  
echo json_encode($developer_data);
?>

<?php
$ipstack_apikey = '3a3eaa6f93c4039ae69a0a35554eb58f';
// Initialize CURL:
$ch = curl_init('https://api.ipstack.com/'.$_SERVER["REMOTE_ADDR"].'?access_key='.$ipstack_apikey.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$api_result = json_decode($json, true);

function geo_updater($new_price, $new_id, $new_shipping) {
  // product variables
  $handy_values = array();
  // update values
  $handy_values['price'] = $new_price;
  $handy_values['id'] = $new_id;
  $handy_values['shipping'] = $new_shipping;
  return $handy_values;
}

// array for future use
$handy_geo = array();
// For Us
if ($api_result['country_code'] ==='US') {
  $handy_geo = geo_updater('$169', '83780', 'Free Shipping');
}
// Norway
if ($api_result['country_code'] ==='NO') {
  $handy_geo = geo_updater('1895 NOK', '81918', 'Free Shipping');
}
// Great Britain
if ($api_result['country_code'] ==='GB') {
  $handy_geo = geo_updater('€199', '80985', 'Free Shipping');
}
// CA
if ($api_result['country_code'] ==='GB') {
  $handy_geo = geo_updater('$249', '83780', 'Free Shipping');
}
// AU
if ($api_result['country_code'] ==='GB') {
  $handy_geo = geo_updater('$169 USD', '121285', 'Shipping');
}
// EU
if ($api_result['country_code'] ==='GB') {
  $handy_geo = geo_updater('€189', '165562', 'Free Shipping');
} else {
  $handy_geo = geo_updater('$169', '124', 'Shipping');
}
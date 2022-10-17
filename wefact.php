<html>
<body>

Debiteur: <?php echo $_POST["debiteur"]; ?><br>
Bedrag alcoholisch: <?php echo $_POST["bedrag_alcohol"]; ?><br>
Bedrag non-alcoholisch: <?php echo $_POST["bedrag_non_alcohol"]; ?><br>


<!--
<?php
require_once("wefact_api.php");

$api = new WeFactAPI();

if (isset($_POST['debiteur'])) {
    $name = $_POST['debiteur'];
}



$parameters = [
    "DebtorCode" => $_POST["debiteur"],
    "InvoiceLines" => [
        [
            "Number" => 1,
            "ProductCode" => "P0001",
            "PriceExcl" => $_POST["fc-price"]
        ],
        [
            "Number" => 1,
            "ProductCode" => "P0002",
            "PriceExcl" => $_POST["turface-mvp-row-total"]
        ]
    ]
];

$response = $api->sendRequest('invoice', 'add', $parameters);

print_r_pre($response);
?>
-->

</body>
</html>

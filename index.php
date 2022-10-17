<!DOCTYPE HTML>
<html>  

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>CCA afrekenstaat kookavond</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script type='text/javascript' src='js/order.js'></script>
</head>

<body>
<div id="page-wrap">

        <h1>Afrekenstaat kookavond</h1>
        
       <input type="text" name="debiteur">Debiteur</input>
       <input type="date" id="date">Datum</input>
        
        
    	<table id="order-table">
    	    <tr>
    	         <th>Dranken</th> 
    	         <th>Aantal</th>
    	         <th>X</th>
    	         <th>Prijs</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totaal</th> 
    	    </tr>
            <tr class="odd">
                <td class="product-title">Sparkle No. 6&reg; - <em>Dry Line Marking Compound</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="sparkle-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>165</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="sparkle-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Turface&reg; MVP - <em>Calcined Clay Soil Conditioner</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mvp-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>300</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-mvp-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Turface&reg; Pro League - <em>Calcined Clay Top Dressing</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>340</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Turface&reg; Pro League Red - <em>Calcined Clay Top Dressing</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-red-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>455</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-red-row-total" disabled="disabled"></input></td>
            </tr>
           
           <tr>
    	         <th>Ingredienten</th> 
    	         <th>Aantal</th>
    	         <th>X</th>
    	         <th>Prijs</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totaal</th> 
    	    </tr>
           
           
           
            <tr class="odd">
                <td class="product-title">Turface&reg; Quick Dry - <em>Calcined Clay Moisture Absorbent</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-quick-dry-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>300</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-quick-dry-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Turface&reg; Mound Clay Red - <em>Virgin Red Clay</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mound-clay-red-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>410</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-mound-clay-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Diamond Pro&reg; Red Infield Conditioner - <em>Vitrified Clay Top Dressing</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-red-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>365</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Diamond Pro&reg; Drying Agent - <em>Calcined Clay Moisture Absorbent</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-drying-agent-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>340</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-drying-agent-row-total" disabled="disabled"></input></td>
            </tr>
            
            <tr>
    	         <th>Categorie</th> 
    	         <th>Aantal</th>
    	         <th>X</th>
    	         <th>Prijs</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totaal</th> 
    	    </tr>
            
            <tr class="odd">
                <td class="product-title">Diamond Pro&reg; Professional - <em>Calcined Clay Top Dressing</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-professional-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>375</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-professional-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Diamond Pro&reg; Top Dressing - <em>Calcined Clay Soil Conditioner</em></td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-top-dressing-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">€<span>340</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-top-dressing-row-total" disabled="disabled"></input></td>
            </tr>
            <tr>
                <td colspan="6" style="text-align: right;">
                    Product SUBTOTAL: <input type="text" class="total-box" value="€0" id="product-subtotal" disabled="disabled"></input>
                </td>
            </tr>
           
    	</table>
    	
	
    	
    	<div class="clear"></div>
    	
        <div style="text-align: right;">
            <span>ORDER TOTAL: </span> 
            <input type="text" class="total-box" value="€0" id="order-total" disabled="disabled"></input>
            
            <br />
            
            <form class="foxycart" action="wefact.php" method="post" accept-charset="utf-8" id="foxycart-order-form">
                
                <input type="text" name="name" value="Multi Product Order" />
                <input type="text" id="fc-price" name="price" value="0" />
                
                <input type="text" name="debiteur" disabled="disabled">Debiteur</input>
                <input type="text" name="bedrag_alcohol" disabled="disabled">Bedrag alcohol</input>
                <input type="text" name="bedrag_non_alcohol" disabled="disabled">Bedrag non alcohol</input>
                <input type="text" name="bedrag_gasten" disabled="disabled">Bedrag gasten</input>

                <input type="submit" value="Submit Order" class="submit" />
                
            </form>
        </div>
    </div>
   
<?php

require_once("wefact_api.php");

$api = new WeFactAPI();

$parameters = [
    "group" => "1",
];

$response = $api->sendRequest('debtor', 'list', $parameters);

print_r_pre($response);
?>

</body>
</html>

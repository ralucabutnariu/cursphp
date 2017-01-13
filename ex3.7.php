<?php

/**
    An online store wants to stimulate sales by rewarding with various discounts the clients that have many acquisitions or spend large amounts of money.
    They must implement and algorithm that applies business rules to decide the discount given to clients based on the product type they are buying, number of past acquisitions and past acquisitions total value. The algorithm must also apply the calculated discount on the current price of the product and return the final price.
    If productType is 1 then
    If client made less then 10 acquisitions, then give a 5% discount only if the total sum (pastAcquisitionsValue) is > 1000 lei
    If client made 10 – 30 acquisitions, then give 8% discount for pastAcquisitionsValue < 5000 and 10% discount for pastAcquisitionsValue >= 5000
    If client made >=30 acquisitions, then give a 15% discount for pastAcquisitionsValue < 10000 and a 17% discount for pastAcquisitionsValue >= 10000
    If productType is 2:
    Give 5% discount to all clients that have pastAcquisitionsValue >= 10000
    For all other product types:
    Give 5% discount for all clients that are not new and have pastAcquisitionsValue >= 90000
    Tips:
    Write a function calculateDiscount($productType, $pastAcquisitionsNumber, $pastAcquisitionsValue)   that applies the discout conditions and returns a number representing the number of procents
    Write a function calculatePrice(product, client) that returns a number representing final price. Product is an array containing product type and initial price. Client is an array containing number of past acquisitions and past acquisitions total value.
 */

$product = array(
    'productType' => 1,
    'initialPrice' => 100
);

$client = array(
    'pastAcquisitionsValue' => 1000,
    'pastAcquisitionsNumber' => 10
);

calculatePrice($product, $client);

function calculatePrice($product, $client)
{
    echo "Initial price is: ".$product['initialPrice']."\n";
    $discountPercent = calculateDiscount($product['productType'], $client['pastAcquisitionsValue'], $client['pastAcquisitionsNumber']);
    echo "Discount is: ".$discountPercent."%\n";
    $price = applyPercentageDiscount($product['initialPrice'], $discountPercent);
    echo "Final price is: ".$price."\n";
}

function calculateDiscount($productType, $pastAcquisitionsValue, $pastAcquisitionsNumber)
{
    if($productType == 1) {
        return calculateDiscountForProductType1($pastAcquisitionsValue, $pastAcquisitionsNumber);
    }

    if($productType == 2) {
        return calculateDiscountForProductType2($pastAcquisitionsValue, $pastAcquisitionsNumber);
    }

    return calculateDiscountForProductTypeGeneric($pastAcquisitionsValue, $pastAcquisitionsNumber);
}

function calculateDiscountForProductType1($pastAcquisitionsValue, $pastAcquisitionsNumber)
{
    if($pastAcquisitionsNumber < 10) {
        if($pastAcquisitionsValue > 1000) {
            return 5;
        }
        return 0;
    }

    if($pastAcquisitionsNumber < 30) {
        if($pastAcquisitionsValue < 5000) {
            return 8;
        }
        return 10;
    }

    if($pastAcquisitionsValue < 10000) {
        return 15;
    }

    return 17;
}

function calculateDiscountForProductType2($pastAcquisitionsValue, $pastAcquisitionsNumber)
{
    if($pastAcquisitionsValue >= 10000) {
        return 5;
    }
    return 0;
}

function calculateDiscountForProductTypeGeneric($pastAcquisitionsValue, $pastAcquisitionsNumber)
{
    if($pastAcquisitionsValue >= 90000) {
        return 5;
    }
    return 0;
}

function applyPercentageDiscount($price, $discountPercentage)
{
    return $price * (1 - $discountPercentage / 100);
}

?>



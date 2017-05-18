# Shipping methods additional validation

To show inactive shipping method (with error message) use `proccessAdditionalValidation` method 
from `Magento\Shipping\Model\Shipping` which is call after `$carrier->checkAvailableShipCountries`


Class `Magento\Shipping\Model\Shipping`:

<pre class="php">
...
$result = $carrier->checkAvailableShipCountries($request);
if (false !== $result && !$result instanceof \Magento\Quote\Model\Quote\Address\RateResult\Error) {
    $result = $carrier->proccessAdditionalValidation($request);
}
/*
 * Result will be false if the admin set not to show the shipping module
 * if the delivery country is not within specific countries
 */
if (false !== $result) {
    if (!$result instanceof \Magento\Quote\Model\Quote\Address\RateResult\Error) {
...
</pre>
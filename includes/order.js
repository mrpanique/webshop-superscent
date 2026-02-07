
// szallitasi cim beviteli mezok lathatosag allitasa a checkbox alapjan 
function toggleShippingAddress() {
    var checkbox = document.getElementById("same_address");
    var shippingFields = document.getElementById("shipping-fields");

    if (checkbox.checked) {
        shippingFields.style.display = "none";
    } else { 
        shippingFields.style.display = "block";
    }
}
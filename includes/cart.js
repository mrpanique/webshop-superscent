function calculateTotal(price, sku) {
    var quantity = document.getElementById('mennyiseg_' + sku).value;

    // 1 es 10 kozott tartas
    if (quantity > 10) {
        quantity = 10;
        document.getElementById('mennyiseg_' + sku).value = 10;
    }
    else if (quantity < 1) {
        quantity = 1;
        document.getElementById('mennyiseg_' + sku).value = 1;
    }

    var total = price * quantity;
    document.getElementById('total_' + sku).textContent = total + " Ft";
}

function calculateFinal() {
    const totals = document.querySelectorAll('.total');
    let final = 0;

    totals.forEach(element => {
        //csomo space es " Ft" levagasa rola
        let total_ar = element.textContent.replace(/\D/g, '');
        final += parseInt(total_ar);
    });
    document.getElementById('final').textContent = (final) + " Ft";

    // ha ures a kosar ne irja h fizetendo a szallitasi dij
    if(final == 0){
        document.getElementById('paid').textContent = "0 Ft";
    }
    else{
        document.getElementById('paid').textContent = (final + 1450) + " Ft";
    }
}

function removeFromCart(sku) {

    // AJAX-al meghivok egy php sriptet es atadom neki az SKU-t
    var xhr = new XMLHttpRequest(); // XMLHttpRequest objektum letrehozasa
    xhr.open('POST', 'includes/cart_remove_item.inc.php', false); // egy POST request nyitasa a php file fele amiben a script van
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // content tipus beallitasa
    xhr.send('sku=' + encodeURIComponent(sku)); // az 'sku' parameter elkuldese
    location.reload();
}

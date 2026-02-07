// hivatkozas a select menukre
const filterNemSelect = document.getElementById('filter-nem');
const filterMarkaSelect = document.getElementById('filter-marka');

// Az osszes termek card egy tombbe bele
const cards = document.querySelectorAll('.termek');

// A keresoben az enter lenyomasa eseten form submit helyett a search() meghivodik
const searchForm = document.getElementById("search-form");
searchForm.addEventListener("submit", function (event) {
    event.preventDefault();
    search();
});

// EventListener, ami meghivja a filterCards()-ot ha a select menu valtozik
[filterNemSelect, filterMarkaSelect].forEach(select => {
    select.addEventListener('change', filterCards);
});

function filterCards() {

    //szures eseten a searchbar-t visszaallitja uresre
    document.getElementById('key').value = "";

    // a "nincs talalat" szoveg elrejtese ha esetleg lathato lenne elozo kereses/szures miatt 
    document.getElementById('no-result').style.display = 'none';

    // A select valtozasa utan kivalasztott szuro ertekek
    const selectedNem = filterNemSelect.value;
    const selectedMarka = filterMarkaSelect.value;

    let matchingCards = [];

    cards.forEach(card => {
        // A card element nem es marka ertekei
        const cardNem = card.querySelector('.card-nem').textContent.toLowerCase();
        const cardMarka = card.querySelector('.card-marka').textContent.toLowerCase();

        // ellenorzes hogy a kivalasztott nem es marka egyezik-e a card ertekeivel (ha Mind van kivalasztva akkor egyezik) shorthand if
        const nemMatch = selectedNem === 'Mind' || cardNem === selectedNem.toLowerCase();
        const markaMatch = selectedMarka === 'Mind' || cardMarka === selectedMarka.toLowerCase();

        // hogyha mind2 ertek igaz lett akkor belerakja a kartyat a matchinCards tombbe
        if (nemMatch && markaMatch) {
            matchingCards.push(card);
        }
    });

    // a product-row kiuritese
    const container = document.querySelector('.product-row');
    container.innerHTML = '';

    // a matchingCards-bol visszatolti a szurt kartyakat a product-row-ba
    matchingCards.forEach(card => {
        container.appendChild(card);
    });

    // ha nincs szuresnek megelelo termek akkor a "nincs talalat" szoveg mutatasa
    if (matchingCards.length === 0) {
        document.getElementById('no-result').style.display = '';
    }
}

function search() {

    //kereses eseten a filtereket visszaallitja default-ra
    document.getElementById('filter-nem').value = "Mind";
    document.getElementById('filter-marka').value = "Mind";

    // a "nincs talalat" szoveg elrejtese ha esetleg lathato lenne elozo kereses/szures miatt 
    document.getElementById('no-result').style.display = 'none';

    //a keresett kulcsszo
    const key = document.getElementById('key').value.toLowerCase();

    let matchingCards = [];

    cards.forEach(card => {

        const cardTitle = card.querySelector('.card-title').textContent.toLowerCase();

        if (cardTitle.includes(key)) {
            matchingCards.push(card);
        }

    });

    const container = document.querySelector('.product-row');
    container.innerHTML = '';

    matchingCards.forEach(card => {
        container.appendChild(card);
    });

    // ha nincs keresesnek megelelo termek akkor a "nincs talalat" szoveg mutatasa
    if (matchingCards.length === 0) {
        document.getElementById('no-result').style.display = '';
    }
}

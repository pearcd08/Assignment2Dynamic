
function addToCart(e) {
    cart = document.getElementById("cartDiv");
    switch (e.id) {
        case "addDog1":
            qty = document.getElementById("Dog1Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Dog Food One: <input type="number" class="cartInput" id = "cartDog1" pName = "Dog Food One" price="5.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 5.5)
                    + '</p>');
            break;
        case "addDog2":
            qty = document.getElementById("Dog2Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Dog Food Two: <input type="number" class="cartInput" id = "cartDog2" pName = "Dog Food Two" price="6.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 6.5)
                    + '</p>');
            break;
        case "addDog3":
            qty = document.getElementById("Dog3Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Dog Food 3: <input type="number" class="cartInput" id = "cartDog3" pName = "Dog Food Three" price="7.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 7.5)
                    + '</p>');
            break;
        case "addCat1":
            qty = document.getElementById("Cat1Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Cat Food One: <input type="number" class="cartInput" id = "cartCat1" pName = "Cat Food One" price="5.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 5.5)
                    + '</p>');
            break;
        case "addCat2":
            qty = document.getElementById("Cat2Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Cat Food Two: <input type="number" class="cartInput" id = "cartCat2" pName = "Cat Food Two" price="6.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 6.5)
                    + '</p>');
            break;
        case "addCat3":
            qty = document.getElementById("Cat3Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Cat Food Three: <input type="number" class="cartInput" id = "cartCat3" pName = "Cat Food 3" price="7.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 7.5)
                    + '</p>');
            break;
        case "addBird1":
            qty = document.getElementById("Bird1Qty1").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Bird Food One: <input type="number" class="cartInput" id = "cartBird1" pName = "Bird Food One" price="5.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 5.5)
                    + '</p>');
            break;
        case "addBird2":
            qty = document.getElementById("Bird2Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Bird Food Two: <input type="number" class="cartInput" id = "cartBird2" pName = "Bird Food Two" price="6.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 6.5)
                    + '</p>');
            break;
        case "addBird3":
            qty = document.getElementById("Bird3Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Bird Food Three: <input type="number" class="cartInput" id = "cartBird3" pName = "Bird Food Three" price="7.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 7.5)
                    + '</p>');
            break;
        case "addFish1":
            qty = document.getElementById("Fish1Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Fish Food One: <input type="number" class="cartInput" id = "cartFish1" pName = "Fish Food One" price="5.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 5.5)
                    + '</p>');
            break;
        case "addFish2":
            qty = document.getElementById("Fish2Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Fish Food Two: <input type="number" class="cartInput" id = "cartFish2" pName = "Fish Food Two" price="6.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 6.5)
                    + '</p>');
            break;
        case "addFish3":
            qty = document.getElementById("Fish3Qty").value;
            cart
                .insertAdjacentHTML(
                    'beforeend',
                    '<p>Fish Food Three: <input type="number" class="cartInput" id = "cartFish3" pName = "Fish Food Three" price="7.5" value="'
                    + qty
                    + '"> Price:$'
                    + (Number(qty) * 7.5)
                    + '</p>');
            break;

        default:
        // code block
    }

}

function addToInvoice() {

}

/**
 * Show invoice page
 */
function invoice() {

    voicePage = document.getElementById("voicePage");

    var btn = document.getElementById("showInvoiceBut");


    var span = document.getElementsByClassName("close")[0];


    btn.onclick = function() {
        cart = document.getElementsByClassName("cartInput");
        voiceContent = document.getElementById("voice-content");
        Total = 0;
        var elems = document.getElementsByClassName("items");
        i = 0
        while (i<elems.length){
            elems[i].parentNode.removeChild(elems[i]);
        }


        i = 0;
        while (i < cart.length) {
            console.log(cart[i].id);
            qty = cart[i].value;
            switch (cart[i].id) {
                case "cartBread":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Bread: Qty:'+ qty +' Price:$' + (Number(qty) * 3.2)+ '</p>');
                    Total += (Number(qty) * 3.2);
                    break;
                case "cartCheese":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cheese: Qty:'+ qty +' Price:$' + (Number(qty) * 2.9)+ '</p>');
                    Total += (Number(qty) * 2.9);
                    break;
                case "cartSpread":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Spread: Qty:'+ qty +' Price:$' + (Number(qty) * 9)+ '</p>');
                    Total += (Number(qty) * 9);
                    break;
                case "cartMilk1":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Spread: Qty:'+ qty +' Price:$' + (Number(qty) * 4.5)+ '</p>');
                    Total += (Number(qty) * 4.5);
                    break;
                case "cartMilk2":
                    voiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Spread: Qty:'+ qty +' Price:$' + (Number(qty) * 2.32)+ '</p>');
                    Total += (Number(qty) * 2.32);
                    break;
                default:
                k
            }

            i++;

        }
        voiceContent.insertAdjacentHTML(
            'beforeend',
            '<p class = "items">Total: $'+ Total+'</p>');

        voicePage.style.display = "block";
    }


    span.onclick = function() {
        voicePage.style.display = "none";
    }


    window.onclick = function(event) {
        if (event.target == voicePage) {
            voicePage.style.display = "none";
        }
    }
}

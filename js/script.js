function yesDog() {
    let dog = document.getElementById('cachorro');
    if (dog.checked) {
        document.getElementById("ifDog").style.display = "block";
        document.getElementById("ifCat").style.display = "none";
        document.getElementById("ifBird").style.display = "none";
        document.getElementById("ifRabbit").style.display = "none";
        document.getElementById("ifOther").style.display = "none";
        document.getElementById("ifFish").style.display = "none";
        document.getElementById("ifOutro").style.display = "none";
    } else {
        document.getElementById("ifDog").style.display = "none";
    }
}

function yesCat() {
    let cat = document.getElementById('gato');
    if (cat.checked) {
        document.getElementById("ifDog").style.display = "none";
        document.getElementById("ifCat").style.display = "block";
        document.getElementById("ifBird").style.display = "none";
        document.getElementById("ifRabbit").style.display = "none";
        document.getElementById("ifOther").style.display = "none";
        document.getElementById("ifFish").style.display = "none";
        document.getElementById("ifOutro").style.display = "none";
    } else {
        document.getElementById("ifCat").style.display = "none";
    }
}

function yesBird() {
    let bird = document.getElementById('passaro');
    if (bird.checked) {
        document.getElementById("ifDog").style.display = "none";
        document.getElementById("ifCat").style.display = "none";
        document.getElementById("ifBird").style.display = "block";
        document.getElementById("ifRabbit").style.display = "none";
        document.getElementById("ifOther").style.display = "none";
        document.getElementById("ifFish").style.display = "none";
        document.getElementById("ifOutro").style.display = "none";
    } else {
        document.getElementById("ifBird").style.display = "none";
    }
}

function yesRabbit() {
    let rabbit = document.getElementById('coelho');
    if (rabbit.checked) {
        document.getElementById("ifDog").style.display = "none";
        document.getElementById("ifCat").style.display = "none";
        document.getElementById("ifBird").style.display = "none";
        document.getElementById("ifRabbit").style.display = "block";
        document.getElementById("ifOther").style.display = "none";
        document.getElementById("ifFish").style.display = "none";
        document.getElementById("ifOutro").style.display = "none";
    } else {
        document.getElementById("ifRabbit").style.display = "none";
    }
}

function yesOther() {
    let other = document.getElementById('outro');
    if (other.checked) {
        document.getElementById("ifDog").style.display = "none";
        document.getElementById("ifCat").style.display = "none";
        document.getElementById("ifBird").style.display = "none";
        document.getElementById("ifRabbit").style.display = "none";
        document.getElementById("ifOther").style.display = "block";
        document.getElementById("ifOutro").style.display = "block";
        document.getElementById("ifFish").style.display = "none";
    } else {
        document.getElementById("ifOther").style.display = "none";
        document.getElementById("ifOutro").style.display = "none";
    }
}

function yesFish() {
    let fish = document.getElementById('peixe');
    if (fish.checked) {
        document.getElementById("ifDog").style.display = "none";
        document.getElementById("ifCat").style.display = "none";
        document.getElementById("ifBird").style.display = "none";
        document.getElementById("ifRabbit").style.display = "none";
        document.getElementById("ifOther").style.display = "none";
        document.getElementById("ifFish").style.display = "block";
    } else {
        document.getElementById("ifFish").style.display = "none";
    }
}
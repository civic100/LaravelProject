
function totalPreciRace($insurerPrice,$racePrice){
    console.log($insurerPrice);
    console.log($racePrice);
}

function registerByDni(){
    if(document.querySelector("#federation0").checked == true){
        var insurerPrice = document.getElementById("insurer_cif_dni").value.split(',')[1];
        var racePrice = document.getElementById('race_price').value;
        var totalPrice = parseInt(insurerPrice)+parseInt(racePrice);
        document.getElementById('amount').value = totalPrice;
        return true;
    }else{
        var totalPrice = document.getElementById('race_price').value;
        document.getElementById('amount').value = parseInt(totalPrice);
        console.log(parseInt(totalPrice));
    }
}

function registerByRegister(){
    if(document.querySelector("#federation0_register").checked == true){
        var insurerPrice = document.getElementById("insurer_cif_register").value.split(',')[1];
        var racePrice = document.getElementById('race_price').value;
        var totalPrice = parseInt(insurerPrice)+parseInt(racePrice);
        document.getElementById('amount_register').value = totalPrice;
        return true;
    }else{
        var totalPrice = document.getElementById('race_price').value;
        document.getElementById('amount_register').value = parseInt(totalPrice);
        console.log(parseInt(totalPrice));
    }
}

function federationOffRegister(){
    document.querySelector("#num_federation_register").disabled = true;
    document.querySelector("#insurer_cif_register").disabled = false;
    document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(9)").style.display = 'none';
    document.querySelector("#multiCollapseExample2 > div > form > h4:nth-child(10)").style.display = 'block';
    document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(11)").style.display = 'block';
}

function federationOnRegister(){
    document.querySelector("#insurer_cif_register").value = 0;
    document.querySelector("#num_federation_register").disabled = false;
    document.querySelector("#insurer_cif_register").disabled = true
    document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(9)").style.display = 'block';
    document.querySelector("#multiCollapseExample2 > div > form > h4:nth-child(10)").style.display = 'none';
    document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(11)").style.display = 'none';
    resetPriceRegister();
}

function federationOffDni(){
    document.querySelector("#formDni > h4").style.display = 'block';
    document.querySelector("#formDni > div:nth-child(6)").style.display = 'block';
    document.querySelector("#insurer_cif_dni").disabled = false;
}

function federationOnDni(){
    document.querySelector("#formDni > h4").style.display = 'none';
    document.querySelector("#formDni > div:nth-child(6)").style.display = 'none';
    document.querySelector("#insurer_cif_dni").value = 0;
    document.querySelector("#insurer_cif_dni").disabled = true;
    resetPriceDni();
}
//FALTA REGISTRO SIN INSURER

function insurerPriceDni(){
    var insurerPrice = document.getElementById("insurer_cif_dni").value.split(',')[1];
    var b = document.querySelector("#formDni > div:nth-child(11) > p:nth-child(2) > b");
    b.textContent = insurerPrice+' €';

    var insurerPrice = document.getElementById("insurer_cif_dni").value.split(',')[1];
    var racePrice = document.getElementById('race_price').value;
    var totalPrice = parseInt(insurerPrice)+parseInt(racePrice);
    var divTotal = document.querySelector("#formDni > div:nth-child(11) > p:nth-child(3) > b");
    divTotal.textContent = parseInt(totalPrice)+' €';
    document.getElementById('amount').value = parseInt(totalPrice);
}

function insurerPriceRegister(){
    var insurerPrice = document.getElementById("insurer_cif_register").value.split(',')[1];
    var b = document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(15) > p:nth-child(2) > b");
    b.textContent = insurerPrice+' €';

    var insurerPrice = document.getElementById("insurer_cif_register").value.split(',')[1];
    var racePrice = document.getElementById('race_price').value;
    var totalPrice = parseInt(insurerPrice)+parseInt(racePrice);
    var divTotal = document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(15) > p:nth-child(3) > b");
    divTotal.textContent = parseInt(totalPrice)+' €';
    document.getElementById('amount_register').value = parseInt(totalPrice);
}

function resetPriceDni(){
    var racePrice = document.getElementById('race_price').value;
    var divTotal = document.querySelector("#formDni > div:nth-child(11) > p:nth-child(3) > b");
    divTotal.textContent = parseInt(racePrice)+' €';
    var b = document.querySelector("#formDni > div:nth-child(11) > p:nth-child(2) > b");
    b.textContent = '';
    document.getElementById('amount').value = parseInt(racePrice);
}

function resetPriceRegister(){
    var racePrice = document.getElementById('race_price').value;
    var divTotal = document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(15) > p:nth-child(3) > b");
    divTotal.textContent = parseInt(racePrice)+' €';
    var b = document.querySelector("#multiCollapseExample2 > div > form > div:nth-child(15) > p:nth-child(2) > b");
    b.textContent = '';
    document.getElementById('amount_register').value = parseInt(racePrice);
}

//EDITAR INSURERS
function checkInsurer($id){
    if(document.getElementById($id).disabled == true){
        document.getElementById($id).disabled = false
    }else{
        document.getElementById($id).disabled = true;
        document.getElementById($id).value = '';
    } 
}

/*MODAL DE IMEGENS DE MAPS*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
/*FIN DE MODAL DE IMAGENES DE MAPS*/
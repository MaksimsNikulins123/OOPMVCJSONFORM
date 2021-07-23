

const form = document.getElementById('product_form');

const error = document.querySelector('.result');

error.innerHTML = "Fill empty filds";

form.addEventListener("input", function () {

    let inputs = document.querySelectorAll('.input');

    for (let index = 0; index < inputs.length; index++) {
        let input = inputs[index];

        // if(document.getElementById(input.name).value == ''){
            
         if(input.name == 'sku' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide SKU";
            break;
        }else if(input.name == 'name' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide NAME";
            break;
        }else if(input.name == 'price' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide PRICE";
            break;
        }else if(input.name == 'productType' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, select Data type";
            break;
        }else if(input.name == 'size' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide SIZE";
            break;
        }else if(input.name == 'weight' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide WEIGHT";
            break;
        }else if(input.name == 'height' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide HEIGHT";
            break;
        }else if(input.name == 'width' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide WIDTH";
            break;
        }else if(input.name == 'length' &&  document.getElementById(input.name).value == ''){
            error.innerHTML = "Please, provide LENGTH";
            break;
        }else{
            error.innerHTML = "";
        }
   
    }
}, false);
function handlePress(){
    var inputCaracteres = document.querySelector('#caracters');
    
    var texto = inputCaracteres.value
    var quantity = texto.length;


    document.querySelector('#msg').innerHTML = quantity

    return quantity;
}


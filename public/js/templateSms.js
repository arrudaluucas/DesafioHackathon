function handlePress(){
    var inputCaracteres = document.querySelector('#caracters');
    var texto = inputCaracteres.value
    var quantity = texto.length;
    console.log(quantity);
    return quantity;
}
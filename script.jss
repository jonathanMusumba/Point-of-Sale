function addProduct() {
    var productName = document.getElementById('productName').value;
    var price = document.getElementById('price').value;
    var quantity = document.getElementById('quantity').value;

    // Send data to PHP script using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_product.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
        if (xhr.status == 200) {
            console.log(xhr.responseText);
            alert('Product added successfully.');
        } else {
            alert('Error adding product.');
        }
    };
    xhr.send('productName=' + productName + '&price=' + price + '&quantity=' + quantity);
}

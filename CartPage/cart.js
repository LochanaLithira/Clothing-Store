document.querySelectorAll('.cart-item').forEach(item => {
    const quantityInput = item.querySelector('.quantity-input');
    const minusButton = item.querySelector('.minus-btn');
    const plusButton = item.querySelector('.plus-btn');

    minusButton.addEventListener('click', () => {
        
        let currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
            updateTotalPrice(item);
        }
    });

    plusButton.addEventListener('click', () => {
        
        let currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
        updateTotalPrice(item);
    });

    quantityInput.addEventListener('change', () => {
        updateTotalPrice(item);
        
    });
});


function updateTotalPrice(item) {
    const quantityInput = item.querySelector('.quantity-input');
    const totalPrice = item.querySelector('.total-price_for_each');
    const itemPrice = parseFloat(item.querySelector('.item-price').textContent.replace('Rs', ''));
    const quantity = parseInt(quantityInput.value);
    globalThis.total = itemPrice * quantity;
    
    totalPrice.textContent = 'Rs.' + total.toFixed(2);

}



document.querySelectorAll('.total-price_for_each').forEach(function(element){
    var val = 0.0;
    var total_amount = 0.0;
    // console.log(element);
    
    element.addEventListener('change', function (){
        console.log("changed");

        document.getElementById("total-price").innerHTML = "fdslkjfdsl";
    })

});


document.getElementById("checkout").addEventListener("click",function(){

    let total_amount = 0.0;

    document.querySelectorAll('.total-price_for_each').forEach(function(element){
        var val = 0.0;
        if (element.innerHTML == "" ){
            val = parseFloat(element.innerHTML.replace("", ""))
        }else{
            val = parseFloat(element.innerHTML.replace("Rs.", ""));
            total_amount += val;
        }

    });

    document.cookie = "total_amount=" + total_amount;

    window.alert(`Your Total Price is : ${total_amount}`);

    // window.location.href = `checkoutPage.php?totalprice=${total_amount}`;
})

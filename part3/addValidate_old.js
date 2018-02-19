
function addFormValidation() {

    function isProdIdValid() {

        var isValid=true;
        //ProductId validation
        var productId = document.forms["addForm"]["prodId"].value;
        if (productId == null || productId == "" || productId == "000000") {
            alert("Please enter a valid product Id");
            isValid=false;
        } else {
            if (!/^[0-9]{6}$/.test(productId)) {
                alert("Product Id must be a 6 digit number!");
                isValid=false;
            }
        }
        return isValid;
    }

    function isDescValid(){

        var isValid=true;

        //Product Description Validation
        var description = document.forms["addForm"]["description"].value;
        if (description.length === 0 || description == null || description == "") {
            alert("Please enter a valid description");
            isValid=false;
        } else {
            if (!/^[A-Za-z0-9][A-za-z0-9 ]*$/.test(description)) {
                alert("Description can contain Uppercase, Lowercase alphabets or a number!");
                isValid=false;
            }
        }
        return isValid;
    }
    function isPriceValid() {

        var isValid=true;
        //Price validation
        var price = document.forms["addForm"]["price"].value;
        if (price == null || price == "") {
            alert("Please enter a valid price");
            isValid=false;
        } else {
            if (!/^[0-9]+([.][0-9][0-9])?$/.test(price)) {
                alert("Invalid price. Price is a number with 2 decimals!");
                isValid=false;
            } else {
                //Round the price value to 2 decimals.
                price=parseFloat(Math.round(price * 100) / 100).toFixed(2);
                document.forms["addForm"]["price"].value= price;
            }
        }
        return isValid;
    }

    function isQtyValid() {

        var isValid=true;
        //Quantity validation
        var qty = document.forms["addForm"]["qty"].value;
        if (qty == null || qty == "") {
            alert("Please enter a quantity");
            isValid=false;
        } else {
            if (!/^[0-9]+$/.test(qty)) {
                alert("Quantity should be a number!");
                isValid=false;
            }
        }
        return isValid;
    }
    var isProdId=false;
    var isDesc=false;
    var isPrice=false;
    var isQty=false;
    var returnValue = false;

    isProdId = isProdIdValid();
    if (isProdId) {
        isDesc = isDescValid();
    }
    if(isDesc) {
        isPrice = isPriceValid();
    }
    if(isPrice) {
        isQty = isQtyValid();
    }

    if (isProdId && isDesc && isPrice && isQty) {
        returnValue = true;
    }
    return returnValue;
}

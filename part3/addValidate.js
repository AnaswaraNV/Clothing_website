function addFormValidation(){

    //ProductId validation
    var productId = document.forms["addForm"]["prodid"].value;
    if(productId==null || productId=="" ||productId=="000000"){
        alert("Please enter a valid product Id");
        return false;
    } else{
        if(!/^[0-9]{6}$/.test(productId)) {
            alert("Product Id must be a 6 digit number!");
            return false;
        }
    }
    //Product Description Validation
    var description = document.forms["addForm"]["desc2"].value;
    if(description.length ===0||description==null || description=="" ){
        alert("Please enter a valid description");
        return false;
    } else{
        if(description.length>40)
        {
            alert("Description too long!!");
            return false;
        }
        if (!/^[A-Za-z0-9][A-za-z0-9 ]*$/.test(description)) {
            alert("Description should contain Uppercase, Lowercase alphabets or a number!");
            return false;
        }
    }
    //Price validation
    var price= document.forms["addForm"]["price"].value;
    if(price==null || price=="" ){
        alert("Please enter a valid price");
        return false;
    } else{
        if(!isNaN(price))
        {
            var numberPrice=Number(price);
            if(numberPrice>9999.99){

                alert("Price cannot be greater than 6 digits(with 2 floating points)");
                return false;
            }
            if(!/^[0-9]+([.][0-9]{0,2})?$/.test(numberPrice+"")){
                alert("Price invalid , format 6 digits with 2 decimal points");
                return false;
            }
        }
        else
        {
            alert("Price has to be a number!!!");
            return false;
        }
    }
    //Quantity validation
    var qty = document.forms["addForm"]["qty"].value;
    if(qty==null || qty==""){
        alert("Please enter a quantity");
        return false;
    } else{
        if(isNaN(qty)){
            alert("The quantity is not a number!!");
            return false;
        }
        else{
            if(/^.*[.].*$/.test(qty)){
                alert("The quantity cannot be fractional!!");
                return false;
            }
            if(!/^[0-9]{0,4}$/.test(qty)){
                alert("The quantity can only be 4 digits!");
                return false;
            }
        }
    }


}

function contactValidation(){

    var isValidName=false;
    var isValidEmail=false;
    var isValidDesc=false;
    var varName=document.forms["contact"]["name"].value;

    if(varName==null||varName==""||varName.length===0){
        alert("Name cant be empty. Please enter your name!!!");
        return false;
    }
    else
    {
        if(!/^[A-Za-z ]+$/.test(varName)){
            alert("Invalid name. Should contain only letters!!!");
            return false;
        }
        else
        {
            isValidName=true;
        }
    }


    var varEmail=document.forms["contact"]["email"].value;

    if(varEmail==null||varEmail==""||varEmail.length===0){
        alert("Email cant be empty. Please enter email!! ");
        return false;
    }
    else
    {
        var  format = /^[A-Za-z0-9]+([.][\A-Za-z0-9]+)*@[a-z0-9]+[.][a-z]{2,3}$/; // expression to check email
        if (format.test(varEmail)) {

            isValidEmail=true;
        }

        else{
            alert("Email invalid!! Format should be something.some@gmail.com");
            return false;
        }

    }

    var subject=document.forms["contact"]["subject"].value;
    if(subject.length===0||subject==""||subject==null){
        alert("Subject cant be empty!!!");
        return false;

    }
    else
    {
        if(!/^[A-Za-z0-9 ]+$/.test(subject)){
            alert("Subject cant have special characters");
            return false;
        }
        else{

            isValidDesc=true;
        }
    }

    if(isValidName && isValidEmail && isValidDesc)
    {
        alert("Your Message has been successfully sent!!!");
        return true;
    }
    else
    {
        alert("ERROR:  Message not sent!!");
        return false;


    }
}

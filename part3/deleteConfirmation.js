function deleteConfirmation() {
    var description = document.forms["deleteForm"]["prodid"].value;
    if (prodid!= null || prodid!= "") {
        var result = confirm("Want to delete this product?");
        if (result) {
            return true;
        } else {
            return false;
        }
    }
}
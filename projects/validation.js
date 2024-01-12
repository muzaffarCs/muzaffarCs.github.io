function formfun(){
    var name= document.myForm.fname.value;
    var cnic = document.myForm.cnic.value;
    var fname = document.myForm.father_name.value;
    switch(true){
        case (name ==null || name==""):
            alert("Please fill your name ");
            return false;
            break;
        case (fname ==null || fname==""):
            alert("Please fill your father name ");
            return false;
            break;
        case (cnic.length < 13 ||  cnic.length >13):
            alert(" Please Check your CNIC");
            return false;
            break;
        default:
            alert = (" Now Save Your Data");
    }
}
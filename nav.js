function resizeBar(){
    var x = document.getElementById("myTopNav");
    var y = document.getElementsByClassName("nav-link");
    console.log("yaaas");
    console.log(x.className);
    if(x.className == "sticky topNav"){
        x.className += " responsive";
    } else{
        x.className = "sticky topNav";
    }
}

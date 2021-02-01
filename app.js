'use strict'
const switcher = document.querySelector('.link-font');
switcher.addEventListener('click', function() {
    document.body.classList.toggle('active')
    var className = document.body.className;
    if(className == "active"){
        document.body.style.color = "blue";
    }
    console.log('current class name: ' + className);
});

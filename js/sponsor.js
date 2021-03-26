const formSponsorChild = document.querySelector('#formSponsorChild');
const html = new HTMLUI();
const storage = new localStorageMethod();

document.addEventListener('DOMContentLoaded', function() {
 
}); //LOAD END HERE!!!


 formSponsorChild.addEventListener('submit', function(e) {
    const childAmount = document.querySelector('input[name="sponsorAmt"]:checked').value;
    const childName = document.querySelector('#childName').textContent;
    const childDuration = document.querySelector('#sponsorDuration').value;
    const childImage =  document.querySelector('.child-img').src
    e.preventDefault();
    if (childDuration =='') {
        html.displayError('Select Frequency');
    } else {
        getChildInfo(formSponsorChild)
    }
})


function getChildInfo(formSponsorChild){
    const child = {
        name: formSponsorChild.querySelector('#childName').textContent,
        amount: formSponsorChild.querySelector('input[name="sponsorAmt"]:checked').value,
        duration:formSponsorChild.querySelector('#sponsorDuration').value,
        img:formSponsorChild.querySelector('.child-img').src,
        id:formSponsorChild.querySelector('#childID').textContent
    }

    storage.saveInfo(child);
}




function HTMLUI(){}



 HTMLUI.prototype.displayError = function(message){
    const div = document.createElement('div')
    div.classList = 'sponsor-error';
    div.innerHTML = `<p>${message}</p>`;
    formSponsorChild.insertBefore(div, document.querySelector('#sponsorBtn'));

    setTimeout(function(){
        document.querySelector('.sponsor-error').remove();
    }, 2000)
}

HTMLUI.prototype.displayLocalStorage = function() {
    let childLS = localStorageMethod.getInfo();
    let imgscr = document.querySelector('#sponsor-img');
   

     childLS.forEach(function(child){
        imgscr.src = child[0].img;
    })
    
}
// childInfo = JSON.parse(localStorage.getItem('childInfo'));
// console.log(childInfo[0].img)


function localStorageMethod(){}

localStorageMethod.prototype.saveInfo = function(child){
    let childInfo = storage.getInfo();
    childInfo.push(child);
    localStorage.setItem('childInfo', JSON.stringify(childInfo));
}
localStorageMethod.prototype.getInfo = function(){

    let childInfo;
    if(localStorage.getItem('childInfo') === null) {
        childInfo = [];
    } else {
        childInfo = JSON.parse(localStorage.getItem('childInfo'))
    }

    return childInfo;
}



localStorageMethod.prototype.removeInfo = function(){
    
}



 //href="<?php echo esc_url(site_url('sponsor-child'))?>" -->
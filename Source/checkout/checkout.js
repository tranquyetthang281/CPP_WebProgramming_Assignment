var cardDrop = document.getElementById('card-dropdown');
var activeDropdown;
cardDrop.addEventListener('click',function(){
  var node;
  for (var i = 0; i < this.childNodes.length-1; i++)
    node = this.childNodes[i];
    if (node.className === 'dropdown-select') {
      node.classList.add('visible');
       activeDropdown = node; 
    };
})

window.onclick = function(e) {
  console.log(e.target.tagName)
  console.log('dropdown');
  console.log(activeDropdown)
  if (e.target.tagName === 'LI' && activeDropdown){
    if (e.target.innerHTML === 'Zalo Pay') {
      document.getElementById('credit-card-image').src = './img/zalo.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Zalo Pay';
      document.getElementById("frame-1").innerText='Phone Number';
      document.getElementById("frame-2").innerText='Phone Number';
      document.getElementById("frame-3").innerText='Email';
      document.getElementById("frame-4").innerText='Pin';
    }
    else if (e.target.innerHTML === 'Momo') {
         document.getElementById('credit-card-image').src = './img/momo.jpg';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Momo';   
      document.getElementById("frame-1").innerText='Phone Number';
      document.getElementById("frame-2").innerText='Phone Number';
      document.getElementById("frame-3").innerText='Email';
      document.getElementById("frame-4").innerText='Pin';   
    }
    else if (e.target.innerHTML === 'Visa') {
         document.getElementById('credit-card-image').src = './img/visa.png';
          activeDropdown.classList.remove('visible');
      activeDropdown = null;
      e.target.innerHTML = document.getElementById('current-card').innerHTML;
      document.getElementById('current-card').innerHTML = 'Visa';
      document.getElementById("frame-1").innerText='Card Number';
      document.getElementById("frame-2").innerText='Card Holder';
      document.getElementById("frame-3").innerText='Expires';
      document.getElementById("frame-4").innerText='CVC';   
    }
  }
  else if (e.target.className !== 'dropdown-btn' && activeDropdown) {
    activeDropdown.classList.remove('visible');
    activeDropdown = null;
  }
}
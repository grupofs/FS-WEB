
popupWhatsApp = () => {
  
  let btnClosePopup = document.querySelector('.closePopup');
  let btnOpenPopup = document.querySelector('.whatsapp-button');
  let popup = document.querySelector('.popup-whatsapp');
  let sendBtn = document.getElementById('send-btn');


  btnClosePopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-whatsapp-popup')
  })
  
  btnOpenPopup.addEventListener("click",  () => {
    popup.classList.toggle('is-active-whatsapp-popup')
     popup.style.animation = "fadeIn .6s 0.0s both";
  })
  
  sendBtn.addEventListener("click", () => {
  let msg = document.getElementById('whats-in').value;
  let tlf = '51999421795';
  let relmsg = msg.replace(/ /g,"%20");
  
     
  window.open('https://web.whatsapp.com/send?phone='+tlf+'&text='+relmsg, '_blank'); 
  });

 

  setTimeout(() => {
    popup.classList.toggle('is-active-whatsapp-popup');
  }, 3000);
}

popupWhatsApp();

// $(".send-wsp").click(function(){
//   var msj = $(".txtwhats").val();

//   window.open('https://wa.me/51948967212?text='+msj, '_blank'); 
// })


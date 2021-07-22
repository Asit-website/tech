
function searchProduct(){
   let inp= document.getElementById('sea').value.toUpperCase();
   let cardContainer=document.getElementById('card-lists');
   console.log(cardContainer);

   let cards=document.getElementsByClassName('card');
   console.log(cards);

   for(let i=0; i<cards.length; i++){
       let title=cards[i].querySelector('.card-body h5.card-title');
       console.log(title);

       if(title.innerText.toUpperCase().indexOf(inp) > -1){
           cards[i].style.display="";
       }
       else{
        cards[i].style.display="none";
       }
   }
         
}

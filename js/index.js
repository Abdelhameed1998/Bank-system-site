function rotateElem() 
{ 
   document.querySelector('.main').style.transform  = 'rotateX(180deg)'; 
} 
function rotateEl()
{ 
   document.querySelector('.main').style.transform  = 'rotateX(360deg)'; 
}
       
 // function to convert money //     
function convert_buy()
{
   var amount=document.getElementById("amount_buy");
   var from_buy=document.getElementById("from_buy");
   var from_buy_option=from_buy.options[from_buy.selectedIndex].value;
   var to_buy=document.getElementById("to_buy"); 
   var to_buy_option=to_buy.options[to_buy.selectedIndex].value;
   var conversion=document.getElementById("conversion");

   if(to_buy_option=="USD")// to USD
   {
   switch(from_buy_option)
   {
      case 'USD':conversion.textContent=amount.value+" "+"USD"; break;
      case 'EUR':conversion.textContent=Math.floor(amount.value*(17.79/16.06),2) +" "+"EUR"; break;
      case 'GBP':conversion.textContent=amount.value*(21.04/16.06) +" "+"USD"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/16.06) +" "+"USD"; break;
      case 'KWD':conversion.textContent=amount.value*(52.664/16.06) +" "+"USD"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/16.06 )+" "+"USD"; break;
      case 'JPY':conversion.textContent=amount.value*(14.735/16.06) +" "+"USD"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/16.06) +" "+"USD"; break;
      case 'LE':conversion.textContent=amount.value*(1/16.06) +" "+"USD"; break;
   }   
   }

   if(to_buy_option=="EUR")
   {
   switch(from_buy_option)
   {
      case 'EUR':conversion.textContent=amount.value+" "+"EUR"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/17.79) +" "+"EUR"; break;
      case 'GBP':conversion.textContent=amount.value*(21.04/17.79) +" "+"EUR"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/17.79) +" "+"EUR"; break;
      case 'KWD':conversion.textContent=amount.value*(52.644/17.79) +" "+"EUR"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/17.79) +" "+"EUR"; break;
      case 'JPY':conversion.textContent=amount.value*(14.735/17.79) +" "+"EUR"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/17.79) +" "+"EUR"; break;
      case 'LE':conversion.textContent=amount.value*(1/17.79) +" "+"EUR"; break;

   }   
   }

   if(to_buy_option=="GBP")
   {
   switch(from_buy_option)
   {
      case 'GBP':conversion.textContent=amount.value+" "+"GBP"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/21.045) +" "+"GBP"; break;
      case 'EUR':conversion.textContent=amount.value*(17.79/21.045) +" "+"GBP"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/21.045) +" "+"GBP"; break;
      case 'KWD':conversion.textContent=amount.value*(52.644/21.045) +" "+"GBP"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/21.045) +" "+"GBP"; break;
      case 'JPY':conversion.textContent=amount.value*(114.735/21.045) +" "+"GBP"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/21.045) +" "+"GBP"; break;
      case 'LE':conversion.textContent=amount.value*(1/21.045) +" "+"GBP"; break;

   }   
   }

   if(to_buy_option=="CAD")
   {
   switch(from_buy_option)
   {
      case 'CAD':conversion.textContent=amount.value+" "+"CAD"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/12.16) +" "+"CAD"; break;
      case 'EUR':conversion.textContent=amount.value*(17.79/12.16) +" "+"CAD"; break;
      case 'GBP':conversion.textContent=amount.value*(21.045/12.16) +" "+"CAD"; break;
      case 'KWD':conversion.textContent=amount.value*(52.66/12.16) +" "+"CAD"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/12.16)+" "+"CAD"; break;
      case 'JPY':conversion.textContent=amount.value*(14.735/12.16) +" "+"CAD"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/12.16) +" "+"CAD"; break;
      case 'LE':conversion.textContent=amount.value*(1/12.16) +" "+"CAD"; break;
   }   
   }

   if(to_buy_option=="KWD")
   {
   switch(from_buy_option)
   {
      case 'KWD':conversion.textContent=amount.value+" "+"KWD"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/52.66) +" "+"KWD"; break;
      case 'EUR':conversion.textContent=amount.value*(17.79/52.66) +" "+"KWD"; break;
      case 'GBP':conversion.textContent=amount.value*(21.045/52.66) +" "+"KWD"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/52.66) +" "+"KWD"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/52.66)+" "+"KWD"; break;
      case 'JPY':conversion.textContent=amount.value*(14.735/52.66) +" "+"KWD"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/52.66) +" "+"KWD"; break;
      case 'LE':conversion.textContent=amount.value*(1/52.66) +" "+"KWD"; break;
   }   
   }


   if(to_buy_option=="CHF")
   {
   switch(from_buy_option)
   {
      case 'CHF':conversion.textContent=amount.value+" "+"CHF"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/16.23) +" "+"CHF"; break;
      case 'EUR':conversion.textContent=amount.value*(17.79/16.23) +" "+"CHF"; break;
      case 'GBP':conversion.textContent=amount.value*(21.045/16.23) +" "+"CHF"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/16.23)+" "+"CHF"; break;
      case 'KWD':conversion.textContent=amount.value*(52.66/16.23)+" "+"CHF"; break;
      case 'JPY':conversion.textContent=amount.value*(14.735/16.23) +" "+"CHF"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/16.23) +" "+"CHF"; break;
      case 'LE':conversion.textContent=amount.value*(1/16.23) +" "+"CHF"; break;
   }   
   }

   if(to_buy_option=="JPY")
   {
   switch(from_buy_option)
   {
      case 'JPY':conversion.textContent=amount.value+" "+"JPY"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/14.735) +" "+"JPY"; break;
      case 'EUR':conversion.textContent=amount.value*(17.79/14.735)+" "+"JPY"; break;
      case 'GBP':conversion.textContent=amount.value*(21.045/14.735) +" "+"JPY"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/14.735)+" "+"JPY"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/14.735)+" "+"JPY"; break;
      case 'KWD':conversion.textContent=amount.value*(52.66/14.735) +" "+"JPY"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/14.735)+" "+"JPY"; break;
      case 'LE':conversion.textContent=amount.value*(1/14.735) +" "+"JPY"; break;
   }   
   }

   if(to_buy_option=="SAR")
   {
   switch(from_buy_option)
   {
      case 'SAR':conversion.textContent=amount.value+" "+"SAR"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/4.27) +" "+"SAR"; break;
      case 'EUR':conversion.textContent=amount.value*(17.79/4.27)+" "+"SAR"; break;
      case 'GBP':conversion.textContent=amount.value*(21.045/4.27) +" "+"SAR"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/4.27)+" "+"SAR"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/4.27)+" "+"SAR"; break;
      case 'KWD':conversion.textContent=amount.value*(52.66/4.27) +" "+"SAR"; break;
      case 'JPY':conversion.textContent=amount.value*(14.735/4.27)+" "+"SAR"; break;
      case 'LE':conversion.textContent=amount.value*(1/4.27) +" "+"SAR"; break;
   }   
   }

   if(to_buy_option=="LE")
   {
   switch(from_buy_option)
   {
      case 'LE':conversion.textContent=amount.value+" "+"LE"; break;
      case 'USD':conversion.textContent=amount.value*(16.06/1) +" "+"LE"; break;
      case 'EUR':conversion.textContent=amount.value*(17.79/1)+" "+"LE"; break;
      case 'GBP':conversion.textContent=amount.value*(21.045/1) +" "+"LE"; break;
      case 'CAD':conversion.textContent=amount.value*(12.16/1)+" "+"LE"; break;
      case 'CHF':conversion.textContent=amount.value*(16.23/1)+" "+"LE"; break;
      case 'KWD':conversion.textContent=amount.value*(52.66/1)+" "+"LE"; break;
      case 'SAR':conversion.textContent=amount.value*(4.27/1)+" "+"LE"; break;
      case 'JPY':conversion.textContent=amount.value*(14.735/1) +" "+"LE"; break;
   }   
   }

}


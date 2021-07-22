jQuery(document).ready(function($){
    "use strict";
   
    $('#customers-testimonials').owlCarousel({
       loop:true,
       center:true,
       items: 3,
       margin: 0,
       autoplay: true,
       dots: true,
       autoplayTimeout:8500,
       smartSpeed: 450,
       nav:true,
       responsive:{
           0:{
               items:1
           },
           768:{
               items:2
           },
           1170:{
               items:3
           }
       }
   });
   });
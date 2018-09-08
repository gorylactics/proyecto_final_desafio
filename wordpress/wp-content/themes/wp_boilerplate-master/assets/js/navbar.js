$(function(){
  function anilogo() {
    $("#logoanimado").animate({left: '+=950'}, "slow");
    
  }
  
  setInterval(anilogo, 2500);
});
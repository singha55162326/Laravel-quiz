$(document).ready(function(){
    var d;
    setInterval(function(){
      d = new Date();
      dates = d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
      $('#timeTaken').val(dates);
    }, 1000);
  
  });
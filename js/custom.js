var url = window.location;

$('nav a').filter(function(){
  return this.href == url;
}).parent().addClass('active');

<style>
y{
  cursor:pointer;
  color : blue;
}
</style>
<yframe></yframe>
<script src="jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
pageload(window.location.pathname);

function pageload(url){
  $.ajax({url: "http://localhost/main.php"+url, success: function(result){ $('yframe').html(result); navigate(); }});
}

function navigate(){
  $( "y" ).click(function( event ) {
    event.preventDefault();
    pageload($(this).attr('url'));
    window.history.pushState("change the page", "new page", $(this).attr('url'));
  });
}
</script>
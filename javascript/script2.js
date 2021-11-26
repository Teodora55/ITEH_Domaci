
$(document).ready(function(){
    $("#dugme").click(function(){
        let ime = $("#ime").val();
        if(!ime.match(/^[a-z]{3,}$/)){
        alert("Morate uneti Vase ime!")
        }
        else{
        let prezime = $("#prezime").val();
        if(!prezime.match(/^[a-z]{5,}$/)){
          alert("Morate uneti Vase prezime!")
          }
          else{
            let adresa = $("#adresa").val();
            if(adresa == ""){
              alert("Morate uneti Vasu adresu!")
            }
            else{
              let brojTelefona = $("#brojTelefona").val();
              if(!brojTelefona.match(/^[0-9]{6-7}$/)){
                alert("Morate uneti Vas broj telefona!")
              }
              else{
                var total = 0;
          $('input:checkbox:checked').each(function(){ 
            total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
          });
          $('input:radio:checked').each(function(){
            total += isNaN(parseInt($(this).val())) ? 0 : parseInt($(this).val());
          });
          alert("Uspesno ste porucili vasu palacinku!\nCena Vase porudzbine je " + total + " dinara");
              }
            }
          }
        }
    })

    $("#brisi").click(function(){
        $('input[type=checkbox]').prop('checked',false);
        $('input[type=radio]').prop('checked',false);
        $('input[type=text]').val("");
    })
    $( function() {
      function runEffect() {

        var options = {};
        $( "#forma" ).show( "fade", options, 500, callback );
      };
   
      function callback() {
        setTimeout(function() {
          $( "#forma:visible" ).removeAttr( "style" ).fadeOut();
        }, 1000 );
      };
   
      $( "#prikazi" ).on( "click", function() {
        runEffect();
      });
   
       $( "#forma" ).hide();
    } );

})



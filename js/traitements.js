    //Achraf
    
    $( document ).ready(function() {                
        $('#domaines').off('change').on('change', function () {
            var selectedValue = $(this).val();           
            getOutput(selectedValue);
          });
    });
    function getOutput(selectedValue) {
        $.ajax({
           url:'PopulerMetiers.php',
           type: 'post',
           data: { "Domaine": selectedValue},
           complete: function (response) {
               $('#professions').html(response.responseText);
               //alert(response.responseText);
           },
           error: function () {
               //$('#output').html('Bummer: there was an error!');
               alert('Bummer: there was an error!');
           }
       });
       return false;
     }

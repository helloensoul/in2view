var availableTags = [
      "Manolete",
      "Non Cambio",
      "4 Secondi",
      "Intro",
      "Scelte",
    ];

$("#titolo").autocomplete({
  source: availableTags,
  minLength: 0
}).click(function(){
                $(this).trigger('keydown.autocomplete');
            });;

jQuery("#cerca").click(function() {
  var titolo = jQuery("#titolo").val();
  $("#brano").val(titolo);
  switch(titolo) {
    case "Manolete":
      player.loadVideoById("MavYO2v6FUY");
      break;

    case "Non Cambio":
      player.loadVideoById("3jq8fnegm0s");
      break;

    case "4 Secondi":
      player.loadVideoById("CtugKYbuLRg");
      break;

    case "Intro":
      player.loadVideoById("rf5kxDgMkUs");
      break;

    case "Scelte":
      player.loadVideoById("QjNPWC_Hhfs");
      break;
    }
});

$("#vote").click(function(){
  var brano = $("#brano").val();
  $.ajax({
    type: "GET",
    url: "vote.php",
    data: {brano:brano},
    success: function() {
              player.loadVideoById("DnV6QgSREwA");
              $(".form").fadeOut(function(){
                $(".thank").fadeIn();
                setTimeout( function(){
                  $(".wow").fadeIn();
                }, 3000);
              });
    }
  });
});

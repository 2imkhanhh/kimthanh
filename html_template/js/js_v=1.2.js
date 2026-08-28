
$(document).ready(function(){

      $(document).on("click","#pnsearch span", function (e){
          $("#panel_search").addClass('showpn');
       });

      $(document).on("click","#panel_search .close", function (e){
          $("#panel_search").removeClass('showpn');
      });

      $("#keyword").autocomplete({
          delay: 300,
          source: function(request, response) {
              var keyword = request.term;
              var proList = [];
              $.ajax({
                  url: base_url + "/components/searchq.php",
                  data: {
                      searchq: keyword
                  },
                  method: "POST",
              //	dataType : 'JSON',
                  success: function(data) {
                      $('#pmlistsearch').html(data);
                  /*	$.each(data.data, function(key, value) {
                          //proList.push(value.name);

                      });
                      //response(proList);*/
				},
			})
		}
	});

    $(window).scroll(function(){
        // Get number of pixels of scroll.
        var pixel = $(window).scrollTop();
        console.log(pixel);
        // When the scroll exceeds 300px, give the [fixed-menu] class.
        if(pixel > 300){
            $('#pnmenu').addClass('fixed-menu');
        } else {
            $('#pnmenu').removeClass('fixed-menu');
        }
    });


	$(document).on("keyup", "input.format_number", function (event) {

		if (event.which >= 37 && event.which <= 40) return;

		$(this).val(function (index, value) {
			return value
				.replace(/\D/g, "")
				.replace(/\B(?=(\d{3})+(?!\d))/g, ".")
				;
		});

	});

	$(document).on("keyup", "input.format_float_number", function (event) {

		var float_regexp = (/[^0-9\.]|^\.+(?!$)|^0+(?=[0-9]+)|\.(?=\.|.+\.)/g);
		if (float_regexp.test(this.value)) {
			$(this).val(this.value.replace(float_regexp, ''));
		}

	});

});
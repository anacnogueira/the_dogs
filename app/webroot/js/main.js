	$(document).ready(function() {
		$(".fancybox").fancybox({
			maxWidth	: 945,
			maxHeight	: 360,
			fitToView	: true,
			width		: '80%',
			height		: '90%',
			autoSize	: false,
			closeClick	: false,
			openEffect	: 'elastic',
			closeEffect	: 'elastic'
		});

    $("button").click(function()){
      keyword = $("#keyword").value();
      alert(keyword);
    });

	});

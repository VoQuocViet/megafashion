<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/slider.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="css/owl.theme.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Favicons Icon -->
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />

  <script src="bootstrap/dist/js/bootstrap.js"></script>
  <script src="js/jquery.js"></script>
  <script>
jQuery(document).ready(function($) {    
  //selector đến menu cần làm việc
  var TopFixMenu = $("#nav");
  // dùng sự kiện cuộn chuột để bắt thông tin đã cuộn được chiều dài là bao nhiêu.
    $(window).scroll(function()
	{
    // Nếu cuộn được hơn 150px rồi
        if($(this).scrollTop()>100)
		{
	// Tiến hành show menu ra
        TopFixMenu.show();
        }
	// Ngược lại, nhỏ hơn 150px thì hide menu đi.
		else
		{
           TopFixMenu.show();
        }
	}
    )
	$(window).resize(function(){
    if($(window).width() < 800 ) 
	{
        $('#slide-head').hide();
	}
    else 
	{
        $('#slide-head').show();
	};
});

})
</script>
  
<title>Thời Trang Trẻ</title>
<link rel="icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://demo.magikthemes.com/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
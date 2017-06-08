<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
     <style>
		     	.jcarousel {
		    position: relative;
		    overflow: hidden;
		}


		.jcarousel ul {
		    width: 20000em;
		    position: relative;

		    /* Optional, required in this case since it's a <ul> element */
		    list-style: none;
		    margin: 0;
		    padding: 0;
		}


		.jcarousel li {
		    /* Required only for block elements like <li>'s */
		    float: left;
		}
     </style>
</head>
<body>
<div class="jcarousel">
	 <div class="jcarousel-wrapper">
    <div class="jcarousel" data-jcarousel="true">
      <ul class="clearfix">
        <li><img src="http://placehold.it/500x600" alt="..."></li>
        <li><img src="http://placehold.it/500x600" alt="..."></li>
        <li><img src="http://placehold.it/500x600" alt="..."></li>
        <li><img src="http://placehold.it/500x600" alt="..."></li>
      </ul>
    </div>
    <a href="#" class="jcarousel-control-prev" data-jcarouselcontrol="true">‹</a>
    <a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true">›</a>
  </div>
		
	</div>
<script type="text/javascript" src="/js/app.js"></script>
<script>
$(function() {
    $('.jcarousel').jcarousel();
});
</script>
</body>
</html>
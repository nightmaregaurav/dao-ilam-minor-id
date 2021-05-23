<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <?php
		if (isset($meta_tag_file)){
			if(file_exists($meta_tag_file))
				include $meta_tag_file;
		}
		if (isset($meta_tags)){
			echo $meta_tags;
		}
	?>

    <title><?php if (isset($title)){echo $title;} ?></title>

    <link rel="shortcut icon" type="image/png" href="/static/favicon.png"/>

    <link href="/static/lib/bootstrap-4.1.3-dist/css/bootstrap.css" rel="stylesheet"/>
	<link href="/static/lib/bootstrap-5.0.0-beta1-dist/css/bootstrap.css" rel="stylesheet">
	<link href="/static/lib/fontawesome-free-5.15.2-web/css/all.css" rel="stylesheet">
	<link href="/static/lib/animate-4.1.1/animate.css" rel="stylesheet">
	<link href="/static/lib/datatables/jquery.dataTables.css" rel="stylesheet">
	<link href="/static/lib/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	

	<link rel="stylesheet" type="text/css" href="/static/css/main.css">
	
	<?php
		if (isset($stylesheet_file)){
			if(file_exists($stylesheet_file))
				include $stylesheet_file;
		}
		if (isset($stylesheet)){
			echo $stylesheet;
		}
	?>

    <style type="text/css">
	    html{scroll-behavior: smooth!important;}
	    #base-contents{
	        display: flex!important;
	        flex-direction: column!important;
	        min-height: 100vh!important;
	        min-width: 100%!important;
	        max-width: 100%!important;
	        width: 100%!important;
	    }
	    #base-content-1{display: block;}
	    #base-content-2{
	        display: flex!important;
	        flex-direction: column!important;
	        flex-wrap: wrap!important;
	        justify-content: center!important;
	        flex: auto!important;
	        width: 100%!important;
	        max-width: 100%!important;
	        min-width: 100%!important;
	        margin: 0!important;
	        padding: 0!important;
	    }
	    #base-content-3{}
	    #goToTopWrap {
	        display: none;
	        border: 2px solid #292727;
	        width: 34px;
	        height: 34px;
	        border-radius: 3px;
	        position: fixed;
	        text-align: center;
	        margin-bottom:3px;
	        bottom: 20px;
	        right: 20px;
	        z-index: 99;
	        cursor: pointer;
	        background: #453f3f;
	    }
	    #goToTopWrap:hover{
	        background-color: #838282;
	        border: #343436;
	    }
	    @media print{
	    	#goToTopWrap{
	    		display: none !important;
	    	}
	    }
	    #goToTopArrow {
	        display: block;
	        margin: auto;
	        width: 25px;
	        height: 25px;
	        position: relative;
	    }
	    #goToTop-left-wing, #goToTop-right-wing {
	        border-radius: 3px;
	        height: 3px;
	        width: 9px;
	        background-color: white;
	        margin: -1px!important;
	    }
	    #goToTop-left-wing {
	        position: relative;
	        display: inline-block;
	        transform: rotate(-45deg);
	    }
	    #goToTop-right-wing {
	        position: relative;
	        display: inline-block;
	        transform: rotate(45deg);
	    }
	    .alert {
	        position: relative;
	        padding: .75rem 1.25rem;
	        margin-bottom: 1rem;
	        border: 1px solid transparent;
	        border-radius: .25rem
	    }
	    .alert-dismissible {
	        padding-right: 4rem
	    }
	    .alert-dismissible .close {
	        position: absolute;
	        top: 0;
	        right: 0;
	        padding: .75rem 1.25rem;
	        color: inherit
	    }
	    .alert-dark {
	        color: #1b1e21;
	        background-color: #d6d8d9;
	        border-color: #c6c8ca
	    }
	    .alert-info {
	        color: #0c5460;
	        background-color: #d1ecf1;
	        border-color: #bee5eb
	    }
	    .alert-success {
	        color: #155724;
	        background-color: #d4edda;
	        border-color: #c3e6cb
	    }
	    .alert-warning {
	        color: #856404;
	        background-color: #fff3cd;
	        border-color: #ffeeba
	    }
	    .alert-danger {
	        color: #721c24;
	        background-color: #f8d7da;
	        border-color: #f5c6cb
	    }
	    .fade {
	        transition: opacity .15s linear
	    }
	    @media (prefers-reduced-motion:reduce) {
	        .fade {
	            transition: none
	        }
	    }
	    .fade:not(.show) {
	        opacity: 0
	    }
	    .close {
	        float: right;
	        font-size: 1.5rem;
	        font-weight: 700;
	        line-height: 1;
	        color: #000;
	        text-shadow: 0 1px 0 #fff;
	        opacity: .5
	    }
	    .close:hover {
	        color: #000;
	        text-decoration: none
	    }
	    .close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover {
	        opacity: .75
	    }
	    button.close {
	        padding: 0;
	        background-color: transparent;
	        border: 0;
	        -webkit-appearance: none;
	        -moz-appearance: none;
	        appearance: none
	    }
	    .loader-splash{
	        position: absolute;
	        z-index: 99;
	        display: flex;
	        align-items: center;
	        height: 100vh !important;
	        width: 100vw !important;
	        background: rgba(121,82,179,0.5);
	        backdrop-filter:blur(4px);
	        -webkit-backdrop-filter:blur(4px);
	    }
	    .loader{
	        width: 80px;
	        height: 67px;
	        margin: auto;
	        position: relative;
	    }
	    .loader .square{
	        background: #009dff;
	        width: 50px;
	        height: 50px;
	        margin: 0 auto;
	        border-radius: 4px;
	        animation-fill-mode: both;
	        animation: motion 2.5s infinite cubic-bezier(0.89, 0.03, 0.06, 1.5);
	    }
	    .loader .path{
	        height: 10px;
	        width: 110px;
	        overflow: hidden;
	        position: absolute;
	        bottom: 0;
	        left: 0;
	    }
	    .loader .path > div{
	        background: #444;
	        width: 10px;
	        height: 10px;
	        border-radius: 2px;
	        margin: 0 15px;
	        position: absolute;
	        top: 0;
	        left: 0;
	        animation-fill-mode: both;
	        animation: dynamic 5s infinite cubic-bezier(0.89, 0.03, 0.06, 1.5);
	    }
	    .loader .path > div:nth-child(1){ left: 40px; }
	    .loader .path > div:nth-child(2){ left: 80px; }
	    .loader .path > div:nth-child(3){ left: 120px; }
	    .loader .path > div:nth-child(4){ left: 160px; }
	    .loader .path > div:nth-child(5){ left: 200px; }
	    .loader .path > div:nth-child(6){ left: 240px; }
	    .loader .path > div:nth-child(7){ left: 280px; }
	    @keyframes motion{
	        50%{ transform: rotate(90deg); }
	        100%{ transform: rotate(180deg); }
	    }
	    @keyframes dynamic{
	        0%{ transform: translateX(-40px); }
	        25%{ transform: translateX(-80px); }
	        50%{ transform: translateX(-120px); }
	        75%{ transform: translateX(-160px); }
	        100%{ transform: translateX(-200px); }
	    }

	    body{
	    	font-family: mangal;
	    }
	</style>
</head>
<body>
<?php if(!isset($replace_body) or $replace_body!=TRUE): ?>
	<div class="loader-splash" id="splash-loader-overlay">
    	<div class="loader">
    		<div class="square"></div>
    		<div class="path">
    			<div></div>
    			<div></div>
    			<div></div>
    			<div></div>
    			<div></div>
    			<div></div>
    			<div></div>
    		</div>
    		<span aria-label="Loading..."></span>
    	</div>
    </div>
    <div id="base-contents">
        <div id="base-content-1">
        	<?php
				if (isset($no_nav_bar)){
					if($no_nav_bar != true)
						include $_SERVER["DOCUMENT_ROOT"].'/views/nav.php';
				}
				else{
					include $_SERVER["DOCUMENT_ROOT"].'/views/nav.php';
				}
			?>
        </div>
        <div id="base-content-2">
            <div style="width: 100%!important;">
            <?php
				if(isset($body_file)){
					if(file_exists($body_file))
						include $body_file;
				}
				if (isset($body)){
					echo $body;
				}
			?>
            </div>
        </div>
        <div id="base-content-3">
        	<?php
				if (isset($no_footer)){
					if($no_footer != true)
						include $_SERVER["DOCUMENT_ROOT"].'/views/footer.php';
				}
				else{
					include $_SERVER["DOCUMENT_ROOT"].'/views/footer.php';
				}
			?>
            <div id="goToTopWrap" onclick="goToTop();">
            	<div id="goToTopArrow">
            		<span id="goToTop-left-wing"></span><span id="goToTop-right-wing"></span>
            	</div>
            </div>
        </div>
    </div>
<?php else: ?>
	<?php
		if(isset($body_file)){
			if(file_exists($body_file))
				include $body_file;
		}
		if (isset($body)){
			echo $body;
		}
	?>
<?php endif; ?>
    <script type="text/javascript" src="/static/lib/jquery-3.5.1/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="/static/lib/popper-2.6.0/popper.js"></script>
	<script type="text/javascript" src="/static/lib/bootstrap-4.1.3-dist/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="/static/lib/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.js"></script>
	<script type="text/javascript" src="/static/lib/fontawesome-free-5.15.2-web/js/all.js"></script>
	<script type="text/javascript" src="/static/lib/wowjs-1.3.0/wow.js"></script>
	<script>new WOW().init();</script>
	<script>$('[data-toggle="tooltip"]').tooltip();</script>
	<script type="text/javascript" src="/static/lib/datatables/jquery.dataTables.js"></script>

	<script type="text/javascript" src="/static/js/main.js"></script>
	
	<?php
		if (isset($script_file)){
			if(file_exists($script_file))
				include $script_file;
		}
		if (isset($script)){
			echo $script;
		}
	?>
    
    <script>
	    function msg_close(node){
	        node.parentElement.remove();
	    }
	    let goToTopBtn = document.getElementById("goToTopWrap");
	    window.addEventListener('scroll', scrollFunction);
	    function scrollFunction() {
	        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	            goToTopBtn.style.display = "block";
	        } else {
	            goToTopBtn.style.display = "none";
	        }
	    }
	    function goToTop() {
	        document.body.scrollTop = 0;
	        document.documentElement.scrollTop = 0;
	    }
	    window.addEventListener('load', hideLoader);
	    function hideLoader(){
	        let splash = document.getElementById('splash-loader-overlay');
	        for (let i=1.0; i>=0; i-=0.001){
	            splash.style.opacity = i.toString();
	        }
	        splash.style.opacity = '0';
	        splash.style.display = 'none';
	    }
	    function showLoader(){
	        let splash = document.getElementById('splash-loader-overlay');
	        for (let i=0.0; i<=1; i+=0.001){
	            splash.style.opacity = i.toString();
	        }
	        splash.style.opacity = '1';
	        splash.style.display = '';
	    }
	</script>
</body>
</html>
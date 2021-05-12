Math_in_Paris_20htmlMath_in_Paris_19-20<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1"></meta>
		<meta name="description" content="Département de Mathématiques d'Orsay"></meta>
		<meta name="author" content="Dang Laurent, Allaert Olivier"></meta>
		<title>D&eacute;partement de Math&eacute;matiques d'Orsay</title>
		<style type="text/css" media="all">
		<!--
		@import "http://www.math.u-psud.fr/css/style_olivier.css";
		@import "http://www.math.u-psud.fr/css/style_laurent.css";
		-->
		</style>

		<script type="text/javascript">
			<!--
			window.onload=montre;
			function montre(id) {
				var d = document.getElementById(id);
		    for (var i = 1; i<=10; i++) {
	            if (document.getElementById('smenu'+i)) {document.getElementById('smenu'+i).style.display='none';}
				        }
			if (d) {d.style.display='block';}
			}
//-->
</script>
        <script language="javascript" type="text/javascript">
		             function writeMail() {
		                   document.write('<a href="mail');
		                   document.write('to:');
		                   document.write(login);
		                   document.write('@');
		                   document.write('math.');
		                   document.write('u-psud.fr">');
		                   document.write(name);
		                   document.write('<');
		                  document.write('/a>');
																																        }
</script>
<script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
		MathJax.Hub.Config({
		 tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
		});
</script>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php $handle = fopen("counter.txt", "r"); 
	if(!$handle){ echo "could not open the file" ; } 
	else { 
		$counter = ( int ) fread ($handle,20) ; 
		fclose ($handle) ; 
		$counter++ ; 
		$handle = fopen("counter.txt", "w" ) ; 
		fwrite($handle,$counter) ; 
		fclose ($handle) ; } 
?>
</head>

<body>

	<div id='global'>
<div id="header">
<center><h1>Teaching</h1></center>
</div>
<!------------------------------------------------------------------------------- Bottom of the page ------------------------------------------------------------------------------------------------------------>

<div id="header">
<center><h2>IUT Math 2020-2021</h2></center>
</div>

<div id='news'>
	<li>
	Cours 24/11/2020 - <a href="Teaching/IUT_2020-2021/Cours_24Nov/Meryem.pdf">Hajmi Meryem</a> <a href="Teaching/IUT_2020-2021/Cours_24Nov/victor.pdf">Xu Victor</a> <a href="http://linoit.com/users/arnabkundu/canvases/IUT%2024%2F11%2F2020">Lino</a>
	</li>

</div>
</div>
</div>
</body>

<?php
include('mise_en_page<center></center<ul>	

</ul><!c-------- Contents --Lecture 1 -Lecture 2 -Lecture 3 - Lecture 4 - _fin.php');
//!--Fin pied de pagehtml
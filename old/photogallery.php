<!DOCTYPE html>
<html>
<head>
	<title>Creating Futures - Photo Gallery</title>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel='stylesheet' type='text/css' href='css\styles.css' />
	
	<SCRIPT LANGUAGE="JavaScript">
	 var num=1
	 img1 = new Image ()
	 img1.src = "images/photo/scroll1.jpg"
	 img2 = new Image ()
	 img2.src = "images/photo/scroll2.jpg"
	 img3 = new Image ()
	 img3.src = "images/photo/scroll3.jpg"

	 //text1 = "Text for Picture One"
	 //text2 = "Text for Picture Two"
	 //text3 = "Text for Picture Three"
	 //text4 = "Text for Picture Four"

	 function slideshowUp()
	 {
		 num=num+1
		 if (num==4)
		 {num=1}
		 document.mypic.src=eval("img"+num+".src")
		 document.joe.burns.value=eval("text"+num)
	 }

	 function slideshowBack()
	 {
		 num=num-1
		 if (num==0)
		 {num=3}
		 document.mypic.src=eval("img"+num+".src")
		 document.joe.burns.value=eval("text"+num)
	 }
	 </SCRIPT>
</head>
<body leftmargin=0 topmargin=0 marginheight="0" marginwidth="0" bgcolor="#ffffff">
<table border="0" cellspacing="0" cellpadding="0" width="780" height="600">
	<tr><td><img src="images/photogalleryhd.jpg" width="780" height="110" alt="" border="0"><td></tr>		
	<tr bgcolor="#666666" height="1"><td></td></tr>		
	<tr><td height="489px">
		<table border="0" cellspacing="0" cellpadding="0" width="100%" height="100%">
			<tr>
				<td width="150px" valign="top">
					<table border="0" cellspacing="0" cellpadding="0" width="100%" height="100%">
						<tr><td background="images/labelbg.png" class="photoHeading">&nbsp;&nbsp;Albums</td></tr>
						<tr><td valign="top" align="center">
							<div style="overflow: auto; height: 455px">
							<table border="0" cellspacing="0" cellpadding="0" width="100%">
								<tr><td>
									<img src="images/photo/scroll1.jpg" />
								</td></tr>
								<tr><td style="vertical-align:top; height:30px"><a href="#">Album 1</a></td></tr>
								<tr><td>
									<img src="images/photo/scroll2.jpg" />
								</td></tr>
								<tr><td style="vertical-align:top; height:30px"><a href="#">Album 2</a></td></tr>
								<tr><td>
									<img src="images/photo/scroll3.jpg" />
								</td></tr>
								<tr><td style="vertical-align:top; height:30px"><a href="#">Album 3</a></td></tr>
								<tr><td>
									<img src="images/photo/scroll3.jpg" />
								</td></tr>
								<tr><td style="vertical-align:top; height:30px"><a href="#">Album 4</a></td></tr>
								<tr><td>
									<img src="images/photo/scroll3.jpg" />
								</td></tr>
								<tr><td style="vertical-align:top; height:30px"><a href="#">Album 5</a></td></tr>								
							</table>
							</div>
						</td></tr>
					</table>
				</td>
				<td width="1" bgcolor="#666666"></td>
				<td width="629" style="vertical-align:top">
					<table border="0" cellspacing="0" cellpadding="0" width="100%">
						<tr style="height:70px; vertical-align:top"><td colspan="3">
							<p class="para">
								<span class="subHeading">Album1</span></br>
								Date: dd/mm/yyyy</br>
								Description: </br>
							</p>
						</td></tr>
						<tr><td bgcolor="#666666" height="1" colspan=3></td></tr>
						<tr style="height:350px; vertical-align:middle">
						<td width="30px"><img src="images/previous.jpg" onmouseover="this.style.cursor='pointer';" onclick="javascript:slideshowBack()" alt="Back"/></td>
						<td width="569px" align="center"><IMG SRC="images/photo/scroll1.jpg" NAME="mypic" /></td>
						<td width="30px"><img src="images/next.jpg" onmouseover="this.style.cursor='pointer';" onclick="javascript:slideshowUp()" alt="Next"/></td>
						</tr>
						<tr><td class="hint" colspan="3">&nbsp;&nbsp;<p class="para">photo details</p></td></tr>
					</table>
				</td>
			</tr>
		</table>
	</td></tr>
	<tr bgcolor="#666666" height="1"><td></td></tr>		
	<tr><td><p style="font-size: 10px;" align="center">Copyright &copy;2014 Creating Futures. All Right Reserved.</p></td></tr>	
	<tr bgcolor="#666666" height="1"><td></td></tr>		
</table>

</body>
</html>
<?php
/**
 * The sidebar containing the Right Side Bar widget areas.
 *
 * If no active widgets in either sidebar, they will be hidden completely.

/*
 * The front page widget area is triggered if any of the areas
 * have widgets. So let's check that first.
 *
 * If none of the sidebars have widgets, then let's bail early.
 */
if ( ! is_active_sidebar( 'right-sidebar' ) )
	return;

// If we get this far, we have widgets. Let do this.
?>


<div id="RightSideBar-blog" class="blog">

<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		<div class="RightSection" role="complementary">
			<?php dynamic_sidebar( 'right-sidebar' ); ?>
		</div><!-- #secondary -->
<?php endif; ?>

<!--Search
<div class="RightSection">	<form method="post" action="results.php">
	<input type="text" class="searchStyle" value="Search" onfocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;"/></table>
	</form></div>
-->
<!--Social Media-->
<div class="RightSection"><h3>Stay Connected</h3>	
<a href="http://www.facebook.com/NewDawnTreatmentCenters" target="_blank"><img border="0" src="http://www.newdawntreatmentcenters.com/images/Facebook.png" width="37" height="37" alt="New Dawn Treatment Centers on Facebook"></a>
<a href="https://twitter.com/NewDawnCtr" target="_blank"><img border="0" src="http://www.newdawntreatmentcenters.com/images/Twitter.png" width="37" height="37" alt="New Dawn Treatment Centers on Twitter"></a>
<a href="http://www.linkedin.com/company/new-dawn-treatment-centers?trk=hb_tab_compy_id_1219296" target="_blank"><img border="0" src="http://www.newdawntreatmentcenters.com/images/LinkedIn.png" width="37" height="37" alt="New Dawn Treatment Centers on Linked In"></a>
<a href="http://www.youtube.com/watch?v=7QCgepZjT7s" target="_blank"><img border="0" src="http://www.newdawntreatmentcenters.com/images/YouTube.png" width="37" height="37" alt="New Dawn Treatment Centers on YouTube"></a>
<a href="http://pinterest.com/newdawncenter/" target="_blank"><img border="0" src="http://www.newdawntreatmentcenters.com/images/Pinterest.png" width="37" height="37" alt="New Dawn Treatment Centers on Pinterest"></a>
</div>

<!--Constant Contact-->
<div class="RightSection"><h3>Sign Up For<br/> 
Our Newsletter</h3>	

<!-- BEGIN: Constant Contact Stylish Email Newsletter Form -->

<form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;">

<table><tr><td valign="top"><input type="text" onfocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" name="ea" style="width:147px; height: 29px; color: #6d6e71; font-family: Lusitana, Georgia, serif; font-size: 14px;" value="Email Address" ></td>
<td valign="top"><input type="image"  src="http://www.newdawntreatmentcenters.com/images/Go_Btn.jpg"name="go" value="GO" class="submit"  style="width: 35px; height: 35px;"></td></tr></table>
<input type="hidden" name="llr" value="vpjdpeeab">
<input type="hidden" name="m" value="1103956649461">
<input type="hidden" name="p" value="oi">
</form>

<!-- END: Constant Contact Stylish Email Newsletter Form -->


</div>
<!--Get Confidential Help-->
<div class="RightSection">
<div id="GetHelp">Get Confidential Help<br/><span>866.969.4300</span></div>
</div>

<!--Contact Form-->
<div class="RightSection"><h3>Contact Us</h3>	
	<form name="contactform" action="http://www.newdawntreatmentcenters.com/contactform.php" method="post">
		<input type="hidden" name="subject" value="Email From New Dawn Treatment Centers Website">


		<input name="sendto" type="hidden" value="info@newdawnts.com">

		<p> <input name="name" id="name" class="ContactFormSideBar" value="Name" type="text"  style="width: 180px; height: 25px; padding-left: 5px; font-size: 14px; background: white; color: #6d6e71; font-family: Lusitana, Georgia, serif;"
			onfocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" >
		</p>
	

	

		<p> <input name="email" id="email"  value="E-Mail" type="text"  onfocus="if(this.value==this.defaultValue)this.value='';" 
			onBlur="if(this.value=='')this.value=this.defaultValue;" class="ContactFormSideBar" style="width: 180px; height: 25px; padding-left: 5px; font-size: 14px; background: white; color: #6d6e71; font-family: Lusitana, Georgia, serif;">
		</p>

	
		<p>
	
		<TEXTAREA name="message"  value="Your Message" class="ContactFormSideBar" 
		onfocus="if(this.value==this.defaultValue)this.value='';" onBlur="if(this.value=='')this.value=this.defaultValue;" 
		style="width: 180px; padding: 5px 0 0 5px; font-size: 14px; background: white; color: #6d6e71; font-family: Lusitana, Georgia, serif; height: 85px;">Your Message:</TEXTAREA>
      </p>
      <p>
        <input name="brochure" type="checkbox" value="yes" /> 
        <label for="brochure"><strong style="font-size: 14px;">Please send me a brochure.</strong> </label><p><span class="fineprint">Note: If you would like a brochure sent to you, please enter your address in the Message area above</span></p>
		
		</p>

		

<input type="image" src="http://www.newdawntreatmentcenters.com/images/Submit_Btn.png" width="116" height="31">

			</form>
</div>

</div>
<script language="c#" runat="server">
	
	
	
	//--> Begin Event :: Application_BeginRequest
	protected void Application_BeginRequest(Object sender, EventArgs e) {
		
		//url re-writer
			//what is the requested path
			string strCurrentPath = Request.Path;
			string strReWritePath = "";
			
			//check for 301s
			//URL_Rewrite(strCurrentPath);
			
			//check for re-writes
			if(strCurrentPath == "/mission.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/about/mission.html");  
				Response.End();
			}
			if(strCurrentPath == "/chemdephome.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/programs.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/treatment-options/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/eatingdisorderhome.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/contact.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/contact-us/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/staff.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/our-staff/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/edprograms.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/treatment-options/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/assesment.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/resources/assessment-tool.html");  
				Response.End();
			}
			if(strCurrentPath == "/facilities.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/facilities/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/edstaff.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/our-staff.html");  
				Response.End();
			}
			if(strCurrentPath == "/locations.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/contact-us/driving-directions.html");  
				Response.End();
			}
			if(strCurrentPath == "/newsletter.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/alumni/newsletter.html");  
				Response.End();
			}
			if(strCurrentPath == "/newsletter.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/alumni/newsletter.html");  
				Response.End();
			}
			if(strCurrentPath == "/successstories.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/success-stories.html");  
				Response.End();
			}
			if(strCurrentPath == "/edmission.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/about/mission.html");  
				Response.End();
			}
			if(strCurrentPath == "/edassesment.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/resources/assessment-tool.html");  
				Response.End();
			}
			if(strCurrentPath == "/edcontact.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/contact-us/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/edcontact.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/contact-us/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/ednewsletter.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/alumni/newsletter.html");  
				Response.End();
			}
			if(strCurrentPath == "/accreditation.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/resources/accreditations-affiliations.html");  
				Response.End();
			}
			if(strCurrentPath == "/eatdcontact.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/contact-us/index.html");  
				Response.End();
			}
			if(strCurrentPath == "/ChemDepBrochure.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/chemical-dependency/contact-us/request-brochure.html");  
				Response.End();
			}
			if(strCurrentPath == "/sendbrochure.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/contact-us/request-brochure.html");  
				Response.End();
			}
			if(strCurrentPath == "/EatDisBrochure.html") {
				Response.Status = "301 Moved Permanently";
				Response.AddHeader("Location","/eating-disorder/contact-us/request-brochure.html");  
				Response.End();
			}
			//check general re-writer
			else if(1 == 2) {
				//do nothing
			}
			
			//re-write the path
			if(strReWritePath != "") {
				Context.RewritePath(strReWritePath);
			}
		//end url re-writer
		
	}
	//<-- End Event :: Application_BeginRequest
	
</script>
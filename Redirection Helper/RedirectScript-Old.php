<?php
/* missing parameters from first '&' occurrence in the string */
	$string = $_GET['url'];
	if($string){

	if (!strpos($string, "shopclues") ==  false) { 
    // Electronics: 2.50%/sale Others: 5%/Sale Shoogloonetwork
		if(strpos($string, "?") ==  false)
			header("Location: http://partners.shoogloonetwork.com/z/108945/CD12788/&lnkurl=".$string."%253Futm_source=shoogloo%2526utm_medium=affiliate%2526utm_campaign=Shoogloo-affiliate");
		else
			header("Location: http://partners.shoogloonetwork.com/z/108945/CD12788/&lnkurl=".$string."%2526utm_source=shoogloo%2526utm_medium=affiliate%2526utm_campaign=Shoogloo-affiliate");
	} 
	else if ((!strpos($string, "tradus") ==  false))
	{
		if(strpos($string, "?") ==  false)
			header("Location: http://ads.ibibo.com/ad/www/affiliate/afck.php?affid=1891__oaparams=2__bannerid=3357__zoneid=16853__OXLCA=1__cb=8362468124__oadest=http://ads.ibibo.com/ad/www/affiliate/afck.php?affid=1891__oaparams=2__bannerid=3357__zoneid=16853__OXLCA=1__cb=8362468124__oadest=".$string."?utm=ibiboads");
		else
			header("Location: http://ads.ibibo.com/ad/www/affiliate/afck.php?affid=1891__oaparams=2__bannerid=3357__zoneid=16853__OXLCA=1__cb=8362468124__oadest=http://ads.ibibo.com/ad/www/affiliate/afck.php?affid=1891__oaparams=2__bannerid=3357__zoneid=16853__OXLCA=1__cb=8362468124__oadest=".$string."&utm=ibiboads");
    	}
	else if(!strpos($string, "homeshop18") ==  false) 
	{
		//Shoogloonetwork
		if(strpos($string, "?") ==  false)
			header("Location: http://partners.shoogloonetwork.com/z/215519/CD12788/&lnkurl=".$string."%253Futm_source=affiliate%2526utm_medium=trt%2526utm_campaign=text");
		else
			header("Location: http://partners.shoogloonetwork.com/z/215519/CD12788/&lnkurl=".$string."%2526utm_source=affiliate%2526utm_medium=trt%2526utm_campaign=text");
	}
	else if(  !strpos($string, "yebhi") ==  false  ) //Yebhi Affiliate
	{
		if(strpos($string, "?") ==  false)
			header("Location:". $string."?utm_source=arthsalutions&utm_medium=External&utm_campaign=gcf&aff=MM29A26");
		else
			header("Location:". $string."&utm_source=arthsalutions&utm_medium=External&utm_campaign=gcf&aff=MM29A26");
	}
	
        else if((!strpos($string, "myntra") ==  false)) //Tradus
	{
		//Ibibo Rs.250/Sale
		if(strpos($string, "?") ==  false)
			header("Location:http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=4030__zoneid=18982__OXLCA=1__cb=c04c4845ba__oadest=". $string."?semp=eoss&utm_source=aff-ibibo&utm_medium=aff-ibibo&utm_campaign=sale-men-clothing");
		else
			header("Location:http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=4030__zoneid=18982__OXLCA=1__cb=c04c4845ba__oadest=". $string."&semp=eoss&utm_source=aff-ibibo&utm_medium=aff-ibibo&utm_campaign=sale-men-clothing");
		/*
		// Rs.220 Per Sale
		if(strpos($string, "?") ==  false)
			header("Location:http://affiliates.icubeswire.com/z/940/iwire467/&lnkurl=". $string."%253Fsemp=eoss%2526utm_source=aff-icubes%2526utm_medium=cpa%2526utm_campaign=cps-icubes");
		else
			header("Location:http://affiliates.icubeswire.com/z/940/iwire467/&lnkurl=". $string."%2526semp=eoss%2526utm_source=aff-icubes%2526utm_medium=cpa&utm_campaign=cps-icubes");
		*/
	}
	else if(!strpos($string, "pepperfry") ==  false) 
	{
		if(strpos($string, "?") ==  false)		
		header("Location:http://affiliates.tyroodr.com/ez/cknisnpilzlz/&lnkurl=".$string."%253Futm_campaign=tyroo%2526utm_source=tyroo%2526utm_medium=banner%2526utm_content=women-160x600");
		else
		header("Location:http://affiliates.tyroodr.com/ez/cknisnpilzlz/&lnkurl=".$string."%2526utm_campaign=tyroo%2526utm_source=tyroo%2526utm_medium=banner%2526utm_content=women-160x600");
		                //header("Location:http://affiliates.vcommission.com/ez/dkyswcbw/&lnkurl=".$string."&utm_campaign=vcinternet&utm_source=aff-vcinternet");
	}	
	else if(!strpos($string, "seventymm") ==  false)
	//Rs.100/Sale - Tyroodr Affilaite
	{
		if(strpos($string, "?") ==  false)                
			header("Location:http://affiliates.tyroodr.com/ez/arsoksponnna/&lnkurl=".$string."%253Futm_source=TYR-HomePage%2526utm_medium=CPA%2526utm_campaign=HomePage");
		else
			header("Location:http://affiliates.tyroodr.com/ez/arsoksponnna/&lnkurl=".$string."%2526utm_source=TYR-HomePage%2526utm_medium=CPA%2526utm_campaign=HomePage");
			//header("Location:http://affiliates.vcommission.com/ez/begldfvsvg/&lnkurl=".$string."?utm_medium=vCommission&utm_term=vCommission&utm_content=Soft-toys&utm_campaign=vCommission");
	}
	else if(!strpos($string, "yepme") ==  false) //Tradus
	{
		//Rs.200 per sale or Rs.100 per sale with coupon. - Ibibo Affiliate.
		header("Location:http://ads.ibibo.com/ad/www/affiliate/afck.php?affid=1891__oaparams=2__bannerid=4365__zoneid=16853__OXLCA=1__cb=6869377881__oadest=".$string."&PromoSiteID=50");
	}
	else if((!strpos($string, "sulekha") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://affiliates.vcommission.com/ez/canxqpilsk/&lnkurl=".$string."?utm_source=vcommission");
		else	
			header("Location:http://affiliates.vcommission.com/ez/canxqpilsk/&lnkurl=".$string."&utm_source=vcommission");
	}
	else if(!strpos($string, "greendust") ==  false) 
	{
		//Rs.110 to Rs.750/Sale - IcubesWire Affliate
		header("Location:http://affiliates.icubeswire.com/z/1348/iwire467/&lnkurl=".$string."%253Futm_source=icubes%2526utm_medium=CPS");
	}
	else if(!strpos($string, "jabong") ==  false) 
	{
		//Rs.12o/Sale - VCommission
		header("Location:http://boxy.in/linkit.php?lt=ez&l5=dkyswcxhbs&opt=&dp=0&p=0&subid1=&subid2=&subid3=&subid4=&subid5=&lnkurl=".$string."?aff=in.affiliate.1232268.aff.aff.aff&utm_source=VCOMMISSION.COM&utm_medium=dc-clicktracker&utm_campaign=VCOMMISSION.COM");
	}
	else if(!strpos($string, "snapdeal") ==  false)
	{
		//8% per sale max Rs.350- Icubeswire Campaign
		if(strpos($string, "?") ==  false)
			header("Location:http://affiliates.icubeswire.com/z/2562/iwire467/&lnkurl=".$string."%253Futm_source=icbw%2526utm_campaign=afts");
		else
			header("Location:http://affiliates.icubeswire.com/z/2562/iwire467/&lnkurl=".$string."%2526utm_source=icbw%2526utm_campaign=afts");
	}
	else if(!strpos($string, "indiatimes") ==  false) 
	{		
		//Using Shoogoolo better than Tyroo 7.5% Sale
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/881/CD12788/&lnkurl=".$string."%253Futm_source=Shoogloo%2526utm_medium=All%2526utm_campaign=CD12788");
		else
			header("Location:http://partners.shoogloonetwork.com/z/881/CD12788/&lnkurl=".$string."%2526utm_source=Shoogloo%2526utm_medium=All%2526utm_campaign=CD12788");
		/*if(strpos($string, "?") ==  false)
			header("Location:http://affiliates.tyroodr.com/ez/dxyrmycxsmrsk/&lnkurl=".$string."%253Futm_source=tyroo%2526utm_medium=text%2526utm_campaign=Indiatimes");
		else
			header("Location:http://affiliates.tyroodr.com/ez/dxyrmycxsmrsk/&lnkurl=".$string."%2526utm_source=tyroo%2526utm_medium=text%2526utm_campaign=Indiatimes");*/
	}	
	else if(!strpos($string, "flipkart") ==  false) 
	{		
		if(strpos($string, "?") ==  false)
			header("Location:http://affiliates.tyroodr.com/ez/arsokspotlks/&lnkurl=".$string."%253Faffid=tyroo%2526cmpid=affiliate_promo_tyroo");
		else
			header("Location:http://affiliates.tyroodr.com/ez/arsokspotlks/&lnkurl=".$string."%2526affid=tyroo%2526cmpid=affiliate_promo_tyroo");	}	
	else if((!strpos($string, "bestylish") ==  false)) 
	{
		//Rs.110/Sale - Vcommission Affiliate
		if(strpos($string, "?") ==  false)
			header("Location:http://ccxo.net/linkit.php?lt=ez&l5=answvprkaa&opt=&dp=0&p=0&subid1=&subid2=&subid3=&subid4=&subid5=/&lnkurl=".$string."%253Futm_source=vcommission%2526utm_medium=cpa%2526utm_campaign=");
		else
			header("Location:http://ccxo.net/linkit.php?lt=ez&l5=answvprkaa&opt=&dp=0&p=0&subid1=&subid2=&subid3=&subid4=&subid5=/&lnkurl=".$string."%2526utm_source=vcommission%2526utm_medium=cpa%2526utm_campaign=");
}
	else if(!(strpos($string, "lenskart") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/85493/CD12788/&lnkurl=".$string."%253Futm_source=shoogloo");
		else
			header("Location:http://partners.shoogloonetwork.com/z/85493/CD12788/&lnkurl=".$string."%2526utm_source=shoogloo");		
	}
	else if(!(strpos($string, "bagskart") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/85662/CD12788/&lnkurl=".$string."%253Futm_source=shoogloo");
		else
			header("Location:http://partners.shoogloonetwork.com/z/85662/CD12788/&lnkurl=".$string."%2526utm_source=shoogloo");		
	}
	else if(!(strpos($string, "watchkart") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/85658/CD12788/&lnkurl=".$string."%253Futm_source=shoogloo");
		else
			header("Location:http://partners.shoogloonetwork.com/z/85658/CD12788/&lnkurl=".$string."%2526utm_source=shoogloo");		
	}
	else if(!(strpos($string, "jewelskart") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/108856/CD12788/&lnkurl=".$string."%253Futm_source=shoogloo");
		else
			header("Location:http://partners.shoogloonetwork.com/z/108856/CD12788/&lnkurl=".$string."%2526utm_source=shoogloo");		
	}

	else if((!strpos($string, "starcj") ==  false)) 
	{
		//INR 85.00/sale Icubeswire
		
		if(strpos($string, "?") ==  false)
			header("Location:http://affiliates.icubeswire.com/z/1276/iwire467/&lnkurl=".$string."%253Futm_source=icubes%2526utm_medium=network%2526utm_content=bestprice%2526utm_campaign=cpa");
		else
			header("Location:http://affiliates.icubeswire.com/z/1276/iwire467/&lnkurl=".$string."%2526utm_source=icubes%2526utm_medium=network%2526utm_content=bestprice%2526utm_campaign=cpa");
	}
	else if((!strpos($string, "goodlife") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://affiliates.tyroodr.com/ez/bvgsygfskqkd/&lnkurl=".$string."%253Fref=TYRGL%2526utm_source=Tyr%2526utm_medium=Aff%2526utm_content=GL-SignUp_231012_160x600%2526utm_campaign=CD14304");
		else
			header("Location:http://affiliates.tyroodr.com/ez/bvgsygfskqkd/&lnkurl=".$string."%2526ref=TYRGL%2526utm_source=Tyr%2526utm_medium=Aff%2526utm_content=GL-SignUp_231012_160x600%2526utm_campaign=CD14304");
	}
        else if((!strpos($string, "rock") ==  false)) 
	{
		//Rs.450/Sale Vcommission
		if(strpos($string, "?") ==  false)
			header("Location:http://meze.in/linkit.php?lt=ez&l5=begldfsnel&opt=&dp=0&p=0&subid1=&subid2=&subid3=&subid4=&subid5=&lnkurl=".$string."%253Futm_source=Vcom");
		else
			header("Location:http://meze.in/linkit.php?lt=ez&l5=begldfsnel&opt=&dp=0&p=0&subid1=&subid2=&subid3=&subid4=&subid5=&lnkurl=".$string."%2526utm_source=Vcom");
	}
	else if(!(strpos($string, "babyoye") ==  false)) 
	{
	/*	Sale Value upto Rs. 299 - Nil
		Sale Value between Rs. 300 - Rs. 499 - Rs. 40
		Sale Value between Rs. 500 - Rs. 999 - Rs. 150
		Sale Value between Rs. 1000 - Rs. 1999 - Rs. 250
		Sale Value between Rs. 2000- Rs. 2999 - Rs. 290
		Sale Value between Rs. 3000- Rs. 4999 - Rs. 340
		Sale Value Above Rs. 5000 - Rs. 450.*/
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/1107/CD12788/&lnkurl="
			.urlencode($string."%253Faff_id=113%2526utm_source=Shoogloo.com%2526utm_medium=babyoyeaffiliate%2526utm_campaign=affiliate"));
		else
			header("Location:http://partners.shoogloonetwork.com/z/1107/CD12788/&lnkurl="
			.urlencode($string."%2536aff_id=113%2526utm_source=Shoogloo.com%2526utm_medium=babyoyeaffiliate%2526utm_campaign=affiliate"));
	}
	// Upto 10 sales in a calender month - Rs. 300 per sale 10+ sales in a calender month - Rs. 350 per sale
	else if(!(strpos($string, "freecultr") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/268493/CD12788/&lnkurl="
			.urlencode($string."?utm_source=trootrac&utm_medium=vday_c_160x600&utm_campaign=vdayoffer2013"));
		else
			header("Location:http://partners.shoogloonetwork.com/z/268493/CD12788/&lnkurl="
			.urlencode($string."&utm_source=trootrac&utm_medium=vday_c_160x600&utm_campaign=vdayoffer2013"));
	}
	else if(!(strpos($string, "freecharge") ==  false)) 
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/232074/CD12788/&lnkurl="
			.urlencode($string."?utm_source=affiliate&utm_medium=banner&utm_campaign=trootrac"));
		else
			header("Location:http://partners.shoogloonetwork.com/z/232074/CD12788/&lnkurl="
			.urlencode($string."&utm_source=affiliate&utm_medium=banner&utm_campaign=trootrac"));
	}
	else if(!(strpos($string, "zoomin") ==  false)) 
	{
		//Camera 3% Gift and Print Store 10%
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/98674/CD12788/&lnkurl="
			.urlencode($string."?utm_source=trootrac&utm_medium=offer&utm_campaign=30offblackmug_sept11deals"));
		else
			header("Location:http://partners.shoogloonetwork.com/z/98674/CD12788/&lnkurl="
			.urlencode($string."&utm_source=trootrac&utm_medium=offer&utm_campaign=30offblackmug_sept11deals"));
	}
	else if(!(strpos($string, "zovi") ==  false)) 
	{
		//Rs.80/Sale
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/98674/CD12788/&lnkurl="
			.$string."%253fccode=shogloo");
		else
			header("Location:http://partners.shoogloonetwork.com/z/98674/CD12788/&lnkurl="
			.$string."%2526ccode=shogloo");
	}
    /* else if((!strpos($string, "firstcry") ==  false)) 
		{
			if(strpos($string, "?") ==  false)
				header("Location:http://partners.shoogloonetwork.com/z/215473/CD12788/&lnkurl=".$string."%253Futm_source=Shl%2526utm_medium=Aff%2526utm_content=textlink");
			else
				header("Location:http://partners.shoogloonetwork.com/z/215473/CD12788/&lnkurl=".$string."%2526utm_source=Shl%2526utm_medium=Aff%2526utm_content=textlink");
		}*/
	else //If no deeplinking is present for a store redirect with direct link
		header("Location:".$string);
	}
	else
		print "Some thing went terribly wrong! The problem is logged and your IP address is reported to Admin!";
?>

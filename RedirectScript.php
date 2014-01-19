<?php

	$string = $_SERVER['REQUEST_URI'];
	$string = explode("=", $string,2);
	$string = $string[1];
	
	if($string){

	if (!strpos($string, "shopclues") ==  false) { 
    // Electronics: 2.50%/sale Others: 5%/Sale Shoogloo Network
		if(strpos($string, "?") ==  false)
			header("Location: http://track.in.omgpm.com/?AID=356114&MID=420562&PID=10359&CID=3932567&WID=41492&UID=3865&r=".$string);
	}
	if (!strpos($string, "basicslife") ==  false) { 
    // Electronics: 2.50%/sale Others: 5%/Sale Shoogloo Network
		if(strpos($string, "?") ==  false)
			header("Location: http://track.in.omgpm.com/?AID=356114&MID=447604&PID=10497&CID=3932529&WID=41492&UID=5442&r=".$string);
	} 
	else if ((!strpos($string, "tradus") ==  false))
	{
		if(strpos($string, "?") ==  false)
			header("Location: http://ads.ibibo.com/ad/www/affiliate/afck.php?affid=1891__oaparams=2__bannerid=3357__zoneid=16853__OXLCA=1__szid=0__cb=2909007972__oadest=".$string."?utm_source=ibiboads&utm_medium=affiliate&utm_campaign=aff-IA-sitename");
		else
			header("Location: http://ads.ibibo.com/ad/www/affiliate/afck.php?affid=1891__oaparams=2__bannerid=3357__zoneid=16853__OXLCA=1__szid=0__cb=2909007972__oadest=".$string."&utm_source=ibiboads&utm_medium=affiliate&utm_campaign=aff-IA-sitename");
    	}
	else if(!strpos($string, "homeshop18") ==  false) 
	{
		//$string = $string."?utm_source=affiliate&utm_medium=OMG&utm_campaign=text";		
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=159526&PID=8053&CID=3932535&WID=41492&r=".urlencode($string));
	}
	else if(  !strpos($string, "yebhi") ==  false  ) //Yebhi Affiliate
	{
		if(strpos($string, "?") ==  false)
			header("Location:http://exchange.arthsalutions.com/ref/32.1.2&url=". $string."?utm_source=arthsalutions&utm_medium=affiliate&utm_campaign=gby&aff=J689B92");
		else
			header("Location:http://exchange.arthsalutions.com/ref/32.1.2&url=". $string."&utm_source=arthsalutions&utm_medium=affiliate&utm_campaign=gby&aff=J689B92");
	}
	
        else if((!strpos($string, "myntra") ==  false)) //Tradus
	{
		//Ibibo Rs.250/Sale
		//$string = $string."?semp=eoss&utm_source=aff-omg&utm_medium=aff-omg&utm_campaign=logo=aff=356114";		
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=349836&PID=9640&CID=3865133&WID=41492&r=".urlencode($string));
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
		//$string = $string."?utm_campaign=omg";			
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=349881&PID=9643&CID=3647569&WID=41492&r=".urlencode($string));	
	}	
	else if(!strpos($string, "amazon") ==  false) 
	{
		if(strpos($string, "?") ==  false) { 
		$string = $string."?tag=dealsind-21";			
			header("Location:".$string);
		}
		else{
			$string = $string."&tag=dealsind-21";			
			header("Location:".$string);
		}	
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
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=442890&PID=10424&CID=3932536&WID=41492&UID=3865&r=".$string);
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
		//10%/Sale - ArthSolutions
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=304697&PID=9170&CID=3932523&WID=41492&UID=3865&r=".$string);
	}
	else if(!strpos($string, "snapdeal") ==  false){
		//echo $string;
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=159526&PID=8053&CID=3932535&WID=41492&r=".urlencode($string));
	}	
	
	else if(!strpos($string, "indiatimes") ==  false) 
	{		
		//Using omgpm better than Tyroo 5% Sale
		//$string = $string."?utm_source=omg&utm_medium=Affiliate&utm_campaign=productname_date";
		
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=387804&PID=10091&CID=3865131&WID=41492&r=".urlencode($string));
	}	
	else if(!strpos($string, "flipkart") ==  false) 
	{		
		if(strpos($string, "?") ==  false){
			$string = $string."?affid=admingocra";
			header("Location:".$string);
		}	
		else{
			$string = $string."&affid=admingocra";
			header("Location:".$string);
		}
	}	
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
		//$string = $string."?utm_source=omg";		
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=350174&PID=9644&CID=3932505&WID=41492&r=".urlencode($string));
	}
	else if(!(strpos($string, "rediff") ==  false)) 
	{
		//$string = $string."?sc_cid=OMGShoppingAffiliate";		
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=217740&PID=8420&CID=3932494&WID=41492&r=".urlencode($string));
	}
	else if ((!strpos($string, "bagskart") ==  false))
	{
		if(strpos($string, "?") ==  false)
			header("Location: http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=7541__zoneid=32216__OXLCA=1__szid=0__cb=1359439557487066157__oadest=".$string."?utm_source=ibibo");
		else
			header("Location: http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=7541__zoneid=32216__OXLCA=1__szid=0__cb=1359439557487066157__oadest=".$string."&utm_source=ibibo");
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
			header("Location:http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=7551__zoneid=32217__OXLCA=1__szid=0__cb=8253886731789457811__oadest=".$string."?utm_source=ibibo");
		else
			header("Location:http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=7551__zoneid=32217__OXLCA=1__szid=0__cb=8253886731789457811__oadest=".$string."%2526utm_source=ibibo");		
	}

	else if((!strpos($string, "starcj") ==  false)) 
	{
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=389383&PID=10109&CID=3793105&WID=41492&UID=5442&r=".urlencode($string));
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
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=192436&PID=8137&CID=3650056&WID=41492&UID=3865&r=".urlencode($string));
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
	/*
	else if(!(strpos($string, "zoomin") ==  false)) 
	{
		//Camera 3% Gift and Print Store 10%
		if(strpos($string, "?") ==  false)
			header("Location:http://partners.shoogloonetwork.com/z/98674/CD12788/&lnkurl="
			.urlencode($string."?utm_source=trootrac&utm_medium=offer&utm_campaign=30offblackmug_sept11deals"));
		else
			header("Location:http://partners.shoogloonetwork.com/z/98674/CD12788/&lnkurl="
			.urlencode($string."&utm_source=trootrac&utm_medium=offer&utm_campaign=30offblackmug_sept11deals"));
	}*/
	else if(!(strpos($string, "zovi") ==  false)) 
	{
		header("Location:http://track.in.omgpm.com/?AID=356114&MID=218153&PID=8422&CID=4051428&WID=42175&UID=3865&r=".$string);
		
	}
	else if(!(strpos($string, "allschoolstuff") ==  false)) 
	{
		//Rs.80/Sale
		$search = "http://";
		$replace = "www.";
		$string = str_replace($search, $replace, $string);
		header("Location:http://affiliates.vcommission.com/ad/7338/CD7469/&utm_source=VC001&lnkurl="
			.$string);	
	}
	 else if((!strpos($string, "inkfruit") ==  false)) 
		{			
			//$string = $string."?ccode=ifomg&utm_source=OMG-AFF&utm_medium=AFF&utm_content=offer&utm_campaign=homepage";	
			header("Location:http://track.in.omgpm.com/?AID=356114&MID=312452&PID=9222&CID=3647566&WID=41492&r=".urlencode($string));
		}	
	 else if((!strpos($string, "foodpanda") ==  false)) 
		{			
			header("Location:http://affiliates.vcommission.com/ez/dkyswcymko/".$string);
		}	

	 else if((!strpos($string, "tastykhana") ==  false)) 
		{			
			header("Location:http://track.in.omgpm.com/?AID=356114&MID=555468&PID=11686&CID=4051434&WID=42175&r=".$string);
		}	
	else if((!strpos($string, "justeat") ==  false)) 
		{	
					
			$string = "http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=7418__zoneid=32068__OXLCA=1__szid=0__cb=8536263741047434207__oadest=".$string."?utm_source=ibo&utm_medium=affiliate&utm_campaign=ibo_0813";
			header("Location:".$string);
		}	
	else if((!strpos($string, "paytm") ==  false)) 
		{			
			$string  = "http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=7732__zoneid=32069__OXLCA=1__szid=0__cb=10807971841756000271__oadest=https://www.paytm.com/?utm_source=Affiliate_IBIBO&utm_medium=Banner&utm_campaign=recharge";

			header("Location:".$string);
		}
		else if((!strpos($string, "redbus") ==  false)) 
		{			
				$string = "http://ads.ibibo.com/ad/www/delivery/ck.php?oaparams=2__bannerid=7605__zoneid=32070__OXLCA=1__szid=0__cb=1397783508282833220__oadest=http://www.redbus.in/?utm_source=Ibibo&utm_medium=Ibibo+CPA&utm_campaign=Safe+Secure";

			header("Location:".$string);
		}
				else //If no deeplinking is present for a store redirect with direct link
		header("Location:".$string);
	}

	else
		//print "Some thing went terribly wrong! The problem is logged and your IP address is reported to Admin!";
		print "problem with redirection! please contact admin of this website at admin@dealsindiadeals.com";
?>
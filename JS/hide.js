$(document).ready(function() {
   $("#macipad").hide();
   $("#modipad").hide();
   $("#macadd").hide();
   $("#modno").hide();
   $("#maclaptop").hide();
   $("#modlaptop").hide();
   $("#macmobile").hide();
   $("#modmobile").hide();
   $("#macdesktop").hide();
   $("#moddesktop").hide();
});
$(function () {
        $("#checkipad").click(function () {
            if ($(this).is(":checked")) {
                $("#macipad").show();
				$("#modipad").show();
				$("#macadd").show();
                $("#modno").show();
            } else {
			    if(!($("#checkdesktop").is(":checked")) && !($("#checklaptop").is(":checked")) && !($("#checkmob").is(":checked")) && !($("#checkipad").is(":checked"))){
		 $("#macadd").hide();
     	 $("#modno").hide();
	 }
                $("#macipad").hide();
				$("#modipad").hide();
            }
        });
    });
	$(function () {
        $("#checklaptop").click(function () {
            if ($(this).is(":checked")) {
                $("#maclaptop").show();
				$("#modlaptop").show();
				$("#macadd").show();
                $("#modno").show();
            } else {
			    if(!($("#checkdesktop").is(":checked")) && !($("#checklaptop").is(":checked")) && !($("#checkmob").is(":checked")) && !($("#checkipad").is(":checked"))){
		 $("#macadd").hide();
     	 $("#modno").hide();
	 }
                $("#maclaptop").hide();
				$("#modlaptop").hide();
            }
        });
    });
	$(function () {
        $("#checkmob").click(function () {
            if ($(this).is(":checked")) {
                $("#macmobile").show();
				$("#modmobile").show();
				$("#macadd").show();
                $("#modno").show();
            } else {
			    if(!($("#checkdesktop").is(":checked")) && !($("#checklaptop").is(":checked")) && !($("#checkmob").is(":checked")) && !($("#checkipad").is(":checked"))){
		 $("#macadd").hide();
     	 $("#modno").hide();
	 }
                $("#macmobile").hide();
				$("#modmobile").hide();
            }
        });
    });
	$(function () {
        $("#checkdesktop").click(function () {
            if ($(this).is(":checked")) {
                $("#macdesktop").show();
				$("#moddesktop").show();
				$("#macadd").show();
                $("#modno").show();
            } else {
				if(!($("#checkdesktop").is(":checked")) && !($("#checklaptop").is(":checked")) && !($("#checkmob").is(":checked")) && !($("#checkipad").is(":checked"))){
		 $("#macadd").hide();
     	 $("#modno").hide();
	 }
                $("#macdesktop").hide();
				$("#moddesktop").hide();
            }
        });
    });
	
// JavaScript Document
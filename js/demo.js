
$(function() {
$( "#tabs" ).tabs({
collapsible: true
});
});

// ######################    id needs to be changed
$('#jumpToI2').click(function() {
    $('#tabs').tabs({active: 3});
});


$(function() {
$( "#accordion, #accordion1_1, #accordion1_2, #accordionT2, #accordionT3, #accordionI2, #accordionI3, #accordionOUT2, #accordion2_1, #accordion2_2, #accordion2_3, #accordionT4, #accordionT5,#accordionT6,#accordionT7 " ).accordion({
heightStyle: "content",
collapsible: true,
active: false,

//scroll active panel to the top of the page
// http://www.stampede-design.com/blog/2013/04/improving-navigation-on-large-accordion-content-panels/#.U5ugSygn9DM
activate: function( event, ui ) {
         if(!$.isEmptyObject(ui.newHeader.offset())) {
              $('html:not(:animated), body:not(:animated)').animate({ scrollTop: ui.newHeader.offset().top }, 1200);
          }
      }

});
});

$(function() {
$( ".datepicker" ).datepicker({
showOn: "button",
buttonImage: "images/calendar.jpg",
buttonImageOnly: true
});
});

$(function() {
	$( "#comment1" ).button();
	$( "#comment2" ).button();
	$( "#O2_I2_Commt" ).button();
	$( "#O2_I3_Commt" ).button();
});


$(function() {
	$( "#dialog, #dialog2, #O2_I2_Diag, #O2_I3_Diag" ).dialog({
		autoOpen: false,
		show: {
		effect: "blind",
		duration: 1000
		},
		hide: {
		effect: "faded",
		duration: 1000
		}
	});
	$( "#comment1" ).click(function() {
		$( "#dialog" ).dialog( "open" );
	});

	$( "#comment2" ).click(function() {
		$( "#dialog2" ).dialog( "open" );
	});
	$( "#O2_I2_Commt" ).click(function() {
		$( "#O2_I2_Diag" ).dialog( "open" );
	});
	$( "#O2_I3_Commt" ).click(function() {
		$( "#O2_I3_Diag" ).dialog( "open" );
	});
});
/*
$(function() {
	$("#O1_I1_A_Y").click(function() {
  // $('#tabs').tabs({active: 2});
   //$('#accordionT2').accordion({active: 1});
   //$('#accordion1_2').accordion({active: 0});
    	$('html, body').animate({
    		scrollTop: $("#I1_Rating").offset().top
    	}, 1000);
	});
});
*/
$(function() {
	$("#O2_I2_JUMP_Y").click(function() {
  // $('#tabs').tabs({active: 2});
   //$('#accordionT2').accordion({active: 1});
   //$('#accordion1_2').accordion({active: 0});
    	$('html, body').animate({
    		scrollTop: $("#I2_Rating").offset().top
    	}, 1000);
	});
});

$(function() {
	$( "#outcome1help" ).button();
	$( "#outcome1help1" ).button();
	$( "#outcome2help1" ).button();
});

$(function() {
	$( "#outcome1helpDiag" ).dialog({
		autoOpen: false,
		show: {
		effect: "blind",
		duration: 1000
		},
		hide: {
		effect: "explode",
		duration: 1000
		}
	});

	$( "#outcome1help1" ).click(function() {
		if($("#O1_I1_R_S").is(':checked'))
			$( "#outcome1helpDiag" ).text( "You chose \"Strength\"." );
		else if($("#O1_I1_R_ANI").is(':checked'))
			$( "#outcome1helpDiag" ).text( "You chose \"Area Needing Improvement\"." );
		else
			$( "#outcome1helpDiag" ).text( "You chose \"NA\"." );
		$( "#outcome1helpDiag" ).dialog( "open" );
	});
});

$(function() {
	$( "#outcome2helpDiag" ).dialog({
		autoOpen: false,
		show: {
		effect: "blind",
		duration: 1000
		},
		hide: {
		effect: "explode",
		duration: 1000
		}
	});

	$( "#outcome2help1" ).click(function() {
		var item2Str, item3Str;
		if($("#O2_I2_R_S").is(':checked'))
			item2Str = "In Item 2 Rating, you chose \"Strength\".";
		 if($("#O2_I2_R_ANI").is(':checked'))
			item2Str = "In Item 2 Rating, you chose \"Area Needing Improvement\".";
		 if($("#O2_I2_R_NA").is(':checked')) 
			item2Str =  "In Item 2 Rating, you chose \"NA\".";

		if($("#O2_I3_R_S").is(':checked'))
			item3Str = "In Item 3 Rating, you chose \"Strength\".";
		if($("#O2_I3_R_ANI").is(':checked'))
			item3Str = "In Item 3 Rating, you chose \"Area Needing Improvement\".";

		$( "#outcome2helpDiag" ).html( item2Str + "<br><br>" + item3Str );
		$( "#outcome2helpDiag" ).dialog( "open" );
	});
});

// ############## use .each to iterate through a class of buttons and set uniform format

$(function(){
	 $( ".Btn" ).each(function( i ) {
		$(this).button();
		//this.style.color = "red";
	  });

});


 $(document).ready(function() {
                    // for file uploading msg
                     $('#FILE_UPLOAD_MSG').fadeIn(1000).text('The file has been uploaded.');
                  //   $( '#FILE_UPLOAD_MSG' ).css( "color", "red" );
                     $('#FILE_UPLOAD_MSG').fadeOut(8000);
                    
                     $('#FILE_UPLOAD_MSG2').fadeIn(1000).text('There was an error uploading the file, please try again!');
                  //   $( '#FILE_UPLOAD_MSG' ).css( "color", "red" );
                     $('#FILE_UPLOAD_MSG2').fadeOut(8000);
                    /********************************  for face sheet   ******************************************/
                    // clear all inputs in face sheet
                        $( '#FS' ).each(function(){
                            this.reset();
                        });
                      // enable submit button
                        $("#FS_SUBMIT").prop('disabled', false);
                        /*
                        $(function(){
                            $("#FS_F1_RO_C0").change(function(){
                                $("#FS_F1_RO_C0_hidden").val(("#FS_F1_RO_C0").find(":selected").text());
                            });
                        });
                        */                                                  
                        
                        $(function(){
                            
                            var inp_FS_J = $("#FS_J").val(); 
                            var inp_FS_K = $("#FS_K").val();
                            var inp_FS_L = $("#FS_L").val();
                            
                           $('#FS_J_AREA').mousemove(function(){
                            if($.trim($("#FS_J").val())){
                              //  alert("in J now!!!");
                               $('#FS_J_NA').prop('disabled', true);                 
                            }
                            if($('#FS_J_NA').is(':checked')){
                                $('#FS_J').prop('disabled', true);  
                            }
                            $('#FS_J_NA').click(function(event){
                                if(!$('#FS_J_NA').is(':checked')){
                                    $('#FS_J').prop('disabled', false);  
                                }
                            });
                            $('#FS_J_US').click(function(event){
                                $('#FS_J').prop('disabled', false);  
                                $('#FS_J_NA').prop('disabled', false); 
                                $('#FS_J_NA').prop('checked', false);
                                $('#FS_J').val('');
                            });
                        });
                            
                             $('#FS_K_AREA').mousemove(function(){
                            if($.trim($("#FS_K").val())){
                              //  alert("in J now!!!");
                               $('input[name=FS_K_RADIO]').prop('disabled', true);                 
                            }
                            if($('input[name=FS_K_RADIO]').is(':checked')){
                                $('#FS_K').prop('disabled', true);  
                            }
                            $('#FS_K_US').click(function(event){
                                $('#FS_K').prop('disabled', false);  
                                $('input[name=FS_K_RADIO]').prop('disabled', false); 
                               $('input[name=FS_K_RADIO]').prop('checked', false);
                                $('#FS_K').val('');
                            });
                        });
                            
                            
                            $('#FS_L_AREA').mousemove(function(){
                            if($.trim($("#FS_L").val())){
                              //  alert("in J now!!!");
                               $('#FS_L_CNCBTOR').prop('disabled', true);                 
                            }
                            if($('#FS_L_CNCBTOR').is(':checked')){
                                $('#FS_L').prop('disabled', true);  
                            }
                            $('#FS_L_CNCBTOR').click(function(event){
                                if(!$('#FS_J_NA').is(':checked')){
                                    $('#FS_L').prop('disabled', false);  
                                }
                            });
                            $('#FS_L_US').click(function(event){
                                $('#FS_L').prop('disabled', false);  
                                $('#FS_L_CNCBTOR').prop('disabled', false); 
                                $('#FS_L_CNCBTOR').prop('checked', false);
                                $('#FS_L').val('');
                            });
                        });
                                                                                    
                            
                            if(jQuery.trim(inp_FS_J).length > 0 && $('#FS_J_NA').is(':checked')){
                                alert("Warning, both date and NA were chosen in Face Sheet question J!");
                                event.preventDefault();                                
                            } 

                            else if(jQuery.trim(inp_FS_K).length > 0 && $('[name="FS_K_RADIO"]').is(':checked')){
                                alert("Warning, both date and a radio button were chosen in Face Sheet question K!");
                                event.preventDefault();  
                            }
  
                            else if(jQuery.trim(inp_FS_L).length > 0 && $('#FS_L_CNCBTOR').is(':checked')){
                                alert("Warning, both date and \"Case not closed by time of review\" were chosen in Face Sheet question L!");
                                event.preventDefault();  
                            }
		    	});
     
                     /********************************  for Outcome 1   ******************************************/
                      // clear all inputs in I1
                        $( '#O1_I1_Q_F' ).each(function(){
                            this.reset()
                        });
                      // enable submit button
                        $("#O1_I1_SUBMIT").prop('disabled', false);
                        
                     // If case NOT applicable in item 1, disable all unrelated inputs so that users won't accidentally type in information in 
                     // inputs they are not supposed to use
                        $(function(){
                          
                            $('input[name=O1_I1_AC]').click(function(){
                                if($(this).is('#O1_I1_AC_N')  && $(this).is(':checked')){
                                   
                                    $("#O1_I1_B").prop("disabled", true);
                                    $("#O1_I1_B").val('');
                                     
                                    $('input[name=O1_I1_C]').prop('checked', false); // new 0722
                                    $('input[name=O1_I1_C]').prop("disabled", true);
                                     
                                    $("#O1_I1_C_EX").val('');
                                    $("#O1_I1_C_EX").prop("disabled", true);
                                     
                                    $("#O1_I1_R_NA").prop("checked", true);
                                    alert("Item 1 rating should be : " + $("input[name='O1_I1_R']:checked").val());
                                }
                                if($(this).is('#O1_I1_AC_Y')  && $(this).is(':checked')){
                                    $("#O1_I1_B").prop("disabled", false);
                                    $('input[name=O1_I1_C]').prop("disabled", false);
                                    $("#O1_I1_C_EX").prop("disabled", false);
                                    $("#O1_I1_R_NA").prop("checked", false);
                                }
                            }); 
                            
                            $( "#O1_I1_A1" ).focusout(function() {
                                 if($("#O1_I1_A1").val() == '0' && $("#O1_I1_B").val() == '0'){
                                    $("#O1_I1_C_NA").prop('checked', true);
                                //    $("#O1_I1_R_S").prop('checked', true);
                                }                              
                                else{
                                     $('input[name=O1_I1_C]').prop('checked', false);
                                }   
                            });
                            
                           $( "#O1_I1_B" ).focusout(function() {
                              // $("#O1_I1_C_NA").prop('checked', false);
                               $('input[name=O1_I1_C]').prop('checked', false);
                            //   $('input[name=O1_I1_R]').prop('checked', false);
                               
                               if($("#O1_I1_A1").val() == '0' && $("#O1_I1_B").val() == '0'){
                                    $("#O1_I1_C_NA").prop('checked', true);
                            //        $("#O1_I1_R_S").prop('checked', true);
                                }                              
                                else{
                                    
                                }                                    
                            });
                           
                           
                            $( 'input[name=O1_I1_C]' ).click(function(){
                            /*
                            if( (parseInt($("#O1_I1_A1").val()) > 0 || parseInt($("#O1_I1_B").val()) > 0  ) &&  $("#O1_I1_C_Y").is(':checked')){
                                     $("#O1_I1_R_S").prop('checked', true);
                                }
                            else if( (parseInt($("#O1_I1_A1").val()) > 0 || parseInt($("#O1_I1_B").val()) > 0  ) &&  $("#O1_I1_C_N").is(':checked')){
                                     $("#O1_I1_R_ANI").prop('checked', true);
                                }
                            else if( (parseInt($("#O1_I1_A1").val()) > 0 || parseInt($("#O1_I1_B").val()) > 0  ) &&  $("#O1_I1_C_NA").is(':checked')){
                                     $('input[name=O1_I1_R]').prop('checked', false);
                                }
                             else if( (parseInt($("#O1_I1_A1").val()) == 0 || parseInt($("#O1_I1_B").val()) == 0  ) &&  $("#O1_I1_C_NA").is(':checked')){
                                     $('#O1_I1_R_S').prop('checked', true);
                                }
                            else {
                                 $('input[name=O1_I1_R]').prop('checked', false);
                            }
                            */
                            });
                            
                            
                            $( "#I1_BTN" ).click(function() { 
                             $('input[name=O1_I1_R]').prop("checked",false);
                            if( $("#O1_I1_AC_N").is(':checked')){                      
                                 $("#O1_I1_R_NA").prop("checked", true);
                            }                            
                            else  if($("#O1_I1_A1").val() == '0' && $("#O1_I1_B").val() == '0'){
                                 $("#O1_I1_R_S").prop('checked', true);
                                }                              
                            else  if( (parseInt($("#O1_I1_A1").val()) > 0 || parseInt($("#O1_I1_B").val()) > 0  ) &&  $("#O1_I1_C_Y").is(':checked')){
                                     $("#O1_I1_R_S").prop('checked', true);
                            }
                            else if( (parseInt($("#O1_I1_A1").val()) > 0 || parseInt($("#O1_I1_B").val()) > 0  ) &&  $("#O1_I1_C_N").is(':checked')){
                                     $("#O1_I1_R_ANI").prop('checked', true);
                            }
                            else{
                               $('#I1_BTN_MSG').fadeIn(1000).text('No automated rating is available based on Item 1 rating criteria and your answers to the questions, please manually select the appropriate rating !');
                               $( '#I1_BTN_MSG' ).css( "color", "red" );
                                $('#I1_BTN_MSG').fadeOut(8000);
                            }
                            });
                                      
                            
                            
                            
                          //  $('#Safety_O1').mousemove(function(){
                          $('#O1_BTN').click(function(){
                                if($("#O1_I1_R_S").is(':checked')){
                                    $("#O1_SA").prop('checked', true);
                                }
                                else if($("#O1_I1_R_ANI").is(':checked')){
                                    $("#O1_NAC").prop('checked', true);
                                }
                                else if($("#O1_I1_R_NA").is(':checked')){
                                    $("#O1_NA").prop('checked', true);
                                }
                                else{
                                    $("input[name=O1_R]").prop('checked', false);
                                }
                            });

                         });
                        
                         
                // FOR SUBMIT 
                        $('#O1_I1_Q_F').submit(function(event) { //Trigger on form submit
		    	});

                       $('#O1_R').submit(function(event) { //Trigger on form submit
                                $.ajax({ //Process the form using $.ajax()
		    			type 		: 'POST', //Method type
		    			url 		: 'O1_R.php', //Your form processing file url
                                        data            :jQuery("#O1_R").serialize(),
		    			dataType 	: 'json',
                                        success 	: function(data) {
                                                $('#successO1').fadeIn(1000).append('<p><b>' + data.posted + '</b></p>'); 
		    			}
                                });
                                
                                $('#successO1').fadeIn(1000).append('<p><b>' + 'Data saved successfully!' + '</b></p>');
                                event.preventDefault(); //Prevent the default submit
                                $("#O1_R_SUBMIT").click(function(event){
                                    event.preventDefault();
                                });
		    	});

     /***************O2_FORM**********************************************************************************/
                        $( '#O2_I2_Q_F' ).each(function(){
                            this.reset();
                        });
                        $( '#O2_I3_Q_F' ).each(function(){
                            this.reset();
                        });
                        $("#O2_I2_SUBMIT").prop('disabled', false);
                        $("#O2_I3_SUBMIT").prop('disabled', false);
                        
                        $(function(){
                            $('input[name=O2_I2_AC]').click(function(){
                                if($(this).is('#O2_I2_AC_N')  && $(this).is(':checked')){
                                     $('input[name=O2_I2_B]').prop("disabled", true);
                                     $('input[name=O2_I2_B]').prop("checked", false);
                                     $("#O2_I2_B_EXP").prop("disabled", true);
                                     $("#O2_I2_R_NA").prop("checked", true);
                                     alert("Item 2 rating should be : " + $("input[name='O2_I2_R']:checked").val());
                                }
                                if($(this).is('#O2_I2_AC_Y')  && $(this).is(':checked')){
                                     $('input[name=O2_I2_B]').prop("disabled", false);
                                     $("#O2_I2_B_EXP").prop("disabled", false);
                                }
                            });
                            
                            $('input[name=O2_I2_A]').click(function(){
                                if($(this).is('#O2_I2_A_Y') && $(this).is(':checked')){
                                    $("#O2_I2_A_EXP").prop("disabled", true);
                                }
                                if($(this).is('#O2_I2_A_N') && $(this).is(':checked')){
                                    $("#O2_I2_A_EXP").prop("disabled", false);
                                }
                            });
                            
                             $('input[name=O2_I2_B]').click(function(){
                                if(($(this).is('#O2_I2_B_Y')||$(this).is('#O2_I2_B_NA'))  && $(this).is(':checked')){
                                    $("#O2_I2_B_EXP").prop("disabled", true);
                                }
                                if($(this).is('#O2_I2_B_N') && $(this).is(':checked')){
                                    $("#O2_I2_B_EXP").prop("disabled", false);
                                }
                            });
                            
                            $( "#I2_BTN" ).click(function() { 
                           // $( "#I2" ).mousemove(function() { 
                             $('input[name=O2_I2_R]').prop("checked",false);
                            if( $("#O2_I2_A_Y").is(':checked') && $("#O2_I2_B_NA").is(':checked') ){                      
                                $("#O2_I2_R_S").prop("checked", true); 
                            }                            
                            else if( $("#O2_I2_A_N").is(':checked') && $("#O2_I2_B_N").is(':checked') ){                      
                                $("#O2_I2_R_ANI").prop("checked", true); 
                            }  
                            else if( $("#O2_I2_A_N").is(':checked') && $("#O2_I2_B_NA").is(':checked') ){                      
                                $("#O2_I2_R_ANI").prop("checked", true); 
                            } 
                             else if( $("#O2_I2_AC_N").is(':checked') ){                      
                                $("#O2_I2_R_NA").prop("checked", true); 
                            } 
                            else{
                               $('#I2_BTN_MSG').fadeIn(1000).text('No automated rating is available based on Item 2 rating criteria and your answers to the questions, please manually select the appropriate rating !');
                               $( '#I2_BTN_MSG' ).css( "color", "red" );
                                $('#I2_BTN_MSG').fadeOut(8000);
                            }
                            });
                                                        
                            
                            
                            $('input[name=O2_I3_A]').click(function(){
                                if(($(this).is('#O2_I3_A_Y')||$(this).is('#O2_I3_A_NA'))  && $(this).is(':checked')){                                   
                                    $("#O2_I3_A_EXP").prop("disabled", true);
                                 //   alert("clicked!!!");
                                }
                                if($(this).is('#O2_I3_A_N') && $(this).is(':checked')){
                                    $("#O2_I3_A_EXP").prop("disabled", false);
                                }
                            });
                            
                            $('input[name=O2_I3_B]').click(function(){
                                if(($(this).is('#O2_I3_B_Y')||$(this).is('#O2_I3_B_NA'))  && $(this).is(':checked')){
                                    $("#O2_I3_B_EXP").prop("disabled", true);
                                }
                                if($(this).is('#O2_I3_B_N') && $(this).is(':checked')){
                                    $("#O2_I3_B_EXP").prop("disabled", false);
                                }
                            });
                            
                            $('input[name=O2_I3_C]').click(function(){
                                if(($(this).is('#O2_I3_C_Y')||$(this).is('#O2_I3_C_NA'))  && $(this).is(':checked')){
                                    $("#O2_I3_C_EXP").prop("disabled", true);
                                }
                                if($(this).is('#O2_I3_C_N') && $(this).is(':checked')){
                                    $("#O2_I3_C_EXP").prop("disabled", false);
                                }
                            });
                            
                            $('#O2_I3_D1_1').click(function(){
                                if ( $("input[name='O2_I3_D1[]']:checked").length !== 0)                                  
                                    $("#O2_I3_D_N").prop("checked", true);  
                                else
                                    $("#O2_I3_D_N").prop("checked", false);  
                            });
                            $('#O2_I3_D1_2').click(function(){
                                 if ( $("input[name='O2_I3_D1[]']:checked").length !== 0)                                  
                                    $("#O2_I3_D_N").prop("checked", true);
                                 else
                                    $("#O2_I3_D_N").prop("checked", false); 
                            });
                            $('#O2_I3_D1_3').click(function(){
                               if ( $("input[name='O2_I3_D1[]']:checked").length !== 0)                                
                                    $("#O2_I3_D_N").prop("checked", true); 
                                else
                                    $("#O2_I3_D_N").prop("checked", false); 
                            });
                            $('#O2_I3_D1_4').click(function(){
                               if ( $("input[name='O2_I3_D1[]']:checked").length !== 0)                                  
                                    $("#O2_I3_D_N").prop("checked", true); 
                                else
                                    $("#O2_I3_D_N").prop("checked", false); 
                            });
                            
                            $('#O2_I3_E1_1').click(function(){
                                if ( $("input[name='O2_I3_E1[]']:checked").length !== 0)                                    
                                    $("#O2_I3_E_Y").prop("checked", true);  
                                else
                                    $("#O2_I3_E_Y").prop("checked", false);  
                            });
                            $('#O2_I3_E1_2').click(function(){
                                if ( $("input[name='O2_I3_E1[]']:checked").length !== 0)                                
                                    $("#O2_I3_E_Y").prop("checked", true);
                                 else
                                    $("#O2_I3_E_Y").prop("checked", false); 
                            });
                            $('#O2_I3_E1_3').click(function(){
                                if ( $("input[name='O2_I3_E1[]']:checked").length !== 0)                                   
                                    $("#O2_I3_E_Y").prop("checked", true); 
                                 else
                                    $("#O2_I3_E_Y").prop("checked", false); 
                            });
                            $('#O2_I3_E1_4').click(function(){
                                if ( $("input[name='O2_I3_E1[]']:checked").length !== 0)                                   
                                    $("#O2_I3_E_Y").prop("checked", true); 
                                 else
                                    $("#O2_I3_E_Y").prop("checked", false); 
                            });
                            
                            
                            $('#O2_I3_F1_1').click(function(){
                                if ( $("input[name='O2_I3_F1[]']:checked").length !== 0)                                    
                                    $("#O2_I3_F_Y").prop("checked", true);  
                                else
                                    $("#O2_I3_F_Y").prop("checked", false);  
                            });
                            $('#O2_I3_F1_2').click(function(){
                                if ( $("input[name='O2_I3_F1[]']:checked").length !== 0)                                    
                                    $("#O2_I3_F_Y").prop("checked", true);
                                 else
                                    $("#O2_I3_F_Y").prop("checked", false); 
                            });
                            $('#O2_I3_F1_3').click(function(){
                                if ( $("input[name='O2_I3_F1[]']:checked").length !== 0)                                     
                                    $("#O2_I3_F_Y").prop("checked", true); 
                                 else
                                    $("#O2_I3_F_Y").prop("checked", false); 
                            });
                            $('#O2_I3_F1_4').click(function(){
                                if ( $("input[name='O2_I3_F1[]']:checked").length !== 0)                                  
                                    $("#O2_I3_F_Y").prop("checked", true); 
                                 else
                                    $("#O2_I3_F_Y").prop("checked", false); 
                            });
                            $('#O2_I3_F1_5').click(function(){
                                if ( $("input[name='O2_I3_F1[]']:checked").length !== 0)                                 
                                    $("#O2_I3_F_Y").prop("checked", true); 
                                 else
                                    $("#O2_I3_F_Y").prop("checked", false); 
                            });
   
                         //  $( "#I3" ).mousemove(function() { 
                             $( "#I3_BTN" ).click(function() { 
                              $('input[name=O2_I3_R]').prop("checked",false);
                              if( $("input[name=O2_I3_A]").is(':checked')
                                    && $("input[name=O2_I3_B]").is(':checked')
                                    && $("input[name=O2_I3_C]").is(':checked')
                                    && $("input[name=O2_I3_D]").is(':checked')
                                    && $("input[name=O2_I3_E]").is(':checked')
                                    && $("input[name=O2_I3_F]").is(':checked')
                                    &&
                                    (!$("#O2_I3_A_N").is(':checked') && !$("#O2_I3_B_N").is(':checked') && !$("#O2_I3_C_N").is(':checked') && !$("#O2_I3_D_Y").is(':checked') && !$("#O2_I3_E_Y").is(':checked') && !$("#O2_I3_F_Y").is(':checked'))
                               ){                      
                                $("#O2_I3_R_S").prop("checked", true); 
                            }                            
                            else if( $("input[name=O2_I3_A]").is(':checked')
                                    && $("input[name=O2_I3_B]").is(':checked')
                                    && $("input[name=O2_I3_C]").is(':checked')
                                    && $("input[name=O2_I3_D]").is(':checked')
                                    && $("input[name=O2_I3_E]").is(':checked')
                                    && $("input[name=O2_I3_F]").is(':checked')
                                    && (
                                    ($("#O2_I3_A_N").is(':checked') || $("#O2_I3_B_N").is(':checked') || $("#O2_I3_C_N").is(':checked')) 
                                    || 
                                    ($("#O2_I3_D_Y").is(':checked') || $("#O2_I3_E_Y").is(':checked') || $("#O2_I3_F_Y").is(':checked'))
                                    )
                                  ){
                                     $("#O2_I3_R_ANI").prop('checked', true);
                            }
                            else{
                               $('#I3_BTN_MSG').fadeIn(1000).text('No automated rating is available based on Item 3 rating criteria and your answers to the questions, please manually select the appropriate rating !');
                               $( '#I3_BTN_MSG' ).css( "color", "red" );
                                $('#I3_BTN_MSG').fadeOut(8000);
                            }
                        });
                            
                            
                           // $('#Safety_O2').mousemove(function(){
                            $('#O2_BTN').click(function(){
                                 $('input[name=O2_R]').prop("checked",false);
                                //  Substantially Achieved 
                                if($("#O2_I2_R_S").is(':checked') && $("#O2_I3_R_S").is(':checked')){
                                    $("#O2_SA").prop('checked', true);
                                }
                                else if($("#O2_I2_R_NA").is(':checked') && $("#O2_I3_R_S").is(':checked')){
                                    $("#O2_SA").prop('checked', true);
                                }
                                // Partially Achieved
                                else if($("#O2_I2_R_ANI").is(':checked') && $("#O2_I3_R_S").is(':checked')){
                                    $("#O2_PA").prop('checked', true);
                                }
                                else if($("#O2_I2_R_S").is(':checked') && $("#O2_I3_R_ANI").is(':checked')){
                                    $("#O2_PA").prop('checked', true);
                                }
                                // Not Achieved
                                else if($("#O2_I2_R_ANI").is(':checked') && $("#O2_I3_R_ANI").is(':checked')){
                                    $("#O2_NA").prop('checked', true);
                                }
                                else if($("#O2_I2_R_NA").is(':checked') && $("#O2_I3_R_ANI").is(':checked')){
                                    $("#O2_NA").prop('checked', true);
                                }
                                // clear all options and let user manually choose one
                                else{
                                    $('#O2_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and Item 2 and Item 3 ratings, please manually select the appropriate rating !');
                                    $( '#O2_BTN_MSG' ).css( "color", "red" );
                                    $('#O2_BTN_MSG').fadeOut(8000);
                                }
                            });
                            
                        });
                        

                        $('#O2_I3_Q_F').submit(function(event) { //Trigger on form submit
                                $( '#O2_I3_A1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_D1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_E1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_F1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_R_CHECKBOX_MSG' ).empty();
                        });
                        
                        $('#O2_R').submit(function(event) { //Trigger on form submit	                                   
                                $.ajax({ //Process the form using $.ajax()                      
		    			type 		: 'POST', //Method type
		    			url 		: 'O2_R.php', //Your form processing file url                              
                                        data            :jQuery("#O2_R").serialize(),
		    			dataType 	: 'json',
                                        success 	: function(data) {
                                          //  alert(JSON.stringify(data));
                                           if (!data.success) { //If fails
		    				$('#successO2').fadeIn(1000).append('<p>' + data.posted + '</p>');//Throw relevant error
                                            } 
                                            else{
		    				$('#successO2').fadeIn(1000).append(data.posted); //If successful, than throw a success message
                                            }                                       
		    			}
                                });
                  //         $('#successO2').fadeIn(1000).append('<p>' + 'Data saved successfully!' + '</p>');
		    	   event.preventDefault(); //Prevent the default submit 
                         //   $("#O2_I3_SUBMIT").prop('disabled', true);
                            $("#O2_R_SUBMIT").click(function(event){
                                event.preventDefault();
                            }); 
		    	});
                        
               /********************************  for Item 4   ******************************************/
                         $(function(){
                              $('#I4_area').focusout(function(){
                                   if($("#S2_I4_A").val() === '1'){
                                        $("#S2_I4_B_NA").prop('checked', true);
                                    }
                                    else
                                        $("input[name=S2_I4_B]").prop('checked', false);
                              });
                              
                               
                            $("#I4_C1_CHECK").mouseout(function(){
                                if ( $("input[name='S2_I4_C1[]']:checked").length !== 0)                                    
                                    $("#S2_I4_C_N").prop("checked", true);  
                              //  else
                                   // $("input[name=S2_I4_C]").prop("checked", false);  
                            });
                            
                            // $( "#I4" ).mousemove(function() { 
                               $( "#I4_BTN" ).click(function() { 
                                  $("input[name=S2_I4_R]").prop('checked', false);
                                   
                                 if($("#S2_I4_A").val() === '1' && $("#S2_I4_B_NA").is(':checked') && $("#S2_I4_C_Y").is(':checked')){
                                       $("#S2_I4_R_S").prop('checked', true);
                                  }
                                  else if(parseInt($("#S2_I4_A").val())>1 && $("#S2_I4_B_Y").is(':checked') && $("#S2_I4_C_Y").is(':checked')){
                                       $("#S2_I4_R_S").prop('checked', true);
                                  }
                                  else if(parseInt($("#S2_I4_A").val())>1 && ($("#S2_I4_B_N").is(':checked') || $("#S2_I4_C_N").is(':checked'))){
                                       $("#S2_I4_R_ANI").prop('checked', true);
                                  }
                                  else if(parseInt($("#S2_I4_A").val())===1 && $("#S2_I4_B_NA").is(':checked') && $("#S2_I4_C_N").is(':checked')){
                                       $("#S2_I4_R_ANI").prop('checked', true);
                                  }
                                  else{
                                        $('#I4_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 4, please manually select the appropriate rating !');
                                        $( '#I4_BTN_MSG' ).css( "color", "red" );
                                        $('#I4_BTN_MSG').fadeOut(8000);
                                  }
                             });
                         });
                         
                /********************************  for Item 5   ******************************************/
                         $(function(){
                             $('input[name=S2_I5_AC]').click(function(){
                                if($(this).is('#S2_I5_AC_N')  && $(this).is(':checked')){                                  
                                    $("#S2_I5_A1_G1").prop("disabled", true);
                                    $("#S2_I5_A1_G2").prop("disabled", true);
                                    
                                    $('input[name=S2_I5_A2]').prop("disabled", true);
                                    $('input[name=S2_I5_B]').prop("disabled", true);
                                    $("#S2_I5_B_EXP").prop("disabled", true);
                                    
                                     $("#S2_I5_B1_R0_C0").prop("disabled", true);
                                     $("#S2_I5_B1_R0_C1").prop("disabled", true);
                                     $("#S2_I5_B1_R0_C2").prop("disabled", true);
                                     $("#S2_I5_B1_R0_C3").prop("disabled", true);
                                     $("#S2_I5_B1_R0_C4").prop("disabled", true);
                                    
                                     $("#S2_I5_B1_R1_C0").prop("disabled", true);
                                     $("#S2_I5_B1_R1_C1").prop("disabled", true);
                                     $("#S2_I5_B1_R1_C2").prop("disabled", true);
                                     $("#S2_I5_B1_R1_C3").prop("disabled", true);
                                     $("#S2_I5_B1_R1_C4").prop("disabled", true);
                                     
                                     $("#S2_I5_B1_R2_C0").prop("disabled", true);
                                     $("#S2_I5_B1_R2_C1").prop("disabled", true);
                                     $("#S2_I5_B1_R2_C2").prop("disabled", true);
                                     $("#S2_I5_B1_R2_C3").prop("disabled", true);
                                     $("#S2_I5_B1_R2_C4").prop("disabled", true);
                                     
                                     $('input[name=S2_I5_C]').prop("disabled", true);
                                     $("#S2_I5_C_EXP").prop("disabled", true);
                                     
                                     $('input[name=S2_I5_D]').prop("disabled", true);
                                     $('input[name=S2_I5_E]').prop("disabled", true);
                                     $('input[name=S2_I5_F]').prop("disabled", true);
                                     
                                     $('input[name=S2_I5_G1_NA]').prop("disabled", true);
                                     $('input[name=S2_I5_G1_1]').prop("disabled", true);
                                     $('input[name=S2_I5_G1_2]').prop("disabled", true);
                                     $('input[name=S2_I5_G1_3]').prop("disabled", true);
                                     $('input[name=S2_I5_G]').prop("disabled", true);
                                     
                                    $("#S2_I5_R_NA").prop("checked", true);
                                    alert("Item 5 rating should be : " + $("input[name='S2_I5_R']:checked").val());
 
                                    $('html, body').animate({
                                        scrollTop: $("#I5_Rating").offset().top
                                    }, 2500);


                                }
                                if($(this).is('#S2_I5_AC_Y')  && $(this).is(':checked')){
                                    $("#S2_I5_A1_G1").prop("disabled", false);
                                    $("#S2_I5_A1_G2").prop("disabled", false);
                                    
                                    $('input[name=S2_I5_A2]').prop("disabled", false);
                                    $('input[name=S2_I5_B]').prop("disabled", false);
                                    $("#S2_I5_B_EXP").prop("disabled", false);
                                    
                                     $("#S2_I5_B1_R0_C0").prop("disabled", false);
                                     $("#S2_I5_B1_R0_C1").prop("disabled", false);
                                     $("#S2_I5_B1_R0_C2").prop("disabled", false);
                                     $("#S2_I5_B1_R0_C3").prop("disabled", false);
                                     $("#S2_I5_B1_R0_C4").prop("disabled", false);
                                    
                                     $("#S2_I5_B1_R1_C0").prop("disabled", false);
                                     $("#S2_I5_B1_R1_C1").prop("disabled", false);
                                     $("#S2_I5_B1_R1_C2").prop("disabled", false);
                                     $("#S2_I5_B1_R1_C3").prop("disabled", false);
                                     $("#S2_I5_B1_R1_C4").prop("disabled", false);
                                     
                                     $("#S2_I5_B1_R2_C0").prop("disabled", false);
                                     $("#S2_I5_B1_R2_C1").prop("disabled", false);
                                     $("#S2_I5_B1_R2_C2").prop("disabled", false);
                                     $("#S2_I5_B1_R2_C3").prop("disabled", false);
                                     $("#S2_I5_B1_R2_C4").prop("disabled", false);
                                     
                                     $('input[name=S2_I5_C]').prop("disabled", false);
                                     $("#S2_I5_C_EXP").prop("disabled", false);
                                     
                                     $('input[name=S2_I5_D]').prop("disabled", false);
                                     $('input[name=S2_I5_E]').prop("disabled", false);
                                     $('input[name=S2_I5_F]').prop("disabled", false);
                                     
                                     $('input[name=S2_I5_G1_NA]').prop("disabled", false);
                                     $('input[name=S2_I5_G1_1]').prop("disabled", false);
                                     $('input[name=S2_I5_G1_2]').prop("disabled", false);
                                     $('input[name=S2_I5_G1_3]').prop("disabled", false);
                                     $('input[name=S2_I5_G]').prop("disabled", false);
                                     
                                    $("#S2_I5_R_NA").prop("checked", false);
                                }
                            });    
                            
                             $( "#I5_BTN" ).click(function() { 
                                  $("input[name=S2_I5_R]").prop('checked', false);
                                 // Strength  
                                 if($("#S2_I5_E_N").is(':checked') && $("#S2_I5_D_N").is(':checked') && (!$("#S2_I5_A2_N").is(':checked')) && (!$("#S2_I5_B_N").is(':checked')) && (!$("#S2_I5_C_N").is(':checked'))){
                                       $("#S2_I5_R_S").prop('checked', true);
                                  }
                                 else if($("#S2_I5_D_Y").is(':checked') && $("#S2_I5_F_Y").is(':checked') && (!$("#S2_I5_A2_N").is(':checked')) && (!$("#S2_I5_B_N").is(':checked')) && (!$("#S2_I5_C_N").is(':checked'))){
                                       $("#S2_I5_R_S").prop('checked', true);
                                  }
                                 else if($("#S2_I5_D_N").is(':checked') && $("#S2_I5_E_Y").is(':checked') && $("#S2_I5_F_Y").is(':checked') && (!$("#S2_I5_A2_N").is(':checked')) && (!$("#S2_I5_B_N").is(':checked')) && (!$("#S2_I5_C_N").is(':checked'))){
                                       $("#S2_I5_R_S").prop('checked', true);
                                  }
                                  else if(($("#S2_I5_D_Y").is(':checked') || $("#S2_I5_E_Y").is(':checked')) && $("#S2_I5_F_N").is(':checked') && $("#S2_I5_G_Y").is(':checked') && (!$("#S2_I5_A2_N").is(':checked')) && (!$("#S2_I5_B_N").is(':checked')) && (!$("#S2_I5_C_N").is(':checked'))){
                                       $("#S2_I5_R_S").prop('checked', true);
                                  }
                                  // Area Needing Improvement 
                                  
                                  else if($("#S2_I5_A2_N").is(':checked') || $("#S2_I5_B_N").is(':checked') || $("#S2_I5_C_N").is(':checked')){
                                       $("#S2_I5_R_ANI").prop('checked', true);
                                  }
                                  else if(($("#S2_I5_D_Y").is(':checked') || $("#S2_I5_E_Y").is(':checked')) && $("#S2_I5_F_N").is(':checked') && $("#S2_I5_G_N").is(':checked') && (!$("#S2_I5_A2_N").is(':checked')) && (!$("#S2_I5_B_N").is(':checked')) && (!$("#S2_I5_C_N").is(':checked'))){
                                         $("#S2_I5_R_ANI").prop('checked', true);
                                  }
                                   // Not Applicable                              
                                  else if($("#S2_I5_AC_N").is(':checked')){
                                       $("#S2_I5_R_NA").prop('checked', true);
                                  }
                                   // Other cases  
                                  else{
                                        $('#I5_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 5, please manually select the appropriate rating !');
                                        $( '#I5_BTN_MSG' ).css( "color", "red" );
                                        $('#I5_BTN_MSG').fadeOut(8000);
                                  }
                             });
                             
                             $( "#I6_BTN" ).click(function() { 
                                  $("input[name=S2_I6_R]").prop('checked', false);
                                 // Strength  
                                 if($("#S2_I6_B_Y").is(':checked') || $("#S2_I6_C_Y").is(':checked')){
                                       $("#S2_I6_R_S").prop('checked', true);
                                  }
                                 // Area Needing Improvement 
                                 else if($("#S2_I6_B_N").is(':checked') || $("#S2_I6_C_N").is(':checked')){
                                       $("#S2_I6_R_ANI").prop('checked', true);
                                  }
                                   // Other cases  
                                  else{
                                        $('#I6_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 6, please manually select the appropriate rating !');
                                        $( '#I6_BTN_MSG' ).css( "color", "red" );
                                        $('#I6_BTN_MSG').fadeOut(8000);
                                  }
                             });
                            
                             $( "#S2_O1_BTN" ).click(function() { 
                                  $("input[name=S2_O1]").prop('checked', false);
                                 // Strength  
                                 if($("#S2_I6_R_S").is(':checked') && $("#S2_I5_R_S").is(':checked') && $("#S2_I4_R_S").is(':checked')){
                                       $("#S2_O1_SA").prop('checked', true);
                                 }
                                 //  Partially Achieved
                                 else if($("#S2_I6_R_S").is(':checked') || $("#S2_I5_R_S").is(':checked') || $("#S2_I4_R_S").is(':checked')){
                                       $("#S2_O1_PA").prop('checked', true);
                                 }
                                 // Not Achieve
                                 else if($("#S2_I4_R_ANI").is(':checked') && $("#S2_I5_R_ANI").is(':checked') && $("#S2_I6_R_ANI").is(':checked')){
                                       $("#S2_O1_NAC").prop('checked', true);
                                 }
                                 /*
                                  *  Permanency Outcome 1 should be rated as Not Applicable if the following applies:

    All of items 4, 5, and 6 are rated as Not Applicable???? Item 4 and Item 6 do not have Not Applicable rating!!

                                  */
                                 else if($("#S2_I4_R_ANI").is(':checked') && $("#S2_I5_R_NA").is(':checked') && $("#S2_I6_R_ANI").is(':checked')){
                                       $("#S2_O1_NA").prop('checked', true);
                                 }
                                   // Other cases  
                                  else{
                                        $('#S2_O1_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Outcome 1, please manually select the appropriate rating !');
                                        $( '#S2_O1_BTN_MSG' ).css( "color", "red" );
                                        $('#S2_O1_BTN_MSG').fadeOut(8000);
                                  }
                             });
                            
                             $( "#S2_O2_I7_N" ).click(function() { 
                                  $("input[name=S2_I7_R]").prop('checked', false);
                                 if($("#S2_O2_I7_N").is(':checked')) {
                                       $("input[name=S2_I7_A]").prop('disabled', true);
                                       $("input[name=S2_I7_B]").prop('disabled', true);
                                       $("#S2_I7_B_EXP").prop("disabled", true);
                                                                                                                     
                                       $("input[name=S2_I7_A]").prop('checked', false);
                                       $("input[name=S2_I7_B]").prop('checked', false);
                                       $("#S2_I7_B_EXP").val("");
                                  }
                             });
                             
                              $( "#S2_O2_I7_Y" ).click(function() { 
                                   $("input[name=S2_I7_R]").prop('checked', false);
                                 if($("#S2_O2_I7_Y").is(':checked')) {
                                       $("input[name=S2_I7_A]").prop('disabled', false);
                                       $("input[name=S2_I7_B]").prop('disabled', false);
                                       $("#S2_I7_B_EXP").prop("disabled", false);
                                                                                                                     
                                       $("input[name=S2_I7_A]").prop('checked', false);
                                       $("input[name=S2_I7_B]").prop('checked', false);
                                        $("#S2_I7_B_EXP").val("");
                                  }
                             });
                             
                             $( "#I7_BTN" ).click(function() { 
                                  $("input[name=S2_I7_R]").prop('checked', false);
                                 // Strength  
                                 if($("#S2_I7_A_Y").is(':checked') || ($("#S2_I7_A_N").is(':checked') && $("#S2_I7_B_Y").is(':checked') )){
                                       $("#S2_I7_R_S").prop('checked', true);
                                  }
                                 // Area Needing Improvement 
                                 else if($("#S2_I7_A_N").is(':checked') && $("#S2_I7_B_N").is(':checked')){
                                       $("#S2_I7_R_ANI").prop('checked', true);
                                  }
                                  // Not Applicable
                                  else if($("#S2_O2_I7_N").is(':checked')){
                                       $("#S2_I7_R_NA").prop('checked', true);
                                  }
                                   // Other cases  
                                  else{
                                        $('#I7_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 7, please manually select the appropriate rating !');
                                        $( '#I7_BTN_MSG' ).css( "color", "red" );
                                        $('#I7_BTN_MSG').fadeOut(8000);
                                  }
                             });
                             
                             $( "#S2_I8_AC_N" ).click(function() { 
                                  $("input[name=S2_I8_R]").prop('checked', false);
                                 if($("#S2_I8_AC_N").is(':checked')) {
                                       $("input[name=S2_I8_A1]").prop('disabled', true);
                                       $("input[name=S2_I8_A]").prop('disabled', true);
                                       $("input[name=S2_I8_B1]").prop('disabled', true);
                                       $("input[name=S2_I8_B]").prop('disabled', true);
                                       $("input[name=S2_I8_C]").prop('disabled', true);
                                       $("input[name=S2_I8_D]").prop('disabled', true);
                                       $("input[name=S2_I8_E1]").prop('disabled', true);
                                       $("input[name=S2_I8_E]").prop('disabled', true);
                                       $("input[name=S2_I8_F]").prop('disabled', true);
                                                                              
                                       $("input[name=S2_I8_A1]").prop('checked', false);
                                       $("input[name=S2_I8_A]").prop('checked', false);
                                       $("input[name=S2_I8_B1]").prop('checked', false);
                                       $("input[name=S2_I8_B]").prop('checked', false);
                                       $("input[name=S2_I8_C]").prop('checked', false);
                                       $("input[name=S2_I8_D]").prop('checked', false);
                                       $("input[name=S2_I8_E1]").prop('checked', false);
                                       $("input[name=S2_I8_E]").prop('checked', false);
                                       $("input[name=S2_I8_F]").prop('checked', false);
                                  }
                             });
                             
                              $( "#S2_I8_AC_Y" ).click(function() { 
                                   $("input[name=S2_I8_R]").prop('checked', false);
                                 if($("#S2_I8_AC_Y").is(':checked')) {
                                       $("input[name=S2_I8_A1]").prop('disabled', false);
                                       $("input[name=S2_I8_A]").prop('disabled', false);
                                       $("input[name=S2_I8_B1]").prop('disabled', false);
                                       $("input[name=S2_I8_B]").prop('disabled', false);
                                       $("input[name=S2_I8_C]").prop('disabled', false);
                                       $("input[name=S2_I8_D]").prop('disabled', false);
                                       $("input[name=S2_I8_E1]").prop('disabled', false);
                                       $("input[name=S2_I8_E]").prop('disabled', false);
                                       $("input[name=S2_I8_F]").prop('disabled', false);
                                                                              
                                       $("input[name=S2_I8_A1]").prop('checked', false);
                                       $("input[name=S2_I8_A]").prop('checked', false);
                                       $("input[name=S2_I8_B1]").prop('checked', false);
                                       $("input[name=S2_I8_B]").prop('checked', false);
                                       $("input[name=S2_I8_C]").prop('checked', false);
                                       $("input[name=S2_I8_D]").prop('checked', false);
                                       $("input[name=S2_I8_E1]").prop('checked', false);
                                       $("input[name=S2_I8_E]").prop('checked', false);
                                       $("input[name=S2_I8_F]").prop('checked', false);
                                  }
                             });
                             
                             $( "#I8_BTN" ).click(function() { 
                                  $("input[name=S2_I8_R]").prop('checked', false);
                                 // Strength  
                                 if(($("#S2_I8_A_Y").is(':checked') || $("#S2_I8_B_Y").is(':checked') || $("#S2_I8_C_Y").is(':checked') || $("#S2_I8_D_Y").is(':checked') || $("#S2_I8_E_Y").is(':checked')
                                         || $("#S2_I8_F_Y").is(':checked')) && !$("#S2_I8_A_N").is(':checked') && !$("#S2_I8_B_N").is(':checked') && !$("#S2_I8_C_N").is(':checked') 
                                         && !$("#S2_I8_D_N").is(':checked') && !$("#S2_I8_E_N").is(':checked') && !$("#S2_I8_F_N").is(':checked') ){
                                       $("#S2_I8_R_S").prop('checked', true);
                                  }
                                 // Area Needing Improvement 
                                 else if($("#S2_I8_A_N").is(':checked') || $("#S2_I8_B_N").is(':checked') || $("#S2_I8_C_N").is(':checked') || $("#S2_I8_D_N").is(':checked') || $("#S2_I8_E_N").is(':checked') 
                                         || $("#S2_I8_F_N").is(':checked')){
                                       $("#S2_I8_R_ANI").prop('checked', true);
                                  }
                                  // Not Applicable
                                  else if($("#S2_I8_AC_N").is(':checked')){
                                       $("#S2_I8_R_NA").prop('checked', true);
                                  }
                                   // Other cases  
                                  else{
                                        $('#I8_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 8, please manually select the appropriate rating !');
                                        $( '#I8_BTN_MSG' ).css( "color", "red" );
                                        $('#I8_BTN_MSG').fadeOut(8000);
                                  }
                             });
                             
                              $( "#S2_I9_AC_N" ).click(function() { 
                                  $("input[name=S2_I9_R]").prop('checked', false);
                                 if($("#S2_I9_AC_N").is(':checked')) {
                                       $("input[name=S2_I9_A]").prop('disabled', true);
                                       $("input[name=S2_I9_B]").prop('disabled', true);
                                       $("input[name=S2_I9_C]").prop('disabled', true);
                                       $("input[name=S2_I9_D]").prop('disabled', true);
                                       
                                       $("input[name=S2_I9_A]").prop('checked', false);
                                       $("input[name=S2_I9_B]").prop('checked', false);
                                       $("input[name=S2_I9_C]").prop('checked', false);
                                       $("input[name=S2_I9_D]").prop('checked', false);
                                  }
                             });
                             
                              $( "#S2_I9_AC_Y" ).click(function() { 
                                   $("input[name=S2_I9_R]").prop('checked', false);
                                 if($("#S2_I9_AC_Y").is(':checked')) {
                                       $("input[name=S2_I9_A]").prop('disabled', false);
                                       $("input[name=S2_I9_B]").prop('disabled', false);
                                       $("input[name=S2_I9_C]").prop('disabled', false);
                                       $("input[name=S2_I9_D]").prop('disabled', false);
                                       
                                       $("input[name=S2_I9_A]").prop('checked', false);
                                       $("input[name=S2_I9_B]").prop('checked', false);
                                       $("input[name=S2_I9_C]").prop('checked', false);
                                       $("input[name=S2_I9_D]").prop('checked', false);
                                  }
                             });
                             $( "#S2_I9_AC_NA" ).click(function() { 
                                   $("input[name=S2_I9_R]").prop('checked', false);
                                 if($("#S2_I9_AC_NA").is(':checked')) {
                                       $("input[name=S2_I9_A]").prop('disabled', false);
                                       $("input[name=S2_I9_B]").prop('disabled', false);
                                       $("input[name=S2_I9_C]").prop('disabled', false);
                                       $("input[name=S2_I9_D]").prop('disabled', false);
                                       
                                       $("input[name=S2_I9_A]").prop('checked', false);
                                       $("input[name=S2_I9_B]").prop('checked', false);
                                       $("input[name=S2_I9_C]").prop('checked', false);
                                       $("input[name=S2_I9_D]").prop('checked', false);
                                  }
                             });
                             
                             
                             $( "#I9_BTN" ).click(function() { 
                                  $("input[name=S2_I9_R]").prop('checked', false);
                                 // Strength  
                                 if($("#S2_I9_A_Y").is(':checked') && !$("#S2_I9_C_N").is(':checked') && !$("#S2_I9_D_N").is(':checked') ){
                                       $("#S2_I9_R_S").prop('checked', true);
                                  }
                                 // Area Needing Improvement 
                                 else if($("#S2_I9_A_Y").is(':checked') && ($("#S2_I9_C_N").is(':checked') || $("#S2_I9_D_N").is(':checked')) ){
                                       $("#S2_I9_R_ANI").prop('checked', true);
                                  }
                                 else if($("#S2_I9_A_N").is(':checked')){
                                       $("#S2_I9_R_ANI").prop('checked', true);
                                  } 
                                  // Not Applicable
                                  else if($("#S2_I9_AC_N").is(':checked')){
                                       $("#S2_I9_R_NA").prop('checked', true);
                                  }
                                   // Other cases  
                                  else{
                                        $('#I9_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 9, please manually select the appropriate rating !');
                                        $( '#I9_BTN_MSG' ).css( "color", "red" );
                                        $('#I9_BTN_MSG').fadeOut(8000);
                                  }
                             });
                             
                             $( "#S2_I10_AC_N" ).click(function() { 
                                  $("input[name=S2_I10_R]").prop('checked', false);
                                 if($("#S2_I10_AC_N").is(':checked')) {
                                       $("input[name=S2_I10_A1]").prop('disabled', true);
                                       $("input[name=S2_I10_A2]").prop('disabled', true);
                                       $("input[name=S2_I10_B]").prop('disabled', true);
                                       $("input[name=S2_I10_B_SP]").prop('disabled', true);
                                       $("input[name=S2_I10_C]").prop('disabled', true);
                                       
                                       $("input[name=S2_I10_A1]").prop('checked', false);
                                       $("input[name=S2_I10_A2]").prop('checked', false);
                                       $("input[name=S2_I10_B]").prop('checked', false);
                                       $("input[name=S2_I10_B_SP]").prop('checked', false);
                                       $("input[name=S2_I10_C]").prop('checked', false);
                                  }
                             });
                             
                              $( "#S2_I10_AC_Y" ).click(function() { 
                                   $("input[name=S2_I10_R]").prop('checked', false);
                                 if($("#S2_I10_AC_Y").is(':checked')) {
                                       $("input[name=S2_I10_A1]").prop('disabled', false);
                                       $("input[name=S2_I10_A2]").prop('disabled', false);
                                       $("input[name=S2_I10_B]").prop('disabled', false);
                                       $("input[name=S2_I10_B_SP]").prop('disabled', false);
                                       $("input[name=S2_I10_C]").prop('disabled', false);
                                       
                                       $("input[name=S2_I10_A1]").prop('checked', false);
                                       $("input[name=S2_I10_A2]").prop('checked', false);
                                       $("input[name=S2_I10_B]").prop('checked', false);
                                       $("input[name=S2_I10_B_SP]").prop('checked', false);
                                       $("input[name=S2_I10_C]").prop('checked', false);
                                  }
                             });
                             
                             $( "#I10_BTN" ).click(function() { 
                                  $("input[name=S2_I10_R]").prop('checked', false);
                                 // Strength  
                                 if(($("#S2_I10_A1_Y").is(':checked') && $("#S2_I10_A2_Y").is(':checked')) || ( ($("#S2_I10_A1_N").is(':checked') || $("#S2_I10_A2_N").is(':checked')) && !$("#S2_I10_B_N").is(':checked') && !$("#S2_I10_C_N").is(':checked') )){
                                       $("#S2_I10_R_S").prop('checked', true);
                                  }
                                 // Area Needing Improvement 
                                 else if(($("#S2_I10_A1_N").is(':checked') || $("#S2_I10_A2_N").is(':checked')) && ( $("#S2_I10_B_N").is(':checked') || $("#S2_I10_C_N").is(':checked') ) ){
                                       $("#S2_I10_R_ANI").prop('checked', true);
                                  }
                                  // Not Applicable
                                  else if($("#S2_I10_AC_N").is(':checked')){
                                       $("#S2_I10_R_NA").prop('checked', true);
                                  }
                                   // Other cases  
                                  else{
                                        $('#I10_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 10, please manually select the appropriate rating !');
                                        $( '#I10_BTN_MSG' ).css( "color", "red" );
                                        $('#I10_BTN_MSG').fadeOut(8000);
                                  }
                             });
                             
                             $( "#S2_I11_AC_N" ).click(function() { 
                                  $("input[name=S2_I11_R]").prop('checked', false);
                                 if($("#S2_I11_AC_N").is(':checked')) {
                                       $("input[name=S2_I11_A]").prop('disabled', true);
                                       $("input[name='S2_I11_A1[]']").prop('disabled', true);
                                       $("input[name=S2_I11_B]").prop('disabled', true);
                                       $("input[name='S2_I11_B1[]']").prop('disabled', true);
                                       
                                       $("input[name=S2_I11_A]").prop('checked', false);
                                       $("input[name='S2_I11_A1[]']").prop('checked', false);
                                       $("input[name=S2_I11_B]").prop('checked', false);
                                       $("input[name='S2_I11_B1[]']").prop('checked', false);
                                  }
                             });
                             
                              $( "#S2_I11_AC_Y" ).click(function() { 
                                   $("input[name=S2_I11_R]").prop('checked', false);
                                 if($("#S2_I11_AC_Y").is(':checked')) {
                                       $("input[name=S2_I11_A]").prop('disabled', false);
                                       $("input[name='S2_I11_A1[]']").prop('disabled', false);
                                       $("input[name=S2_I11_B]").prop('disabled', false);
                                       $("input[name='S2_I11_B1[]']").prop('disabled', false);
                                       
                                       $("input[name=S2_I11_A]").prop('checked', false);
                                       $("input[name='S2_I11_A1[]']").prop('checked', false);
                                       $("input[name=S2_I11_B]").prop('checked', false);
                                       $("input[name='S2_I11_B1[]']").prop('checked', false);
                                  }
                             });
                             
                             $( "#I11_BTN" ).click(function() { 
                                  $("input[name=S2_I11_R]").prop('checked', false);
                                 // Strength  
                                 if($("#S2_I11_A_Y").is(':checked') && $("#S2_I11_B_Y").is(':checked')) {
                                       $("#S2_I11_R_S").prop('checked', true);
                                  }
                                 else if($("#S2_I11_A_Y").is(':checked') && $("#S2_I11_B_NA").is(':checked') && $("#S2_I11_B1_F0").is(':checked') ) {
                                       $("#S2_I11_R_S").prop('checked', true);
                                  }
                                 else if($("#S2_I11_B_Y").is(':checked') && $("#S2_I11_A_NA").is(':checked') && $("#S2_I11_A1_M0").is(':checked') ) {
                                       $("#S2_I11_R_S").prop('checked', true);
                                  }
                                 // Area Needing Improvement 
                                 else if($("#S2_I11_A_N").is(':checked') || $("#S2_I11_B_N").is(':checked') ){
                                       $("#S2_I11_R_ANI").prop('checked', true);
                                  }
                                  // Not Applicable
                                  else if($("#S2_I11_AC_N").is(':checked')){
                                       $("#S2_I11_R_NA").prop('checked', true);
                                  }
                                   // Other cases  
                                  else{
                                        $('#I11_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Item 11, please manually select the appropriate rating !');
                                        $( '#I11_BTN_MSG' ).css( "color", "red" );
                                        $('#I11_BTN_MSG').fadeOut(8000);
                                  }
                             });                             
                                
                             $( "#S2_O2_BTN" ).click(function() { 
                                  $("input[name=S2_O2]").prop('checked', false);
                                  
                                  var count_ANI = 0;
                                  if($("#S2_I7_R_ANI").is(':checked')){count_ANI++;}
                                  if($("#S2_I8_R_ANI").is(':checked')){count_ANI++;}
                                  if($("#S2_I9_R_ANI").is(':checked')){count_ANI++;}
                                  if($("#S2_I10_R_ANI").is(':checked')){count_ANI++;}
                                  if($("#S2_I11_R_ANI").is(':checked')){count_ANI++;}
                             
                                  var count_STR = 0;
                                  if($("#S2_I7_R_S").is(':checked')){count_STR++;}
                                  if($("#S2_I8_R_S").is(':checked')){count_STR++;}
                                  if($("#S2_I9_R_S").is(':checked')){count_STR++;}
                                  if($("#S2_I10_R_S").is(':checked')){count_STR++;}
                                  if($("#S2_I11_R_S").is(':checked')){count_STR++;}
                             
                                  var count_NA = 0;
                                  if($("#S2_I7_R_NA").is(':checked')){count_NA++;}
                                  if($("#S2_I8_R_NA").is(':checked')){count_NA++;}
                                  if($("#S2_I9_R_NA").is(':checked')){count_NA++;}
                                  if($("#S2_I10_R_NA").is(':checked')){count_NA++;}
                                  if($("#S2_I11_R_NA").is(':checked')){count_NA++;}
                                        
                               //   alert("Number of STR is: " + count_STR + " Number of ANI is: " + count_ANI + " Number of NA is: " + count_NA);
                                 // Substantially Achieved  
                                 if(count_ANI <=1 && count_STR >= 1) {
                                       $("#S2_O2_SA").prop('checked', true);
                                  }
                                 // Partially Achieved
                                 else if(count_ANI >=2 && count_ANI < 5 && count_STR >= 1) {
                                       $("#S2_O2_PA").prop('checked', true);
                                  }                                 
                                 //  Not Achieved
                                 else if(count_ANI >= 1 && count_STR == 0) {
                                       $("#S2_O2_NAC").prop('checked', true);
                                  } 
                                  // Not Applicable
                                 else if(count_NA == 5) {
                                       $("#S2_O2_NA").prop('checked', true);
                                  } 
                                   // Other cases  
                                 else{
                                        $('#S2_O2_BTN_MSG').fadeIn(1000).text('No automated rating is available based on rating criteria and answers to questions in Outcome 2, please manually select the appropriate rating !');
                                        $( '#S2_O2_BTN_MSG' ).css( "color", "red" );
                                        $('#S2_O2_BTN_MSG').fadeOut(8000);
                                  }
                             });
                            
                         });
            });

// });

                
                

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
                            if($("#FS_J").val()){
                              //  alert("in J now!!!");
                               $('#FS_J_NA').prop('disabled', true);                 
                            }
                            if($('#FS_J_NA').is(':checked')){
                                $('#FS_J').prop('disabled', true);  
                            }
                            $('#FS_J_US').click(function(event){
                                $('#FS_J').prop('disabled', false);  
                                $('#FS_J_NA').prop('disabled', false); 
                                $('#FS_J_NA').prop('checked', false);
                                $('#FS_J').val('');
                            });
                        });
                            
                             $('#FS_K_AREA').mousemove(function(){
                            if($("#FS_K").val()){
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
                            if($("#FS_L").val()){
                              //  alert("in J now!!!");
                               $('#FS_L_CNCBTOR').prop('disabled', true);                 
                            }
                            if($('#FS_L_CNCBTOR').is(':checked')){
                                $('#FS_L').prop('disabled', true);  
                            }
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
                            /*
                            else if(jQuery.trim(inp_FS_J).length === 0 && !$('#FS_J_NA').is(':checked')){
                                alert("Warning, answer to question J is empty!");
                                event.preventDefault();                                
                            } 
                            */
                            else if(jQuery.trim(inp_FS_K).length > 0 && $('[name="FS_K_RADIO"]').is(':checked')){
                                alert("Warning, both date and a radio button were chosen in Face Sheet question K!");
                                event.preventDefault();  
                            }
                            /*
                            else if(jQuery.trim(inp_FS_K).length === 0 && !$('[name="FS_K_RADIO"]').is(':checked')){
                                alert("Warning, answer to question K is empty!");
                                event.preventDefault();                                
                            } 
                            */
                            else if(jQuery.trim(inp_FS_L).length > 0 && $('#FS_L_CNCBTOR').is(':checked')){
                                alert("Warning, both date and \"Case not closed by time of review\" were chosen in Face Sheet question L!");
                                event.preventDefault();  
                            }
                            /*
                            else if(jQuery.trim(inp_FS_L).length === 0 && !$('#FS_L_CNCBTOR').is(':checked')){
                                alert("Warning, answer to question L is empty!");
                                event.preventDefault();                                
                            } 
                            */
                           /*
                            else{
                                if( $("input[name='FS_M1[]']:checked").length === 0) {
                                        $('html, body').animate({ scrollTop: $("#CHECK_FS_M1").offset().top }, 500);
                                        alert("At least one of the checkboxes has to be checked!");
                                        $('#FS_M1_CHECKBOX').fadeIn(1000).append('Please select checkboxes!');
                                        $( '#FS_M1_CHECKBOX' ).css( "color", "red" );
                                        event.preventDefault();
                                 }
                                else{
                                    $( '#FS_M1_CHECKBOX' ).empty();
                                    /*
                                    $.ajax({ //Process the form using $.ajax()
		    			type 		: 'POST', //Method type
		    			url 		: 'Face_Sheet.php', //Your form processing file url
                                        data            :jQuery("#FS").serialize(),
		    			dataType 	: 'json',
                                        success 	: function(data) {
		    				$('#successFS').fadeIn(1000).append('<p><b>' + data.posted + '</b></p>'); //If successful, than throw a success message
		    			}
                                    });
                                    $('#successFS').fadeIn(1000).append('<p><b>' + 'Data saved successfully!' + '</b></p>');
                                    
                                    event.preventDefault(); //Prevent the default submit
                                    $("#FS_SUBMIT").click(function(event){
                                        event.preventDefault();
                                    });
                                    
                                } // end of else
                            }
                            */
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
                                    $("#O1_I1_R_S").prop('checked', true);
                                }                              
                                else{
                                     $('input[name=O1_I1_C]').prop('checked', false);
                                }   
                            });
                            
                           $( "#O1_I1_B" ).focusout(function() {
                              // $("#O1_I1_C_NA").prop('checked', false);
                               $('input[name=O1_I1_C]').prop('checked', false);
                               $('input[name=O1_I1_R]').prop('checked', false);
                               
                               if($("#O1_I1_A1").val() == '0' && $("#O1_I1_B").val() == '0'){
                                    $("#O1_I1_C_NA").prop('checked', true);
                                    $("#O1_I1_R_S").prop('checked', true);
                                }                              
                                else{
                                    
                                }                                    
                            });
                           
                           
                            $( 'input[name=O1_I1_C]' ).click(function(){
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
                            });
                            
                            $('#Safety_O1').mousemove(function(){
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
                               // FOR ITEM 1
                               /*
                                if ( $("input[name='O1_I1_R_SRC[]']:checked").length == 0) {
                                           $('html, body').animate({ scrollTop: $("#CHECK_O1_I1").offset().top }, 500);
                                        //   alert("At least one of the checkboxes has to be checked!");
                                           $('#O1_I1_R_CHECKBOX').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O1_I1_R_CHECKBOX' ).css( "color", "red" );
                                   //   event.preventDefault();
                                 }
                            
                                else{
                                    $( '#O1_I1_R_CHECKBOX' ).empty();
                            */
                                    /*
                                    $.ajax({ //Process the form using $.ajax()
		    			type 		: 'POST', //Method type
		    			url 		: 'O1_I1_Q_F.php', //Your form processing file url
                                        data            :jQuery("#O1_I1_Q_F").serialize(),
		    			dataType 	: 'json',
                                        success 	: function(data) {
		    				$('#successI1').fadeIn(1000).append('<p><b>' + data.posted + '</b></p>'); //If successful, than throw a success message
		    			}
                                    });
                                    $('#successI1').fadeIn(1000).append('<p><b>' + 'Data saved successfully!' + '</b></p>');
                                    
                                    event.preventDefault(); //Prevent the default submit
                                    $("#O1_I1_SUBMIT").click(function(event){
                                        event.preventDefault();
                                    });
                               */ 
                               
                             //   } // end of else
                                
                                
                                // FOR ITEM 3
                               //  $( '#O2_I3_A1_CHECKBOX_MSG' ).empty();
                             //   $( '#O2_I3_D1_CHECKBOX_MSG' ).empty();
                           //     $( '#O2_I3_E1_CHECKBOX_MSG' ).empty();
                          //      $( '#O2_I3_F1_CHECKBOX_MSG' ).empty();
                          //      $( '#O2_I3_R_CHECKBOX_MSG' ).empty();
                               /*   
                                if ( $("input[name='O2_I3_A1[]']:checked").length == 0) { 
                                           $('html, body').animate({ scrollTop: $("#O2_I3_A1_CHECKBOX").offset().top }, 500);
                             //              alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_A1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_A1_CHECKBOX_MSG' ).css( "color", "red" );
                           //           event.preventDefault();
                                 }
                            */
                                /*   if($("input[name='O2_I3_D1[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_D1_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_D1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_D1_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                          
                         
                               
                                 if($("input[name='O2_I3_E1[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_E1_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_E1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_E1_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                                  else if($("input[name='O2_I3_F1[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_F1_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_F1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_F1_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                            
                                 if($("input[name='O2_I3_R_SRC[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_R_CHECKBOX").offset().top }, 500);
                                    //       alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_R_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_R_CHECKBOX_MSG' ).css( "color", "red" );
                                //      event.preventDefault();
                                 }
                                 else{
                                     
                                 }
                              */  
                                
                                
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
                            
                            
                            $( "#I2" ).mousemove(function() { 
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
   
                           $( "#I3" ).mousemove(function() { 
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
                                $("#O2_I3_R_S").prop('checked', false);
                            }
                            });
                            
                            
                            $('#Safety_O2').mousemove(function(){
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
                                    $("input[name=O2_R]").prop('checked', false);
                                }
                            });
                            
                        });
                        
                        
                    //     });
                        
                       /*
                        $('#O2_I2_Q_F').on('submit', function(e){
                                e.preventDefault();
                                if (false) { 
                                     //      $('html, body').animate({ scrollTop: $("#O2_I2_R_SRC_CF").offset({top:1000,left:0}) }, 500);
                                           $('html, body').animate({ scrollTop: $("#CHECK_O2_I2").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                      //  $("#CHECK_O2_I2").scrollTop(300);
                                 }
                                 else{
                                     this.submit(); 
                                 }
                          }    
                        );
                        */
                        /*
		    	$('#O2_I2_Q_F').submit(function(event) { //Trigger on form submit
                                if ( $("input[name='O2_I2_R_SRC[]']:checked").length == 0) { 
                                           $('html, body').animate({ scrollTop: $("#CHECK_O2_I2").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I2_R_CHECKBOX').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I2_R_CHECKBOX' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                                else{ 
                                 $( '#O2_I2_R_CHECKBOX' ).empty();
                                $.ajax({ //Process the form using $.ajax()                      
		    			type 		: 'POST', //Method type
		    			url 		: 'O2_I2_Q_F.php', //Your form processing file url
                                        data            :jQuery("#O2_I2_Q_F").serialize(),
		    			dataType 	: 'json',
                                        success 	: function(data) {
                                         //   alert(JSON.stringify(data));
                                           if (!data.success) { //If fails
		    				$('#success').fadeIn(1000).append('<p>' + data.posted + '</p>');//Throw relevant error
                                            } 
                                            else{
		    				$('#success').fadeIn(1000).append('<p><b>' + data.posted + '</b></p>'); //If successful, than throw a success message
                                            }                                       
		    			}
                                });
                            $('#success').fadeIn(1000).append('<p>' + 'Data saved successfully!' + '</p>');
                            
		    	    event.preventDefault(); //Prevent the default submit
                           // $("#O2_I2_SUBMIT").prop('disabled', true);
                           $("#O2_I2_SUBMIT").click(function(event){
                                event.preventDefault();
                            }); 
                                } // end of else
		    	});
                        
                       */ 
                      
                        $('#O2_I3_Q_F').submit(function(event) { //Trigger on form submit
                                $( '#O2_I3_A1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_D1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_E1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_F1_CHECKBOX_MSG' ).empty();
                                $( '#O2_I3_R_CHECKBOX_MSG' ).empty();
                                /* 
                                if ( $("input[name='O2_I3_A1[]']:checked").length == 0) { 
                                           $('html, body').animate({ scrollTop: $("#O2_I3_A1_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_A1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_A1_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                                 else if($("input[name='O2_I3_D1[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_D1_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_D1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_D1_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                                 else if($("input[name='O2_I3_E1[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_E1_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_E1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_E1_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                                  else if($("input[name='O2_I3_F1[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_F1_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_F1_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_F1_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                                 else if($("input[name='O2_I3_R_SRC[]']:checked").length == 0){
                                           $('html, body').animate({ scrollTop: $("#O2_I3_R_CHECKBOX").offset().top }, 500);
                                           alert("At least one of the checkboxes has to be checked!");
                                           $('#O2_I3_R_CHECKBOX_MSG').fadeIn(1000).append('Please select checkboxes!');
                                           $( '#O2_I3_R_CHECKBOX_MSG' ).css( "color", "red" );
                                      event.preventDefault();
                                 }
                            
                                 else{
                                 
                                  
                                /* 
                                $.ajax({ //Process the form using $.ajax()                      
		    			type 		: 'POST', //Method type
		    			url 		: 'O2_I3_Q_F.php', //Your form processing file url                              
                                        data            :jQuery("#O2_I3_Q_F").serialize(),
		    			dataType 	: 'json',
                                        success 	: function(data) {
                                          //  alert(JSON.stringify(data));
                                           if (!data.success) { //If fails
		    				$('#successI3').fadeIn(1000).append('<p>' + data.posted + '</p>');//Throw relevant error
                                            } 
                                            else{
		    				$('#successI3').fadeIn(1000).append('<p><b>' + data.posted + '</b></p>'); //If successful, than throw a success message
                                            }                                       
		    			}
                                });
                           $('#successI3').fadeIn(1000).append('<p>' + 'Data saved successfully!' + '</p>');
		    	   event.preventDefault(); //Prevent the default submit 
                         //   $("#O2_I3_SUBMIT").prop('disabled', true);
                            $("#O2_I3_SUBMIT").click(function(event){
                                event.preventDefault();
                            }); 
                            } // end of else
                                */
                         //   }
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
            });

// });

                
                


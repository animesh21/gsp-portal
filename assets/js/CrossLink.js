$(document).ready(function(){

    //alert("Tasks: Sorted based on prioprity \n 1. Make this look like GreenSchoolProgramme \n 2.Check if all javascripts are working fine and if not please rectify.\n 3. FeedBack Page No need for backed. \n 4. Checkboxes values are there even if you uncheck them and submit, Please check I could not understand this. \n 5. Ad Primary Questions, I will share the doc. Logic is there is a entry in database with ID primary, if it is Zero then school opted for primary school audit. Changes only in Land and Waste page. Just copy this page and make new view. \n 6. If you have time after this, then in nergy section there is js missing to calculate megajoules.Please make that.");
    //alert("Required files Crosslink.js and validatorr.js. \n Please test every Field out, i won't be working on this from tommorow since I will be traveling. So if you have any quires ping me.");
    $("#ajax_submit").click(function (event) {
        event.preventDefault();
        var user_name = "animesh0721";
        var password = "abc";

        JQuery.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>' + 'audith2017/ajax_form_data',
            dataType: 'json',
            data: {
                name: user_name,
                password: password
            },
            success: function (res) {
                if (res) {
                    // Show Entered Value
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                }
            }
        });
    });
    $("#Q6E1S1").change(function(){
        
        var val = $('#Q6E1S1').val();
        var placeholder = document.getElementById('Q6E1S1').placeholder;

        val = parseFloat(val);
        placeholder = parseFloat(placeholder);

        if(isNaN(val))
            if(isNaN(placeholder))
                val = 0;
            else
                val = placeholder;
        var x = $("#Q4E1_1").is(":checked");
        if(x == true && (val < 1))
        {
            if (confirm("Please Enter Number Greater Than Zero") == true) 
            {
                $('#Q6E1S1').removeAttr('value');
            } 
            else 
            {
                 $('#Q6E1S1').removeAttr('value');
            }
            $('#Q6E1S1').css('border-color', 'red');
            
        }   
        else
        {
            $('#Q6E1S1').css('border-color', 'solid 1px #cad6e2');
        }


    });

    $("#Q6E2S1").change(function(){
        var min = document.getElementById('Q6A1Val').value;
        var val = $('#Q6E2S1').val();
        var placeholder = document.getElementById('Q6E2S1').placeholder;


        val = parseInt(val);
        placeholder = parseInt(placeholder);

        if(isNaN(val))
            if(isNaN(placeholder))
                val = 0;
            else
                val = placeholder;

        if(val < 1 && min > 2)
        {
            
            if (confirm("You have 1 or more vehicles with Petrol in air section, this value cannot be 0") == true) 
            {
                $('#Q6E2S1').removeAttr('value');
                $('#Q6E2S1').css('border-color', 'red');
            
            } 
            else 
            {
                 
            }
            
        }   
        else
        {
            $('#Q6E2S1').css('border-color', 'solid 1px #cad6e2');
        }


    });
    $("#Q6E3S1").change(function(){
        var min = document.getElementById('Q6A1Val').value;
        var val = $('#Q6E3S1').val();
        var placeholder = document.getElementById('Q6E3S1').placeholder;


        val = parseInt(val);
        placeholder = parseInt(placeholder);

        if(isNaN(val))
            if(isNaN(placeholder))
                val = 0;
            else
                val = placeholder;

        if(val < 1 && min > 2)
        {
            
            if (confirm("You have 1 or more vehicles with Petrol in air section, this value cannot be 0") == true) 
            {
                $('#Q6E3S1').removeAttr('value');
                $('#Q6E3S1').css('border-color', 'red');
            
            } 
            else 
            {
            }
            
        }   
        else
        {
            $('#Q6E3S1').css('border-color', 'solid 1px #cad6e2');
        }


    });

    $("#Q6E4S1").change(function(){
        var min = document.getElementById('Q6A1Val').value;
        var val = $('#Q6E4S1').val();
        var placeholder = document.getElementById('Q6E4S1').placeholder;


        val = parseInt(val);
        placeholder = parseInt(placeholder);

        if(isNaN(val))
            if(isNaN(placeholder))
                val = 0;
            else
                val = placeholder;

        if(val < 1 && min > 2)
        {
            
            if (confirm("You have 1 or more vehicles with Petrol in air section, this value cannot be 0") == true) 
            {
                $('#Q6E4S1').removeAttr('value');
                $('#Q6E4S1').css('border-color', 'red');
            
            } 
            else 
            {
            }
            
        }   
        else
        {
            $('#Q6E4S1').css('border-color', 'solid 1px #cad6e2');
        }


    });

    $("#Wind").click(function(){
        
    
        var wind = $("#Q6E10S1").val();
        if(wind > 0)
        {
            var x = $('#Wind').is(":checked");
            if(x == false)
            {
                if (confirm("You have Entered value in Wind Input Box.") == true) 
                {
                    $('#Q6E10S1').css('border-color', 'red'); 
                    $('#Wind').prop('checked',true);       
                } 
                else 
                {
                    $('#Q6E10S1').css('border-color', 'red'); 
                    $('#Wind').prop('checked',true);     
                }       
            }

        }
        else
        {
            var x = $('#Wind').is(":checked");
            if(x == true)
            {
                if (confirm("Please Enter Value in Wind Input Field") == true) 
                {
                    $('#Q6E10S1').css('border-color', 'red'); 
                    $('#Wind').prop('checked',false);       
                } 
                else 
                {
                    $('#Q6E10S1').css('border-color', 'red'); 
                    $('#Wind').prop('checked',false);    
                }       
            }

        }   
        
        
        
    

});
$("#Solar").click(function(){
        
    
        var Solar = $("#Q6E9S1").val();
        if(Solar > 0)
        {
            var x = $('#Solar').is(":checked");
            if(x == false)
            {
                if (confirm("You have Entered value in Solar Input Box.") == true) 
                {
                    $('#Q6E9S1').css('border-color', 'red'); 
                    $('#Solar').prop('checked',true);       
                } 
                else 
                {
                    $('#Q6E9S1').css('border-color', 'red'); 
                    $('#Solar').prop('checked',true);    
                }       
            }

        }   
        else
        {
            var x = $('#Solar').is(":checked");
            alert("T");
            if(x == true)
            {
                if (confirm("Please Enter Value in Solar Input Box.") == true) 
                {
                    $('#Q6E9S1').css('border-color', 'red'); 
                    $('#Solar').prop('checked',false);       
                } 
                else 
                {
                    $('#Q6E9S1').css('border-color', 'red'); 
                    $('#Solar').prop('checked',false);   
                }       
            }           
        }
});
$( "#land" ).submit(function( event ) { //Land Submit

    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<4;i++)
    {
        var id1 = "Q1LzS1".replace('z',i);
        var id2 = "Q1LzS2".replace('z',i);
        var id3 = "Q1LzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one teacher");
        
        event.preventDefault();
    }
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<6;i++)
    {
        var id1 = "Q2LzS1".replace('z',i);
        var id2 = "Q2LzS2".replace('z',i);
        var id3 = "Q2LzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one admin");
        
        event.preventDefault();
    }

    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<11;i++)
    {
        var id1 = "Q3LzS1".replace('z',i);
        var id2 = "Q3LzS2".replace('z',i);
        var id3 = "Q3LzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one student");
        event.preventDefault();
    }

    var error = false;
    var id = "";
    for(i=1;i<13;i++)
    {
        var id1 = "Q4Lz".replace('z',i);

        var element1 = parseInt(document.getElementById(id1).value);
        var element11 = parseInt(document.getElementById(id1).placeholder);
        
        if(isNaN(element1) && isNaN(element11))
        {
            id = id1;
            error =true;
            alert("Please write 0(zero) if you do not have any input/entry");
        }   
    }
    if(error == true)
    {
        $('#'+id).focus();
        
    }
  var Q4L1 = parseInt(document.getElementById("Q4L1").value);
  var Q4L11 = parseInt(document.getElementById("Q4L1").placeholder);

  if(isNaN(Q4L1) && isNaN(Q4L11) )
  {
    alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
    event.preventDefault();

  }
  
  var val1 = $('#Q6A2S1T5').val();
  val1 = parseInt(val1);
    
  if(val1 > 0)
  {
    var val2 = parseFloat($('#Q4L7').val());
    var val2Place = parseFloat(document.getElementById('Q4L7').placeholder);
    
    if(val2 < 1 || val2Place < 1)
    {
        alert("Please Enter Value in Surface parking area, Or remove Authorized Parking form Air Section");
                
    }
  }
  
});

$('#Q4L7').change(function(){
var val1 = $('#Q6A2S1T5').val();
  val1 = parseInt(val1);
    
  if(val1 > 0)
  {
    var val2 = parseFloat($('#Q4L7').val());
    var val2Place = parseFloat(document.getElementById('Q4L7').placeholder);
    console.log(val2Place);
    if(val2 < 1 || val2Place < 1)
    {
        alert("Please Enter Value in Surface parking area, Or remove Authorized Parking form Air Section");
        $('#Q4L7').css('border-color', 'red'); 
        $('#Q4L7').focus();                
                
    }
  }
});
$('#Q8W1S8_2').click(function(){

    var val1 = $('#Q5L1S3').val();
    val1 = parseInt(val1);
    if(val1 > 0)
    {
        var x = $('#Q8W1S8_2').is(":checked");
        if(x == true)
        {
            if (confirm("You have Entered value for Exotic plants, Please select 'Yes'") == true) 
            {
                
                $('#Q8W1S8_1').prop('checked',true); 
               
            } 
            else 
            {
                $('#Q8W1S8_2').prop('checked', true); 

            }       
        }
    }
});

$('#Q5W3').click(function() {
    var x = $('#Q5W3').is(":checked");
    if(x == true)
    {
        document.getElementById("Q8W2S1").style.display = 'block';
        document.getElementById("Q8W2S2").style.display = 'block';
        document.getElementById("Q8W2S3").style.display = 'block';
        document.getElementById("Q8W2S4").style.display = 'block';
        document.getElementById("Q8W2S5").style.display = 'block';
        document.getElementById("Q8W2S8").style.display = 'block';
        document.getElementById("Q8W2S10").style.display = 'block';
        document.getElementById("Q8W2S13").style.display = 'block';
        document.getElementById("Q8W2S61").style.display = 'block';
        document.getElementById("file").style.display = 'block';
        
        document.getElementById("Q8W2S6").style.display = 'none';
        $('#Q8W2_1').prop('checked',true);
        WaterCatchment(2);
        RainEfficiency(2);
        WaterDecrease(0);
        Catchment(2);
        RainwaterHarvest(2);
        Storage(2);
        Recharge(2);
                
    }
    if(x == false)
    {
        document.getElementById("Q8W2S1").style.display = 'none';
        document.getElementById("Q8W2S2").style.display = 'none';
        document.getElementById("Q8W2S3").style.display = 'none';
        document.getElementById("Q8W2S4").style.display = 'none';
        document.getElementById("Q8W2S5").style.display = 'none';
        document.getElementById("Q8W2S61").style.display = 'none';
        document.getElementById("Q8W2S8").style.display = 'none';
        document.getElementById("Q8W2S10").style.display = 'none';
        document.getElementById("Q8W2S13").style.display = 'none';
        document.getElementById("file").style.display = 'none';
        
        document.getElementById("Q8W2S6").style.display = 'block';
        $('#Q8W2_2').prop('checked',true);
        WaterCatchment(2);
        RainEfficiency(2);
        WaterDecrease(0);
        Catchment(2);
        RainwaterHarvest(2);
        Storage(2);
        Recharge(2);
        
    }


});

$( "#water" ).submit(function( event ) { //Water Submit
  
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<4;i++)
    {
        var id1 = "Q1WzS1".replace('z',i);
        var id2 = "Q1WzS2".replace('z',i);
        var id3 = "Q1WzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one teacher");
        
        event.preventDefault();
    }
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<6;i++)
    {
        var id1 = "Q2WzS1".replace('z',i);
        var id2 = "Q2WzS2".replace('z',i);
        var id3 = "Q2WzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one admin");
        
        event.preventDefault();
    }

    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<11;i++)
    {
        var id1 = "Q3WzS1".replace('z',i);
        var id2 = "Q3WzS2".replace('z',i);
        var id3 = "Q3WzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one student");
        event.preventDefault();
    }
    var error = false;
    var id = "";
    for(i=1;i<13;i++)
    {
        var id1 = "Q4Wz".replace('z',i);
        
        var element1 = parseInt(document.getElementById(id1).value);
        var element11 = parseInt(document.getElementById(id1).placeholder);
        
        
        if(isNaN(element1) && isNaN(element11))
         {
           error = true;
           id = id1;
           break;
         }
                
    }
    if(error == true)
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#'+id).focus();
        event.preventDefault();
    }


    var radioCheck = $("input[name=Q7W1]:checked").val();
    if(radioCheck != 'Y' && radioCheck != 'N')
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(4)");
        $('#Q7W1').focus();
        event.preventDefault();
    }
    else if(radioCheck == 'Y') //4(a)
    {
        var radioCheck = $("input[name=Q7W2]:checked").val();
    
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4 && radioCheck != 5 )
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(4a)");
            $('#Q7W2').focus();
            event.preventDefault();
        }
    } 
    else if(radioCheck == 'N') //4(b)
    {
        
        var radioCheck = $("input[name=Q7W3]:checked").val();
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4 )
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(4b)");
            $('#Q7W3').focus();
            event.preventDefault();
        }
    }

    var id = "";
    var error = false; //5
    for(i=1;i<12;i++)
    {
        var id1 = "Q8W1Sz".replace('z',i);
        var radioCheck = $("input[name="+id1+"]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(5)");
            $('#'+id1).focus();
            event.preventDefault();
        }
    }

    var radioCheck = $("input[name=Q8W2]:checked").val(); //6
    if(radioCheck != 'Y' && radioCheck != 'N')
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(6)");
        $('#Q8W2').focus();
        event.preventDefault();
    }
    else if(radioCheck == 'Y')
    {
        var radioCheck = $("input[name=Q8W2S1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S1').focus();
            event.preventDefault();
        }
        else if(radioCheck == 'Y')
        {
            var radioCheck = $("input[name=Q8W2S1S1]:checked").val();
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4 && radioCheck != 5 && radioCheck != 6 && radioCheck != 7)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S1').focus();
                event.preventDefault();
            }   
        }

        var radioCheck = $("input[name=Q8W2S2]:checked").val();
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S2').focus();
            event.preventDefault();
        } 
        else if(radioCheck == 1 || radioCheck == 2 )
        {
            var radioCheck = $("input[name=Q8W2S2S1]:checked").val();
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4 && radioCheck != 5 && radioCheck != 6 && radioCheck != 7 && radioCheck != 8 && radioCheck != 9 && radioCheck != 10)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S2S1').focus();
                event.preventDefault();
            }

            var radioCheck = $("input[name=Q8W2S2S2]:checked").val();
            if(radioCheck != 'Y' && radioCheck != 'N')
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S2S2').focus();
                event.preventDefault();
            }
            else if(radioCheck == 'Y')
            {
                var StorageTank = parseInt(document.getElementById('Q8W2S2S3A').value);
                var StorageTank1 = parseInt(document.getElementById('Q8W2S2S3A').placeholder);
                if(isNaN(StorageTank) && isNaN(StorageTank1))
                {
                    alert("Please write 0(zero) if you do not have any input/entry");
                    $('#Q8W2S2S3A').focus();
                    event.preventDefault();               
                }

                var StorageTank = parseInt(document.getElementById('Q8W2S2S4A').value);
                var StorageTank1 = parseInt(document.getElementById('Q8W2S2S4A').placeholder);
                if(isNaN(StorageTank) && isNaN(StorageTank1))
                {
                    alert("Please write 0(zero) if you do not have any input/entry");
                    $('#Q8W2S2S4A').focus();
                    event.preventDefault();               
                }

                var radioCheck = $("input[name=Q8W2S2S5]:checked").val();
                if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4 && radioCheck != 5 && radioCheck != 6)
                {
                    alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                    $('#Q8W2S2S5').focus();
                    event.preventDefault();
                }
                var radioCheck = $("input[name=Q8W2S2S6]:checked").val();
                if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4)
                {
                    alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                    $('#Q8W2S2S6').focus();
                    event.preventDefault();
                }                

            }
            var radioCheck = $("input[name=Q8W2S2S7]:checked").val();
            if(radioCheck != 'N' && radioCheck != 'Y')
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S2S7').focus();
                event.preventDefault();
            }
            else if(radioCheck == 'Y')
            {
                var StorageTank = parseInt(document.getElementById('Q8W2S2S8A').value);
                var StorageTank1 = parseInt(document.getElementById('Q8W2S2S8A').placeholder);
                if(isNaN(StorageTank) && isNaN(StorageTank1))
                {
                    alert("Please write 0(zero) if you do not have any input/entry");
                    $('#Q8W2S2S8A').focus();
                    event.preventDefault();               
                }                
            }

            var radioCheck = $("input[name=Q8W2S2S10]:checked").val();
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4 && radioCheck != 5)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S2S10').focus();
                event.preventDefault();
            }            
        }

        var radioCheck = $("input[name=Q8W2S4]:checked").val();
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4 && radioCheck != 5 && radioCheck != 6 && radioCheck != 7 && radioCheck != 8 && radioCheck != 9 && radioCheck != 10)
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S4').focus();
            event.preventDefault();
        }

        var radioCheck = $("input[name=Q8W2S5]:checked").val();
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S5').focus();
            event.preventDefault();
        }

        var radioCheck = $("input[name=Q8W2S61]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S61').focus();
            event.preventDefault();
        }
        else if(radioCheck == 'Y')
        {
            var radioCheck = $("input[name=Q8W2S7]:checked").val();
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S7').focus();
                event.preventDefault();
            }
        }

        var radioCheck = $("input[name=Q8W2S8]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S8').focus();
            event.preventDefault();
        }
        else if(radioCheck == 'Y')
        {
            var radioCheck = $("input[name=Q8W2S9]:checked").val();
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S7').focus();
                event.preventDefault();
            }
        }

        var radioCheck = $("input[name=Q8W2S10]:checked").val(); //6(h)
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S10').focus();
            event.preventDefault();
        }
        else if(radioCheck == 1)
        {
            var radioCheck = $("input[name=Q8W2S11]:checked").val(); //6(h) a
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S11').focus();
                event.preventDefault();
            }
        }
        else if(radioCheck == 2)
        {
            var radioCheck = $("input[name=Q8W2S12]:checked").val(); //6(h) a
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q8W2S12').focus();
                event.preventDefault();
            }
        }

        var radioCheck = $("input[name=Q8W2S13]:checked").val(); //6(i)
        if(radioCheck != 'Y' && radioCheck != 'N' )
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q8W2S13').focus();
            event.preventDefault();
        }
    }
    else if(radioCheck == 'N')
    {
        var StorageTank = parseInt(document.getElementById('Q8W2S6A').value);
        var StorageTank1 = parseInt(document.getElementById('Q8W2S6A').placeholder);
        if(isNaN(StorageTank) && isNaN(StorageTank1))
        {
            alert("Please write 0(zero) if you do not have any input/entry");
            $('#Q8W2S6A').focus();
            event.preventDefault();               
        }
    }

    for(i=1;i<9;i++) //7
    {
        var id1 = "Q8W3Sz".replace('z',i);
        var radioCheck = $("input[name="+id1+"]:checked").val(); //7
        if(radioCheck != 'Y' && radioCheck != 'N' )
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(7)");
            $('#'+id1).focus();
            event.preventDefault();
        }   
    }

    var StorageTank = parseInt(document.getElementById('Q9W1').value); //8
    var StorageTank1 = parseInt(document.getElementById('Q9W1').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q9W1').focus();
        event.preventDefault();               
    }

    var StorageTank = parseInt(document.getElementById('Q10W1').value); //9
    var StorageTank1 = parseInt(document.getElementById('Q10W1').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q10W1').focus();
        event.preventDefault();               
    }

    var StorageTank = parseInt(document.getElementById('Q11W1').value); //10
    var StorageTank1 = parseInt(document.getElementById('Q11W1').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q11W1').focus();
        event.preventDefault();               
    }

    var StorageTank = parseInt(document.getElementById('Q13W1S1').value); //11
    var StorageTank1 = parseInt(document.getElementById('Q13W1S1').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q13W1S1').focus();
        event.preventDefault();               
    }
    var StorageTank = parseInt(document.getElementById('Q13W1S2').value); //11
    var StorageTank1 = parseInt(document.getElementById('Q13W1S2').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q13W1S2').focus();
        event.preventDefault();               
    }
    var StorageTank = parseInt(document.getElementById('Q13W1S3').value); //11
    var StorageTank1 = parseInt(document.getElementById('Q13W1S3').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q13W1S3').focus();
        event.preventDefault();               
    }

    var StorageTank = parseInt(document.getElementById('Q14W1').value); //12
    var StorageTank1 = parseInt(document.getElementById('Q14W1').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q14W1').focus();
        event.preventDefault();               
    }

    var StorageTank = parseInt(document.getElementById('Q15W1').value); //13
    var StorageTank1 = parseInt(document.getElementById('Q15W1').placeholder);
    if(isNaN(StorageTank) && isNaN(StorageTank1))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q15W1').focus();
        event.preventDefault();               
    }

    var radioCheck = $("input[name=Q16W1]:checked").val(); //14
    if(radioCheck != 'Y' && radioCheck != 'N' )
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(14)");
        $('#Q16W1').focus();
        event.preventDefault();
    }

    var radioCheck = $("input[name=Q17W1]:checked").val(); //15
    if(radioCheck != 'Y' && radioCheck != 'N' )
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(15)");
        $('#Q17W1').focus();
        event.preventDefault();
    }

    var radioCheck = $("input[name=Q18W1]:checked").val(); //16
    if(radioCheck != 'Y' && radioCheck != 'N' )
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(16)");
        $('#Q18W1').focus();
        event.preventDefault();
    }
    else if(radioCheck == 'Y')
    {
        var radioCheck = $("input[name=Q18W2]:checked").val(); //16(a)
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(16a)");
            $('#Q18W2').focus();
            event.preventDefault();
        }   
    }

    var radioCheck = $("input[name=Q19W1]:checked").val(); //17
    if(radioCheck != 'Y' && radioCheck != 'N' )
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(17)");
        $('#Q19W1').focus();
        event.preventDefault();
    }
    
    var radioCheck = $("input[name=Q20W1]:checked").val(); //18
    if(radioCheck != 'Y' && radioCheck != 'N' )
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(18)");
        $('#Q20W1').focus();
        event.preventDefault();
    }
    else if(radioCheck == 'Y')
    {
        var radioCheck = $("input[name=Q20W2]:checked").val(); //18(a)
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(18a)");
            $('#Q20W2').focus();
            event.preventDefault();
        }   
    }
    else if(radioCheck == 'N')
    {
        var radioCheck = $("input[name=Q20W3]:checked").val(); //18(a)
        if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed. -(18b)");
            $('#Q20W2').focus();
            event.preventDefault();
        }   
    }




  if($('#Q5W3').is(":checked"))
  {
    var x = $('#Q8W2_1').is(":checked")
        if(x == false)
        {
            alert("Rain Water is selected, Please select 'Yes' In Q6")
            event.preventDefault();   
            $('#Q8W2_1').focus();             
  
        }
  }
        
  
});

$('#Q6Wa1S1').keypress(function( e ){
    var current = parseFloat(this.value + e.key);
    if(current < 1)
    {
        $('#Q11Wa3S1').prop('disabled',true);
        $('#Q11Wa3S2').prop('disabled',true);
        $('#Q11Wa3S3').prop('disabled',true);
        $('#Q11Wa3S4').prop('disabled',true);

        $('#Q11Wa3S1').prop('checked',false);
        $('#Q11Wa3S2').prop('checked',false);
        $('#Q11Wa3S3').prop('checked',false);
        $('#Q11Wa3S4').prop('checked',false);

    }
    else
    {
        $('#Q11Wa3S1').prop('disabled',false);
        $('#Q11Wa3S2').prop('disabled',false);
        $('#Q11Wa3S3').prop('disabled',false);
        $('#Q11Wa3S4').prop('disabled',false);

    }


});

$('#Q6Wa2S2').keypress(function(e){
    var current = parseFloat(this.value + e.key);
    if(current < 1)
    {
        $('#Q11Wa1S1').prop('disabled',true);
        $('#Q11Wa1S2').prop('disabled',true);
        $('#Q11Wa1S3').prop('disabled',true);
        $('#Q11Wa1S4').prop('disabled',true);

        $('#Q11Wa1S1').prop('checked',false);
        $('#Q11Wa1S2').prop('checked',false);
        $('#Q11Wa1S3').prop('checked',false);
        $('#Q11Wa1S4').prop('checked',false);

    }
    else
    {
        $('#Q11Wa1S1').prop('disabled',false);
        $('#Q11Wa1S2').prop('disabled',false);
        $('#Q11Wa1S3').prop('disabled',false);
        $('#Q11Wa1S4').prop('disabled',false);

    }

});
$('#Q6Wa2S2').change(function(){

    var current = $('#Q8Wa2S3').val();
    if(current > 0)
    {
         $('#Q10Wa1_1').prop('checked',true);
    }    
    
});
$('#Q10Wa1_1').click(function(){

    

    if(paper > 0 && current > 0)
    {
        if(confirm("Recycled waste paper is entered. Please select 'Yes'.") == true)
        {
             $('#Q10Wa1_1').prop('checked',true);
        }
        else
        {
             $('#Q10Wa1_1').prop('checked',true);
        }    
    }    
    
});

$('#Q6Wa2S1').keypress(function(e){
    var current = parseFloat(this.value + e.key);
    if(current < 1)
    {
        $('#Q11Wa2S1').prop('disabled',true);
        $('#Q11Wa2S2').prop('disabled',true);
        $('#Q11Wa2S3').prop('disabled',true);
        $('#Q11Wa2S4').prop('disabled',true);

        $('#Q11Wa2S1').prop('checked',false);
        $('#Q11Wa2S2').prop('checked',false);
        $('#Q11Wa2S3').prop('checked',false);
        $('#Q11Wa2S4').prop('checked',false);

    }
    else
    {
        $('#Q11Wa2S1').prop('disabled',false);
        $('#Q11Wa2S2').prop('disabled',false);
        $('#Q11Wa2S3').prop('disabled',false);
        $('#Q11Wa2S4').prop('disabled',false);

    }

});
$('#Q6Wa2S3').keypress(function(){
    var current = parseFloat(this.value + e.key);
    if(current < 1)
    {
        $('#Q11Wa6S1').prop('disabled',true);
        $('#Q11Wa6S2').prop('disabled',true);
        $('#Q11Wa6S3').prop('disabled',true);
        $('#Q11Wa6S4').prop('disabled',true);

        $('#Q11Wa6S1').prop('checked',false);
        $('#Q11Wa6S2').prop('checked',false);
        $('#Q11Wa6S3').prop('checked',false);
        $('#Q11Wa6S4').prop('checked',false);

    }
    else
    {
        $('#Q11Wa6S1').prop('disabled',false);
        $('#Q11Wa6S2').prop('disabled',false);
        $('#Q11Wa6S3').prop('disabled',false);
        $('#Q11Wa6S4').prop('disabled',false);

    }


});
$('#Q6Wa4S1').keypress(function(e){
    var current = parseFloat(this.value + e.key);
    if(current < 1)
    {
        $('#Q11Wa4S1').prop('disabled',true);
        $('#Q11Wa4S2').prop('disabled',true);
        $('#Q11Wa4S3').prop('disabled',true);
        $('#Q11Wa4S4').prop('disabled',true);

        $('#Q11Wa4S1').prop('checked',false);
        $('#Q11Wa4S2').prop('checked',false);
        $('#Q11Wa4S3').prop('checked',false);
        $('#Q11Wa4S4').prop('checked',false);

    }
    else
    {
        $('#Q11Wa4S1').prop('disabled',false);
        $('#Q11Wa4S2').prop('disabled',false);
        $('#Q11Wa4S3').prop('disabled',false);
        $('#Q11Wa4S4').prop('disabled',false);

    }


});
$('#Q6Wa5S1').change(function(e){
    var current = parseFloat(this.value + e.key);
    if(current < 1)
    {
        $('#Q11Wa7S1').prop('disabled',true);
        $('#Q11Wa7S2').prop('disabled',true);
        $('#Q11Wa7S3').prop('disabled',true);
        $('#Q11Wa7S4').prop('disabled',true);

        $('#Q11Wa7S1').prop('checked',false);
        $('#Q11Wa7S2').prop('checked',false);
        $('#Q11Wa7S3').prop('checked',false);
        $('#Q11Wa7S4').prop('checked',false);

    }
    else
    {
        $('#Q11Wa7S1').prop('disabled',false);
        $('#Q11Wa7S2').prop('disabled',false);
        $('#Q11Wa7S3').prop('disabled',false);
        $('#Q11Wa7S4').prop('disabled',false);

    }


});
$('#Q8Wa2S8').change(function(){
    var sanitary = parseFloat($('#Q6Wa6S1').val());
    if(sanitary > 0)
    {
        var current = $('#Q8Wa2S8').val();
        if(current < 1)
        {
            alert('Please Enter value more than 0.')
            $('#Q8Wa2S8').css('border-color','red');
        }


    }

});
$('#Q8Wa2S9').change(function(){
    var construction = parseFloat($('#Q6Wa7S1').val());
    if(construction > 0)
    {
        var current = $('#Q8Wa2S9').val();
        if(current < 1)
        {
            alert('Please Enter value more than 0.')
            $('#Q8Wa2S9').css('border-color','red');
        }


    }

});
$('#Q6Wa7S1').change(function(){
    var current = parseFloat(this.value + e.key);
    if(current < 1)
    {
        $('#Q11Wa5S1').prop('disabled',true);
        $('#Q11Wa5S2').prop('disabled',true);
        $('#Q11Wa5S3').prop('disabled',true);
        $('#Q11Wa5S4').prop('disabled',true);

        $('#Q11Wa5S1').prop('checked',false);
        $('#Q11Wa5S2').prop('checked',false);
        $('#Q11Wa5S3').prop('checked',false);
        $('#Q11Wa5S4').prop('checked',false);

    }
    else
    {
        $('#Q11Wa5S1').prop('disabled',false);
        $('#Q11Wa5S2').prop('disabled',false);
        $('#Q11Wa5S3').prop('disabled',false);
        $('#Q11Wa5S4').prop('disabled',false);

    }


});
$('#Q9Wa1_1').click(function(){
    
    if(0 < $('#Q8Wa1S1').val() ||
      0 < $('#Q8Wa1S2').val() ||
      0 < $('#Q8Wa1S3').val() ||
      0 <  $('#Q8Wa1S4').val() ||
      0 < $('#Q8Wa2S1').val() ||
      0 <  $('#Q8Wa2S2').val() ||
      0 < $('#Q8Wa2S3').val() ||
      0 <  $('#Q8Wa2S4').val() ||
      0 < $('#Q8Wa2S5').val() ||
      0 <  $('#Q8Wa1S6').val() ||
      0 < $('#Q8Wa1S7').val() ||
      0 < $('#Q8Wa3S1').val() ||
      0 < $('#Q8Wa3S2').val() ||
      0 < $('#Q8Wa4S1').val() ||
      0 < $('#Q8Wa5S1').val() ||
      0 < $('#Q8Wa6S1').val())
    {
        alert("Composting Selected, but waste and recycled values does not match.")
    }
    else
    {
        
    }

   

});
$('#Q9Wa3').change(function(){
        var current = $('#Q9Wa3').val();
        if(current < 1)
        {
            alert('Please Enter value more than 0.')
            $('#Q9Wa3').css('border-color','red');
        }

});

$("#waste").submit(function( event ) { //Waste Submit
    
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<4;i++)
    {
        var id1 = "Q1WazS1".replace('z',i);
        var id2 = "Q1WazS2".replace('z',i);
        var id3 = "Q1WazS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               
        console.log(id1,id2,id3);
         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         } 

    
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {

        alert("Please enter the name of at least one teacher");
        
        event.preventDefault();
    }

    count1 = 0;
    count2 = 0;
    count3 = 0;
        
    for(i=1;i<6;i++)
    {
        var id1 = "Q2WazS1".replace('z',i);
        var id2 = "Q2WazS2".replace('z',i);
        var id3 = "Q2WazS3".replace('z',i);
        
        console.log(id1,id2,id3);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one admin");
        
        event.preventDefault();
    }

    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<11;i++)
    {
        var id1 = "Q3WazS1".replace('z',i);
        var id2 = "Q3WazS2".replace('z',i);
        var id3 = "Q3WazS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one student");
        event.preventDefault();
    }


    var classroom = parseInt($('#Q4A1').val());
    var playground1 = parseInt($('#Q4L4').val());
    var playground2 = parseInt($('#Q4L6').val());
    var canteen = parseInt($('#Q4F1').val());
    var toilets = parseInt($('#Q4W2').val());
    var elect1 = parseInt($('#Q6A2S1T1').val());
    var elect2 = parseInt($('#Q6A2S1T2').val());
    var elect3 = parseInt($('#Q6A2S1T3').val());
    var elect4 = parseInt($('#Q6A2S1T4').val());
    var elect5 = parseInt($('#Q6A2S1T5').val());
    var elect6 = parseInt($('#Q6A2S1T6').val());
    if(classroom > 0)
    {
        var totalClass = $('#Q5Wa1S5').val();
        if(totalClass < 1)
        {
            if(confirm('Total dustbins in classroom must be higher than 0') == true)
            {
                $('#Q5Wa1S5').css('border-color','red');
                event.preventDefault();
            
            }

        }
        
    }
    
    if($('#Q6Wa1S1').val() < $('#Q8Wa1S1').val() ||
      $('#Q6Wa1S2').val() < $('#Q8Wa1S2').val() ||
      $('#Q6Wa1S3').val() < $('#Q8Wa1S3').val() ||
      $('#Q6Wa1S4').val() <  $('#Q8Wa1S4').val() ||
      $('#Q6Wa2S1').val() < $('#Q8Wa2S1').val() ||
      $('#Q6Wa2S2').val() <  $('#Q8Wa2S2').val() ||
      $('#Q6Wa2S3').val() < $('#Q8Wa2S3').val() ||
      $('#Q6Wa2S4').val() <  $('#Q8Wa2S4').val() ||
      $('#Q6Wa2S5').val() < $('#Q8Wa2S5').val() ||
      $('#Q6Wa1S6').val() <  $('#Q8Wa1S6').val() ||
      $('#Q6Wa1S7').val() < $('#Q8Wa1S7').val() ||
      $('#Q6Wa3S1').val() < $('#Q8Wa3S1').val() ||
      $('#Q6Wa3S2').val() < $('#Q8Wa3S2').val() ||
      $('#Q6Wa4S1').val() < $('#Q8Wa4S1').val() ||
      $('#Q6Wa5S1').val() < $('#Q8Wa5S1').val() ||
      $('#Q6Wa6S1').val() < $('#Q8Wa6S1').val())
    {
        alert("the value of solid waste recycle cannot exceed solid waste generated");
        event.preventDefault();
    }
    var checked = $('#Q9Wa1_1').is(":checked");
    if(checked)
      {  
        if(0 > $('#Q8Wa1S1').val() ||
           0 > $('#Q8Wa1S2').val() ||
           0 > $('#Q8Wa1S3').val() ||
           0 >  $('#Q8Wa1S4').val() ||
           0 > $('#Q8Wa2S1').val() ||
           0 >  $('#Q8Wa2S2').val() ||
           0 > $('#Q8Wa2S3').val() ||
           0 >  $('#Q8Wa2S4').val() ||
           0 > $('#Q8Wa2S5').val() ||
           0 >  $('#Q8Wa1S6').val() ||
           0 > $('#Q8Wa1S7').val() ||
           0 > $('#Q8Wa3S1').val() ||
           0 > $('#Q8Wa3S2').val() ||
           0 > $('#Q8Wa4S1').val() ||
           0 > $('#Q8Wa5S1').val() ||
           0 > $('#Q8Wa6S1').val())
          {
            alert("Composting Selected, but waste and recycled values does not match.");
            event.preventDefault();   
          }
    }

});

$("#energy").submit(function( event ) { //Energy Submit
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<4;i++)
    {
        var id1 = "Q1EzS1".replace('z',i);
        var id2 = "Q1EzS2".replace('z',i);
        var id3 = "Q1EzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one teacher");
        
        event.preventDefault();
    }
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(var i=1;i<6;i++)
    {
        var id1 = "Q2EzS1".replace('z',i);
        var id2 = "Q2EzS2".replace('z',i);
        var id3 = "Q2EzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one admin");
        
        event.preventDefault();
    }

    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<11;i++)
    {
        var id1 = "Q3EzS1".replace('z',i);
        var id2 = "Q3EzS2".replace('z',i);
        var id3 = "Q3EzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one student");
        event.preventDefault();
    }

    var val1 = $("input[name=Q4E1]:checked").val();
    if(val1 != 'Y' && val1 != 'N')
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
        $('#Q4E1').focus();
        event.preventDefault();
    }
    var val1 = $("input[name=Q5E1]:checked").val();
    if(val1 != 'Y' && val1 != 'N')
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
        $('#Q5E1').focus();
        event.preventDefault();
    }
    
    var error = false;
    var id = "";
    for(i=1;i<15;i++)
    {
        var id1 = "Q6EzS1".replace('z',i);
        var id2 = "Q6EzS3".replace('z',i);
        
        var element1 = parseInt(document.getElementById(id1).value);
        var element11 = parseInt(document.getElementById(id1).placeholder);
        
        var element2 = parseInt(document.getElementById(id2).value);
        var element21 = parseInt(document.getElementById(id2).placeholder);
        
        if(isNaN(element1) && isNaN(element11))
         {
           error = true;
           id = id1;
           break;
         }
         else if(isNaN(element2) && isNaN(element21))
         {
           error = true;
           id = id2;
           break;
         }
                
    }
    if(error == true)
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#'+id).focus();
        event.preventDefault();
    }
    error = false;

    for(i=2;i<9;i++)
    {
        var id1 = "Q7EzS1".replace('z',i);
        var id2 = "Q7EzS2".replace('z',i);
        var id3 = "Q7EzS3".replace('z',i);
        
        var element1 = parseInt(document.getElementById(id1).value);
        var element11 = parseInt(document.getElementById(id1).placeholder);
        
        var element2 = parseInt(document.getElementById(id2).value);
        var element21 = parseInt(document.getElementById(id2).placeholder);
        
        var element3 = parseInt(document.getElementById(id3).value);
        var element31 = parseInt(document.getElementById(id3).placeholder);
        
        if(isNaN(element1) && isNaN(element11))
         {
           error = true;
           id = id1;
           break;
         }
         else if(isNaN(element2) && isNaN(element21))
         {
           error = true;
           id = id2;
           break;
         }
         else if(isNaN(element3) && isNaN(element31))
         {
           error = true;
           id = id3;
           break;
         }
                
    }
    if(error == true)
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#'+id).focus();
        event.preventDefault();
    }
    error = false;
    var val2 = parseInt($('#Q8E1').val());
    var val2Place = parseInt(document.getElementById('Q8E1').placeholder);
    if(isNaN(val2) && isNaN(val2Place))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q8E1').css('border-color','red');
        $('#Q8E1').focus();
        event.preventDefault();   
    }

    var val1 = $("input[name=Q9E1]:checked").val();
    if(val1 != 'Y' && val1 != 'N')
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
        $('#Q9E1').focus();
        event.preventDefault();
    }
    var val2 = parseFloat($('#Q6E1S1').val());
    var val2Place = parseFloat(document.getElementById('Q6E1S1').placeholder);
    var x = $("#Q4E1_1").is(":checked")
    if(x == true && (val2 < 1 || val2Place < 1))
    {
        if (confirm("Please Enter Value in Electricity Column.") == true) 
        {
            $('#Q6E1S1').css('border-color', 'red');
            $('#Q6E1S1').focus(); 
        } 
        else 
        {
            $('#Q6E1S1').css('border-color', 'red'); 
            $('#Q6E1S1').focus();  
        }
        event.preventDefault();                
              
    }
  
});

$( "#air" ).submit(function( event ) { //Air Submit
    var data = '<?php echo json_encode($data); ?>';
    alert('submit clicked.\nData: ' + data);
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<4;i++)
    {
        var id1 = "Q1AzS1".replace('z',i);
        var id2 = "Q1AzS2".replace('z',i);
        var id3 = "Q1AzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one teacher");
        
        event.preventDefault();
    }
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<6;i++)
    {
        var id1 = "Q2AzS1".replace('z',i);
        var id2 = "Q2AzS2".replace('z',i);
        var id3 = "Q2AzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one admin");
        
        event.preventDefault();
    }

    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<11;i++)
    {
        var id1 = "Q3AzS1".replace('z',i);
        var id2 = "Q3AzS2".replace('z',i);
        var id3 = "Q3AzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one student");
        event.preventDefault();
    }

    var val1 = $("input[name=Q6A1]:checked").val();
    val1 = parseInt(val1);
    var error = false;
    var id= "";
    if(val1 > 2)
    {
        for(i=1;i<7;i++)
        {
            var id1="bz".replace('z',i);
            var id2="cz".replace('z',i);
            var id3="vz".replace('z',i);
            var id4="oz".replace('z',i);

            var b1 = parseInt(document.getElementById(id1).value);
            var b11 = parseInt(document.getElementById(id1).placeholder);

            var c1 = parseInt(document.getElementById(id2).value);
            var c11 = parseInt(document.getElementById(id2).placeholder);
            
            var v1 = parseInt(document.getElementById(id3).value);
            var v11 = parseInt(document.getElementById(id3).placeholder);
            
            var o1 = parseInt(document.getElementById(id4).value);
            var o11 = parseInt(document.getElementById(id4).placeholder);
            
            if(isNaN(b1) && isNaN(b11))
             {
               error = true;
               id = id1;
               break;
             }
             else if(isNaN(c1) && isNaN(c11))
             {
               error = true;
               id = id2;
               break;
             }
             else if(isNaN(v1) && isNaN(v11))
             {
               error = true;
               id = id3;
               break;
             }
             else if(isNaN(o1) && isNaN(o11))
             {
               error = true;
               id = id4;
               break;
             }   
                
        }
        if(error == true)
        {
            alert("Please write 0(zero) if you do not have any input/entry");
            $('#'+id).focus();
            event.preventDefault();
        }

        error = false;
        for(i=1;i<5;i++)
        {
            var id1="S3Dz".replace('z',i);
            var id2="S3Pz".replace('z',i);
            var id3="S3Lz".replace('z',i);
            var id4="S3Cz".replace('z',i);
            var id5="S3Ez".replace('z',i);
            var id6="S3Hz".replace('z',i);
            var id7="S3Bz".replace('z',i);

            var d1 = parseInt(document.getElementById(id1).value);
            var d11 = parseInt(document.getElementById(id1).placeholder);

            var p1 = parseInt(document.getElementById(id2).value);
            var p11 = parseInt(document.getElementById(id2).placeholder);
            
            var l1 = parseInt(document.getElementById(id3).value);
            var l11 = parseInt(document.getElementById(id3).placeholder);
            
            var c1 = parseInt(document.getElementById(id4).value);
            var c11 = parseInt(document.getElementById(id4).placeholder);
            
            var e1 = parseInt(document.getElementById(id5).value);
            var e11 = parseInt(document.getElementById(id5).placeholder);
            
            var h1 = parseInt(document.getElementById(id6).value);
            var h11 = parseInt(document.getElementById(id6).placeholder);
            
            var b1 = parseInt(document.getElementById(id7).value);
            var b11 = parseInt(document.getElementById(id7).placeholder);
            console.log(id1,id2,id3,id4,id5,id6,id7);
            if(isNaN(d1) && isNaN(d11))
             {
               error = true;
               id = id1;
               break;
             }
             else if(isNaN(p1) && isNaN(p11))
             {
               error = true;
               id = id2;
               break;
             }
             else if(isNaN(l1) && isNaN(l11))
             {
               error = true;
               id = id3;
               break;
             }
             else if(isNaN(c1) && isNaN(c11))
             {
               error = true;
               id = id4;
               break;
             }
             else if(isNaN(e1) && isNaN(e11))
             {
               error = true;
               id = id5;
               break;
             }
             else if(isNaN(h1) && isNaN(h11))
             {
               error = true;
               id = id6;
               break;
             }
             else if(isNaN(b1) && isNaN(b11))
             {
               error = true;
               id = id7;
               break;
             }   
                
        }
        if(error == true)
        {
            alert("Please write 0(zero) if you do not have any input/entry");
            $('#'+id).focus();
            event.preventDefault();
        }
        var radioCheck = $("input[name=Q6A3]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q6A3Answer').focus();
            event.preventDefault();
        }
        var val1 = $("input[name=Q6A3]:checked").val();
        val1 = val1;
        if(val1 == 'Y')
        {
            var radioCheck = $("input[name=Q6A3S1]:checked").val();
            if(radioCheck != 'Y' && radioCheck != 'N')
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q6A3S1Answer').focus();
                event.preventDefault();
            }   
        }
    

    }
    error = false;
    for(i=1;i<12;i++)
        {
            var id1="Q7AzS1".replace('z',i);
            var id2="Q7AzS2".replace('z',i);
            var id3="Q7AzS3".replace('z',i);
            
            var b1 = parseInt(document.getElementById(id1).value);
            var b11 = parseInt(document.getElementById(id1).placeholder);

            var c1 = parseInt(document.getElementById(id2).value);
            var c11 = parseInt(document.getElementById(id2).placeholder);
            
            var v1 = parseInt(document.getElementById(id3).value);
            var v11 = parseInt(document.getElementById(id3).placeholder);
            
            
            if(isNaN(b1) && isNaN(b11))
             {
               error = true;
               id = id1;
               break;
             }
             else if(isNaN(c1) && isNaN(c11))
             {
               error = true;
               id = id2;
               break;
             }
             else if(isNaN(v1) && isNaN(v11))
             {
               error = true;
               id = id3;
               break;
             }
                
                
        }
        if(error == true)
        {
            alert("Please write 0(zero) if you do not have any input/entry");
            $('#'+id).focus();
            event.preventDefault();
        }
    var Q8A1 = parseInt($('#Q8A1').val());
    var Q8A2 = parseInt(document.getElementById('Q8A1').placeholder);

    if(isNaN(Q8A1) && isNaN(Q8A2))
    {
        alert("Please write 0(zero) if you do not have any input/entry");
        $('#Q8A1').focus();
        event.preventDefault();
    }

    var radioCheck = $("input[name=Q9A1]:checked").val();
    if(radioCheck != 'Y' && radioCheck != 'N')
    {
        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
        $('#Q9A1').focus();
        event.preventDefault();
    }

    var val1 = $("input[name=Q9A1]:checked").val();
    if(val1 == 'N')
    {
        var val1 = $("input[name=Q9A2]:checked").val();
        if(val1 != 'N' && val1 != 'Y')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q9A2_1').focus();
            event.preventDefault();
        }   
    }
    

  var val1 = $('#Q4G4S3').val();
  val1 = parseInt(val1);
    
  if(val1 > 0)
  {
    var val2 = parseFloat($('#Q7A12S4').val());
    var val2Place = parseFloat(document.getElementById('Q7A12S4').placeholder);
    
    if(val2 < 1 || val2Place < 1)
    {
        alert("Popultaion does Not match.") 
    
        $('#Q7A12S4').css('border-color', 'red'); 
        $('#Q7A12S4').focus();  
     
        event.preventDefault();      
    }
  }

  var student = parseInt($('#Q7A12S1').val());
  var student1 = parseInt(document.getElementById('Q7A12S1').placeholder);

  var total = parseInt($('#Q7A12S4').val());
  var total1 = parseInt(document.getElementById('Q7A12S4').placeholder);

  var current_student = parseInt($('#Q4G1S3').val());
  var current_pop = parseInt($('#Q4G3S3').val());
  
  if(current_student > 0)
      if(student != current_student && student1 != current_student)
      {
        if(isNaN(student))
            if(isNaN(student1))
            {
                student = 0;
            }
            else
                student = student1;

        alert("Total members of the school community in Q4 ("+student+") should be equal to total permanent population of the school in General Questions Q4a ("+current_student+")") 
        $('#Q7A12S1').focus();  
        event.preventDefault();  
      }
  if(current_pop > 0 )
      if(total != current_pop && total1 != current_pop)
      {
        if(isNaN(total))
         if(isNaN(total))
            {
                total = 0;
            }
            else
                total = total1;


         alert("Total members of the school community in Q4 ("+student+") should be equal to total permanent population of the school in General Questions Q4a ("+current_student+")") 
         $('#Q7A12S3').focus();  
         event.preventDefault();  
      }
  
  
});

$("#food").submit(function( event ) { //food Submit
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<4;i++)
    {
        var id1 = "Q1FzS1".replace('z',i);
        var id2 = "Q1FzS2".replace('z',i);
        var id3 = "Q1FzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one teacher");
        
        event.preventDefault();
    }
    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<6;i++)
    {
        var id1 = "Q2FzS1".replace('z',i);
        var id2 = "Q2FzS2".replace('z',i);
        var id3 = "Q2FzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one admin");
        
        event.preventDefault();
    }

    var count1 = 0;
    var count2 = 0;
    var count3 = 0;
    
    for(i=1;i<11;i++)
    {
        var id1 = "Q3FzS1".replace('z',i);
        var id2 = "Q3FzS2".replace('z',i);
        var id3 = "Q3FzS3".replace('z',i);
        
        var element1 = document.getElementById(id1).value;
        var element11 = document.getElementById(id1).placeholder;
        
        var element2 = document.getElementById(id2).value;
        var element21 = document.getElementById(id2).placeholder;
        
        var element3 = document.getElementById(id3).value;
        var element31 = document.getElementById(id3).placeholder;
               

         if(element1 != "" || element11 != "")
         {
            count1 ++;
         }
         if(element2 != "" || element21 != "")
         {
            count2 ++;
         }
         if(element3 != "" || element31 != "")
         {
            count3 ++;
         }      
    }
    if(count1 == 0 && count2 == 0 && count3 == 0)
    {
        alert("Please enter the name of at least one student");
        event.preventDefault();
    }


    var canteen = $('#Q4F1_2').is(':checked');
      if(canteen == false)
      {
            
        for(i=2;i<11;i++)
        {

            var id1 = "Q6FzS1".replace('z',i);
            var id2 = "Q6FzS2".replace('z',i);
            var id3 = "Q6FzS3".replace('z',i);

            var element1 = parseFloat(document.getElementById(id1).value);
            var element11 = parseFloat(document.getElementById(id1).placeholder);
            var element2 = parseFloat(document.getElementById(id2).value);
            var element21 = parseFloat(document.getElementById(id2).placeholder);
            var element3 = parseFloat(document.getElementById(id3).value);
            var element31 = parseFloat(document.getElementById(id3).placeholder);
            
            if(isNaN(element1) && isNaN(element11))
            {
                $('#'+id1).focus();
                event.preventDefault();
            }
            else if(isNaN(element2) && isNaN(element21))
            {
                $('#'+id2).focus();
                event.preventDefault();
            }
            else if(isNaN(element3) && isNaN(element31))
            {
                $('#'+id3).focus();
                event.preventDefault();
            }


        }
        var radioCheck = $("input[name=Q4F1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q4F1').focus();
            event.preventDefault();
        }
        var radioCheck = $("input[name=Q5F1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q5F1').focus();
            event.preventDefault();
        }
        else if(radioCheck == 'Y')
        {
            var radioCheck = $("input[name=Q5F1S1]:checked").val();
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q5F1S1').focus();
                event.preventDefault();
            }
            var id = "";
            var error = false;
            for(i=1;i<15;i++)
            {
                var name = "Q5F2Sz".replace('z',i)
                var radioCheck = $("input[name=Q5F1Sz]:checked").val();
                if(radioCheck != 'Y' && radioCheck != 'N')
                {
                    id = name;
                    error = true;
                    break;
                }   
            }
            if(error)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#'+id).focus();
                event.preventDefault();
            }
            var student = parseInt($('#Q5F3S1').val());
            var student1 = parseInt(document.getElementById('Q5F3S1').placeholder);
            if(isNaN(student) && isNaN(student1))
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q5F3S1').focus();
                event.preventDefault();   
            }   
        }
        else if(radioCheck == 'N')
        {
            var radioCheck = $("input[name=Q5F1S1]:checked").val();
            if(radioCheck != 'Y' && radioCheck != 'N')
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q5F1S1').focus();
                event.preventDefault();
            }
            else if(radioCheck == 'Y')
            {
                var student = parseInt($('#Q5F1S2A').val());
                var student1 = parseInt(document.getElementById('Q5F1S2A').placeholder);
                if(isNaN(student) && isNaN(student1))
                {
                    alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                    $('#Q5F1S2A').focus();
                    event.preventDefault();   
                }
                var student = parseInt($('#Q5F1S3A').val());
                var student1 = parseInt(document.getElementById('Q5F1S3A').placeholder);
                if(isNaN(student) && isNaN(student1))
                {
                    alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                    $('#Q5F1S3A').focus();
                    event.preventDefault();   
                }
                var radioCheck = $("input[name=Q5F1S4]:checked").val();
                if(radioCheck != 'Y' && radioCheck != 'N')
                {
                    alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                    $('#Q5F1S4').focus();
                    event.preventDefault();
                }
                       
            }
        }

        var traditional = $('#Q7F1_2').is(":checked");
        if(traditional == false)
        {
            for(i=1;i<6;i++)
            {
                    var id1 = "Q7F1Sz".replace('z',i);
                
                    var element1 = parseFloat(document.getElementById(id1).value);
                    var element11 = parseFloat(document.getElementById(id1).placeholder);
                    if(isNaN(element1) && isNaN(element11))
                    {
                        $('#'+id1).focus();
                        alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                        event.preventDefault();
                    }
                    
               
            }
            var element1 = document.getElementsByName('Q7F3S1')[0].value;
            var element11 = document.getElementsByName('Q7F3S1')[0].placeholder;
            if(element1 == "" && element11 == "")
            {
                $('#Q7F3S1').focus();
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                event.preventDefault();
            }
            
        }
        var bevergage = $('#Q8F1_2').is(":checked");
        if(bevergage == false)
        {
            for(i=1;i<6;i++)
            {
                var id1 = "Q8F1Sz".replace('z',i);
            
                var element1 = parseFloat(document.getElementById(id1).value);
                var element11 = parseFloat(document.getElementById(id1).placeholder);
                if(isNaN(element1) && isNaN(element11))
                {
                    $('#'+id1).focus();
                    alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                    event.preventDefault();
                }
            
            
            }
            

        }
        var radioCheck = $("input[name=Q9F1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q9F1').focus();
            event.preventDefault();
        }
        else if(radioCheck != 'Y')
        {
            var element1 = document.getElementById('Q9F2').value;
            var element11 = document.getElementById('Q9F2').placeholder;
            if(element1 == "" && element11 == "")
            {
                $('#Q9F2').focus();
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                event.preventDefault();
            }
        }

        var radioCheck = $("input[name=Q10F1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q10F1').focus();
            event.preventDefault();
        }
        else if(radioCheck != 'Y')
        {
            var element1 = document.getElementById('Q10F2').value;
            var element11 = document.getElementById('Q10F2').placeholder;
            if(element1 == "" && element11 == "")
            {
                $('#Q10F2').focus();
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                event.preventDefault();
            }
        }

        var radioCheck = $("input[name=Q11F1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q11F1').focus();
            event.preventDefault();
        }
        else if(radioCheck != 'Y')
        {
            var element1 = document.getElementById('Q11F2').value;
            var element11 = document.getElementById('Q11F2').placeholder;
            if(element1 == "" && element11 == "")
            {
                $('#Q11F2').focus();
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                event.preventDefault();
            }
            var element1 = document.getElementById('Q11F3').value;
            var element11 = document.getElementById('Q11F3').placeholder;
            if(element1 == "" && element11 == "")
            {
                $('#Q11F3').focus();
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                event.preventDefault();
            }

        }

        var radioCheck = $("input[name=Q12F1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q12F1').focus();
            event.preventDefault();
        }
        else if(radioCheck == 'Y')
        {
            var radioCheck = $("input[name=Q12F2]:checked").val();
            if(radioCheck != 1 && radioCheck != 2 && radioCheck != 3 && radioCheck != 4)
            {
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                $('#Q12F2').focus();
                event.preventDefault();
            }   
        }

        var radioCheck = $("input[name=Q13F1]:checked").val();
        if(radioCheck != 'Y' && radioCheck != 'N')
        {
            alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
            $('#Q13F1').focus();
            event.preventDefault();
        }
        else if(radioCheck == 'Y')
        {
            var element1 = document.getElementById('Q11F3').value;
            var element11 = document.getElementById('Q11F3').placeholder;
            if(element1 == "" && element11 == "")
            {
                $('#Q13F2').focus();
                alert("One or more mandatory questions have not been answered. You cannot proceed until these have been completed.");
                event.preventDefault();
            }  
        }
        
    
    }
});

});
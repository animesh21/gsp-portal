<?php $this->load->view('header'); ?>
<script type="text/javascript">
            window.onload = function () {
              Shadowbox.init();

            };
            var getCities = function ()
            {
              var value = new Object();
              value.id = $('#country-select').val();
              var URL = "<?php echo base_url(); ?>";
              $.ajax({
                url: URL + 'ajax/citites',
                type: 'POST',
                data: value,
                success: function (html) {
                  $('#city-select').html(html);
                }
              });
            };
          </script>
<div class="container">
  <div class="content-form">
    <div class="log-nav">
      <div class="welcome">Welcome <span style="font-weight:bold"><?php echo $this->session->userdata('USERNAME');?></span></div>
      <ul>
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onClick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
        <li>|</li>
        <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li>
      </ul>
    </div>
    <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: 5%; height: 35px;">5%</div>
    </div>
    <h1>School Profile</h1>
    <div class="intro">
      <p> In this section, all questions are compulsory. The school contact details should match with the details provided during the time of registration to the Green Schools Programme (GSP) Audit.</p>
    </div>
   <?php echo form_open('school/set', array('id'=>'school-form')); ?>
    <div class="alert alert-danger" role="alert" 
    <?php if($this->session->flashdata('error') != null)
          echo 'style="display:block;"';
        else
          echo 'style="display:none;"';
      ?>
  >
    <strong><?php echo $this->session->flashdata('error');?></strong>
  </div>
  
  <div class="form-group">
      <label for="username" class="text-red"><span class="cube">1</span>Name of the School / Institution:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" class="form-control text empty" name="username" id="username"  placeholder="Name of the School / Institution:" value="<?php echo $data["name"]; ?>" readonly>
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">2</span>Address Line 1:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" name="username" id="username" tabindex="1" class="form-control text empty" placeholder="Address 1" value="<?php echo $data["address1"]; ?>" readonly>
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">3</span>Address Line 2:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" name="username" id="username" tabindex="1" class="form-control text empty" placeholder="Address 2" value="<?php echo $data["address2"]; ?>" readonly >
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">4</span>Country:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" name="username" id="username" tabindex="1" class="form-control text empty" placeholder="Country" value="<?php echo $data["country"]; ?>" readonly>
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">5</span>State:</label>
      <div class="clearfix">&nbsp;</div>
      <?php echo form_dropdown('state', $states, set_value("state", $data["state"]), array('class' => 'form-control', 'id' => 'country-select', 'onchange' => 'getCities();')); ?>
      <!--input type="text" class="text empty" name="username" id="username" tabindex="1" class="form-control" placeholder="State" value="<?php echo $data["state"]; ?>"-->
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">6</span>District:</label>
      <div class="clearfix">&nbsp;</div>
      <?php echo form_dropdown('district', $cities, set_value("district", $data["district"]), array('class' => 'form-control', 'id' => 'city-select')); ?>
      <!--input type="text" name="username" id="username" class="text empty" tabindex="1"  placeholder="District" value="<?php echo $data["district"]; ?>" -->
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">7</span>City:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" class="form-control text empty" name="username" id="username" tabindex="1"  placeholder="City" value="<?php echo $data["city"]; ?>">
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">8</span>Pin Code:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="number" class="form-control" name="username" id="username" tabindex="1"  placeholder="Pin Code" value="<?php echo $data["pincode"]; ?>"  title="digits are allowed">
    </div>
    <br>
    <div class="form-group">
      <div class="form-group">
        <label for="username" class="control-label"><span class="cube">9</span>Enter Telephone Number (Landline Number):</label>
      </div>
      <div class="col-xs-2">
        <input type="text" name="username" class="form-control" id="std" tabindex="1"  placeholder="Std Code" value="<?php echo $data["std"]; ?>" min="000" title="Only digits in range 3 to 6 is allowed">
      </div>
      <div class="col-xs-8">
        <input type="text" name="username" class="form-control" id="telephone" tabindex="1"  placeholder="Telephone" value="<?php echo $data["telephone"]; ?>" >
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">10</span>Enter Mobile number:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" name="username" class="text empty" id="mobile" tabindex="1"  placeholder="Mobile Number" value="<?php echo $data["mobile"]; ?>" >
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">11</span>Principal's Name:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" name="username" class="text empty" id="principal" tabindex="1"  placeholder="Principal's Name:" value="<?php echo $data["principle_name"]; ?>" >
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">12</span>Enter GSP Coordinator's Name: <a class="tt" data-tooltip="Coordinating teacher's name/ Name of the teacher responsible for GSP Audit"><span class="badge">?</span></a></label>
      <div class="clearfix">&nbsp;</div>
      <input type="text" name="username" class="text empty" id="cordinatorname" tabindex="1"  placeholder="GSP Coordinator's Name" value="<?php echo $data["coname"]; ?>" >
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">13</span>Enter GSP Coordinator's Email:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="email" name="username" class="form-control" id="username" tabindex="1"  placeholder="GSP Coordinator's Email" value="<?php echo $data["coemail"]; ?>" >
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">14</span>Enter GSP Coordinator's Mobile Number:</label>
      <div class="clearfix">&nbsp;</div>
      <input type="number" name="username" class="form-control" id="comobile" tabindex="1" placeholder="GSP Coordinator's Mobile Number" value="<?php echo $data["comobile"]; ?>" >
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">15</span>Please select the appropriate category for your school <a class="tt" data-tooltip="Please choose what is applicable. If 60—or 75—per cent of your school’s population belongs to one category and the balance to another, select the category the majority of students belong to. For example: If 75 per cent of the students are day boarders and 25 per cent are residential, select ‘Day Boarding’. But if 50 per cent of the students are day boarders and 50 per cent are residential, select ‘Day Boarding + Residential’."><span class="badge">?</span></a></label>
      <div class="radio">
        <label>
        <input type="radio" name="Q1S1" value="<?php echo set_value('Q1S1',1)?>" <?php if(isset($data['Q1S1'])) echo $data['Q1S1'] == 1 ?"checked":"" ?>>
        Day Scholar </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q1S1" value="<?php echo set_value('Q1S1',2)?>" <?php if(isset($data['Q1S1'])) echo $data['Q1S1'] == 2 ?"checked":"" ?>>
        Day Boarding </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q1S1" value="<?php echo set_value('Q1S1',3)?>" <?php if(isset($data['Q1S1'])) echo $data['Q1S1'] == 3 ?"checked":"" ?>>
        Residential </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q1S1" value="<?php echo set_value('Q1S1',4)?>" <?php if(isset($data['Q1S1'])) echo $data['Q1S1'] == 4 ?"checked":"" ?>>
        Day Scholar + Day Boarding </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q1S1" value="<?php echo set_value('Q1S1',5)?>" <?php if(isset($data['Q1S1'])) echo $data['Q1S1'] == 5 ?"checked":"" ?>>
        Day Boarding + Residential </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q1S1" value="<?php echo set_value('Q1S1',6)?>" <?php if(isset($data['Q1S1'])) echo $data['Q1S1'] == 6 ?"checked":"" ?>>
        Day Scholar + Residential </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q1S1" value="<?php echo set_value('Q1S1',7)?>" <?php if(isset($data['Q1S1'])) echo $data['Q1S1'] == 7 ?"checked":"" ?>>
        Day Scholar + Day Boarding + Residential </label>
      </div>
    </div>
    <br>
    <div class="form-group">
      <label for="username" class="control-label"><span class="cube">16</span>How many shifts does your school have <a class="tt" data-tooltip="Not applicable in the case of residential school"><span class="badge">?</span></a></label>
      <div class="radio">
        <label>
        <input type="radio" name="Q2S1" value="<?php echo set_value('Q2S1',1)?>" <?php if(isset($data['Q2S1'])) echo $data['Q2S1'] == 1 ?"checked":"" ?>>
        Morning </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q2S1" value="<?php echo set_value('Q2S1',2)?>" <?php if(isset($data['Q2S1'])) echo $data['Q2S1'] == 2 ?"checked":"" ?>>
        Evening </label>
      </div>
      <div class="radio">
        <label>
        <input type="radio" name="Q2S1" value="<?php echo set_value('Q2S1',3)?>" <?php if(isset($data['Q2S1'])) echo $data['Q2S1'] == 3 ?"checked":"" ?>>
        Both </label>
      </div>
    </div>
  <div class="text-center">
  <button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button" onClick="javascript:window.location.href='<?php echo base_url("general")?>';">Next</button> 
    <input type="submit" name="Submit" value="Save and Resume Later" class="submit button" id="movenextbtn"/></div>
    <?php echo form_close(); ?> </div>
</div>
<?php $this->load->view('footer'); ?>
<script type="text/javascript">
	$("#school-form").submit(function(event) {
		var value=$('#principal').val();
		if(value=='')
		{
			alert('Please enter Principal Name!');
			event.preventDefault();
		}else if($('#cordinatorname').val()=='')
		{
			alert('Please enter Cordinator Name!');
			event.preventDefault();
		}
    	
});
</script>
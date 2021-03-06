<?php $this->load->view('header');?>
<div class="container">
 <div class="content-form">
  <div class="log-nav">
   <div class="welcome">Welcome, <span style="font-weight:bold"><?php echo $this->session->userdata('USERNAME');?></span></div>
   <ul>
    <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
    <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
    <li>|</li>
<li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li>
        </ul>
</div>
<div id="pprg" class="newprog progress" style="text-align:center">
 <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: 62.5%; height: 35px;">62.5%</div>
</div>
<div class="intro"> 
  <h1>FOOD</h1>
  <div class="video"> <a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;"></a></div>
  </div>
 <?php echo form_open('food/set'); ?>
   <div class="form-group">
    <label><h6> Task 1: Choose your Food Audit Team </h6></label><br>
    You would require at least 5 to 10 of your schoolmates in the Food audit team. The teacher co-ordinator may be a science or home science teacher or midday meal in-charge with an interest in food and nutrition. Do include the canteen in-charge in your audit team. <br><br>

    <div class="form-group">
      <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
      <div class="form-group row">
        <div class="col-xs-1"> </div>
        <div class="col-xs-3">
          <label >First Name</label>
        </div>
        <div class="col-xs-3">
          <label >Last Name</label>
        </div>

        <div class="col-xs-3">
          <label >Email ID</label>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-1"> 1 </div>
        <div class="col-xs-3">
          <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1F1S1" type="text" name="Q1F1S1" placeholder="<?php if(isset($data['Q1F1S1'])) echo $data['Q1F1S1']; ?>" value="<?php echo set_value('Q1F1S1'); ?>"/>
        </div>
        <div class="col-xs-3">
          <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1F1S1" type="text" name="Q1F1S3" placeholder="<?php if(isset($data['Q1F1S3'])) echo $data['Q1F1S3']; ?>" value="<?php echo set_value('Q1F1S3'); ?>"/>
        </div>

        <div class="col-xs-3">
          <?php echo form_error('email'); ?>
          <input class="form-control space-textbox" id="Q1F1S1" type="email"  name="Q1F1S2" placeholder="<?php if(isset($data['Q1F1S2'])) echo $data['Q1F1S2']; ?>" value="<?php echo set_value('Q1F1S2'); ?>"/>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-1"> 2 </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1F1" type="text"  name="Q1F2S1" placeholder="<?php if(isset($data['Q1F2S1'])) echo $data['Q1F2S1'] ?>" value="<?php echo set_value('Q1F2S1'); ?>"/>
        </div>
        <div class="col-xs-3">
          <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1F2S1" type="text" name="Q1F2S3" placeholder="<?php if(isset($data['Q1F2S3'])) echo $data['Q1F2S3']; ?>" value="<?php echo set_value('Q1F2S3'); ?>"/>
        </div>

        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1F1" type="email"  name="Q1F2S2" placeholder="<?php if(isset($data['Q1F2S2'])) echo $data['Q1F2S2'] ?>" value="<?php echo set_value('Q1F2S2'); ?>"/>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-xs-1"> 3 </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1F1" type="text"  name="Q1F3S1" placeholder="<?php if(isset($data['Q1F3S1'])) echo $data['Q1F3S1'] ?>" value="<?php echo set_value('Q1F3S1'); ?>"/>
        </div>
        <div class="col-xs-3">
          <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1F3S1" type="text" name="Q1F3S3" placeholder="<?php if(isset($data['Q1F3S3'])) echo $data['Q1F3S3']; ?>" value="<?php echo set_value('Q1F3S3'); ?>"/>
        </div>

        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q1F1" type="email"  name="Q1F3S2" placeholder="<?php if(isset($data['Q1F3S2'])) echo $data['Q1F3S2'] ?>" value="<?php echo set_value('Q1F3S2'); ?>"/>
        </div>
      </div>
      <div class="form-group">
        <label  class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
        <div class="form-group row">
          <div class="col-xs-1"> </div>
          <div class="col-xs-3">
            <label >First Name</label>
          </div>
          <div class="col-xs-3">
            <label >Last Name</label>
          </div>

          <div class="col-xs-3">
            <label >Email ID</label>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-1"> 1 </div>
          <div class="col-xs-3">
           <?php echo form_error('name1'); ?>
           <input class="form-control space-textbox" type="text"  name="Q2F1S1" placeholder="<?php if(isset($data['Q2F1S1'])) echo $data['Q2F1S1'] ?>" value="<?php echo set_value('Q2F1S1'); ?>"/>
         </div>
         <div class="col-xs-3">
           <input class="form-control space-textbox" type="text"  name="Q2F1S3" placeholder="<?php if(isset($data['Q2F1S3'])) echo $data['Q2F1S3'] ?>" value="<?php echo set_value('Q2F1S3'); ?>"/>
         </div>

         <div class="col-xs-3">
           <?php echo form_error('email1'); ?>
           <input class="form-control space-textbox" type="email"  name="Q2F1S2" placeholder="<?php if(isset($data['Q2F1S2'])) echo $data['Q2F1S2'] ?>" value="<?php echo set_value('Q2F1S2'); ?>"/>
         </div>
       </div>
       <div class="form-group row">
        <div class="col-xs-1"> 2 </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" type="text"  name="Q2F2S1" placeholder="<?php if(isset($data['Q2F2S1'])) echo $data['Q2F2S1'] ?>" value="<?php echo set_value('Q2F2S1'); ?>"/>
        </div>
        <div class="col-xs-3">
         <input class="form-control space-textbox" type="text"  name="Q2F2S3" placeholder="<?php if(isset($data['Q2F2S3'])) echo $data['Q2F2S3'] ?>" value="<?php echo set_value('Q2F2S3'); ?>"/>
       </div>

       <div class="col-xs-3">
        <input class="form-control space-textbox" type="email"  name="Q2F2S2" placeholder="<?php if(isset($data['Q2F2S2'])) echo $data['Q2F2S2'] ?>" value="<?php echo set_value('Q2F2S2'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-1"> 3 </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" type="text"  name="Q2F3S1" placeholder="<?php if(isset($data['Q2F3S1'])) echo $data['Q2F3S1'] ?>" value="<?php echo set_value('Q2F3S1'); ?>"/>
      </div>
      <div class="col-xs-3">
       <input class="form-control space-textbox" type="text"  name="Q2F3S3" placeholder="<?php if(isset($data['Q2F3S3'])) echo $data['Q2F3S3'] ?>" value="<?php echo set_value('Q2F3S3'); ?>"/>
     </div>

     <div class="col-xs-3">
      <input class="form-control space-textbox" type="email"  name="Q2F3S2" placeholder="<?php if(isset($data['Q2F3S2'])) echo $data['Q2F3S2'] ?>" value="<?php echo set_value('Q2F3S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" type="text"  name="Q2F4S1" placeholder="<?php if(isset($data['Q2F4S1'])) echo $data['Q2F4S1']; ?>" value="<?php echo set_value('Q2F4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
     <input class="form-control space-textbox" type="text"  name="Q2F4S3" placeholder="<?php if(isset($data['Q2F4S3'])) echo $data['Q2F4S3'] ?>" value="<?php echo set_value('Q2F4S3'); ?>"/>
   </div>

   <div class="col-xs-3">
    <input class="form-control space-textbox" type="email"  name="Q2F4S2" placeholder="<?php if(isset($data['Q2F4S2'])) echo $data['Q2F4S2']; ?>" value="<?php echo set_value('Q2F4S2'); ?>"/>
  </div>;
</div>
<div class="form-group row">
  <div class="col-xs-1"> 5 </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" type="text"  name="Q2F5S1" placeholder="<?php if(isset($data['Q2F5S1'])) echo $data['Q2F5S1'] ?>" value="<?php echo set_value('Q2F5S1'); ?>"/>
  </div>
  <div class="col-xs-3">
   <input class="form-control space-textbox" type="text"  name="Q2F5S3" placeholder="<?php if(isset($data['Q2F5S3'])) echo $data['Q2F5S3'] ?>" value="<?php echo set_value('Q2F5S3'); ?>"/>
 </div>

 <div class="col-xs-3">
  <input class="form-control space-textbox" type="email"  name="Q2F5S2" placeholder="<?php if(isset($data['Q2F5S2'])) echo $data['Q2F5S2'] ?>" value="<?php echo set_value('Q2F5S2'); ?>"/>
</div>
</div>
</div>
<div class="form-group">
    <label  class="control-label">Students (maximum of ten students can be part of the team):</label>
    <div class="form-group row">
      <div class="col-xs-1"> </div>
      <div class="col-xs-3">
        <label >First Name</label>
      </div>
      <div class="col-xs-3">
        <label >Last Name</label>
      </div>
      <div class="col-xs-3">
        <label >Grade</label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-1"> 1 </div>
      <div class="col-xs-3">
       <?php echo form_error('name2'); ?>
       <input class="form-control space-textbox" id="ex1" type="text"  name="Q3F1S1" placeholder="<?php if(isset($data['Q3F1S1'])) echo $data['Q3F1S1'] ?>"  value="<?php echo set_value('Q3F1S1'); ?>"/>
     </div>
     <div class="col-xs-3">
       <?php echo form_error('email2'); ?>
       <input class="form-control space-textbox" id="ex2" type="text"  name="Q3F1S2" placeholder="<?php if(isset($data['Q3F1S2'])) echo $data['Q3F1S2'] ?>" value="<?php echo set_value('Q3F1S2'); ?>"/>
     </div>
     <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3F1S3" placeholder="<?php if(isset($data['Q3F1S3'])) echo $data['Q3F1S3'] ?>" value="<?php echo set_value('Q3F1S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 2 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text"  name="Q3F2S1" placeholder="<?php if(isset($data['Q3F2S1'])) echo $data['Q3F2S1'] ?>" value="<?php echo set_value('Q3F2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text"  name="Q3F2S2" placeholder="<?php if(isset($data['Q3F2S2'])) echo $data['Q3F2S2'] ?>" value="<?php echo set_value('Q3F2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3F2S3" placeholder="<?php if(isset($data['Q3F2S3'])) echo $data['Q3F2S3'] ?>" value="<?php echo set_value('Q3F2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 3 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text"  name="Q3F3S1" placeholder="<?php if(isset($data['Q3F3S1'])) echo $data['Q3F3S1'] ?>" value="<?php echo set_value('Q3F3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text"  name="Q3F3S2" placeholder="<?php if(isset($data['Q3F3S2'])) echo $data['Q3F3S2'] ?>" value="<?php echo set_value('Q3F3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3F3S3" placeholder="<?php if(isset($data['Q3F3S3'])) echo $data['Q3F3S3'] ?>" value="<?php echo set_value('Q3F3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text"  name="Q3F4S1" placeholder="<?php if(isset($data['Q3F4S1'])) echo $data['Q3F4S1'] ?>" value="<?php echo set_value('Q3F4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text"  name="Q3F4S2" placeholder="<?php if(isset($data['Q3F4S2'])) echo $data['Q3F4S2'] ?>" value="<?php echo set_value('Q3F4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3F4S3" placeholder="<?php if(isset($data['Q3F4S3'])) echo $data['Q3F4S3'] ?>" value="<?php echo set_value('Q3F4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 5 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3F5S1" placeholder="<?php if(isset($data['Q3F5S1'])) echo $data['Q3F5S1'] ?>" value="<?php echo set_value('Q3F5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3F5S2" placeholder="<?php if(isset($data['Q3F5S2'])) echo $data['Q2A5S2'] ?>" value="<?php echo set_value('Q3F5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3F5S3" placeholder="<?php if(isset($data['Q3F5S3'])) echo $data['Q3F5S3'] ?>" value="<?php echo set_value('Q3F5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 6 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3F6S1" placeholder="<?php if(isset($data['Q3F6S1'])) echo $data['Q3F6S1'] ?>" value="<?php echo set_value('Q3F6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3F6S2" placeholder="<?php if(isset($data['Q3F6S2'])) echo $data['Q3F6S2'] ?>" value="<?php echo set_value('Q3F6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3F6S3" placeholder="<?php if(isset($data['Q3F6S3'])) echo $data['Q3F6S3'] ?>" value="<?php echo set_value('Q3F6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 7 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3F7S1" placeholder="<?php if(isset($data['Q3F7S1'])) echo $data['Q3F7S1'] ?>" value="<?php echo set_value('Q3F7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3F7S2" placeholder="<?php if(isset($data['Q3F7S2'])) echo $data['Q3F7S2'] ?>" value="<?php echo set_value('Q3F7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3F7S3" placeholder="<?php if(isset($data['Q3F7S3'])) echo $data['Q3F7S3'] ?>" value="<?php echo set_value('Q3F7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 8 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3F8S1" placeholder="<?php if(isset($data['Q3F8S1'])) echo $data['Q3F8S1'] ?>" value="<?php echo set_value('Q3F8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3F8S2" placeholder="<?php if(isset($data['Q3F8S2'])) echo $data['Q3F8S2'] ?>" value="<?php echo set_value('Q3F8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3F8S3" placeholder="<?php if(isset($data['Q3F8S3'])) echo $data['Q3F8S3'] ?>" value="<?php echo set_value('Q3F8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 9 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3F9S1" placeholder="<?php if(isset($data['Q3F9S1'])) echo $data['Q3F9S1'] ?>" value="<?php echo set_value('Q3F9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3F9S2" placeholder="<?php if(isset($data['Q3F9S2'])) echo $data['Q3F9S2'] ?>" value="<?php echo set_value('Q3F9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3F9S3" placeholder="<?php if(isset($data['Q3F9S3'])) echo $data['Q3F9S3'] ?>" value="<?php echo set_value('Q3F9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 10 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3F10S1" placeholder="<?php if(isset($data['Q3F10S1'])) echo $data['Q3F10S1'] ?>" value="<?php echo set_value('Q3F10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3F10S2" placeholder="<?php if(isset($data['Q3F10S2'])) echo $data['Q3F10S2'] ?>" value="<?php echo set_value('Q3F10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3F10S3" placeholder="<?php if(isset($data['Q3F10S3'])) echo $data['Q3F10S3'] ?>" value="<?php echo set_value('Q3F10S3'); ?>"/>
    </div>
  </div>
</div>

<div class="form-group">
 <label><h6>Task 2: Find out about the food service in your school.<a class="tt" data-tooltip="Packaged food is any food item which is commercially prepared, processed for a longer shelf life and is ready to eat and drink"><span class="badge">?</span></a></h6></label>
 <div class="form-group">
  <input type="hidden" id="Q1S1" value="<?php if(isset($other['Q1S1'])) echo $other['Q1S1']; ?>">
  <?php if(empty($data['Q4F1'])) if(isset($other['Q1S1'])) if($other['Q1S1'] >= 3) $data['Q4F1'] = 'Y' ?>
  
  <label  class="control-label"><span class="cube">1</span> Does your school have a provision/space to sell packaged food items within the campus<a class="tt" data-tooltip="Any place, permanent or temporary, run by school, outsourced to vendors, self help groups, shopkeepers to sell products during/after/before school timings/duration should be considered."><span class="badge">?</span></a></label>
  <div class="form-group">
   <label class="radio-inline text-gray">
    <input type="radio" id="Q4F1_1" onclick="FoodQ4F1(1)" name="Q4F1" value="<?php echo set_value('Q4F1','Y')?>" <?php if(isset($data['Q4F1'])) echo $data['Q4F1'] == 'Y'?"checked":"" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
     <input type="radio" id="Q4F1_2" onclick="FoodQ4F1(2)" name="Q4F1" value="<?php echo set_value('Q4F1','N')?>" <?php if(isset($data['Q4F1'])) echo $data['Q4F1'] == 'N'?"checked":"" ?> >
     No </label>
   </div>
 </div>
</div>

<div class="form-group">
     <label  class="control-label"><span class="cube">2</span>Does your school serve midday meals?</label>
     <div class="form-group">
      <label class="radio-inline text-gray">
       <input type="radio" name="Q5F1" onclick="MealsToggle(1)" value="<?php echo set_value('Q5F1','Y')?>" <?php if(isset($data['Q5F1'])) echo $data['Q5F1'] == 'Y'?"checked":"" ?>>
       Yes </label>
       <label class="radio-inline text-gray">
        <input type="radio" name="Q5F1" onclick="MealsToggle(2)" value="<?php echo set_value('Q5F1','N')?>" <?php if(isset($data['Q5F1'])) echo $data['Q5F1'] == 'N'?"checked":"" ?>>
        No </label>
      </div>
    </div>

<?php 
if(isset($other['Q1S1']))
  if($other['Q1S1'] >= 3)
  {
    ?>
    <div class="form-group">
     <label  class="control-label"><span class="cube">2</span>Does your school serve whole day’s meals?</label>
     <div class="form-group">
      <label class="radio-inline text-gray">
       <input type="radio" name="Q5F2" value="<?php echo set_value('Q5F2','Y')?>" <?php if(isset($data['Q5F2'])) echo $data['Q5F2'] == 'Y'?"checked":"" ?>>
       Yes </label>
       <label class="radio-inline text-gray">
        <input type="radio" name="Q5F2" value="<?php echo set_value('Q5F2','N')?>" <?php if(isset($data['Q5F2'])) echo $data['Q5F2'] == 'N'?"checked":"" ?>>
        No </label>
      </div>
    </div>


   
    <?php
  } 
    ?>
    
  
  <?php
  if(isset($data['Q5F1']))
   if($data['Q5F1'] == 'Y')
   {
    ?>

    <div class="form-group" id="meals1">
     <label class="control-label">Please upload picture of Mid-day meal being served</label><br><br>
     <button class="btn uploadbtn upload" data-id="Mid Day Meal" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br><br>
   
   </div>
<br>
   <div class="form-group" id="meals11">
    <label  class="control-label"><span class="cube">2(a)</span>If yes, then midday meal is served under:</label>
    <div class="form-group">
	<ul>
	<li>
     <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1" value="<?php echo set_value('Q5F1S1',1)?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 1?"checked":"" ?>>
      Government Scheme 
    </label>
	</li>
	<li>
    <label class="radio-inline text-gray">
     <input type="radio" name="Q5F1S1" value="<?php echo set_value('Q5F1S1',2)?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 2?"checked":"" ?>>
     School’s personal initiative 
   </label>
   </li>
   <li>
   <label class="radio-inline text-gray">
     <input type="radio" name="Q5F1S1" value="<?php echo set_value('Q5F1S1',3)?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 3?"checked":"" ?>>
     Others 
   </label>
   </li>
   </ul>
 </div>
</div>

<?php
}
else
{
  ?>
  <div class="form-group" id="meals2">
    <label  class="control-label"><span class="cube">2(a)</span>Do students bring their own lunch from home?</label>
    <div class="form-group">
     <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1" onclick="MealsToggletwo(1)" value="<?php echo set_value('Q5F1S1','Y')?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 'Y'?"checked":"" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
       <input type="radio" name="Q5F1S1" onclick="MealsToggletwo(2)" value="<?php echo set_value('Q5F1S1','N')?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 'N'?"checked":"" ?>>
       No </label>
     </div>
   </div>
   <?php
 }
 ?>

 <div class="form-group" id="meals2" style="display: none;">
   <label  class="control-label"><span class="cube">2(a)</span>Do students bring their own lunch from home?</label>
   <div class="form-group">
    <label class="radio-inline text-gray">
     <input type="radio" id="Q5F1S11" name="Q5F1S1" onclick="MealsToggletwo(1)" value="<?php echo set_value('Q5F1S1','Y')?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 'Y'?"checked":"" ?>>
     Yes </label>
     <label class="radio-inline text-gray">
      <input type="radio" id="Q5F1S12" name="Q5F1S1" onclick="MealsToggletwo(2)" value="<?php echo set_value('Q5F1S1','N')?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 'N'?"checked":"" ?>>
      No </label>
    </div>
  </div>


  <div class="form-group" id="meals1" style="display:none">
   <label class="control-label">Please upload picture of Mid-day meal being served</label>
   <button class="btn uploadbtn upload" data-id="Mid Day Meal" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
     
 </div>

 <div class="form-group" id="meals11" style="display: none;">
  <label  class="control-label"><span class="cube">2(a)</span>If yes, then midday meal is served under:</label>
  <div class="form-group">
   <ul>
	<li>
     <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S1" value="<?php echo set_value('Q5F1S1',1)?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 1?"checked":"" ?>>
      Government Scheme 
    </label>
	</li>
	<li>
    <label class="radio-inline text-gray">
     <input type="radio" name="Q5F1S1" value="<?php echo set_value('Q5F1S1',2)?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 2?"checked":"" ?>>
     School’s personal initiative 
   </label>
   </li>
   <li>
   <label class="radio-inline text-gray">
     <input type="radio" name="Q5F1S1" value="<?php echo set_value('Q5F1S1',3)?>" <?php if(isset($data['Q5F1S1'])) echo $data['Q5F1S1'] == 3?"checked":"" ?>>
     Others 
   </label>
   </li>
   </ul>
</div>
</div>




<?php
if(isset($data['Q5F1S1']))
 if($data['Q5F1S1'] == 'Y')
 {
  ?>

  <div class="form-group" id="Q5F1SF">
   <label class="control-label">Please upload photographs of lunch boxes</label><br><br>
   <button class="btn uploadbtn upload" data-id="Lunch Boxes" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
     
 </div>
 <br>
 <div class="form-group" id="Q5F1S2">
   <label  class="control-label"><span class="cube">2(a)(1)</span>  How many students out of total student population bring home-made lunch? Q5F1S2
   </label>
   <br>
   <input type="number" name="Q5F1S2" class="form-control space-textbox" placeholder="<?php if(isset($data['Q5F1S2'])) echo $data['Q5F1S2'] ?>" value="<?php echo set_value('Q5F1S2'); ?>">
 </div>
 <br>
 <div class="form-group" id="Q5F1S3">
   <label  class="control-label"><span class="cube">2(a)(2)</span>Of the students who bring lunch from home, how many bring packaged food?</label>
   <br>
   <input type="number" name="Q5F1S3" class="form-control space-textbox" placeholder="<?php if(isset($data['Q5F1S3'])) echo $data['Q5F1S3'] ?>" value="<?php echo set_value('Q5F1S3'); ?>">
 </div>
 <br>
 <div class="form-group" id="Q5F1S4">
   <label  class="control-label"><span class="cube">2(a)(3)</span>Do teachers have the responsibility to ensure that students are carrying lunch from home?</label>
   <div class="form-group">
    <label class="radio-inline text-gray">
     <input type="radio" name="Q5F1S4" value="<?php echo set_value('Q5F1S4','Y')?>" <?php if(isset($data['Q5F1S4'])) echo $data['Q5F1S4'] == 'Y'?"checked":"" ?>>
     Yes </label>
     <label class="radio-inline text-gray">
      <input type="radio" name="Q5F1S4" value="<?php echo set_value('Q5F1S4','N')?>" <?php if(isset($data['Q5F1S4'])) echo $data['Q5F1S4'] == 'N'?"checked":"" ?>>
      No </label>
    </div>
  </div>

  <?php
}
?>

<div class="form-group" id="Q5F1SF" style="display: none;">
  <label class="control-label">Please upload photographs of lunch boxes</label>
  <button class="btn uploadbtn upload" data-id="Lunch Boxes" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
      
</div>
<br>
<div class="form-group" id="Q5F1S2" style="display: none;">
  <label  class="control-label"><span class="cube">2(a)(1)</span>  How many students out of total student population bring home-made lunch?
  </label>
  <br>
  <input type="number" name="Q5F1S2" class="form-control space-textbox" placeholder="<?php if(isset($data['Q5F1S2'])) echo $data['Q5F1S2'] ?>" value="<?php echo set_value('Q5F1S2'); ?>">
</div>
<br>
<div class="form-group" id="Q5F1S3" style="display: none;">
  <label  class="control-label"><span class="cube">2(a)(2)</span>Of the students who bring lunch from home, how many bring packaged food?</label>
  <br>
  <input type="number" name="Q5F1S3" class="form-control space-textbox" placeholder="<?php if(isset($data['Q5F1S3'])) echo $data['Q5F1S3'] ?>" value="<?php echo set_value('Q5F1S3'); ?>">
</div>
<br>
<div class="form-group" id="Q5F1S4" style="display: none;">
  <label  class="control-label"><span class="cube">2(a)(3)</span>Do teachers have the responsibility to ensure that students are carrying lunch from home?</label>
  <div class="form-group">
   <label class="radio-inline text-gray">
    <input type="radio" name="Q5F1S4" value="<?php echo set_value('Q5F1S4','Y')?>" <?php if(isset($data['Q5F1S4'])) echo $data['Q5F1S4'] == 'Y'?"checked":"" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
     <input type="radio" name="Q5F1S4" value="<?php echo set_value('Q5F1S4','N')?>" <?php if(isset($data['Q5F1S4'])) echo $data['Q5F1S4'] == 'N'?"checked":"" ?>>
     No </label>
   </div>
 </div>

 <?php
 if(isset($data['Q5F1']))
   if($data['Q5F1'] == 'Y')
   {

    ?>
    <div class="form-group" id="Q5F2">

      <?php
    } else {
     ?>
     <div class="form-group" id="Q5F2" style="display: none;">

       <?php } else {
         ?>
         <div class="form-group" id="Q5F2" style="display: none;">

           <?php } ?>
           <label class="control-label"><span class="cube">2(b)</span>What kind of food items are served in midday meal?</label>
           <div class="form-group">
            <label class="radio-inline text-gray col-xs-10" >1. Rice</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S1" value="<?php echo set_value('Q5F2S1','Y')?>" <?php if(isset($data['Q5F2S1'])) echo $data['Q5F2S1'] == 'Y'?"checked":"" ?>/>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S1" value="<?php echo set_value('Q5F2S1','N')?>" <?php if(isset($data['Q5F2S1'])) echo $data['Q5F2S1'] == 'N'?"checked":"" ?>>No 
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">2. Wheat</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S2" value="<?php echo set_value('Q5F2S2','Y')?>" <?php if(isset($data['Q5F2S2'])) echo $data['Q5F2S1'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S2" value="<?php echo set_value('Q5F2S2','N')?>" <?php if(isset($data['Q5F2S2'])) echo $data['Q5F2S2'] == 'N'?"checked":"" ?>>No 
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">3. Pulses/dal</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S3" value="<?php echo set_value('Q5F2S3','Y')?>" <?php if(isset($data['Q5F2S3'])) echo $data['Q5F2S3'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S3" value="<?php echo set_value('Q5F2S3','N')?>" <?php if(isset($data['Q5F2S3'])) echo $data['Q5F2S3'] == 'N'?"checked":"" ?>>No 
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">4. Vegetables</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S4" value="<?php echo set_value('Q5F2S4','Y')?>" <?php if(isset($data['Q5F2S4'])) echo $data['Q5F2S4'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S4" value="<?php echo set_value('Q5F2S4','N')?>" <?php if(isset($data['Q5F2S4'])) echo $data['Q5F2S4'] == 'N'?"checked":"" ?>>No 
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">5. Egg</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S5" value="<?php echo set_value('Q5F2S5','Y')?>" <?php if(isset($data['Q5F2S5'])) echo $data['Q5F2S5'] == 'Y'?"checked":"" ?>>Yes
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S5" value="<?php echo set_value('Q5F2S5','N')?>" <?php if(isset($data['Q5F2S5'])) echo $data['Q5F2S5'] == 'N'?"checked":"" ?>>No 
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">6. Porridge</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S6" value="<?php echo set_value('Q5F2S6','Y')?>" <?php if(isset($data['Q5F2S6'])) echo $data['Q5F2S6'] == 'Y'?"checked":"" ?>>Yes
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S6" value="<?php echo set_value('Q5F2S6','N')?>" <?php if(isset($data['Q5F2S6'])) echo $data['Q5F2S6'] == 'N'?"checked":"" ?>>No
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">7. Upma</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S7" value="<?php echo set_value('Q5F2S7','Y')?>" <?php if(isset($data['Q5F2S7'])) echo $data['Q5F2S7'] == 'Y'?"checked":"" ?>>Yes
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S7" value="<?php echo set_value('Q5F2S7','N')?>" <?php if(isset($data['Q5F2S7'])) echo $data['Q5F2S7'] == 'N'?"checked":"" ?>>No 
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">8. Khichdi</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S8" value="<?php echo set_value('Q5F2S8','Y')?>" <?php if(isset($data['Q5F2S8'])) echo $data['Q5F2S8'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S8" value="<?php echo set_value('Q5F2S8','N')?>" <?php if(isset($data['Q5F2S8'])) echo $data['Q5F2S8'] == 'N'?"checked":"" ?>>No
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">9. Curd/butter milk</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S9" value="<?php echo set_value('Q5F2S9','Y')?>" <?php if(isset($data['Q5F2S9'])) echo $data['Q5F2S9'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S9" value="<?php echo set_value('Q5F2S9','N')?>" <?php if(isset($data['Q5F2S9'])) echo $data['Q5F2S9'] == 'N'?"checked":"" ?>>No
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">10. Biscuits</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S10" value="<?php echo set_value('Q5F2S10','Y')?>" <?php if(isset($data['Q5F2S10'])) echo $data['Q5F2S10'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S10" value="<?php echo set_value('Q5F2S10','N')?>" <?php if(isset($data['Q5F2S10'])) echo $data['Q5F2S10'] == 'N'?"checked":"" ?>>No
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">11. Packaged chips</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S11" value="<?php echo set_value('Q5F2S11','Y')?>" <?php if(isset($data['Q5F2S11'])) echo $data['Q5F2S11'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S11" value="<?php echo set_value('Q5F2S11','N')?>" <?php if(isset($data['Q5F2S11'])) echo $data['Q5F2S11'] == 'N'?"checked":"" ?>>No
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">12. Bread butter</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S12" value="<?php echo set_value('Q5F2S12','Y')?>" <?php if(isset($data['Q5F2S12'])) echo $data['Q5F2S12'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S12" value="<?php echo set_value('Q5F2S12','N')?>" <?php if(isset($data['Q5F2S12'])) echo $data['Q5F2S12'] == 'N'?"checked":"" ?>>No
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">13. Bread butter</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S13" value="<?php echo set_value('Q5F2S13','Y')?>" <?php if(isset($data['Q5F2S13'])) echo $data['Q5F2S13'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S13" value="<?php echo set_value('Q5F2S13','N')?>" <?php if(isset($data['Q5F2S13'])) echo $data['Q5F2S13'] == 'N'?"checked":"" ?>>No
            </label>
          </div>
          <div class="form-group">
            <label class="radio-inline text-gray col-xs-10">14. Packaged juice</label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S14" value="<?php echo set_value('Q5F2S14','Y')?>" <?php if(isset($data['Q5F2S14'])) echo $data['Q5F2S14'] == 'Y'?"checked":"" ?>>Yes 
            </label>
            <label class="radio-inline text-gray">
              <input type="radio" name="Q5F2S14" value="<?php echo set_value('Q5F2S14','N')?>" <?php if(isset($data['Q5F2S14'])) echo $data['Q5F2S14'] == 'N'?"checked":"" ?>>No
            </label>
          </div>

        </div>
        <br>




        <div class="form-group">
          <label  class="control-label"><h6>Task 3: What kind of food is served/sold in your school </h6></label>
        </div>

        <?php
        if(isset($data['Q4F1']))
          if($data['Q4F1'] == 'Y')
          {
           ?>
           <div class="form-group" id="Q6F1">
            <?php } else {?>
            <div class="form-group" id="Q6F1" style="display: none;">
              <?php } 
              else {?>
              <div class="form-group" id="Q6F1" style="display: none;">
               <?php } ?>

               <label  class="control-label"><span class="cube">3</span>What kind of food is being served / sold in your school? <a class="tt" data-tooltip="For types and varieties of packaged food items, please mention each brand and flavor available in your school. For example, if Lay’s chips are available, mention if it is Baked, Herbs and onions, Original salted, Sunkissed tomatoes, American style cream and onion, etc. (Please note it is advisable not to have hawkers, vendors and shops selling ultra processed packaged items near the school.)"><span class="badge">?</span></a> </label>
               <div class="form-group row">
                <div class="col-xs-3">
                 <label >Packaged food items served / sold inside school campus</label>

               </div>
               <div class="col-xs-3">
                 <label > Please count all flavours/variants available in the school separately</label>
               </div>
               <div class="col-xs-3">
                 <label >Total no. of items sold, on an average, in a month</label>
               </div>
               <div class="col-xs-3">
                 <label >Month the food items were sold in</label>
               </div>
             </div>
             <!--div class="form-group row">
              <div class="col-xs-3">
               <label >Packaged food items served / sold inside school campus</label>

             </div>
             <div class="col-xs-3">
               <input class="form-control space-textbox" id="ex2" type="number" name="Q6F1S1" placeholder="<?php if(isset($data['Q6F1S1'])) echo $data['Q6F1S1'] ?>" value="<?php echo set_value('Q6F1S2'); ?>"/>
             </div>
             <div class="col-xs-3">
               <input class="form-control space-textbox" id="ex3" type="number" name="Q6F1S2" placeholder="<?php if(isset($data['Q6F1S2'])) echo $data['Q6F1S2'] ?>" value="<?php echo set_value('Q6F1S3'); ?>" />
             </div>
             <div class="col-xs-3">
               <input class="form-control space-textbox" id="ex3" type="text" name="Q6F1S3" placeholder="<?php if(isset($data['Q6F1S3'])) echo $data['Q6F1S3'] ?>" value="<?php echo set_value('Q6F1S4'); ?>"/>
             </div>
           </div-->
           <div class="form-group row">
            <div class="col-xs-3"> Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc </div>
            <div class="col-xs-3">
             <input class="form-control space-textbox" id="ex1" type="number" name="Q6F2S1" placeholder="<?php if(isset($data['Q6F2S1'])) echo $data['Q6F2S1'] ?>" value="<?php echo set_value('Q6F2S1'); ?>"/>
           </div>
           <div class="col-xs-3">
             <input class="form-control space-textbox" id="ex2" type="number" name="Q6F2S2" placeholder="<?php if(isset($data['Q6F2S2'])) echo $data['Q6F2S2'] ?>" value="<?php echo set_value('Q6F2S2'); ?>" />
           </div>
           <div class="col-xs-3">
             <input class="form-control space-textbox" id="ex3" type="text" name="Q6F2S3" placeholder="<?php if(isset($data['Q6F2S3'])) echo $data['Q6F2S3'] ?>" value="<?php echo set_value('Q6F2S3'); ?>"/>
           </div>
         </div>
         <div class="form-group row">
          <div class="col-xs-3"> Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee, Foodles, Maggi, etc </div>
          <div class="col-xs-3">
           <input class="form-control space-textbox" id="ex1" type="number" name="Q6F3S1" placeholder="<?php if(isset($data['Q6F3S1'])) echo $data['Q6F3S1'] ?>" value="<?php echo set_value('Q6F3S3'); ?>"/>
         </div>
         <div class="col-xs-3">
           <input class="form-control space-textbox" id="ex2" type="number" name="Q6F3S2" placeholder="<?php if(isset($data['Q6F3S2'])) echo $data['Q6F3S2'] ?>" value="<?php echo set_value('Q6F3S2'); ?>" />
         </div>
         <div class="col-xs-3">
           <input class="form-control space-textbox" id="ex3" type="text" name="Q6F3S3" placeholder="<?php if(isset($data['Q6F3S3'])) echo $data['Q6F3S3'] ?>" value="<?php echo set_value('Q6F3S3'); ?>"/>
         </div>
       </div>
       <div class="form-group row">
         <div class="col-xs-3"> Potato fries and burgers </div>
         <div class="col-xs-3">
          <input class="form-control space-textbox" id="ex1" type="number" name="Q6F4S1" placeholder="<?php if(isset($data['Q6F4S1'])) echo $data['Q6F4S1'] ?>" value="<?php echo set_value('Q6F4S1'); ?>"/>
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="ex2" type="number" name="Q6F4S2" placeholder="<?php if(isset($data['Q6F4S2'])) echo $data['Q6F4S2'] ?>" value="<?php echo set_value('Q6F4S2'); ?>" />
        </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="ex3" type="text" name="Q6F4S3" placeholder="<?php if(isset($data['Q6F4S3'])) echo $data['Q6F4S3'] ?>" value="<?php echo set_value('Q6F4S3'); ?>"/>
        </div>
      </div>
      <div class="form-group row">
       <div class="col-xs-3"> Confectionery items (chocolate, candies, gums) </div>
       <div class="col-xs-3">
        <input class="form-control space-textbox" id="ex1" type="number" name="Q6F5S1" placeholder="<?php if(isset($data['Q6F5S1'])) echo $data['Q6F5S1'] ?>" value="<?php echo set_value('Q6F5S1'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="ex2" type="number" name="Q6F5S2" placeholder="<?php if(isset($data['Q6F5S2'])) echo $data['Q6F5S2'] ?>" value="<?php echo set_value('Q6F5S2'); ?>"/>
      </div>
      <div class="col-xs-3">
        <input class="form-control space-textbox" id="ex3" type="text" name="Q6F5S3" placeholder="<?php if(isset($data['Q6F5S3'])) echo $data['Q6F5S3'] ?>" value="<?php echo set_value('Q6F5S3'); ?>"/>
      </div>
    </div>
    <div class="form-group row">
     <div class="col-xs-3"> Ice cream </div>
     <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="number" name="Q6F6S1" placeholder="<?php if(isset($data['Q6F6S1'])) echo $data['Q6F6S1'] ?>" value="<?php echo set_value('Q6F6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="number" name="Q6F6S2" placeholder="<?php if(isset($data['Q6F6S2'])) echo $data['Q6F6S2'] ?>" value="<?php echo set_value('Q6F6S2'); ?>" />
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q6F6S3" placeholder="<?php if(isset($data['Q6F6S3'])) echo $data['Q6F6S3'] ?>" value="<?php echo set_value('Q6F6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
   <div class="col-xs-3"> Carbonated beverages </div>
   <div class="col-xs-3">
    <input class="form-control space-textbox" id="ex1" type="number" name="Q6F7S1" placeholder="<?php if(isset($data['Q6F7S1'])) echo $data['Q6F7S1'] ?>" value="<?php echo set_value('Q6F7S1'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="ex2" type="number" name="Q6F7S2" placeholder="<?php if(isset($data['Q6F7S2'])) echo $data['Q6F7S2'] ?>" value="<?php echo set_value('Q6F7S2'); ?>" />
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="ex3" type="text" name="Q6F7S3" placeholder="<?php if(isset($data['Q6F7S3'])) echo $data['Q6F7S3'] ?>" value="<?php echo set_value('Q6F7S3'); ?>"/>
  </div>
</div>
<div class="form-group row">
 <div class="col-xs-3"> Sugar sweetened non-carbonated beverages </div>
 <div class="col-xs-3">
  <input class="form-control space-textbox" id="ex1" type="number" name="Q6F7S1" placeholder="<?php if(isset($data['Q6F7S1'])) echo $data['Q6F7S1'] ?>" value="<?php echo set_value('Q6F7S1'); ?>"/>
</div>
<div class="col-xs-3">
  <input class="form-control space-textbox" id="ex2" type="number" name="Q6F7S2" placeholder="<?php if(isset($data['Q6F7S2'])) echo $data['Q6F7S2'] ?>" value="<?php echo set_value('Q6F7S2'); ?>" />
</div>
<div class="col-xs-3">
  <input class="form-control space-textbox" id="ex3" type="text" name="Q6F7S3" placeholder="<?php if(isset($data['Q6F7S3'])) echo $data['Q6F7S3'] ?>" value="<?php echo set_value('Q6F7S3'); ?>"/>
</div>
</div>
<div class="form-group row">
 <div class="col-xs-3"> Packaged/bottled nimboo paani/lassi/flavoured milk </div>
 <div class="col-xs-3">
  <input class="form-control space-textbox" id="ex1" type="number" name="Q6F8S1" placeholder="<?php if(isset($data['Q6F8S1'])) echo $data['Q6F8S1'] ?>" value="<?php echo set_value('Q6F8S1'); ?>"/>
</div>
<div class="col-xs-3">
  <input class="form-control space-textbox" id="ex2" type="number" name="Q6F8S2" placeholder="<?php if(isset($data['Q6F8S2'])) echo $data['Q6F8S2'] ?>" value="<?php echo set_value('Q6F8S2'); ?>" />
</div>
<div class="col-xs-3">
  <input class="form-control space-textbox" id="ex3" type="text" name="Q6F8S3" placeholder="<?php if(isset($data['Q6F8S3'])) echo $data['Q6F8S3'] ?>" value="<?php echo set_value('Q6F8S3'); ?>"/>
</div>
</div>
<div class="form-group row">
 <div class="col-xs-3"> Packaged/bottled energy drinks </div>
 <div class="col-xs-3">
  <input class="form-control space-textbox" id="ex1" type="number" name="Q6F10S1" placeholder="<?php if(isset($data['Q6F10S1'])) echo $data['Q6F10S1'] ?>" value="<?php echo set_value('Q6F10S1'); ?>"/>
</div>
<div class="col-xs-3">
  <input class="form-control space-textbox" id="ex2" type="number" name="Q6F10S2" placeholder="<?php if(isset($data['Q6F10S2'])) echo $data['Q6F10S2'] ?>" value="<?php echo set_value('Q6F10S2'); ?>" />
</div>
<div class="col-xs-3">
  <input class="form-control space-textbox" id="ex3" type="text" name="Q6F10S3" placeholder="<?php if(isset($data['Q6F10S3'])) echo $data['Q6F10S3'] ?>" value="<?php echo set_value('Q6F10S3'); ?>"/>
</div>
</div>
</div>


<?php
if(isset($data['Q4F1']))
  if($data['Q4F1'] == 'Y')
  {
   ?>
   <div class="form-group" id="Q7F1">
    <?php } else {?>
    <div class="form-group" id="Q7F1" style="display: none;">
      <?php } else {?>
      <div class="form-group" id="Q7F1" style="display: none;">
        <?php } ?>

        <label  class="control-label"><span class="cube">4</span>Does your school serve traditional Indian snacks?<a class="tt" data-tooltip="Traditional Indian snacks are any food item prepared within the school on the same day for immediate consumption. Monitor over a period of a month."><span class="badge">?</span></a></label>
        <div class="form-group">
          <label class="radio-inline text-gray">
            <input type="radio" name="Q7F1" onclick="ComputeTraditionalFood(1)" value="<?php echo set_value('Q7F1','Y')?>" <?php if(isset($data['Q7F1'])) echo $data['Q7F1'] == 'Y'?"checked":"" ?>/>Yes </label>
            <label class="radio-inline text-gray">
              <input type="radio" id="Q7F1_2" name="Q7F1" onclick="ComputeTraditionalFood(2)" value="<?php echo set_value('Q7F1','N')?>" <?php if(isset($data['Q7F1'])) echo $data['Q7F1'] == 'N'?"checked":"" ?>/>No </label>
            </div>
          </div>
          <?php
          if(isset($data['Q4F1']))
            if($data['Q4F1'] == 'Y')

              if(isset($data['Q7F1']))
               if($data['Q7F1'] == 'Y')
               {
                ?>
                <div class="form-group" id="traditional">
                 <label  class="control-label"><span class="cube">4(a)</span>Please provide the details:<a class="tt" data-tooltip="If space is limited, please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section."> <span class="badge">?</span> </a></label>
                 <div class="form-group row">
                   <div class="col-xs-3">
                     <label >Traditional Indian snacks</label>
                   </div>
                   <div class="col-xs-5">
                     <label >Number of servings sold when on the menu</label>
                   </div>
                 </div>
                 <div class="form-group row">
                   <div class="col-xs-3">
                     <label >Samosas</label>
                   </div>
                   <div class="col-xs-5">
                     <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S1" placeholder="<?php if(isset($data['Q7F1S1'])) echo $data['Q7F1S1'] ?>" value="<?php echo set_value('Q7F1S1'); ?>"/>
                   </div>
                 </div>
                 <div class="form-group row">
                   <div class="col-xs-3">
                     <label >Idli/vada and sambhar</label>
                   </div>
                   <div class="col-xs-5">
                     <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S2" placeholder="<?php if(isset($data['Q7F1S2'])) echo $data['Q7F1S2'] ?>" value="<?php echo set_value('Q7F1S2'); ?>"/>
                   </div>
                 </div>
                 <div class="form-group row">
                  <div class="col-xs-3">
                   <label >Pav bhaji</label>
                 </div>
                 <div class="col-xs-5">
                   <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S3" placeholder="<?php if(isset($data['Q7F1S3'])) echo $data['Q7F1S3'] ?>" value="<?php echo set_value('Q7F1S3'); ?>"/>
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-xs-3">
                   <label >Momos</label>
                 </div>
                 <div class="col-xs-5">
                   <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S4" placeholder="<?php if(isset($data['Q7F1S4'])) echo $data['Q7F1S4'] ?>" value="<?php echo set_value('Q7F1S4'); ?>"/>
                 </div>
               </div>
               <div class="form-group row">
                 <div class="col-xs-3">
                   <label >Others</label>
                 </div>
                 <div class="col-xs-5">
                   <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S5" placeholder="<?php if(isset($data['Q7F1S5'])) echo $data['Q7F1S5'] ?>" value="<?php echo set_value('Q7F1S5'); ?>"/>
                 </div>
               </div>


             </div>
             <div class="form-group" id="Q7F2S1" >
                  <label class="control-label">Please upload picture of traditional food items sold in canteen</label>
				  <br/>
                  <button class="btn uploadbtn upload" data-id="Canteen Food Items" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
				  <br>
             </div>
			 
            <div class="form-group" id="Q7F3S1">
              <label class="control-label"><span class="cube">4(b)</span>Give descriptions for rare local snacks served in your school:</label>
              <textarea type="textbox" rows="5"  name="Q7F3S1" placeholder="<?php if(isset($data['Q7F3S1'])) echo $data['Q7F3S1'] ?>" value="<?php echo set_value('Q7F3S1'); ?>"></textarea>  <br>
            </div>
            <?php
          }
          ?>

          <div class="form-group" id="traditional" style="display: none;">
            <label  class="control-label"><span class="cube">4(a)</span>Please provide the details: <a class="tt" data-tooltip="If space is limited, please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section."> <span class="badge">?</span> </a></label>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Traditional Indian snacks</label>
              </div>
              <div class="col-xs-5">
                <label >Number of servings sold when on the menu</label>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Samosas</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S1" placeholder="<?php if(isset($data['Q7F1S1'])) echo $data['Q7F1S1'] ?>" value="<?php echo set_value('Q7F1S1'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Idli/vada and sambhar</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S2" placeholder="<?php if(isset($data['Q7F1S2'])) echo $data['Q7F1S2'] ?>" value="<?php echo set_value('Q7F1S2'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Pav bhaji</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S3" placeholder="<?php if(isset($data['Q7F1S3'])) echo $data['Q7F1S3'] ?>" value="<?php echo set_value('Q7F1S3'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Momos</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S4" placeholder="<?php if(isset($data['Q7F1S4'])) echo $data['Q7F1S4'] ?>" value="<?php echo set_value('Q7F1S4'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Others</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="ex2" type="number" name="Q7F1S5" placeholder="<?php if(isset($data['Q7F1S5'])) echo $data['Q7F1S5'] ?>" value="<?php echo set_value('Q7F1S5'); ?>"/>
              </div>
            </div>


          </div>
		  <div class="form-group" id="Q7F2S1" style="display: none;">
                  <label class="control-label">Please upload picture of traditional food items sold in canteen</label>
				  <br/>
                  <button class="btn uploadbtn upload" data-id="Traditional Food Items In Canteen" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
				 <br>
           </div>
          
          <div class="form-group" id="Q7F3S1" style="display: none;">
            <label class="control-label"><span class="cube">4(b)</span>Give descriptions for rare local snacks served in your school:</label>
            <textarea type="text" rows="5"  name="Q7F3S1" placeholder="<?php if(isset($data['Q7F3S1'])) echo $data['Q7F3S1'] ?>" value="<?php echo set_value('Q7F3S1'); ?>"></textarea>  <br>
          </div>



          <?php
          if(isset($data['Q4F1']))
            if($data['Q4F1'] == 'Y')
            {
              ?>
              <div class="form-group" id="Q8F1">
                <?php } else {?>
                <div class="form-group" id="Q8F1" style="display: none;">

                  <?php }else {?>
                  <div class="form-group" id="Q8F1" style="display: none;">

                    <?php }?>
                    <label  class="control-label"><span class="cube">5</span>Does your school serve traditional Indian beverages?<a class="tt" data-tooltip="Traditional Indian beverages are any drink items prepared within the school on the same day for immediate consumption. Monitor over a period of a month."><span class="badge">?</span></a></label>
                    <div class="form-group">
                     <label class="radio-inline text-gray">
                      <input type="radio" name="Q8F1" onclick="ComputeBeverages(1)" value="<?php echo set_value('Q8F1','Y')?>" <?php if(isset($data['Q8F1'])) echo $data['Q8F1'] == 'Y'?"checked":"" ?>>
                      Yes </label>
                      <label class="radio-inline text-gray">
                       <input type="radio" id="Q8F1_2" name="Q8F1" onclick="ComputeBeverages(2)" value="<?php echo set_value('Q8F1','N')?>" <?php if(isset($data['Q8F1'])) echo $data['Q8F1'] == 'N'?"checked":"" ?>/>
                       No </label>
                     </div>
                   </div>
                   <?php
                   if(isset($data['Q4F1']))
                    if($data['Q4F1'] == 'Y')

                     if(isset($data['Q8F1']))
                       if($data['Q8F1'] == 'Y')
                       {
                         ?>
                         <div class="form-group" id="beverages">
                          <label  class="control-label"><span class="cube">5(a)</span>Please provide details:<a class="tt" data-tooltip="If space is limited, please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section." href="#"><span class="badge">?</span></a></label>
                          <div class="form-group row">
                            <div class="col-xs-3">
                              <label >Traditional Indian beverages</label>
                            </div>
                            <div class="col-xs-5">
                              <label >Number of servings sold when on the menu</label>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-xs-3">
                              <label >Nimboo Pani</label>
                            </div>
                            <div class="col-xs-5">
                              <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S1" placeholder="<?php if(isset($data['Q8F1S1'])) echo $data['Q8F1S1'] ?>" value="<?php echo set_value('Q8F1S1'); ?>"/>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-xs-3">
                              <label >Sweet Lassi</label>
                            </div>
                            <div class="col-xs-5">
                              <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S2" placeholder="<?php if(isset($data['Q8F1S2'])) echo $data['Q8F1S2'] ?>" value="<?php echo set_value('Q8F1S2'); ?>"/>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-xs-3">
                              <label >Salted Butter Milk</label>
                            </div>
                            <div class="col-xs-5">
                              <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S3" placeholder="<?php if(isset($data['Q8F1S3'])) echo $data['Q8F1S3'] ?>" value="<?php echo set_value('Q8F1S3'); ?>"/>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-xs-3">
                              <label >Aam Panna</label>
                            </div>
                            <div class="col-xs-5">
                              <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S4" placeholder="<?php if(isset($data['Q8F1S4'])) echo $data['Q8F1S4'] ?>" value="<?php echo set_value('Q8F1S4'); ?>"/>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="col-xs-3">
                              <label >Others</label>
                            </div>
                            <div class="col-xs-5">
                              <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S5" placeholder="<?php if(isset($data['Q8F1S5'])) echo $data['Q8F1S5'] ?>" value="<?php echo set_value('Q8F1S5'); ?>"/>
                            </div>
                          </div>


                        </div>
                        <?php
                      }
                      ?>

                      <div class="form-group" id="beverages" style="display: none;">
                        <label  class="control-label"><span class="cube">5(a)</span>Please provide details: <a class="tt" data-tooltip="If space is limited, please create the table in a word document and upload as attachment. Option to upload has been provided at the end of the section." href="#"><span class="badge">?</span></a></label>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label >Traditional Indian beverages</label>
                          </div>
                          <div class="col-xs-5">
                            <label >Number of servings sold when on the menu</label>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label >Nimboo Pani</label>
                          </div>
                          <div class="col-xs-5">
                            <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S1" placeholder="<?php if(isset($data['Q8F1S1'])) echo $data['Q8F1S1'] ?>" value="<?php echo set_value('Q8F1S1'); ?>"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label >Sweet Lassi</label>
                          </div>
                          <div class="col-xs-5">
                            <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S2" placeholder="<?php if(isset($data['Q8F1S2'])) echo $data['Q8F1S2'] ?>" value="<?php echo set_value('Q8F1S2'); ?>"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label >Salted Butter Milk</label>
                          </div>
                          <div class="col-xs-5">
                            <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S3" placeholder="<?php if(isset($data['Q8F1S3'])) echo $data['Q8F1S3'] ?>" value="<?php echo set_value('Q8F1S3'); ?>"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label >Aam Panna</label>
                          </div>
                          <div class="col-xs-5">
                            <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S4" placeholder="<?php if(isset($data['Q8F1S4'])) echo $data['Q8F1S4'] ?>" value="<?php echo set_value('Q8F1S4'); ?>"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-xs-3">
                            <label >Others</label>
                          </div>
                          <div class="col-xs-5">
                            <input class="form-control space-textbox" id="ex2" type="number" name="Q8F1S5" placeholder="<?php if(isset($data['Q8F1S5'])) echo $data['Q8F1S5'] ?>" value="<?php echo set_value('Q8F1S5'); ?>"/>
                          </div>
                        </div>


                      </div>



                      <div class="form-group">
                        <label><h6>Task 4: What kind of food does your school promote?</h6></label>
                      </div>
                      <div class="form-group">
                        <label  class="control-label"><span class="cube">6</span> Does the school distribute packaged food items as rewards during schools events?</label>
                        <div class="form-group">
                         <label class="radio-inline text-gray">
                          <input type="radio" name="Q9F1" onclick="ComputePackaged(1)" value="<?php echo set_value('Q9F1','Y')?>" <?php if(isset($data['Q9F1'])) echo $data['Q9F1'] == 'Y'?"checked":"" ?>>
                          Yes </label>
                          <label class="radio-inline text-gray">
                           <input type="radio" name="Q9F1" onclick="ComputePackaged(2)"  value="<?php echo set_value('Q9F1','N')?>" <?php if(isset($data['Q9F1'])) echo $data['Q9F1'] == 'N'?"checked":"" ?>/>
                           No </label>
                         </div>
                       </div>
                       <?php
                       if(isset($data['Q9F1']))
                         if($data['Q9F1'] == 'Y')
                         {
                           ?>
                           <div class="form-group" id="Q9F2">
                            <label class="control-label"><span class="cube">6(a)</span>Give descriptions for rare local snacks served in your school:<a class="tt" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" href="#"><span class="badge">?</span></a></label>
                            <textarea type="text" rows="5"  name="Q9F2" placeholder="<?php if(isset($data['Q9F2'])) echo $data['Q9F2'] ?>" value="<?php echo set_value('Q9F2'); ?>"></textarea>  <br>
                          </div>

                          <?php
                        }
                        ?>

                        <div class="form-group" id="Q9F2" style="display: none;">
                          <label class="control-label"><span class="cube">6(a)</span>Give descriptions for rare local snacks served in your school: <a class="tt" data-tooltip="For example, Kitkat chocolate as consolation prize or food/discount coupons of Dominos/Pizza Hut" href="#"><span class="badge">?</span></a></label>
                          <textarea type="text" rows="5"  name="Q9F2" placeholder="<?php if(isset($data['Q9F2'])) echo $data['Q9F2'] ?>" value="<?php echo set_value('Q9F2'); ?>"></textarea>  <br>
                        </div>



                        <div class="form-group">
                         <label  class="control-label"><span class="cube">7</span>Does the school distribute chocolates/similar products as refreshments during schools events?</label>
                         <div class="form-group">
                          <label class="radio-inline text-gray">
                           <input type="radio" name="Q10F1" onclick="ComputeChocolates(1)" value="<?php echo set_value('Q10F1','Y')?>" <?php if(isset($data['Q10F1'])) echo $data['Q10F1'] == 'Y'?"checked":"" ?>>
                           Yes </label>
                           <label class="radio-inline text-gray">
                            <input type="radio" name="Q10F1" onclick="ComputeChocolates(2)" value="<?php echo set_value('Q10F1','N')?>" <?php if(isset($data['Q10F1'])) echo $data['Q10F1'] == 'N'?"checked":"" ?>/>
                            No </label>
                          </div>
                        </div>
                        <?php
                        if(isset($data['Q10F1']))
                         if($data['Q10F1'] == 'Y')
                         {
                           ?>
                           <div class="form-group" id="Q10F2">
                            <label class="control-label"><span class="cube">7(a)</span>Please provide the names:</label>
                            <textarea type="text" rows="5"  name="Q10F2" placeholder="<?php if(isset($data['Q10F2'])) echo $data['Q10F2'] ?>" value="<?php echo set_value('Q10F2'); ?>"></textarea>  <br>
                          </div>

                          <?php
                        }
                        ?>

                        <div class="form-group" id="Q10F2" style="display: none;">
                          <label class="control-label"><span class="cube">7(a)</span>Please provide the names:</label>
                          <textarea type="text" rows="5"  name="Q10F2" placeholder="<?php if(isset($data['Q10F2'])) echo $data['Q10F2'] ?>" value="<?php echo set_value('Q10F2'); ?>"></textarea>  <br>
                        </div>


                        <div class="form-group">
                          <label  class="control-label"><span class="cube">8</span>Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</label>
                          <div class="form-group">
                           <label class="radio-inline text-gray">
                            <input type="radio" name="Q11F1" onclick="ComputeBanners(1)" value="<?php echo set_value('Q11F1','Y')?>" <?php if(isset($data['Q11F1'])) echo $data['Q11F1'] == 'Y'?"checked":"" ?>>
                            Yes </label>
                            <label class="radio-inline text-gray">
                             <input type="radio" name="Q11F1" onclick="ComputeBanners(2)" value="<?php echo set_value('Q11F1','N')?>" <?php if(isset($data['Q11F1'])) echo $data['Q11F1'] == 'N'?"checked":"" ?>/I>
                             No </label>
                           </div>
                         </div>

                         <?php
                         if(isset($data['Q11F1']))
                           if($data['Q11F1'] == 'Y')
                           {
                             ?>
                             <div class="form-group" id="Q11F2">
                              <label class="control-label"><span class="cube">8(a)</span> Please provide the names of sponsors:<a class="tt" data-tooltip="For example Complan, Quaker Oats, Cadbury, etc." href="#"><span class="badge">?</span></a></label>
                              <textarea type="text" rows="5"  name="Q11F2" placeholder="<?php if(isset($data['Q11F2'])) echo $data['Q11F2'] ?>" value="<?php echo set_value('Q11F2'); ?>"></textarea>  <br>
                            </div>
                            <div class="form-group" id="Q11F3">
                              <label  class="control-label"><span class="cube">8(b)</span>Are their banners, brochures, hoardings, stalls etc. put up during the events?</label>
                              <div class="form-group">
                                <label class="radio-inline text-gray">
                                 <input type="radio" name="Q11F3" value="<?php echo set_value('Q11F3','Y')?>" <?php if(isset($data['Q11F3'])) echo $data['Q11F3'] == 'Y'?"checked":"" ?>>
                                 Yes </label>
                                 <label class="radio-inline text-gray">
                                  <input type="radio" name="Q11F3" value="<?php echo set_value('Q11F3','N')?>" <?php if(isset($data['Q11F3'])) echo $data['Q11F3'] == 'N'?"checked":"" ?>/I>
                                  No </label>
                                </div>
                              </div>
                              <?php
                            }
                            ?>
                            <div class="form-group" id="Q11F2" style="display: none;">
                              <label class="control-label"><span class="cube">8(a)</span> Please provide the names of sponsors: <a class="tt" data-tooltip="For example Complan, Quaker Oats, Cadbury, etc." href="#"><span class="badge">?</span></a></label>
                              <textarea type="text" rows="5"  name="Q11F2" placeholder="<?php if(isset($data['Q11F2'])) echo $data['Q11F2'] ?>" value="<?php echo set_value('Q11F2'); ?>"></textarea>  <br>
                            </div>
                            <div class="form-group" id="Q11F3" style="display: none;">
                              <label  class="control-label"><span class="cube">8(b)</span>Are their banners, brochures, hoardings, stalls etc. put up during the events?</label>
                              <div class="form-group">
                                <label class="radio-inline text-gray">
                                 <input type="radio" name="Q11F3" value="<?php echo set_value('Q11F3','Y')?>" <?php if(isset($data['Q11F3'])) echo $data['Q11F3'] == 'Y'?"checked":"" ?>>
                                 Yes </label>
                                 <label class="radio-inline text-gray">
                                  <input type="radio" name="Q11F3" value="<?php echo set_value('Q11F3','N')?>" <?php if(isset($data['Q11F3'])) echo $data['Q11F3'] == 'N'?"checked":"" ?>/I>
                                  No </label>
                                </div>
                              </div>





                              <div class="form-group">
                      <label>Please upload pictures of your Audit Team doing the survey</label>
                      <br>
                      Please upload all supporting documents related to this section here. Note: files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed 500 KB.<br/>
                    <button class="btn uploadbtn upload" data-id="Audit Team doing Survey" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
					</div>

                              <br>
                              <div class="form-group">
                                <label><h6>Task 5: School Initiatives?</h6></label>
                              </div>
                              <div class="form-group">
                                <label  class="control-label"><span class="cube">9</span>How regularly is height and weight of the students measured?</label>
                                <div class="form-group">
                                 <label class="radio-inline text-gray">
                                  <input type="radio" name="Q12F1" onclick="Measure(1)" value="<?php echo set_value('Q12F1','Y')?>" <?php if(isset($data['Q12F1'])) echo $data['Q12F1'] == 'Y'?"checked":"" ?>>
                                  Yes </label>
                                  <label class="radio-inline text-gray">
                                   <input type="radio" name="Q12F1" onclick="Measure(2)" value="<?php echo set_value('Q12F1','N')?>" <?php if(isset($data['Q12F1'])) echo $data['Q12F1'] == 'N'?"checked":"" ?>/>
                                   No </label>
                                 </div>
                               </div>
                               <div class="form-group" id="Q12F2"
                               <?php
                               if(isset($data['Q12F1']))
                                 { if($data['Q12F1'] == 'N')
                               {
                                echo 'style="display:none;"';
                              } 
                              else
                              {
                                echo 'style="display:block;"';
                              }
                            }
							else{
		                        echo 'style="display:none;"';
							}
                            ?> >
                            <label  class="control-label"><span class="cube">9(a)</span>Does your school measure height and weight of all the students?</label>
                            <div class="form-group">
								<ul><li>
                             <label class="radio-inline text-gray">
                              <input type="radio" name="Q12F2" value="<?php echo set_value('Q12F2',1)?>" <?php if(isset($data['Q12F2'])) echo $data['Q12F2'] == 'Y'?"checked":"" ?>>
                              Monthly 
                            </label></li><li>
                            <label class="radio-inline text-gray">
                             <input type="radio" name="Q12F2" value="<?php echo set_value('Q12F2',2)?>" <?php if(isset($data['Q12F2'])) echo $data['Q12F2'] == 'N'?"checked":"" ?>/I>
                             Quarterly 
                           </label></li><li>
                           <label class="radio-inline text-gray">
                             <input type="radio" name="Q12F2" value="<?php echo set_value('Q12F2',3)?>" <?php if(isset($data['Q12F2'])) echo $data['Q12F2'] == 'N'?"checked":"" ?>/I>
                             Bi-annually </label></li><li>
                             <label class="radio-inline text-gray">
                               <input type="radio" name="Q12F2" value="<?php echo set_value('Q12F2',4)?>" <?php if(isset($data['Q12F2'])) echo $data['Q12F2'] == 'N'?"checked":"" ?>/I>
                               Annually 
                             </label></li>
							 </ul>
                           </div>

                         </div>


                         <div class="form-group">
                          <label  class="control-label"><span class="cube">10</span>Is cooking part of any regular subjects or extracurricular activities?</label>
                          <div class="form-group">
                           <label class="radio-inline text-gray">
                            <input type="radio" name="Q13F1" onclick="ExtraCurricular(1)" value="<?php echo set_value('Q13F1','Y')?>" <?php if(isset($data['Q13F1'])) echo $data['Q13F1'] == 'Y'?"checked":"" ?>>
                            Yes </label>
                            <label class="radio-inline text-gray">
                             <input type="radio" name="Q13F1" onclick="ExtraCurricular(2)" value="<?php echo set_value('Q13F1','N')?>" <?php if(isset($data['Q13F1'])) echo $data['Q13F1'] == 'N'?"checked":"" ?>/I>
                             No </label>
                           </div>
                         </div>


                         <div class="form-group" id="Q13F2" 
                         <?php
                         if(isset($data['Q13F1']))
                         { 
                          if($data['Q13F1'] == 'N')
                          {
                            echo 'style="display:none;"';
                          } 
                          else
                          {
                            echo 'style="display:block"';
                          }
                        }
						else
							echo 'style="display:none;"';
                        ?>
                        >
                        <div class="clearfix">&nbsp;</div>
                      <label for="username" class="control-label"><span class="cube">10(a)</span>If yes, please share the details</label>
                      <div class="form-group">
                        <label class="control-label">Please upload pictures of your Audit Team doing the survey</label>
                        <br>
                        <br>
                        Please upload all supporting documents related to this section here. Note: files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed 500 KB.<br>
						<div class="clearfix">&nbsp;</div>
                        <button class="btn uploadbtn upload" data-id="Audit Team Doing Servey" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
						<br>
                      </div>
                    </div>

                      <div class="text-center">
					 <button type="submit" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button">Previous</button>
					 <button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button">Next</button>
                     <input type="submit" value="Save and Resume Later" class="org-btn"/></div>
                      <?php echo form_close(); ?> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
    <?php $this->load->view('footer');?>
	<style type="text/css">
.text-gray{
   color: #666666!important;
   font-weight:100!important;
}
</style>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
	  <iframe width="100%" height="330px" src="https://www.youtube.com/embed/9r3Lwrd9BUs" frameborder="0" allowfullscreen></iframe>
	  
    </div>
  </div>
</div>

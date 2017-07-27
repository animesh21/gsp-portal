<?php $this->load->view('admin/survey/header');?>

<div class="container">
        <div class="row">
            <h2>WASTE</h2>
            <p >
                Schools can provide excellent educational opportunities for creating awareness about waste and its management.<br>

Waste reduction initiatives save natural resources, energy and landfill space.<br>
Reducing, reusing, recycling waste material will improve the economic and environmental performance of the school.<br>
The school's waste management programme has the potential to transform the school environment into a laboratory for learning.<br>
It also provides numerous opportunities for the students to understand this issue and its implications on the local environment.<br>
               <br><b> The unit of measurement to be used in the Waste section is Kilogram (kg).</b>
            </p>
        
        
        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                   	
                                        <label for="username" class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
                                           <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" placeholder="<?php echo $data['Q1A1S1']; ?>" value="<?php echo set_value('Q1A1S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Email</label>
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q1A1S2'])) echo $data['Q1A1S2']; ?>" value="<?php echo set_value('Q1A1S2'); ?>"/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q1A2S1'])) echo $data['Q1A2S1'] ?>" value="<?php echo set_value('Q1A2S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q1A2S2'])) echo $data['Q1A2S2'] ?>" value="<?php echo set_value('Q1A2S2'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q1A3S1'])) echo $data['Q1A3S1'] ?>" value="<?php echo set_value('Q1A3S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q1A3S2'])) echo $data['Q1A3S2'] ?>" value="<?php echo set_value('Q1A3S2'); ?>"/>
                                                </div>
                                            </div>
                                           
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
                                        <div class="row">
                                                <div class="col-xs-6 form-group">
                                                    <label>Name</label>
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A1S1'])) echo $data['Q2A1S1'] ?>" value="<?php echo set_value('Q2A1S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <label>Email Id</label>
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A1S2'])) echo $data['Q2A1S2'] ?>" value="<?php echo set_value('Q2A1S2'); ?>"/>
                                                </div>
                                                
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A2S1'])) echo $data['Q2A2S1'] ?>" value="<?php echo set_value('Q2A2S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A2S2'])) echo $data['Q2A2S2'] ?>" value="<?php echo set_value('Q2A2S2'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A3S1'])) echo $data['Q2A3S1'] ?>" value="<?php echo set_value('Q2A3S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A3S2'])) echo $data['Q2A3S2'] ?>" value="<?php echo set_value('Q2A3S2'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A4S1'])) echo $data['Q2A4S1'] ?>" value="<?php echo set_value('Q2A4S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A4S2'])) echo $data['Q2A4S2'] ?>" value="<?php echo set_value('Q2A4S2'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A5S1'])) echo $data['Q2A5S1'] ?>" value="<?php echo set_value('Q2A5S1'); ?>"/>
                                                </div>
                                                <div class="col-xs-6 form-group">
                                                    <input class="form-control" type="text" placeholder="<?php if(isset($data['Q2A5S2'])) echo $data['Q2A5S2'] ?>" value="<?php echo set_value('Q2A5S2'); ?>"/>
                                                </div>

                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Students (maximum of ten students can be part of the team):</label>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Name</label>
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A1S1'])) echo $data['Q3A1S1'] ?>"  value="<?php echo set_value('Q3A1S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Email id</label>
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A1S2'])) echo $data['Q3A1S2'] ?>" value="<?php echo set_value('Q3A1S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Grade/Class</label>
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A1S3'])) echo $data['Q3A1S3'] ?>" value="<?php echo set_value('Q3A1S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A2S1'])) echo $data['Q3A2S1'] ?>" value="<?php echo set_value('Q3A2S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A2S2'])) echo $data['Q3A2S2'] ?>" value="<?php echo set_value('Q3A2S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A2S3'])) echo $data['Q3A2S3'] ?>" value="<?php echo set_value('Q3A2S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A3S1'])) echo $data['Q3A3S1'] ?>" value="<?php echo set_value('Q3A3S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A3S2'])) echo $data['Q3A3S2'] ?>" value="<?php echo set_value('Q3A3S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A3S3'])) echo $data['Q3A3S3'] ?>" value="<?php echo set_value('Q3A3S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A4S1'])) echo $data['Q3A4S1'] ?>" value="<?php echo set_value('Q3A4S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A4S2'])) echo $data['Q3A4S2'] ?>" value="<?php echo set_value('Q3A4S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A4S3'])) echo $data['Q3A4S3'] ?>" value="<?php echo set_value('Q3A4S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A5S1'])) echo $data['Q3A5S1'] ?>" value="<?php echo set_value('Q3A5S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A5S2'])) echo $data['Q2A5S2'] ?>" value="<?php echo set_value('Q3A5S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A5S3'])) echo $data['Q3A5S3'] ?>" value="<?php echo set_value('Q3A5S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A6S1'])) echo $data['Q3A6S1'] ?>" value="<?php echo set_value('Q3A6S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A6S2'])) echo $data['Q3A6S2'] ?>" value="<?php echo set_value('Q3A6S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A6S3'])) echo $data['Q3A6S3'] ?>" value="<?php echo set_value('Q3A6S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A7S1'])) echo $data['Q3A7S1'] ?>" value="<?php echo set_value('Q3A7S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A7S2'])) echo $data['Q3A7S2'] ?>" value="<?php echo set_value('Q3A7S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A7S3'])) echo $data['Q3A7S3'] ?>" value="<?php echo set_value('Q3A7S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A7S1'])) echo $data['Q3A7S1'] ?>" value="<?php echo set_value('Q3A7S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A7S2'])) echo $data['Q3A7S2'] ?>" value="<?php echo set_value('Q3A7S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A7S3'])) echo $data['Q3A7S3'] ?>" value="<?php echo set_value('Q3A7S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A8S1'])) echo $data['Q3A8S1'] ?>" value="<?php echo set_value('Q3A8S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A8S2'])) echo $data['Q3A8S2'] ?>" value="<?php echo set_value('Q3A8S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2"> 
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A8S3'])) echo $data['Q3A8S3'] ?>" value="<?php echo set_value('Q3A8S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A9S1'])) echo $data['Q3A9S1'] ?>" value="<?php echo set_value('Q3A9S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A9S2'])) echo $data['Q3A9S2'] ?>" value="<?php echo set_value('Q3A9S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A9S3'])) echo $data['Q3A9S3'] ?>" value="<?php echo set_value('Q3A9S3'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q3A10S1'])) echo $data['Q3A10S1'] ?>" value="<?php echo set_value('Q3A10S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q3A10S2'])) echo $data['Q3A10S2'] ?>" value="<?php echo set_value('Q3A10S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q3A10S3'])) echo $data['Q3A10S3'] ?>" value="<?php echo set_value('Q3A10S3'); ?>"/>
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        Task 2: Are the rooms in your school well-ventilated?
                                        For this exercise, classrooms that are occupied by students regularly should be considered. Do not add laboratories or the auditorium.
                                        Openings: are there any windows and ventilators which can be opened on regular basis and can be opened anytime?
                                        This exercise should be done by schools with centrally air conditioning system also.
                                        The exercise should be carried out for ten classrooms only. Sample size should have representation from all sections of classes: two classrooms each from pre-primary, primary, middle, secondary and higher secondary. If your school is up to Standard X only, then, at your discretion, you can add a class to any tier.
                                        This activity is for all schools (non-air-conditioned buildings as well as air-conditioned buildings). 
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="username" class="control-label">How many classrooms does your school have?</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="<?php if(isset($data['Q4A1'])) echo $data['Q4A1'] ?>" value="<?php echo set_value('Q4A1'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">To calculate the Window-floor ratio of classrooms in your school, please fill the table below:</label>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Details of the classroom (e.g. Class II section b)</label>
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A1S1'])) echo $data['Q5A1S1'] ?>"  value="<?php echo set_value('Q5A1S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">X = Area of floor (LxB) (square meters)</label>
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A1S2'])) echo $data['Q5A1S2'] ?>" value="<?php echo set_value('Q5A1S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Y = Sum of area of openings ∑ (LxH)</label>
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A1S3'])) echo $data['Q5A1S3'] ?>" value="<?php echo set_value('Q5A1S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Percentage of the floor area being ventilated (Y/X x 100)</label>
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A1S4'])) echo $data['Q5A1S4'] ?>" value="<?php echo set_value('Q5A1S4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A2S1'])) echo $data['Q5A2S1'] ?>" value="<?php echo set_value('Q5A2S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A2S2'])) echo $data['Q5A2S2'] ?>" value="<?php echo set_value('Q5A2S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A2S3'])) echo $data['Q5A2S3'] ?>" value="<?php echo set_value('Q5A2S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A2S4'])) echo $data['Q5A2S4'] ?>" value="<?php echo set_value('Q5A2S4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A3S1'])) echo $data['Q5A3S1'] ?>" value="<?php echo set_value('Q5A3S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A3S2'])) echo $data['Q5A3S2'] ?>" value="<?php echo set_value('Q5A3S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A3S3'])) echo $data['Q5A3S3'] ?>" value="<?php echo set_value('Q5A3S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A3S4'])) echo $data['Q5A3S4'] ?>" value="<?php echo set_value('Q5A3S4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A4S1'])) echo $data['Q5A4S1'] ?>" value="<?php echo set_value('Q5A4S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A4S2'])) echo $data['Q5A4S2'] ?>" value="<?php echo set_value('Q5A4S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A4S3'])) echo $data['Q5A4S3'] ?>" value="<?php echo set_value('Q5A4S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A4S4'])) echo $data['Q5A4S4'] ?>" value="<?php echo set_value('Q5A4S4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A5S1'])) echo $data['Q5A5S1'] ?>" value="<?php echo set_value('Q5A5S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A5S2'])) echo $data['Q2A5S2'] ?>" value="<?php echo set_value('Q5A5S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A5S3'])) echo $data['Q5A5S3'] ?>" value="<?php echo set_value('Q5A5S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A5S4'])) echo $data['Q5A5S4'] ?>" value="<?php echo set_value('Q5A5S4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A6S1'])) echo $data['Q5A6S1'] ?>" value="<?php echo set_value('Q5A6S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A6S2'])) echo $data['Q5A6S2'] ?>" value="<?php echo set_value('Q5A6S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A6S3'])) echo $data['Q5A6S3'] ?>" value="<?php echo set_value('Q5A6S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A6A4'])) echo $data['Q5A6A4'] ?>" value="<?php echo set_value('Q5A6A4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A7S1'])) echo $data['Q5A7S1'] ?>" value="<?php echo set_value('Q5A7S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A7S2'])) echo $data['Q5A7S2'] ?>" value="<?php echo set_value('Q5A7S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A7S3'])) echo $data['Q5A7S3'] ?>" value="<?php echo set_value('Q5A7S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A7A4'])) echo $data['Q5A7A4'] ?>" value="<?php echo set_value('Q5A7A4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A7S1'])) echo $data['Q5A7S1'] ?>" value="<?php echo set_value('Q5A7S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A7S2'])) echo $data['Q5A7S2'] ?>" value="<?php echo set_value('Q5A7S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A7S3'])) echo $data['Q5A7S3'] ?>" value="<?php echo set_value('Q5A7S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A8A4'])) echo $data['Q5A8A4'] ?>" value="<?php echo set_value('Q5A8A4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A8S1'])) echo $data['Q5A8S1'] ?>" value="<?php echo set_value('Q5A8S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A8S2'])) echo $data['Q5A8S2'] ?>" value="<?php echo set_value('Q5A8S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2"> 
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A8S3'])) echo $data['Q5A8S3'] ?>" value="<?php echo set_value('Q5A8S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A9A4'])) echo $data['Q5A9A4'] ?>" value="<?php echo set_value('Q5A9A4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q5A10S1'])) echo $data['Q5A10S1'] ?>" value="<?php echo set_value('Q5A10S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A10S2'])) echo $data['Q5A10S2'] ?>" value="<?php echo set_value('Q5A10S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A10S3'])) echo $data['Q5A10S3'] ?>" value="<?php echo set_value('Q5A10S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A10A4'])) echo $data['Q5A10A4'] ?>" value="<?php echo set_value('Q5A10A4'); ?>"/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q5A10S2'])) echo $data['Q5A10S2'] ?>" value="<?php echo set_value('Q5A10S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q5A10S3'])) echo $data['Q5A10S3'] ?>" value="<?php echo set_value('Q5A10S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                              </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        Task  3: How eco-friendly are the vehicles in your school?
                                        In this section, you will maintain a record of vehicles used by your school. Two critical parameters indicate if your vehicles are eco-friendly. One—type of fuel—is given in the table below.
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">What is the ownership of the vehicles used by your school? Please choose what is applicable.</label>
                                        <div class="radio">
                                          <label><input type="radio" name="optradio">School does not use or own vehicles</label>
                                        </div>
                                        <div class="radio">
                                          <label><input type="radio" name="optradio">Operator-owned vehicles</label>
                                        </div>
                                        <div class="radio">
                                          <label><input type="radio" name="optradio">School-owned vehicles</label>
                                        </div>
                                        <div class="radio">
                                          <label><input type="radio" name="optradio">A combination of school-owned and operator-owned vehicles</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        Task 4: How do you travel to school every day?
                                        To know how the students, teachers and other staff in your school travel daily, the teacher/co-ordinator in the team should ask individual class monitors to record the commuting practices of his/her classmates and the teachers, and forward the data to the audit team. After completing the survey, provide the compiled information below.
                                    </div>
                                    <div class="form-group">
                                        Please specify how many members of the school community use each type of transport:
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Mode of transport</label>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Students</label>   
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A1S1'])) echo $data['Q7A1S1'] ?>"  value="<?php echo set_value('Q7A1S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex2">Teaching Staff</label>
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A1S2'])) echo $data['Q7A1S2'] ?>" value="<?php echo set_value('Q7A1S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Non-Teaching Staff</label>
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A1S3'])) echo $data['Q7A1S3'] ?>" value="<?php echo set_value('Q7A1S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <label for="ex3">Total</label>
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A1S4'])) echo $data['Q7A1S4'] ?>" value="<?php echo set_value('Q7A1S4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">School bus</label>
                                              </div>
                                              
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A2S1'])) echo $data['Q7A2S1'] ?>" value="<?php echo set_value('Q7A2S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A2S2'])) echo $data['Q7A2S2'] ?>" value="<?php echo set_value('Q7A2S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A2S3'])) echo $data['Q7A2S3'] ?>" value="<?php echo set_value('Q7A2S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A2S4'])) echo $data['Q7A2S4'] ?>" value="<?php echo set_value('Q7A2S4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                             <div class="col-xs-2">
                                                <label for="ex1">Public bus</label>
                                              </div>
                                              
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A3S1'])) echo $data['Q7A3S1'] ?>" value="<?php echo set_value('Q7A3S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A3S2'])) echo $data['Q7A3S2'] ?>" value="<?php echo set_value('Q7A3S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A3S3'])) echo $data['Q7A3S3'] ?>" value="<?php echo set_value('Q7A3S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A3S4'])) echo $data['Q7A3S4'] ?>" value="<?php echo set_value('Q7A3S4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-2">
                                                <label for="ex1">School transport (other than bus)</label>
                                              </div>
                                             

                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A4S1'])) echo $data['Q7A4S1'] ?>" value="<?php echo set_value('Q7A4S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A4S2'])) echo $data['Q7A4S2'] ?>" value="<?php echo set_value('Q7A4S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A4S3'])) echo $data['Q7A4S3'] ?>" value="<?php echo set_value('Q7A4S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A4S4'])) echo $data['Q7A4S4'] ?>" value="<?php echo set_value('Q7A4S4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                              <div class="col-xs-2">
                                                <label for="ex1">Public transport (other than bus)</label>
                                              </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A5S1'])) echo $data['Q7A5S1'] ?>" value="<?php echo set_value('Q7A5S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A5S2'])) echo $data['Q2A5S2'] ?>" value="<?php echo set_value('Q7A5S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A5S3'])) echo $data['Q7A5S3'] ?>" value="<?php echo set_value('Q7A5S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A5S4'])) echo $data['Q7A5S4'] ?>" value="<?php echo set_value('Q7A5S4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-2">
                                                <label for="ex1">Taxi four-wheeler</label>
                                              </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A6S1'])) echo $data['Q7A6S1'] ?>" value="<?php echo set_value('Q7A6S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A6S2'])) echo $data['Q7A6S2'] ?>" value="<?php echo set_value('Q7A6S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A6S3'])) echo $data['Q7A6S3'] ?>" value="<?php echo set_value('Q7A6S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A6A4'])) echo $data['Q7A6A4'] ?>" value="<?php echo set_value('Q7A6A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-xs-2">
                                                    <label for="ex1">Taxi three-wheeler</label>
                                                </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A7S1'])) echo $data['Q7A7S1'] ?>" value="<?php echo set_value('Q7A7S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A7S2'])) echo $data['Q7A7S2'] ?>" value="<?php echo set_value('Q7A7S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A7S3'])) echo $data['Q7A7S3'] ?>" value="<?php echo set_value('Q7A7S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A7A4'])) echo $data['Q7A7A4'] ?>" value="<?php echo set_value('Q7A7A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-2">
                                                <label for="ex1">Personal four-wheeler</label>
                                              </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A7S1'])) echo $data['Q7A7S1'] ?>" value="<?php echo set_value('Q7A7S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A7S2'])) echo $data['Q7A7S2'] ?>" value="<?php echo set_value('Q7A7S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A7S3'])) echo $data['Q7A7S3'] ?>" value="<?php echo set_value('Q7A7S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A8A4'])) echo $data['Q7A8A4'] ?>" value="<?php echo set_value('Q7A8A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-xs-2">
                                                    <label for="ex1">Personal two-wheeler</label>
                                                </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A8S1'])) echo $data['Q7A8S1'] ?>" value="<?php echo set_value('Q7A8S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A8S2'])) echo $data['Q7A8S2'] ?>" value="<?php echo set_value('Q7A8S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2"> 
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A8S3'])) echo $data['Q7A8S3'] ?>" value="<?php echo set_value('Q7A8S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A9A4'])) echo $data['Q7A9A4'] ?>" value="<?php echo set_value('Q7A9A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-xs-2">
                                                    <label for="ex1">Bicycle</label>
                                                </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A10S1'])) echo $data['Q7A10S1'] ?>" value="<?php echo set_value('Q7A10S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A10S2'])) echo $data['Q7A10S2'] ?>" value="<?php echo set_value('Q7A10S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A10S3'])) echo $data['Q7A10S3'] ?>" value="<?php echo set_value('Q7A10S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A10A4'])) echo $data['Q7A10A4'] ?>" value="<?php echo set_value('Q7A10A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-xs-2">
                                                    <label for="ex1">On foot</label>
                                                </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A10S1'])) echo $data['Q7A10S1'] ?>" value="<?php echo set_value('Q7A10S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A10S2'])) echo $data['Q7A10S2'] ?>" value="<?php echo set_value('Q7A10S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A10S3'])) echo $data['Q7A10S3'] ?>" value="<?php echo set_value('Q7A10S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A10A4'])) echo $data['Q7A10A4'] ?>" value="<?php echo set_value('Q7A10A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-xs-2">
                                                    <label for="ex1">Others (non-motorized)</label>
                                                </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A11S1'])) echo $data['Q7A11S1'] ?>" value="<?php echo set_value('Q7A11S1'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A11S2'])) echo $data['Q7A11S2'] ?>" value="<?php echo set_value('Q7A11S2'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A11S3'])) echo $data['Q7A11S3'] ?>" value="<?php echo set_value('Q7A11S3'); ?>"/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A11A4'])) echo $data['Q7A11A4'] ?>" value="<?php echo set_value('Q7A11A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        <div class="form-group row">
                                                <div class="col-xs-2">
                                                    <label for="ex1">Total</label>
                                                </div>
                                             
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex1" type="text" placeholder="<?php if(isset($data['Q7A12S1'])) echo $data['Q7A12S1'] ?>" value="<?php echo set_value('Q7A12S1'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex2" type="text" placeholder="<?php if(isset($data['Q7A12S2'])) echo $data['Q7A12S2'] ?>" value="<?php echo set_value('Q7A12S2'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A12S3'])) echo $data['Q7A12S3'] ?>" value="<?php echo set_value('Q7A12S3'); ?>" readonly/>
                                              </div>
                                              <div class="col-xs-2">
                                                <input class="form-control" id="ex3" type="text" placeholder="<?php if(isset($data['Q7A12A4'])) echo $data['Q7A12A4'] ?>" value="<?php echo set_value('Q7A12A4'); ?>" readonly/>
                                              </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Task 5: How good is the air you breathe in your school? ?
The starting point of air quality monitoring is to first study if an area has an air pollution problem. Monitoring helps in assessing the level of pollution in relation to the ambient air quality standards. Standards are a regulatory measure to set the target for pollution reduction and achieve clean air.</label>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> How many students suffer from respiratory ailments ?</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="<?php if(isset($data['Q8A1'])) echo $data['Q8A1'] ?>" value="<?php echo set_value('Q8A1'); ?>"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Does the school laboratory have air quality monitoring equipment? </label>
                                        <div class="radio">
                                          <label><input type="radio" name="optradio">School does not use or own vehicles</label>
                                        </div>
                                        <div class="radio">
                                          <label><input type="radio" name="optradio">Operator-owned vehicles</label>
                                        </div>
                                        
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>

    <!-- /.container -->
<?php $this->load->view('footer');?>

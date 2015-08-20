<style></style>
   <form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">General</a></li>
      <li><a href="#personal" data-toggle="tab">Personal</a></li>
      <li><a href="#work-education" data-toggle="tab">Work & Education</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="general">         
            <div class="col-md-6">
               <div class="form-group float-label-control">                      
                    <label for="">Prefix</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_prefix'];?>" name="user_prefix" value="<?php echo $rws['user_prefix'];?>">
                </div>
                <div class="form-group float-label-control">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
                <div class="form-group float-label-control">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Department</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_papers'];?>" name="user_papers" value="<?php echo $rws['user_papers'];?>" id="papers">    
                </div> 
                <div class="form-group float-label-control">
                    <label for="">Avatar</label>
                    <input name="ImageFile" type="file" id="uploadFile"/>
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Previous Avatar </label>
                            <br> 
                            <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Uploaded Avatar </label>
                            <br> 
                            <div id="imagePreview"></div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-md-6">
                <label for="">Username</label>
                <div class="form-group float-label-control">
                    <a href="http://<?php echo $rws['domain_websiteaddress'];?>/<?php echo $rws['user_username'];?>">        
                        <div class="input-group">
                            <span class="input-group-addon">http://<?php echo $rws['domain_websiteaddress'];?>/</span>
                            <fieldset disabled> 
                                <input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off">
                            </fieldset>  
                        </div>
                    </a>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="<?php echo $rws['user_password'];?>" name="user_password" value="<?php echo $rws['user_password'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Email</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>">
                </div> 
                <div class="form-group float-label-control">
                    <label for="">Designation </label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>" id="profession">    
                </div> 
    <!-- RESUME UPLOAD -->
     <div class="form-group float-label-control">
                    <label for="">Profile/Resume</label>
                    <input name="Profile" type="file" id="uploadFile"/>
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Previous file </label>
                            <br> 
                            <a href="userfiles/profiles/<?php echo $rws['user_profile'];?>"><?php echo $rws['user_profile'];?></a>              
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Uploaded file </label>
                            <br> 
                            <div id="imagePreview"></div>
                        </div>
                    </div>
                </div>       
 
            </div>
        </div>
        <div class="tab-pane fade" id="personal">
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Short Bio <i>(optional)</i></label>
                    <textarea class="form-control" placeholder="<?php echo $rws['user_shortbio'];?>" rows="7" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Date of Birth</label>   
                    <input type="date" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">      
                </div>
                
                <label for="">Gender</label>              
                <div class="form-group float-label-control">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Male" checked>Male</label>
                    </div>              
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="user_gender" id="optionsRadios1" value="Female">Female</label>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                
                
                <div class="form-group float-label-control">
                    <label for="">Address</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_address'];?>" name="user_address" value="<?php echo $rws['user_address'];?>">    
                </div>
                   <div class="form-group float-label-control">
                    <label for="">Address line 2</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_address2'];?>" name="user_address2" value="<?php echo $rws['user_address2'];?>">    
                </div>
                <div class="form-group float-label-control">
                    <label for="">Phone number</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_contact'];?>" name="user_contact" value="<?php echo $rws['user_contact'];?>">    
                </div>
                <label for="">Website or Any Social links</label>
                <div class="form-group float-label-control">
                    <div class="input-group">                  
                        <span class="input-group-addon">http://</span>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_website'];?>" name="user_website" value="<?php echo $rws['user_website'];?>">                  
                    </div>
                </div> 
            </div>
        </div>
        <div class="tab-pane fade" id="work-education">
           <h2 class="container">Work</h2>
            <div class="col-md-4">
                <div class="form-group float-label-control">
                    <label for="">Designation </label>
                   <br><br>
                 <input type="text" class="form-control" placeholder="Designation - Current" name="user_profession" value="<?php echo $rws['user_profession'];?>" id="profession">    
                </div> <br><br>
                <div class="form-group float-label-control">
                  
                    <input type="text" class="form-control" placeholder="Designation - Previous company" name="user_designation2" value="<?php echo $rws['user_designation2'];?>" id="designation2">    
                </div> <br><br>
                 <div class="form-group float-label-control">
                    
                     <input type="text" class="form-control" placeholder="Designation - Previous company" name="user_designation3" value="<?php echo $rws['user_designation3'];?>" id="designation3">     
                </div> 
                   <h2>Education</h2>
                    <div class="form-group float-label-control">
                    <label for="">Subject </label>
                    <br><br>
                    <input type="text" class="form-control" placeholder="Course/Major" name="user_education1" value="<?php echo $rws['user_education1'];?>" id="education1">    
                </div> <br> <br> 
                <div class="form-group float-label-control">
                     <input type="text" class="form-control" placeholder="Course/Major" name="user_education2" value="<?php echo $rws['user_education2'];?>" id="education2">       
                </div> <br> <br>

                <div class="form-group float-label-control">
                    <input type="text" class="form-control" placeholder="Course/Major" name="user_education3" value="<?php echo $rws['user_education3'];?>" id="education3">   
                </div> 
            </div> 
               <div class="col-md-4">
               
                <div class="form-group float-label-control">
                    <label for="">Duration </label>
                    <br><br>
                    <input type="text" class="form-control" placeholder="from(year)-to(year)/Current" name="user_duration" value="<?php echo $rws['user_duration'];?>" id="duration">    
                </div> <br><br>
                <div class="form-group float-label-control">
                     <input type="text" class="form-control" placeholder="from(year)-to(year)" name="user_duration2" value="<?php echo $rws['user_duration2'];?>" id="duration2">  
                </div> <br> <br>

                <div class="form-group float-label-control">
                     <input type="text" class="form-control" placeholder="from(year)-to(year)" name="user_duration3" value="<?php echo $rws['user_duration3'];?>" id="duration3">     
                </div> 
                  <br><br><br>
                   <div class="form-group float-label-control">
                    <label for="">Year </label>
                    <input type="text" class="form-control" placeholder="Year of completion" name="user_year" value="<?php echo $rws['user_year'];?>" id="year">    
                </div> <br><br> <div class="form-group float-label-control">
                    <input type="text" class="form-control" placeholder="Year of completion" name="user_year2" value="<?php echo $rws['user_year2'];?>" id="year2">    
                </div> <br><br><div class="form-group float-label-control">
                
                    <input type="text" class="form-control" placeholder="Year of completion" name="user_year3" value="<?php echo $rws['user_year3'];?>" id="year3">    
                </div> 
                
            </div>
            <div class="col-md-4">
                <div class="form-group float-label-control">
                    <label for="">Organisation and Role</label>
                    <textarea class="form-control" placeholder="Name of the organiztion and Your role there" rows="2" placeholder="<?php echo $rws['user_organization'];?>" name="user_organization" value="<?php echo $rws['user_organization'];?>"><?php echo $rws['user_organization'];?></textarea>
                </div>
                   <div class="form-group float-label-control">
                    <textarea class="form-control" placeholder="Name of the organiztion and Your role there" rows="2" placeholder="<?php echo $rws['user_organization2'];?>" name="user_organization2" value="Name of the organiztion and Your role there"><?php echo $rws['user_organization2'];?></textarea>
                </div>
                   <div class="form-group float-label-control">
                
                    <textarea class="form-control" placeholder="Name of the organiztion and Your role there" rows="2" placeholder="<?php echo $rws['user_organization3'];?>" name="user_organization3" value="Name of the organiztion and Your role there"><?php echo $rws['user_organization3'];?></textarea>
                </div>
                   <div class="form-group float-label-control">
                    <label for="">Institution and Details</label>
                    <textarea class="form-control" placeholder="Name of the institution & yor research area/Specialization" rows="2" placeholder="<?php echo $rws['user_subject'];?>" name="user_subject" value="<?php echo $rws['user_subject'];?>"><?php echo $rws['user_subject'];?></textarea>
                </div>
                   <div class="form-group float-label-control">
                    <textarea class="form-control" placeholder="Name of the institution & yor research area/Specialization" rows="2" placeholder="<?php echo $rws['user_subject2'];?>" name="user_subject2" value="<?php echo $rws['user_subject2'];?>"><?php echo $rws['user_subject2'];?></textarea>
                </div>
                   <div class="form-group float-label-control">
                
                    <textarea class="form-control" placeholder="Name of the institution & yor research area/Specialization" rows="2" placeholder="<?php echo $rws['user_subject3'];?>" name="user_subject3" value="<?php echo $rws['user_subject3'];?>"><?php echo $rws['user_subject3'];?></textarea>
                </div>
                
            </div>
            
        </div>
    </div>     
    <br>
    <div class="submit">
        <center>
            <button class="btn btn-primary ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>
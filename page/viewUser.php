<div class="section">

                    <div class="col-md-12 well">
                        <a class="btn btn-primary" onclick="showRegistationForm" data-toggle="modal" data-target="#usuario"><i class="fa fa-fw -square -circle fa-plus-square"></i>Add New User</a>
                    </div>
         
        </div>
<div class="section hidden">
<div id="signupbox" style=" margin-top:10px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/">Sign In</a></div>
            </div>  
            <div class="panel-body">
                <form name="myForm" ng-submit="insertInfo(empInfo)">

                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />

                    <div id="div_id_username" class="form-group required">
                        <label for="id_username" class="control-label col-md-4  requiredField"> Username<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 " ng-class="{ 'has-error' : myForm.username.$invalid && !myForm.username.$pristine }">
                            <input class="input-md  textinput textInput form-control" id="id_username" ng-model="empInfo.username" value="habib" ng-minlength="3" ng-maxlength="30" name="username" placeholder="Choose your username" style="margin-bottom: 10px" type="text" />
                            <p ng-show="myForm.username.$error.minlength" class="help-block">Username is too short.</p>
                            <p ng-show="myForm.username.$error.maxlength" class="help-block">Username is too long.</p>

                        </div>
                    </div>
                    <div id="div_id_email" class="form-group required">
                        <label for="id_email" class="control-label col-md-4  requiredField"> E-mail<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  ng-class="{ 'has-error' : myForm.email.$invalid && !myForm.email.$pristine }">
                            <input class="input-md emailinput form-control" id="id_email" name="email" placeholder="Your current email address"  ng-model="empInfo.email" style="margin-bottom: 10px" type="email" />
                              <p ng-show="myForm.email.$invalid && !myForm.email.$pristine" class="help-block">Enter a valid email.</p>
                         </div>     
                    </div>
                    <div id="div_id_password1" class="form-group required">
                        <label for="id_password1" class="control-label col-md-4  requiredField">Password<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  ng-class="{ 'has-error' : myForm.password1.$invalid && !myForm.password1.$pristine }"> 
                            <input class="input-md textinput textInput form-control"  ng-model="empInfo.password1" ng-minlength="3" ng-maxlength="30" id="id_password1" name="password1" placeholder="Create a password" style="margin-bottom: 10px" type="password" />
                        <p ng-show="myForm.password1.$error.minlength" class="help-block">Username is too short.</p>
                            <p ng-show="myForm.password1.$error.maxlength" class="help-block">Username is too long.</p>

                        </div>
                    </div>
                 
                    <div id="div_id_name" class="form-group required"> 
                        <label for="id_name" class="control-label col-md-4  requiredField"> full name<span class="asteriskField">*</span> </label> 
                        <div class="controls col-md-8 "> 
                            <input class="input-md textinput textInput form-control" id="id_name" ng-model="empInfo.name" name="name" placeholder="Your Frist name and Last name" style="margin-bottom: 10px" type="text"  required />
                        </div>
                    </div>


                    <div id="div_id_number" class="form-group required">
                        <label for="id_number" class="control-label col-md-4  requiredField"> contact number<span class="asteriskField">*</span> </label>
                        <div class="controls col-md-8 "  ng-class="{ 'has-error' : myForm.number.$invalid && !myForm.number.$pristine }">
                            <input class="input-md textinput textInput form-control" id="id_number" name="number" placeholder="provide your number" style="margin-bottom: 10px" type="number"  ng-model="empInfo.number" ng-minlength="3" ng-maxlength="30"  />
                        <p ng-show="myForm.number.$error.minlength" class="help-block">Number Is too short!.</p>
                            <p ng-show="myForm.number.$error.maxlength" class="help-block"> Number Is too Long!</p>

                        
                        
                        </div>
                    </div> 

                    <div class="form-group"> 
                        <div class="aab controls col-md-4 "></div>
                        <div class="controls col-md-8 ">
                            <input type="submit" name="Signup" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                         </div>
                    </div> 

                </form>

            </div>
        </div>
    </div> 
    
    
         
        </div>
 <div class="section">
            <div class="container">
<div ng-controller="userController">
<div class="table-responsive">
<table class="table table-hover">
<tr>
<th>ID</th>
<th>user name</th>
<th>Email</th>
<th>password</th>
<th>status</th>
<th></th>
<th></th>
</tr>
<??>
<tr ng-repeat="detail in details| filter:search_query">
<td>
<span>{{detail.id}}</span></td>
<td>{{detail.user_name}}</td>
<td>{{detail.email}}</td>
<td>{{detail.password}}</td>
<td>{{detail.status}}</td>
<td>
<button class="btn btn-warning" ng-click="editInfo(detail)" title="Edit"><span class="glyphicon glyphicon-edit"></span></button>
</td>
<td>
<button class="btn btn-danger" ng-click="deleteInfo(detail)" title="Delete"><span class="glyphicon glyphicon-trash"></span></button>
</td>
</tr>
</table>
</div>
</div>
</div>
</div>

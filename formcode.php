<form method='post'>

<div class="row">
<div class="col-sm-6 col-sm-offset-3">
    <h3>Please Enter Your Information Below</h3>
    
    
    <div class="row">
            <div class="form-group col-sm-6">
                
                <label for="name" class="h4">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" required>
            </div>
          
            <div class="form-group col-sm-6">
                <label for="Where" class="h4">Where In The Writing Process Are You</label>
                <select  class="form-control" name="Where" id="Where" size="1">
<option value="Prewriting">Prewriting </option>
<option value="Drafting">Drafting</option>
<option value="Revising">Revising</option>
</select> 
            </div>
        </div>
        
        <div class="form-group">
            <label for="What" class="h4 ">What Is The Writing Assigment</label>
            <input type="text" class="form-control" name="What" id="What" placeholder="Enter name" required>
        </div>
        
        <div class="form-group">
            <label for="Desc" class="h4 ">Provide A Brief Description</label>
            <input type="text" class="form-control" name="Desc" id="Desc" placeholder="Enter name" required>
        </div>
        
         <div class="form-group">
            <label for="When" class="h4 ">When Is The Assigment Due (MM/DD/YYYY)</label>   <input type="text" class="form-control" name="When" id="When" placeholder="Enter name" required>
        </div>
        
        <div class="form-group">
            <label for="Who" class="h4 "> Who Is Your Teacher</label>
            <input type="text" class="form-control" name="Who" id="Who" placeholder="Enter name" required>
        </div>
        
        <div class="form-group">
            <label for="Dropdown" class="h4 ">Prefered Tutor: </label>
            <select name="Dropdown" id="Dropdown"  class="form-control" size="1">
<option value="Christopher">Christopher (A DAY)</option>
<option value="Peyton">Peyton (A DAY)</option>
<option value="Reece">Reece (A DAY)</option>
<option value="David">David (A DAY)</option>
<option value="Nina">Nina (A DAY)</option>
<option value="Chandler">Chandler (A DAY)</option>
<option value="Grace">Grace (A DAY)</option>
<option value="Morgan">Morgan (A DAY)</option>

</select>
        </div>
        
          <div class="form-group">
            <label for="call" class="h4 ">What area(s) shoild we focus on during your conference (select One or Two)</label>   Selecting a topic:<input type="checkbox" value="Yes" name="call" id="call"> <br />
 
Research: 
<input type="checkbox" value="Yes" name="call2" id="call2"><br />

Brainstorming: 
<input type="checkbox" value="Yes" name="call3" id="call3"><br />

Supporting details: 
<input type="checkbox" value="Yes" name="call4" id="call4"><br />

Transitions: 
<input type="checkbox" value="Yes" name="call5" id="call5"><br />

Intro/Conclusion: 
<input type="checkbox" value="Yes" name="call6" id="call6"><br />

Incorporating/Citing quotes: 
<input type="checkbox" value="Yes" name="call7" id="call7"><br />

Grammar/Spelling: 
<input type="checkbox" value="Yes" name="call8" id="call8"><br />

Voice/Style: 
<input type="checkbox" value="Yes" name="call9" id="call9"><br />

Other: 
<input type='text'  class="form-control" name='Other' id='Other' /> <br />
        </div>
        
        
   <input type='hidden' name='articleid' id='articleid' value='<? echo $_GET["id"]; ?>' />     
        
    <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Submit</button>
<div id="msgSubmit" class="h3 text-center hidden">Message Submitted!</div>

     </form>
    

<html>
<head>
    <title>Contact form using Bootstrap 3.3.4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/animate.css">
 
</head>
<body>
</body>

</html>
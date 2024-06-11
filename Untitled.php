<html>

<body>

<div class="form">            
          <form action="index.php" method="post" name="coincard_reg" onsubmit="return validate(); return false;"> 
       <div class="form-row">
       <div class="form-group col-lg-6">
                <input type="text" name="name" class="form-control mb-2" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"placeholder="Name"/>
               <div class ="validation"></div> 
          </div>
       <div class="form-group col-lg-6">
                <input type="text" name="subject" class="form-control mb-2" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" placeholder="subject"/>
               <div class ="validation"></div> 
         </div>
         </div>
       <div class="form-group">
                <input type="text" name="mobile" class="form-control mb-2" id="mobile" data-rule="minlen:4" data-msg="Please enter a valid mobile contact" placeholder="Mobile"/>
               <div class ="validation"></div> 
           </div>
           
           <div class="form-group">
                <input type="email" name="email" class="form-control mb-2" id="email" data-rule="email" data-msg="Please enter a valid email" placeholder="Email"/>
               <div class ="validation"></div> 
           </div>
           
       <div class="form-group">
                <textarea name="message" class="form-control" data-rule="required" data-msg="Please write something for us" placeholder="Write a message here"/></textarea>
                <div class ="validation"></div>
           </div>     
            <div class="text-center"><input type="submit" name="submit" class="btn btn-success" value="Submit"/></button></div>
              
              
               <div class="form-group col-lg-6">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="subject" data-msg="Please indicate a subject" />
                   <div class="validation"></div>
                 </div>
    </form>
    </body>
    
    </html>

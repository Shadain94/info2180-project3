window.onload=function () {
    
    var btn= document.getElementById('submit_btn');
    var httpRequest;
    
    
    
    var r=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
    
    btn.addEventListener('click',function(element) {
        element.preventDefault();
        
         
         var inputs = document.getElementsByTagName("input");
         for (var i = 0; i<inputs.length; i++){ 
             if (!inputs[i].value){
            alert("Please fill all the inputs");
             return false;
            }
       }
     
        
        var password=document.getElementById('p_word').value;
        if(r.test(password)==true){
            
            var id=document.getElementById('id_num').value;
            var first=document.getElementById('f_name').value;
            var last=document.getElementById('l_name').value;
            var uname=document.getElementById('u_name').value;
            var type=document.getElementById('u_type').value;
            
            
            var url= "add_user.php";
            httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = processAll;
            httpRequest.open('POST',url);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send('id_num='+ encodeURIComponent(id) +"&f_name="+  encodeURIComponent(first) +"&l_name="+  encodeURIComponent(last) +"&u_name="+  encodeURIComponent(uname)+"&u_type="+  encodeURIComponent(type)+"&p_word="+  encodeURIComponent(password));
            
            
        }
        else{
            
            alert(" Your Password does not Match the specified format");
        }
        
  
  
    });
    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
      function processAll() {
             
              if(httpRequest.readyState===XMLHttpRequest.DONE){
                 if(httpRequest.status===200){
            
                    var response=httpRequest.responseText;
                    alert(response);
            
                    
                    
                     
                }
                else{
                 
                 alert("There was a problem with the request");
                 
                    
                }
             }
             
         }
    
    
    
    
    
    
    
    
    
};
window.onload=function () {
    
    var httpRequest;
    var message=document.getElementById('submit_message');
    
    
    message.addEventListener('click', function(element) {
        element.preventDefault();
        
            var inputs = document.getElementsByTagName("input");
         for (var i = 0; i<inputs.length; i++){ 
             if (!inputs[i].value){
            alert("Please fill all the inputs");
             return false;
            }
       }
       
       var subject=document.getElementById('s_id').value;
       var recipient=document.getElementById('r_id').value;
       var text=document.getElementById('m_id').value;
       
       
       
            var url= "submit_message.php";
            httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = processAll;
            httpRequest.open('POST',url);
            httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            httpRequest.send('s_id='+ encodeURIComponent(subject) +"&r_id="+  encodeURIComponent(recipient) +"&m_id="+ encodeURIComponent(text));
            
           
       
       
        
        
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
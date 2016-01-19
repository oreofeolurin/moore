

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>Challege 2</title>

        <script src="jquery.min.js"></script>
        
 
    </head>
    <body>
        
        <h4> Acknowledge you visted this challenge page by putting you name down</h4> 
        
        <form id="acknowledge">
            <input type="text" class="input" name="name" placeholder="your name or nickname"/>
            
            <button type="submit" name="acknowledge">Submit</button>
        </form>
        
        
        <script type="text/javascript">
        
              

            $("form#acknowledge").submit(function(e){
                e.preventDefault();
                
                $name = $("[name=name]").val();
                        
                $.ajax({
                    method: "POST",
                    url: "saveToDB.php",
                    data: { acknowledge : $name },
                    dataType: "json",
                    success: function(data){
                        if(data.success)
                            alert("You name has been saved to db");
                        
                    },
                    error: function(statusCode, errorThrown) {
                            if (statusCode.status == 0) {                                
                                //Okay no internet/network lets save so localStorage
                                saveToLocalStorage($name);           
                            }
                    }
  
                })
                                  
            })  
            
            function saveToLocalStorage(name){
                var $names;
            
                //Lets try to get the items in the local storage 
                var $array =  localStorage.getItem('Names');
                
                //parse if items exist
                if($array) 
                    $names = JSON.parse($array);
                
                //create new array 
                else
                    $names = new Array();
                
                
                //Lets append the name into the array
                $names.push(name);
                
                //Lets json encode it 
                var jsonString = JSON.stringify($names);
                
                //now lets save/re-save it again
                localStorage.setItem('Names', jsonString);
                
                // notify user
                alert("you're offline we have saved to local storage instead");
                                
            }
                                          
            
        </script>
        
     </body>
 </html>
        




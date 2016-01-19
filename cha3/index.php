

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
                                
                                var $array =  localStorage.getItem('Names');
                                var $names;
                                
                                if($array){
                                    $names = JSON.parse($array);
                                }
                                else{
                                    $names = new Array();
                                }
                                
                                
                                $names.push($name);
                                
                                var jsonString = JSON.stringify($names);
                                localStorage.setItem('Names', jsonString);
                                
                                
                                alert("you're offline we have saved to local storage instead");
                            }
                    }
  
                })
                
                
                
                
                
                
            })            
            
        </script>
        
     </body>
 </html>
        




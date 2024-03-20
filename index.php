<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            padding-top: 100px;
        }
        .container{
            background-color: beige;
        }
    </style>

</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                
                <div class="panel-body">
                    <h1 style="padding-top: 2px;"><mark>Dependent Select Box</mark></h1>
                    <p style="color: red;">Select Country then Choose state </p>
                    <form class="form-horizontal" role="form" >
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Select Country:</label>
                            <div class="col-sm-8">
                                <select id="Country" class="form-select" aria-label="Select Country">
                                    <option  selected>Select Country</option>
                                </select>     
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Choose State:</label>
                            <div class="col-sm-8">
                                <select id="State" class="form-select" aria-label="Choose State">
                                    <!-- <option selected></option> -->
                                </select>              
                            </div><br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="jquery/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
      
      function loadData(type,country_id){
        $.ajax({
            url:'load.php',
            type:'POST',
            data:{type : type, id : country_id},
            success: function(data){
                if(type == 'stateData'){
                  $('#State').html(data);//the html() method sets/prints the content(innerHTML) inside an html element
                }else{
                    $('#Country').append(data); 
                }
            }
        });
      }


      // Call the loadData function
      loadData();
      
      $('#Country').on("change",function(){
        var id=$('#Country').val();  //we are taking the Id of the selected value
        loadData('stateData',id);
      });

    });
</script>
</body>
</html>

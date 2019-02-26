<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Live MySQL Database Search</title>
<style type="text/css">
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
        background-color: #fff;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal=$(this).val();
        var resultDropdown=$(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});

    function myfilter(){

    }
</script>
</head>
<body>
    <form method="POST">
    <div class="search-box" style="display: inline-block;">
        <label id="i1" for="input_file" style="display: inline-block; margin-left:50px;margin-bottom: -10px;"> Search</label>
        <input style="display: inline-block;margin-left: 25px;margin-top: -20px; width: 300px;" type="text" autocomplete="off" placeholder="Search country..." name="inputVal" required="" />
        <div class="result"></div>
    </div>
    <br>
    <br>
    <br>

    <input type="submit" name="update_btn" value="search" style="margin-left: 90px; width: 70px; height: 33px; margin-top: 20px;">

</form>

<br>



</body>
</html>
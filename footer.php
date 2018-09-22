<script type="text/javascript">

    $(".toggleForms").click(function() {
        $("#signUpForm").toggle();
        $("#loginForm").toggle();
    });

    $('#diary').bind('input propertychange', function() {
            
        $.ajax({
            method: "POST",
            url: "updateDatabase.php",
            data: { content: $("#diary").val()}
        }).done(function(msg){
                
            alert("Daten gespeichert: " + msg); 
                
        });
    });

    </script>

</body>

</html>
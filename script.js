

    window.onload = function() {

        $(".pencil").css("display","none");
        $(".note").css("display","none");
        $(".book").css("display","none");
        $("#kitap").change(function (e) { 
            document.getElementById('kalem').checked = false;
            document.getElementById('dersnotu').checked = false;
            $(".pencil").css("display","none");
            $(".note").css("display","none");
            $(".book").css("display","inline-block");
        });
        $("#kalem").change(function (e) { 
            document.getElementById('kitap').checked = false;
            document.getElementById('dersnotu').checked = false;
            $(".book").css("display", "none");
            $(".note").css("display","none");
            $(".pencil").css("display","inline-block");
        });

        $("#dersnotu").change(function (e) { 
            document.getElementById('kitap').checked = false;
            document.getElementById('kalem').checked = false;
            $(".pencil").css("display","none");
            $(".book").css("display","none");
            $(".note").css("display","inline-block");
        }); 
    }
 


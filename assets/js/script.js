// Download logs
function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}



function saveTextAsFile(textToWrite, fileNameToSaveAs){   
    var textFileAsBlob = new Blob([textToWrite], {type:'text/plain'}); 
    var downloadLink = document.createElement("a");
    downloadLink.download = getRandomInt(10000)+"_"+fileNameToSaveAs;
    if (window.webkitURL != null)
    {
        // Chrome allows the link to be clicked
        // without actually adding it to the DOM.
        downloadLink.href = window.webkitURL.createObjectURL(textFileAsBlob);
    }
    else
    {
        // Firefox requires the link to be added to the DOM
        // before it can be clicked.
        downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
        downloadLink.onclick = destroyClickedElement;
        downloadLink.style.display = "none";
        document.body.appendChild(downloadLink);
    }

    downloadLink.click();
}


// clear logs

$("#btn-clear").click(function(){

    $("#result").val("")

})


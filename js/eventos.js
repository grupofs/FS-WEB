$(document).ready(function(){
    $("#download_eventos").click(function(e){
        e.preventDefault();
        var url = window.location+'/bd/excel_eventos.php';
        window.open(url, '_blank')
    })
});
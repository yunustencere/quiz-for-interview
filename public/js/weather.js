$(document).ready(function() {

	$('#citySelect').change(function(){
    var id = $(this).val();
    var myUrl = "/q4/getWeatherInfo/"+id;
    $.ajax({
       type:"get",
       url: myUrl,

       success:function(res)
       {    
            if(res)
            {
                $("#temperature").text(res['temperature']+" °C");
                $("#description").text(res['description']);
                var imgUrl = "http://openweathermap.org/img/wn/"+res['icon']+"@2x.png";
                $('#weatherIcon').attr("src", imgUrl);
            }
       },
       
    });
  });


});  
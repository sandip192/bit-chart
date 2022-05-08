var xValues = ["2022-04-09","2022-04-10"];
 var yValues = ["42459.5","42726"];

 var myChart = new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues,
    }]
  },
  options: {
    legend: {display: false},
  }
});

$(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("show");
            $( "#datepicker-14" ).datepicker();
            $( "#datepicker-14" ).datepicker("show");
         });
         
var startdateFirst = "2022-04-09";
var endatefirst = "2022-04-12";
$("#datepicker-13").val(startdateFirst);
$("#datepicker-14").val(endatefirst)

chart_line(startdateFirst,endatefirst)
function chart_line(startdateFirst="",endatefirst="") {
            var startdate = startdateFirst?startdateFirst:moment($( "#datepicker-13" ).val()).format('YYYY-MM-DD');  
            var enddate = endatefirst?endatefirst:moment($( "#datepicker-14" ).val()).format('YYYY-MM-DD');  
            $.ajax({
              type: 'GET',
              url: '/ajax_get',             
              data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                "start_date": startdate,
                "end_date": enddate
              },
              success: function(data){
                  var json_parse = JSON.parse(data);      
                  myChart.data.labels = Object.keys(json_parse.bpi);
                  myChart.data.datasets[0].data =  Object.values(json_parse.bpi);
                  myChart.update(); 
                 
              },
              error: function(xhr){
              }
          });

     }

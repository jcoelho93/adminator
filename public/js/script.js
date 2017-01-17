$(document).ready(function(){
	$(".cst-clickable-row").click(function(){
		window.document.location = $(this).data("href");
	});

	var ctx = $("#testchart");
	var options =  {
    	responsive: true,
    	maintainAspectRation: true,
    	title: {
            display: true,
            text: 'Sent/Received'
        }
    };

	var data = {
    labels: [
        "Sent",
        "Received"
    ],
    datasets: [
        {
            data: [1308, 1024],
            backgroundColor: [
                "#5cb85c",
                "#d9534f"
            ],
            hoverBackgroundColor: [
                "#5cb85c",
                "#d9534f"
            ]
        }]
	};
	var myPieChart = new Chart(ctx,{
    type: 'pie',
    data: data,
    options: options
	});
});
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

    var ctx = $("#testchart2");
    var options =  {
        responsive: true,
        maintainAspectRation: true,
        title: {
            display: true,
            text: 'Database Size'
        }
    };

    var data = {
    labels: [
        "php",
        "mysql",
        "information_schema",
        "performance_schema",
    ],
    datasets: [
        {
            data: [16, 128, 64, 256],
            label: "Size",
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
            borderWidth: 1,
        }]
    };
    var myPieChart = new Chart(ctx,{
    type: 'bar',
    data: data,
    options: options
    });

    var ctx = $("#testchart3");
    var options =  {
        responsive: true,
        maintainAspectRation: true,
        title: {
            display: true,
            text: ''
        }
    };

    var data = {
        labels: ["mysql", "triggers", "sth", "Designing", "sth"],
        datasets: [
            {
                label: "On",
                backgroundColor: "rgba(179,181,198,0.2)",
                borderColor: "rgba(179,181,198,1)",
                pointBackgroundColor: "rgba(179,181,198,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(179,181,198,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                label: "Off",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                pointBackgroundColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(255,99,132,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]
    };

    var myRadarChart = new Chart(ctx, {
        type: 'radar',
        data: data,
        options: options
    });
});
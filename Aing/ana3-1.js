$(document).ready(function () {
    $.ajax({
        url: location.protocol + '//' + location.host + "/project2/analysis3-1.php",
        method: "GET",
        success: function (data) {
            console.log(data);
           
            var Male = [];
            var Female = [];
            var branchname = [];

            for (var i in data) {
                
                Male.push(data[i].Male);
                Female.push(data[i].Female);
                branchname.push(data[i].branchname);
            }

            var chartdata = {
                labels: branchname,
                datasets: [{
                    label: ['Male','Female'],
                    backgroundColor: ['rgba(0, 153, 204,0.3)','rgb(255, 102, 102,0.3)'],
                    borderColor: ['rgba(255,205,0, 1)','rgba(255,205,0, 1)'],
                    hoverBackgroundColor: ['rgba(255,205,0, 1)','rgba(255,205,0, 1)'],
                    hoverBorderColor: ['rgba(195,132, 221, 1)','rgba(195,132, 221, 1)'],
                    data: [Male,Female],
                }]
            };
            

            var ctx = $("#mycanvas3-1");

            var barGraph = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartdata
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
});


// label: 'Male Staff',
// backgroundColor: 'rgba(0, 77, 128,0.1)',
// borderColor: 'rgba(255,205,0, 1)',
// hoverBackgroundColor: 'rgba(255,205,0, 1)',
// hoverBorderColor: 'rgba(195,132, 221, 1)',
// data: Male,

// label: 'Female Staff',
// backgroundColor: 'rgba(255, 102, 102,0.3)',
// borderColor: 'rgba(255,205,0, 1)',
// hoverBackgroundColor: 'rgba(255,205,0, 1)',
// hoverBorderColor: 'rgba(195,132, 221, 1)',
// data: Female,
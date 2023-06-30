function calculate() {

    // e.preventDefault();

    var weight = parseFloat(document.getElementById("weight").value);

    var reps = parseFloat(document.getElementById("reps").value);

    var oneRepMax = weight / (1.0278 - 0.0278 * reps);




    document.getElementById("answer").innerHTML =

        "<h2 style='text-align:center'>Your one rep max is " +

        oneRepMax +

        "lb</h2><br>" +

        '<table class="table table-bordered text-center" style="color:white; text-align:center">' +

        "<thead>" +

        "<tr>" +

        '<th scope="col">Percentage Of 1RM</th>' +

        '<th scope="col">Lift Weight</th>' +

        '<th scope="col">Repetitions of 1RM</th>' +

        "</tr>" +

        "</thead>" +

        "<tbody>" +

        "<tr>" +

        "<td>100%</td>" +

        `<td>${(oneRepMax * 1).toFixed(1)} kg</td>` +

        "<td>1</td>" +

        "</tr>" +

        "<tr>" +

        "<td>95%</td>" +

        `<td>${(oneRepMax * 0.95).toFixed(1)} kg</td>` +

        "<td>2</td>" +

        "</tr>" +

        "<tr>" +

        "<td>90%</td>" +

        `<td>${(oneRepMax * 0.9).toFixed(1)} kg</td>` +

        "<td>4</td>" +

        "</tr>" +

        "<tr>" +

        "<td>85%</td>" +

        `<td>${(oneRepMax * 0.85).toFixed(1)} kg</td>` +

        "<td>6</td>" +

        "</tr>" +

        "<tr>" +

        "<td>80%</td>" +

        `<td>${(oneRepMax * 0.8).toFixed(1)} kg</td>` +

        "<td>8</td>" +

        "</tr>" +

        "<tr>" +

        "<td>75%</td>" +

        `<td>${(oneRepMax * 0.75).toFixed(1)} kg</td>` +

        "<td>10</td>" +

        "</tr>" +

        "<tr>" +

        "<td>70%</td>" +

        `<td>${(oneRepMax * 0.7).toFixed(1)} kg</td>` +

        "<td>12</td>" +

        "</tr>" +

        "<tr>" +

        "<td>65%</td>" +

        `<td>${(oneRepMax * 0.65).toFixed(1)} kg</td>` +

        "<td>16</td>" +

        "</tr>" +

        "<tr>" +

        "<td>60%</td>" +

        `<td>${(oneRepMax * 0.6).toFixed(1)} kg</td>` +

        "<td>20</td>" +

        "</tr>" +

        "<tr>" +

        "<td>55%</td>" +

        `<td>${(oneRepMax * 0.55).toFixed(1)} kg</td>` +

        "<td>24</td>" +

        "</tr>" +

        "<tr>" +

        "<td>50%</td>" +

        `<td>${(oneRepMax * 0.5).toFixed(1)} kg</td>` +

        "<td>30</td>" +

        "</tr>" +

        "</tbody>" +

        "</table>";

}



(function ($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $("#layoutSidenav_nav .sb-sidenav").each(function () {
        if (this.href === path) {
            $(this).addClass("active");
        }
    });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function (e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

$(document).ready(function () {
    $("#myother").click(function () {
        $("#other").css("display", "block")
        $("#yarn").css("display", "none")
    })
    $("#myyarn").click(function () {
        $("#other").css("display", "none")
        $("#yarn").css("display", "block")
    })
    document.getElementById("myyarn").click();


});

window.onload = function (e) {
    var tbl = document.getElementsByClassName('timestamp')
    var numRows = tbl.length
    for (let i = 0; i < numRows; i++) {
        const element = tbl[i];
        var created_at = element.textContent
        var a = moment.utc(created_at).local().format('MM/DD/YYYY');
        console.log(a)
        element.innerHTML = a;
    }
}

//report 
console.log('hello in script')

function downloadCSV(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV file
    csvFile = new Blob([csv], {
        type: "text/csv"
    });

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // Create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Hide download link
    downloadLink.style.display = "none";

    // Add the link to DOM
    document.body.appendChild(downloadLink);

    // Click download link
    downloadLink.click();
}

function exportTableToCSV(filename) {
    var csv = [];
    var rows = document.querySelectorAll("table tr");

    for (var i = 0; i < rows.length; i++) {
        var row = [],
            cols = rows[i].querySelectorAll("td, th");

        for (var j = 0; j < cols.length; j++)
            row.push(cols[j].innerText);

        csv.push(row.join(","));
    }

    // Download CSV file
    downloadCSV(csv.join("\n"), filename);
}
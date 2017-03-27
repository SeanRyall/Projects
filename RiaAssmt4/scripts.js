/**
 * Created by sean_ryall on 2017-03-21.
 */



var t = $('#title');
var b = $('#body');
var d = $('#date');

var row_index;
var title;
var body;
// var id =

// now = new Date();
// todayDate = dateFormat(now, "dddd, mmmm dS, yyyy, h:MM:ss TT");
// d.html('Last update: <span style="font-size:18px">'+todayDate+'</span>');
//get

function setRow()
{
    $(document).on('click', '.update-button', function () {
        row_index = $(this).closest("tr").find(".tdid").text();
        title = $(this).closest("tr").find("#title").text();
        body = $(this).closest("tr").find("#body").text();
    });
}


function Post(title, body, date) {
    this.title = title;
    this.body = body;
    this.date = date;
}

function createDialog(title, text, options) {
    return $("<div class='dialog' title='" + title + "'><p>" + text + "</p></div>").dialog(options);
}

function formatDate(date) {
    var monthNames = [
        "January", "February", "March",
        "April", "May", "June", "July",
        "August", "September", "October",
        "November", "December"
    ];
    var day = date.getDate();
    var monthIndex = date.getMonth();
    var year = date.getFullYear();
    return day + ' ' + monthNames[monthIndex] + ' ' + year;
}


function LoadPosts() {
    // $('#cells').html('Loading Data...');
    $("#cells").empty();


    $.ajax({
        type: "GET",
        url: 'http://localhost:3000/posts',
        contentType: 'application/json',
        success: function (response) {
            console.log(response);

            for (var i = 0; i < response.length; i++) {
                $("#cells").append('<tr><td class="container"><div id="title">' + response[i].title + '</div></td>' +
                    '<td class="container"><div id="body">' + response[i].body + '</div></td><td class="container"><div id="date">' + response[i].date + '</div></td>' +
                    '<td><button class="update-button" style="width: 49.2%">EDIT</button>\
                            <button class="delete-button" style="width: 49.2%">DELETE</td><td class="tdid"><div>' + response[i].id + '</div></td></tr>');


            }
            // $("#cells").append();
        }

    })
}
$(document).ready(function(){
    $('#cells').fadeIn();
});

$(document).ready(function(){

    // $("document").fadeIn("slow");
    setRow();
    LoadPosts();




});




//post
function AddPost() {
    $(document).on('click', '#post-submit', function(){
        var date = formatDate(new Date());
        setRow();
        debugger;
        if(t.val() === title){
            alert("heyyyy");
            // var d = new Date();
            // var realmonth = d.getMonth() + 1;
            // var datestring = d.getFullYear() + "-" + realmonth + "-" + d.getDate() + "  " + d.getHours() + ":" +  d.getMinutes();
            // $("#spinner").show();
            $.ajax({
                beforeSend: function() {
                    $('#loader').show();
                },
                complete: function(){
                    $('#loader').hide();
                },
                url: 'http://localhost:3000/posts/' + row_index,
                type: 'PATCH',
                data: {
                    title: t.val(),
                    body: b.val(),
                    date: "shitake"
                },
                dataType: 'json',
                error: function (request, status, error) {
                    alert(request.responseText);
                },
                success:function(){
                }

            });

        }



        if(t.val() ===""|| t.val() ===null){
            alert("Please enter a title...");
        }
        // else if(b.val() ==""|| b.val() ==null){
        //     alert("Please enter a body...");
        // }
        // else if(b.val() ==""|| b.val() ==null && t.val() ==""|| t.val() ==null){
        //     alert("Please enter a title and body...");
        // }
        else {
            $.ajax({
                beforeSend: function() {
                    $('#loader').show();
                },
                complete: function(){
                    $('#loader').hide();
                },
                type: "POST",
                url: 'http://localhost:3000/posts',
                data: {title: t.val(), body: b.val(), date: date},
                success: alert("added")
            });
            LoadPosts();
        }
    });
}

AddPost();

//delete
function DeletePost() {
    // debugger;
    $(document).on('click', '.delete-button', function(){
        row_index = $(this).closest("tr").find(".tdid").text();
        event.stopPropagation();
        if(confirm("Do you want to delete?")) {


            event.preventDefault();
            $.ajax({
                beforeSend: function() {
                    $('#loader').show();
                },
                complete: function(){
                    $('#loader').hide();
                },
                method: 'DELETE',
                url: 'http://localhost:3000/posts/' + row_index,
                success: function (result) {
                },
                error: function (request, msg, error) {
                    console.log(result);
                    alert("Problem...")
                }
            });

            LoadPosts();
        }

    });
}

DeletePost();



function UpdatePost() {
    $(document).on('click', '.update-button', function () {
        $("a").click(function(event){
            event.preventDefault();
        });


        row_index = $(this).closest("tr").find(".tdid").text();
        var title = $(this).closest("tr").find("#title").text();
        var body = $(this).closest("tr").find("#body").text();

        // console.log(body + title + row_index);
        // alert(title + body + row_index);
        t.val(title);
        b.val(body);
        // t.val(t.val() + "title is " + title);
        // b.append("body is " + body);
        // debugger;
        return false;


        // var row_index = $(this).closest("tr").find(".tdid").text();
        // var title = $(this).closest("tr").find(".title").text();
        // var body = $(this).closest("tr").find(".body").text();
        // alert("hhahahah");
        // t.val(title);
        // b.val(body);
        // // t.val(t.val() + "title is " + title);
        // // b.append("body is " + body);
        // debugger;
    });
}


// $.ajax({
        //     url: "http://localhost:3000/posts/" + row_index,
        //     type: 'PUT',
        //     data: {title: t.val(), body: b.val()},
        //     dataType: 'json',
        //     error: function (request, status, error) {
        //         alert(request.responseText);
        //     },
        //     success:function(){
        //         alert("Stuffff");
        //         $("#id").data("id", id);
        //         $("#title").val(title);
        //         $("#body").val(body);
        //         // $("#spinner").hide();
        //         LoadPosts();
        //     }
        //
        // });


UpdatePost();


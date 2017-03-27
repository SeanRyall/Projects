/**
 * Created by sean_ryall on 2017-03-25.
 */

$(function() {

    var postID = $("#id");
    var postTitle = $("#title");
    var postBody = $("#body");
    var postButton = $("#post-submit");
    // var postTableDiv = $(".post_table_div");
    // var postTable = $("#post_table");
    // var postTableTitles = $("#post_table_titles");
    // var postTableBodies = $("#post_table_bodies");
    // var postTableDates = $("#post_table_dates");
    // var postTableActions = $("#post_table_actions");
    // var postTableEditButtonClass = ".table_edit_button";
    // var postTableDeleteButtonClass = ".table_delete_button";
    // var spinner = $(".spinner");
    var posts;


    function Post(title, body, date) {
        this.title = title;
        this.body = body;
        this.date = date;
    }

    // function showSpinner(hey) {
    //     if (hey)
    //         spinner.fadeIn();
    //     else
    //         spinner.fadeOut();
    // }

    //http://stackoverflow.com/questions/4879367/how-to-create-jquery-dialog-in-function
    function createDialog(title, text, options) {
        return $("<div class='dialog' title='" + title + "'><p>" + text + "</p></div>").dialog(options);
    }

    // function createPostTableRow(id, title, body, date) {
    //     var postTemplate = [`<tr data-id="${id}">`,
    //         `   <td class="title">${title}</td>`,
    //         `   <td class="body">${body}</td>`,
    //         `   <td class="data">${date}</td>`,
    //         `   <td class="table_buttons">`,
    //         `       <i class="material-icons table_edit_button">mode_edit</i>`,
    //         `       <i class="material-icons table_delete_button">delete</i>`,
    //         `   </td>`,
    //         `</tr>`].join("\n");
    //     return postTemplate;
    // }

    function refresh(e) {
        $.getJSON("http://localhost:3000/posts", function(data) {
            posts = data;
            $("#contact").children("tbody").html("");

            for (var i=0;i < response.length; i++) {
                $( "#cells" ).append( '<tr><td class="container"><div>' + response[i].title + '</div></td>' +
                    '<td class="container"><div>' + response[i].body + '</div></td><td class="container"><div>' +
                    response[i].date + '</div></td>' +
                    '<td><button class="update-button_' + i + '" style="width: 49%">UPDATE</button>\
                                <button class="delete-button_' + i + '" style="width: 49%">DELETE</td></tr>' );


            }

            postTable.tablesorter();
            showSpinner(false);
            postTableDiv.slideDown();
        });
    }

    //http://stackoverflow.com/questions/3552461/how-to-format-a-javascript-date
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

    function createPost(title, body) {
        var date = formatDate(new Date());
        var post = new Post(title, body, date);
        $.post("http://localhost:3000/posts", post, function() {
            refresh();
        }, "json").fail(function(data) {
            createDialog("Error", data.statusText, null);
            showSpinner(false);
        });
    }

    function updatePost(id, title, body) {
        var date = formatDate(new Date());
        var post = new Post(title, body, date);
        $.ajax({
            // url: `http://localhost:3000/posts/${id}`,
            data: post,
            type: 'put',
            dataType: 'json'
        }).done(function() {
            refresh();
        }).fail(function(data) {
            createDialog("Error", data.statusText, null);
            showSpinner(false);
        });
    }

    function deletePost(id) {
        $.ajax({
            // url: `http://localhost:3000/posts/${id}`,
            type: 'delete',
            dataType: 'json'
        }).done(function() {
            refresh();
            showSpinner(false);
        }).fail(function(data) {
            createDialog("Error", data.statusText, null);
            showSpinner(false);
        });
    }

    function clearForm() {
        $("#id").data("id", "");
        $("#title").val("");
        $("#body").val("");
        Materialize.updateTextFields();
    }

    $("#post-submit").click(function(e) {
        e.preventDefault();
        var id = $("#id").data("id");
        var title = $("#title").val();
        var body = $("#body").val();
        if (title != "" && body != "") {
            if (id != "" && id != null) {
                createDialog("Overwrite Changes", "Are you sure you want to overwrite this post?", {
                    buttons: {
                        "Overwrite": function() {
                            showSpinner(true);
                            updatePost(id, title, body);
                            $(this).dialog("close");
                        },
                        Cancel: function() {
                            $(this).dialog("close");
                        }
                    }
                });
            }
            else {
                createPost(title, body);
                clearForm();
            }
        }
        else {
            createDialog("Invalid Input", "Oops! Your post requires both a title and body.", null);
        }
    });

    clearButton.click(function(e) {
        e.preventDefault();
        clearForm();
    });

    $(document).on("click", postTableEditButtonClass, function() {
        var thisRow = $(this).closest("tr");
        var id = thisRow.data("id");
        var title = thisRow.find(".title").html();
        var body = thisRow.find(".body").html();
        $("#id").data("id", id);
        $("#title").val(title);
        $("#body").val(body);
        Materialize.updateTextFields();
    });

    $(document).on("click", postTableDeleteButtonClass, function() {
        var deleteButton = this;
        createDialog("Delete Note", "Are you sure you want to delete this note?", {
            buttons: {
                "Delete": function() {
                    var thisRow = $(deleteButton).closest("tr");
                    var id = thisRow.data("id");
                    showSpinner(true);
                    deletePost(id);
                    if (id == $("#id").data("id"))
                        clearForm();
                    $(this).dialog("close");
                },
                Cancel: function() {
                    $(this).dialog("close");
                }
            }
        });
    });

    showSpinner(true);
    refresh();

});

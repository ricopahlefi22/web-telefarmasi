$(document).ready(function () {
    read();
    setInterval(() => {
        read();
    }, 1000);

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
});

function read() {
    $.get("chat/read", {}, function (data) {
        $("#chatWrapper").html(data);
    });
}

$("#image").change(function () {
    if ($("#image").val()) {
        $("#submit")
            .prop("disabled", false)
            .removeClass("bg-secondary")
            .addClass("bg-success");

        $("#imageButton").addClass("bg-success text-white");
    } else {
        $("#submit")
            .prop("disabled", true)
            .removeClass("bg-success")
            .addClass("bg-secondary");

        $("#imageButton").removeClass("bg-success text-white");
    }
});

$("#message").keyup(function () {
    if ($("#message").val().length != 0) {
        $("#submit")
            .prop("disabled", false)
            .removeClass("bg-secondary")
            .addClass("bg-success");
    } else {
        $("#submit")
            .prop("disabled", true)
            .removeClass("bg-success")
            .addClass("bg-secondary");
    }
});

$("#chatForm").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
        url: $(this).attr("action"),
        method: $(this).attr("method"),
        data: new FormData(this),
        processData: false,
        dataType: "json",
        contentType: false,
        success: function () {
            $("#message").val("");
            $("#image").val(null);
            $("#submit")
                .prop("disabled", true)
                .removeClass("bg-success")
                .addClass("bg-secondary");
            $("#imageButton").removeClass("bg-success text-white");
        },
        error: function (error) {
            console.error(error);
            $("#image").val(null);
        },
    });
});

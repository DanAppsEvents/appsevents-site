$(document).ready(function() {

    var delay = 3000; // milliseconds
    var cookie_expire = 0; // days

    var cookie = localStorage.getItem("list-builder");
	
    if(cookie == undefined || cookie == null) {
        cookie = 0;
    }

    setTimeout(() => {
    $(document).on("mouseout", evt => {
        if(evt.toElement === null && evt.relatedTarget === null) {
            $(evt.currentTarget).off("mouseout");
            // An intent to exit has happened
			$("#list-builder").delay(delay).fadeIn("fast", () => {
            $("#popup-box").fadeIn("fast", () => {});
        });

        $("button[name=subscribe]").click(() => {
            $.ajax({
                type: "POST",
                url: $("#popup-form").attr("action"),
                data: $("#popup-form").serialize(),
                success: (data) => {
                    $("#popup-box-content").html("<p style='text-align: center'>Thank you for subscribing to The AppsEvents newsletter!</p>");
                }
            });
        });

        $("#popup-close").click(() => {
            $("#list-builder, #popup-box").hide();
            localStorage.setItem("list-builder", (new Date()).getTime());
        });
        }
    });
}, 5000);
	
	
});


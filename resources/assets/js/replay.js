import $ from "jquery/dist/jquery.slim"

$(function() {
    $(".logout-button").on("click", function(e) {
        e.preventDefault()
        $(this).parent("form").trigger("submit")
    })
})

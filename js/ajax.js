$(document).ready(function() {
    $('.btn-success').click(function() {
        var id = $(this).attr("id");
        console.log(id);

        if (confirm("Are you sure you want to delete this Member?")) {
            $.ajax({
                type: "POST",
                url: "delete_member.php",
                data: ({
                    id: id
                }),
                success: function(html) {
                    $(".delete" + id).fadeOut('slow');
                }
            });
        } else {
            return false;
        }
    });
});
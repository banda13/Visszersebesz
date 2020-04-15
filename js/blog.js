function read_all_post(container_id, limit = -1) {
    $(document).ready(function () {
        $.get("/api/blog/read_posts_name.php", function (posts_name) {
            console.log(posts_name);
            let arr = JSON.parse(posts_name);

            if(limit === -1){
                limit = arr.length;
            }
            for (let i = 0; i < limit; i++) {
                let name = arr[i];
                if(!name){
                    continue;
                }
                let id = name.replace(".html", "");

                let row_id = Math.floor(i / 3);
                if (i % 3 === 0) {
                    console.log("Append new row");
                    $("#" + container_id).append("<div id='row_" + row_id + "' class='row'></div>");
                    $("#row_" + row_id).append("<div id='" + id + "' class='col-md-6 col-sm-12 col-lg-4'></div>");
                } else if (i % 3 === 1) {
                    $("#row_" + row_id).append("<div id='" + id + "' class='col-md-6 col-sm-12 col-lg-4'></div>");
                } else {
                    $("#row_" + row_id).append("<div id='" + id + "' class='col-md-6 col-sm-12 col-lg-4'></div>");
                }


                $("#" + id).load("blog/posts/" + name, function () {
                    $("#" + id).fadeIn("slow");
                    $("#read_" + id).on("click", function () {
                        window.location.href = '/blog.php?post=' + name.replace(".html", "");
                    });

                    $("#link_" + id).attr("href", '/blog.php?post=' + name.replace(".html", ""));
                });
            }
        });
    });
}
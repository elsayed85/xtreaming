(function ($) {
    "use strict";
    $("body").on("click", ".btn-service", function (e) {
        var id = $(this).attr("data-embed");
        var name = $(this).find(".name").text();
        $(".btn-service").removeClass("selected");
        $(this).addClass("selected");
        $(".embed-play .play-btn").attr("data-embed", id);
        $(".embed-play").removeClass("d-none");
        $(".embed-code").addClass("d-none");
        if (name) {
            $("a.dropdown-toggle.btn-service span").text(name);
        }
        $(".embed-code").html("");
    });
    $("body").on("click", ".embed-play .play-btn", function (e) {
        var id = $(this).attr("data-id");
        $(".embed-play").addClass("d-none");
        $(".embed-code").removeClass("d-none");
        $(".spinner").removeClass("d-none");
        $.ajax({
            url: _URL + "/embed/"+ _SHOW_TYPE ,
            type: "POST",
            data: {
                movie_id: id,
                playlist_id: $(this).attr("data-embed"),
                serie_id: $(this).attr("data-epsid"),
                episode_number: $(this).attr("data-epn"),
                season_number : $(this).attr("data-snn"),

            },
            success: function (resp) {
                $(".embed-code").html(resp);
                $(".spinner").addClass("d-none");
                $("#player").removeClass("d-none");
                // var player = new Plyr(document.getElementById("player"));
                // player.on("ready", function (event) {
                //     var instance = event.detail.plyr;
                //     var hslSource = null;
                //     var sources = instance.media.querySelectorAll("source"),
                //         i;
                //     for (i = 0; i < sources.length; ++i) {
                //         if (
                //             sources[i].src.indexOf(".m3u8") > -1 ||
                //             sources[i].src.indexOf(".txt") > -1 ||
                //             sources[i].src.indexOf(".ts") > -1
                //         ) {
                //             hslSource = sources[i].src;
                //         }
                //     }
                //     if (hslSource !== null && Hls.isSupported()) {
                //         var hls = new Hls();
                //         hls.loadSource(hslSource);
                //         hls.attachMedia(instance.media);
                //         hls.on(Hls.Events.MANIFEST_PARSED, function () {
                //             console.log("MANIFEST_PARSED");
                //         });
                //     }
                // });
            },
        });
    });
    $(".btn-service.selected").trigger("click");
    $(document).on("click", "button.btn-follow", function (e) {
        if (!_Auth) {
            Snackbar.show({
                text: __("You must sign in"),
                customClass: "bg-danger",
            });
            return false;
        }
        e.preventDefault();
        var $button = $(this);
        var content_id = $(this).attr("data-id");
        if ($button.hasClass("active")) {
            $.ajax({
                url: _URL + "/ajax/follow",
                type: "POST",
                dataType: "json",
                data: { content_id: content_id },
            });
            $button.removeClass("active");
            $button.text(__("Follow"));
        } else {
            $.ajax({
                url: _URL + "/ajax/follow",
                type: "POST",
                dataType: "json",
                data: { content_id: content_id },
            });
            $button.addClass("active");
            $button.text(__("Following"));
        }
    });
    $("body").on(
        "change",
        '.collections input[name="collection"]',
        function (e) {
            var content_id = $('[name="post_id"]').val();
            var collection_id = $(this).val();
            $.ajax({
                url: _URL + "/ajax/savecollection",
                type: "POST",
                dataType: "json",
                data: { content_id: content_id, collection_id: collection_id },
                success: function (resp) {
                    $(".modal").modal("hide");
                    Snackbar.show({
                        text: resp.text,
                        customClass: "bg-" + resp.status,
                    });
                },
            });
            return false;
        }
    );
    $(".action-btns .action-btn").on("click", function (e) {
        var id = $(this).attr("data-id");
        if (!_Auth) {
            Snackbar.show({
                text: __("You must sign in"),
                customClass: "bg-danger",
            });
            return false;
        }
        e.preventDefault();
        var UP = "up",
            DOWN = "down",
            REMOVE_UP = "-up",
            REMOVE_DOWN = "-down",
            type,
            $el = $(e.currentTarget),
            $votes = $el.parent(),
            $upvote = $votes.find(".like"),
            $downvote = $votes.find(".dislike"),
            $upvotes = $votes.find(".like span"),
            $downvotes = $votes.find(".dislike span"),
            upvotes = parseInt($upvotes.data("votes")),
            downvotes = parseInt($downvotes.data("votes")),
            setUpvotes = function (val) {
                $upvotes.data("votes", val).text(val || "0");
            },
            setDownvotes = function (val) {
                $downvotes.data("votes", val).text(val || "0");
            };
        if ($el.hasClass("like")) {
            if ($el.hasClass("active")) {
                $el.removeClass("active");
                setUpvotes(upvotes - 1);
                type = REMOVE_UP;
            } else {
                type = UP;
                if ($downvote.hasClass("active")) {
                    $downvote.removeClass("active");
                    setDownvotes(downvotes - 1);
                }
                $el.addClass("active");
                setUpvotes(upvotes + 1);
            }
        } else {
            if ($el.hasClass("active")) {
                $el.removeClass("active");
                setDownvotes(downvotes - 1);
                type = REMOVE_DOWN;
            } else {
                type = DOWN;
                if ($upvote.hasClass("active")) {
                    $upvote.removeClass("active");
                    setUpvotes(upvotes - 1);
                }
                $el.addClass("active");
                setDownvotes(downvotes + 1);
            }
        }
        $.ajax({
            url: _URL + "/ajax/reaction",
            type: "post",
            data: { type: type, id: id },
        });
    });
    if ($(".comments").length > 0) {
        var content_id = $(".comments").attr("data-content");
        var post_type = $(".comments").attr("data-type");
        new Comments($(".comments"), {
            ajaxUrl: _URL + "/comments",
            content: content_id,
            type: post_type,
            sortBy: 1,
            replies: true,
            maxDepth: 1,
        });
    }
})(jQuery);

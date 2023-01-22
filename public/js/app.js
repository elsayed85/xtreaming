(function ($) {
    "use strict";
    if ($(".media,.lazy").length > 0) {
        $(".media,.lazy").lazy();
    }
    $("body").on("click", ".dropdown-active", function (e) {
        e.stopPropagation();
    });
    $(".filter-item .dropdown-menu li").on("click", function () {
        var value = $(this).attr("value");
        var text = $(this).text();
        var item = $(this);
        item.closest(".filter-item")
            .find("li.selected")
            .removeClass("selected");
        $(this).addClass("selected");
        var id = item.closest(".filter-item").attr("id");
        $("#" + id)
            .find("input")
            .val(value);
        $("#" + id)
            .find(".filter-value")
            .html(text);
    });
    $(".filter-item .dropdown-menu li.selected").trigger("click");
    $("[data-more]").each(function () {
        var element = $(this).data("element");
        var limit = $(this).data("limit");
        var box = $(this).find(element).length;
        if (box > limit) {
            if (
                $(window).width() > 1000 ||
                !$(this).hasClass("mobile-disable")
            ) {
                $(element, this)
                    .eq(limit - 1)
                    .nextAll()
                    .hide()
                    .addClass("toggle");
                $(this).append(
                    '<div class="more">' + __("Show more") + "</div>"
                );
            }
        }
    });
    $("[data-more]").on("click", ".more", function () {
        if ($(this).hasClass("less")) {
            $(this).text("Show more").removeClass("less");
        } else {
            $(this).text("Show less").addClass("less");
        }
        $(this).siblings(".toggle").toggle();
    });
    $("[data-textmore]").each(function () {
        var element = $(this).data("element");
        var limit = $(this).data("limit");
        var box = $(this).find(".text-content").text();
        if (box.length > limit) {
            if (
                $(window).width() > 1000 ||
                !$(this).hasClass("mobile-disable")
            ) {
                $(this).find(".text-content").addClass("toggle");
                $(this).append(
                    '<div class="more">' + __("Show more") + "</div>"
                );
            }
        }
    });
    $("[data-textmore]").on("click", ".more", function () {
        if ($(this).hasClass("less")) {
            $(this).text("Show more").removeClass("less");
        } else {
            $(this).text("Show less").addClass("less");
        }
        $(this).find(".text-content").siblings(".toggle").toggle();
    });
    if (_Auth) {
        $.ajax({
            url: _URL + "/ajax/notifications",
            type: "GET",
            dataType: "json",
            success: function (resp) {
                if (resp.total > 0) {
                    $(".notification-btn").append('<div class="on"></div>');
                }
                if (resp.data != null) {
                    $(".notifications").empty();
                    $("#card-notification")
                        .tmpl(resp.data)
                        .appendTo(".notifications");
                }
            },
        });
    }
    var $modal = $(".modal-cookie");
    var cookies = localStorage.getItem("modal_cookies");
    if (!cookies) {
        $modal.addClass("show");
    } else {
        $modal.removeClass("show");
    }
    $("body").on("click", ".modal-cookie .btn", function (e) {
        localStorage.setItem("modal_cookies", 1);
        $modal.removeClass("show");
    });
    var $ads = $(".ads-sticky");
    var adscookies = null;
    if (!adscookies) {
        $ads.addClass("show");
    } else {
        $ads.removeClass("show");
    }
    $("body").on("click", ".ads-close", function (e) {
        $ads.removeClass("show");
    });
    $("body").on("click", ".scroll-up", function (e) {
        $("html, body").animate({ scrollTop: 0 }, 600);
    });
    if ($(window).width() > 1000) {
        $(document).scroll(function () {
            if ($(this).scrollTop() > 150) {
                $(".scroll-up").addClass("show");
            } else {
                $(".scroll-up").removeClass("show");
            }
        });
    }
    $(".search-btn").on("click", function (event) {
        var id = $(this).attr("id");
        $(".header-search").removeClass("d-none");
        $(".video-search").focus();
    });
    $(".close-btn").on("click", function (event) {
        var id = $(this).attr("id");
        $(".header-search").addClass("d-none");
    });
    $(".media-select .media-btn").on("click", function (event) {
        var id = $(this).attr("id");
        $("#file-" + id).click();
    });
    $(".media-input").on("change", function (event) {
        var id = $(this).attr("data-preview");
        $("." + id).addClass("media-selected");
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("." + id).css(
                    "background-image",
                    "url(" + e.target.result + ")"
                );
                $('[name="image-url"]').val("");
            };
            reader.readAsDataURL(this.files[0]);
        }
    });
    $("body").on("click", ".media-remove", function () {
        var id = $(this).attr("data-id");
        if (id) {
            $.ajax({
                type: "POST",
                url: _URL + "/ajax/delete/avatar",
                data: "id=" + id,
                success: function (resp) {
                    $(".media-select").css("background-image", "");
                    Snackbar.show({
                        text: __("Deletion is successful"),
                        customClass: "bg-success",
                    });
                },
            });
        }
    });
    $("body").on("click", '[data-toggle="modal"]', function () {
        $(".modal").modal("hide");
        $(".aside").modal("hide");
        $($(this).data("target") + " .modal-dialog").load(
            $(this).data("remote"),
            function () {
                if ($(".media,.lazy").length > 0) {
                    $(".media,.lazy").lazy();
                }
            }
        );
    });
    $(".modal").on("hide.bs.modal", function (e) {
        $(".modal-dialog").html("");
    });
    $.typeahead({
        input: ".video-search",
        minLength: 1,
        debug: true,
        order: "asc",
        dynamic: true,
        delay: 20,
        loadingAnimation: true,
        highlight: true,
        backdrop: false, // Add a backdrop behind Typeahead results
        backdropOnFocus: false,
        cancelButton: true, // If text is detected in the input, a cancel button will be available to reset the input (pressing ESC also cancels)
        template: function (query, item) {
            return (
                '<div class="d-flex align-items-center" data-id="{{url}}">' +
                '<div class="media mr-2" style="background-image:url({{image}})"></div>' +
                '<div class="ml-2 caption">' +
                '<div class="name">{{name}}</div>' +
                '<div class="second-name">{{year}}</div>' +
                '<div class="text-muted text-12">{{type}}</div>' +
                "</div>" +
                "</div>"
            );
        },
        group: { template: "{{group}}" },
        emptyTemplate: '"{{query}}" ' + __("no results"),
        source: {
            Results: {
                display: "name",
                ajax: function (query) {
                    return {
                        type: "post",
                        url: _URL + "/search/suggestions",
                        path: "data",
                        data: { q: "{{query}}" },
                        callback: {
                            done: function (data) {
                                return data;
                            },
                        },
                    };
                },
            },
        },
        backdrop: {
            opacity: 0.7,
            filter: "alpha(opacity=7)",
            "background-color": "#000",
        },
        callback: {
            onClick: function (node, a, item, event) {
                window.location.href = item.url;
            },
        },
    });
    $("body").on(
        {
            click: function () {
                var $this = $(this),
                    dataTitle = $this.attr("data-title"),
                    dataSef = $this.attr("data-sef");
                switch (dataType) {
                    case "facebook":
                        shareWindow(
                            "https://www.facebook.com/sharer/sharer.php?u=" +
                                dataSef
                        );
                        break;
                    case "twitter":
                        shareWindow(
                            "https://twitter.com/intent/tweet?text=" +
                                encodeURIComponent(dataTitle) +
                                " 🎬 " +
                                encodeURIComponent(dataSef)
                        );
                        break;
                }
                function shareWindow(url) {
                    window.open(url, "_blank");
                }
            },
        },
        ".share-link"
    );
})(jQuery);

$(document).ready(function () {
    // This will fire when document is ready:
    $(window)
        .resize(function () {
            // This will fire each time the window is resized:
            if ($(window).width() >= 1024) {
                // if larger or equal
                $(".element").show();
            } else {
                // if smaller
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 0) {
                        $(".fadein_out").fadeOut();
                    } else {
                        $(".fadein_out").fadeIn();
                    }
                });
            }
        })
        .resize(); // This will simulate a resize to trigger the initial run.
});

$(function () {
    var contentToggle = 0;
    $(".bar_icon").on("click", function () {
        console.log('show');
        if (contentToggle == 0) {
            $(".hide-me").animate({
                width: "20%",
            });
            contentToggle = 1;
        } else if (contentToggle == 1) {
            $(".hide-me").animate({
                width: "0%",
            });
            contentToggle = 0;
        }
    });
});

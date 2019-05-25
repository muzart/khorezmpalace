!function () {
    "use strict";
    var e = {
        init: function () {
            this.module()
        }, module: function () {
            this.queryLoader(), this.sticky(), this.viewport(), this.flickr(), this.menu(), this.knob(), this.fitvids(), this.progressBar(), this.tubular(), this.zoomImage(), this.datePicker(), this.roomSelect(), this.parallaxEff(), this.customScroll()
        }, queryLoader: function () {
            jQuery(document).ready(function () {
                function t() {
                    jQuery("#home").addClass("show-content"), e.simpleSlider()
                }

                jQuery("body").queryLoader2({
                    backgroundColor: "#FBFBFB",
                    barColor: "#E48D40",
                    percentage: !1,
                    barHeight: 10,
                    minimumTime: 3e3,
                    overlayId: "theme-loader",
                    onComplete: t()
                })
            })
        }, sticky: function () {
            jQuery(".sticky-bar").length && jQuery(".sticky-bar").sticky({topSpacing: 0})
        }, fitvids: function () {
            var e = jQuery("noscript").text();
            1 === e.trim().search("iframe") && jQuery("noscript").parent().append(e), jQuery("#home").fitVids({customSelector: "iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com']"})
        }, viewport: function () {
            jQuery(window).scroll(function () {
                jQuery(".small-footer:in-viewport").each(function () {
                })
            })
        }, parallaxEff: function () {
            jQuery(window).stellar()
        }, tubular: function () {
            jQuery(".full-video").length && jQuery(".full-video").tubular({videoId: "ssutK1Gei4A", start: 3})
        }, flickr: function () {
            jQuery(".flickr-widget").each(function () {
                var e = jQuery(this), t = e.attr("data-userid"), o = parseInt(e.attr("data-items"));
                $.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?lang=en-us&format=json&id=" + t + "&jsoncallback=?", function (t) {
                    for (var i = 0; o > i && i < t.items.length; i++) {
                        var r = function () {
                            if (t.items[i].media.m) {
                                {
                                    var o = jQuery("<a>").addClass("flickr-link").attr("href", t.items[i].link).attr("target", "_blank");
                                    jQuery("<img>").addClass("flickr-img").attr("src", t.items[i].media.m).attr("alt", "").each(function () {
                                        var e = this, t = jQuery(this), i = function () {
                                            o.append(e)
                                        }, r = !1, n = function () {
                                            r || (r = !0, i())
                                        }, s = function () {
                                            e.complete && 0 !== t.height() && n()
                                        };
                                        s(), jQuery(this).load(function () {
                                            n()
                                        })
                                    })
                                }
                                e.append(jQuery('<li class="col-xs-3 col-sm-4 col-md-4">').append(o))
                            }
                        };
                        r()
                    }
                })
            })
        }, twitter: function () {
            var e = function (e) {
                return e = e.replace(/(https?:\/\/\S+)/gi, function (e) {
                    return '<a href="' + e + '">' + e + "</a>"
                }), e = e.replace(/(^|)@(\w+)/gi, function (e) {
                    return '<a href="http://twitter.com/' + e + '">' + e + "</a>"
                }), e = e.replace(/(^|)#(\w+)/gi, function (e) {
                    return '<a href="http://search.twitter.com/search?q=' + e.replace(/#/, "%23") + '">' + e + "</a>"
                })
            };
            jQuery(".twitter-widget").each(function () {
                var t = jQuery(this), o = new Date, i = "Loading tweets..", r = t.append("<p>" + i + "</p>");
                t.append(r);
                var n = t.attr("data-user"), s = parseInt(t.attr("data-posts"), 10);
                $.getJSON("php/twitter.php?user=" + n, function (t) {
                    r.empty();
                    for (var i = 0; s > i && i < t.length; i++) {
                        var n, u = Math.floor((o.getTime() - Date.parse(t[i].created_at)) / 1e3), a = u % 60;
                        u = Math.floor(u / 60);
                        var c = u % 60;
                        if (c) {
                            u = Math.floor(u / 60);
                            var l = u % 60;
                            if (l) {
                                u = Math.floor(u / 60);
                                var d = u % 24;
                                if (d) {
                                    u = Math.floor(u / 24);
                                    var p = u % 7;
                                    n = p ? p + " week" + (1 == p ? "" : "s") + " ago" : d + " day" + (1 == d ? "" : "s") + " ago"
                                } else n = l + " hour" + (1 == l ? "" : "s") + " ago"
                            } else n = c + " minute" + (1 == c ? "" : "s") + " ago"
                        } else n = a + " second" + (1 == a ? "" : "s") + " ago";
                        var f = "<p>" + e(t[i].text) + "<span>" + n + "</span></p>";
                        r.append(f)
                    }
                })
            })
        }, menu: function () {
            var e, t = jQuery(".main-nav"), o = jQuery(".mobile-switch");
            jQuery(window).width() < 992 && t.addClass("mobile-menu"), jQuery(window).resize(function (e) {
                e.target.innerWidth < 992 ? t.addClass("mobile-menu") : (t.removeClass("mobile-menu"), jQuery("body").removeClass("acitve-mobile"))
            }), e = jQuery(".mobile-menu"), o.click(function (e) {
                e.preventDefault(), jQuery("body").toggleClass("acitve-mobile")
            })
        }, simpleSlider: function () {
            jQuery(".simple-slider").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                autoHeight: !1,
                effect: "random",
                customLink: ".custom-controls a",
                continuous: !0,
                updateBefore: !0,
                animationZIndex: 10,
                auto: !0
            }), jQuery(".slider-helper").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                autoHeight: !1,
                effect: "fadeOutIn",
                customLink: ".custom-controls a",
                continuous: !0,
                updateBefore: !0,
                animationZIndex: 10
            });
            var e = jQuery("#rooms-slider").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                slideCount: 3,
                moveCount: 1,
                speed: 500,
                continuous: !0,
                updateBefore: !0,
                customLink: "#controls-carousel a"
            });
            jQuery("#rooms-slider").length && (jQuery(window).width() < 990 && jQuery(window).width() > 768 ? e.setOption("slideCount", 2) : jQuery(window).width() < 768 ? e.setOption("slideCount", 1) : e.setOption("slideCount", 3), jQuery(window).resize(function () {
                jQuery(window).width() < 990 && jQuery(window).width() > 768 ? e.setOption("slideCount", 2) : jQuery(window).width() < 768 ? e.setOption("slideCount", 1) : e.setOption("slideCount", 3)
            }));
            var t = jQuery(".preview-room-nav").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                slideCount: 8,
                moveCount: 1,
                speed: 500,
                continuous: !0,
                updateBefore: !0,
                customLink: ".preview-room-nav b"
            });
            jQuery("#portfolio-slider").length && jQuery(window).resize(function () {
                jQuery(window).width() < 992 ? t.setOption("slideCount", 1) : t.setOption("slideCount", 3)
            }), jQuery("#review-slider").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                slideCount: 1,
                moveCount: 1,
                speed: 500,
                continuous: !0,
                updateBefore: !0,
                customLink: ".review-nav"
            }), jQuery(".preview-room").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                autoHeight: !1,
                effect: "fadeOutIn",
                customLink: ".preview-room-nav a",
                continuous: !0,
                updateBefore: !0,
                animationZIndex: 10
            }), jQuery("#testimonials-slider").sudoSlider({
                numeric: !1,
                responsive: !0,
                moveCount: 1,
                speed: 1e3,
                updateBefore: !0,
                vertical: !0,
                continuous: !0,
                auto: !0,
                prevhtml: ' <a href="#" class="prev-nav"><i class="icon-503"></i></a> ',
                nexthtml: ' <a href="#" class="next-nav"><i class="icon-515"></i></a> ',
                controlsattr: 'id="controls-testimonials"'
            }), jQuery(".booking-slider").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                slideCount: 1,
                moveCount: 1,
                speed: 500,
                continuous: !1,
                updateBefore: !0,
                customLink: ".nav-step"
            }), jQuery(".portfolio-slider").sudoSlider({
                numeric: !1,
                responsive: !0,
                moveCount: 1,
                speed: 1e3,
                auto: !1,
                continuous: !0,
                updateBefore: !0,
                prevhtml: ' <a href="#" class="prev-nav"><i class="icon-517"></i></a> ',
                nexthtml: ' <a href="#" class="next-nav"><i class="icon-501"></i></a> ',
                controlsattr: 'id="controls"',
                numericattr: 'class="slider-nav"'
            }), jQuery(".event-slider").sudoSlider({
                numeric: !1,
                responsive: !0,
                controlsShow: !1,
                moveCount: 1,
                speed: 1e3,
                auto: !1,
                continuous: !0,
                updateBefore: !0,
                customLink: ".event-nav a, #controls > a"
            }), jQuery(".event-nav").sudoSlider({
                numeric: !1,
                controlsShow: !1,
                responsive: !0,
                slideCount: 4,
                moveCount: 1,
                speed: 500,
                continuous: !0,
                updateBefore: !0,
                customLink: ".event-nav a, #controls > a"
            })
        }, knob: function () {
            function e() {
                jQuery(".statistic-item").each(function () {
                    var e = jQuery(this).val(), t = jQuery(this), o = 0, i = setInterval(function () {
                        e >= o ? (t.val(o).trigger("change"), o++) : clearInterval(i)
                    }, 50)
                })
            }

            jQuery(".statistic-item").knob({
                thickness: ".1",
                lineCap: "round",
                fgColor: "#ffffff",
                bgColor: "rgba(255,255,255,0.2)",
                readOnly: !0,
                displayInput: !0,
                font: "Oxygen",
                fontWeight: "300",
                step: 1
            }), e()
        }, progressBar: function () {
            var e = jQuery(".progresive-bar-items > li"), t = jQuery(".progresive-bar-items > li span");
            e.each(function (e) {
                var o = t.eq(e).data("progress"), i = 100;
                o = 100 - o;
                var r = setInterval(function () {
                    i > o ? (i % 2 == 0 ? i += 3 : i -= 5, t.eq(e).css("right", i + "%")) : clearInterval(r)
                }, 20)
            })
        }, datePicker: function () {
            jQuery("#BookingForm_check_in").datetimepicker({
                format: "m-d-Y", onShow: function () {
                    this.setOptions({maxDate: jQuery("#BookingForm_check_out").val() ? new Date(jQuery("#BookingForm_check_out").val()) : !1})
                }, timepicker: !1
            }), jQuery("#BookingForm_check_out").datetimepicker({
                format: "m-d-Y", onShow: function () {
                    this.setOptions({minDate: jQuery("#BookingForm_check_in").val() ? new Date(jQuery("#BookingForm_check_in").val()) : !1})
                }, timepicker: !1
            })
        }, roomSelect: function () {
            var e = jQuery(".room-select").parent();
            e.click(function (t) {
                t.preventDefault(), e.not(jQuery(this)).find("ul").hide(), jQuery(this).find("ul").toggle()
            }), jQuery("html").click(function () {
                e.find("ul").hide()
            }), e.each(function () {
                jQuery(this).click(function (e) {
                    e.stopPropagation()
                })
            }), e.each(function () {
                jQuery(this).find("ul li").click(function (e) {
                    e.preventDefault(), jQuery(this).parent().parent().find("input").attr("value", jQuery(this).text())
                })
            })
        }, zoomImage: function () {
            jQuery(".zoom-image").swipebox()
        }, customScroll: function () {
            if (jQuery("#custom-scroll").length) {
                var e, t = jQuery("#custom-scroll"), o = t.height(), i = jQuery("#custom-scroll > ul"), r = i[0].scrollHeight, n = jQuery(".scroll-bar span"), s = Math.round(Math.round(o / r * 100) / 100 * o), u = o - s;
                r > o ? (n.height(s), i.scroll(function () {
                    e = jQuery(this).scrollTop(), n.css("top", Math.round(e / u * 100))
                })) : n.parent().hide()
            }
        }
    };
    e.init()
}(jQuery);
! function() {
    var e, n, s;
    if (e = document.getElementById("site-navigation"), e && (n = e.getElementsByTagName("button")[0], "undefined" != typeof n)) {
        if (s = e.getElementsByTagName("ul")[0], "undefined" == typeof s) return void(n.style.display = "none"); - 1 === s.className.indexOf("nav-menu") && (s.className += " nav-menu"), n.onclick = function() {
            -1 !== e.className.indexOf("toggled") ? e.className = e.className.replace(" toggled", "") : e.className += " toggled"
        }
    }
}(),
function() {
    var e = navigator.userAgent.toLowerCase().indexOf("webkit") > -1,
        n = navigator.userAgent.toLowerCase().indexOf("opera") > -1,
        s = navigator.userAgent.toLowerCase().indexOf("msie") > -1;
    (e || n || s) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function() {
        var e = document.getElementById(location.hash.substring(1));
        e && (/^(?:a|select|input|button|textarea)$/i.test(e.tagName) || (e.tabIndex = -1), e.focus())
    }, !1)
}(), jQuery(function(e) {
        e(document).ready(function() {
            $window = e(window), e('section[data-type="background"]').each(function() {
                var n = e(this);
                e(window).scroll(function() {
                    var e = -($window.scrollTop() / n.data("speed")),
                        s = "50% " + e + "px";
                    n.css({
                        backgroundPosition: s
                    })
                })
            }), e('header[data-type="background"]').each(function() {
                var n = e(this);
                e(window).scroll(function() {
                    var e = -($window.scrollTop() / n.data("speed")),
                        s = "50% " + e + "px";
                    n.css({
                        backgroundPosition: s
                    })
                })
            })
        })
    }), document.createElement("article"), document.createElement("section"),
    function(e) {
        e.fn.jPushMenu = function(n) {
            var s = e.extend({}, e.fn.jPushMenu.defaultOptions, n);
            e("body").addClass(s.bodyClass), e(this).addClass("jPushMenuBtn"), e(this).click(function() {
                var n = "",
                    t = "";
                return e(this).is("." + s.showLeftClass) ? (n = ".cbp-spmenu-left", t = "toright") : e(this).is("." + s.showRightClass) ? (n = ".cbp-spmenu-right", t = "toleft") : e(this).is("." + s.showTopClass) ? n = ".cbp-spmenu-top" : e(this).is("." + s.showBottomClass) && (n = ".cbp-spmenu-bottom"), e(this).toggleClass(s.activeClass), e(n).toggleClass(s.menuOpenClass), e(this).is("." + s.pushBodyClass) && e("body").toggleClass("cbp-spmenu-push-" + t), e(".jPushMenuBtn").not(e(this)).toggleClass("disabled"), !1
            });
            var t = {
                close: function() {
                    e(".jPushMenuBtn,body,.cbp-spmenu").removeClass("disabled active cbp-spmenu-open cbp-spmenu-push-toleft cbp-spmenu-push-toright")
                }
            };
            s.closeOnClickInside && (e(document).click(function() {
                t.close()
            }), e(".cbp-spmenu,.toggle-menu").click(function(e) {
                e.stopPropagation()
            })), s.closeOnClickOutside && (e(document).click(function() {
                t.close()
            }), e(".cbp-spmenu,.toggle-menu").click(function(e) {
                e.stopPropagation()
            })), s.closeOnClickLink && e(".cbp-spmenu a").on("click", function() {
                t.close()
            })
        }, e.fn.jPushMenu.defaultOptions = {
            bodyClass: "cbp-spmenu-push",
            activeClass: "menu-active",
            showLeftClass: "menu-left",
            showRightClass: "menu-right",
            showTopClass: "menu-top",
            showBottomClass: "menu-bottom",
            menuOpenClass: "cbp-spmenu-open",
            pushBodyClass: "push-body",
            closeOnClickOutside: !0,
            closeOnClickInside: !0,
            closeOnClickLink: !0
        }
    }(jQuery), jQuery(function(e) {
        e(document).ready(function() {
            e(".toggle-menu").jPushMenu()
        })
    });
//Click event to scroll to top
	$('#top').click(function(){
		$('html,body').animate({scrollTop : 0},600);
		return false;
	});
//interior page logo, change when >= nav collapse screen size

$(document).ready(function () {
    logoChange();
});

$(window).resize(function() {
    logoChange();
});


function logoChange() {
	if($(window).width() <= 768){
	  $('#interior-logo').attr('src','http://volunteerflorida.sachsdigital.com/wp-content/themes/vf/img/logo_home.png', '../wp-content/themes/vf/img/logo_interior.png');
	} else {
	  $('#interior-logo').attr('src','http://volunteerflorida.sachsdigital.com/wp-content/themes/vf/img/logo_interior.png', '../wp-content/themes/vf/img/logo_home.png');
	}
}

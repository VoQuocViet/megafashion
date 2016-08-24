jQuery(document).ready(function() {
  "use strict";
  /* menu */
  jQuery(".toggle").on("click", function() {
    return jQuery(".submenu").is(":hidden") ? jQuery(".submenu").slideDown("fast") : jQuery(".submenu").slideUp("fast"), !1
  }), jQuery(".topnav").accordion({
    accordion: !1
    , speed: 300
    , closedSign: "+"
    , openedSign: "-"
  }), jQuery("#nav > li").hover(function() {
    var e = jQuery(this).find(".level0-wrapper");
    e.hide(), e.css("left", "0"), e.stop(true, true).delay(150).fadeIn(300, "easeOutCubic")
  }, function() {
    jQuery(this).find(".level0-wrapper").stop(true, true).delay(300).fadeOut(300, "easeInCubic")
  });
  jQuery("#nav li.level0.drop-menu").mouseover(function() {
      return jQuery(window).width() >= 740 && jQuery(this).children("ul.level1").fadeIn(100), !1
    }).mouseleave(function() {
      return jQuery(window).width() >= 740 && jQuery(this).children("ul.level1").fadeOut(100), !1
    }), jQuery("#nav li.level0.drop-menu li").mouseover(function() {
      if (jQuery(window).width() >= 740) {
        jQuery(this).children("ul").css({
          top: 0
          , left: "165px"
        });
        var e = jQuery(this).offset();
        e && jQuery(window).width() < e.left + 325 ? (jQuery(this).children("ul").removeClass("right-sub"), jQuery(this).children("ul").addClass("left-sub"), jQuery(this).children("ul").css({
          top: 0
          , left: "-167px"
        })) : (jQuery(this).children("ul").removeClass("left-sub"), jQuery(this).children("ul").addClass("right-sub")), jQuery(this).children("ul").fadeIn(100)
      }
    }).mouseleave(function() {
      jQuery(window).width() >= 740 && jQuery(this).children("ul").fadeOut(100)
    }), slideEffectAjax()
    /* best-seller-slider */
  jQuery("#best-seller-slider .slider-items").owlCarousel({
      items: 4
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    })
    /* featured-slider */
  jQuery("#featured-slider .slider-items").owlCarousel({
      items: 4
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), /* recommend-slider */
    jQuery("#recommend-slider .slider-items").owlCarousel({
      items: 6
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), /* brand-logo-slider */
    jQuery("#brand-logo-slider .slider-items").owlCarousel({
      autoplay: !0
      , items: 6
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), /*  Category Description Slider */
    jQuery("#category-desc-slider .slider-items").owlCarousel({
      autoplay: !0
      , items: 1
      , itemsDesktop: [1024, 1]
      , itemsDesktopSmall: [900, 1]
      , itemsTablet: [600, 1]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), /* more-views-slider */
    jQuery("#more-views-slider .slider-items").owlCarousel({
      autoplay: !0
      , items: 4
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 2]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), /* related-products-slider */
    jQuery("#related-products-slider .slider-items").owlCarousel({
      items: 4
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), /* upsell-products-slider */
    jQuery("#upsell-products-slider .slider-items").owlCarousel({
      items: 4
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), /* more-views-slider */
    jQuery("#more-views-slider .slider-items").owlCarousel({
      autoplay: !0
      , items: 3
      , itemsDesktop: [1024, 4]
      , itemsDesktopSmall: [900, 3]
      , itemsTablet: [600, 2]
      , itemsMobile: [320, 1]
      , navigation: !0
      , navigationText: ['<a class="flex-prev"></a>', '<a class="flex-next"></a>']
      , slideSpeed: 500
      , pagination: !1
    }), jQuery("ul.accordion li.parent, ul.accordion li.parents, ul#magicat li.open").each(function() {
      jQuery(this).append('<em class="open-close">&nbsp;</em>')
    }), jQuery("ul.accordion, ul#magicat").accordionNew(), jQuery("ul.accordion li.active, ul#magicat li.active").each(function() {
      jQuery(this).children().next("div").css("display", "block")
    })
    /* cart page */
  function deleteCartInCheckoutPage() {
    return jQuery(".checkout-cart-index a.btn-remove2,.checkout-cart-index a.btn-remove").on("click", function(e) {
      return e.preventDefault(), confirm(confirm_content) ? void 0 : !1
    }), !1
  }
  /*  Top Cart */
  function slideEffectAjax() {
    jQuery(".top-cart-contain").mouseenter(function() {
      jQuery(this).find(".top-cart-content").stop(true, true).slideDown()
    }), jQuery(".top-cart-contain").mouseleave(function() {
      jQuery(this).find(".top-cart-content").stop(true, true).slideUp()
    })
  }

  function deleteCartInSidebar() {
    return is_checkout_page > 0 ? !1 : void jQuery("#cart-sidebar a.btn-remove, #mini_cart_block a.btn-remove").each(function() {})
  }
}), /* Home Products tab */ ! function(e) {
  function t(e) {
    jQuery_items = jQuery(".item-animate", e), jQuery(".btn-loadmore", e).fadeOut("fast"), jQuery_items.each(function(t) {
      jQuery(this).attr("style", "-webkit-animation-delay:" + 300 * t + "ms;-moz-animation-delay:" + 300 * t + "ms;-o-animation-delay:" + 300 * t + "ms;animation-delay:" + 300 * t + "ms;"), t == jQuery_items.size() - 1 && (jQuery(".pdt-list", e).addClass("play"), jQuery(".btn-loadmore", e).fadeIn(.3 * t))
    })
  }

  function a(e) {
    jQuery(".btn-loadmore", e).removeClass("loading"), itemDisplay = jQuery(".item", e).length, jQuery(".btn-loadmore", e).parent(".pdt-loadmore").attr("data-start", itemDisplay), total = jQuery(".btn-loadmore", e).parent(".pdt-loadmore").attr("data-all"), loadnum = jQuery(".btn-loadmore", e).parent(".pdt-loadmore").attr("data-loadnum"), itemDisplay < total && (jQuery(".load-number", e).attr("data-total", total - itemDisplay), total - itemDisplay < loadnum && jQuery(".load-number", e).attr("data-more", total - itemDisplay)), itemDisplay == total ? (jQuery(".load-number", e).css({
      display: "none"
    }), jQuery(".btn-loadmore", e).addClass("loaded"), jQuery(".load-text", e).text(label_allready)) : jQuery(".load-text", e).text(label_loadmore)
  }
  jQueryelement = jQuery(e), itemNav = jQuery(".item-nav", jQueryelement), itemContent = jQuery(".pdt-content", jQueryelement), btn_loadmore = jQuery(".btn-loadmore", jQueryelement), ajax_url = "http://www.magikcommerce.com/producttabs/index/ajax", catids = "39", label_allready = "All Ready", label_loading = "Loading ...", t(jQuery(".tab-content-actived", jQueryelement)), itemNav.on("click", function() {
    var e = jQuery(this);
    if (e.hasClass("tab-nav-actived")) return !1;
    itemNav.removeClass("tab-nav-actived"), e.addClass("tab-nav-actived");
    var i = "." + e.attr("data-href");
    itemContent.removeClass("tab-content-actived"), jQuery(".pdt-list").removeClass("play"), jQuery(".pdt-list .item").removeAttr("style"), jQuery(".item", jQuery(i, jQueryelement)).addClass("item-animate").removeClass("animated"), jQuery(i, jQueryelement).addClass("tab-content-actived"), contentLoading = jQuery(".content-loading", jQuery(i, jQueryelement)), isLoaded = jQuery(i, jQueryelement).hasClass("is-loaded"), isLoaded || jQuery(i, jQueryelement).hasClass("is-loading") ? (jQuery(".item", itemContent).removeAttr("style"), t(jQuery(i, jQueryelement))) : (jQuery(i, jQueryelement).addClass("is-loading"), contentLoading.show(), pdt_type = e.attr("data-type"), catid = e.attr("data-catid"), orderby = e.attr("data-orderby"), jQuery.ajax({
      type: "POST"
      , url: ajax_url
      , data: {
        numberstart: 0
        , catid: catid
        , orderby: orderby
        , catids: catids
        , pdt_type: pdt_type
      }
      , success: function(e) {
        "" != e.listProducts && (jQuery(".pdt-list", jQuery(i, jQueryelement)).html(e.listProducts), jQuery(i, jQueryelement).addClass("is-loaded").removeClass("is-loading"), contentLoading.remove(), t(jQuery(i, jQueryelement)), a(jQuery(i, jQueryelement)))
      }
      , dataType: "json"
    }))
  }), btn_loadmore.on("click.loadmore", function() {
    var e = jQuery(this);
    return itemActive = "." + e.parent(".pdt-loadmore").attr("data-href"), jQuery(".pdt-list").removeClass("play"), jQuery(".pdt-list .item").removeAttr("style"), jQuery(".item", jQuery(itemActive, jQueryelement)).addClass("animated").removeClass("item-animate"), e.hasClass("loaded") || e.hasClass("loading") ? !1 : (e.addClass("loading"), jQuery(".load-text", e).text(label_loading), numberstart = e.parent(".pdt-loadmore").attr("data-start"), catid = e.parent(".pdt-loadmore").attr("data-catid"), pdt_type = e.parent(".pdt-loadmore").attr("data-type"), orderby = e.parent(".pdt-loadmore").attr("data-orderby"), jQuery.ajax({
      type: "POST"
      , url: ajax_url
      , data: {
        numberstart: numberstart
        , catid: catid
        , orderby: orderby
        , catids: catids
        , pdt_type: pdt_type
      }
      , success: function(e) {
        "" != e.listProducts && (animateFrom = jQuery(".item", jQuery(itemActive, jQueryelement)).size(), jQuery(e.listProducts).insertAfter(jQuery(".item", jQuery(itemActive, jQueryelement)).nextAll().last()), t(jQuery(itemActive, jQueryelement)), a(jQuery(itemActive, jQueryelement)))
      }
      , dataType: "json"
    }), !1)
  })
}("#magik_producttabs1")
var isTouchDevice = "ontouchstart" in window || navigator.msMaxTouchPoints > 0;
jQuery(window).on("load", function() {
    isTouchDevice && jQuery("#nav a.level-top").on("click", function() {
      if (jQueryt = jQuery(this), jQueryparent = jQueryt.parent(), jQueryparent.hasClass("parent")) {
        if (!jQueryt.hasClass("menu-ready")) return jQuery("#nav a.level-top").removeClass("menu-ready"), jQueryt.addClass("menu-ready"), !1;
        jQueryt.removeClass("menu-ready")
      }
    }), jQuery().UItoTop()
  }), jQuery(window).scroll(function() {
    jQuery(this).scrollTop() > 1 ? jQuery("nav").addClass("sticky") : jQuery("nav").removeClass("sticky")
  }), /* To top */
    function(e) {
        jQuery.fn.UItoTop = function(t) {
            var a = {
                    text: "",
                    min: 200,
                    inDelay: 600,
                    outDelay: 400,
                    containerID: "toTop",
                    containerHoverID: "toTopHover",
                    scrollSpeed: 1200,
                    easingType: "linear"
                },
                i = e.extend(a, t),
                n = "#" + i.containerID,
                s = "#" + i.containerHoverID;
            jQuery("body").append('<a href="#" id="' + i.containerID + '">' + i.text + "</a>"), jQuery(n).hide().on("click", function() {
                return jQuery("html, body").animate({
                    scrollTop: 0
                }, i.scrollSpeed, i.easingType), jQuery("#" + i.containerHoverID, this).stop().animate({
                    opacity: 0
                }, i.inDelay, i.easingType), !1
            }).prepend('<span id="' + i.containerHoverID + '"></span>').hover(function() {
                jQuery(s, this).stop().animate({
                    opacity: 1
                }, 600, "linear")
            }, function() {
                jQuery(s, this).stop().animate({
                    opacity: 0
                }, 700, "linear")
            }), jQuery(window).scroll(function() {
                var t = e(window).scrollTop();
                "undefined" == typeof document.body.style.maxHeight && jQuery(n).css({
                    position: "absolute",
                    top: e(window).scrollTop() + e(window).height() - 50
                }), t > i.min ? jQuery(n).fadeIn(i.inDelay) : jQuery(n).fadeOut(i.Outdelay)
            })
        }
    }(jQuery), jQuery.extend(jQuery.easing, {
        easeInCubic: function(e, t, a, i, n) {
            return i * (t /= n) * t * t + a
        },
        easeOutCubic: function(e, t, a, i, n) {
            return i * ((t = t / n - 1) * t * t + 1) + a
        }
    }),
  /* Need Help */
jQuery('.show_hide').on("click", function() {
  jQuery("#hideShow").show();
  jQuery("#hideShow1").hide();
});
jQuery('.show_hide1').on("click", function() {
  jQuery("#hideShow1").show();
  jQuery("#hideShow").hide();
});
jQuery('#hideDiv').on("click", function() {
  jQuery("#hideShow").hide();
});
jQuery('#hideDiv1').on("click", function() {
  jQuery("#hideShow1").hide();
});
(jQuery), jQuery.extend(jQuery.easing, {
    easeInCubic: function(e, t, a, i, n) {
      return i * (t /= n) * t * t + a
    }
    , easeOutCubic: function(e, t, a, i, n) {
      return i * ((t = t / n - 1) * t * t + 1) + a
    }
  }), /* mobile nav */
  function(e) {
    e.fn.extend({
      accordion: function() {
        return this.each(function() {})
      }
    })
  }(jQuery), jQuery(function(e) {
    e(".accordion").accordion(), e(".accordion").each(function() {
      var t = e(this).find("li.active");
      t.each(function(a) {
        e(this).children("ul").css("display", "block"), a == t.length - 1 && e(this).addClass("current")
      })
    })
  })
  , function(e) {
    e.fn.extend({
      accordion: function(t) {
        var a = {
            accordion: "true"
            , speed: 300
            , closedSign: "[+]"
            , openedSign: "[-]"
          }
          , i = e.extend(a, t)
          , n = e(this);
        n.find("li").each(function() {
          0 != e(this).find("ul").size() && (e(this).find("a:first").after("<em>" + i.closedSign + "</em>"), "#" == e(this).find("a:first").attr("href") && e(this).find("a:first").on("click", function() {
            return !1
          }))
        }), n.find("li em").on("click", function() {
          0 != e(this).parent().find("ul").size() && (i.accordion && (e(this).parent().find("ul").is(":visible") || (parents = e(this).parent().parents("ul"), visible = n.find("ul:visible"), visible.each(function(t) {
            var a = !0;
            parents.each(function(e) {
              return parents[e] == visible[t] ? (a = !1, !1) : void 0
            }), a && e(this).parent().find("ul") != visible[t] && e(visible[t]).slideUp(i.speed, function() {
              e(this).parent("li").find("em:first").html(i.closedSign)
            })
          }))), e(this).parent().find("ul:first").is(":visible") ? e(this).parent().find("ul:first").slideUp(i.speed, function() {
            e(this).parent("li").find("em:first").delay(i.speed).html(i.closedSign)
          }) : e(this).parent().find("ul:first").slideDown(i.speed, function() {
            e(this).parent("li").find("em:first").delay(i.speed).html(i.openedSign)
          }))
        })
      }
    })
  }(jQuery), /* sidebar navigation */
  function(e) {
    e.fn.extend({
      accordionNew: function() {
        return this.each(function() {
          function t(t, i) {
            e(t).parent(r).siblings().removeClass(n).children(l).slideUp(o), e(t).siblings(l)[i || s]("show" == i ? o : !1, function() {
              e(t).siblings(l).is(":visible") ? e(t).parents(r).not(a.parents()).addClass(n) : e(t).parent(r).removeClass(n), "show" == i && e(t).parents(r).not(a.parents()).addClass(n), e(t).parents().show()
            })
          }
          var a = e(this)
            , i = "accordiated"
            , n = "active"
            , s = "slideToggle"
            , l = "ul, div"
            , o = "fast"
            , r = "li";
          if (a.data(i)) return !1;
          e.each(a.find("ul, li>div"), function() {
            e(this).data(i, !0), e(this).hide()
          }), e.each(a.find("em.open-close"), function() {
            e(this).on("click", function() {
              return void t(this, s)
            }), e(this).bind("activate-node", function() {
              a.find(l).not(e(this).parents()).not(e(this).siblings()).slideUp(o), t(this, "slideDown")
            })
          });
          var d = location.hash ? a.find("a[href=" + location.hash + "]")[0] : a.find("li.current a")[0];
          d && t(d, !1)
        })
      }
    })
  }(jQuery);
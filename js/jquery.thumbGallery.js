(function(f) {
    function m(b, c) {
        function d() {
            var p, b, e, c, d, f = !1;
            a.thumbInnerContainer.unbind("touchstart.ap touchmove.ap touchend.ap click.ap-touchclick").bind("touchstart.ap", function(h) {
                if (!a._componentInited) return !1;
                if (!a.touchOn) return !0;
                h = h.originalEvent.touches[0];
                p = a.thumbInnerContainer.position().left;
                b = a.thumbInnerContainer.position().top;
                e = h.pageX;
                c = h.pageY;
                d = !1;
                f = !0
            }).bind("touchmove.ap", function(h) {
                if (f) {
                    h = h.originalEvent.touches[0];
                    var g;
                    "horizontal" == a._thumbOrientation ? (g = p - e + h.pageX,
                        g > a._thumbBackwardSize ? g = a._thumbBackwardSize : g < a._getComponentSize("w") - a.thumbInnerContainerSize - a._thumbForwardSize && (g = a._getComponentSize("w") - a.thumbInnerContainerSize - a._thumbForwardSize), a.thumbInnerContainer.css("left", g + "px")) : (g = b - c + h.pageY, g > a._thumbBackwardSize ? g = a._thumbBackwardSize : g < a._getComponentSize("h") - a.thumbInnerContainerSize - a._thumbForwardSize && (g = a._getComponentSize("h") - a.thumbInnerContainerSize - a._thumbForwardSize), a.thumbInnerContainer.css("top", g + "px"));
                    d = d || 5 < Math.abs(e -
                        h.pageX) || 5 < Math.abs(c - h.pageY);
                    return !1
                }
            }).bind("touchend.ap", function(a) {
                f = !1
            }).bind("click.ap-touchclick", function(a) {
                if (d) return d = !1
            })
        }
        this._componentInited = !1;
        var a = this;
        this.settings = f.extend({}, f.fn.thumbGallery.defaults, c);
        this.isMobile = isMobile;
        a.ic_thumb_forward = "images/icons/thumb_forward.png";
        a.ic_thumb_forward_on = "images/icons/thumb_forward_on.png";
        a.ic_thumb_backward = "images/icons/thumb_backward.png";
        a.ic_thumb_backward_on = "images/icons/thumb_backward_on.png";
        a.ic_thumb_forward_v = "images/icons/thumb_forward_v.png";
        a.ic_thumb_forward_v_on = "images/icons/thumb_forward_v_on.png";
        a.ic_thumb_backward_v = "images/icons/thumb_backward_v.png";
        a.ic_thumb_backward_v_on = "images/icons/thumb_backward_v_on.png";
        this._upEvent = this._moveEvent = this._downEvent = "";
        this.hasTouch;
        this.touchOn = !0;
        "ontouchstart" in window ? (this.hasTouch = !0, this._downEvent = "touchstart.ap", this._moveEvent = "touchmove.ap", this._upEvent = "touchend.ap") : (this.hasTouch = !1, this._downEvent = "mousedown.ap", this._moveEvent = "mousemove.ap", this._upEvent = "mouseup.ap");
        this._body =
            f("body");
        this._window = f(window);
        this._doc = f(document);
        this._windowResizeTimeout = 150;
        this._windowResizeTimeoutID;
        this._thumbHolderArr = [];
        this._thumbsScrollValue = 100;
        this.thumbTransitionOn = !1;
        this.boxWidth;
        this.boxHeight;
        this.thumbContainerWidth;
        this.thumbContainerHeight;
        this.thumbContainerLeft;
        this.thumbContainerTop;
        this.thumbInnerContainerSize = 0;
        this.gridArr = [];
        this.rows;
        this.columns;
        this.allColumns;
        this.allRows;
        this.lastWheelCounter = this.rowCounter = this.columnCounter = 0;
        this.scrollPaneApi;
        this.tempScrollOffset;
        this.innerSlideshowExist = !1;
        this.slideShowData = [];
        this.innerSlideshowDelay = this.settings.innerSlideshowDelay;
        this.autoPlay = this.settings.autoPlay;
        this._thumbOrientation = this.settings.thumbOrientation;
        this.buttonSpacing = this.settings.buttonSpacing;
        this._layoutType = this.settings.layoutType;
        this._moveType = this.settings.moveType;
        this.horizontalSpacing = this.settings.horizontalSpacing;
        this.verticalSpacing = this.settings.verticalSpacing;
        this.grid_direction = this.settings.direction;
        this.scrollOffset = this.settings.scrollOffset;
        this.componentWrapper = f(b);
        this.thumbContainer = this.componentWrapper.find(".thumbContainer");
        this.thumbBackward = this.componentWrapper.find(".thumbBackward").css({
            cursor: "pointer",
            display: "none"
        });
        this.thumbForward = this.componentWrapper.find(".thumbForward").css({
            cursor: "pointer",
            display: "none"
        });
        this.thumbInnerContainer = this.componentWrapper.find(".thumbInnerContainer");
        "scroll" != this._moveType && (this.isMobile || (this.thumbForward.bind("mouseover", function() {
            f(this).find("img").attr("src", "horizontal" ==
                a._thumbOrientation ? a.ic_thumb_forward_on : a.ic_thumb_forward_v_on);
            return !1
        }).bind("mouseout", function() {
            f(this).find("img").attr("src", "horizontal" == a._thumbOrientation ? a.ic_thumb_forward : a.ic_thumb_forward_v);
            return !1
        }), this.thumbBackward.bind("mouseover", function() {
            f(this).find("img").attr("src", "horizontal" == a._thumbOrientation ? a.ic_thumb_backward_on : a.ic_thumb_backward_v_on);
            return !1
        }).bind("mouseout", function() {
            f(this).find("img").attr("src", "horizontal" == a._thumbOrientation ? a.ic_thumb_backward :
                a.ic_thumb_backward_v);
            return !1
        })), "grid" == this._layoutType ? (this.thumbBackward.bind(this._downEvent, function() {
            if (!a.thumbTransitionOn) {
                a.thumbTransitionOn = !0;
                var b, c;
                "horizontal" == a._thumbOrientation ? (b = parseInt(a.thumbInnerContainer.css("left"), 10), b += a.thumbContainerWidth + a.verticalSpacing, 0 < b && (b = 0), c = Math.ceil(a.thumbContainerWidth / (a.boxWidth + a.verticalSpacing)), a.lastWheelCounter += c, a.thumbInnerContainer.stop().animate({
                    left: b + "px"
                }, {
                    duration: 700,
                    easing: "easeOutQuart",
                    complete: function() {
                        a.thumbTransitionOn = !1
                    }
                })) : (b = parseInt(a.thumbInnerContainer.css("top"), 10), b += a.thumbContainerHeight + a.horizontalSpacing, 0 < b && (b = 0), c = Math.ceil(a.thumbContainerHeight / (a.boxHeight + a.horizontalSpacing)), a.lastWheelCounter += c, a.thumbInnerContainer.stop().animate({
                    top: b + "px"
                }, {
                    duration: 700,
                    easing: "easeOutQuart",
                    complete: function() {
                        a.thumbTransitionOn = !1
                    }
                }));
                return !1
            }
        }), this.thumbForward.bind(this._downEvent, function() {
            if (!a.thumbTransitionOn) {
                a.thumbTransitionOn = !0;
                var b, c;
                "horizontal" == a._thumbOrientation ? (b = parseInt(a.thumbInnerContainer.css("left"),
                    10), b -= a.thumbContainerWidth + a.verticalSpacing, b < -a.thumbInnerContainerSize + a.thumbContainerWidth && (b = -a.thumbInnerContainerSize + a.thumbContainerWidth), c = Math.ceil(a.thumbContainerWidth / (a.boxWidth + a.verticalSpacing)), a.lastWheelCounter -= c, a.thumbInnerContainer.stop().animate({
                    left: b + "px"
                }, {
                    duration: 700,
                    easing: "easeOutQuart",
                    complete: function() {
                        a.thumbTransitionOn = !1
                    }
                })) : (b = parseInt(a.thumbInnerContainer.css("top"), 10), b -= a.thumbContainerHeight + a.horizontalSpacing, b < -a.thumbInnerContainerSize + a.thumbContainerHeight &&
                    (b = -a.thumbInnerContainerSize + a.thumbContainerHeight), c = Math.ceil(a.thumbContainerHeight / (a.boxHeight + a.horizontalSpacing)), a.lastWheelCounter -= c, a.thumbInnerContainer.stop().animate({
                        top: b + "px"
                    }, {
                        duration: 700,
                        easing: "easeOutQuart",
                        complete: function() {
                            a.thumbTransitionOn = !1
                        }
                    }));
                return !1
            }
        })) : (this.thumbBackward.bind(this._downEvent, function() {
            if (!a.thumbTransitionOn) {
                a.thumbTransitionOn = !0;
                var b, c, e, d;
                "horizontal" == a._thumbOrientation ? (c = a.thumbInnerContainer.width(), e = a.thumbContainer.width(), b = parseInt(a.thumbInnerContainer.css("left"),
                    10), d = Math.floor(e / (a.boxWidth + a.spacing)), b += d * (a.boxWidth + a.spacing), a.lastWheelCounter += d, 0 < b && (b = 0), 0 != b % (a.boxWidth + a.spacing) && (value2 = Math.floor(b / (a.boxWidth + a.spacing)), b = value2 * (a.boxWidth + a.spacing), 0 < b && (b = 0), b < -c + e && (b = -c + e)), a.thumbInnerContainer.stop().animate({
                    left: b + "px"
                }, {
                    duration: 700,
                    easing: "easeOutQuart",
                    complete: function() {
                        a.thumbTransitionOn = !1
                    }
                })) : (c = a.thumbInnerContainer.height(), e = a.thumbContainer.height(), b = parseInt(a.thumbInnerContainer.css("top"), 10), d = Math.floor(e / (a.boxHeight +
                    a.spacing)), b += d * (a.boxHeight + a.spacing), a.lastWheelCounter += d, 0 < b && (b = 0), 0 != b % (a.boxHeight + a.spacing) && (value2 = Math.floor(b / (a.boxHeight + a.spacing)), b = value2 * (a.boxHeight + a.spacing), 0 < b && (b = 0), b < -c + e && (b = -c + e)), a.thumbInnerContainer.stop().animate({
                    top: b + "px"
                }, {
                    duration: 700,
                    easing: "easeOutQuart",
                    complete: function() {
                        a.thumbTransitionOn = !1
                    }
                }));
                return !1
            }
        }), this.thumbForward.bind(this._downEvent, function() {
            if (!a.thumbTransitionOn) {
                a.thumbTransitionOn = !0;
                var b, c, e, d;
                "horizontal" == a._thumbOrientation ?
                    (c = a.thumbInnerContainer.width(), e = a.thumbContainer.width(), b = parseInt(a.thumbInnerContainer.css("left"), 10), d = Math.floor(e / (a.boxWidth + a.spacing)), b -= d * (a.boxWidth + a.spacing), a.lastWheelCounter -= d, b < -c + e && (b = -c + e), a.thumbInnerContainer.stop().animate({
                        left: b + "px"
                    }, {
                        duration: 700,
                        easing: "easeOutQuart",
                        complete: function() {
                            a.thumbTransitionOn = !1
                        }
                    })) : (c = a.thumbInnerContainer.height(), e = a.thumbContainer.height(), b = parseInt(a.thumbInnerContainer.css("top"), 10), d = Math.floor(e / (a.boxHeight + a.spacing)), b -=
                        d * (a.boxHeight + a.spacing), a.lastWheelCounter -= d, b < -c + e && (b = -c + e), a.thumbInnerContainer.stop().animate({
                            top: b + "px"
                        }, {
                            duration: 700,
                            easing: "easeOutQuart",
                            complete: function() {
                                a.thumbTransitionOn = !1
                            }
                        }));
                return !1
            }
        })), this.isMobile || this.thumbContainer.bind("mousewheel", function(b, c, e, d) {
            if (a._componentInited) {
                a.thumbTransitionOn = !0;
                e = 0 < c ? 1 : -1;
                if ("grid" == a._layoutType)
                    if ("horizontal" == a._thumbOrientation) {
                        if (a.thumbInnerContainerSize == a.thumbContainerWidth) return;
                        a.columnCounter != a.lastWheelCounter && (a.columnCounter =
                            a.lastWheelCounter);
                        a.columnCounter += e;
                        0 < a.columnCounter ? a.columnCounter = 0 : a.columnCounter < -a.allColumns + a.columns && (a.columnCounter = -a.allColumns + a.columns);
                        a.lastWheelCounter = a.columnCounter;
                        e = a.columnCounter * (a.boxWidth + a.verticalSpacing);
                        a.thumbInnerContainer.stop().animate({
                            left: e + "px"
                        }, {
                            duration: 700,
                            easing: "easeOutQuart",
                            complete: function() {
                                a.thumbTransitionOn = !1
                            }
                        })
                    } else {
                        if (a.thumbInnerContainerSize == a.thumbContainerHeight) return;
                        a.columnCounter != a.lastWheelCounter && (a.rowCounter = a.lastWheelCounter);
                        a.rowCounter += e;
                        0 < a.rowCounter ? a.rowCounter = 0 : a.rowCounter < -a.allRows + a.rows && (a.rowCounter = -a.allRows + a.rows);
                        a.lastWheelCounter = a.rowCounter;
                        e = a.rowCounter * (a.boxHeight + a.horizontalSpacing);
                        a.thumbInnerContainer.stop().animate({
                            top: e + "px"
                        }, {
                            duration: 700,
                            easing: "easeOutQuart",
                            complete: function() {
                                a.thumbTransitionOn = !1
                            }
                        })
                    } else if ("horizontal" == a._thumbOrientation) {
                    b = a.thumbInnerContainer.width();
                    c = a.thumbContainer.width();
                    if (b == c) return;
                    a.columnCounter != a.lastWheelCounter && (a.columnCounter = a.lastWheelCounter);
                    a.columnCounter += e;
                    0 < a.columnCounter ? a.columnCounter = 0 : a.columnCounter < -a.allColumns + a.columns && (a.columnCounter = -a.allColumns + a.columns);
                    a.lastWheelCounter = a.columnCounter;
                    e = a.columnCounter * (a.boxWidth + a.spacing);
                    0 < e ? e = 0 : e < -b + c && (e = -b + c);
                    0 != e % (a.boxWidth + a.spacing) && (e = Math.floor(e / (a.boxWidth + a.spacing)), e *= a.boxWidth + a.spacing, 0 < e && (e = 0), e < -b + c && (e = -b + c));
                    a.thumbInnerContainer.stop().animate({
                        left: e + "px"
                    }, {
                        duration: 700,
                        easing: "easeOutQuart",
                        complete: function() {
                            a.thumbTransitionOn = !1
                        }
                    })
                } else b =
                    a.thumbInnerContainer.height(), c = a.thumbContainer.height(), a.rowCounter != a.lastWheelCounter && (a.rowCounter = a.lastWheelCounter), a.rowCounter += e, 0 < a.rowCounter ? a.rowCounter = 0 : a.rowCounter < -a.allRows + a.rows && (a.rowCounter = -a.allRows + a.rows), a.lastWheelCounter = a.rowCounter, e = a.rowCounter * (a.boxHeight + a.spacing), 0 < e ? e = 0 : e < -b + c && (e = -b + c), 0 != e % (a.boxHeight + a.spacing) && (e = Math.floor(e / (a.boxHeight + a.spacing)), e *= a.boxHeight + a.spacing, 0 < e && (e = 0), e < -b + c && (e = -b + c)), a.thumbInnerContainer.stop().animate({
                        top: e +
                            "px"
                    }, {
                        duration: 700,
                        easing: "easeOutQuart",
                        complete: function() {
                            a.thumbTransitionOn = !1
                        }
                    });
                return !1
            }
        }), "horizontal" == this._thumbOrientation ? (this._thumbBackwardSize = this.thumbBackward.width(), this._thumbForwardSize = this.thumbForward.width()) : (this._thumbBackwardSize = this.thumbBackward.height(), this._thumbForwardSize = this.thumbForward.height()));
        this._componentFixedSize || this._window.bind("resize", function() {
            if (!a._componentInited) return !1;
            a._windowResizeTimeoutID && clearTimeout(a._windowResizeTimeoutID);
            a._windowResizeTimeoutID = setTimeout(function() {
                a._doneResizing()
            }, a._windowResizeTimeout);
            return !1
        });
        var g = 0,
            k, l, n = !1;
        this.thumbInnerContainer.children("div[class=thumbHolder]").each(function() {
            k = f(this).attr({
                "data-id-i": g,
                "data-id-j": 0
            });
            a._thumbHolderArr.push(k);
            n || (a.boxWidth = a._thumbHolderArr[0].width(), a.boxHeight = a._thumbHolderArr[0].height(), n = !0);
            if (0 < k.find("div[class='innerThumbHolder']").length) {
                a.innerSlideshowExist = !0;
                var b = [],
                    c = 0;
                k.find("div[class='innerThumbHolder']").each(function() {
                    l =
                        f(this).attr({
                            "data-id-i": g,
                            "data-id-j": c
                        });
                    b.push(l);
                    void 0 == l.attr("data-title") || a._isEmpty(l.attr("data-title")) || a.createTitle(l);
                    a.isMobile || l.bind("mouseenter", function(b) {
                        if (!a._componentInited) return !1;
                        b || (b = window.event);
                        b.cancelBubble ? b.cancelBubble = !0 : b.stopPropagation && b.stopPropagation();
                        b = f(b.currentTarget);
                        "undefined" !== typeof overThumb && overThumb(parseInt(b.attr("data-id-i"), 10), parseInt(b.attr("data-id-j"), 10));
                        if (void 0 != b.data("caption")) {
                            b = b.data("caption");
                            var c = a.boxHeight -
                                parseInt(b.data("finalHeight"), 10) + 1;
                            b.stop().animate({
                                top: c + "px"
                            }, {
                                duration: 500,
                                easing: "easeOutQuint"
                            });
                            return !1
                        }
                    }).bind("mouseleave", function(b) {
                        if (!a._componentInited) return !1;
                        b || (b = window.event);
                        b.cancelBubble ? b.cancelBubble = !0 : b.stopPropagation && b.stopPropagation();
                        b = f(b.currentTarget);
                        "undefined" !== typeof outThumb && outThumb(parseInt(b.attr("data-id-i"), 10), parseInt(b.attr("data-id-j"), 10));
                        if (void 0 != b.data("caption")) return b.data("caption").stop().animate({
                            top: a.boxHeight + "px"
                        }, {
                            duration: 500,
                            easing: "easeOutQuint"
                        }), !1
                    });
                    0 < l.find("a[class=pp_content]").length && l.find("a[class=pp_content]").bind("click", function() {
                        "undefined" !== typeof detailActivated && detailActivated()
                    });
                    0 < c && l.css({
                        display: "none",
                        opacity: 0
                    });
                    c++
                });
                k.data({
                    slideArr: b,
                    position: g,
                    counter: 0
                });
                a.slideShowData[g] = a.createSlideshow(k)
            } else void 0 == k.attr("data-title") || a._isEmpty(k.attr("data-title")) || a.createTitle(k), a.isMobile || k.bind("mouseenter", function(b) {
                if (!a._componentInited) return !1;
                b || (b = window.event);
                b.cancelBubble ?
                    b.cancelBubble = !0 : b.stopPropagation && b.stopPropagation();
                b = f(b.currentTarget);
                "undefined" !== typeof overThumb && overThumb(parseInt(b.attr("data-id-i"), 10), parseInt(b.attr("data-id-j"), 10));
                if (void 0 != b.data("caption")) {
                    b = b.data("caption");
                    var c = a.boxHeight - parseInt(b.data("finalHeight"), 10) + 1;
                    b.stop().animate({
                        top: c + "px"
                    }, {
                        duration: 500,
                        easing: "easeOutQuint"
                    });
                    return !1
                }
            }).bind("mouseleave", function(b) {
                if (!a._componentInited) return !1;
                b || (b = window.event);
                b.cancelBubble ? b.cancelBubble = !0 : b.stopPropagation &&
                    b.stopPropagation();
                b = f(b.currentTarget);
                "undefined" !== typeof outThumb && outThumb(parseInt(b.attr("data-id-i"), 10), parseInt(b.attr("data-id-j"), 10));
                if (void 0 != b.data("caption")) return b.data("caption").stop().animate({
                    top: a.boxHeight + "px"
                }, {
                    duration: 500,
                    easing: "easeOutQuint"
                }), !1
            }), 0 < k.find("a[class=pp_content]").length && k.find("a[class=pp_content]").bind("click", function(a) {
                "undefined" !== typeof detailActivated && detailActivated()
            });
            g++
        });
        this._playlistLength = this._thumbHolderArr.length;
        if ("line" ==
            this._layoutType) {
            "horizontal" == this._thumbOrientation ? (this.allColumns = this._playlistLength, this.spacing = parseInt(this._thumbHolderArr[this._playlistLength - 1].css("marginRight"), 10), this._thumbHolderArr[this._playlistLength - 1].css("marginRight", "0px")) : (this.allRows = this._playlistLength, this.spacing = parseInt(this._thumbHolderArr[this._playlistLength - 1].css("marginBottom"), 10), this._thumbHolderArr[this._playlistLength - 1].css("marginBottom", "0px"));
            g = 0;
            for (g; g < this._playlistLength; g++) this.thumbInnerContainerSize =
                "horizontal" == this._thumbOrientation ? this.thumbInnerContainerSize + this._thumbHolderArr[g].outerWidth(!0) : this.thumbInnerContainerSize + this._thumbHolderArr[g].outerHeight(!0);
            "horizontal" == this._thumbOrientation ? this.thumbInnerContainer.width(this.thumbInnerContainerSize) : this.thumbInnerContainer.height(this.thumbInnerContainerSize)
        }
        "buttons" == this._moveType && this.hasTouch && d();
        this.thumbInnerContainer.css("display", "block");
        this._doneResizing();
        this._componentInited = !0;
        "undefined" !== typeof thumbGallerySetupDone &&
            thumbGallerySetupDone();
        f(".thumb_hidden").stop().animate({
            opacity: 1
        }, {
            duration: 500,
            easing: "easeOutSine"
        });
        this.innerSlideshowExist && this.settings.innerSlideshowOn && this.toggleInnerslideShow(!0)
    }
    m.prototype = {
        toggleInnerslideShow: function(b) {
            if (this._componentInited && this.innerSlideshowExist) {
                var c = 0,
                    d = this.slideShowData.length;
                for (c; c < d; c++) void 0 != this.slideShowData[c] && (b ? this.slideShowData[c].start() : this.slideShowData[c].stop())
            }
        },
        toggleInnerslideShowNum: function(b, c) {
            this._componentInited && this.innerSlideshowExist &&
                void 0 != this.slideShowData[b] && (c ? this.slideShowData[b].start() : this.slideShowData[b].stop())
        },
        getThumbHolder: function(b) {
            if (this._componentInited && void 0 != this._thumbHolderArr[b]) return this._thumbHolderArr[b]
        },
        createTitle: function(b) {
            var c, d, a;
            c = b.attr("data-title");
            c = f("<div/>").html(c).addClass("title").appendTo(this.componentWrapper);
            d = parseInt(c.css("paddingLeft"), 10);
            a = parseInt(c.css("paddingRight"), 10);
            parseInt(c.css("paddingTop"), 10);
            parseInt(c.css("paddingBottom"), 10);
            this.isMobile ? c.css("top",
                this.boxHeight - c.outerHeight() + "px") : c.css("top", this.boxHeight + "px");
            c.css("width", this.boxWidth - d - a + "px");
            c.data("finalHeight", c.outerHeight());
            c.appendTo(b);
            b.data("caption", c)
        },
        createSlideshow: function(b) {
            function c(a) {
                this.slideDiv = a;
                this.len = this.slideDiv.data("slideArr").length;
                this.counter = parseInt(this.slideDiv.data("counter"), 10);
                this.delay;
                this.timeoutID;
                this.time = 1E3;
                this.ease = "easeOutSine";
                this.running = !1
            }
            var d = this;
            c.prototype = {
                start: function() {
                    var a = this;
                    this.delay = d._randomMinMax(d.innerSlideshowDelay[0],
                        d.innerSlideshowDelay[1]);
                    this.delay *= 1E3;
                    this.timeoutID && clearTimeout(this.timeoutID);
                    this.timeoutID = setTimeout(function() {
                        a.next()
                    }, this.delay);
                    this.running = !0
                },
                stop: function() {
                    this.timeoutID && clearTimeout(this.timeoutID);
                    this.running = !1
                },
                next: function() {
                    var a = this;
                    this.timeoutID && clearTimeout(this.timeoutID);
                    this.slideDiv.data("slideArr")[this.counter].stop().animate({
                        opacity: 0
                    }, {
                        duration: this.time,
                        easing: this.ease,
                        complete: function() {
                            f(this).css("display", "none")
                        }
                    });
                    this.counter++;
                    this.counter >
                        this.len - 1 && (this.counter = 0);
                    this.slideDiv.data("counter", this.counter);
                    this.slideDiv.data("slideArr")[this.counter].css({
                        opacity: 0,
                        display: "block"
                    }).stop().animate({
                        opacity: 1
                    }, {
                        duration: this.time,
                        easing: this.ease,
                        complete: function() {
                            a.running && a.start()
                        }
                    })
                }
            };
            return new c(b)
        },
        checkScroll: function() {
            var b = this;
            this.scrollPaneApi ? this.scrollPaneApi.reinitialise() : (this.scrollPaneApi = this.thumbContainer.jScrollPane().data().jsp, this.thumbContainer.bind("jsp-initialised", function(b, d) {
                d || "vertical" ==
                    this._thumbOrientation || f(".jspPane").css("left", "0px")
            }), "vertical" == this._thumbOrientation ? this.thumbContainer.jScrollPane({
                verticalDragMinHeight: 80,
                verticalDragMaxHeight: 100
            }) : (this.thumbContainer.jScrollPane({
                horizontalDragMinWidth: 80,
                horizontalDragMaxWidth: 100
            }), this.thumbContainer.bind("mousewheel", function(c, d, a, f) {
                if (b._componentInited && b.scrollPaneApi) return b.scrollPaneApi && b.scrollPaneApi.scrollByX((0 < d ? -1 : 1) * b._thumbsScrollValue), !1
            })))
        },
        toggleThumbBackward: function(b) {
            "on" == b ? this.thumbBackward.css("display",
                "block") : this.thumbBackward.css("display", "none")
        },
        toggleThumbForward: function(b) {
            "on" == b ? this.thumbForward.css("display", "block") : this.thumbForward.css("display", "none")
        },
        calculateGrid: function(b) {
            this.tempScrollOffset = b ? parseInt(b, 10) : this.scrollOffset;
            var c = this._getComponentSize("w"),
                d = this._getComponentSize("h");
            b = "left2right" == this.grid_direction ? !0 : !1;
            if ("horizontal" == this._thumbOrientation) {
                "scroll" == this._moveType && (d -= this.tempScrollOffset);
                this.rows = Math.floor(d / (this.boxHeight + this.horizontalSpacing));
                this.rows * (this.boxHeight + this.horizontalSpacing) + this.boxHeight <= d && (this.rows += 1);
                this.columns = Math.floor(c / (this.boxWidth + this.verticalSpacing));
                this.allColumns = Math.ceil(this._playlistLength / this.rows);
                c = this.allColumns < this.columns ? this.allColumns : this.columns;
                this.gridArr = this.createGrid(this.allColumns, this.rows, this.boxWidth, this.boxHeight, this.horizontalSpacing, this.verticalSpacing, 0, 0, b);
                if (void 0 == this.gridArr[0]) return alert("Improper grid dimesions!"), !1;
                this.thumbInnerContainerSize =
                    this.allColumns * this.boxWidth + (this.allColumns - 1) * this.verticalSpacing;
                this.thumbContainerWidth = c * this.boxWidth + (c - 1) * this.verticalSpacing;
                this.thumbContainerHeight = this.rows * this.boxHeight + (this.rows - 1) * this.horizontalSpacing
            } else {
                "scroll" == this._moveType && (c -= this.tempScrollOffset);
                this.columns = Math.floor(c / (this.boxWidth + this.verticalSpacing));
                this.columns * (this.boxWidth + this.verticalSpacing) + this.boxWidth <= c && (this.columns += 1);
                this.rows = Math.floor(d / (this.boxHeight + this.horizontalSpacing));
                this.allRows =
                    Math.ceil(this._playlistLength / this.columns);
                c = this.allRows < this.rows ? this.allRows : this.rows;
                this.gridArr = this.createGrid(this.columns, this.allRows, this.boxWidth, this.boxHeight, this.horizontalSpacing, this.verticalSpacing, 0, 0, b);
                if (void 0 == this.gridArr[0]) return alert("Improper grid dimesions!"), !1;
                this.thumbInnerContainerSize = this.allRows * this.boxHeight + (this.allRows - 1) * this.horizontalSpacing;
                this.thumbContainerWidth = this.columns * this.boxWidth + (this.columns - 1) * this.verticalSpacing;
                this.thumbContainerHeight =
                    c * this.boxHeight + (c - 1) * this.horizontalSpacing
            }
        },
        layoutTypeGrid: function() {
            var b = 0;
            for (b; b < this._playlistLength; b++) f(this._thumbHolderArr[b]).css({
                left: this.gridArr[b].x + "px",
                top: this.gridArr[b].y + "px"
            });
            var b = this._getComponentSize("w"),
                c = this._getComponentSize("h");
            this.thumbContainerLeft = Math.ceil(b / 2 - this.thumbContainerWidth / 2);
            this.thumbContainerTop = Math.ceil(c / 2 - this.thumbContainerHeight / 2);
            if ("scroll" != this._moveType) {
                if ("horizontal" == this._thumbOrientation) {
                    var d = parseInt(this.thumbInnerContainer.css("left"),
                        10);
                    d < -this.thumbInnerContainerSize + this.thumbContainerWidth && (d = -this.thumbInnerContainerSize + this.thumbContainerWidth, this.thumbInnerContainer.css("left", d + "px"));
                    this.thumbInnerContainerSize > this.thumbContainerWidth ? (this.thumbBackward.css("display", "block"), this.thumbForward.css("display", "block"), this.touchOn = !0) : (this.thumbBackward.css("display", "none"), this.thumbForward.css("display", "none"), this.thumbInnerContainer.css("left", "0px"), this.touchOn = !1);
                    c = this.thumbContainerLeft - this._thumbBackwardSize -
                        this.buttonSpacing;
                    0 > c && (c = 0);
                    d = this.thumbContainerLeft + this.thumbContainerWidth + this.buttonSpacing;
                    d > b - this._thumbForwardSize && (d = b - this._thumbForwardSize);
                    this.thumbBackward.css("left", c + "px");
                    this.thumbForward.css("left", d + "px")
                } else d = parseInt(this.thumbInnerContainer.css("top"), 10), d < -this.thumbInnerContainerSize + this.thumbContainerHeight && (d = -this.thumbInnerContainerSize + this.thumbContainerHeight, this.thumbInnerContainer.css("top", d + "px")), this.thumbInnerContainerSize > this.thumbContainerHeight ?
                    (this.thumbBackward.css("display", "block"), this.thumbForward.css("display", "block"), this.touchOn = !0) : (this.thumbBackward.css("display", "none"), this.thumbForward.css("display", "none"), this.thumbInnerContainer.css("top", "0px"), this.touchOn = !1), b = this.thumbContainerTop - this._thumbBackwardSize - this.buttonSpacing, 0 > b && (b = 0), d = this.thumbContainerTop + this.thumbContainerHeight + this.buttonSpacing, d > c - this._thumbForwardSize && (d = c - this._thumbForwardSize), this.thumbBackward.css("top", b + "px"), this.thumbForward.css("top",
                        d + "px");
                this.thumbContainer.css({
                    width: this.thumbContainerWidth + "px",
                    height: this.thumbContainerHeight + "px",
                    left: this.thumbContainerLeft + "px",
                    top: this.thumbContainerTop + "px"
                })
            } else "horizontal" == this._thumbOrientation ? (this.thumbContainerTop -= this.tempScrollOffset / 2, this.thumbContainerHeight += this.tempScrollOffset) : (this.thumbContainerLeft -= this.tempScrollOffset / 2, this.thumbContainerWidth += this.tempScrollOffset), this.thumbContainer.css({
                width: this.thumbContainerWidth + "px",
                height: this.thumbContainerHeight +
                    "px"
            }), "horizontal" == this._thumbOrientation ? this.thumbInnerContainer.css({
                width: this.thumbInnerContainerSize + "px",
                height: this.thumbContainerHeight + "px"
            }) : this.thumbInnerContainer.css({
                width: this.thumbContainerWidth + "px",
                height: this.thumbInnerContainerSize + "px"
            })
        },
        layoutTypeLine: function() {
            this._getComponentSize("w");
            this._getComponentSize("h");
            if ("horizontal" == this._thumbOrientation) {
                if ("scroll" != this._moveType) {
                    var b = this.thumbInnerContainer.width(),
                        c = this.thumbContainer.width();
                    if (this.thumbInnerContainerSize >
                        c) {
                        this.thumbBackward.css("display", "block");
                        this.thumbForward.css("display", "block");
                        this.touchOn = !0;
                        var d = parseInt(this.thumbInnerContainer.css("left"), 10);
                        d < c - b ? d = c - b : 0 < d && (d = 0);
                        this.thumbInnerContainer.css("left", d + "px")
                    } else this.thumbBackward.css("display", "none"), this.thumbForward.css("display", "none"), this.touchOn = !1, this.thumbInnerContainer.css("left", c / 2 - b / 2 + "px")
                }
            } else "scroll" != this._moveType && (b = this.thumbInnerContainer.height(), c = this.thumbContainer.height(), this.thumbInnerContainerSize >
                c ? (this.thumbBackward.css("display", "block"), this.thumbForward.css("display", "block"), this.touchOn = !0, d = parseInt(this.thumbInnerContainer.css("top"), 10), d < c - b ? d = c - b : 0 < d && (d = 0), this.thumbInnerContainer.css("top", d + "px")) : (this.thumbBackward.css("display", "none"), this.thumbForward.css("display", "none"), this.touchOn = !1, this.thumbInnerContainer.css("top", c / 2 - b / 2 + "px")))
        },
        _getComponentSize: function(b) {
            return "w" == b ? this.componentWrapper.width() : this.componentWrapper.height()
        },
        _randomMinMax: function(b, c) {
            return Math.random() *
                (c - b) + b
        },
        _stringCounter: function(b) {
            return 9 > b ? "0" + (b + 1) : b + 1
        },
        _preventSelect: function(b) {
            f(b).each(function() {
                f(this).attr("unselectable", "on").css({
                    "-moz-user-select": "none",
                    "-webkit-user-select": "none",
                    "user-select": "none"
                }).each(function() {
                    this.onselectstart = function() {
                        return !1
                    }
                })
            })
        },
        _doneResizing: function() {
            "grid" == this._layoutType ? (this.calculateGrid(this.scrollOffset), "scroll" == this._moveType && ("horizontal" == this._thumbOrientation ? this.thumbInnerContainerSize <= this.thumbContainerWidth && this.calculateGrid("0") :
                this.thumbInnerContainerSize <= this.thumbContainerHeight && this.calculateGrid("0")), this.layoutTypeGrid(this.scrollOffset)) : ("horizontal" == this._thumbOrientation ? this.columns = this.thumbContainer.width() / this._thumbHolderArr[0].outerWidth(!0) : this.rows = this.thumbContainer.height() / this._thumbHolderArr[0].outerHeight(!0), this.layoutTypeLine());
            "scroll" == this._moveType && this.checkScroll()
        },
        _isEmpty: function(b) {
            return 0 == b.replace(/^\s+|\s+$/g, "").length
        },
        createGrid: function(b, c, d, a, f, k, l, n, p) {
            for (var m = [], e, q, r, t = b * c, h = 0; h < t; h++) e = {}, p ? (q = h % b, r = Math.floor(h / b), e.x = q * (d + f) + l, e.y = r * (a + k) + n) : (q = h % c, r = Math.floor(h / c), e.x = r * (d + f) + l, e.y = q * (a + k) + n), m.push(e);
            return m
        }
    };
    f.fn.thumbGallery = function(b) {
        return this.each(function() {
            var c = new m(f(this), b);
            f(this).data("thumbGallery", c);
            f.fn.thumbGallery.toggleInnerslideShow = function(b) {
                c.toggleInnerslideShow(b)
            };
            f.fn.thumbGallery.toggleInnerslideShowNum = function(b, a) {
                c.toggleInnerslideShowNum(b, a)
            };
            f.fn.thumbGallery.getThumbHolder = function(b) {
                return c.getThumbHolder(b)
            }
        })
    };
    f.fn.thumbGallery.defaults = {};
    f.fn.thumbGallery.settings = {}
})(jQuery);
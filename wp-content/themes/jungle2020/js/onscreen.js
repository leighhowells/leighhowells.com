!function (e) {
  function t(o) {
    if (n[o]) return n[o].exports;
    var r = n[o] = {exports: {}, id: o, loaded: !1};
    return e[o].call(r.exports, r, r.exports, t), r.loaded = !0, r.exports
  }

  var n = {};
  return t.m = e, t.c = n, t.p = "", t(0)
}([function (e, t, n) {
  function o(e, t) {
    var n = e.getAttribute("class") || "";
    e.setAttribute("class", n + " " + t)
  }

  function r(e, t) {
    var n = e.getAttribute("class") || "";
    e.setAttribute("class", n.replace(" " + t, ""))
  }

  function i() {
    l.destroy(), s.destroy(), u.destroy()
  }

  function c() {
    l.attach(), s.attach(), u.attach()
  }

  var a = n(1);
  document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".js-destroy").addEventListener("click", i), document.querySelector(".js-attach").addEventListener("click", c)
  }, !1);
  var l = new a({tolerance: 50});
  l.on("enter", ".target", function (e) {
    o(e, "onScreen")
  }), l.on("leave", ".target", function (e) {
    r(e, "onScreen")
  });
  var s = new a({container: ".container .vertical", tolerance: 20});
  s.on("enter", ".vertical .contained", function (e) {
    o(e, "onScreen")
  }), s.on("leave", ".vertical .contained", function (e) {
    r(e, "onScreen")
  });
  var u = new a({container: ".container .horizontal", tolerance: 20});
  u.on("enter", ".horizontal .contained", function (e) {
    o(e, "onScreen")
  }), u.on("leave", ".horizontal .contained", function (e) {
    r(e, "onScreen")
  })
}, function (e, t, n) {
  !function (t, n) {
    e.exports = n()
  }(this, function () {
    "use strict";

    function e() {
      var e = this.options.container;
      if (e instanceof HTMLElement) {
        var t = window.getComputedStyle(e);
        "static" === t.position && (e.style.position = "relative")
      }
      e.addEventListener("scroll", this._scroll), window.addEventListener("resize", this._scroll), this._scroll(), this.attached = !0
    }

    function t(e) {
      var t = arguments.length <= 1 || void 0 === arguments[1] ? {tolerance: 0} : arguments[1];
      if (!e) throw new Error("You should specify the element you want to test");
      "string" == typeof e && (e = document.querySelector(e));
      var n = e.getBoundingClientRect();
      return n.bottom - t.tolerance > 0 && n.right - t.tolerance > 0 && n.left + t.tolerance < (window.innerWidth || document.documentElement.clientWidth) && n.top + t.tolerance < (window.innerHeight || document.documentElement.clientHeight)
    }

    function n(e) {
      var t = arguments.length <= 1 || void 0 === arguments[1] ? {tolerance: 0, container: ""} : arguments[1];
      if (!e) throw new Error("You should specity the element you want to test");
      if ("string" == typeof e && (e = document.querySelector(e)), "string" == typeof t && (t = {tolerance: 0, container: document.querySelector(t)}), "string" == typeof t.container && (t.container = document.querySelector(t.container)), t instanceof HTMLElement && (t = {
        tolerance: 0,
        container: t
      }), !t.container) throw new Error("You should specify a container element");
      var n = t.container.getBoundingClientRect();
      return e.offsetTop + e.clientHeight - t.tolerance > t.container.scrollTop && e.offsetLeft + e.clientWidth - t.tolerance > t.container.scrollLeft && e.offsetLeft + t.tolerance < n.width + t.container.scrollLeft && e.offsetTop + t.tolerance < n.height + t.container.scrollTop
    }

    function o() {
      var e = arguments.length <= 0 || void 0 === arguments[0] ? {} : arguments[0], o = arguments.length <= 1 || void 0 === arguments[1] ? {tolerance: 0} : arguments[1], r = Object.keys(e), i = void 0;
      r.length && (i = o.container === window ? t : n, r.forEach(function (t) {
        e[t].nodes.forEach(function (n) {
          i(n.node, o) ? (n.wasVisible = n.isVisible, n.isVisible = !0) : (n.wasVisible = n.isVisible, n.isVisible = !1), n.isVisible === !0 && n.wasVisible === !1 && "function" == typeof e[t].enter && e[t].enter(n.node), n.isVisible === !1 && n.wasVisible === !0 && "function" == typeof e[t].leave && e[t].leave(n.node)
        })
      }))
    }

    function r() {
      var e = this, t = void 0;
      return function () {
        clearTimeout(t), t = setTimeout(function () {
          o(e.trackedElements, e.options)
        }, e.options.throttle)
      }
    }

    function i() {
      this.options.container.removeEventListener("scroll", this._scroll), window.removeEventListener("resize", this._scroll), this.attached = !1
    }

    function c(e, t) {
      this.trackedElements.hasOwnProperty(t) && this.trackedElements[t][e] && delete this.trackedElements[t][e], this.trackedElements[t].enter || this.trackedElements[t].leave || delete this.trackedElements[t]
    }

    function a(e, t, n) {
      var o = ["enter", "leave"];
      if (!e) throw new Error("No event given. Choose either enter or leave");
      if (!t) throw new Error("No selector to track");
      if (o.indexOf(e) < 0) throw new Error(e + " event is not supported");
      this.trackedElements.hasOwnProperty(t) || (this.trackedElements[t] = {}), this.trackedElements[t].nodes = [];
      for (var r = 0; r < document.querySelectorAll(t).length; r++) {
        var i = {isVisible: !1, wasVisible: !1, node: document.querySelectorAll(t)[r]};
        this.trackedElements[t].nodes.push(i)
      }
      "function" == typeof n && (this.trackedElements[t][e] = n)
    }

    function l(e, t) {
      var n = window.MutationObserver || window.WebKitMutationObserver, o = window.addEventListener;
      if (n) {
        var r = new n(function (e) {
          (e[0].addedNodes.length || e[0].removedNodes.length) && t()
        });
        r.observe(e, {childList: !0, subtree: !0})
      } else o && (e.addEventListener("DOMNodeInserted", t, !1), e.addEventListener("DOMNodeRemoved", t, !1))
    }

    function s() {
      var e = this, t = arguments.length <= 0 || void 0 === arguments[0] ? {tolerance: 0, debounce: 100, container: window} : arguments[0];
      this.options = {}, this.trackedElements = {}, Object.defineProperties(this.options, {
        container: {
          configurable: !1, enumerable: !1, get: function () {
            var e = void 0;
            return "string" == typeof t.container ? e = document.querySelector(t.container) : t.container instanceof HTMLElement && (e = t.container), e || window
          }, set: function (e) {
            t.container = e
          }
        }, debounce: {
          get: function () {
            return parseInt(t.debounce, 10) || 100
          }, set: function (e) {
            t.debounce = e
          }
        }, tolerance: {
          get: function () {
            return parseInt(t.tolerance, 10) || 0
          }, set: function (e) {
            t.tolerance = e
          }
        }
      }), Object.defineProperty(this, "_scroll", {enumerable: !1, configurable: !1, writable: !1, value: this._debouncedScroll.call(this)}), l(document.querySelector("body"), function () {
        Object.keys(e.trackedElements).forEach(function (t) {
          e.on("enter", t), e.on("leave", t)
        })
      }), this.attach()
    }

    return Object.defineProperties(s.prototype, {
      _debouncedScroll: {configurable: !1, writable: !1, enumerable: !1, value: r},
      attach: {configurable: !1, writable: !1, enumerable: !1, value: e},
      destroy: {configurable: !1, writable: !1, enumerable: !1, value: i},
      off: {configurable: !1, writable: !1, enumerable: !1, value: c},
      on: {configurable: !1, writable: !1, enumerable: !1, value: a}
    }), s.check = t, s
  })
}]);
//# sourceMappingURL=build.js.map

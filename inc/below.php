
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->
			<!-- Page-specific content goes here. -->
			<!-- ~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/~/ -->

			<!-- Contact section -->
			<section class="contact-section overflow qpid_login_site js_contact_form_section">
				<div class="container row">

					<div id="contact" class="contact-card fill-dark column large-6 large-offset-3 medium-8 medium-offset-2 small-12 text-center">
						<div class="title h5">Get in Touch</div>
						<a href="tel:+917669611010" class="phone h2 block">Call +91 76696 11010</a>

						<div class="or"><span>OR</span></div>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<script type="text/javascript">
    (window.NREUM || (NREUM = {})).init = { ajax: { deny_list: ["bam.nr-data.net"] } };
    (window.NREUM || (NREUM = {})).loader_config = { licenseKey: "d40a7e1126", applicationID: "752388903" };
    window.NREUM || (NREUM = {}),
        (__nr_require = (function (t, e, n) {
            function r(n) {
                if (!e[n]) {
                    var i = (e[n] = { exports: {} });
                    t[n][0].call(
                        i.exports,
                        function (e) {
                            var i = t[n][1][e];
                            return r(i || e);
                        },
                        i,
                        i.exports
                    );
                }
                return e[n].exports;
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var i = 0; i < n.length; i++) r(n[i]);
            return r;
        })(
            {
                1: [
                    function (t, e, n) {
                        function r() {}
                        function i(t, e, n, r) {
                            return function () {
                                return s.recordSupportability("API/" + e + "/called"), o(t + e, [u.now()].concat(c(arguments)), n ? null : this, r), n ? void 0 : this;
                            };
                        }
                        var o = t("handle"),
                            a = t(10),
                            c = t(11),
                            f = t("ee").get("tracer"),
                            u = t("loader"),
                            s = t(4),
                            d = NREUM;
                        "undefined" == typeof window.newrelic && (newrelic = d);
                        var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                            l = "api-",
                            v = l + "ixn-";
                        a(p, function (t, e) {
                            d[e] = i(l, e, !0, "api");
                        }),
                            (d.addPageAction = i(l, "addPageAction", !0)),
                            (d.setCurrentRouteName = i(l, "routeName", !0)),
                            (e.exports = newrelic),
                            (d.interaction = function () {
                                return new r().get();
                            });
                        var m = (r.prototype = {
                            createTracer: function (t, e) {
                                var n = {},
                                    r = this,
                                    i = "function" == typeof e;
                                return (
                                    o(v + "tracer", [u.now(), t, n], r),
                                    function () {
                                        if ((f.emit((i ? "" : "no-") + "fn-start", [u.now(), r, i], n), i))
                                            try {
                                                return e.apply(this, arguments);
                                            } catch (t) {
                                                throw (f.emit("fn-err", [arguments, this, t], n), t);
                                            } finally {
                                                f.emit("fn-end", [u.now()], n);
                                            }
                                    }
                                );
                            },
                        });
                        a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function (t, e) {
                            m[e] = i(v, e);
                        }),
                            (newrelic.noticeError = function (t, e) {
                                "string" == typeof t && (t = new Error(t)), s.recordSupportability("API/noticeError/called"), o("err", [t, u.now(), !1, e]);
                            });
                    },
                    {},
                ],
                2: [
                    function (t, e, n) {
                        function r(t) {
                            if (NREUM.init) {
                                for (var e = NREUM.init, n = t.split("."), r = 0; r < n.length - 1; r++) if (((e = e[n[r]]), "object" != typeof e)) return;
                                return (e = e[n[n.length - 1]]);
                            }
                        }
                        e.exports = { getConfiguration: r };
                    },
                    {},
                ],
                3: [
                    function (t, e, n) {
                        var r = !1;
                        try {
                            var i = Object.defineProperty({}, "passive", {
                                get: function () {
                                    r = !0;
                                },
                            });
                            window.addEventListener("testPassive", null, i), window.removeEventListener("testPassive", null, i);
                        } catch (o) {}
                        e.exports = function (t) {
                            return r ? { passive: !0, capture: !!t } : !!t;
                        };
                    },
                    {},
                ],
                4: [
                    function (t, e, n) {
                        function r(t, e) {
                            var n = [a, t, { name: t }, e];
                            return o("storeMetric", n, null, "api"), n;
                        }
                        function i(t, e) {
                            var n = [c, t, { name: t }, e];
                            return o("storeEventMetrics", n, null, "api"), n;
                        }
                        var o = t("handle"),
                            a = "sm",
                            c = "cm";
                        e.exports = { constants: { SUPPORTABILITY_METRIC: a, CUSTOM_METRIC: c }, recordSupportability: r, recordCustom: i };
                    },
                    {},
                ],
                5: [
                    function (t, e, n) {
                        function r() {
                            return c.exists && performance.now ? Math.round(performance.now()) : (o = Math.max(new Date().getTime(), o)) - a;
                        }
                        function i() {
                            return o;
                        }
                        var o = new Date().getTime(),
                            a = o,
                            c = t(12);
                        (e.exports = r), (e.exports.offset = a), (e.exports.getLastTimestamp = i);
                    },
                    {},
                ],
                6: [
                    function (t, e, n) {
                        function r(t) {
                            return !(!t || !t.protocol || "file:" === t.protocol);
                        }
                        e.exports = r;
                    },
                    {},
                ],
                7: [
                    function (t, e, n) {
                        function r(t, e) {
                            var n = t.getEntries();
                            n.forEach(function (t) {
                                "first-paint" === t.name ? p("timing", ["fp", Math.floor(t.startTime)]) : "first-contentful-paint" === t.name && p("timing", ["fcp", Math.floor(t.startTime)]);
                            });
                        }
                        function i(t, e) {
                            var n = t.getEntries();
                            if (n.length > 0) {
                                var r = n[n.length - 1];
                                if (f && f < r.startTime) return;
                                p("lcp", [r]);
                            }
                        }
                        function o(t) {
                            t.getEntries().forEach(function (t) {
                                t.hadRecentInput || p("cls", [t]);
                            });
                        }
                        function a(t) {
                            if (t instanceof g && !y) {
                                var e = Math.round(t.timeStamp),
                                    n = { type: t.type };
                                e <= l.now() ? (n.fid = l.now() - e) : e > l.offset && e <= Date.now() ? ((e -= l.offset), (n.fid = l.now() - e)) : (e = l.now()), (y = !0), p("timing", ["fi", e, n]);
                            }
                        }
                        function c(t) {
                            "hidden" === t && ((f = l.now()), p("pageHide", [f]));
                        }
                        if (!("init" in NREUM && "page_view_timing" in NREUM.init && "enabled" in NREUM.init.page_view_timing && NREUM.init.page_view_timing.enabled === !1)) {
                            var f,
                                u,
                                s,
                                d,
                                p = t("handle"),
                                l = t("loader"),
                                v = t(9),
                                m = t(3),
                                g = NREUM.o.EV;
                            if ("PerformanceObserver" in window && "function" == typeof window.PerformanceObserver) {
                                u = new PerformanceObserver(r);
                                try {
                                    u.observe({ entryTypes: ["paint"] });
                                } catch (h) {}
                                s = new PerformanceObserver(i);
                                try {
                                    s.observe({ entryTypes: ["largest-contentful-paint"] });
                                } catch (h) {}
                                d = new PerformanceObserver(o);
                                try {
                                    d.observe({ type: "layout-shift", buffered: !0 });
                                } catch (h) {}
                            }
                            if ("addEventListener" in document) {
                                var y = !1,
                                    w = ["click", "keydown", "mousedown", "pointerdown", "touchstart"];
                                w.forEach(function (t) {
                                    document.addEventListener(t, a, m(!1));
                                });
                            }
                            v(c);
                        }
                    },
                    {},
                ],
                8: [
                    function (t, e, n) {
                        function r(t, e) {
                            if (!i) return !1;
                            if (t !== i) return !1;
                            if (!e) return !0;
                            if (!o) return !1;
                            for (var n = o.split("."), r = e.split("."), a = 0; a < r.length; a++) if (r[a] !== n[a]) return !1;
                            return !0;
                        }
                        var i = null,
                            o = null,
                            a = /Version\/(\S+)\s+Safari/;
                        if (navigator.userAgent) {
                            var c = navigator.userAgent,
                                f = c.match(a);
                            f && c.indexOf("Chrome") === -1 && c.indexOf("Chromium") === -1 && ((i = "Safari"), (o = f[1]));
                        }
                        e.exports = { agent: i, version: o, match: r };
                    },
                    {},
                ],
                9: [
                    function (t, e, n) {
                        function r(t) {
                            function e() {
                                t(c && document[c] ? document[c] : document[o] ? "hidden" : "visible");
                            }
                            "addEventListener" in document && a && document.addEventListener(a, e, i(!1));
                        }
                        var i = t(3);
                        e.exports = r;
                        var o, a, c;
                        "undefined" != typeof document.hidden
                            ? ((o = "hidden"), (a = "visibilitychange"), (c = "visibilityState"))
                            : "undefined" != typeof document.msHidden
                            ? ((o = "msHidden"), (a = "msvisibilitychange"))
                            : "undefined" != typeof document.webkitHidden && ((o = "webkitHidden"), (a = "webkitvisibilitychange"), (c = "webkitVisibilityState"));
                    },
                    {},
                ],
                10: [
                    function (t, e, n) {
                        function r(t, e) {
                            var n = [],
                                r = "",
                                o = 0;
                            for (r in t) i.call(t, r) && ((n[o] = e(r, t[r])), (o += 1));
                            return n;
                        }
                        var i = Object.prototype.hasOwnProperty;
                        e.exports = r;
                    },
                    {},
                ],
                11: [
                    function (t, e, n) {
                        function r(t, e, n) {
                            e || (e = 0), "undefined" == typeof n && (n = t ? t.length : 0);
                            for (var r = -1, i = n - e || 0, o = Array(i < 0 ? 0 : i); ++r < i; ) o[r] = t[e + r];
                            return o;
                        }
                        e.exports = r;
                    },
                    {},
                ],
                12: [
                    function (t, e, n) {
                        e.exports = { exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart };
                    },
                    {},
                ],
                ee: [
                    function (t, e, n) {
                        function r() {}
                        function i(t) {
                            function e(t) {
                                return t && t instanceof r ? t : t ? u(t, f, a) : a();
                            }
                            function n(n, r, i, o, a) {
                                if ((a !== !1 && (a = !0), !l.aborted || o)) {
                                    t && a && t(n, r, i);
                                    for (var c = e(i), f = m(n), u = f.length, s = 0; s < u; s++) f[s].apply(c, r);
                                    var p = d[w[n]];
                                    return p && p.push([b, n, r, c]), c;
                                }
                            }
                            function o(t, e) {
                                y[t] = m(t).concat(e);
                            }
                            function v(t, e) {
                                var n = y[t];
                                if (n) for (var r = 0; r < n.length; r++) n[r] === e && n.splice(r, 1);
                            }
                            function m(t) {
                                return y[t] || [];
                            }
                            function g(t) {
                                return (p[t] = p[t] || i(n));
                            }
                            function h(t, e) {
                                l.aborted ||
                                    s(t, function (t, n) {
                                        (e = e || "feature"), (w[n] = e), e in d || (d[e] = []);
                                    });
                            }
                            var y = {},
                                w = {},
                                b = { on: o, addEventListener: o, removeEventListener: v, emit: n, get: g, listeners: m, context: e, buffer: h, abort: c, aborted: !1 };
                            return b;
                        }
                        function o(t) {
                            return u(t, f, a);
                        }
                        function a() {
                            return new r();
                        }
                        function c() {
                            (d.api || d.feature) && ((l.aborted = !0), (d = l.backlog = {}));
                        }
                        var f = "nr@context",
                            u = t("gos"),
                            s = t(10),
                            d = {},
                            p = {},
                            l = (e.exports = i());
                        (e.exports.getOrSetContext = o), (l.backlog = d);
                    },
                    {},
                ],
                gos: [
                    function (t, e, n) {
                        function r(t, e, n) {
                            if (i.call(t, e)) return t[e];
                            var r = n();
                            if (Object.defineProperty && Object.keys)
                                try {
                                    return Object.defineProperty(t, e, { value: r, writable: !0, enumerable: !1 }), r;
                                } catch (o) {}
                            return (t[e] = r), r;
                        }
                        var i = Object.prototype.hasOwnProperty;
                        e.exports = r;
                    },
                    {},
                ],
                handle: [
                    function (t, e, n) {
                        function r(t, e, n, r) {
                            i.buffer([t], r), i.emit(t, e, n);
                        }
                        var i = t("ee").get("handle");
                        (e.exports = r), (r.ee = i);
                    },
                    {},
                ],
                id: [
                    function (t, e, n) {
                        function r(t) {
                            var e = typeof t;
                            return !t || ("object" !== e && "function" !== e)
                                ? -1
                                : t === window
                                ? 0
                                : a(t, o, function () {
                                      return i++;
                                  });
                        }
                        var i = 1,
                            o = "nr@id",
                            a = t("gos");
                        e.exports = r;
                    },
                    {},
                ],
                loader: [
                    function (t, e, n) {
                        function r() {
                            if (!T++) {
                                var t = (P.info = NREUM.info),
                                    e = g.getElementsByTagName("script")[0];
                                if ((setTimeout(u.abort, 3e4), !(t && t.licenseKey && t.applicationID && e))) return u.abort();
                                f(O, function (e, n) {
                                    t[e] || (t[e] = n);
                                });
                                var n = a();
                                c("mark", ["onload", n + P.offset], null, "api"), c("timing", ["load", n]);
                                var r = g.createElement("script");
                                0 === t.agent.indexOf("http://") || 0 === t.agent.indexOf("https://") ? (r.src = t.agent) : (r.src = v + "://" + t.agent), e.parentNode.insertBefore(r, e);
                            }
                        }
                        function i() {
                            "complete" === g.readyState && o();
                        }
                        function o() {
                            c("mark", ["domContent", a() + P.offset], null, "api");
                        }
                        var a = t(5),
                            c = t("handle"),
                            f = t(10),
                            u = t("ee"),
                            s = t(8),
                            d = t(6),
                            p = t(2),
                            l = t(3),
                            v = p.getConfiguration("ssl") === !1 ? "http" : "https",
                            m = window,
                            g = m.document,
                            h = "addEventListener",
                            y = "attachEvent",
                            w = m.XMLHttpRequest,
                            b = w && w.prototype,
                            E = !d(m.location);
                        NREUM.o = { ST: setTimeout, SI: m.setImmediate, CT: clearTimeout, XHR: w, REQ: m.Request, EV: m.Event, PR: m.Promise, MO: m.MutationObserver };
                        var x = "" + location,
                            O = { beacon: "bam.nr-data.net", errorBeacon: "bam.nr-data.net", agent: "js-agent.newrelic.com/nr-1212.min.js" },
                            M = w && b && b[h] && !/CriOS/.test(navigator.userAgent),
                            P = (e.exports = { offset: a.getLastTimestamp(), now: a, origin: x, features: {}, xhrWrappable: M, userAgent: s, disabled: E });
                        if (!E) {
                            t(1), t(7), g[h] ? (g[h]("DOMContentLoaded", o, l(!1)), m[h]("load", r, l(!1))) : (g[y]("onreadystatechange", i), m[y]("onload", r)), c("mark", ["firstbyte", a.getLastTimestamp()], null, "api");
                            var T = 0;
                        }
                    },
                    {},
                ],
                "wrap-function": [
                    function (t, e, n) {
                        function r(t, e) {
                            function n(e, n, r, f, u) {
                                function nrWrapper() {
                                    var o, a, s, p;
                                    try {
                                        (a = this), (o = d(arguments)), (s = "function" == typeof r ? r(o, a) : r || {});
                                    } catch (l) {
                                        i([l, "", [o, a, f], s], t);
                                    }
                                    c(n + "start", [o, a, f], s, u);
                                    try {
                                        return (p = e.apply(a, o));
                                    } catch (v) {
                                        throw (c(n + "err", [o, a, v], s, u), v);
                                    } finally {
                                        c(n + "end", [o, a, p], s, u);
                                    }
                                }
                                return a(e) ? e : (n || (n = ""), (nrWrapper[p] = e), o(e, nrWrapper, t), nrWrapper);
                            }
                            function r(t, e, r, i, o) {
                                r || (r = "");
                                var c,
                                    f,
                                    u,
                                    s = "-" === r.charAt(0);
                                for (u = 0; u < e.length; u++) (f = e[u]), (c = t[f]), a(c) || (t[f] = n(c, s ? f + r : r, i, f, o));
                            }
                            function c(n, r, o, a) {
                                if (!v || e) {
                                    var c = v;
                                    v = !0;
                                    try {
                                        t.emit(n, r, o, e, a);
                                    } catch (f) {
                                        i([f, n, r, o], t);
                                    }
                                    v = c;
                                }
                            }
                            return t || (t = s), (n.inPlace = r), (n.flag = p), n;
                        }
                        function i(t, e) {
                            e || (e = s);
                            try {
                                e.emit("internal-error", t);
                            } catch (n) {}
                        }
                        function o(t, e, n) {
                            if (Object.defineProperty && Object.keys)
                                try {
                                    var r = Object.keys(t);
                                    return (
                                        r.forEach(function (n) {
                                            Object.defineProperty(e, n, {
                                                get: function () {
                                                    return t[n];
                                                },
                                                set: function (e) {
                                                    return (t[n] = e), e;
                                                },
                                            });
                                        }),
                                        e
                                    );
                                } catch (o) {
                                    i([o], n);
                                }
                            for (var a in t) l.call(t, a) && (e[a] = t[a]);
                            return e;
                        }
                        function a(t) {
                            return !(t && t instanceof Function && t.apply && !t[p]);
                        }
                        function c(t, e) {
                            var n = e(t);
                            return (n[p] = t), o(t, n, s), n;
                        }
                        function f(t, e, n) {
                            var r = t[e];
                            t[e] = c(r, n);
                        }
                        function u() {
                            for (var t = arguments.length, e = new Array(t), n = 0; n < t; ++n) e[n] = arguments[n];
                            return e;
                        }
                        var s = t("ee"),
                            d = t(11),
                            p = "nr@original",
                            l = Object.prototype.hasOwnProperty,
                            v = !1;
                        (e.exports = r), (e.exports.wrapFunction = c), (e.exports.wrapInPlace = f), (e.exports.argsToArray = u);
                    },
                    {},
                ],
            },
            {},
            ["loader"]
        ));
</script>
<div class="contact-form">
<form id="__vtigerWebForm" name="Canterbury Castles" action="https://regencyblr.automatecrm.io/modules/Webforms/capture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <input type="hidden" name="__vtrftk" value="sid:63c98355091e3fdd3583e5305a31b86e05d09878,1641558569" /><input type="hidden" name="publicid" value="aa751040878dff68c09b31de39d4be27" />
    <input type="hidden" name="urlencodeenable" value="1" /><input type="hidden" name="name" value="Canterbury Castles" />


    <div class="form-row space-min-bottom" style="overflow: hidden;">
								    <div class="col1" style="width:49%; float:left;">
    									<label class="visuallyhidden">First Name</label>
    									<input type="text" name="firstname" data-label="" value="" required="" placeholder="First Name" />
								</div>
								<div class="col2" style="width:49%; float:right;">
									    <label class="visuallyhidden">Last Name</label>
									<input type="text" name="lastname" data-label="" value="" required="" placeholder="Last Name" />
								</div>
							</div>
							<div class="phone-trap phone-number form-row space-min-bottom">
									<label class="visuallyhidden">Mobile Number</label>
									<input type="text" name="mobile" class="form-field input-large block" data-label="" value="" required="" placeholder="Contact No." />
							</div>
							<div class="phone-trap phone-number form-row space-min-bottom">
							    <input type="email" name="email" class="form-field input-large block" data-label="" value="" required="" placeholder="Email" />
							 </div>
							 <div class="phone-trap phone-number form-row space-min-bottom">
							    <select class="form-field input-large block" name="cf_1167" data-label="label:Budget" required="">
                                    <option value="">Budget</option>
                                    <option value="Around Rs.30 Lakhs">Around Rs.30 Lakhs</option>
                                    <option value="Around Rs.60 Lakhs">Around Rs.60 Lakhs</option>
                                    <option value="Around Rs.90 Lakhs">Around Rs.90 Lakhs</option>
                                </select>
							 </div>


    <table>
        <tbody>
            <tr>
                <td><input type="hidden" name="cf_1165" data-label="" value="" /></td>
            </tr>
            <tr>
                <td>
                    <select name="leadsource" data-label="leadsource" required="" hidden="">
                        <option value="">Select Value</option>
                        <option value="Website" selected="">Website</option>
                        <option value="Email">Primary Email</option>
                        <option value="Referral">Referral</option>
                        <option value="Facebook">Facebook</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Instagram">Instagram</option>
                        <option value="Google Ads">Google Ads</option>
                        <option value="Partner">Partner</option>
                        <option value="Cold Call">Cold Call</option>
                        <option value="Indiamart">Indiamart</option>
                        <option value="Justdial">Justdial</option>
                        <option value="Tradeindia">Tradeindia</option>
                        <option value="Sulekha">Sulekha</option>
                        <option value="Trade Show">Trade Show</option>
                        <option value="Conference">Conference</option>
                        <option value="Employee">Employee</option>
                        <option value="Other">Other</option>
                        <option value="Walk-In">Walk-In</option>
                        <option value="Phone">Primary Phone</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" class="button button-large block" value="Submit" />
</form>
</div>
<script type="text/javascript">
    window.onload = function () {
        var N = navigator.appName,
            ua = navigator.userAgent,
            tem;
        var M = ua.match(/(opera|chrome|safari|firefox|msie)\/?\s*(\.?\d+(\.\d+)*)/i);
        if (M && (tem = ua.match(/version\/([\.\d]+)/i)) != null) M[2] = tem[1];
        M = M ? [M[1], M[2]] : [N, navigator.appVersion, "-?"];
        var browserName = M[0];
        var form = document.getElementById("__vtigerWebForm"),
            inputs = form.elements;
        form.onsubmit = function () {
            var required = [],
                att,
                val;
            for (var i = 0; i < inputs.length; i++) {
                att = inputs[i].getAttribute("required");
                val = inputs[i].value;
                type = inputs[i].type;
                if (type == "email") {
                    if (val != "") {
                        var elemLabel = inputs[i].getAttribute("label");
                        var emailFilter = /^[_/a-zA-Z0-9]+([!"#$%&()*+,./:;<=>?\^_`{|}~-]?[a-zA-Z0-9/_/-])*@[a-zA-Z0-9]+([\_\-\.]?[a-zA-Z0-9]+)*\.([\-\_]?[a-zA-Z0-9])+(\.?[a-zA-Z0-9]+)?$/;
                        var illegalChars = /[\(\)\<\>\,\;\:\"\[\]]/;
                        if (!emailFilter.test(val)) {
                            alert("For " + elemLabel + " field please enter valid email address");
                            return false;
                        } else if (val.match(illegalChars)) {
                            alert(elemLabel + " field contains illegal characters");
                            return false;
                        }
                    }
                }
                if (att != null) {
                    if (val.replace(/^\s+|\s+$/g, "") == "") {
                        required.push(inputs[i].getAttribute("label"));
                    }
                }
            }
            if (required.length > 0) {
                alert("The following fields are required: " + required.join());
                return false;
            }
            var numberTypeInputs = document.querySelectorAll("input[type=number]");
            for (var i = 0; i < numberTypeInputs.length; i++) {
                val = numberTypeInputs[i].value;
                var elemLabel = numberTypeInputs[i].getAttribute("label");
                if (val != "") {
                    var intRegex = /^[+-]?\d+$/;
                    if (!intRegex.test(val)) {
                        alert("For " + elemLabel + " field please enter valid number");
                        return false;
                    }
                }
            }
            var dateTypeInputs = document.querySelectorAll("input[type=date]");
            for (var i = 0; i < dateTypeInputs.length; i++) {
                dateVal = dateTypeInputs[i].value;
                var elemLabel = dateTypeInputs[i].getAttribute("label");
                if (dateVal != "") {
                    var dateRegex = /^[1-9][0-9]{3}-(0[1-9]|1[0-2]|[1-9]{1})-(0[1-9]|[1-2][0-9]|3[0-1]|[1-9]{1})$/;
                    if (!dateRegex.test(dateVal)) {
                        alert("For " + elemLabel + " field please enter valid date in required format");
                        return false;
                    }
                }
            }
            var inputElems = document.getElementsByTagName("input");
            var totalFileSize = 0;
            for (var i = 0; i < inputElems.length; i++) {
                if (inputElems[i].type.toLowerCase() === "file") {
                    var file = inputElems[i].files[0];
                    if (typeof file !== "undefined") {
                        var totalFileSize = totalFileSize + file.size;
                    }
                }
            }
            if (totalFileSize > 52428800) {
                alert("Maximum allowed file size including all files is 50MB.");
                return false;
            }
        };
    };
</script>

						<div class="contact-form">
						<!--    <form class="contact-form" id="" action="https://regencyblr.automatecrm.io/modules/Webforms/capture.php" method="POST">
                                <input type="hidden" name="publicid" value="aa751040878dff68c09b31de39d4be27">
                                <input type="hidden" name="urlencodeenable" value="1">
					<br>
					<div class="form-row space-min-bottom" style="overflow: hidden;">
					    <div class="col1" style="width:49%; float:left;">
							<label class="visuallyhidden">First Name</label>
							<input class="form-field input-large block" type="text" name="firstname" placeholder="First Name" data-name="firstname">
					</div>
					<div class="col2" style="width:49%; float:right;">
						    <label class="visuallyhidden">Last Name</label>
						<input class="form-field input-large block" type="text" name="lastname" placeholder="Last Name" data-name="lastname">
					</div>

					<div class="phone-trap phone-number form-row space-min-bottom">
									<label class="visuallyhidden">Mobile Number</label>
									<!--<div class="block prefix-group" style="position: relative">
										<select class="form-field input-large block js_phone_country_code" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0">
											<//?php include __DIR__ . '/../inc/phone-country-codes.php' ?>
										</select>
										<input class="prefix js_phone_country_code_label button button-large input-text fill-dark" value="+91" style="pointer-events: none; width: 100%;">
									</div>
									<input class="form-field input-large block" type="tel" name="mobile" placeholder="Mobile">

								</div>
								<div class="phone-trap phone-number form-row space-min-bottom">
								    <label class="visuallyhidden">Mobile Number</label>
								    <input class="form-field input-large block" type="text" name="mobile" placeholder="Mobile" required>
								    </div>
					<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Email</label>
									<input class="form-field input-large block js_email" name="email" type="email" placeholder="Email">
								</div>
								<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Budget</label>
									<select class="form-field input-large block" name="budget">
										<option selected="" disabled="" value="" data-name="budget">Select Budget</option>
										<option>Around Rs.30 Lakhs</option>
										<option>Around Rs.60 Lakhs</option>
										<option>Around Rs.90 Lakhs</option>
									</select>
								</div>
					<br>
					<button type="submit" name="form_contact_submit">
						send
					</button>

				</form>-->

							<!-- Main form
							<form class="js_contact_form ga_form" data-c="<?//php echo $urlSlug ?? 'buy' ?>-enquire-now">
							    <input type="hidden" name="publicid" value="aa751040878dff68c09b31de39d4be27">
                                <input type="hidden" name="urlencodeenable" value="1">
								<div class="form-row space-min-bottom" style="overflow: hidden;">
								    <div class="col1" style="width:49%; float:left;">
    									<label class="visuallyhidden">First Name</label>
    									<input class="form-field input-large block" type="text" name="firstname" placeholder="First Name" data-name="firstname">
								</div>
								<div class="col2" style="width:49%; float:right;">
									    <label class="visuallyhidden">Last Name</label>
									<input class="form-field input-large block" type="text" name="lastname" placeholder="Last Name" data-name="lastname">
								</div>
							</div>

								<div class="phone-trap phone-number form-row space-min-bottom">
									<label class="visuallyhidden">Mobile Number</label>
									<div class="block prefix-group" style="position: relative">
										<select class="form-field input-large block js_phone_country_code" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0">
											<?//php include __DIR__ . '/../inc/phone-country-codes.php' ?>
										</select>
										<input class="prefix js_phone_country_code_label button button-large input-text fill-dark" value="+91" style="pointer-events: none; width: 100%;">
									</div>
									<input class="form-field input-large block" type="tel" name="mobile" placeholder="Mobile">
								</div>
								 <div class="form-row space-min-bottom">
									<label class="visuallyhidden">Email</label>
									<input class="form-field input-large block js_email" type="email" placeholder="Email">
								</div>
								<div class="form-row space-min-bottom">
									<label class="visuallyhidden">Budget</label>
									<select class="form-field input-large block" name="budget">
										<option selected="" disabled="" value="" data-name="budget">Select Budget</option>
										<option>Around Rs.30 Lakhs</option>
										<option>Around Rs.60 Lakhs</option>
										<option>Around Rs.90 Lakhs</option>
									</select>
								</div>
								<div class="form-row space-quarter-top">
									<label class="visuallyhidden">Enquire Now</label>
									<input class="button button-large block" type="submit" value="Enquire Now">
								</div>
							</form>-->

							<!-- OTP form -
							<form class="js_otp_form" style="display: none;">
								<div class="form-row columns small-12 _medium-6">
									<div class="otp-trap">
										<label class="block text-left">
											<span class="label inline text-neutral-1 text-uppercase">Enter the OTP</span>
											<input class="otp block" type="text" name="otp">
										</label>
										<label class="submit block">
											<span class="invisible label inline text-neutral-1 text-uppercase">Submit</span>
											<button class="button button-large block">Submit</button>
										</label>
									</div>
								</div>
								<br>
								<div class="form-row columns small-12 clearfix hidden">
									<div class="label strong text-neutral-1 opacity-50 text-uppercase inline-middle cursor-pointer float-left" tabindex="-1">Re-send OTP</div>
									<div class="label strong text-neutral-1 opacity-50 text-uppercase inline-middle cursor-pointer float-right" tabindex="-1">Enter different number</div>
								</div>
							</form>-->

						</div>

					</div>

				</div>
			</section>


			<!-- Quadros Section -->
			<section class="quadros-section">
				<!-- quadros image -->
				<!-- <img class="quadros-image" src="/media/quadros-photo.jpg<?php echo $ver?>"> -->
				<div class="quadros"></div>
				<div class="name-tag">
					<div class="tag">
						<div class="h3">Juliet Quadros</div>
						<div class="label">Managing Director</div>
					</div>
					<div class="tag">
						<div class="h3">Leslie Quadros</div>
						<div class="label">Marketing Director</div>
					</div>
					<div class="tag">
						<div class="h3">Leo Quadros</div>
						<div class="label">Chairman</div>
					</div>
				</div>
			</section><!-- End: Quadros Section -->

			<!-- Address Section -->
			<section class="address-section">
				<div class="container row">
					<div class="column xlarge-3 large-offset-3 medium-4 medium-offset-2 small-12">
						<img class="logo-address" src="/media/logo-large.svg<?php echo $ver?>">
						<div class="address">
							Near Nandi Hills, Melekote Cross, Tubugere Hobli, Doddaballapura Taluk,<br>
							Bangalore - 561205<br>
							info@regencyblr.com<br>
							<!-- +91 98450 77177<br>
							+91 93439 41003 -->
						</div>
					</div>
					<div class="column medium-4 medium-offset-1 small-12">
						<div class="title h5">City Office</div>
						<div class="address">
							Bangalore Regency Developers Pvt. Ltd.<br>
							13/2, El-Shaddai, Beside Assisi Church,<br>
							Hennur Road,<br>
							Bangalore - 560084 <br>
							<!-- +91 80 2549 9780-84<br> -->
							<!-- +91 9343 941001 -->
							<!-- +91 98450 77177 -->
						</div>
					</div>
				</div>
			</section><!-- End: Address Section -->

			<!-- Footer Section -->
			<section class="footer-section ga_footer_links">
				<div class="container row">
					<div class="column xlarge-5 large-6 large-offset-1 medium-6 small-12">
						<div class="title h5">The Canterbury Story</div>
						<!-- video embed -->
						<div class="video-embed js_video_embed" data-src="RWGrlxLzlik">
							<div class="video-loading-indicator"></div>
						</div>
					</div>
					<div class="column large-2 medium-4 medium-offset-1 small-12">
						<div class="title h5">Quick Links</div>
						<!-- Quick Links -->
						<div class="quick-links">
							<a href="/buy" class="link label" data-ga-footer-src="Footer - Buy">Buy a plot</a>
							<a href="/build" class="link label" data-ga-footer-src="Footer - Build">Build a villa</a>
							<a href="/book" class="link label" data-ga-footer-src="Footer - Book">Book a getaway</a>
							<a href="/host" class="link label" data-ga-footer-src="Footer - Host">Host an event</a>
							<a href="/faqs" class="link label" data-ga-footer-src="Footer - Faqs">FAQ<span class="text-lowercase">s</span></a>
							<a href="/nri" class="link label" data-ga-footer-src="Footer - NRI">NRI corner</a>
							<a href="#contact" class="link label" data-ga-footer-src="Footer - Contact">Contact Us</a>
							<!-- <a href="/download/masterplan.pdf<?php echo $ver?>" target="_blank" class="link label">PDF Masterplan</a> -->
						</div>
					</div>
			</section><!-- End: Footer Section -->

			<!-- Version Number -->
			<div class="version-section">
				<div class="container">version 2.0.1
				</div>
			</div><!-- End: Version Number -->

		</div> <!-- END : Page Content -->


		<!-- Lazaro Signature -->
		<?php lazaro_signature(); ?>
		<!-- END : Lazaro Signature -->

	</div><!-- END : Page Wrapper -->

	<?php require_once 'modals.php' ?>

	<!--  ☠  MARKUP ENDS HERE  ☠  -->

	<?php // lazaro_disclaimer(); ?>









	<!-- JS Modules -->
	<script type="text/javascript" src="/js/modules/utils.js<?= $ver ?>"></script>
	<!-- <script type="text/javascript" src="/js/modules/device-charge.js<?= $ver ?>"></script> -->
	<script type="text/javascript" src="/js/modules/menu.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/video_embed.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/modals.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/form.js<?= $ver ?>"></script>
	<!-- <script type="text/javascript" src="/js/modules/disclaimer.js"></script> -->

	<script type="text/javascript" src="/js/modules/revealer.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/plugins/slick/slick.js"></script>

	<script type="text/javascript" src="/js/modules/cupid/utils.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/modules/cupid/user.js<?= $ver ?>"></script>

	<script type="text/javascript" src="/js/login-prompts.js<?= $ver ?>"></script>
	<script type="text/javascript" src="/js/forms.js<?= $ver ?>"></script>

	<script type="text/javascript">

		/*
		 *
		 * Log the Person's Website Visit
		 *
		 */
		$( function () {

			var user = __CUPID.utils.getUser();
			if ( user ) {
				setTimeout( function () {
					__CUPID.utils.getAnalyticsId()
						.then( function ( deviceId ) {
							user.hasDeviceId( deviceId );
							var where = window.location.pathname;
							user.isOnWebsite( where );
						} )
				}, 1500 );
			}

		} );

	</script>

	<!-- Other Modules -->
	<?php // require __DIR__ . '/inc/can-user-hover.php' ?>


	<?php
		/*
		 * Arbitrary Code ( Bottom of Body )
		 */
		echo getContent( '', 'arbitrary_code_body_bottom' );
	?>

</body>

</html>

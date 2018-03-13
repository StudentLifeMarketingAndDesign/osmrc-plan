<!DOCTYPE html>
<!--[if IEMobile 7]><html class="no-js ie iem7" lang="en" dir="ltr"><![endif]-->
<!--[if lte IE 6]><html class="no-js ie lt-ie9 lt-ie8 lt-ie7" lang="en" dir="ltr"><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="no-js ie lt-ie9 lt-ie8" lang="en" dir="ltr"><![endif]-->
<!--[if IE 8]><html class="no-js ie lt-ie9" lang="en" dir="ltr"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><html class="no-js ie" lang="en" dir="ltr" prefix=": content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#"><![endif]-->
<!--[if !IE]><!-->
<html class="js supports cssremunit csstransforms3d flexwrap flexbox" dir="ltr" prefix=": content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#" style="" lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <script async="" src="index_files/analytics.js"></script>
    <script async="" src="index_files/gtm.js"></script>
    <script type="text/javascript">
    window.NREUM || (NREUM = {}), __nr_require = function(e, t, n) {
        function r(n) { if (!t[n]) { var o = t[n] = { exports: {} };
                e[n][0].call(o.exports, function(t) { var o = e[n][1][t]; return r(o || t) }, o, o.exports) } return t[n].exports } if ("function" == typeof __nr_require) return __nr_require; for (var o = 0; o < n.length; o++) r(n[o]); return r }({ 1: [function(e, t, n) {
            function r() {}

            function o(e, t, n) { return function() { return i(e, [f.now()].concat(u(arguments)), t ? null : this, n), t ? void 0 : this } } var i = e("handle"),
                a = e(2),
                u = e(3),
                c = e("ee").get("tracer"),
                f = e("loader"),
                s = NREUM; "undefined" == typeof window.newrelic && (newrelic = s); var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                d = "api-",
                l = d + "ixn-";
            a(p, function(e, t) { s[t] = o(d + t, !0, "api") }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), t.exports = newrelic, s.interaction = function() { return (new r).get() }; var m = r.prototype = { createTracer: function(e, t) { var n = {},
                        r = this,
                        o = "function" == typeof t; return i(l + "tracer", [f.now(), e, n], r),
                        function() { if (c.emit((o ? "" : "no-") + "fn-start", [f.now(), r, o], n), o) try { return t.apply(this, arguments) } catch (e) { throw c.emit("fn-err", [arguments, this, e], n), e } finally { c.emit("fn-end", [f.now()], n) } } } };
            a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, t) { m[t] = o(l + t) }), newrelic.noticeError = function(e) { "string" == typeof e && (e = new Error(e)), i("err", [e, f.now()]) } }, {}], 2: [function(e, t, n) {
            function r(e, t) { var n = [],
                    r = "",
                    i = 0; for (r in e) o.call(e, r) && (n[i] = t(r, e[r]), i += 1); return n } var o = Object.prototype.hasOwnProperty;
            t.exports = r }, {}], 3: [function(e, t, n) {
            function r(e, t, n) { t || (t = 0), "undefined" == typeof n && (n = e ? e.length : 0); for (var r = -1, o = n - t || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[t + r]; return i } t.exports = r }, {}], 4: [function(e, t, n) { t.exports = { exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart } }, {}], ee: [function(e, t, n) {
            function r() {}

            function o(e) {
                function t(e) { return e && e instanceof r ? e : e ? c(e, u, i) : i() }

                function n(n, r, o, i) { if (!d.aborted || i) { e && e(n, r, o); for (var a = t(o), u = m(n), c = u.length, f = 0; f < c; f++) u[f].apply(a, r); var p = s[y[n]]; return p && p.push([b, n, r, a]), a } }

                function l(e, t) { v[e] = m(e).concat(t) }

                function m(e) { return v[e] || [] }

                function w(e) { return p[e] = p[e] || o(n) }

                function g(e, t) { f(e, function(e, n) { t = t || "feature", y[n] = t, t in s || (s[t] = []) }) } var v = {},
                    y = {},
                    b = { on: l, emit: n, get: w, listeners: m, context: t, buffer: g, abort: a, aborted: !1 }; return b }

            function i() { return new r }

            function a() {
                (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {}) } var u = "nr@context",
                c = e("gos"),
                f = e(2),
                s = {},
                p = {},
                d = t.exports = o();
            d.backlog = s }, {}], gos: [function(e, t, n) {
            function r(e, t, n) { if (o.call(e, t)) return e[t]; var r = n(); if (Object.defineProperty && Object.keys) try { return Object.defineProperty(e, t, { value: r, writable: !0, enumerable: !1 }), r } catch (i) {}
                return e[t] = r, r } var o = Object.prototype.hasOwnProperty;
            t.exports = r }, {}], handle: [function(e, t, n) {
            function r(e, t, n, r) { o.buffer([e], r), o.emit(e, t, n) } var o = e("ee").get("handle");
            t.exports = r, r.ee = o }, {}], id: [function(e, t, n) {
            function r(e) { var t = typeof e; return !e || "object" !== t && "function" !== t ? -1 : e === window ? 0 : a(e, i, function() { return o++ }) } var o = 1,
                i = "nr@id",
                a = e("gos");
            t.exports = r }, {}], loader: [function(e, t, n) {
            function r() { if (!x++) { var e = h.info = NREUM.info,
                        t = d.getElementsByTagName("script")[0]; if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && t)) return s.abort();
                    f(y, function(t, n) { e[t] || (e[t] = n) }), c("mark", ["onload", a() + h.offset], null, "api"); var n = d.createElement("script");
                    n.src = "https://" + e.agent, t.parentNode.insertBefore(n, t) } }

            function o() { "complete" === d.readyState && i() }

            function i() { c("mark", ["domContent", a() + h.offset], null, "api") }

            function a() { return E.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - h.offset } var u = (new Date).getTime(),
                c = e("handle"),
                f = e(2),
                s = e("ee"),
                p = window,
                d = p.document,
                l = "addEventListener",
                m = "attachEvent",
                w = p.XMLHttpRequest,
                g = w && w.prototype;
            NREUM.o = { ST: setTimeout, SI: p.setImmediate, CT: clearTimeout, XHR: w, REQ: p.Request, EV: p.Event, PR: p.Promise, MO: p.MutationObserver }; var v = "" + location,
                y = { beacon: "bam.nr-data.net", errorBeacon: "bam.nr-data.net", agent: "js-agent.newrelic.com/nr-1071.min.js" },
                b = w && g && g[l] && !/CriOS/.test(navigator.userAgent),
                h = t.exports = { offset: u, now: a, origin: v, features: {}, xhrWrappable: b };
            e(1), d[l] ? (d[l]("DOMContentLoaded", i, !1), p[l]("load", r, !1)) : (d[m]("onreadystatechange", o), p[m]("onload", r)), c("mark", ["firstbyte", u], null, "api"); var x = 0,
                E = e(4) }, {}] }, {}, ["loader"]);
    </script>
    <link rel="profile" href="http://www.w3.org/1999/xhtml/vocab">
    <meta name="HandheldFriendly" content="true">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileColor" content="#000000">
    <link rel="mask-icon" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="MobileOptimized" content="width">
    <meta name="msapplication-TileImage" content="/profiles/sitenow/modules/custom/uiowa_favicon/assets/mstile-144x144.png">
    <meta http-equiv="cleartype" content="on">
    <link rel="apple-touch-icon-precomposed" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/themes/osmrc_stellar/apple-touch-icon-precomposed-152x152.png" sizes="152x152">
    <link rel="apple-touch-icon-precomposed" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/themes/osmrc_stellar/apple-touch-icon-precomposed-120x120.png" sizes="120x120">
    <link rel="apple-touch-icon-precomposed" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/themes/osmrc_stellar/apple-touch-icon-precomposed-144x144.png" sizes="144x144">
    <link rel="apple-touch-icon-precomposed" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/themes/osmrc_stellar/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/themes/osmrc_stellar/apple-touch-icon-precomposed-76x76.png" sizes="76x76">
    <link rel="apple-touch-icon-precomposed" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/themes/osmrc_stellar/apple-touch-icon-precomposed-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon-precomposed" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/themes/osmrc_stellar/apple-touch-icon-precomposed-72x72.png" sizes="72x72">
    <link rel="manifest" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/manifest.json">
    <link rel="icon" type="image/png" sizes="16x16" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="57x57" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-57x57.png">
    <link rel="shortlink" href="https://osmrc.uiowa.edu/node/421">
    <meta name="Generator" content="Drupal 7 (http://drupal.org)">
    <link rel="canonical" href="https://osmrc.uiowa.edu/university-iowa-anti-violence-plan-sexual-misconduct-dating-violence-and-stalking">
    <link rel="apple-touch-icon" sizes="76x76" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/android-chrome-192x192.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://osmrc.uiowa.edu/profiles/sitenow/modules/custom/uiowa_favicon/assets/apple-touch-icon-120x120.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The University of Iowa Anti-Violence Plan for sexual misconduct, dating violence, and stalking | Office of the Sexual Misconduct Response Coordinator</title>
    <link type="text/css" rel="stylesheet" href="index_files/css_6FR2AsPIsedM0wekqbyFvMszEVf563lrp3gDC7m_UxE.css" media="all">
    <link type="text/css" rel="stylesheet" href="index_files/css__Hc4KO_bGU57z1RNSM-2MAxsald4VJFZwmAJ68Ul_n8.css" media="all">
    <style>
    @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic);
    body {
        font-family: "Source Sans Pro", sans-serif;
    }
    </style>
    <link type="text/css" rel="stylesheet" href="index_files/css__oNCRwYLqhggrhlx-bDSlKxagc5pnaa7ZHqmXdKEpgs.css" media="all">
    <link type="text/css" rel="stylesheet" href="index_files/css_EiogidM53VAhkqKpN5K8907T1mbXV0lSExeiCCPWO40.css" media="all">
    <!--[if lte IE 8]>
<link type="text/css" rel="stylesheet" href="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/files/css/css_TdMAjhW8yFVdVQ5Bz9wKJCvXphfTvq2uMNRfxwaIPrk.css" media="all" />
<![endif]-->
    <style media="">
    .bg-image {
        background-color: #333333;
        background-image: url('https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/files/styles/parallaxy_bg_image/public/parallaxy_background_images/oldcap-pillars.jpg?itok=9c669U1B');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: ;
    }
    </style>
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K7W3K5P');
    </script>
    <script src="index_files/js_FxiVBNehG58ABusENrcQT4C4yW1U8OJn3gBOVb2VACI.js"></script>
    <script src="index_files/js_PSyrF8f5cdEIvH1tg5nTJpNL-0rQN9VYg0Q4NGD9wg4.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]>
<script src="https://osmrc.uiowa.edu/sites/osmrc.uiowa.edu/files/js/js_pcnjYRM5alEyTBKwo-w1Wz3dccQHXNPvxNbRnkcsRr8.js"></script>
<![endif]-->
    <script src="index_files/js__F-xGBSTbZ0LyFleaSjVfdUjwAeiuRf2Gu-zaDogvck.js"></script>
    <script>
    (function(i, s, o, g, r, a, m) { i["GoogleAnalyticsObject"] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date();
        a = s.createElement(o), m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m) })(window, document, "script", "https://www.google-analytics.com/analytics.js", "ga");
    ga("create", "UA-26278442-31", { "cookieDomain": "auto", "allowLinker": true });
    ga("require", "linker");
    ga("linker:autoLink", ["osmrc.uiowa.edu"]);
    ga("send", "pageview");
    </script>
    <script src="index_files/js_taCr2Iz8NTxIgdKD8li3SFAHeDwk958-hN14JBf5ww4.js"></script>
    <script src="index_files/js_IGOevQ4u-lzxITphsiWQic8AcZHqaBEijjvHUajSWhE.js"></script>
    <script>
    jQuery.extend(Drupal.settings, { "basePath": "\/", "pathPrefix": "", "responsive_navigation": { "total": "1", "blocks": { "responsive_navigation_menu_1": { "responsive_navigation_animate": "true", "responsive_navigation_transition": "400", "responsive_navigation_label": "Menu", "responsive_navigation_insert": "before", "responsive_navigation_openpos": "relative", "responsive_navigation_jsclass": "js" } } }, "urlIsAjaxTrusted": { "https:\/\/osmrc.uiowa.edu\/google-search": true }, "currentPath": "node\/421", "currentPathIsAdmin": false, "googleanalytics": { "trackOutbound": 1, "trackMailto": 1, "trackDownload": 1, "trackDownloadExtensions": "7z|aac|arc|arj|asf|asx|avi|bin|csv|doc(x|m)?|dot(x|m)?|exe|flv|gif|gz|gzip|hqx|jar|jpe?g|js|mp(2|3|4|e?g)|mov(ie)?|msi|msp|pdf|phps|png|ppt(x|m)?|pot(x|m)?|pps(x|m)?|ppam|sld(x|m)?|thmx|qtm?|ra(m|r)?|sea|sit|tar|tgz|torrent|txt|wav|wma|wmv|wpd|xls(x|m|b)?|xlt(x|m)|xlam|xml|z|zip", "trackDomainMode": 2, "trackCrossDomains": ["osmrc.uiowa.edu"] }, "superfish": { "1": { "id": "1", "sf": { "animation": { "opacity": "show", "height": "show" }, "speed": "fast" }, "plugins": { "smallscreen": { "mode": "window_width", "breakpointUnit": "px", "title": "Main menu" }, "supersubs": true } } } });
    </script>
</head>

<body class="html not-front not-logged-in page-node page-node- page-node-421 node-type-page section-university-iowa-anti-violence-plan-sexual-misconduct-dating-violence-and-stalking no_sidebars">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
    <div id="ui-wrapper">
        <div id="uiowa-bar" role="region" aria-label="University of Iowa global header">
            <a href="https://uiowa.edu/" title="The University of Iowa" id="wordmark-link">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 328.7 40.3" id="wordmark">
                    <path d="M216.9 32.1c0.3-0.5 0.7-1.1 1.2-1.8 0.7-1.1 1.3-1.9 1.8-2.7 0.6-0.8 1.2-1.7 2.4-2.9h-4.5l-0.5 1.1h0.7c0.5 0 0.7 0.1 0.7 0.4 0 0.3 0 0.9-0.6 1.7l-2.7 4 -4-7.1h-0.1 -3.4 -10.7l-0.3 3.3h1.3l0.1-0.8c0-0.4 0.2-0.6 0.6-0.9 0.7-0.5 2.4-0.5 3.8-0.5V38c0 0.6 0 0.9-0.2 1.4 -0.1 0.2-0.2 0.6-0.5 0.8h4.9l0.4-1.1h-0.7c-0.6 0-1-0.1-1.3-0.5 -0.2-0.2-0.2-0.6-0.2-1V25.8c0.7 0 3.2 0 3.7 0.4 0.7 0.6 1.6 2 1.6 2 0.3 0.5 0.7 1.1 1.1 1.7 1 1.5 1.6 2.6 2.1 3.8v4c0 0.6 0 1.2-0.2 1.6 -0.1 0.3-0.4 0.6-0.6 0.8h4.9l0.4-1.1h-0.7c-0.6 0-1-0.1-1.3-0.4 -0.2-0.2-0.2-0.6-0.2-1 0 0-0.1-3.7 0-4.2C216.3 33 216.6 32.6 216.9 32.1z"></path>
                    <path class="st0" d="M185.3 31.2l-1.6-0.7c-1.6-0.7-3-1.5-2.8-2.9 0.4-2.6 6.1-3 5.6 0.4h1.5l0.7-3.1c-1.3-0.4-2.6-0.6-4.2-0.6 -3.3 0-6.3 1.6-6 4.3 0.2 1.9 1.7 2.8 3.6 3.6l1.6 0.7c1.8 0.8 3.3 1.6 3.3 3.2 -0.1 1.7-1.7 3-3.9 3 -3 0-4-0.9-4-0.9l-5.8-6.3c2.2-0.4 3.8-1.9 3.7-3.9 -0.1-2.5-2.9-3.4-5.3-3.3h-6.4l-0.4 1h0.6c0.4 0 0.7 0.1 0.9 0.4 0.4 0.4 0.4 1.4 0.4 2.4v9.7c0 0.8-0.2 1.4-0.7 1.9h4.6l0.4-1.1h-0.7c-0.9 0-1.2-0.5-1.2-1.3V25.8c2.5-0.4 5.1 0.3 5.1 2.5 0 1.7-1.8 2.9-4.6 3l7.6 8.7c0 0 4.2 0.3 5.4 0.3 3.6 0.1 6.6-2 6.6-5C189.4 33.1 187.5 32.1 185.3 31.2z"></path>
                    <path class="st0" d="M49.7 22.9h-1.5l0.1-0.7c0.1-0.9 0-1.5-0.6-2.1 -0.7-0.8-3.5-0.7-5.3-0.7v17.4c0 0.7 0.1 1.3 0.3 1.6 0.5 0.6 1.1 0.7 1.9 0.7h0.7l-0.4 1.1H39c0.2-0.3 0.4-0.6 0.5-0.9 0.3-0.8 0.3-1.3 0.3-2.1V19.4c-1.9 0-4.4 0-5.4 0.8 -0.6 0.5-0.9 0.8-0.9 1.5l-0.1 0.9H32l0.5-4.4h18.1L49.7 22.9z"></path>
                    <path class="st0" d="M65.6 40.2h-4.4c0.3-0.8 0.4-1.1 0.4-1.8v-6.5c-0.7 0.5-1.4 0.5-2.2 0.6 -0.7 0-1.5 0.1-2.3 0.1 -1.4 0.1-2.1 0.1-3.4 0.1v5.2c0 0.9 0.3 1.3 1.3 1.3h0.6l-0.3 1h-4.6c0.4-0.7 0.5-1.2 0.6-2 0-0.3 0-0.6 0-1v-9.4c0-0.5 0.1-1.4-0.3-1.8 -0.3-0.3-0.6-0.3-1.1-0.3h-0.6l0.4-1.1h4.2c-0.1 0.3-0.2 0.4-0.2 0.6 -0.1 0.4-0.1 1.6-0.1 2v3.7h8v-3.2c0-0.5 0.1-1.4-0.3-1.8 -0.2-0.3-0.6-0.3-1-0.3h-0.7l0.5-1.1h4.2c-0.1 0.4-0.2 0.4-0.2 0.6 -0.1 0.5-0.1 1.6-0.1 2v10.5c0 0.9 0.3 1.3 1.4 1.3h0.7L65.6 40.2z"></path>
                    <path class="st0" d="M78.5 40.2h-11c0.2-0.3 0.5-0.6 0.6-1 0.2-0.6 0.1-1.2 0.1-1.8v-8.9c0-0.5 0-1.7-0.2-2.2 -0.3-0.4-0.5-0.6-1.1-0.6h-0.6l0.4-1c0 0 10.9 0 11.4 0l-0.5 3.4h-1.4c0.1-0.8-0.1-1.3-0.5-1.8 -0.5-0.5-1.9-0.6-3.3-0.6 -0.7 0-1.2 0-1.8 0.2v5.2h6.2c-0.4 1.1-1.2 1.3-2.3 1.4 -0.5 0-0.9 0.1-1.5 0.1 -1 0.1-1.6 0-2.5 0v4.6c0 0.5 0.2 1.2 0.4 1.4 0.3 0.3 1.4 0.4 2.5 0.4 1.2 0 2.2 0 2.9-0.8 0.5-0.5 0.7-0.9 0.9-1.7h1.6L78.5 40.2z"></path>
                    <path class="st0" d="M109 40.2h-5v-2c-3.4 1.8-6.7 3.1-10.5 2 -4.4-1.3-4.1-6.5-4.2-11.1 0-3.5 0.9-7.8 0.3-9 -0.3-0.5-0.9-0.9-1.6-0.9h-0.6l0.3-1.1h5.5c-0.3 0.4-0.3 0.7-0.4 1.1 -0.3 1.5-0.9 6.6-0.9 10.3 0 4.1 0.3 7.8 3.9 8.8 3.1 0.9 5.7 0 8.1-1.6V21.9c0-0.9 0-1.6-0.7-2.1 -0.5-0.4-1-0.5-1.6-0.5h-0.3l0.3-1.1h5.5c-0.3 0.5-0.4 0.8-0.5 1.3 -0.2 0.9-0.1 1.5-0.1 2.4v14c0 1.1 0 2.1 0.9 2.7 0.5 0.4 1 0.5 1.6 0.5h0.4L109 40.2z"></path>
                    <path class="st0" d="M125.4 25.8c-0.1 0.4-0.2 1.8-0.2 2.3v12h-1.9c-0.1-0.7-0.3-0.8-0.6-1.3s-0.6-0.9-0.9-1.3l-8.5-9.9v8.6c0 0.9 0.1 2.1 0.3 2.3 0.3 0.4 0.7 0.5 1.1 0.5h0.6l-0.4 1.1h-4.3c0.3-0.3 0.6-0.7 0.7-1.1 0.3-0.9 0.3-1.3 0.3-2.2v-9c0-0.5 0-1.5-0.4-1.9 -0.2-0.3-0.6-0.3-1-0.3h-0.6l0.4-1h4.4c0.2 0.8 0.7 1.3 1.4 2.1l7.8 9.1v-7.6c0-0.9 0-1.7-0.4-2.1 -0.2-0.3-0.6-0.4-1-0.4h-0.6l0.4-1h4C125.7 25.1 125.5 25.6 125.4 25.8z"></path>
                    <path class="st0" d="M133.9 40.2H129c0.2-0.3 0.4-0.5 0.5-0.8 0.2-0.5 0.2-0.9 0.2-1.5V27.2c0-0.5 0-0.9-0.3-1.2s-0.5-0.4-0.9-0.4H128l0.4-1h4.4c-0.3 0.3-0.3 0.5-0.5 0.8 -0.2 0.4-0.2 1.2-0.2 2v10.2c0 0.4 0.1 0.8 0.2 1 0.3 0.3 0.6 0.4 1.2 0.4h0.7L133.9 40.2z"></path>
                    <path class="st0" d="M148 28.6c-0.6 1.2-1.1 2.5-1.8 4.1 -1.2 2.6-2.4 5.7-2.5 7.6h-2c-0.2-1.4-1.6-5-2.8-8 -1-2.4-2.5-5.4-3-5.9 -0.3-0.4-0.7-0.7-1.2-0.7h-0.6l0.3-1h3.9l4.8 11.7 3.6-8.5c0.3-0.7 0.4-1.3 0.3-1.6 -0.2-0.4-0.5-0.6-1-0.6h-0.6l0.3-1h4.8C149.2 26.3 148.6 27.4 148 28.6z"></path>
                    <path class="st0" d="M163.5 40.2h-11c0.2-0.3 0.5-0.6 0.6-1 0.2-0.6 0.1-1.2 0.1-1.8v-8.9c0-0.5 0-1.7-0.2-2.2 -0.3-0.4-0.5-0.6-1.1-0.6h-0.6l0.4-1c0 0 10.9 0 11.4 0l-0.5 3.4h-1.4c0.1-0.8-0.1-1.3-0.5-1.8 -0.5-0.5-1.9-0.6-3.3-0.6 -0.7 0-1.2 0-1.8 0.2v5.2h6.2c-0.4 1.1-1.2 1.3-2.3 1.4 -0.5 0-0.9 0.1-1.5 0.1 -1 0.1-1.6 0-2.5 0v4.6c0 0.5 0.2 1.2 0.4 1.4 0.3 0.3 1.4 0.4 2.5 0.4 1.2 0 2.2 0 2.9-0.8 0.5-0.5 0.7-0.9 0.9-1.7h1.6L163.5 40.2z"></path>
                    <path class="st0" d="M196.5 40.2h-4.9c0.2-0.3 0.4-0.5 0.5-0.8 0.2-0.5 0.2-0.9 0.2-1.5V27.2c0-0.5 0-0.9-0.3-1.2s-0.5-0.4-0.9-0.4h-0.5l0.4-1h4.4c-0.3 0.3-0.3 0.5-0.5 0.8 -0.2 0.4-0.2 1.2-0.2 2v10.2c0 0.4 0.1 0.8 0.2 1 0.3 0.3 0.6 0.4 1.2 0.4h0.7L196.5 40.2z"></path>
                    <path class="st0" d="M243.9 31.4c0.7 3.5-1.1 7-4.8 7.7 -3.8 0.7-6.8-2.1-7.5-5.7 -0.7-3.5 0.8-7.1 4.6-7.8C240.1 25 243.2 27.9 243.9 31.4zM246.7 31.4c-0.6-4.5-4.5-7.7-10-6.9 -5.3 0.7-8.3 4.4-7.7 9.1 0.6 4.5 4.3 7.5 9.7 6.8C244 39.8 247.2 35.9 246.7 31.4z"></path>
                    <path class="st0" d="M258.2 28.1h-1.4c0-0.7-0.1-1.3-0.6-1.8 -0.4-0.5-1.6-0.6-2.9-0.6 -0.7 0-1.2 0-1.8 0.2v5.2h6.2c-0.1 0.4-0.4 1-0.8 1.2 -0.6 0.3-1.7 0.3-2.8 0.4 -1 0-1.7 0.1-2.6 0v4.9c0 0.5 0.2 1.1 0.4 1.3 0.2 0.2 0.6 0.4 1.1 0.4 0.2 0 0.6 0 0.8 0 -0.2 0.6-0.3 1.1-0.3 1.1h-5c0.2-0.3 0.5-0.6 0.6-1 0.2-0.6 0.1-1.1 0.1-1.8v-8.9c0-0.5 0-1.8-0.2-2.3 -0.3-0.4-0.6-0.5-1.2-0.5h-0.6l0.4-1c0 0 10.5 0 11.1 0L258.2 28.1z"></path>
                    <path class="st0" d="M274.2 40.2h-5.9c0.2-0.3 0.4-0.6 0.5-0.9 0.3-0.8 0.3-1.3 0.3-2.1V21.7c0-0.7 0-1.3-0.4-1.7s-0.8-0.6-1.4-0.6h-0.4l0.3-1.1h5.3c-0.2 0.3-0.3 0.4-0.5 0.8 -0.3 0.7-0.4 1.9-0.4 3.1V37c0 0.6 0.1 1.3 0.3 1.6 0.5 0.6 1.1 0.7 1.9 0.7h0.7L274.2 40.2z"></path>
                    <path class="st0" d="M289.7 31.4c0.7 3.5-1.1 7-4.8 7.7 -3.8 0.7-6.8-2.1-7.5-5.7 -0.7-3.5 0.8-7.1 4.6-7.8C285.8 25 289 27.9 289.7 31.4zM292.4 31.4c-0.6-4.5-4.5-7.7-10-6.9 -5.3 0.7-8.3 4.4-7.7 9.1 0.6 4.5 4.3 7.5 9.7 6.8C289.8 39.8 293 35.9 292.4 31.4z"></path>
                    <path class="st0" d="M313.8 28.6c-0.6 1.2-1.1 2.5-1.8 4.1 -1.2 2.7-2.1 5.8-2.1 7.6h-2c-0.2-1.4-1.4-4.5-2.5-7.6 -0.2-0.5-0.4-1.2-0.7-1.7 -0.3 0.6-0.6 1.1-1.2 2.4 -1.2 2.7-2 5.2-2.1 7h-2.1c-0.2-1.4-1.6-5-2.8-8 -1-2.4-2.5-5.4-3-5.9 -0.3-0.4-0.7-0.7-1.2-0.7h-0.5l0.3-1h4l4.5 11.8c0.7-1.5 3.1-7.1 3.1-7.2 -0.6-1.5-1.2-2.7-1.5-3 -0.4-0.4-0.7-0.7-1.2-0.7h-0.6l0.4-1h4c1.3 3.3 3.2 8.6 4.2 11.6l3.3-8.2c0.3-0.7 0.6-1.6 0.4-1.8 -0.2-0.4-0.5-0.6-1-0.6h-0.6l0.3-1h4.8C315 26.3 314.4 27.4 313.8 28.6z"></path>
                    <path class="st0" d="M322.2 33.1c-1.6 0.1-3 0.1-4.5-0.1l2.3-5.7L322.2 33.1zM329.1 39.1h-0.6c-0.5 0-0.9-0.3-1.2-0.7 -0.5-0.5-1.8-3.6-2.8-6 -1.2-3-2.4-6.4-2.7-7.9h-3.5c0.8 1.6-0.6 4.8-1.8 7.5 -1.4 3.2-2.2 5.1-4.5 8.2h5l0.3-1.1h-0.6c-0.5 0-0.9-0.2-1-0.6 -0.1-0.3 0.1-1 0.3-1.6l1-2.3h3.6c0.8 0 1.5-0.2 1.9-0.7l2.3 6.4h3.9L329.1 39.1z"></path>
                    <path class="st0" d="M12.2 5c0 0.6 0 1.5 0.2 1.6 0.8 0.5 2.1 0.9 2.5 1.4 0.1 0.1 0 1-0.3 0.9 -2.1-0.5-2.2-0.4-3.7-0.4 -0.1 0-0.4-0.6-0.5-1.1 0-0.3 0.4-0.5 0.5-1C11.1 5.7 11 2.3 11 0.1c0-0.5 0.1-0.7 0.6-0.7s0.5 0.3 0.5 0.7C12.1 1.8 12.2 3.5 12.2 5z"></path>
                    <path class="st0" d="M11 0c0-0.5 0.6-0.8 0.9-0.5"></path>
                    <path class="st0" d="M14.7 8c0.3 0.3 0 1.1-0.6 0.9C13 8.5 12 8.7 10.9 8.5c-0.3-0.1-0.4-0.6-0.4-0.9"></path>
                    <path class="st0" d="M12.1 1.8c0 1.5-0.1 2.9 0.1 4.4 0 0.2 0.2 0.4 0.2 0.5"></path>
                    <path class="st0" d="M20.5 22.3c0.2 0 1.2-0.1 1.7 0 0.1 0 0.2 0.1 0.3 0.2 0.2 0.2 0.1 1 0.1 1.2 0 0.5-0.3 0.8-0.3 1.3 0 3.6 0.1 7.9-0.1 8.6 -0.3 1.3-0.3 1.5-0.8 1.5 -0.1 0-0.3 0-0.4-0.5 -0.1-0.3-0.1-0.8-0.1-1.5 0-1.5 0-5.3-0.1-6.8 -0.1-1.4-0.4-1.4-0.5-1.5S20 24.7 20 24.4c-0.1-0.5 0.1-1.5 0.2-1.9C20.4 22.4 20.4 22.3 20.5 22.3z"></path>
                    <path class="st0" d="M23.3 38.3c-1.2 0-3.1 0.1-3.5-0.2 -0.2-0.1-0.2-0.4-0.2-1.1 -0.1-4.6 0-9.1 0-13.7 0-0.4-0.1-1-0.7-1 -0.7 0-2.1-0.1-2.2 0 -0.1 0.1-0.2 0.1-0.2 0.2 -0.2 0.4-0.3 1.5-0.3 1.9 0 0.2 0.1 0.3 0.4 0.4 0.7 0.1 1 0.5 1 1.5 0.1 3.4 0.1 10.2-0.3 11.3 -0.2 0.6-1.3 0.9-1.5 0.3 -0.2-0.4-0.2-10.6-0.2-14.8 0-0.7-0.2-1-1-1 -1 0-1.9 0-3 0 -0.1 0-0.3 0.1-0.3 0.3 -0.2 0.6-0.4 1.9-0.2 2.1 0 0.1 0.1 0.2 0.3 0.2 1.4 0.1 2 0.8 2 2.2 0.1 2.1 0.4 10.2-0.6 11.1 -0.4 0.3-1.8 0.3-2.1 0.2 -0.2-0.1-0.4-0.3-0.4-0.5 -0.3-2.5 0.1-14.5-0.1-15.1 -0.1-0.2-0.2-0.3-0.4-0.3 -0.4-0.1-2.2 0-2.5-0.1 -0.1 0-0.2-0.1-0.2-0.2 0-0.4 0-0.9 0.2-1.3 0.1-0.2 0.3-0.2 0.4-0.2 5.3 0 12.8 0 15.7 0 0.2 0 0.5 0 0.6-0.3s0.2-1.2 0.2-1.4c0-0.1-0.1-0.2-0.3-0.2 -0.3 0-11.9 0-17.8-0.1 -0.3 0-0.9 0-0.9-0.2 -0.1-0.3-0.1-0.9 0.1-1.2 0.6-1.2 1.1-0.9 1.5-2.6 0.2-1-0.1-1.8 0.4-2.7 0.7-1.1 1.2-1.4 1.6-2.2 0.3-0.5-0.3-1.2-0.9-1.1 -0.4 0.2-2.8 1.8-4.1 3.9 -1 1.7-1.4 3.6-2.1 5.4 -0.2 0.5-0.4 0.6-1.2 0.7 -0.5 0-0.6 1.7-0.3 1.9 0.1 0 0.2 0.1 0.2 0.1 0.7 0.1 0.9 1 0.9 1.8 0 0 0.2 13.7-0.2 15.1 -0.3 1-0.5 0.9-0.8 1 0 0-0.1 0-0.2 0.2 -0.1 0.3-0.2 1-0.1 1.3 0 0.1 0.1 0.2 0.3 0.2 9 0 19.7 0 23.5 0 0.2 0 0.3 0 0.4-0.3 0.1-0.4 0.2-0.9 0.1-1.1C23.7 38.3 23.5 38.3 23.3 38.3zM3.2 37.9c-0.4 0.5-0.8 0.6-0.8 0.1 -0.1-3.8 0-11.7 0-11.9 0.1-0.4 0.7-0.6 1 0C3.8 26.9 3.9 37.1 3.2 37.9zM7.4 37.9C7 38.4 6 38.6 5.8 38c-0.3-0.9-0.2-12.6-0.1-12.8 0.1-0.5 0.9-0.4 1.2-0.2 0.7 0.5 0.8 0.9 0.9 2C8 30.1 8 37.1 7.4 37.9z"></path>
                    <image src="uiowa.png" xlink:href="">
                    </image>
                </svg>
            </a>
            <div id="uiowa-search">
                <form class="search-form search-google-appliance-search-form uiowa-bar-search-form" aria-label="site search" role="search" action="https://osmrc.uiowa.edu/google-search" method="post" id="uiowa-bar-search-form" accept-charset="UTF-8">
                    <div>
                        <div class="form-item form-type-textfield form-item-search-terms">
                            <label for="edit-search-terms">Search </label>
                            <input placeholder="Search this site" id="edit-search-terms" name="search-terms" size="15" maxlength="256" class="form-text" type="text">
                        </div>
                        <input id="edit-submit-search" name="btnG" value="Search" class="form-submit" type="submit">
                        <input name="form_build_id" value="form-Jawhvk9FA4xx9pMTJQ7WmEgeMzmpIQdUOVgjZrW8oRQ" type="hidden">
                        <input name="form_id" value="uiowa_bar_search_form" type="hidden">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="l-page">
        <div class="l-navigation">
            <div class="l-container">
                <div class="l-branding">
                    <h1 class="site-name">
              <a href="https://osmrc.uiowa.edu/" title="Home" rel="home"><span>Office of the Sexual Misconduct Response Coordinator</span></a>
            </h1>
                </div>
                <div class="l-region l-region--navigation">
                    <div id="block-superfish-1" class="block block--superfish block--superfish-1">
                        <h2 class="block__title block__title">Main menu</h2>
                        <div class="block__content block__content">
                            <ul id="superfish-1" class="menu sf-menu sf-main-menu sf-horizontal sf-style-none sf-total-items-6 sf-parent-items-6 sf-single-items-0 superfish-processed sf-js-enabled sf-shadow">
                                <li id="menu-366-1" class="first odd sf-item-1 sf-depth-1 sf-total-children-4 sf-parent-children-2 sf-single-children-2 menuparent"><a href="https://osmrc.uiowa.edu/about" title="About Page" id="main-menu-bucket-1" name="About Us" class="sf-depth-1 menuparent sf-with-ul">About Us<span class="sf-sub-indicator"> »</span></a>
                                    <ul style="float: none; width: 12.375em;" class="sf-hidden">
                                        <li id="menu-1391-1" class="first odd sf-item-1 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/hours-and-location" class="sf-depth-2" style="">Hours and location</a></li>
                                        <li id="menu-375-1" class="middle even sf-item-2 sf-depth-2 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent" style=""><a href="https://osmrc.uiowa.edu/about/staff" class="sf-depth-2 menuparent sf-with-ul" style="">Staff<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 12em;" class="sf-hidden">
                                                <li id="menu-951-1" class="first odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/staff/monique-dicarlo" class="sf-depth-3" style="">Monique DiCarlo</a></li>
                                                <li id="menu-956-1" class="middle even sf-item-2 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/staff/sara-feldmann" class="sf-depth-3" style="">Sara Feldmann</a></li>
                                                <li id="menu-961-1" class="last odd sf-item-3 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/staff/elizabeth-willmore" class="sf-depth-3" style="">Elizabeth Willmore</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-367-1" class="middle odd sf-item-3 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about/our-work" class="sf-depth-2" style="">History</a></li>
                                        <li id="menu-1406-1" class="last even sf-item-4 sf-depth-2 sf-total-children-7 sf-parent-children-3 sf-single-children-4 menuparent" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report" class="sf-depth-2 menuparent sf-with-ul" style="">2016 Annual Report<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 22.5625em;" class="sf-hidden">
                                                <li id="menu-1411-1" class="first odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-1-directors-letter" class="sf-depth-3" style="">Part 1: Director's Letter</a></li>
                                                <li id="menu-1416-1" class="middle even sf-item-2 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-2-overview-campus-projects" class="sf-depth-3" style="">Part 2: Overview of campus projects</a></li>
                                                <li id="menu-1421-1" class="middle odd sf-item-3 sf-depth-3 sf-total-children-2 sf-parent-children-1 sf-single-children-1 menuparent" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-3-prevention-and-education" class="sf-depth-3 menuparent sf-with-ul" style="">Part 3: Prevention and education<span class="sf-sub-indicator"> »</span></a>
                                                    <ul style="left: 100%; float: none; width: 25.9375em;" class="sf-hidden">
                                                        <li id="menu-1426-1" class="first odd sf-item-1 sf-depth-4 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-3-prevention-and-education/prevention-and-education-students-2016" class="sf-depth-4 menuparent sf-with-ul" style="">Prevention and education for students in 2016<span class="sf-sub-indicator"> »</span></a>
                                                            <ul style="left: 100%; float: none; width: 15.625em;" class="sf-hidden">
                                                                <li id="menu-1431-1" class="first odd sf-item-1 sf-depth-5 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-3-prevention-and-education/prevention-and-education-students-2016-0" class="sf-depth-5" style="">Pre-orientation education</a></li>
                                                                <li id="menu-1436-1" class="middle even sf-item-2 sf-depth-5 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-3-prevention-and-education/prevention-and-education-students-2016-1" class="sf-depth-5" style="">Orientation education</a></li>
                                                                <li id="menu-1441-1" class="last odd sf-item-3 sf-depth-5 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-3-prevention-and-education/prevention-and-education-students-2016-2" class="sf-depth-5" style="">Post-orientation education</a></li>
                                                            </ul>
                                                        </li>
                                                        <li id="menu-1446-1" class="last even sf-item-2 sf-depth-4 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-3-prevention-and-education/prevention-and-education-employees-2016" class="sf-depth-4" style="">Prevention and education for employees in 2016</a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-1451-1" class="middle even sf-item-4 sf-depth-3 sf-total-children-3 sf-parent-children-0 sf-single-children-3 menuparent" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-4-training-and-tools-intervention" class="sf-depth-3 menuparent sf-with-ul" style="">Part 4: Training and tools for intervention<span class="sf-sub-indicator"> »</span></a>
                                                    <ul style="left: 100%; float: none; width: 27em;" class="sf-hidden">
                                                        <li id="menu-1456-1" class="first odd sf-item-1 sf-depth-4 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-4-training-and-tools-intervention/training-academic-and" class="sf-depth-4" style="">Training for Academic and Administrative Officers (A/AOs)</a></li>
                                                        <li id="menu-1461-1" class="middle even sf-item-2 sf-depth-4 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-4-training-and-tools-intervention/training-law-enforcement" class="sf-depth-4" style="">Training for law enforcement</a></li>
                                                        <li id="menu-1466-1" class="last odd sf-item-3 sf-depth-4 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-4-training-and-tools-intervention/training-decision-makers" class="sf-depth-4" style="">Training for decision makers</a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-1471-1" class="middle odd sf-item-5 sf-depth-3 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-5-osmrc-case-and-outcome-data" class="sf-depth-3 menuparent sf-with-ul" style="">Part 5: OSMRC case and outcome data<span class="sf-sub-indicator"> »</span></a>
                                                    <ul style="left: 100%; float: none; width: 21.625em;" class="sf-hidden">
                                                        <li id="menu-1476-1" class="first odd sf-item-1 sf-depth-4 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-5-osmrc-case-and-outcome-data/reports-received" class="sf-depth-4" style="">Reports received</a></li>
                                                        <li id="menu-1481-1" class="last even sf-item-2 sf-depth-4 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-5-osmrc-case-and-outcome-data/2016-reports-report-response-process" class="sf-depth-4" style="">2016 reports: Report response process</a></li>
                                                    </ul>
                                                </li>
                                                <li id="menu-1486-1" class="middle even sf-item-6 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/part-6-moving-forward" class="sf-depth-3" style="">Part 6: Moving Forward</a></li>
                                                <li id="menu-1491-1" class="last odd sf-item-7 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/about-us/2016-annual-report/appendix" class="sf-depth-3" style="">Appendix</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-370-1" class="middle even sf-item-2 sf-depth-1 sf-total-children-4 sf-parent-children-0 sf-single-children-4 menuparent"><a href="https://osmrc.uiowa.edu/policy" id="main-menu-bucket-2" class="sf-depth-1 menuparent sf-with-ul">Policy Information<span class="sf-sub-indicator"> »</span></a>
                                    <ul style="float: none; width: 16.375em;" class="sf-hidden">
                                        <li id="menu-377-1" class="first odd sf-item-1 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/policy/datingdomestic-violence" class="sf-depth-2" style="">Dating/Domestic Violence</a></li>
                                        <li id="menu-376-1" class="middle even sf-item-2 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/policy/sexual-misconduct" class="sf-depth-2" style="">Sexual Misconduct</a></li>
                                        <li id="menu-378-1" class="middle odd sf-item-3 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/policy/stalking" class="sf-depth-2" style="">Stalking</a></li>
                                        <li id="menu-916-1" class="last even sf-item-4 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/policy-information/office-civil-rights-ocr" class="sf-depth-2" style="">Office for Civil Rights (OCR)</a></li>
                                    </ul>
                                </li>
                                <li id="menu-371-1" class="middle odd sf-item-3 sf-depth-1 sf-total-children-4 sf-parent-children-1 sf-single-children-3 menuparent"><a href="https://osmrc.uiowa.edu/resources-victimsurvivors" id="main-menu-bucket-3" class="sf-depth-1 menuparent sf-with-ul">Resources for Victim/Survivors<span class="sf-sub-indicator"> »</span></a>
                                    <ul style="float: none; width: 17.875em;" class="sf-hidden">
                                        <li id="menu-596-1" class="first odd sf-item-1 sf-depth-2 sf-total-children-7 sf-parent-children-0 sf-single-children-7 menuparent" style=""><a href="https://osmrc.uiowa.edu/resources-victimsurvivors/victimsurvivor-options" class="victim-options sf-depth-2 menuparent sf-with-ul" style="">Victim/Survivor options<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 23.625em;" class="sf-hidden">
                                                <li id="menu-886-1" class="first odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/victim-resources/confidential-support" class="sf-depth-3" style="">Confidential Resources</a></li>
                                                <li id="menu-891-1" class="middle even sf-item-2 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-victimsurvivors/victimsurvivor-options/seek-medical-assistance" class="sf-depth-3" style="">Seek Medical Assistance</a></li>
                                                <li id="menu-901-1" class="middle odd sf-item-3 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-victimsurvivors/victimsurvivor-options/accommodations" class="sf-depth-3" style="">Accommodations</a></li>
                                                <li id="menu-597-1" class="middle even sf-item-4 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/victim-resources/report-problem" class="report-problem sf-depth-3" style="">Explore Reporting Options</a></li>
                                                <li id="menu-1581-1" class="middle odd sf-item-5 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-victimsurvivors/victimsurvivor-options/locate-attorney" class="sf-depth-3" style="">Locate an Attorney</a></li>
                                                <li id="menu-896-1" class="middle even sf-item-6 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-victimsurvivors/victimsurvivor-options/ask-police-assistance" class="sf-depth-3" style="">Ask for Police Assistance</a></li>
                                                <li id="menu-906-1" class="last odd sf-item-7 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-victimsurvivors/victimsurvivor-options/download-resource-and-referral-guide" class="sf-depth-3" style="">Download the Resource and Referral Guide</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-379-1" class="middle even sf-item-2 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/victim-resources/victims-rights" class="sf-depth-2" style="">Victim's Rights</a></li>
                                        <li id="menu-381-1" class="middle odd sf-item-3 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/victim-resources/safety-and-accommodations" class="sf-depth-2" style="">Safety Resources</a></li>
                                        <li id="menu-881-1" class="last even sf-item-4 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-victimsurvivors/international-resource-guide" class="sf-depth-2" style="">International Resource Guide</a></li>
                                    </ul>
                                </li>
                                <li id="menu-1231-1" class="middle even sf-item-4 sf-depth-1 sf-total-children-6 sf-parent-children-1 sf-single-children-5 menuparent"><a href="https://osmrc.uiowa.edu/resources-respondents" class="sf-depth-1 menuparent sf-with-ul">Resources for Respondents<span class="sf-sub-indicator"> »</span></a>
                                    <ul style="float: none; width: 22.375em;" class="sf-hidden">
                                        <li id="menu-1236-1" class="first odd sf-item-1 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-respondents/confidential-resources-respondents" class="sf-depth-2" style="">Confidential Resources for Respondents</a></li>
                                        <li id="menu-1551-1" class="middle even sf-item-2 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-respondents/accommodations" class="sf-depth-2" style="">Accommodations</a></li>
                                        <li id="menu-1556-1" class="middle odd sf-item-3 sf-depth-2 sf-total-children-1 sf-parent-children-0 sf-single-children-1 menuparent" style=""><a href="https://osmrc.uiowa.edu/resources-respondents/learn-about-complaint-process" class="sf-depth-2 menuparent sf-with-ul" style="">Learn about the complaint process<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 12em;" class="sf-hidden">
                                                <li id="menu-1241-1" class="firstandlast odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-respondents/learn-about-complaint-process/ui-cerb-program" class="sf-depth-3" style="">UI-CERB Program</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-1571-1" class="middle even sf-item-4 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-respondents/locate-attorney" class="sf-depth-2" style="">Locate an attorney</a></li>
                                        <li id="menu-1566-1" class="middle odd sf-item-5 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-respondents/university-and-criminal-investigations" class="sf-depth-2" style="">University and criminal investigations</a></li>
                                        <li id="menu-1561-1" class="last even sf-item-6 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/resources-respondents/respondent-rights" class="sf-depth-2" style="">Respondent rights</a></li>
                                    </ul>
                                </li>
                                <li id="menu-372-1" class="middle odd sf-item-5 sf-depth-1 sf-total-children-4 sf-parent-children-2 sf-single-children-2 menuparent"><a href="https://osmrc.uiowa.edu/how-help" id="main-menu-bucket-4" class="sf-depth-1 menuparent sf-with-ul">How to Help<span class="sf-sub-indicator"> »</span></a>
                                    <ul style="float: none; width: 20.125em;" class="sf-hidden">
                                        <li id="menu-911-1" class="first odd sf-item-1 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/how-help/tips-responding-disclosure" class="sf-depth-2" style="">Tips for Responding to a Disclosure</a></li>
                                        <li id="menu-383-1" class="middle even sf-item-2 sf-depth-2 sf-total-children-5 sf-parent-children-0 sf-single-children-5 menuparent" style=""><a href="https://osmrc.uiowa.edu/how-help/employees" class="sf-depth-2 menuparent sf-with-ul" style="">For Employees<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 27em;" class="sf-hidden">
                                                <li id="menu-598-1" class="first odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/victim-resources/know-your-reporting-responsibilities" class="mandatory-reporter sf-depth-3" style="">"Mandatory reporter" defined</a></li>
                                                <li id="menu-931-1" class="middle even sf-item-2 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/how-help/employees/resources-academic-or-administrative-officers-aaos" class="sf-depth-3" style="">Resources for Academic or Administrative Officers (A/AOs)</a></li>
                                                <li id="menu-941-1" class="middle odd sf-item-3 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/how-help/employees/resources-campus-security-authorities-csas" class="sf-depth-3" style="">Resources for Campus Security Authorities (CSAs)</a></li>
                                                <li id="menu-936-1" class="middle even sf-item-4 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/how-help/employees/resources-other-employees" class="sf-depth-3" style="">Resources for other employees</a></li>
                                                <li id="menu-926-1" class="last odd sf-item-5 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/how-help/employees/assisting-accused" class="sf-depth-3" style="">Assisting the Accused</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-382-1" class="middle odd sf-item-3 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/how-help/friends-and-family" class="sf-depth-2" style="">For Friends and Family</a></li>
                                        <li id="menu-385-1" class="last even sf-item-4 sf-depth-2 sf-total-children-1 sf-parent-children-0 sf-single-children-1 menuparent" style=""><a href="https://osmrc.uiowa.edu/help/learn-more" class="sf-depth-2 menuparent sf-with-ul" style="">Get Involved<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 12.9375em;" class="sf-hidden">
                                                <li id="menu-921-1" class="firstandlast odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/how-help/get-involved/intersecting-courses" class="sf-depth-3" style="">Intersecting Courses</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-710-1" class="last even sf-item-6 sf-depth-1 sf-total-children-5 sf-parent-children-3 sf-single-children-2 menuparent"><a href="https://osmrc.uiowa.edu/anti-violence-coalition" class="sf-depth-1 menuparent sf-with-ul">Anti-violence Coalition<span class="sf-sub-indicator"> »</span></a>
                                    <ul style="float: none; width: 14.4375em;" class="sf-hidden">
                                        <li id="menu-827-1" class="first odd sf-item-1 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/anti-violence-plan" class="sf-depth-2" style="">2016 Anti-Violence Plan</a></li>
                                        <li id="menu-1361-1" class="middle even sf-item-2 sf-depth-2 sf-total-children-2 sf-parent-children-0 sf-single-children-2 menuparent" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/current-subcommittees" class="sf-depth-2 menuparent sf-with-ul" style="">Current subcommittees<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 19.1875em;" class="sf-hidden">
                                                <li id="menu-720-1" class="first odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/campus-education-subcommittee-0" class="sf-depth-3" style="">Campus Education Subcommittee</a></li>
                                                <li id="menu-1386-1" class="last even sf-item-2 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/current-subcommittees/campus-climate-survey-2017" class="sf-depth-3" style="">Campus Climate Survey 2017</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-1366-1" class="middle odd sf-item-3 sf-depth-2 sf-total-children-4 sf-parent-children-0 sf-single-children-4 menuparent" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/past-subcommittees" class="sf-depth-2 menuparent sf-with-ul" style="">Past subcommittees<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 22.1875em;" class="sf-hidden">
                                                <li id="menu-1381-1" class="first odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/past-subcommittees/callisto-review-subcommittee" class="sf-depth-3" style="">Callisto Review Subcommittee</a></li>
                                                <li id="menu-723-1" class="middle even sf-item-2 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/past-subcommittees/campus-climate-survey-2015" class="sf-depth-3" style="">Campus Climate Survey 2015</a></li>
                                                <li id="menu-1371-1" class="middle odd sf-item-3 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/past-subcommittees/datingdomestic-violence-policy-review" class="sf-depth-3" style="">Dating/Domestic Violence Policy Review</a></li>
                                                <li id="menu-1376-1" class="last even sf-item-4 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/past-subcommittees/sanctioning-review" class="sf-depth-3" style="">Sanctioning Review</a></li>
                                            </ul>
                                        </li>
                                        <li id="menu-826-1" class="middle even sf-item-4 sf-depth-2 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/ending-violence-iowa" class="sf-depth-2" style="">Ending Violence at Iowa</a></li>
                                        <li id="menu-1346-1" class="last odd sf-item-5 sf-depth-2 sf-total-children-5 sf-parent-children-0 sf-single-children-5 menuparent" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/service-training" class="sf-depth-2 menuparent sf-with-ul" style="">In-Service Training<span class="sf-sub-indicator"> »</span></a>
                                            <ul style="left: 100%; float: none; width: 14.4375em;" class="sf-hidden">
                                                <li id="menu-1576-1" class="first odd sf-item-1 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/service-training/2018-service-training" class="sf-depth-3" style="">2018 In-Service Training</a></li>
                                                <li id="menu-1401-1" class="middle even sf-item-2 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/service-training/2017-service-training" class="sf-depth-3" style="">2017 In-Service Training</a></li>
                                                <li id="menu-721-1" class="middle odd sf-item-3 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/service-training/2016-service-training" class="sf-depth-3" style="">2016 In-Service Training</a></li>
                                                <li id="menu-971-1" class="middle even sf-item-4 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/service-training/2015-service-training" class="sf-depth-3" style="">2015 In-Service Training</a></li>
                                                <li id="menu-966-1" class="last odd sf-item-5 sf-depth-3 sf-no-children" style=""><a href="https://osmrc.uiowa.edu/anti-violence-coalition/service-training/2014-service-training" class="sf-depth-3" style="">2014 In-Service Training</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="block-block-17" class="block block--block block--block-17">
                        <h2 class="block__title block__title">Quick Links</h2>
                        <div class="block__content block__content">
                            <p><a class="btn survivor-options" href="https://osmrc.prod.drupal.uiowa.edu/resources-victimsurvivors/victimsurvivor-options" role="button">Victim/Survivor Options</a></p>
                            <p><a class="btn report-problem" href="https://osmrc.prod.drupal.uiowa.edu/report-problem-0" role="button">Report a Problem</a></p>
                            <p><a class="btn mandatory-reporter" href="https://osmrc.prod.drupal.uiowa.edu/victim-resources/know-your-reporting-responsibilities" role="button">"Mandatory reporter" defined</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header role="banner" class="bg-image l-header pattern l-header pattern">
            <div class="l-container">
            </div>
        </header>
        <div class="l-main-container l-container">
            <a id="main-content"></a>
            <div class="l-title-bar">
                <div id="breadcrumb" class="breadcrumb-container">
                    <h2 class="element-invisible">You are here</h2>
                    <ul class="breadcrumb">
                        <li class="depth-1 odd first last"><a href="https://osmrc.uiowa.edu/">Home</a></li>
                    </ul>
                </div>
                <h1 class="page-title">The University of Iowa Anti-Violence Plan for sexual misconduct, dating violence, and stalking</h1>
            </div>
            <div class="l-main clearfix">
                <div role="main" class="l-region l-region--content">
                    <article about="/university-iowa-anti-violence-plan-sexual-misconduct-dating-violence-and-stalking" typeof="foaf:Document" role="article" class="node node--page node--full node--page--full">
                        <header>
                            <span property="dc:title" content="The University of Iowa Anti-Violence Plan for sexual misconduct, dating violence, and stalking" class="rdf-meta element-hidden"></span> </header>
                        <div class="node__content node__content">
                            <div class="field field--name-body field--type-text-with-summary field--label-hidden">
                                <div class="field__items">
                                    <div class="field__item even" property="content:encoded">
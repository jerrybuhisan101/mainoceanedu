// source --> http://localhost/ielts/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1 
/*! jQuery Migrate v1.4.1 | (c) jQuery Foundation and other contributors | jquery.org/license */
"undefined"==typeof jQuery.migrateMute&&(jQuery.migrateMute=!0),function(a,b,c){function d(c){var d=b.console;f[c]||(f[c]=!0,a.migrateWarnings.push(c),d&&d.warn&&!a.migrateMute&&(d.warn("JQMIGRATE: "+c),a.migrateTrace&&d.trace&&d.trace()))}function e(b,c,e,f){if(Object.defineProperty)try{return void Object.defineProperty(b,c,{configurable:!0,enumerable:!0,get:function(){return d(f),e},set:function(a){d(f),e=a}})}catch(g){}a._definePropertyBroken=!0,b[c]=e}a.migrateVersion="1.4.1";var f={};a.migrateWarnings=[],b.console&&b.console.log&&b.console.log("JQMIGRATE: Migrate is installed"+(a.migrateMute?"":" with logging active")+", version "+a.migrateVersion),a.migrateTrace===c&&(a.migrateTrace=!0),a.migrateReset=function(){f={},a.migrateWarnings.length=0},"BackCompat"===document.compatMode&&d("jQuery is not compatible with Quirks Mode");var g=a("<input/>",{size:1}).attr("size")&&a.attrFn,h=a.attr,i=a.attrHooks.value&&a.attrHooks.value.get||function(){return null},j=a.attrHooks.value&&a.attrHooks.value.set||function(){return c},k=/^(?:input|button)$/i,l=/^[238]$/,m=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,n=/^(?:checked|selected)$/i;e(a,"attrFn",g||{},"jQuery.attrFn is deprecated"),a.attr=function(b,e,f,i){var j=e.toLowerCase(),o=b&&b.nodeType;return i&&(h.length<4&&d("jQuery.fn.attr( props, pass ) is deprecated"),b&&!l.test(o)&&(g?e in g:a.isFunction(a.fn[e])))?a(b)[e](f):("type"===e&&f!==c&&k.test(b.nodeName)&&b.parentNode&&d("Can't change the 'type' of an input or button in IE 6/7/8"),!a.attrHooks[j]&&m.test(j)&&(a.attrHooks[j]={get:function(b,d){var e,f=a.prop(b,d);return f===!0||"boolean"!=typeof f&&(e=b.getAttributeNode(d))&&e.nodeValue!==!1?d.toLowerCase():c},set:function(b,c,d){var e;return c===!1?a.removeAttr(b,d):(e=a.propFix[d]||d,e in b&&(b[e]=!0),b.setAttribute(d,d.toLowerCase())),d}},n.test(j)&&d("jQuery.fn.attr('"+j+"') might use property instead of attribute")),h.call(a,b,e,f))},a.attrHooks.value={get:function(a,b){var c=(a.nodeName||"").toLowerCase();return"button"===c?i.apply(this,arguments):("input"!==c&&"option"!==c&&d("jQuery.fn.attr('value') no longer gets properties"),b in a?a.value:null)},set:function(a,b){var c=(a.nodeName||"").toLowerCase();return"button"===c?j.apply(this,arguments):("input"!==c&&"option"!==c&&d("jQuery.fn.attr('value', val) no longer sets properties"),void(a.value=b))}};var o,p,q=a.fn.init,r=a.find,s=a.parseJSON,t=/^\s*</,u=/\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/,v=/\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/g,w=/^([^<]*)(<[\w\W]+>)([^>]*)$/;a.fn.init=function(b,e,f){var g,h;return b&&"string"==typeof b&&!a.isPlainObject(e)&&(g=w.exec(a.trim(b)))&&g[0]&&(t.test(b)||d("$(html) HTML strings must start with '<' character"),g[3]&&d("$(html) HTML text after last tag is ignored"),"#"===g[0].charAt(0)&&(d("HTML string cannot start with a '#' character"),a.error("JQMIGRATE: Invalid selector string (XSS)")),e&&e.context&&e.context.nodeType&&(e=e.context),a.parseHTML)?q.call(this,a.parseHTML(g[2],e&&e.ownerDocument||e||document,!0),e,f):(h=q.apply(this,arguments),b&&b.selector!==c?(h.selector=b.selector,h.context=b.context):(h.selector="string"==typeof b?b:"",b&&(h.context=b.nodeType?b:e||document)),h)},a.fn.init.prototype=a.fn,a.find=function(a){var b=Array.prototype.slice.call(arguments);if("string"==typeof a&&u.test(a))try{document.querySelector(a)}catch(c){a=a.replace(v,function(a,b,c,d){return"["+b+c+'"'+d+'"]'});try{document.querySelector(a),d("Attribute selector with '#' must be quoted: "+b[0]),b[0]=a}catch(e){d("Attribute selector with '#' was not fixed: "+b[0])}}return r.apply(this,b)};var x;for(x in r)Object.prototype.hasOwnProperty.call(r,x)&&(a.find[x]=r[x]);a.parseJSON=function(a){return a?s.apply(this,arguments):(d("jQuery.parseJSON requires a valid JSON string"),null)},a.uaMatch=function(a){a=a.toLowerCase();var b=/(chrome)[ \/]([\w.]+)/.exec(a)||/(webkit)[ \/]([\w.]+)/.exec(a)||/(opera)(?:.*version|)[ \/]([\w.]+)/.exec(a)||/(msie) ([\w.]+)/.exec(a)||a.indexOf("compatible")<0&&/(mozilla)(?:.*? rv:([\w.]+)|)/.exec(a)||[];return{browser:b[1]||"",version:b[2]||"0"}},a.browser||(o=a.uaMatch(navigator.userAgent),p={},o.browser&&(p[o.browser]=!0,p.version=o.version),p.chrome?p.webkit=!0:p.webkit&&(p.safari=!0),a.browser=p),e(a,"browser",a.browser,"jQuery.browser is deprecated"),a.boxModel=a.support.boxModel="CSS1Compat"===document.compatMode,e(a,"boxModel",a.boxModel,"jQuery.boxModel is deprecated"),e(a.support,"boxModel",a.support.boxModel,"jQuery.support.boxModel is deprecated"),a.sub=function(){function b(a,c){return new b.fn.init(a,c)}a.extend(!0,b,this),b.superclass=this,b.fn=b.prototype=this(),b.fn.constructor=b,b.sub=this.sub,b.fn.init=function(d,e){var f=a.fn.init.call(this,d,e,c);return f instanceof b?f:b(f)},b.fn.init.prototype=b.fn;var c=b(document);return d("jQuery.sub() is deprecated"),b},a.fn.size=function(){return d("jQuery.fn.size() is deprecated; use the .length property"),this.length};var y=!1;a.swap&&a.each(["height","width","reliableMarginRight"],function(b,c){var d=a.cssHooks[c]&&a.cssHooks[c].get;d&&(a.cssHooks[c].get=function(){var a;return y=!0,a=d.apply(this,arguments),y=!1,a})}),a.swap=function(a,b,c,e){var f,g,h={};y||d("jQuery.swap() is undocumented and deprecated");for(g in b)h[g]=a.style[g],a.style[g]=b[g];f=c.apply(a,e||[]);for(g in b)a.style[g]=h[g];return f},a.ajaxSetup({converters:{"text json":a.parseJSON}});var z=a.fn.data;a.fn.data=function(b){var e,f,g=this[0];return!g||"events"!==b||1!==arguments.length||(e=a.data(g,b),f=a._data(g,b),e!==c&&e!==f||f===c)?z.apply(this,arguments):(d("Use of jQuery.fn.data('events') is deprecated"),f)};var A=/\/(java|ecma)script/i;a.clean||(a.clean=function(b,c,e,f){c=c||document,c=!c.nodeType&&c[0]||c,c=c.ownerDocument||c,d("jQuery.clean() is deprecated");var g,h,i,j,k=[];if(a.merge(k,a.buildFragment(b,c).childNodes),e)for(i=function(a){return!a.type||A.test(a.type)?f?f.push(a.parentNode?a.parentNode.removeChild(a):a):e.appendChild(a):void 0},g=0;null!=(h=k[g]);g++)a.nodeName(h,"script")&&i(h)||(e.appendChild(h),"undefined"!=typeof h.getElementsByTagName&&(j=a.grep(a.merge([],h.getElementsByTagName("script")),i),k.splice.apply(k,[g+1,0].concat(j)),g+=j.length));return k});var B=a.event.add,C=a.event.remove,D=a.event.trigger,E=a.fn.toggle,F=a.fn.live,G=a.fn.die,H=a.fn.load,I="ajaxStart|ajaxStop|ajaxSend|ajaxComplete|ajaxError|ajaxSuccess",J=new RegExp("\\b(?:"+I+")\\b"),K=/(?:^|\s)hover(\.\S+|)\b/,L=function(b){return"string"!=typeof b||a.event.special.hover?b:(K.test(b)&&d("'hover' pseudo-event is deprecated, use 'mouseenter mouseleave'"),b&&b.replace(K,"mouseenter$1 mouseleave$1"))};a.event.props&&"attrChange"!==a.event.props[0]&&a.event.props.unshift("attrChange","attrName","relatedNode","srcElement"),a.event.dispatch&&e(a.event,"handle",a.event.dispatch,"jQuery.event.handle is undocumented and deprecated"),a.event.add=function(a,b,c,e,f){a!==document&&J.test(b)&&d("AJAX events should be attached to document: "+b),B.call(this,a,L(b||""),c,e,f)},a.event.remove=function(a,b,c,d,e){C.call(this,a,L(b)||"",c,d,e)},a.each(["load","unload","error"],function(b,c){a.fn[c]=function(){var a=Array.prototype.slice.call(arguments,0);return"load"===c&&"string"==typeof a[0]?H.apply(this,a):(d("jQuery.fn."+c+"() is deprecated"),a.splice(0,0,c),arguments.length?this.bind.apply(this,a):(this.triggerHandler.apply(this,a),this))}}),a.fn.toggle=function(b,c){if(!a.isFunction(b)||!a.isFunction(c))return E.apply(this,arguments);d("jQuery.fn.toggle(handler, handler...) is deprecated");var e=arguments,f=b.guid||a.guid++,g=0,h=function(c){var d=(a._data(this,"lastToggle"+b.guid)||0)%g;return a._data(this,"lastToggle"+b.guid,d+1),c.preventDefault(),e[d].apply(this,arguments)||!1};for(h.guid=f;g<e.length;)e[g++].guid=f;return this.click(h)},a.fn.live=function(b,c,e){return d("jQuery.fn.live() is deprecated"),F?F.apply(this,arguments):(a(this.context).on(b,this.selector,c,e),this)},a.fn.die=function(b,c){return d("jQuery.fn.die() is deprecated"),G?G.apply(this,arguments):(a(this.context).off(b,this.selector||"**",c),this)},a.event.trigger=function(a,b,c,e){return c||J.test(a)||d("Global events are undocumented and deprecated"),D.call(this,a,b,c||document,e)},a.each(I.split("|"),function(b,c){a.event.special[c]={setup:function(){var b=this;return b!==document&&(a.event.add(document,c+"."+a.guid,function(){a.event.trigger(c,Array.prototype.slice.call(arguments,1),b,!0)}),a._data(this,c,a.guid++)),!1},teardown:function(){return this!==document&&a.event.remove(document,c+"."+a._data(this,c)),!1}}}),a.event.special.ready={setup:function(){this===document&&d("'ready' event is deprecated")}};var M=a.fn.andSelf||a.fn.addBack,N=a.fn.find;if(a.fn.andSelf=function(){return d("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"),M.apply(this,arguments)},a.fn.find=function(a){var b=N.apply(this,arguments);return b.context=this.context,b.selector=this.selector?this.selector+" "+a:a,b},a.Callbacks){var O=a.Deferred,P=[["resolve","done",a.Callbacks("once memory"),a.Callbacks("once memory"),"resolved"],["reject","fail",a.Callbacks("once memory"),a.Callbacks("once memory"),"rejected"],["notify","progress",a.Callbacks("memory"),a.Callbacks("memory")]];a.Deferred=function(b){var c=O(),e=c.promise();return c.pipe=e.pipe=function(){var b=arguments;return d("deferred.pipe() is deprecated"),a.Deferred(function(d){a.each(P,function(f,g){var h=a.isFunction(b[f])&&b[f];c[g[1]](function(){var b=h&&h.apply(this,arguments);b&&a.isFunction(b.promise)?b.promise().done(d.resolve).fail(d.reject).progress(d.notify):d[g[0]+"With"](this===e?d.promise():this,h?[b]:arguments)})}),b=null}).promise()},c.isResolved=function(){return d("deferred.isResolved is deprecated"),"resolved"===c.state()},c.isRejected=function(){return d("deferred.isRejected is deprecated"),"rejected"===c.state()},b&&b.call(c,c),c}}}(jQuery,window);
// source --> http://localhost/ielts/wp-content/plugins/mesmerize-companion/theme-data/mesmerize/assets/js/HoverFX.js?ver=1.0.1 
(function($) {

    window.initHoverFX = function(options, isUI, resizeEvent) {
        var defaults, item, opts, params, instanceName, className, classElements, doesCSS3, supportRGBA;
        item = $('.contentswap-effect');
        supportRGBA = true;
        doesCSS3 = true;

        opts = options;

        function setParams(elem) {

            className = $(elem).attr('class');
            classElements = className.split(" ");
            for (var i = 0; i <= item.length; i++) {
                for (var prop in opts) {
                    if (classElements[i] === prop) {
                        instanceName = prop;
                    }
                }
            }

            return opts ? params = opts[instanceName] : params = defaults[instanceName];
        }

        function getInner(elem, type) {

            var inner;
            switch (type) {
                case "overlay":
                    inner = $(elem).find('.swap-inner');
                    break;
                case "imageSwap":
                    inner = $(elem).find('.second-image');
                    break;
                case "caption":
                    inner = $(elem).find('.swap-inner');
                    break;
            }
            return inner;
        }

        function getDimms(elem) {
            var dims = {
                width: '100%',
                height: Math.abs(parseFloat($(elem).outerHeight(false)))
            };
            return dims
        }

        function moveCSSProps(source, target) {
            var ml = source.css('margin-left');
            var mr = source.css('margin-right');
            var mt = source.css('margin-top');
            var mb = source.css('margin-bottom');
            var floatVal = source.css('float');
            source.css({
                'float': 'none',
                'margin-left': '0px',
                'margin-right': '0px',
                'margin-top': '0px',
                'margin-bottom': '0px'
            })
            target.css({
                'float': floatVal,
                'margin-left': ml,
                'margin-right': mr,
                'margin-top': mt,
                'margin-bottom': mb
            })

        }

        function setCaptionHeight(height, elem) {
            if (height != 'auto' || height != 'undefined') elem.css('height', parseInt(height) + 'px');
        }

        function genRGBA(hex, alpha, elem) {
            //          with both longhand and shorthand support (accepts both #fff or #fffff)
            if (hex.indexOf('#') == -1 || hex.indexOf('rgb(') > -1 || hex.indexOf('rgba') > -1) {
                return {
                    rgba: hex
                };
            }
            var opacity;
            alpha ? opacity = (alpha / 100).toFixed(2) : opacity = 1;

            function convertRGBDecimalToHex(rgb) {

                // check for RGB
                var regexRGB = /rgb *\( *([0-9]{1,3}) *, *([0-9]{1,3}) *, *([0-9]{1,3}) *\)/;
                var values = regexRGB.exec(rgb);

                // check for RGBA
                if (!values) {
                    var regexRGBA = /rgba *\( *([0-9]{1,3}) *, *([0-9]{1,3}) *, *([0-9]{1,3}) *, *(0.+[0-9]) *\)/;
                    values = regexRGBA.exec(rgb);
                }

                if (!values) return rgb;
                if (values.length != 5) {
                    return rgb; // fall back to what was given.              
                }
                var r = Math.round(parseFloat(values[1]));
                var g = Math.round(parseFloat(values[2]));
                var b = Math.round(parseFloat(values[3]));
                if (values[4]) {
                    opacity = values[4];
                }
                return "#" + (r + 0x10000).toString(16).substring(3).toUpperCase() + (g + 0x10000).toString(16).substring(3).toUpperCase() + (b + 0x10000).toString(16).substring(3).toUpperCase();
            }

            hex = convertRGBDecimalToHex(hex);

            var shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i;
            hex = hex.replace(shorthandRegex, function(m, r, g, b) {
                return r + r + g + g + b + b;
            });

            var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);

            function alhpaToHex(val) {
                var num = val * 255;
                return Math.floor(num).toString(16);
            }

            if (typeof(elem) !== 'undefined' && result) {
                switch (supportRGBA) {
                    case true:
                        elem.css('background-color', 'rgba(' + [parseInt(result[1], 16), parseInt(result[2], 16), parseInt(result[3], 16)].join(",") + ',' + opacity + ')');
                        break;
                    case false:
                        elem.css({
                            'background': 'transparent',
                            'filter': 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#' + alhpaToHex(opacity) + result[0].replace('#', '') + ',endColorstr=#' + alhpaToHex(opacity) + result[0].replace('#', '') + ');',
                            'zoom': 1
                        });
                        break;
                }
            }

            return result ? {
                rgba: 'rgba(' + [parseInt(result[1], 16), parseInt(result[2], 16), parseInt(result[3], 16)].join(",") + ',' + opacity + ')',
                fallback: alhpaToHex(opacity) + result[0].replace('#', '')
            } : null;
        }

        function getEaseType(ease) {
            //    Add more ease types - work in progress
            var easeCSS = "";
            var easeType;
            var oldWebkit = false;

            switch (ease.toLowerCase()) {
                case 'easeinoutback':
                    easeType = 'cubic-bezier(0.680, -0.550, 0.265, 1.550)';
                    oldWebkit = 'cubic-bezier(0.680, 0, 0.265, 1)';
                    break;
                case 'quick-in':
                    easeType = "cubic-bezier(0.315, -0.185, 0.000, 1.270)";
                    oldWebkit = "cubic-bezier(0.315, 0, 0.000, 1)";
                    break;
                case 'accelerate':
                    easeType = "cubic-bezier(0.885, 0.420, 0.000, 1.270)";
                    oldWebkit = "cubic-bezier(0.885, 0.420, 0.000, 1)";
                    break;
                case 'super-fast':
                    easeType = "cubic-bezier(0.000, 0.870, 0.000, 0.890)";
                    break;
                case 'ease-in-out-back':
                    easeType = "cubic-bezier(0.680, -0.550, 0.265, 1.550)";
                    oldWebkit = "cubic-bezier(0.680, 0, 0.265, 1)";
                    break;
                case 'ease-in-out-expo':
                    easeType = "cubic-bezier(1.000, 0.000, 0.000, 1.000)";
                    break;
                case 'ease-out-back':
                    easeType = "cubic-bezier(0.175, 0.885, 0.320, 1.275)";
                    oldWebkit = "cubic-bezier(0.175, 0.885, 0.320, 1)";
                    break;
                case 'ease-out-circ':
                    easeType = "cubic-bezier(0.075, 0.820, 0.165, 1.000)";
                    break;
                case 'ease-in-back':
                    easeType = "cubic-bezier(0.600, -0.280, 0.735, 0.045)";
                    oldWebkit = "cubic-bezier(0.600, 0, 0.735, 0.045)";
                    break;
                case 'ease-in-circ':
                    easeType = "cubic-bezier(0.600, 0.040, 0.980, 0.335)";
                    oldWebkit = "cubic-bezier(0.600, 0.040, 0.980, 0.335)";
                    break;
                case 'ease':
                    easeType = "ease";
                    break;
                case "ease-in":
                    easeType = "ease-in";
                    break;
                case "ease-in-out":
                    easeType = "ease-in-out";
                    break;
                case "ease-out":
                    easeType = "ease-out";
                    break;
            }

            if (oldWebkit) {
                easeType = oldWebkit;
                // easeCSS += "-webkit-transition-timing-function:" + oldWebkit + ";";
            }
            var prefixes = ["-webkit-", "-moz-", "-o-", ""];
            for (var i = 0; i < prefixes.length; i++) {
                easeCSS += prefixes[i] + "transition-timing-function:" + easeType + ";"
            }

            return easeCSS;


        };


        function centerIcon(icon) {
            var elem = $(icon);
            elem
                .parent()
                .css({
                    'width': elem.width(),
                    'height': elem.height()
                })
        }
        options.resizeEvent = resizeEvent ? true : false;


        start(options);

        function start(options) {
            var addEffects = $();

            item.each(function() {

                var self, params, inner, overlay, initial, dims, type, transitionProp, easeType, icon;
                self = $(this);
                self.unbind('.hoverfx');
                self.css({
                    "width": "",
                    "height": ""
                });


                params = setParams(self);
                inner = getInner(self, params.contentType);
                initial = self.find('.initial-image');
                overlay = self.find('.overlay');
                params.overlayColor = inner.css('background-color');
                params.innerColor = inner.css('background-color');
                inner.removeAttr('style');
                overlay.removeAttr('style');
                initial.removeAttr('style');

                moveCSSProps(initial, self);

                dims = getDimms(self);
                //console.log(dims);
                easeType = getEaseType(params.effectEasing);
                type = params.contentType;

                icon = inner.find('.swap-icons img');
                centerIcon(icon);
                if (type == 'overlay') {
                    transitionProp = 'all';
                } else {
                    transitionProp = 'margin';
                }
                initial.css('float', 'none');

                if (type == "caption") {
                    if (self.find('.caption-wrap').length == 0) {
                        var captionWrap = $('<div />').addClass('caption-wrap overlay');
                        inner.wrap(captionWrap);
                    }
                    overlay = self.find('.caption-wrap');
                } else {
                    overlay = self.find('.overlay');
                }
                overlay.add(inner).css('display', 'block');



                function applyTransition(elem, prop, easeCSS, duration, includeTiming) {
                    var property = prop ? prop : "all";
                    var customEase = "";
                    var dur = params.effectDelay + "ms";
                    var delay = "";



                    var transitionValue = property + " " + dur;
                    elem.css({
                        '-webkit-transition': transitionValue,
                        '-moz-transition': transitionValue,
                        '-o-transition': transitionValue,
                        'transition': transitionValue
                    })
                    if (includeTiming) {
                        applyTiming(elem, easeCSS);
                    }
                }

                function applyTiming(elem, easeCSS) {
                    elem.attr('style', elem.attr('style') + easeCSS);
                }

                self.addClass(params.effectType);

                var loaded = false;

                if (initial.height() > 0) {

                    loaded = true;
                    var initialDims = getDimms(initial);
                    self.css({
                        'width': initialDims.width/*,
                        'height': initialDims.height*/
                    });

                    if (type == "overlay") {
                        applyTransition(inner, transitionProp, easeType, params.effectDelay, true);
                    }
                }

                initial.load(function() {
                    var imageDims = getDimms($(this));

                    self.css({
                        'width': imageDims.width/*,
                        'height': imageDims.height*/
                    });
                    if (type == 'overlay') {
                        inner.css({
                            'margin-top': 0 / 2,
                            'margin-left': Math.abs(imageDims.width - inner.outerWidth()) / 2
                        });
                    }
                    if (type == "overlay") {
                        applyTransition(inner, transitionProp, easeType, params.effectDelay);
                    }

                });

                inner.css({
                    'background-color': genRGBA(params.overlayColor, params.overlayAlpha).rgba
                });

                if (type == "overlay") {
                    applyTransition(overlay, 'opacity', easeType, params.effectDelay, true);
                }



                var showCaption, hideCaption;

                var isMobile = {
                    Android: function() {
                        return navigator.userAgent.match(/Android/i);
                    },
                    BlackBerry: function() {
                        return navigator.userAgent.match(/BlackBerry/i);
                    },
                    iOS: function() {
                        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
                    },
                    Opera: function() {
                        return navigator.userAgent.match(/Opera Mini/i);
                    },
                    Windows: function() {
                        return navigator.userAgent.match(/IEMobile/i);
                    },
                    any: function() {
                        return !!(isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows() || ("ontouchstart" in document));
                    }
                };

                Modernizr.touch = Modernizr.touch || isMobile.any();


                if (params.link) {
                    if (Modernizr.touch == true) {

                    } else {
                        self.bind('click.hoverfx', function() {
                            if (params.openPage === 'same') {
                                window.location.assign(params['link']);
                            } else {
                                window.open(params['link'], '_blank');
                            }
                        });
                    }
                }


                if (type == 'overlay') {
                    self.unbind('.caption');
                    self.addClass('contentswap-overlay');
                    var initialDims = getDimms(initial);
                    //console.log(dims.width + " .. " +  inner.outerWidth());
                    if (initial.height() > 0) {
                        inner.css({
                            // 'margin-top': Math.abs(initialDims.height - inner.outerHeight()) / 2,
                            'margin-top': 0 / 2,
                            'margin-left': Math.abs(initialDims.width - inner.outerWidth()) / 2
                        });
                    }

                }

                if (type == 'caption') {
                    self.addClass('caption');

                    if (params.direction == 'top') {
                        if (!loaded) {
                            setTimeout(function() {
                                overlay.css({
                                    'margin-top': (-inner.outerHeight() - 1) + 'px',
                                    'opacity': 1
                                });
                            }, 10);

                        } else {
                            overlay.css({
                                'margin-top': (-inner.outerHeight() - 1) + 'px',
                                'opacity': 1
                            });
                        }

                        setTimeout(function() {
                            overlay.insertBefore(initial);

                        }, 10);
                    } else {

                        setTimeout(function() {
                            overlay.css({
                                'opacity': 1
                            });
                        }, 10);
                    }
                    //else applyTransition(initial,transitionProp);
                    var showCaption, hideCaption;


                    //work in progress
                    if (params.captionType == "over") {

                        if (params.direction == 'top') {
                            overlay.css({
                                'position': 'absolute',
                                'z-index': 9991

                            });
                        } else {
                            overlay.css({
                                'margin-top': '1px'
                            });
                        }
                        applyTransition(overlay, 'margin', easeType, params.effectDelay, true);

                        showCaption = function() {

                            overlay.css({
                                'margin-top': (-inner.outerHeight()) + 'px'
                            });
                            if (params.direction == 'top') overlay.css('margin-top', 0);
                        };
                        hideCaption = function() {
                            overlay.css({
                                'margin-top': "0px"
                            });
                            if (params.direction == 'top') overlay.css('margin-top', (-inner.outerHeight()) + 'px');
                        }
                    } else {
                        applyTransition(overlay, "margin", easeType, params.effectDelay, true);
                        applyTransition(initial, "margin", easeType, params.effectDelay, true);


                        showCaption = function() {

                            if (params.captionHeight <= inner.outerHeight()) {
                                setCaptionHeight(params.captionHeight, inner);
                            }

                            if (params.direction == 'top' && params.captionType != 'over') {

                                overlay.css({
                                    'margin-top': '0px'
                                });
                            } else {
                                overlay.css({
                                    'margin-top': -inner.outerHeight()
                                })
                                initial.css({
                                    'margin-top': -inner.outerHeight(),
                                    'margin-bottom': inner.outerHeight()
                                })

                            }
                        }

                        hideCaption = function() {
                            if (params.direction == 'top') {
                                overlay.css({
                                    'margin-top': (-inner.outerHeight() - 1) + 'px'
                                })
                            } else {
                                overlay.css({
                                    'margin-top': '1px'
                                })
                                initial.css({
                                    'margin-top': '0px',
                                    'margin-bottom': '0px'
                                })
                            }
                        }
                    }


                }

                if (Modernizr.touch == true) {
                    self.addClass('hover');
                    if (type == "caption") {
                        showCaption();
                    } else {

                    }

                } else {
                    if (type == "caption") {
                        self.bind('mouseenter.hoverfx', showCaption)
                            .bind('mouseleave.hoverfx', hideCaption);
                    }

                }




            });
        }

    }
})(jQuery);
// source --> http://localhost/ielts/wp-content/plugins/mesmerize-companion/theme-data/mesmerize/assets/js/countup.js?ver=1.0.1 
(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        define(factory);
    } else if (typeof exports === 'object') {
        module.exports = factory(require, exports, module);
    } else {
        root.CountUp = factory();
    }
}(this, function (require, exports, module) {

    /*

        countUp.js
        by @inorganik

    */

// target = id of html element or var of previously selected html element where counting occurs
// startVal = the value you want to begin at
// endVal = the value you want to arrive at
// decimals = number of decimal places, default 0
// duration = duration of animation in seconds, default 2
// options = optional object of options (see below)

    var CountUp = function (target, startVal, endVal, decimals, duration, options) {

        var self = this;
        self.version = function () {
            return '1.9.1';
        };

        // default options
        self.options = {
            useEasing: true, // toggle easing
            useGrouping: true, // 1,000,000 vs 1000000
            separator: ',', // character to use as a separator
            decimal: '.', // character to use as a decimal
            easingFn: easeOutExpo, // optional custom easing function, default is Robert Penner's easeOutExpo
            formattingFn: formatNumber, // optional custom formatting function, default is formatNumber above
            prefix: '', // optional text before the result
            suffix: '', // optional text after the result
            numerals: [], // optionally pass an array of custom numerals for 0-9
            onUpdate: false
        };

        // extend default options with passed options object
        if (options && typeof options === 'object') {
            for (var key in self.options) {
                if (options.hasOwnProperty(key) && options[key] !== null) {
                    self.options[key] = options[key];
                }
            }
        }

        if (self.options.separator === '') self.options.useGrouping = false;

        // make sure requestAnimationFrame and cancelAnimationFrame are defined
        // polyfill for browsers without native support
        // by Opera engineer Erik Möller
        var lastTime = 0;
        var vendors = ['webkit', 'moz', 'ms', 'o'];
        for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
            window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
            window.cancelAnimationFrame =
                window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
        }
        if (!window.requestAnimationFrame) {
            window.requestAnimationFrame = function (callback, element) {
                var currTime = new Date().getTime();
                var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                var id = window.setTimeout(function () {
                        callback(currTime + timeToCall);
                    },
                    timeToCall);
                lastTime = currTime + timeToCall;
                return id;
            };
        }
        if (!window.cancelAnimationFrame) {
            window.cancelAnimationFrame = function (id) {
                clearTimeout(id);
            };
        }

        function formatNumber(num) {
            num = num.toFixed(self.decimals);
            num += '';
            var x, x1, x2, rgx;
            x = num.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? self.options.decimal + x[1] : '';
            rgx = /(\d+)(\d{3})/;
            if (self.options.useGrouping) {
                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + self.options.separator + '$2');
                }
            }
            // optional numeral substitution
            if (self.options.numerals.length) {
                x1 = x1.replace(/[0-9]/g, function (w) {
                    return self.options.numerals[+w];
                })
                x2 = x2.replace(/[0-9]/g, function (w) {
                    return self.options.numerals[+w];
                })
            }
            return self.options.prefix + x1 + x2 + self.options.suffix;
        }

        // Robert Penner's easeOutExpo
        function easeOutExpo(t, b, c, d) {
            return c * (-Math.pow(2, -10 * t / d) + 1) * 1024 / 1023 + b;
        }

        function ensureNumber(n) {
            return (typeof n === 'number' && !isNaN(n));
        }

        self.initialize = function () {
            if (self.initialized) return true;

            self.error = '';
            self.d = (typeof target === 'string') ? document.getElementById(target) : target;
            if (!self.d) {
                self.error = '[CountUp] target is null or undefined'
                return false;
            }
            self.startVal = Number(startVal);
            self.endVal = Number(endVal);
            // error checks
            if (ensureNumber(self.startVal) && ensureNumber(self.endVal)) {
                self.decimals = Math.max(0, decimals || 0);
                self.dec = Math.pow(10, self.decimals);
                self.duration = Number(duration) * 1000 || 4000;
                self.countDown = (self.startVal > self.endVal);
                self.frameVal = self.startVal;
                self.initialized = true;
                return true;
            }
            else {
                self.error = '[CountUp] startVal (' + startVal + ') or endVal (' + endVal + ') is not a number';
                return false;
            }
        };

        // Print value to target
        self.printValue = function (value) {
            var result = self.options.formattingFn(value);
            // var sizeKeeper = self.options.formattingFn(endVal);

            // sizeKeeper = '<span style="visibility: hidden;display: block;line-height: 0px;height: 0px;overflow: hidden;">'+sizeKeeper+'</span>';

            // result = sizeKeeper+result;

            if (self.d.tagName === 'INPUT') {
                this.d.value = result;
            }
            else if (self.d.tagName === 'text' || self.d.tagName === 'tspan') {
                this.d.textContent = result;
            }
            else {
                this.d.innerHTML = result;
            }
        };

        self.count = function (timestamp) {

            if (!self.startTime) {
                self.startTime = timestamp;
            }

            self.timestamp = timestamp;
            var progress = timestamp - self.startTime;
            self.remaining = self.duration - progress;

            // to ease or not to ease
            if (self.options.useEasing) {
                if (self.countDown) {
                    self.frameVal = self.startVal - self.options.easingFn(progress, 0, self.startVal - self.endVal, self.duration);
                } else {
                    self.frameVal = self.options.easingFn(progress, self.startVal, self.endVal - self.startVal, self.duration);
                }
            } else {
                if (self.countDown) {
                    self.frameVal = self.startVal - ((self.startVal - self.endVal) * (progress / self.duration));
                } else {
                    self.frameVal = self.startVal + (self.endVal - self.startVal) * (progress / self.duration);
                }
            }

            // don't go past endVal since progress can exceed duration in the last frame
            if (self.countDown) {
                self.frameVal = (self.frameVal < self.endVal) ? self.endVal : self.frameVal;
            } else {
                self.frameVal = (self.frameVal > self.endVal) ? self.endVal : self.frameVal;
            }

            // decimal
            self.frameVal = Math.round(self.frameVal * self.dec) / self.dec;

            // format and print value
            self.printValue(self.frameVal);

            if (self.options.onUpdate) {
                self.options.onUpdate(self.frameVal);
            }

            // whether to continue
            if (progress < self.duration) {
                self.rAF = requestAnimationFrame(self.count);
            } else {
                if (self.callback) self.callback();
            }
        };
        // start your animation
        self.start = function (callback) {
            if (!self.initialize()) return;
            self.callback = callback;
            self.rAF = requestAnimationFrame(self.count);
        };
        // toggles pause/resume animation
        self.pauseResume = function () {
            if (!self.paused) {
                self.paused = true;
                cancelAnimationFrame(self.rAF);
            } else {
                self.paused = false;
                delete self.startTime;
                self.duration = self.remaining;
                self.startVal = self.frameVal;
                requestAnimationFrame(self.count);
            }
        };
        // reset to startVal so animation can be run again
        self.reset = function () {
            self.paused = false;
            delete self.startTime;
            self.initialized = false;
            if (self.initialize()) {
                cancelAnimationFrame(self.rAF);
                self.printValue(self.startVal);
            }
        };
        // pass a new endVal and start animation
        self.update = function (newEndVal) {
            if (!self.initialize()) return;
            newEndVal = Number(newEndVal);
            if (!ensureNumber(newEndVal)) {
                self.error = '[CountUp] update() - new endVal is not a number: ' + newEndVal;
                return;
            }
            self.error = '';
            if (newEndVal === self.frameVal) return;
            cancelAnimationFrame(self.rAF);
            self.paused = false;
            delete self.startTime;
            self.startVal = self.frameVal;
            self.endVal = newEndVal;
            self.countDown = (self.startVal > self.endVal);
            self.rAF = requestAnimationFrame(self.count);
        };

        // format startVal on initialization
        if (self.initialize()) self.printValue(self.startVal);
    };

    return CountUp;

}));
// source --> http://localhost/ielts/wp-content/plugins/mesmerize-companion/theme-data/mesmerize/sections/scripts.js?ver=1.0.1 
(function ($) {
    var contentSwap = {
        "contentswap-effect": {
            "effectType": "",
            "contentType": "overlay",
            "overflowEnabled": "false",
            "effectDelay": "800",
            "effectEasing": "Ease",
            "overlayColor": "490A3D",
            "innerColor": "ffffff",
            "openPage": "same",
            "name": "",
            "captionType": "490A3D",
            "operationType": "edit",
            "hasls": "true",
            "additionalWrapperClasses": "",
            "direction": "bottom",
            "useSameTemplate": "true"
        }
    };


    jQuery(document).ready(function () {

        var contentSwapTimeout = setTimeout(function () {
            if (window.initHoverFX) {
                initHoverFX(contentSwap);
            }
        }, 10);
        jQuery(window).resize(function (e) {
            clearTimeout(contentSwapTimeout);
            contentSwapTimeout = setTimeout(function () {
                if (window.initHoverFX) {
                    initHoverFX(contentSwap, null, e);
                }
            }, 150);

        });
    });


})(jQuery);
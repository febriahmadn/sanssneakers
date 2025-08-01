<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_cc5ff22dce88f7e5a85c1cb2d76155a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/base_js.html.twig"));

        // line 3
        echo "<script";
        if ((array_key_exists("csp_script_nonce", $context) && (isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 3, $this->source); })()))) {
            echo " nonce=\"";
            echo twig_escape_filter($this->env, (isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 3, $this->source); })()), "html", null, true);
            echo "\"";
        }
        echo ">/*<![CDATA[*/
    ";
        // line 7
        echo "
if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {
    Sfjs = (function() {
        \"use strict\";

        if ('classList' in document.documentElement) {
            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
            var addClass = function(el, cssClass) { el.classList.add(cssClass); };
            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
        } else {
            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };
            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };
            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };
            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
        }

        var noop = function() {};

        var profilerStorageKey = 'symfony/profiler/';

        var addEventListener;

        var el = document.createElement('div');
        if (!('addEventListener' in el)) {
            addEventListener = function (element, eventName, callback) {
                element.attachEvent('on' + eventName, callback);
            };
        } else {
            addEventListener = function (element, eventName, callback) {
                element.addEventListener(eventName, callback, false);
            };
        }

        var request = function(url, onSuccess, onError, payload, options) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            options = options || {};
            options.maxTries = options.maxTries || 0;
            xhr.open(options.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onreadystatechange = function(state) {
                if (4 !== xhr.readyState) {
                    return null;
                }

                if (xhr.status == 404 && options.maxTries > 1) {
                    setTimeout(function(){
                        options.maxTries--;
                        request(url, onSuccess, onError, payload, options);
                    }, 1000);

                    return null;
                }

                if (200 === xhr.status) {
                    (onSuccess || noop)(xhr);
                } else {
                    (onError || noop)(xhr);
                }
            };
            xhr.send(payload || '');
        };

        var getPreference = function(name) {
            if (!window.localStorage) {
                return null;
            }

            return localStorage.getItem(profilerStorageKey + name);
        };

        var setPreference = function(name, value) {
            if (!window.localStorage) {
                return null;
            }

            localStorage.setItem(profilerStorageKey + name, value);
        };

        var requestStack = [];

        var extractHeaders = function(xhr, stackElement) {
            /* Here we avoid to call xhr.getResponseHeader in order to */
            /* prevent polluting the console with CORS security errors */
            var allHeaders = xhr.getAllResponseHeaders();
            var ret;

            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {
                stackElement.profile = ret[1];
            }
            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {
                stackElement.profilerUrl = ret[1];
            }
            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {
                stackElement.toolbarReplaceFinished = false;
                stackElement.toolbarReplace = '1' === ret[1];
            }
        };

        var successStreak = 4;
        var pendingRequests = 0;
        var renderAjaxRequests = function() {
            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');
            if (!requestCounter) {
                return;
            }
            requestCounter.textContent = requestStack.length;

            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");
            if (infoSpan) {
                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');
            }

            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');
            if (requestStack.length) {
                ajaxToolbarPanel.style.display = 'block';
            } else {
                ajaxToolbarPanel.style.display = 'none';
            }
            if (pendingRequests > 0) {
                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else if (successStreak < 4) {
                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else {
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
            }
        };

        var startAjaxRequest = function(index) {
            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');
            if (!tbody) {
                return;
            }

            var nbOfAjaxRequest = tbody.rows.length;
            if (nbOfAjaxRequest >= 100) {
                tbody.deleteRow(0);
            }

            var request = requestStack[index];
            pendingRequests++;
            var row = document.createElement('tr');
            request.DOMNode = row;

            var requestNumberCell = document.createElement('td');
            requestNumberCell.textContent = index + 1;
            row.appendChild(requestNumberCell);

            var profilerCell = document.createElement('td');
            profilerCell.textContent = 'n/a';
            row.appendChild(profilerCell);

            var methodCell = document.createElement('td');
            methodCell.textContent = request.method;
            row.appendChild(methodCell);

            var typeCell = document.createElement('td');
            typeCell.textContent = request.type;
            row.appendChild(typeCell);

            var statusCodeCell = document.createElement('td');
            var statusCode = document.createElement('span');
            statusCode.textContent = 'n/a';
            statusCodeCell.appendChild(statusCode);
            row.appendChild(statusCodeCell);

            var pathCell = document.createElement('td');
            pathCell.className = 'sf-ajax-request-url';
            if ('GET' === request.method) {
                var pathLink = document.createElement('a');
                pathLink.setAttribute('href', request.url);
                pathLink.textContent = request.url;
                pathCell.appendChild(pathLink);
            } else {
                pathCell.textContent = request.url;
            }
            pathCell.setAttribute('title', request.url);
            row.appendChild(pathCell);

            var durationCell = document.createElement('td');
            durationCell.className = 'sf-ajax-request-duration';
            durationCell.textContent = 'n/a';
            row.appendChild(durationCell);

            request.liveDurationHandle = setInterval(function() {
                durationCell.textContent = (new Date() - request.start) + 'ms';
            }, 100);

            row.className = 'sf-ajax-request sf-ajax-request-loading';
            tbody.insertBefore(row, null);

            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;

            renderAjaxRequests();
        };

        var finishAjaxRequest = function(index) {
            var request = requestStack[index];
            clearInterval(request.liveDurationHandle);

            if (!request.DOMNode) {
                return;
            }

            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {
                /* Flag as complete because finishAjaxRequest can be called multiple times. */
                request.toolbarReplaceFinished = true;
                /* Search up through the DOM to find the toolbar's container ID. */
                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {
                    if (elem.id.match(/^sfwdt/)) {
                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);
                        break;
                    }
                }
            }

            pendingRequests--;
            var row = request.DOMNode;
            /* Unpack the children from the row */
            var profilerCell = row.children[1];
            var methodCell = row.children[2];
            var statusCodeCell = row.children[4];
            var statusCodeElem = statusCodeCell.children[0];
            var durationCell = row.children[6];

            if (request.error) {
                row.className = 'sf-ajax-request sf-ajax-request-error';
                methodCell.className = 'sf-ajax-request-error';
                successStreak = 0;
            } else {
                row.className = 'sf-ajax-request sf-ajax-request-ok';
                successStreak++;
            }

            if (request.statusCode) {
                if (request.statusCode < 300) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');
                } else if (request.statusCode < 400) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');
                } else {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                }
                statusCodeElem.textContent = request.statusCode;
            } else {
                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
            }

            if (request.duration) {
                durationCell.textContent = request.duration + 'ms';
            }

            if (request.profilerUrl) {
                profilerCell.textContent = '';
                var profilerLink = document.createElement('a');
                profilerLink.setAttribute('href', request.profilerUrl);
                profilerLink.textContent = request.profile;
                profilerCell.appendChild(profilerLink);
            }

            renderAjaxRequests();
        };

        ";
        // line 272
        if (array_key_exists("excluded_ajax_paths", $context)) {
            // line 273
            echo "            if (window.fetch && window.fetch.polyfill === undefined) {
                var oldFetch = window.fetch;
                window.fetch = function () {
                    var promise = oldFetch.apply(this, arguments);
                    var url = arguments[0];
                    var params = arguments[1];
                    var paramType = Object.prototype.toString.call(arguments[0]);
                    if (paramType === '[object Request]') {
                        url = arguments[0].url;
                        params = {
                            method: arguments[0].method,
                            credentials: arguments[0].credentials,
                            headers: arguments[0].headers,
                            mode: arguments[0].mode,
                            redirect: arguments[0].redirect
                        };
                    } else {
                        url = String(url);
                    }
                    if (!url.match(new RegExp(";
            // line 292
            echo json_encode((isset($context["excluded_ajax_paths"]) || array_key_exists("excluded_ajax_paths", $context) ? $context["excluded_ajax_paths"] : (function () { throw new RuntimeError('Variable "excluded_ajax_paths" does not exist.', 292, $this->source); })()));
            echo "))) {
                        var method = 'GET';
                        if (params && params.method !== undefined) {
                            method = params.method;
                        }

                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'fetch',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;
                        promise.then(function (r) {
                            stackElement.duration = new Date() - stackElement.start;
                            stackElement.error = r.status < 200 || r.status >= 400;
                            stackElement.statusCode = r.status;
                            stackElement.profile = r.headers.get('x-debug-token');
                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');
                            stackElement.toolbarReplaceFinished = false;
                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');
                            finishAjaxRequest(idx);
                        }, function (e){
                            stackElement.error = true;
                            finishAjaxRequest(idx);
                        });
                        startAjaxRequest(idx);
                    }

                    return promise;
                };
            }
            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {
                var proxied = XMLHttpRequest.prototype.open;

                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
                    var self = this;

                    /* prevent logging AJAX calls to static and inline files, like templates */
                    var path = url;
                    if (url.slice(0, 1) === '/') {
                        if (0 === url.indexOf('";
            // line 335
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 335, $this->source); })()), "basePath", [], "any", false, false, false, 335), "js"), "html", null, true);
            echo "')) {
                            path = url.slice(";
            // line 336
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 336, $this->source); })()), "basePath", [], "any", false, false, false, 336)), "html", null, true);
            echo ");
                        }
                    }
                    else if (0 === url.indexOf('";
            // line 339
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 339, $this->source); })()), "schemeAndHttpHost", [], "any", false, false, false, 339) . twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 339, $this->source); })()), "basePath", [], "any", false, false, false, 339)), "js"), "html", null, true);
            echo "')) {
                        path = url.slice(";
            // line 340
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 340, $this->source); })()), "schemeAndHttpHost", [], "any", false, false, false, 340) . twig_get_attribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 340, $this->source); })()), "basePath", [], "any", false, false, false, 340))), "html", null, true);
            echo ");
                    }

                    if (!path.match(new RegExp(";
            // line 343
            echo json_encode((isset($context["excluded_ajax_paths"]) || array_key_exists("excluded_ajax_paths", $context) ? $context["excluded_ajax_paths"] : (function () { throw new RuntimeError('Variable "excluded_ajax_paths" does not exist.', 343, $this->source); })()));
            echo "))) {
                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'xhr',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;

                        this.addEventListener('readystatechange', function() {
                            if (self.readyState == 4) {
                                stackElement.duration = new Date() - stackElement.start;
                                stackElement.error = self.status < 200 || self.status >= 400;
                                stackElement.statusCode = self.status;
                                extractHeaders(self, stackElement);

                                finishAjaxRequest(idx);
                            }
                        }, false);

                        startAjaxRequest(idx);
                    }

                    proxied.apply(this, Array.prototype.slice.call(arguments));
                };
            }
        ";
        }
        // line 372
        echo "
        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            toggleClass: toggleClass,

            getPreference: getPreference,

            setPreference: setPreference,

            addEventListener: addEventListener,

            request: request,

            renderAjaxRequests: renderAjaxRequests,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            var pending = pendingRequests;
                            for (var i = 0; i < requestStack.length; i++) {
                                startAjaxRequest(i);
                                if (requestStack[i].duration) {
                                    finishAjaxRequest(i);
                                }
                            }
                            /* Revert the pending state in case there was a start called without a finish above. */
                            pendingRequests = pending;
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            loadToolbar: function(token, newToken) {
                newToken = (newToken || token);
                this.load(
                    'sfwdt' + token,
                    '";
        // line 426
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_wdt", ["token" => "xxxxxx"]), "js"), "html", null, true);
        echo "'.replace(/xxxxxx/, newToken),
                    function(xhr, el) {
                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */
                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {
                            return;
                        }

                        /* Evaluate in global scope scripts embedded inside the toolbar */
                        var i, scripts = [].slice.call(el.querySelectorAll('script'));
                        for (i = 0; i < scripts.length; ++i) {
                            eval.call({}, scripts[i].firstChild.nodeValue);
                        }

                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                        if (el.style.display == 'none') {
                            return;
                        }

                        if (getPreference('toolbar/displayState') == 'none') {
                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';
                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';
                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';
                        } else {
                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';
                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';
                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'none';
                        }

                        /* Handle toolbar-info position */
                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                        for (i = 0; i < toolbarBlocks.length; ++i) {
                            toolbarBlocks[i].onmouseover = function () {
                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                                var pageWidth = document.body.clientWidth;
                                var elementWidth = toolbarInfo.offsetWidth;
                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                                /* Reset right and left value, useful on window resize */
                                toolbarInfo.style.right = '';
                                toolbarInfo.style.left = '';

                                if (elementWidth > pageWidth) {
                                    toolbarInfo.style.left = 0;
                                }
                                else if (leftValue > 0 && rightValue > 0) {
                                    toolbarInfo.style.right = (rightValue * -1) + 'px';
                                } else if (leftValue < 0) {
                                    toolbarInfo.style.left = 0;
                                } else {
                                    toolbarInfo.style.right = '0px';
                                }
                            };
                        }
                        addEventListener(document.getElementById('sfToolbarHideButton-' + newToken), 'click', function (event) {
                            event.preventDefault();

                            var p = this.parentNode;
                            p.style.display = 'none';
                            (p.previousElementSibling || p.previousSibling).style.display = 'none';
                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';
                            setPreference('toolbar/displayState', 'none');
                        });
                        addEventListener(document.getElementById('sfToolbarMiniToggler-' + newToken), 'click', function (event) {
                            event.preventDefault();

                            var elem = this.parentNode;
                            if (elem.style.display == 'none') {
                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';
                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';
                                elem.style.display = 'block';
                            } else {
                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';
                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';
                                elem.style.display = 'none'
                            }

                            setPreference('toolbar/displayState', 'block');
                        });
                        renderAjaxRequests();
                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {
                            requestStack = [];
                            renderAjaxRequests();
                            successStreak = 4;
                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';
                        });
                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {
                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
                            elem.scrollTop = elem.scrollHeight;
                        });
                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {
                            event.preventDefault();

                            toggleClass(this.parentNode, 'hover');
                        });

                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');
                        if (null !== dumpInfo) {
                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {
                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';
                            });
                            addEventListener(dumpInfo, 'mouseleave', function () {
                                dumpInfo.style.minHeight = '';
                            });
                        }
                    },
                    function(xhr) {
                        if (xhr.status !== 0) {
                            var sfwdt = document.getElementById('sfwdt' + token);
                            sfwdt.innerHTML = '\\
                                <div class=\"sf-toolbarreset\">\\
                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\
                                    An error occurred while loading the web debug toolbar. <a href=\"";
        // line 539
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_profiler_home"), "js"), "html", null, true);
        echo "' + newToken + '>Open the web profiler.</a>\\
                                </div>\\
                            ';
                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');
                        }
                    },
                    { maxTries: 5 }
                );

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            },

            createTabs: function() {
                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');

                /* create the tab navigation for each group of tabs */
                for (var i = 0; i < tabGroups.length; i++) {
                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');
                    var tabNavigation = document.createElement('ul');
                    tabNavigation.className = 'tab-navigation';

                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */
                    for (var j = 0; j < tabs.length; j++) {
                        var tabId = 'tab-' + i + '-' + j;
                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;

                        var tabNavigationItem = document.createElement('li');
                        tabNavigationItem.setAttribute('data-tab-id', tabId);
                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }
                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }
                        tabNavigationItem.innerHTML = tabTitle;
                        tabNavigation.appendChild(tabNavigationItem);

                        var tabContent = tabs[j].querySelector('.tab-content');
                        tabContent.parentElement.setAttribute('id', tabId);
                    }

                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);
                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');
                }

                /* display the active tab and add the 'click' event listeners */
                for (i = 0; i < tabGroups.length; i++) {
                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');

                    for (j = 0; j < tabNavigation.length; j++) {
                        tabId = tabNavigation[j].getAttribute('data-tab-id');
                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';

                        if (hasClass(tabNavigation[j], 'active')) {
                            document.getElementById(tabId).className = 'block';
                        } else {
                            document.getElementById(tabId).className = 'hidden';
                        }

                        tabNavigation[j].addEventListener('click', function(e) {
                            var activeTab = e.target || e.srcElement;

                            /* needed because when the tab contains HTML contents, user can click */
                            /* on any of those elements instead of their parent '<li>' element */
                            while (activeTab.tagName.toLowerCase() !== 'li') {
                                activeTab = activeTab.parentNode;
                            }

                            /* get the full list of tabs through the parent of the active tab element */
                            var tabNavigation = activeTab.parentNode.children;
                            for (var k = 0; k < tabNavigation.length; k++) {
                                var tabId = tabNavigation[k].getAttribute('data-tab-id');
                                document.getElementById(tabId).className = 'hidden';
                                removeClass(tabNavigation[k], 'active');
                            }

                            addClass(activeTab, 'active');
                            var activeTabId = activeTab.getAttribute('data-tab-id');
                            document.getElementById(activeTabId).className = 'block';
                        });
                    }

                    tabGroups[i].setAttribute('data-processed', 'true');
                }
            },

            createToggles: function() {
                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');

                for (var i = 0; i < toggles.length; i++) {
                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');
                    var element = document.querySelector(elementSelector);

                    addClass(element, 'sf-toggle-content');

                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {
                        addClass(toggles[i], 'sf-toggle-on');
                        addClass(element, 'sf-toggle-visible');
                    } else {
                        addClass(toggles[i], 'sf-toggle-off');
                        addClass(element, 'sf-toggle-hidden');
                    }

                    addEventListener(toggles[i], 'click', function(e) {
                        e.preventDefault();

                        if ('' !== window.getSelection().toString()) {
                            /* Don't do anything on text selection */
                            return;
                        }

                        var toggle = e.target || e.srcElement;

                        /* needed because when the toggle contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '.sf-toggle' element */
                        while (!hasClass(toggle, 'sf-toggle')) {
                            toggle = toggle.parentNode;
                        }

                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                        toggleClass(toggle, 'sf-toggle-on');
                        toggleClass(toggle, 'sf-toggle-off');
                        toggleClass(element, 'sf-toggle-hidden');
                        toggleClass(element, 'sf-toggle-visible');

                        /* the toggle doesn't change its contents when clicking on it */
                        if (!toggle.hasAttribute('data-toggle-alt-content')) {
                            return;
                        }

                        if (!toggle.hasAttribute('data-toggle-original-content')) {
                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                        }

                        var currentContent = toggle.innerHTML;
                        var originalContent = toggle.getAttribute('data-toggle-original-content');
                        var altContent = toggle.getAttribute('data-toggle-alt-content');
                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                    });

                    /* Prevents from disallowing clicks on links inside toggles */
                    var toggleLinks = toggles[i].querySelectorAll('a');
                    for (var j = 0; j < toggleLinks.length; j++) {
                        addEventListener(toggleLinks[j], 'click', function(e) {
                            e.stopPropagation();
                        });
                    }

                    toggles[i].setAttribute('data-processed', 'true');
                }
            },

            createFilters: function() {
                document.querySelectorAll('[data-filters] [data-filter]').forEach(function (filter) {
                    var filters = filter.closest('[data-filters]'),
                        type = 'choice',
                        name = filter.dataset.filter,
                        ucName = name.charAt(0).toUpperCase()+name.slice(1),
                        list = document.createElement('ul'),
                        values = filters.dataset['filter'+ucName] || filters.querySelectorAll('[data-filter-'+name+']'),
                        labels = {},
                        defaults = null,
                        indexed = {},
                        processed = {};
                    if (typeof values === 'string') {
                        type = 'level';
                        labels = values.split(',');
                        values = values.toLowerCase().split(',');
                        defaults = values.length - 1;
                    }
                    addClass(list, 'filter-list');
                    addClass(list, 'filter-list-'+type);
                    values.forEach(function (value, i) {
                        if (value instanceof HTMLElement) {
                            value = value.dataset['filter'+ucName];
                        }
                        if (value in processed) {
                            return;
                        }
                        var option = document.createElement('li'),
                            label = i in labels ? labels[i] : value,
                            active = false,
                            matches;
                        if ('' === label) {
                            option.innerHTML = '<em>(none)</em>';
                        } else {
                            option.innerText = label;
                        }
                        option.dataset.filter = value;
                        option.setAttribute('title', 1 === (matches = filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').length) ? 'Matches 1 row' : 'Matches '+matches+' rows');
                        indexed[value] = i;
                        list.appendChild(option);
                        addEventListener(option, 'click', function () {
                            if ('choice' === type) {
                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {
                                    if (option.dataset.filter === row.dataset['filter'+ucName]) {
                                        toggleClass(row, 'filter-hidden-'+name);
                                    }
                                });
                                toggleClass(option, 'active');
                            } else if ('level' === type) {
                                if (i === this.parentNode.querySelectorAll('.active').length - 1) {
                                    return;
                                }
                                this.parentNode.querySelectorAll('li').forEach(function (currentOption, j) {
                                    if (j <= i) {
                                        addClass(currentOption, 'active');
                                        if (i === j) {
                                            addClass(currentOption, 'last-active');
                                        } else {
                                            removeClass(currentOption, 'last-active');
                                        }
                                    } else {
                                        removeClass(currentOption, 'active');
                                        removeClass(currentOption, 'last-active');
                                    }
                                });
                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {
                                    if (i < indexed[row.dataset['filter'+ucName]]) {
                                        addClass(row, 'filter-hidden-'+name);
                                    } else {
                                        removeClass(row, 'filter-hidden-'+name);
                                    }
                                });
                            }
                        });
                        if ('choice' === type) {
                            active = null === defaults || 0 <= defaults.indexOf(value);
                        } else if ('level' === type) {
                            active = i <= defaults;
                            if (active && i === defaults) {
                                addClass(option, 'last-active');
                            }
                        }
                        if (active) {
                            addClass(option, 'active');
                        } else {
                            filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').forEach(function (row) {
                                toggleClass(row, 'filter-hidden-'+name);
                            });
                        }
                        processed[value] = true;
                    });

                    if (1 < list.childNodes.length) {
                        filter.appendChild(list);
                        filter.dataset.filtered = '';
                    }
                });
            }
        };
    })();

    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {
        Sfjs.createTabs();
        Sfjs.createToggles();
    });
}
/*]]>*/</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  612 => 539,  496 => 426,  440 => 372,  408 => 343,  402 => 340,  398 => 339,  392 => 336,  388 => 335,  342 => 292,  321 => 273,  319 => 272,  52 => 7,  43 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# This file is partially duplicated in TwigBundle/Resources/views/base_js.html.twig. If you
   make any change in this file, verify the same change is needed in the other file. #}
<script{% if csp_script_nonce is defined and csp_script_nonce %} nonce=\"{{ csp_script_nonce }}\"{% endif %}>/*<![CDATA[*/
    {# Caution: the contents of this file are processed by Twig before loading
                them as JavaScript source code. Always use '/*' comments instead
                of '//' comments to avoid impossible-to-debug side-effects #}

if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {
    Sfjs = (function() {
        \"use strict\";

        if ('classList' in document.documentElement) {
            var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
            var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
            var addClass = function(el, cssClass) { el.classList.add(cssClass); };
            var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
        } else {
            var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };
            var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };
            var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };
            var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
        }

        var noop = function() {};

        var profilerStorageKey = 'symfony/profiler/';

        var addEventListener;

        var el = document.createElement('div');
        if (!('addEventListener' in el)) {
            addEventListener = function (element, eventName, callback) {
                element.attachEvent('on' + eventName, callback);
            };
        } else {
            addEventListener = function (element, eventName, callback) {
                element.addEventListener(eventName, callback, false);
            };
        }

        var request = function(url, onSuccess, onError, payload, options) {
            var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            options = options || {};
            options.maxTries = options.maxTries || 0;
            xhr.open(options.method || 'GET', url, true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onreadystatechange = function(state) {
                if (4 !== xhr.readyState) {
                    return null;
                }

                if (xhr.status == 404 && options.maxTries > 1) {
                    setTimeout(function(){
                        options.maxTries--;
                        request(url, onSuccess, onError, payload, options);
                    }, 1000);

                    return null;
                }

                if (200 === xhr.status) {
                    (onSuccess || noop)(xhr);
                } else {
                    (onError || noop)(xhr);
                }
            };
            xhr.send(payload || '');
        };

        var getPreference = function(name) {
            if (!window.localStorage) {
                return null;
            }

            return localStorage.getItem(profilerStorageKey + name);
        };

        var setPreference = function(name, value) {
            if (!window.localStorage) {
                return null;
            }

            localStorage.setItem(profilerStorageKey + name, value);
        };

        var requestStack = [];

        var extractHeaders = function(xhr, stackElement) {
            /* Here we avoid to call xhr.getResponseHeader in order to */
            /* prevent polluting the console with CORS security errors */
            var allHeaders = xhr.getAllResponseHeaders();
            var ret;

            if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {
                stackElement.profile = ret[1];
            }
            if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {
                stackElement.profilerUrl = ret[1];
            }
            if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {
                stackElement.toolbarReplaceFinished = false;
                stackElement.toolbarReplace = '1' === ret[1];
            }
        };

        var successStreak = 4;
        var pendingRequests = 0;
        var renderAjaxRequests = function() {
            var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');
            if (!requestCounter) {
                return;
            }
            requestCounter.textContent = requestStack.length;

            var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");
            if (infoSpan) {
                infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');
            }

            var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');
            if (requestStack.length) {
                ajaxToolbarPanel.style.display = 'block';
            } else {
                ajaxToolbarPanel.style.display = 'none';
            }
            if (pendingRequests > 0) {
                addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else if (successStreak < 4) {
                addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
            } else {
                removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
            }
        };

        var startAjaxRequest = function(index) {
            var tbody = document.querySelector('.sf-toolbar-ajax-request-list');
            if (!tbody) {
                return;
            }

            var nbOfAjaxRequest = tbody.rows.length;
            if (nbOfAjaxRequest >= 100) {
                tbody.deleteRow(0);
            }

            var request = requestStack[index];
            pendingRequests++;
            var row = document.createElement('tr');
            request.DOMNode = row;

            var requestNumberCell = document.createElement('td');
            requestNumberCell.textContent = index + 1;
            row.appendChild(requestNumberCell);

            var profilerCell = document.createElement('td');
            profilerCell.textContent = 'n/a';
            row.appendChild(profilerCell);

            var methodCell = document.createElement('td');
            methodCell.textContent = request.method;
            row.appendChild(methodCell);

            var typeCell = document.createElement('td');
            typeCell.textContent = request.type;
            row.appendChild(typeCell);

            var statusCodeCell = document.createElement('td');
            var statusCode = document.createElement('span');
            statusCode.textContent = 'n/a';
            statusCodeCell.appendChild(statusCode);
            row.appendChild(statusCodeCell);

            var pathCell = document.createElement('td');
            pathCell.className = 'sf-ajax-request-url';
            if ('GET' === request.method) {
                var pathLink = document.createElement('a');
                pathLink.setAttribute('href', request.url);
                pathLink.textContent = request.url;
                pathCell.appendChild(pathLink);
            } else {
                pathCell.textContent = request.url;
            }
            pathCell.setAttribute('title', request.url);
            row.appendChild(pathCell);

            var durationCell = document.createElement('td');
            durationCell.className = 'sf-ajax-request-duration';
            durationCell.textContent = 'n/a';
            row.appendChild(durationCell);

            request.liveDurationHandle = setInterval(function() {
                durationCell.textContent = (new Date() - request.start) + 'ms';
            }, 100);

            row.className = 'sf-ajax-request sf-ajax-request-loading';
            tbody.insertBefore(row, null);

            var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
            toolbarInfo.scrollTop = toolbarInfo.scrollHeight;

            renderAjaxRequests();
        };

        var finishAjaxRequest = function(index) {
            var request = requestStack[index];
            clearInterval(request.liveDurationHandle);

            if (!request.DOMNode) {
                return;
            }

            if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {
                /* Flag as complete because finishAjaxRequest can be called multiple times. */
                request.toolbarReplaceFinished = true;
                /* Search up through the DOM to find the toolbar's container ID. */
                for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {
                    if (elem.id.match(/^sfwdt/)) {
                        Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);
                        break;
                    }
                }
            }

            pendingRequests--;
            var row = request.DOMNode;
            /* Unpack the children from the row */
            var profilerCell = row.children[1];
            var methodCell = row.children[2];
            var statusCodeCell = row.children[4];
            var statusCodeElem = statusCodeCell.children[0];
            var durationCell = row.children[6];

            if (request.error) {
                row.className = 'sf-ajax-request sf-ajax-request-error';
                methodCell.className = 'sf-ajax-request-error';
                successStreak = 0;
            } else {
                row.className = 'sf-ajax-request sf-ajax-request-ok';
                successStreak++;
            }

            if (request.statusCode) {
                if (request.statusCode < 300) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status');
                } else if (request.statusCode < 400) {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');
                } else {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                }
                statusCodeElem.textContent = request.statusCode;
            } else {
                statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
            }

            if (request.duration) {
                durationCell.textContent = request.duration + 'ms';
            }

            if (request.profilerUrl) {
                profilerCell.textContent = '';
                var profilerLink = document.createElement('a');
                profilerLink.setAttribute('href', request.profilerUrl);
                profilerLink.textContent = request.profile;
                profilerCell.appendChild(profilerLink);
            }

            renderAjaxRequests();
        };

        {% if excluded_ajax_paths is defined %}
            if (window.fetch && window.fetch.polyfill === undefined) {
                var oldFetch = window.fetch;
                window.fetch = function () {
                    var promise = oldFetch.apply(this, arguments);
                    var url = arguments[0];
                    var params = arguments[1];
                    var paramType = Object.prototype.toString.call(arguments[0]);
                    if (paramType === '[object Request]') {
                        url = arguments[0].url;
                        params = {
                            method: arguments[0].method,
                            credentials: arguments[0].credentials,
                            headers: arguments[0].headers,
                            mode: arguments[0].mode,
                            redirect: arguments[0].redirect
                        };
                    } else {
                        url = String(url);
                    }
                    if (!url.match(new RegExp({{ excluded_ajax_paths|json_encode|raw }}))) {
                        var method = 'GET';
                        if (params && params.method !== undefined) {
                            method = params.method;
                        }

                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'fetch',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;
                        promise.then(function (r) {
                            stackElement.duration = new Date() - stackElement.start;
                            stackElement.error = r.status < 200 || r.status >= 400;
                            stackElement.statusCode = r.status;
                            stackElement.profile = r.headers.get('x-debug-token');
                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');
                            stackElement.toolbarReplaceFinished = false;
                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');
                            finishAjaxRequest(idx);
                        }, function (e){
                            stackElement.error = true;
                            finishAjaxRequest(idx);
                        });
                        startAjaxRequest(idx);
                    }

                    return promise;
                };
            }
            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {
                var proxied = XMLHttpRequest.prototype.open;

                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
                    var self = this;

                    /* prevent logging AJAX calls to static and inline files, like templates */
                    var path = url;
                    if (url.slice(0, 1) === '/') {
                        if (0 === url.indexOf('{{ request.basePath|e('js') }}')) {
                            path = url.slice({{ request.basePath|length }});
                        }
                    }
                    else if (0 === url.indexOf('{{ (request.schemeAndHttpHost ~ request.basePath)|e('js') }}')) {
                        path = url.slice({{ (request.schemeAndHttpHost ~ request.basePath)|length }});
                    }

                    if (!path.match(new RegExp({{ excluded_ajax_paths|json_encode|raw }}))) {
                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'xhr',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;

                        this.addEventListener('readystatechange', function() {
                            if (self.readyState == 4) {
                                stackElement.duration = new Date() - stackElement.start;
                                stackElement.error = self.status < 200 || self.status >= 400;
                                stackElement.statusCode = self.status;
                                extractHeaders(self, stackElement);

                                finishAjaxRequest(idx);
                            }
                        }, false);

                        startAjaxRequest(idx);
                    }

                    proxied.apply(this, Array.prototype.slice.call(arguments));
                };
            }
        {% endif %}

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            toggleClass: toggleClass,

            getPreference: getPreference,

            setPreference: setPreference,

            addEventListener: addEventListener,

            request: request,

            renderAjaxRequests: renderAjaxRequests,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            var pending = pendingRequests;
                            for (var i = 0; i < requestStack.length; i++) {
                                startAjaxRequest(i);
                                if (requestStack[i].duration) {
                                    finishAjaxRequest(i);
                                }
                            }
                            /* Revert the pending state in case there was a start called without a finish above. */
                            pendingRequests = pending;
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            loadToolbar: function(token, newToken) {
                newToken = (newToken || token);
                this.load(
                    'sfwdt' + token,
                    '{{ url(\"_wdt\", { \"token\": \"xxxxxx\" })|escape('js') }}'.replace(/xxxxxx/, newToken),
                    function(xhr, el) {
                        /* Do nothing in the edge case where the toolbar has already been replaced with a new one */
                        if (!document.getElementById('sfToolbarMainContent-' + newToken)) {
                            return;
                        }

                        /* Evaluate in global scope scripts embedded inside the toolbar */
                        var i, scripts = [].slice.call(el.querySelectorAll('script'));
                        for (i = 0; i < scripts.length; ++i) {
                            eval.call({}, scripts[i].firstChild.nodeValue);
                        }

                        el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                        if (el.style.display == 'none') {
                            return;
                        }

                        if (getPreference('toolbar/displayState') == 'none') {
                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';
                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';
                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';
                        } else {
                            document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';
                            document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';
                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'none';
                        }

                        /* Handle toolbar-info position */
                        var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                        for (i = 0; i < toolbarBlocks.length; ++i) {
                            toolbarBlocks[i].onmouseover = function () {
                                var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                                var pageWidth = document.body.clientWidth;
                                var elementWidth = toolbarInfo.offsetWidth;
                                var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                                var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                                /* Reset right and left value, useful on window resize */
                                toolbarInfo.style.right = '';
                                toolbarInfo.style.left = '';

                                if (elementWidth > pageWidth) {
                                    toolbarInfo.style.left = 0;
                                }
                                else if (leftValue > 0 && rightValue > 0) {
                                    toolbarInfo.style.right = (rightValue * -1) + 'px';
                                } else if (leftValue < 0) {
                                    toolbarInfo.style.left = 0;
                                } else {
                                    toolbarInfo.style.right = '0px';
                                }
                            };
                        }
                        addEventListener(document.getElementById('sfToolbarHideButton-' + newToken), 'click', function (event) {
                            event.preventDefault();

                            var p = this.parentNode;
                            p.style.display = 'none';
                            (p.previousElementSibling || p.previousSibling).style.display = 'none';
                            document.getElementById('sfMiniToolbar-' + newToken).style.display = 'block';
                            setPreference('toolbar/displayState', 'none');
                        });
                        addEventListener(document.getElementById('sfToolbarMiniToggler-' + newToken), 'click', function (event) {
                            event.preventDefault();

                            var elem = this.parentNode;
                            if (elem.style.display == 'none') {
                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'none';
                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'none';
                                elem.style.display = 'block';
                            } else {
                                document.getElementById('sfToolbarMainContent-' + newToken).style.display = 'block';
                                document.getElementById('sfToolbarClearer-' + newToken).style.display = 'block';
                                elem.style.display = 'none'
                            }

                            setPreference('toolbar/displayState', 'block');
                        });
                        renderAjaxRequests();
                        addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {
                            requestStack = [];
                            renderAjaxRequests();
                            successStreak = 4;
                            document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';
                        });
                        addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {
                            var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
                            elem.scrollTop = elem.scrollHeight;
                        });
                        addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {
                            event.preventDefault();

                            toggleClass(this.parentNode, 'hover');
                        });

                        var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');
                        if (null !== dumpInfo) {
                            addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {
                                dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';
                            });
                            addEventListener(dumpInfo, 'mouseleave', function () {
                                dumpInfo.style.minHeight = '';
                            });
                        }
                    },
                    function(xhr) {
                        if (xhr.status !== 0) {
                            var sfwdt = document.getElementById('sfwdt' + token);
                            sfwdt.innerHTML = '\\
                                <div class=\"sf-toolbarreset\">\\
                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\
                                    An error occurred while loading the web debug toolbar. <a href=\"{{ url(\"_profiler_home\")|escape('js') }}' + newToken + '>Open the web profiler.</a>\\
                                </div>\\
                            ';
                            sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');
                        }
                    },
                    { maxTries: 5 }
                );

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            },

            createTabs: function() {
                var tabGroups = document.querySelectorAll('.sf-tabs:not([data-processed=true])');

                /* create the tab navigation for each group of tabs */
                for (var i = 0; i < tabGroups.length; i++) {
                    var tabs = tabGroups[i].querySelectorAll(':scope > .tab');
                    var tabNavigation = document.createElement('ul');
                    tabNavigation.className = 'tab-navigation';

                    var selectedTabId = 'tab-' + i + '-0'; /* select the first tab by default */
                    for (var j = 0; j < tabs.length; j++) {
                        var tabId = 'tab-' + i + '-' + j;
                        var tabTitle = tabs[j].querySelector('.tab-title').innerHTML;

                        var tabNavigationItem = document.createElement('li');
                        tabNavigationItem.setAttribute('data-tab-id', tabId);
                        if (hasClass(tabs[j], 'active')) { selectedTabId = tabId; }
                        if (hasClass(tabs[j], 'disabled')) { addClass(tabNavigationItem, 'disabled'); }
                        tabNavigationItem.innerHTML = tabTitle;
                        tabNavigation.appendChild(tabNavigationItem);

                        var tabContent = tabs[j].querySelector('.tab-content');
                        tabContent.parentElement.setAttribute('id', tabId);
                    }

                    tabGroups[i].insertBefore(tabNavigation, tabGroups[i].firstChild);
                    addClass(document.querySelector('[data-tab-id=\"' + selectedTabId + '\"]'), 'active');
                }

                /* display the active tab and add the 'click' event listeners */
                for (i = 0; i < tabGroups.length; i++) {
                    tabNavigation = tabGroups[i].querySelectorAll(':scope > .tab-navigation li');

                    for (j = 0; j < tabNavigation.length; j++) {
                        tabId = tabNavigation[j].getAttribute('data-tab-id');
                        document.getElementById(tabId).querySelector('.tab-title').className = 'hidden';

                        if (hasClass(tabNavigation[j], 'active')) {
                            document.getElementById(tabId).className = 'block';
                        } else {
                            document.getElementById(tabId).className = 'hidden';
                        }

                        tabNavigation[j].addEventListener('click', function(e) {
                            var activeTab = e.target || e.srcElement;

                            /* needed because when the tab contains HTML contents, user can click */
                            /* on any of those elements instead of their parent '<li>' element */
                            while (activeTab.tagName.toLowerCase() !== 'li') {
                                activeTab = activeTab.parentNode;
                            }

                            /* get the full list of tabs through the parent of the active tab element */
                            var tabNavigation = activeTab.parentNode.children;
                            for (var k = 0; k < tabNavigation.length; k++) {
                                var tabId = tabNavigation[k].getAttribute('data-tab-id');
                                document.getElementById(tabId).className = 'hidden';
                                removeClass(tabNavigation[k], 'active');
                            }

                            addClass(activeTab, 'active');
                            var activeTabId = activeTab.getAttribute('data-tab-id');
                            document.getElementById(activeTabId).className = 'block';
                        });
                    }

                    tabGroups[i].setAttribute('data-processed', 'true');
                }
            },

            createToggles: function() {
                var toggles = document.querySelectorAll('.sf-toggle:not([data-processed=true])');

                for (var i = 0; i < toggles.length; i++) {
                    var elementSelector = toggles[i].getAttribute('data-toggle-selector');
                    var element = document.querySelector(elementSelector);

                    addClass(element, 'sf-toggle-content');

                    if (toggles[i].hasAttribute('data-toggle-initial') && toggles[i].getAttribute('data-toggle-initial') == 'display') {
                        addClass(toggles[i], 'sf-toggle-on');
                        addClass(element, 'sf-toggle-visible');
                    } else {
                        addClass(toggles[i], 'sf-toggle-off');
                        addClass(element, 'sf-toggle-hidden');
                    }

                    addEventListener(toggles[i], 'click', function(e) {
                        e.preventDefault();

                        if ('' !== window.getSelection().toString()) {
                            /* Don't do anything on text selection */
                            return;
                        }

                        var toggle = e.target || e.srcElement;

                        /* needed because when the toggle contains HTML contents, user can click */
                        /* on any of those elements instead of their parent '.sf-toggle' element */
                        while (!hasClass(toggle, 'sf-toggle')) {
                            toggle = toggle.parentNode;
                        }

                        var element = document.querySelector(toggle.getAttribute('data-toggle-selector'));

                        toggleClass(toggle, 'sf-toggle-on');
                        toggleClass(toggle, 'sf-toggle-off');
                        toggleClass(element, 'sf-toggle-hidden');
                        toggleClass(element, 'sf-toggle-visible');

                        /* the toggle doesn't change its contents when clicking on it */
                        if (!toggle.hasAttribute('data-toggle-alt-content')) {
                            return;
                        }

                        if (!toggle.hasAttribute('data-toggle-original-content')) {
                            toggle.setAttribute('data-toggle-original-content', toggle.innerHTML);
                        }

                        var currentContent = toggle.innerHTML;
                        var originalContent = toggle.getAttribute('data-toggle-original-content');
                        var altContent = toggle.getAttribute('data-toggle-alt-content');
                        toggle.innerHTML = currentContent !== altContent ? altContent : originalContent;
                    });

                    /* Prevents from disallowing clicks on links inside toggles */
                    var toggleLinks = toggles[i].querySelectorAll('a');
                    for (var j = 0; j < toggleLinks.length; j++) {
                        addEventListener(toggleLinks[j], 'click', function(e) {
                            e.stopPropagation();
                        });
                    }

                    toggles[i].setAttribute('data-processed', 'true');
                }
            },

            createFilters: function() {
                document.querySelectorAll('[data-filters] [data-filter]').forEach(function (filter) {
                    var filters = filter.closest('[data-filters]'),
                        type = 'choice',
                        name = filter.dataset.filter,
                        ucName = name.charAt(0).toUpperCase()+name.slice(1),
                        list = document.createElement('ul'),
                        values = filters.dataset['filter'+ucName] || filters.querySelectorAll('[data-filter-'+name+']'),
                        labels = {},
                        defaults = null,
                        indexed = {},
                        processed = {};
                    if (typeof values === 'string') {
                        type = 'level';
                        labels = values.split(',');
                        values = values.toLowerCase().split(',');
                        defaults = values.length - 1;
                    }
                    addClass(list, 'filter-list');
                    addClass(list, 'filter-list-'+type);
                    values.forEach(function (value, i) {
                        if (value instanceof HTMLElement) {
                            value = value.dataset['filter'+ucName];
                        }
                        if (value in processed) {
                            return;
                        }
                        var option = document.createElement('li'),
                            label = i in labels ? labels[i] : value,
                            active = false,
                            matches;
                        if ('' === label) {
                            option.innerHTML = '<em>(none)</em>';
                        } else {
                            option.innerText = label;
                        }
                        option.dataset.filter = value;
                        option.setAttribute('title', 1 === (matches = filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').length) ? 'Matches 1 row' : 'Matches '+matches+' rows');
                        indexed[value] = i;
                        list.appendChild(option);
                        addEventListener(option, 'click', function () {
                            if ('choice' === type) {
                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {
                                    if (option.dataset.filter === row.dataset['filter'+ucName]) {
                                        toggleClass(row, 'filter-hidden-'+name);
                                    }
                                });
                                toggleClass(option, 'active');
                            } else if ('level' === type) {
                                if (i === this.parentNode.querySelectorAll('.active').length - 1) {
                                    return;
                                }
                                this.parentNode.querySelectorAll('li').forEach(function (currentOption, j) {
                                    if (j <= i) {
                                        addClass(currentOption, 'active');
                                        if (i === j) {
                                            addClass(currentOption, 'last-active');
                                        } else {
                                            removeClass(currentOption, 'last-active');
                                        }
                                    } else {
                                        removeClass(currentOption, 'active');
                                        removeClass(currentOption, 'last-active');
                                    }
                                });
                                filters.querySelectorAll('[data-filter-'+name+']').forEach(function (row) {
                                    if (i < indexed[row.dataset['filter'+ucName]]) {
                                        addClass(row, 'filter-hidden-'+name);
                                    } else {
                                        removeClass(row, 'filter-hidden-'+name);
                                    }
                                });
                            }
                        });
                        if ('choice' === type) {
                            active = null === defaults || 0 <= defaults.indexOf(value);
                        } else if ('level' === type) {
                            active = i <= defaults;
                            if (active && i === defaults) {
                                addClass(option, 'last-active');
                            }
                        }
                        if (active) {
                            addClass(option, 'active');
                        } else {
                            filters.querySelectorAll('[data-filter-'+name+'=\"'+value+'\"]').forEach(function (row) {
                                toggleClass(row, 'filter-hidden-'+name);
                            });
                        }
                        processed[value] = true;
                    });

                    if (1 < list.childNodes.length) {
                        filter.appendChild(list);
                        filter.dataset.filtered = '';
                    }
                });
            }
        };
    })();

    Sfjs.addEventListener(document, 'DOMContentLoaded', function() {
        Sfjs.createTabs();
        Sfjs.createToggles();
    });
}
/*]]>*/</script>
", "@WebProfiler/Profiler/base_js.html.twig", "/home/u1573007/public_html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/base_js.html.twig");
    }
}

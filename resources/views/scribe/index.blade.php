<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.39.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.39.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">Register a new user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">Log in a user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-profile">
                                <a href="#endpoints-GETapi-profile">Retrieve authenticated user's profile.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-user--id-">
                                <a href="#endpoints-GETapi-user--id-">Retrieve user details by ID.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-logout">
                                <a href="#endpoints-GETapi-logout">Log out the authenticated user.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-change-password">
                                <a href="#endpoints-POSTapi-change-password">Change the authenticated user's password.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin">
                                <a href="#endpoints-GETapi-admin">Access a protected admin area.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-suggest-add">
                                <a href="#endpoints-POSTapi-suggest-add">POST api/suggest/add</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-suggest">
                                <a href="#endpoints-GETapi-suggest">GET api/suggest</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-suggest--id--reviewed">
                                <a href="#endpoints-PUTapi-suggest--id--reviewed">PUT api/suggest/{id}/reviewed</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-suggest--id-">
                                <a href="#endpoints-DELETEapi-suggest--id-">DELETE api/suggest/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-kebab-showAll">
                                <a href="#endpoints-GETapi-kebab-showAll">GET api/kebab/showAll</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-kebab-show--id-">
                                <a href="#endpoints-GETapi-kebab-show--id-">GET api/kebab/show/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-kebab-add">
                                <a href="#endpoints-POSTapi-kebab-add">POST api/kebab/add</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-kebab-update--id-">
                                <a href="#endpoints-PUTapi-kebab-update--id-">PUT api/kebab/update/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-kebab-delete--id-">
                                <a href="#endpoints-DELETEapi-kebab-delete--id-">DELETE api/kebab/delete/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-kebab-details--id-">
                                <a href="#endpoints-GETapi-kebab-details--id-">GET api/kebab/details/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-kebab-filter">
                                <a href="#endpoints-GETapi-kebab-filter">GET api/kebab/filter</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-documentation">
                                <a href="#endpoints-GETapi-documentation">Invoke the controller method.</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: January 16, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-register">Register a new user.</h2>

<p>
</p>

<p>This endpoint allows a user to create an account by providing their name, email, and password.
A unique email address is required for registration. Upon successful registration, the user
will receive an authentication token for further API interactions.</p>

<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"John Doe\",
    \"email\": \"john.doe@example.com\",
    \"password\": \"password123\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "John Doe",
    "email": "john.doe@example.com",
    "password": "password123"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;User created successfully&quot;,
    &quot;token&quot;: &quot;some-jwt-token&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;validation error&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email has already been taken.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Internal server error message&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="John Doe"
               data-component="body">
    <br>
<p>The name of the user. Example: <code>John Doe</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="john.doe@example.com"
               data-component="body">
    <br>
<p>A unique email address for the user. Example: <code>john.doe@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="password123"
               data-component="body">
    <br>
<p>The password for the account. Example: <code>password123</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">Log in a user.</h2>

<p>
</p>

<p>This endpoint allows a user to authenticate by providing their email and password.
If the credentials are valid, an authentication token will be returned for further API interactions.</p>

<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"john.doe@example.com\",
    \"password\": \"password123\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "john.doe@example.com",
    "password": "password123"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Successfully logged in&quot;,
    &quot;token&quot;: &quot;some-jwt-token&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Validation error&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;The email field is required.&quot;
        ],
        &quot;password&quot;: [
            &quot;The password field is required.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Something went really wrong!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Internal server error message&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="john.doe@example.com"
               data-component="body">
    <br>
<p>The email address of the user. Example: <code>john.doe@example.com</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="password123"
               data-component="body">
    <br>
<p>The password for the account. Example: <code>password123</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-profile">Retrieve authenticated user&#039;s profile.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint retrieves the profile information of the currently authenticated user.
The user must be logged in to access this endpoint.</p>

<span id="example-requests-GETapi-profile">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/profile" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/profile"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-profile">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Profile Info&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;John Doe&quot;,
        &quot;email&quot;: &quot;john.doe@example.com&quot;,
        &quot;created_at&quot;: &quot;2025-01-01T12:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-01-15T12:00:00.000000Z&quot;
    },
    &quot;id&quot;: 1
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Unauthorized.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-profile" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-profile"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profile"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profile">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-profile" data-method="GET"
      data-path="api/profile"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-profile', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-profile"
                    onclick="tryItOut('GETapi-profile');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-profile"
                    onclick="cancelTryOut('GETapi-profile');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-profile"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/profile</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-profile"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-user--id-">Retrieve user details by ID.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint retrieves the details of a user specified by their ID.
Only admins are authorized to use this endpoint.</p>

<span id="example-requests-GETapi-user--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user/5" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user/5"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;User details retrieved successfully&quot;,
    &quot;data&quot;: {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Jane Doe&quot;,
        &quot;email&quot;: &quot;jane.doe@example.com&quot;,
        &quot;role&quot;: 2,
        &quot;created_at&quot;: &quot;2025-01-01T12:00:00.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2025-01-15T12:00:00.000000Z&quot;
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Access denied. Admins only.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (404):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;User not found&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Internal server error message&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user--id-" data-method="GET"
      data-path="api/user/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user--id-"
                    onclick="tryItOut('GETapi-user--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user--id-"
                    onclick="cancelTryOut('GETapi-user--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-user--id-"
               value="5"
               data-component="url">
    <br>
<p>The ID of the user to retrieve. Example: <code>5</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-logout">Log out the authenticated user.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint logs out the currently authenticated user by revoking all their active tokens.
The user must be logged in to perform this action.</p>

<span id="example-requests-GETapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-logout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Successfully Logout&quot;,
    &quot;data&quot;: []
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Unauthorized.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-logout" data-method="GET"
      data-path="api/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-logout"
                    onclick="tryItOut('GETapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-logout"
                    onclick="cancelTryOut('GETapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-change-password">Change the authenticated user&#039;s password.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint allows the currently authenticated user to change their password.
The user must provide their current password for verification and a new password.</p>

<span id="example-requests-POSTapi-change-password">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/change-password" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"current_password\": \"oldpassword123\",
    \"new_password\": \"newpassword123\",
    \"new_password_confirmation\": \"newpassword123\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/change-password"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "oldpassword123",
    "new_password": "newpassword123",
    "new_password_confirmation": "newpassword123"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-change-password">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Password changed successfully.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Validation error&quot;,
    &quot;errors&quot;: {
        &quot;current_password&quot;: [
            &quot;The current password field is required.&quot;
        ],
        &quot;new_password&quot;: [
            &quot;The new password must be at least 6 characters.&quot;
        ]
    }
}</code>
 </pre>
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Current password is incorrect.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Internal server error message&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTapi-change-password" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-change-password"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change-password"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-change-password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change-password">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-change-password" data-method="POST"
      data-path="api/change-password"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-change-password', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-change-password"
                    onclick="tryItOut('POSTapi-change-password');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-change-password"
                    onclick="cancelTryOut('POSTapi-change-password');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-change-password"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/change-password</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-change-password"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>current_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="current_password"                data-endpoint="POSTapi-change-password"
               value="oldpassword123"
               data-component="body">
    <br>
<p>The user's current password. Example: <code>oldpassword123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="new_password"                data-endpoint="POSTapi-change-password"
               value="newpassword123"
               data-component="body">
    <br>
<p>The new password. Must be at least 6 characters long and confirmed. Example: <code>newpassword123</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>new_password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="new_password_confirmation"                data-endpoint="POSTapi-change-password"
               value="newpassword123"
               data-component="body">
    <br>
<p>Confirmation of the new password. Example: <code>newpassword123</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-admin">Access a protected admin area.</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>This endpoint checks if the authenticated user has admin privileges.
It is designed for testing and demonstration purposes, ensuring that
only users with the admin role can access this endpoint.</p>

<span id="example-requests-GETapi-admin">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: true,
    &quot;message&quot;: &quot;Welcome, Admin!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (403):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Access denied. Admins only.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: false,
    &quot;message&quot;: &quot;Internal server error message&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-admin" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin" data-method="GET"
      data-path="api/admin"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin"
                    onclick="tryItOut('GETapi-admin');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin"
                    onclick="cancelTryOut('GETapi-admin');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-suggest-add">POST api/suggest/add</h2>

<p>
</p>



<span id="example-requests-POSTapi-suggest-add">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/suggest/add" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"subject\": \"asnk\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suggest/add"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "subject": "asnk"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-suggest-add">
</span>
<span id="execution-results-POSTapi-suggest-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-suggest-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-suggest-add"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-suggest-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-suggest-add">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-suggest-add" data-method="POST"
      data-path="api/suggest/add"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-suggest-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-suggest-add"
                    onclick="tryItOut('POSTapi-suggest-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-suggest-add"
                    onclick="cancelTryOut('POSTapi-suggest-add');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-suggest-add"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/suggest/add</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-suggest-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-suggest-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>subject</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="subject"                data-endpoint="POSTapi-suggest-add"
               value="asnk"
               data-component="body">
    <br>
<p>Must not be greater than 1000 characters. Example: <code>asnk</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-suggest">GET api/suggest</h2>

<p>
</p>



<span id="example-requests-GETapi-suggest">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/suggest" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suggest"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-suggest">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-suggest" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-suggest"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-suggest"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-suggest" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-suggest">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-suggest" data-method="GET"
      data-path="api/suggest"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-suggest', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-suggest"
                    onclick="tryItOut('GETapi-suggest');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-suggest"
                    onclick="cancelTryOut('GETapi-suggest');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-suggest"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/suggest</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-suggest"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-suggest"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-PUTapi-suggest--id--reviewed">PUT api/suggest/{id}/reviewed</h2>

<p>
</p>



<span id="example-requests-PUTapi-suggest--id--reviewed">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/suggest/non/reviewed" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suggest/non/reviewed"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "PUT",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-suggest--id--reviewed">
</span>
<span id="execution-results-PUTapi-suggest--id--reviewed" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-suggest--id--reviewed"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-suggest--id--reviewed"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-suggest--id--reviewed" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-suggest--id--reviewed">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-suggest--id--reviewed" data-method="PUT"
      data-path="api/suggest/{id}/reviewed"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-suggest--id--reviewed', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-suggest--id--reviewed"
                    onclick="tryItOut('PUTapi-suggest--id--reviewed');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-suggest--id--reviewed"
                    onclick="cancelTryOut('PUTapi-suggest--id--reviewed');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-suggest--id--reviewed"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/suggest/{id}/reviewed</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-suggest--id--reviewed"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-suggest--id--reviewed"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-suggest--id--reviewed"
               value="non"
               data-component="url">
    <br>
<p>The ID of the suggest. Example: <code>non</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-suggest--id-">DELETE api/suggest/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-suggest--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/suggest/omnis" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/suggest/omnis"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-suggest--id-">
</span>
<span id="execution-results-DELETEapi-suggest--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-suggest--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-suggest--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-suggest--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-suggest--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-suggest--id-" data-method="DELETE"
      data-path="api/suggest/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-suggest--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-suggest--id-"
                    onclick="tryItOut('DELETEapi-suggest--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-suggest--id-"
                    onclick="cancelTryOut('DELETEapi-suggest--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-suggest--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/suggest/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-suggest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-suggest--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-suggest--id-"
               value="omnis"
               data-component="url">
    <br>
<p>The ID of the suggest. Example: <code>omnis</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-kebab-showAll">GET api/kebab/showAll</h2>

<p>
</p>



<span id="example-requests-GETapi-kebab-showAll">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/kebab/showAll" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kebab/showAll"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-kebab-showAll">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-kebab-showAll" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-kebab-showAll"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kebab-showAll"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-kebab-showAll" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kebab-showAll">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-kebab-showAll" data-method="GET"
      data-path="api/kebab/showAll"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-kebab-showAll', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-kebab-showAll"
                    onclick="tryItOut('GETapi-kebab-showAll');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-kebab-showAll"
                    onclick="cancelTryOut('GETapi-kebab-showAll');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-kebab-showAll"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/kebab/showAll</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-kebab-showAll"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-kebab-showAll"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-kebab-show--id-">GET api/kebab/show/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-kebab-show--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/kebab/show/eos" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kebab/show/eos"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-kebab-show--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-kebab-show--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-kebab-show--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kebab-show--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-kebab-show--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kebab-show--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-kebab-show--id-" data-method="GET"
      data-path="api/kebab/show/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-kebab-show--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-kebab-show--id-"
                    onclick="tryItOut('GETapi-kebab-show--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-kebab-show--id-"
                    onclick="cancelTryOut('GETapi-kebab-show--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-kebab-show--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/kebab/show/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-kebab-show--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-kebab-show--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-kebab-show--id-"
               value="eos"
               data-component="url">
    <br>
<p>The ID of the show. Example: <code>eos</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-kebab-add">POST api/kebab/add</h2>

<p>
</p>



<span id="example-requests-POSTapi-kebab-add">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/kebab/add" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"ywwofaeddjgihpmvr\",
    \"logo\": \"vel\",
    \"address\": \"excepturi\",
    \"latitude\": 1559.661385,
    \"longitude\": 3596346.18889519,
    \"year_opened\": 5,
    \"year_closed\": 4,
    \"opening_hours\": \"[\\\"sit\\\",\\\"dignissimos\\\"]\",
    \"meat_types\": \"[\\\"quas\\\",\\\"eius\\\"]\",
    \"sauces\": \"[\\\"molestias\\\",\\\"laudantium\\\"]\",
    \"status\": \"deleniti\",
    \"is_craft\": false,
    \"is_in_stall\": true,
    \"is_chain_member\": false,
    \"ordering_options\": \"[\\\"eius\\\",\\\"eum\\\"]\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kebab/add"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "ywwofaeddjgihpmvr",
    "logo": "vel",
    "address": "excepturi",
    "latitude": 1559.661385,
    "longitude": 3596346.18889519,
    "year_opened": 5,
    "year_closed": 4,
    "opening_hours": "[\"sit\",\"dignissimos\"]",
    "meat_types": "[\"quas\",\"eius\"]",
    "sauces": "[\"molestias\",\"laudantium\"]",
    "status": "deleniti",
    "is_craft": false,
    "is_in_stall": true,
    "is_chain_member": false,
    "ordering_options": "[\"eius\",\"eum\"]"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-kebab-add">
</span>
<span id="execution-results-POSTapi-kebab-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-kebab-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-kebab-add"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-kebab-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-kebab-add">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-kebab-add" data-method="POST"
      data-path="api/kebab/add"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-kebab-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-kebab-add"
                    onclick="tryItOut('POSTapi-kebab-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-kebab-add"
                    onclick="cancelTryOut('POSTapi-kebab-add');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-kebab-add"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/kebab/add</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-kebab-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-kebab-add"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-kebab-add"
               value="ywwofaeddjgihpmvr"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>ywwofaeddjgihpmvr</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="POSTapi-kebab-add"
               value="vel"
               data-component="body">
    <br>
<p>Example: <code>vel</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="POSTapi-kebab-add"
               value="excepturi"
               data-component="body">
    <br>
<p>Example: <code>excepturi</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="POSTapi-kebab-add"
               value="1559.661385"
               data-component="body">
    <br>
<p>Example: <code>1559.661385</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="POSTapi-kebab-add"
               value="3596346.1888952"
               data-component="body">
    <br>
<p>Example: <code>3596346.1888952</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year_opened</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year_opened"                data-endpoint="POSTapi-kebab-add"
               value="5"
               data-component="body">
    <br>
<p>Example: <code>5</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year_closed</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year_closed"                data-endpoint="POSTapi-kebab-add"
               value="4"
               data-component="body">
    <br>
<p>Example: <code>4</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>opening_hours</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="opening_hours"                data-endpoint="POSTapi-kebab-add"
               value="["sit","dignissimos"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["sit","dignissimos"]</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meat_types</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="meat_types"                data-endpoint="POSTapi-kebab-add"
               value="["quas","eius"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["quas","eius"]</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sauces</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="sauces"                data-endpoint="POSTapi-kebab-add"
               value="["molestias","laudantium"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["molestias","laudantium"]</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="POSTapi-kebab-add"
               value="deleniti"
               data-component="body">
    <br>
<p>Example: <code>deleniti</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_craft</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-kebab-add" style="display: none">
            <input type="radio" name="is_craft"
                   value="true"
                   data-endpoint="POSTapi-kebab-add"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-kebab-add" style="display: none">
            <input type="radio" name="is_craft"
                   value="false"
                   data-endpoint="POSTapi-kebab-add"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_in_stall</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-kebab-add" style="display: none">
            <input type="radio" name="is_in_stall"
                   value="true"
                   data-endpoint="POSTapi-kebab-add"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-kebab-add" style="display: none">
            <input type="radio" name="is_in_stall"
                   value="false"
                   data-endpoint="POSTapi-kebab-add"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_chain_member</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="POSTapi-kebab-add" style="display: none">
            <input type="radio" name="is_chain_member"
                   value="true"
                   data-endpoint="POSTapi-kebab-add"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-kebab-add" style="display: none">
            <input type="radio" name="is_chain_member"
                   value="false"
                   data-endpoint="POSTapi-kebab-add"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordering_options</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordering_options"                data-endpoint="POSTapi-kebab-add"
               value="["eius","eum"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["eius","eum"]</code></p>
        </div>
        </form>

                    <h2 id="endpoints-PUTapi-kebab-update--id-">PUT api/kebab/update/{id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-kebab-update--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/kebab/update/ut" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"kjzzvw\",
    \"logo\": \"consectetur\",
    \"address\": \"nobis\",
    \"latitude\": 291110156.7933736,
    \"longitude\": 9321638.1036,
    \"year_opened\": 17,
    \"year_closed\": 18,
    \"opening_hours\": \"[\\\"commodi\\\",\\\"deserunt\\\"]\",
    \"meat_types\": \"[\\\"tempora\\\",\\\"vel\\\"]\",
    \"sauces\": \"[\\\"hic\\\",\\\"eos\\\"]\",
    \"status\": \"illo\",
    \"is_craft\": false,
    \"is_in_stall\": true,
    \"is_chain_member\": true,
    \"ordering_options\": \"[\\\"voluptatem\\\",\\\"consectetur\\\"]\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kebab/update/ut"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "kjzzvw",
    "logo": "consectetur",
    "address": "nobis",
    "latitude": 291110156.7933736,
    "longitude": 9321638.1036,
    "year_opened": 17,
    "year_closed": 18,
    "opening_hours": "[\"commodi\",\"deserunt\"]",
    "meat_types": "[\"tempora\",\"vel\"]",
    "sauces": "[\"hic\",\"eos\"]",
    "status": "illo",
    "is_craft": false,
    "is_in_stall": true,
    "is_chain_member": true,
    "ordering_options": "[\"voluptatem\",\"consectetur\"]"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-kebab-update--id-">
</span>
<span id="execution-results-PUTapi-kebab-update--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-kebab-update--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-kebab-update--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-kebab-update--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-kebab-update--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-kebab-update--id-" data-method="PUT"
      data-path="api/kebab/update/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-kebab-update--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-kebab-update--id-"
                    onclick="tryItOut('PUTapi-kebab-update--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-kebab-update--id-"
                    onclick="cancelTryOut('PUTapi-kebab-update--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-kebab-update--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/kebab/update/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-kebab-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-kebab-update--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="PUTapi-kebab-update--id-"
               value="ut"
               data-component="url">
    <br>
<p>The ID of the update. Example: <code>ut</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-kebab-update--id-"
               value="kjzzvw"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>kjzzvw</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>logo</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="logo"                data-endpoint="PUTapi-kebab-update--id-"
               value="consectetur"
               data-component="body">
    <br>
<p>Example: <code>consectetur</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>address</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="address"                data-endpoint="PUTapi-kebab-update--id-"
               value="nobis"
               data-component="body">
    <br>
<p>Example: <code>nobis</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>latitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="latitude"                data-endpoint="PUTapi-kebab-update--id-"
               value="291110156.79337"
               data-component="body">
    <br>
<p>Example: <code>291110156.79337</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>longitude</code></b>&nbsp;&nbsp;
<small>number</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="longitude"                data-endpoint="PUTapi-kebab-update--id-"
               value="9321638.1036"
               data-component="body">
    <br>
<p>Example: <code>9321638.1036</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year_opened</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year_opened"                data-endpoint="PUTapi-kebab-update--id-"
               value="17"
               data-component="body">
    <br>
<p>Example: <code>17</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>year_closed</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="number" style="display: none"
               step="any"               name="year_closed"                data-endpoint="PUTapi-kebab-update--id-"
               value="18"
               data-component="body">
    <br>
<p>Example: <code>18</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>opening_hours</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="opening_hours"                data-endpoint="PUTapi-kebab-update--id-"
               value="["commodi","deserunt"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["commodi","deserunt"]</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>meat_types</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="meat_types"                data-endpoint="PUTapi-kebab-update--id-"
               value="["tempora","vel"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["tempora","vel"]</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>sauces</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="sauces"                data-endpoint="PUTapi-kebab-update--id-"
               value="["hic","eos"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["hic","eos"]</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>status</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="status"                data-endpoint="PUTapi-kebab-update--id-"
               value="illo"
               data-component="body">
    <br>
<p>Example: <code>illo</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_craft</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-kebab-update--id-" style="display: none">
            <input type="radio" name="is_craft"
                   value="true"
                   data-endpoint="PUTapi-kebab-update--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-kebab-update--id-" style="display: none">
            <input type="radio" name="is_craft"
                   value="false"
                   data-endpoint="PUTapi-kebab-update--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_in_stall</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-kebab-update--id-" style="display: none">
            <input type="radio" name="is_in_stall"
                   value="true"
                   data-endpoint="PUTapi-kebab-update--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-kebab-update--id-" style="display: none">
            <input type="radio" name="is_in_stall"
                   value="false"
                   data-endpoint="PUTapi-kebab-update--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_chain_member</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
                <label data-endpoint="PUTapi-kebab-update--id-" style="display: none">
            <input type="radio" name="is_chain_member"
                   value="true"
                   data-endpoint="PUTapi-kebab-update--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-kebab-update--id-" style="display: none">
            <input type="radio" name="is_chain_member"
                   value="false"
                   data-endpoint="PUTapi-kebab-update--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>ordering_options</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="ordering_options"                data-endpoint="PUTapi-kebab-update--id-"
               value="["voluptatem","consectetur"]"
               data-component="body">
    <br>
<p>Must be a valid JSON string. Example: <code>["voluptatem","consectetur"]</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-kebab-delete--id-">DELETE api/kebab/delete/{id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-kebab-delete--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/kebab/delete/at" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kebab/delete/at"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-kebab-delete--id-">
</span>
<span id="execution-results-DELETEapi-kebab-delete--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-kebab-delete--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-kebab-delete--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-kebab-delete--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-kebab-delete--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-kebab-delete--id-" data-method="DELETE"
      data-path="api/kebab/delete/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-kebab-delete--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-kebab-delete--id-"
                    onclick="tryItOut('DELETEapi-kebab-delete--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-kebab-delete--id-"
                    onclick="cancelTryOut('DELETEapi-kebab-delete--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-kebab-delete--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/kebab/delete/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-kebab-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-kebab-delete--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="DELETEapi-kebab-delete--id-"
               value="at"
               data-component="url">
    <br>
<p>The ID of the delete. Example: <code>at</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-kebab-details--id-">GET api/kebab/details/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-kebab-details--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/kebab/details/veniam" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kebab/details/veniam"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-kebab-details--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-kebab-details--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-kebab-details--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kebab-details--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-kebab-details--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kebab-details--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-kebab-details--id-" data-method="GET"
      data-path="api/kebab/details/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-kebab-details--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-kebab-details--id-"
                    onclick="tryItOut('GETapi-kebab-details--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-kebab-details--id-"
                    onclick="cancelTryOut('GETapi-kebab-details--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-kebab-details--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/kebab/details/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-kebab-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-kebab-details--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="id"                data-endpoint="GETapi-kebab-details--id-"
               value="veniam"
               data-component="url">
    <br>
<p>The ID of the detail. Example: <code>veniam</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-kebab-filter">GET api/kebab/filter</h2>

<p>
</p>



<span id="example-requests-GETapi-kebab-filter">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/kebab/filter" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/kebab/filter"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-kebab-filter">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-kebab-filter" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-kebab-filter"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-kebab-filter"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-kebab-filter" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-kebab-filter">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-kebab-filter" data-method="GET"
      data-path="api/kebab/filter"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-kebab-filter', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-kebab-filter"
                    onclick="tryItOut('GETapi-kebab-filter');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-kebab-filter"
                    onclick="cancelTryOut('GETapi-kebab-filter');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-kebab-filter"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/kebab/filter</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-kebab-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-kebab-filter"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-documentation">Invoke the controller method.</h2>

<p>
</p>



<span id="example-requests-GETapi-documentation">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/documentation" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/documentation"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-documentation">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IkpGQnh4SVFvTWxaYi85RFhBeW9JOUE9PSIsInZhbHVlIjoiTDZHWDZDMmVHZjFabTVzNUxyWmFOTzUrQVZmYTlMNDZ1bFNaNjNOcjdtQk0rVGhaRUxlVnJwUy9zU0dFaDdHeXphbVZEUkN1czN3SFFHOElUT2hnSmx1b1haWWdnbjBmMXFxb3RKdjhFWmQ3QWR3NWQvL1ZWRVhxNVE4cVg3ZlciLCJtYWMiOiIwMjkxYzIzNjkzMjIxMTgxZmNiYjg0NzQ1MTMzMDBlNTgzMjg1ZDg0OWU2ZTZiZjc3NDk1MzM4NTc1YWY4NTEzIiwidGFnIjoiIn0%3D; expires=Thu, 16 Jan 2025 12:14:12 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IkI3aUl6OXZheklpVW81QUxjWVFRU0E9PSIsInZhbHVlIjoiOEZjVGlTbXhyaVdzNlozOEYwbmt6UnE5V093alNEcTRJOUpYbG1NTFY4WWhlM0Rxb2xKa1dlYmFoaitSNXUvQXZ3VmVVVFcydEord3cxM0lJY20xT0pFeU1HR1NoQWxkWVpNREdFSlNrM2JEaUdRd0J1U2wwam1ZcDk4c0VhZE8iLCJtYWMiOiIxN2RjY2ZiMzQ0ZmIwNjE3NDViYTY0NTI4ZGY2MDQzNzY2ZThhN2I4NmVlODBkOTVjNWZhYTllNzhlNTU4NGM4IiwidGFnIjoiIn0%3D; expires=Thu, 16 Jan 2025 12:14:12 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
&lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta content=&quot;IE=edge,chrome=1&quot; http-equiv=&quot;X-UA-Compatible&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, maximum-scale=1&quot;&gt;
    &lt;title&gt;Laravel Documentation&lt;/title&gt;

    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Open+Sans&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;

    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/vendor/scribe/css/theme-default.style.css&quot; media=&quot;screen&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;http://localhost/vendor/scribe/css/theme-default.print.css&quot; media=&quot;print&quot;&gt;

    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js&quot;&gt;&lt;/script&gt;

    &lt;link rel=&quot;stylesheet&quot;
          href=&quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css&quot;&gt;
    &lt;script src=&quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js&quot;&gt;&lt;/script&gt;

    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js&quot;&gt;&lt;/script&gt;

    &lt;style id=&quot;language-style&quot;&gt;
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            &lt;/style&gt;

    &lt;script&gt;
        var tryItOutBaseUrl = &quot;http://localhost&quot;;
        var useCsrf = Boolean();
        var csrfUrl = &quot;/sanctum/csrf-cookie&quot;;
    &lt;/script&gt;
    &lt;script src=&quot;http://localhost/vendor/scribe/js/tryitout-4.39.0.js&quot;&gt;&lt;/script&gt;

    &lt;script src=&quot;http://localhost/vendor/scribe/js/theme-default-4.39.0.js&quot;&gt;&lt;/script&gt;

&lt;/head&gt;

&lt;body data-languages=&quot;[&amp;quot;bash&amp;quot;,&amp;quot;javascript&amp;quot;]&quot;&gt;

&lt;a href=&quot;#&quot; id=&quot;nav-button&quot;&gt;
    &lt;span&gt;
        MENU
        &lt;img src=&quot;http://localhost/vendor/scribe/images/navbar.png&quot; alt=&quot;navbar-image&quot;/&gt;
    &lt;/span&gt;
&lt;/a&gt;
&lt;div class=&quot;tocify-wrapper&quot;&gt;
    
            &lt;div class=&quot;lang-selector&quot;&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;bash&quot;&gt;bash&lt;/button&gt;
                                            &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;javascript&quot;&gt;javascript&lt;/button&gt;
                    &lt;/div&gt;
    
    &lt;div class=&quot;search&quot;&gt;
        &lt;input type=&quot;text&quot; class=&quot;search&quot; id=&quot;input-search&quot; placeholder=&quot;Search&quot;&gt;
    &lt;/div&gt;

    &lt;div id=&quot;toc&quot;&gt;
                    &lt;ul id=&quot;tocify-header-introduction&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;introduction&quot;&gt;
                    &lt;a href=&quot;#introduction&quot;&gt;Introduction&lt;/a&gt;
                &lt;/li&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-authenticating-requests&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;authenticating-requests&quot;&gt;
                    &lt;a href=&quot;#authenticating-requests&quot;&gt;Authenticating requests&lt;/a&gt;
                &lt;/li&gt;
                            &lt;/ul&gt;
                    &lt;ul id=&quot;tocify-header-endpoints&quot; class=&quot;tocify-header&quot;&gt;
                &lt;li class=&quot;tocify-item level-1&quot; data-unique=&quot;endpoints&quot;&gt;
                    &lt;a href=&quot;#endpoints&quot;&gt;Endpoints&lt;/a&gt;
                &lt;/li&gt;
                                    &lt;ul id=&quot;tocify-subheader-endpoints&quot; class=&quot;tocify-subheader&quot;&gt;
                                                    &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-register&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-register&quot;&gt;Register a new user.&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-login&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-login&quot;&gt;POST api/login&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-profile&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-profile&quot;&gt;GET api/profile&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-user--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-user--id-&quot;&gt;GET api/user/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-logout&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-logout&quot;&gt;GET api/logout&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-change-password&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-change-password&quot;&gt;POST api/change-password&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-admin&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-admin&quot;&gt;GET api/admin&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-suggest-add&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-suggest-add&quot;&gt;POST api/suggest/add&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-suggest&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-suggest&quot;&gt;GET api/suggest&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PUTapi-suggest--id--reviewed&quot;&gt;
                                &lt;a href=&quot;#endpoints-PUTapi-suggest--id--reviewed&quot;&gt;PUT api/suggest/{id}/reviewed&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-DELETEapi-suggest--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-DELETEapi-suggest--id-&quot;&gt;DELETE api/suggest/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-kebab-showAll&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-kebab-showAll&quot;&gt;GET api/kebab/showAll&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-kebab-show--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-kebab-show--id-&quot;&gt;GET api/kebab/show/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-POSTapi-kebab-add&quot;&gt;
                                &lt;a href=&quot;#endpoints-POSTapi-kebab-add&quot;&gt;POST api/kebab/add&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-PUTapi-kebab-update--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-PUTapi-kebab-update--id-&quot;&gt;PUT api/kebab/update/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-DELETEapi-kebab-delete--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-DELETEapi-kebab-delete--id-&quot;&gt;DELETE api/kebab/delete/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-kebab-details--id-&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-kebab-details--id-&quot;&gt;GET api/kebab/details/{id}&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-kebab-filter&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-kebab-filter&quot;&gt;GET api/kebab/filter&lt;/a&gt;
                            &lt;/li&gt;
                                                                                &lt;li class=&quot;tocify-item level-2&quot; data-unique=&quot;endpoints-GETapi-documentation&quot;&gt;
                                &lt;a href=&quot;#endpoints-GETapi-documentation&quot;&gt;Invoke the controller method.&lt;/a&gt;
                            &lt;/li&gt;
                                                                        &lt;/ul&gt;
                            &lt;/ul&gt;
            &lt;/div&gt;

    &lt;ul class=&quot;toc-footer&quot; id=&quot;toc-footer&quot;&gt;
                    &lt;li style=&quot;padding-bottom: 5px;&quot;&gt;&lt;a href=&quot;http://localhost/docs.postman&quot;&gt;View Postman collection&lt;/a&gt;&lt;/li&gt;
                            &lt;li style=&quot;padding-bottom: 5px;&quot;&gt;&lt;a href=&quot;http://localhost/docs.openapi&quot;&gt;View OpenAPI spec&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=&quot;http://github.com/knuckleswtf/scribe&quot;&gt;Documentation powered by Scribe ✍&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;

    &lt;ul class=&quot;toc-footer&quot; id=&quot;last-updated&quot;&gt;
        &lt;li&gt;Last updated: January 16, 2025&lt;/li&gt;
    &lt;/ul&gt;
&lt;/div&gt;

&lt;div class=&quot;page-wrapper&quot;&gt;
    &lt;div class=&quot;dark-box&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;content&quot;&gt;
        &lt;h1 id=&quot;introduction&quot;&gt;Introduction&lt;/h1&gt;
&lt;aside&gt;
    &lt;strong&gt;Base URL&lt;/strong&gt;: &lt;code&gt;http://localhost&lt;/code&gt;
&lt;/aside&gt;
&lt;p&gt;This documentation aims to provide all the information you need to work with our API.&lt;/p&gt;
&lt;aside&gt;As you scroll, you&#039;ll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;

        &lt;h1 id=&quot;authenticating-requests&quot;&gt;Authenticating requests&lt;/h1&gt;
&lt;p&gt;This API is not authenticated.&lt;/p&gt;

        &lt;h1 id=&quot;endpoints&quot;&gt;Endpoints&lt;/h1&gt;

    

                                &lt;h2 id=&quot;endpoints-POSTapi-register&quot;&gt;Register a new user.&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;

&lt;p&gt;This endpoint allows a user to create an account by providing their name, email, and password.
A unique email address is required for registration. Upon successful registration, the user
will receive an authentication token for further API interactions.&lt;/p&gt;

&lt;span id=&quot;example-requests-POSTapi-register&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://localhost/api/register&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;name\&quot;: \&quot;John Doe\&quot;,
    \&quot;email\&quot;: \&quot;john.doe@example.com\&quot;,
    \&quot;password\&quot;: \&quot;password123\&quot;
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/register&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;name&quot;: &quot;John Doe&quot;,
    &quot;email&quot;: &quot;john.doe@example.com&quot;,
    &quot;password&quot;: &quot;password123&quot;
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-register&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;status&amp;quot;: true,
    &amp;quot;message&amp;quot;: &amp;quot;User created successfully&amp;quot;,
    &amp;quot;token&amp;quot;: &amp;quot;some-jwt-token&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;status&amp;quot;: false,
    &amp;quot;message&amp;quot;: &amp;quot;validation error&amp;quot;,
    &amp;quot;errors&amp;quot;: {
        &amp;quot;email&amp;quot;: [
            &amp;quot;The email has already been taken.&amp;quot;
        ],
        &amp;quot;password&amp;quot;: [
            &amp;quot;The password field is required.&amp;quot;
        ]
    }
}&lt;/code&gt;
 &lt;/pre&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (500):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;status&amp;quot;: false,
    &amp;quot;message&amp;quot;: &amp;quot;Internal server error message&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-register&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-register&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-register&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-register&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-register&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-register&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/register&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-register&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-register&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-register&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-register&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-register&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-register&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/register&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;name&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;name&quot;                data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;John Doe&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The name of the user. Example: &lt;code&gt;John Doe&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;email&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;email&quot;                data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;john.doe@example.com&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;A unique email address for the user. Example: &lt;code&gt;john.doe@example.com&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;password&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;password&quot;                data-endpoint=&quot;POSTapi-register&quot;
               value=&quot;password123&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The password for the account. Example: &lt;code&gt;password123&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-login&quot;&gt;POST api/login&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-login&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://localhost/api/login&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/login&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-login&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-login&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-login&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-login&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-login&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-login&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-login&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/login&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-login&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-login&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-login&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-login&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-login&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-login&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/login&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-login&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-login&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-profile&quot;&gt;GET api/profile&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-profile&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/profile&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/profile&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-profile&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-profile&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-profile&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-profile&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-profile&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-profile&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-profile&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/profile&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-profile&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-profile&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-profile&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-profile&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-profile&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-profile&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/profile&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-profile&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-profile&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-user--id-&quot;&gt;GET api/user/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-user--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/user/nisi&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/user/nisi&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-user--id-&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-user--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-user--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-user--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-user--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-user--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-user--id-&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/user/{id}&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-user--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-user--id-&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-user--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-user--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-user--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-user--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/user/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-user--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-user--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;id&quot;                data-endpoint=&quot;GETapi-user--id-&quot;
               value=&quot;nisi&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the user. Example: &lt;code&gt;nisi&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-logout&quot;&gt;GET api/logout&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-logout&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/logout&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/logout&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-logout&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-logout&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-logout&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-logout&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-logout&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-logout&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-logout&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/logout&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-logout&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-logout&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-logout&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-logout&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-logout&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-logout&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/logout&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-logout&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-logout&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-change-password&quot;&gt;POST api/change-password&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-change-password&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://localhost/api/change-password&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/change-password&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-change-password&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-change-password&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-change-password&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-change-password&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-change-password&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-change-password&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-change-password&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/change-password&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-change-password&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-change-password&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-change-password&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-change-password&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-change-password&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-change-password&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/change-password&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-change-password&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-change-password&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-admin&quot;&gt;GET api/admin&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-admin&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/admin&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/admin&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-admin&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-admin&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-admin&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-admin&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-admin&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-admin&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-admin&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/admin&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-admin&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-admin&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-admin&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-admin&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-admin&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-admin&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/admin&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-admin&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-admin&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-suggest-add&quot;&gt;POST api/suggest/add&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-suggest-add&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://localhost/api/suggest/add&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;subject\&quot;: \&quot;lgufdmfpc\&quot;
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/suggest/add&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;subject&quot;: &quot;lgufdmfpc&quot;
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-suggest-add&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-suggest-add&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-suggest-add&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-suggest-add&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-suggest-add&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-suggest-add&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-suggest-add&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/suggest/add&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-suggest-add&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-suggest-add&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-suggest-add&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-suggest-add&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-suggest-add&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-suggest-add&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/suggest/add&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-suggest-add&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-suggest-add&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;subject&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;subject&quot;                data-endpoint=&quot;POSTapi-suggest-add&quot;
               value=&quot;lgufdmfpc&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must not be greater than 1000 characters. Example: &lt;code&gt;lgufdmfpc&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-suggest&quot;&gt;GET api/suggest&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-suggest&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/suggest&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/suggest&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-suggest&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-suggest&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-suggest&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-suggest&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-suggest&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-suggest&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-suggest&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/suggest&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-suggest&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-suggest&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-suggest&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-suggest&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-suggest&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-suggest&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/suggest&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-suggest&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-suggest&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PUTapi-suggest--id--reviewed&quot;&gt;PUT api/suggest/{id}/reviewed&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PUTapi-suggest--id--reviewed&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PUT \
    &quot;http://localhost/api/suggest/animi/reviewed&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/suggest/animi/reviewed&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;PUT&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PUTapi-suggest--id--reviewed&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PUTapi-suggest--id--reviewed&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PUTapi-suggest--id--reviewed&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PUTapi-suggest--id--reviewed&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PUTapi-suggest--id--reviewed&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PUTapi-suggest--id--reviewed&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PUTapi-suggest--id--reviewed&quot; data-method=&quot;PUT&quot;
      data-path=&quot;api/suggest/{id}/reviewed&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PUTapi-suggest--id--reviewed&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PUTapi-suggest--id--reviewed&quot;
                    onclick=&quot;tryItOut(&#039;PUTapi-suggest--id--reviewed&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PUTapi-suggest--id--reviewed&quot;
                    onclick=&quot;cancelTryOut(&#039;PUTapi-suggest--id--reviewed&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PUTapi-suggest--id--reviewed&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-darkblue&quot;&gt;PUT&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/suggest/{id}/reviewed&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PUTapi-suggest--id--reviewed&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PUTapi-suggest--id--reviewed&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;id&quot;                data-endpoint=&quot;PUTapi-suggest--id--reviewed&quot;
               value=&quot;animi&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the suggest. Example: &lt;code&gt;animi&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-DELETEapi-suggest--id-&quot;&gt;DELETE api/suggest/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-DELETEapi-suggest--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request DELETE \
    &quot;http://localhost/api/suggest/nulla&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/suggest/nulla&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;DELETE&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-DELETEapi-suggest--id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-DELETEapi-suggest--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-DELETEapi-suggest--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-DELETEapi-suggest--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-DELETEapi-suggest--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-DELETEapi-suggest--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-DELETEapi-suggest--id-&quot; data-method=&quot;DELETE&quot;
      data-path=&quot;api/suggest/{id}&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;DELETEapi-suggest--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-DELETEapi-suggest--id-&quot;
                    onclick=&quot;tryItOut(&#039;DELETEapi-suggest--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-DELETEapi-suggest--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;DELETEapi-suggest--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-DELETEapi-suggest--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-red&quot;&gt;DELETE&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/suggest/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;DELETEapi-suggest--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;DELETEapi-suggest--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;id&quot;                data-endpoint=&quot;DELETEapi-suggest--id-&quot;
               value=&quot;nulla&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the suggest. Example: &lt;code&gt;nulla&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-kebab-showAll&quot;&gt;GET api/kebab/showAll&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-kebab-showAll&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/kebab/showAll&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/kebab/showAll&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-kebab-showAll&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-kebab-showAll&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-kebab-showAll&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-kebab-showAll&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-kebab-showAll&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-kebab-showAll&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-kebab-showAll&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/kebab/showAll&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-kebab-showAll&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-kebab-showAll&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-kebab-showAll&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-kebab-showAll&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-kebab-showAll&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-kebab-showAll&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/kebab/showAll&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-kebab-showAll&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-kebab-showAll&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-kebab-show--id-&quot;&gt;GET api/kebab/show/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-kebab-show--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/kebab/show/rerum&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/kebab/show/rerum&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-kebab-show--id-&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-kebab-show--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-kebab-show--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-kebab-show--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-kebab-show--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-kebab-show--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-kebab-show--id-&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/kebab/show/{id}&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-kebab-show--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-kebab-show--id-&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-kebab-show--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-kebab-show--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-kebab-show--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-kebab-show--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/kebab/show/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-kebab-show--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-kebab-show--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;id&quot;                data-endpoint=&quot;GETapi-kebab-show--id-&quot;
               value=&quot;rerum&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the show. Example: &lt;code&gt;rerum&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-POSTapi-kebab-add&quot;&gt;POST api/kebab/add&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-POSTapi-kebab-add&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request POST \
    &quot;http://localhost/api/kebab/add&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;name\&quot;: \&quot;wobtko\&quot;,
    \&quot;logo\&quot;: \&quot;sequi\&quot;,
    \&quot;address\&quot;: \&quot;eveniet\&quot;,
    \&quot;latitude\&quot;: 68547518.526,
    \&quot;longitude\&quot;: 3401.936538822,
    \&quot;year_opened\&quot;: 2,
    \&quot;year_closed\&quot;: 14,
    \&quot;opening_hours\&quot;: \&quot;[\\\&quot;corporis\\\&quot;,\\\&quot;quaerat\\\&quot;]\&quot;,
    \&quot;meat_types\&quot;: \&quot;[\\\&quot;vero\\\&quot;,\\\&quot;placeat\\\&quot;]\&quot;,
    \&quot;sauces\&quot;: \&quot;[\\\&quot;fuga\\\&quot;,\\\&quot;libero\\\&quot;]\&quot;,
    \&quot;status\&quot;: \&quot;autem\&quot;,
    \&quot;is_craft\&quot;: true,
    \&quot;is_in_stall\&quot;: false,
    \&quot;is_chain_member\&quot;: false,
    \&quot;ordering_options\&quot;: \&quot;[\\\&quot;qui\\\&quot;,\\\&quot;sed\\\&quot;]\&quot;
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/kebab/add&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;name&quot;: &quot;wobtko&quot;,
    &quot;logo&quot;: &quot;sequi&quot;,
    &quot;address&quot;: &quot;eveniet&quot;,
    &quot;latitude&quot;: 68547518.526,
    &quot;longitude&quot;: 3401.936538822,
    &quot;year_opened&quot;: 2,
    &quot;year_closed&quot;: 14,
    &quot;opening_hours&quot;: &quot;[\&quot;corporis\&quot;,\&quot;quaerat\&quot;]&quot;,
    &quot;meat_types&quot;: &quot;[\&quot;vero\&quot;,\&quot;placeat\&quot;]&quot;,
    &quot;sauces&quot;: &quot;[\&quot;fuga\&quot;,\&quot;libero\&quot;]&quot;,
    &quot;status&quot;: &quot;autem&quot;,
    &quot;is_craft&quot;: true,
    &quot;is_in_stall&quot;: false,
    &quot;is_chain_member&quot;: false,
    &quot;ordering_options&quot;: &quot;[\&quot;qui\&quot;,\&quot;sed\&quot;]&quot;
};

fetch(url, {
    method: &quot;POST&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-POSTapi-kebab-add&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-POSTapi-kebab-add&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-POSTapi-kebab-add&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-POSTapi-kebab-add&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-POSTapi-kebab-add&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-POSTapi-kebab-add&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-POSTapi-kebab-add&quot; data-method=&quot;POST&quot;
      data-path=&quot;api/kebab/add&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;POSTapi-kebab-add&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-POSTapi-kebab-add&quot;
                    onclick=&quot;tryItOut(&#039;POSTapi-kebab-add&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-POSTapi-kebab-add&quot;
                    onclick=&quot;cancelTryOut(&#039;POSTapi-kebab-add&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-POSTapi-kebab-add&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-black&quot;&gt;POST&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/kebab/add&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;name&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;name&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;wobtko&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must not be greater than 255 characters. Example: &lt;code&gt;wobtko&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;logo&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;logo&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;sequi&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;sequi&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;address&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;address&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;eveniet&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;eveniet&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;latitude&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;number&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;latitude&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;68547518.526&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;68547518.526&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;longitude&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;number&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;longitude&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;3401.936538822&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;3401.936538822&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;year_opened&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;year_opened&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;2&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;2&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;year_closed&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;year_closed&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;14&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;14&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;opening_hours&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;opening_hours&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;[&quot;corporis&quot;,&quot;quaerat&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;corporis&quot;,&quot;quaerat&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;meat_types&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;meat_types&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;[&quot;vero&quot;,&quot;placeat&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;vero&quot;,&quot;placeat&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;sauces&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;sauces&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;[&quot;fuga&quot;,&quot;libero&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;fuga&quot;,&quot;libero&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;status&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;autem&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;autem&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;is_craft&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;label data-endpoint=&quot;POSTapi-kebab-add&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_craft&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;POSTapi-kebab-add&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;POSTapi-kebab-add&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_craft&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;POSTapi-kebab-add&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;true&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;is_in_stall&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;label data-endpoint=&quot;POSTapi-kebab-add&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_in_stall&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;POSTapi-kebab-add&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;POSTapi-kebab-add&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_in_stall&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;POSTapi-kebab-add&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;false&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;is_chain_member&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;label data-endpoint=&quot;POSTapi-kebab-add&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_chain_member&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;POSTapi-kebab-add&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;POSTapi-kebab-add&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_chain_member&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;POSTapi-kebab-add&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;false&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;ordering_options&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;ordering_options&quot;                data-endpoint=&quot;POSTapi-kebab-add&quot;
               value=&quot;[&quot;qui&quot;,&quot;sed&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;qui&quot;,&quot;sed&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-PUTapi-kebab-update--id-&quot;&gt;PUT api/kebab/update/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-PUTapi-kebab-update--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request PUT \
    &quot;http://localhost/api/kebab/update/est&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot; \
    --data &quot;{
    \&quot;name\&quot;: \&quot;yzekfwqvznikhxagimgfgny\&quot;,
    \&quot;logo\&quot;: \&quot;inventore\&quot;,
    \&quot;address\&quot;: \&quot;rerum\&quot;,
    \&quot;latitude\&quot;: 2.47844936,
    \&quot;longitude\&quot;: 5211387.124516927,
    \&quot;year_opened\&quot;: 13,
    \&quot;year_closed\&quot;: 17,
    \&quot;opening_hours\&quot;: \&quot;[\\\&quot;aliquid\\\&quot;,\\\&quot;odio\\\&quot;]\&quot;,
    \&quot;meat_types\&quot;: \&quot;[\\\&quot;voluptatibus\\\&quot;,\\\&quot;qui\\\&quot;]\&quot;,
    \&quot;sauces\&quot;: \&quot;[\\\&quot;voluptatem\\\&quot;,\\\&quot;eum\\\&quot;]\&quot;,
    \&quot;status\&quot;: \&quot;necessitatibus\&quot;,
    \&quot;is_craft\&quot;: true,
    \&quot;is_in_stall\&quot;: true,
    \&quot;is_chain_member\&quot;: true,
    \&quot;ordering_options\&quot;: \&quot;[\\\&quot;quia\\\&quot;,\\\&quot;ducimus\\\&quot;]\&quot;
}&quot;
&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/kebab/update/est&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

let body = {
    &quot;name&quot;: &quot;yzekfwqvznikhxagimgfgny&quot;,
    &quot;logo&quot;: &quot;inventore&quot;,
    &quot;address&quot;: &quot;rerum&quot;,
    &quot;latitude&quot;: 2.47844936,
    &quot;longitude&quot;: 5211387.124516927,
    &quot;year_opened&quot;: 13,
    &quot;year_closed&quot;: 17,
    &quot;opening_hours&quot;: &quot;[\&quot;aliquid\&quot;,\&quot;odio\&quot;]&quot;,
    &quot;meat_types&quot;: &quot;[\&quot;voluptatibus\&quot;,\&quot;qui\&quot;]&quot;,
    &quot;sauces&quot;: &quot;[\&quot;voluptatem\&quot;,\&quot;eum\&quot;]&quot;,
    &quot;status&quot;: &quot;necessitatibus&quot;,
    &quot;is_craft&quot;: true,
    &quot;is_in_stall&quot;: true,
    &quot;is_chain_member&quot;: true,
    &quot;ordering_options&quot;: &quot;[\&quot;quia\&quot;,\&quot;ducimus\&quot;]&quot;
};

fetch(url, {
    method: &quot;PUT&quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-PUTapi-kebab-update--id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-PUTapi-kebab-update--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-PUTapi-kebab-update--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-PUTapi-kebab-update--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-PUTapi-kebab-update--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-PUTapi-kebab-update--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-PUTapi-kebab-update--id-&quot; data-method=&quot;PUT&quot;
      data-path=&quot;api/kebab/update/{id}&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;PUTapi-kebab-update--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-PUTapi-kebab-update--id-&quot;
                    onclick=&quot;tryItOut(&#039;PUTapi-kebab-update--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-PUTapi-kebab-update--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;PUTapi-kebab-update--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-PUTapi-kebab-update--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-darkblue&quot;&gt;PUT&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/kebab/update/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;id&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;est&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the update. Example: &lt;code&gt;est&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                            &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Body Parameters&lt;/b&gt;&lt;/h4&gt;
        &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;name&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;name&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;yzekfwqvznikhxagimgfgny&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must not be greater than 255 characters. Example: &lt;code&gt;yzekfwqvznikhxagimgfgny&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;logo&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;logo&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;inventore&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;inventore&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;address&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;address&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;rerum&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;rerum&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;latitude&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;number&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;latitude&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;2.47844936&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;2.47844936&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;longitude&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;number&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;longitude&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;5211387.1245169&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;5211387.1245169&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;year_opened&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;year_opened&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;13&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;13&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;year_closed&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;integer&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;number&quot; style=&quot;display: none&quot;
               step=&quot;any&quot;               name=&quot;year_closed&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;17&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;17&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;opening_hours&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;opening_hours&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;[&quot;aliquid&quot;,&quot;odio&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;aliquid&quot;,&quot;odio&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;meat_types&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;meat_types&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;[&quot;voluptatibus&quot;,&quot;qui&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;voluptatibus&quot;,&quot;qui&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;sauces&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;sauces&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;[&quot;voluptatem&quot;,&quot;eum&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;voluptatem&quot;,&quot;eum&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;status&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;status&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;necessitatibus&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;necessitatibus&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;is_craft&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;label data-endpoint=&quot;PUTapi-kebab-update--id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_craft&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;PUTapi-kebab-update--id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_craft&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;true&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;is_in_stall&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;label data-endpoint=&quot;PUTapi-kebab-update--id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_in_stall&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;PUTapi-kebab-update--id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_in_stall&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;true&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;is_chain_member&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;boolean&lt;/small&gt;&amp;nbsp;
&lt;i&gt;optional&lt;/i&gt; &amp;nbsp;
                &lt;label data-endpoint=&quot;PUTapi-kebab-update--id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_chain_member&quot;
                   value=&quot;true&quot;
                   data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;true&lt;/code&gt;
        &lt;/label&gt;
        &lt;label data-endpoint=&quot;PUTapi-kebab-update--id-&quot; style=&quot;display: none&quot;&gt;
            &lt;input type=&quot;radio&quot; name=&quot;is_chain_member&quot;
                   value=&quot;false&quot;
                   data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
                   data-component=&quot;body&quot;             &gt;
            &lt;code&gt;false&lt;/code&gt;
        &lt;/label&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;true&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
                &lt;div style=&quot; padding-left: 28px;  clear: unset;&quot;&gt;
            &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;ordering_options&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;ordering_options&quot;                data-endpoint=&quot;PUTapi-kebab-update--id-&quot;
               value=&quot;[&quot;quia&quot;,&quot;ducimus&quot;]&quot;
               data-component=&quot;body&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Must be a valid JSON string. Example: &lt;code&gt;[&quot;quia&quot;,&quot;ducimus&quot;]&lt;/code&gt;&lt;/p&gt;
        &lt;/div&gt;
        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-DELETEapi-kebab-delete--id-&quot;&gt;DELETE api/kebab/delete/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-DELETEapi-kebab-delete--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request DELETE \
    &quot;http://localhost/api/kebab/delete/est&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/kebab/delete/est&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;DELETE&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-DELETEapi-kebab-delete--id-&quot;&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-results-DELETEapi-kebab-delete--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-DELETEapi-kebab-delete--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-DELETEapi-kebab-delete--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-DELETEapi-kebab-delete--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-DELETEapi-kebab-delete--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-DELETEapi-kebab-delete--id-&quot; data-method=&quot;DELETE&quot;
      data-path=&quot;api/kebab/delete/{id}&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;DELETEapi-kebab-delete--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-DELETEapi-kebab-delete--id-&quot;
                    onclick=&quot;tryItOut(&#039;DELETEapi-kebab-delete--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-DELETEapi-kebab-delete--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;DELETEapi-kebab-delete--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-DELETEapi-kebab-delete--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-red&quot;&gt;DELETE&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/kebab/delete/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;DELETEapi-kebab-delete--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;DELETEapi-kebab-delete--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;id&quot;                data-endpoint=&quot;DELETEapi-kebab-delete--id-&quot;
               value=&quot;est&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the delete. Example: &lt;code&gt;est&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-kebab-details--id-&quot;&gt;GET api/kebab/details/{id}&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-kebab-details--id-&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/kebab/details/dolorem&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/kebab/details/dolorem&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-kebab-details--id-&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-kebab-details--id-&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-kebab-details--id-&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-kebab-details--id-&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-kebab-details--id-&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-kebab-details--id-&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-kebab-details--id-&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/kebab/details/{id}&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-kebab-details--id-&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-kebab-details--id-&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-kebab-details--id-&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-kebab-details--id-&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-kebab-details--id-&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-kebab-details--id-&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/kebab/details/{id}&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-kebab-details--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-kebab-details--id-&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;URL Parameters&lt;/b&gt;&lt;/h4&gt;
                    &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;id&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&lt;small&gt;string&lt;/small&gt;&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;id&quot;                data-endpoint=&quot;GETapi-kebab-details--id-&quot;
               value=&quot;dolorem&quot;
               data-component=&quot;url&quot;&gt;
    &lt;br&gt;
&lt;p&gt;The ID of the detail. Example: &lt;code&gt;dolorem&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                    &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-kebab-filter&quot;&gt;GET api/kebab/filter&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-kebab-filter&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/kebab/filter&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/kebab/filter&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-kebab-filter&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (401):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;{
    &amp;quot;message&amp;quot;: &amp;quot;Unauthenticated.&amp;quot;
}&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-kebab-filter&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-kebab-filter&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-kebab-filter&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-kebab-filter&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-kebab-filter&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-kebab-filter&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/kebab/filter&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-kebab-filter&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-kebab-filter&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-kebab-filter&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-kebab-filter&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-kebab-filter&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-kebab-filter&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/kebab/filter&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-kebab-filter&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-kebab-filter&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

                    &lt;h2 id=&quot;endpoints-GETapi-documentation&quot;&gt;Invoke the controller method.&lt;/h2&gt;

&lt;p&gt;
&lt;/p&gt;



&lt;span id=&quot;example-requests-GETapi-documentation&quot;&gt;
&lt;blockquote&gt;Example request:&lt;/blockquote&gt;


&lt;div class=&quot;bash-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-bash&quot;&gt;curl --request GET \
    --get &quot;http://localhost/api/documentation&quot; \
    --header &quot;Content-Type: application/json&quot; \
    --header &quot;Accept: application/json&quot;&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;


&lt;div class=&quot;javascript-example&quot;&gt;
    &lt;pre&gt;&lt;code class=&quot;language-javascript&quot;&gt;const url = new URL(
    &quot;http://localhost/api/documentation&quot;
);

const headers = {
    &quot;Content-Type&quot;: &quot;application/json&quot;,
    &quot;Accept&quot;: &quot;application/json&quot;,
};

fetch(url, {
    method: &quot;GET&quot;,
    headers,
}).then(response =&amp;gt; response.json());&lt;/code&gt;&lt;/pre&gt;&lt;/div&gt;

&lt;/span&gt;

&lt;span id=&quot;example-responses-GETapi-documentation&quot;&gt;
            &lt;blockquote&gt;
            &lt;p&gt;Example response (200):&lt;/p&gt;
        &lt;/blockquote&gt;
                &lt;details class=&quot;annotation&quot;&gt;
            &lt;summary style=&quot;cursor: pointer;&quot;&gt;
                &lt;small onclick=&quot;textContent = parentElement.parentElement.open ? &#039;Show headers&#039; : &#039;Hide headers&#039;&quot;&gt;Show headers&lt;/small&gt;
            &lt;/summary&gt;
            &lt;pre&gt;&lt;code class=&quot;language-http&quot;&gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IlhNUklTZ2MwWGI4SHlxMXIySWFIM2c9PSIsInZhbHVlIjoiVjFFZ0UwQWdlYkdVSjQ5cFpVZ1lYcGQzTUVaNWgwNExFcTNXeHUyVW1BR0FBMHRNL0R3SVlVQ3I2SmhLRThyNlVodm1sNUNoREt2eGtPa3QyTEtPaUxSaWJhcGNGUUp4MVU0SGMxS0tLclVXWUEvS2l3djZuMklxNjZGV0JuR1kiLCJtYWMiOiI2NjBlNGVmYzJhZjEyMjAxZDQ1NzJiN2JiNGU4NGZkMzIwMGIwYWM3OGI3NDJhYmQ3ODhiZjIzY2ZlOTBhZmM3IiwidGFnIjoiIn0%3D; expires=Thu, 16 Jan 2025 12:04:55 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6IlpwMkwwR3kyTStKRmxyWWxKeStnalE9PSIsInZhbHVlIjoiRHJDZ1VEMEZiZjdtTStsUk05RjNra0J5eG5kSEF0cFBHSFhucGI2V2xQVFhrR1hoa1BsYnpWdVFrZVVsWHhvYmNJWS9hVDhIR3V0TUVFU1dJa2RzWWhnbzdyNGs0ZE9BWTZ0a0p1Z2UyWFl3RFZXRkN0S2xXak1LMGZ3MEV6UnMiLCJtYWMiOiJmZDJjZmYxN2NkYzY4YjIzYTlmN2IzYWVhNjg3YTUxZmM4ZGUwNDU0NDNkYjI0ZmE3N2JmZTI2MmRmOGUyODcwIiwidGFnIjoiIn0%3D; expires=Thu, 16 Jan 2025 12:04:55 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 &lt;/code&gt;&lt;/pre&gt;&lt;/details&gt;         &lt;pre&gt;

&lt;code class=&quot;language-json&quot; style=&quot;max-height: 300px;&quot;&gt;&amp;lt;!doctype html&amp;gt;
&amp;lt;html lang=&amp;quot;en&amp;quot;&amp;gt;
&amp;lt;head&amp;gt;
    &amp;lt;meta charset=&amp;quot;utf-8&amp;quot;&amp;gt;
    &amp;lt;meta content=&amp;quot;IE=edge,chrome=1&amp;quot; http-equiv=&amp;quot;X-UA-Compatible&amp;quot;&amp;gt;
    &amp;lt;meta name=&amp;quot;viewport&amp;quot; content=&amp;quot;width=device-width, initial-scale=1, maximum-scale=1&amp;quot;&amp;gt;
    &amp;lt;title&amp;gt;Laravel Documentation&amp;lt;/title&amp;gt;

    &amp;lt;link href=&amp;quot;https://fonts.googleapis.com/css?family=Open+Sans&amp;amp;display=swap&amp;quot; rel=&amp;quot;stylesheet&amp;quot;&amp;gt;

    &amp;lt;link rel=&amp;quot;stylesheet&amp;quot; href=&amp;quot;http://localhost/vendor/scribe/css/theme-default.style.css&amp;quot; media=&amp;quot;screen&amp;quot;&amp;gt;
    &amp;lt;link rel=&amp;quot;stylesheet&amp;quot; href=&amp;quot;http://localhost/vendor/scribe/css/theme-default.print.css&amp;quot; media=&amp;quot;print&amp;quot;&amp;gt;

    &amp;lt;script src=&amp;quot;https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;link rel=&amp;quot;stylesheet&amp;quot;
          href=&amp;quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css&amp;quot;&amp;gt;
    &amp;lt;script src=&amp;quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;script src=&amp;quot;https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;style id=&amp;quot;language-style&amp;quot;&amp;gt;
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            &amp;lt;/style&amp;gt;

    &amp;lt;script&amp;gt;
        var tryItOutBaseUrl = &amp;quot;http://localhost&amp;quot;;
        var useCsrf = Boolean();
        var csrfUrl = &amp;quot;/sanctum/csrf-cookie&amp;quot;;
    &amp;lt;/script&amp;gt;
    &amp;lt;script src=&amp;quot;http://localhost/vendor/scribe/js/tryitout-4.39.0.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

    &amp;lt;script src=&amp;quot;http://localhost/vendor/scribe/js/theme-default-4.39.0.js&amp;quot;&amp;gt;&amp;lt;/script&amp;gt;

&amp;lt;/head&amp;gt;

&amp;lt;body data-languages=&amp;quot;[&amp;amp;quot;bash&amp;amp;quot;,&amp;amp;quot;javascript&amp;amp;quot;]&amp;quot;&amp;gt;

&amp;lt;a href=&amp;quot;#&amp;quot; id=&amp;quot;nav-button&amp;quot;&amp;gt;
    &amp;lt;span&amp;gt;
        MENU
        &amp;lt;img src=&amp;quot;http://localhost/vendor/scribe/images/navbar.png&amp;quot; alt=&amp;quot;navbar-image&amp;quot;/&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;/a&amp;gt;
&amp;lt;div class=&amp;quot;tocify-wrapper&amp;quot;&amp;gt;
    
            &amp;lt;div class=&amp;quot;lang-selector&amp;quot;&amp;gt;
                                            &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;bash&amp;quot;&amp;gt;bash&amp;lt;/button&amp;gt;
                                            &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;javascript&amp;quot;&amp;gt;javascript&amp;lt;/button&amp;gt;
                    &amp;lt;/div&amp;gt;
    
    &amp;lt;div class=&amp;quot;search&amp;quot;&amp;gt;
        &amp;lt;input type=&amp;quot;text&amp;quot; class=&amp;quot;search&amp;quot; id=&amp;quot;input-search&amp;quot; placeholder=&amp;quot;Search&amp;quot;&amp;gt;
    &amp;lt;/div&amp;gt;

    &amp;lt;div id=&amp;quot;toc&amp;quot;&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-introduction&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;introduction&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#introduction&amp;quot;&amp;gt;Introduction&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                            &amp;lt;/ul&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-authenticating-requests&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;authenticating-requests&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#authenticating-requests&amp;quot;&amp;gt;Authenticating requests&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                            &amp;lt;/ul&amp;gt;
                    &amp;lt;ul id=&amp;quot;tocify-header-endpoints&amp;quot; class=&amp;quot;tocify-header&amp;quot;&amp;gt;
                &amp;lt;li class=&amp;quot;tocify-item level-1&amp;quot; data-unique=&amp;quot;endpoints&amp;quot;&amp;gt;
                    &amp;lt;a href=&amp;quot;#endpoints&amp;quot;&amp;gt;Endpoints&amp;lt;/a&amp;gt;
                &amp;lt;/li&amp;gt;
                                    &amp;lt;ul id=&amp;quot;tocify-subheader-endpoints&amp;quot; class=&amp;quot;tocify-subheader&amp;quot;&amp;gt;
                                                    &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-register&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-register&amp;quot;&amp;gt;Register a new user.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-login&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-login&amp;quot;&amp;gt;POST api/login&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-profile&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-profile&amp;quot;&amp;gt;GET api/profile&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-user--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-user--id-&amp;quot;&amp;gt;GET api/user/{id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-logout&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-logout&amp;quot;&amp;gt;GET api/logout&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-change-password&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-change-password&amp;quot;&amp;gt;POST api/change-password&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-admin&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-admin&amp;quot;&amp;gt;GET api/admin&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-suggest-add&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-suggest-add&amp;quot;&amp;gt;POST api/suggest/add&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-suggest&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-suggest&amp;quot;&amp;gt;GET api/suggest&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PUTapi-suggest--id--reviewed&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PUTapi-suggest--id--reviewed&amp;quot;&amp;gt;PUT api/suggest/{id}/reviewed&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-DELETEapi-suggest--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-DELETEapi-suggest--id-&amp;quot;&amp;gt;DELETE api/suggest/{id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-kebab-showAll&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-kebab-showAll&amp;quot;&amp;gt;GET api/kebab/showAll&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-kebab-show--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-kebab-show--id-&amp;quot;&amp;gt;GET api/kebab/show/{id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-POSTapi-kebab-add&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-POSTapi-kebab-add&amp;quot;&amp;gt;POST api/kebab/add&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-PUTapi-kebab-update--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-PUTapi-kebab-update--id-&amp;quot;&amp;gt;PUT api/kebab/update/{id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-DELETEapi-kebab-delete--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-DELETEapi-kebab-delete--id-&amp;quot;&amp;gt;DELETE api/kebab/delete/{id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-kebab-details--id-&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-kebab-details--id-&amp;quot;&amp;gt;GET api/kebab/details/{id}&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-kebab-filter&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-kebab-filter&amp;quot;&amp;gt;GET api/kebab/filter&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                                &amp;lt;li class=&amp;quot;tocify-item level-2&amp;quot; data-unique=&amp;quot;endpoints-GETapi-documentation&amp;quot;&amp;gt;
                                &amp;lt;a href=&amp;quot;#endpoints-GETapi-documentation&amp;quot;&amp;gt;Invoke the controller method.&amp;lt;/a&amp;gt;
                            &amp;lt;/li&amp;gt;
                                                                        &amp;lt;/ul&amp;gt;
                            &amp;lt;/ul&amp;gt;
            &amp;lt;/div&amp;gt;

    &amp;lt;ul class=&amp;quot;toc-footer&amp;quot; id=&amp;quot;toc-footer&amp;quot;&amp;gt;
                    &amp;lt;li style=&amp;quot;padding-bottom: 5px;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://localhost/docs.postman&amp;quot;&amp;gt;View Postman collection&amp;lt;/a&amp;gt;&amp;lt;/li&amp;gt;
                            &amp;lt;li style=&amp;quot;padding-bottom: 5px;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://localhost/docs.openapi&amp;quot;&amp;gt;View OpenAPI spec&amp;lt;/a&amp;gt;&amp;lt;/li&amp;gt;
                &amp;lt;li&amp;gt;&amp;lt;a href=&amp;quot;http://github.com/knuckleswtf/scribe&amp;quot;&amp;gt;Documentation powered by Scribe ✍&amp;lt;/a&amp;gt;&amp;lt;/li&amp;gt;
    &amp;lt;/ul&amp;gt;

    &amp;lt;ul class=&amp;quot;toc-footer&amp;quot; id=&amp;quot;last-updated&amp;quot;&amp;gt;
        &amp;lt;li&amp;gt;Last updated: January 16, 2025&amp;lt;/li&amp;gt;
    &amp;lt;/ul&amp;gt;
&amp;lt;/div&amp;gt;

&amp;lt;div class=&amp;quot;page-wrapper&amp;quot;&amp;gt;
    &amp;lt;div class=&amp;quot;dark-box&amp;quot;&amp;gt;&amp;lt;/div&amp;gt;
    &amp;lt;div class=&amp;quot;content&amp;quot;&amp;gt;
        &amp;lt;h1 id=&amp;quot;introduction&amp;quot;&amp;gt;Introduction&amp;lt;/h1&amp;gt;
&amp;lt;aside&amp;gt;
    &amp;lt;strong&amp;gt;Base URL&amp;lt;/strong&amp;gt;: &amp;lt;code&amp;gt;http://localhost&amp;lt;/code&amp;gt;
&amp;lt;/aside&amp;gt;
&amp;lt;p&amp;gt;This documentation aims to provide all the information you need to work with our API.&amp;lt;/p&amp;gt;
&amp;lt;aside&amp;gt;As you scroll, you&amp;#039;ll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&amp;lt;/aside&amp;gt;

        &amp;lt;h1 id=&amp;quot;authenticating-requests&amp;quot;&amp;gt;Authenticating requests&amp;lt;/h1&amp;gt;
&amp;lt;p&amp;gt;This API is not authenticated.&amp;lt;/p&amp;gt;

        &amp;lt;h1 id=&amp;quot;endpoints&amp;quot;&amp;gt;Endpoints&amp;lt;/h1&amp;gt;

    

                                &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-register&amp;quot;&amp;gt;Register a new user.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;

&amp;lt;p&amp;gt;This endpoint allows a user to register by providing their name, email, and password.
A unique email address is required. The API will return a token upon successful registration.&amp;lt;/p&amp;gt;

&amp;lt;span id=&amp;quot;example-requests-POSTapi-register&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://localhost/api/register&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;name\&amp;quot;: \&amp;quot;John Doe\&amp;quot;,
    \&amp;quot;email\&amp;quot;: \&amp;quot;john.doe@example.com\&amp;quot;,
    \&amp;quot;password\&amp;quot;: \&amp;quot;password123\&amp;quot;
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/register&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;name&amp;quot;: &amp;quot;John Doe&amp;quot;,
    &amp;quot;email&amp;quot;: &amp;quot;john.doe@example.com&amp;quot;,
    &amp;quot;password&amp;quot;: &amp;quot;password123&amp;quot;
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-register&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;status&amp;amp;quot;: true,
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;User created successfully&amp;amp;quot;,
    &amp;amp;quot;token&amp;amp;quot;: &amp;amp;quot;some-jwt-token&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-register&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-register&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-register&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-register&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-register&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-register&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/register&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-register&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-register&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-register&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-register&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-register&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-register&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/register&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;name&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;name&amp;quot;                data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;John Doe&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The name of the user. Example: &amp;lt;code&amp;gt;John Doe&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;email&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;email&amp;quot;                data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;john.doe@example.com&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The email of the user. Example: &amp;lt;code&amp;gt;john.doe@example.com&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;password&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;password&amp;quot;                data-endpoint=&amp;quot;POSTapi-register&amp;quot;
               value=&amp;quot;password123&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The password for the account. Example: &amp;lt;code&amp;gt;password123&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-login&amp;quot;&amp;gt;POST api/login&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-login&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://localhost/api/login&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/login&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-login&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-login&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-login&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-login&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-login&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-login&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-login&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/login&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-login&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-login&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-login&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-login&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-login&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-login&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/login&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-login&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-login&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-profile&amp;quot;&amp;gt;GET api/profile&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-profile&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/profile&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/profile&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-profile&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-profile&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-profile&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-profile&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-profile&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-profile&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-profile&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/profile&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-profile&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-profile&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-profile&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-profile&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-profile&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-profile&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/profile&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-profile&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-profile&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-user--id-&amp;quot;&amp;gt;GET api/user/{id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-user--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/user/qui&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/user/qui&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-user--id-&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-user--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-user--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-user--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-user--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-user--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-user--id-&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/user/{id}&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-user--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-user--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-user--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-user--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-user--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-user--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/user/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-user--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-user--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;GETapi-user--id-&amp;quot;
               value=&amp;quot;qui&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the user. Example: &amp;lt;code&amp;gt;qui&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-logout&amp;quot;&amp;gt;GET api/logout&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-logout&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/logout&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/logout&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-logout&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-logout&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-logout&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-logout&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-logout&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-logout&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-logout&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/logout&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-logout&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-logout&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-logout&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-logout&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-logout&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-logout&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/logout&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-logout&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-logout&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-change-password&amp;quot;&amp;gt;POST api/change-password&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-change-password&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://localhost/api/change-password&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/change-password&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-change-password&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-change-password&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-change-password&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-change-password&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-change-password&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-change-password&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-change-password&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/change-password&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-change-password&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-change-password&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-change-password&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-change-password&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-change-password&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-change-password&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/change-password&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-change-password&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-change-password&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-admin&amp;quot;&amp;gt;GET api/admin&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-admin&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/admin&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/admin&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-admin&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-admin&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-admin&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-admin&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-admin&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-admin&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-admin&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/admin&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-admin&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-admin&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-admin&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-admin&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-admin&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-admin&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/admin&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-admin&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-admin&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-suggest-add&amp;quot;&amp;gt;POST api/suggest/add&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-suggest-add&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://localhost/api/suggest/add&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;subject\&amp;quot;: \&amp;quot;kvhruuevguxtfhtvnzyivawr\&amp;quot;
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/suggest/add&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;subject&amp;quot;: &amp;quot;kvhruuevguxtfhtvnzyivawr&amp;quot;
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-suggest-add&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-suggest-add&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-suggest-add&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-suggest-add&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-suggest-add&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-suggest-add&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-suggest-add&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/suggest/add&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-suggest-add&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-suggest-add&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-suggest-add&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-suggest-add&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-suggest-add&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-suggest-add&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/suggest/add&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-suggest-add&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-suggest-add&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;subject&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;subject&amp;quot;                data-endpoint=&amp;quot;POSTapi-suggest-add&amp;quot;
               value=&amp;quot;kvhruuevguxtfhtvnzyivawr&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must not be greater than 1000 characters. Example: &amp;lt;code&amp;gt;kvhruuevguxtfhtvnzyivawr&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-suggest&amp;quot;&amp;gt;GET api/suggest&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-suggest&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/suggest&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/suggest&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-suggest&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-suggest&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-suggest&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-suggest&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-suggest&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-suggest&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-suggest&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/suggest&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-suggest&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-suggest&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-suggest&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-suggest&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-suggest&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-suggest&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/suggest&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-suggest&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-suggest&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PUTapi-suggest--id--reviewed&amp;quot;&amp;gt;PUT api/suggest/{id}/reviewed&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PUTapi-suggest--id--reviewed&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PUT \
    &amp;quot;http://localhost/api/suggest/ea/reviewed&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/suggest/ea/reviewed&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;PUT&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PUTapi-suggest--id--reviewed&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PUTapi-suggest--id--reviewed&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PUTapi-suggest--id--reviewed&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PUTapi-suggest--id--reviewed&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PUTapi-suggest--id--reviewed&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PUTapi-suggest--id--reviewed&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PUTapi-suggest--id--reviewed&amp;quot; data-method=&amp;quot;PUT&amp;quot;
      data-path=&amp;quot;api/suggest/{id}/reviewed&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PUTapi-suggest--id--reviewed&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PUTapi-suggest--id--reviewed&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PUTapi-suggest--id--reviewed&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PUTapi-suggest--id--reviewed&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PUTapi-suggest--id--reviewed&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PUTapi-suggest--id--reviewed&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-darkblue&amp;quot;&amp;gt;PUT&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/suggest/{id}/reviewed&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PUTapi-suggest--id--reviewed&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PUTapi-suggest--id--reviewed&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;PUTapi-suggest--id--reviewed&amp;quot;
               value=&amp;quot;ea&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the suggest. Example: &amp;lt;code&amp;gt;ea&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-DELETEapi-suggest--id-&amp;quot;&amp;gt;DELETE api/suggest/{id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-DELETEapi-suggest--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request DELETE \
    &amp;quot;http://localhost/api/suggest/quia&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/suggest/quia&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;DELETE&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-DELETEapi-suggest--id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-DELETEapi-suggest--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-DELETEapi-suggest--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-DELETEapi-suggest--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-DELETEapi-suggest--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-DELETEapi-suggest--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-DELETEapi-suggest--id-&amp;quot; data-method=&amp;quot;DELETE&amp;quot;
      data-path=&amp;quot;api/suggest/{id}&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;DELETEapi-suggest--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-DELETEapi-suggest--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;DELETEapi-suggest--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-DELETEapi-suggest--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;DELETEapi-suggest--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-DELETEapi-suggest--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-red&amp;quot;&amp;gt;DELETE&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/suggest/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;DELETEapi-suggest--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;DELETEapi-suggest--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;DELETEapi-suggest--id-&amp;quot;
               value=&amp;quot;quia&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the suggest. Example: &amp;lt;code&amp;gt;quia&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-kebab-showAll&amp;quot;&amp;gt;GET api/kebab/showAll&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-kebab-showAll&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/kebab/showAll&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/kebab/showAll&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-kebab-showAll&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-kebab-showAll&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-kebab-showAll&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-kebab-showAll&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-kebab-showAll&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-kebab-showAll&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-kebab-showAll&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/kebab/showAll&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-kebab-showAll&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-kebab-showAll&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-kebab-showAll&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-kebab-showAll&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-kebab-showAll&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-kebab-showAll&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/kebab/showAll&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-showAll&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-showAll&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-kebab-show--id-&amp;quot;&amp;gt;GET api/kebab/show/{id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-kebab-show--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/kebab/show/optio&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/kebab/show/optio&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-kebab-show--id-&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-kebab-show--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-kebab-show--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-kebab-show--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-kebab-show--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-kebab-show--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-kebab-show--id-&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/kebab/show/{id}&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-kebab-show--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-kebab-show--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-kebab-show--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-kebab-show--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-kebab-show--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-kebab-show--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/kebab/show/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-show--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-show--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-show--id-&amp;quot;
               value=&amp;quot;optio&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the show. Example: &amp;lt;code&amp;gt;optio&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-POSTapi-kebab-add&amp;quot;&amp;gt;POST api/kebab/add&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-POSTapi-kebab-add&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request POST \
    &amp;quot;http://localhost/api/kebab/add&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;name\&amp;quot;: \&amp;quot;lftijfsdilctknunxcnxchpn\&amp;quot;,
    \&amp;quot;logo\&amp;quot;: \&amp;quot;et\&amp;quot;,
    \&amp;quot;address\&amp;quot;: \&amp;quot;numquam\&amp;quot;,
    \&amp;quot;latitude\&amp;quot;: 199.35694,
    \&amp;quot;longitude\&amp;quot;: 10974705.885,
    \&amp;quot;year_opened\&amp;quot;: 20,
    \&amp;quot;year_closed\&amp;quot;: 11,
    \&amp;quot;opening_hours\&amp;quot;: \&amp;quot;[\\\&amp;quot;itaque\\\&amp;quot;,\\\&amp;quot;fuga\\\&amp;quot;]\&amp;quot;,
    \&amp;quot;meat_types\&amp;quot;: \&amp;quot;[\\\&amp;quot;voluptatum\\\&amp;quot;,\\\&amp;quot;qui\\\&amp;quot;]\&amp;quot;,
    \&amp;quot;sauces\&amp;quot;: \&amp;quot;[\\\&amp;quot;laboriosam\\\&amp;quot;,\\\&amp;quot;voluptate\\\&amp;quot;]\&amp;quot;,
    \&amp;quot;status\&amp;quot;: \&amp;quot;optio\&amp;quot;,
    \&amp;quot;is_craft\&amp;quot;: false,
    \&amp;quot;is_in_stall\&amp;quot;: false,
    \&amp;quot;is_chain_member\&amp;quot;: false,
    \&amp;quot;ordering_options\&amp;quot;: \&amp;quot;[\\\&amp;quot;ea\\\&amp;quot;,\\\&amp;quot;eos\\\&amp;quot;]\&amp;quot;
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/kebab/add&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;name&amp;quot;: &amp;quot;lftijfsdilctknunxcnxchpn&amp;quot;,
    &amp;quot;logo&amp;quot;: &amp;quot;et&amp;quot;,
    &amp;quot;address&amp;quot;: &amp;quot;numquam&amp;quot;,
    &amp;quot;latitude&amp;quot;: 199.35694,
    &amp;quot;longitude&amp;quot;: 10974705.885,
    &amp;quot;year_opened&amp;quot;: 20,
    &amp;quot;year_closed&amp;quot;: 11,
    &amp;quot;opening_hours&amp;quot;: &amp;quot;[\&amp;quot;itaque\&amp;quot;,\&amp;quot;fuga\&amp;quot;]&amp;quot;,
    &amp;quot;meat_types&amp;quot;: &amp;quot;[\&amp;quot;voluptatum\&amp;quot;,\&amp;quot;qui\&amp;quot;]&amp;quot;,
    &amp;quot;sauces&amp;quot;: &amp;quot;[\&amp;quot;laboriosam\&amp;quot;,\&amp;quot;voluptate\&amp;quot;]&amp;quot;,
    &amp;quot;status&amp;quot;: &amp;quot;optio&amp;quot;,
    &amp;quot;is_craft&amp;quot;: false,
    &amp;quot;is_in_stall&amp;quot;: false,
    &amp;quot;is_chain_member&amp;quot;: false,
    &amp;quot;ordering_options&amp;quot;: &amp;quot;[\&amp;quot;ea\&amp;quot;,\&amp;quot;eos\&amp;quot;]&amp;quot;
};

fetch(url, {
    method: &amp;quot;POST&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-POSTapi-kebab-add&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-POSTapi-kebab-add&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-POSTapi-kebab-add&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-POSTapi-kebab-add&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-POSTapi-kebab-add&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-POSTapi-kebab-add&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-POSTapi-kebab-add&amp;quot; data-method=&amp;quot;POST&amp;quot;
      data-path=&amp;quot;api/kebab/add&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;POSTapi-kebab-add&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-POSTapi-kebab-add&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;POSTapi-kebab-add&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-POSTapi-kebab-add&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;POSTapi-kebab-add&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-POSTapi-kebab-add&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-black&amp;quot;&amp;gt;POST&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/kebab/add&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;name&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;name&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;lftijfsdilctknunxcnxchpn&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must not be greater than 255 characters. Example: &amp;lt;code&amp;gt;lftijfsdilctknunxcnxchpn&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;logo&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;logo&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;et&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;et&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;address&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;address&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;numquam&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;numquam&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;latitude&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;number&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;latitude&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;199.35694&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;199.35694&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;longitude&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;number&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;longitude&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;10974705.885&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;10974705.885&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;year_opened&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;year_opened&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;20&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;20&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;year_closed&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;year_closed&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;11&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;11&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;opening_hours&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;opening_hours&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;[&amp;quot;itaque&amp;quot;,&amp;quot;fuga&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;itaque&amp;quot;,&amp;quot;fuga&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;meat_types&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;meat_types&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;[&amp;quot;voluptatum&amp;quot;,&amp;quot;qui&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;voluptatum&amp;quot;,&amp;quot;qui&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;sauces&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;sauces&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;[&amp;quot;laboriosam&amp;quot;,&amp;quot;voluptate&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;laboriosam&amp;quot;,&amp;quot;voluptate&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;status&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;optio&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;optio&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;is_craft&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_craft&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_craft&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;is_in_stall&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_in_stall&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_in_stall&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;is_chain_member&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_chain_member&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_chain_member&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;ordering_options&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;ordering_options&amp;quot;                data-endpoint=&amp;quot;POSTapi-kebab-add&amp;quot;
               value=&amp;quot;[&amp;quot;ea&amp;quot;,&amp;quot;eos&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;ea&amp;quot;,&amp;quot;eos&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-PUTapi-kebab-update--id-&amp;quot;&amp;gt;PUT api/kebab/update/{id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-PUTapi-kebab-update--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request PUT \
    &amp;quot;http://localhost/api/kebab/update/nobis&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot; \
    --data &amp;quot;{
    \&amp;quot;name\&amp;quot;: \&amp;quot;myjkwmeyvslzly\&amp;quot;,
    \&amp;quot;logo\&amp;quot;: \&amp;quot;perferendis\&amp;quot;,
    \&amp;quot;address\&amp;quot;: \&amp;quot;omnis\&amp;quot;,
    \&amp;quot;latitude\&amp;quot;: 301,
    \&amp;quot;longitude\&amp;quot;: 132.0899471,
    \&amp;quot;year_opened\&amp;quot;: 20,
    \&amp;quot;year_closed\&amp;quot;: 2,
    \&amp;quot;opening_hours\&amp;quot;: \&amp;quot;[\\\&amp;quot;repellat\\\&amp;quot;,\\\&amp;quot;cum\\\&amp;quot;]\&amp;quot;,
    \&amp;quot;meat_types\&amp;quot;: \&amp;quot;[\\\&amp;quot;perferendis\\\&amp;quot;,\\\&amp;quot;consequatur\\\&amp;quot;]\&amp;quot;,
    \&amp;quot;sauces\&amp;quot;: \&amp;quot;[\\\&amp;quot;rem\\\&amp;quot;,\\\&amp;quot;maiores\\\&amp;quot;]\&amp;quot;,
    \&amp;quot;status\&amp;quot;: \&amp;quot;dolorem\&amp;quot;,
    \&amp;quot;is_craft\&amp;quot;: true,
    \&amp;quot;is_in_stall\&amp;quot;: true,
    \&amp;quot;is_chain_member\&amp;quot;: false,
    \&amp;quot;ordering_options\&amp;quot;: \&amp;quot;[\\\&amp;quot;neque\\\&amp;quot;,\\\&amp;quot;repellat\\\&amp;quot;]\&amp;quot;
}&amp;quot;
&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/kebab/update/nobis&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

let body = {
    &amp;quot;name&amp;quot;: &amp;quot;myjkwmeyvslzly&amp;quot;,
    &amp;quot;logo&amp;quot;: &amp;quot;perferendis&amp;quot;,
    &amp;quot;address&amp;quot;: &amp;quot;omnis&amp;quot;,
    &amp;quot;latitude&amp;quot;: 301,
    &amp;quot;longitude&amp;quot;: 132.0899471,
    &amp;quot;year_opened&amp;quot;: 20,
    &amp;quot;year_closed&amp;quot;: 2,
    &amp;quot;opening_hours&amp;quot;: &amp;quot;[\&amp;quot;repellat\&amp;quot;,\&amp;quot;cum\&amp;quot;]&amp;quot;,
    &amp;quot;meat_types&amp;quot;: &amp;quot;[\&amp;quot;perferendis\&amp;quot;,\&amp;quot;consequatur\&amp;quot;]&amp;quot;,
    &amp;quot;sauces&amp;quot;: &amp;quot;[\&amp;quot;rem\&amp;quot;,\&amp;quot;maiores\&amp;quot;]&amp;quot;,
    &amp;quot;status&amp;quot;: &amp;quot;dolorem&amp;quot;,
    &amp;quot;is_craft&amp;quot;: true,
    &amp;quot;is_in_stall&amp;quot;: true,
    &amp;quot;is_chain_member&amp;quot;: false,
    &amp;quot;ordering_options&amp;quot;: &amp;quot;[\&amp;quot;neque\&amp;quot;,\&amp;quot;repellat\&amp;quot;]&amp;quot;
};

fetch(url, {
    method: &amp;quot;PUT&amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-PUTapi-kebab-update--id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-PUTapi-kebab-update--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-PUTapi-kebab-update--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-PUTapi-kebab-update--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-PUTapi-kebab-update--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-PUTapi-kebab-update--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-PUTapi-kebab-update--id-&amp;quot; data-method=&amp;quot;PUT&amp;quot;
      data-path=&amp;quot;api/kebab/update/{id}&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;PUTapi-kebab-update--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-PUTapi-kebab-update--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;PUTapi-kebab-update--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-PUTapi-kebab-update--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;PUTapi-kebab-update--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-PUTapi-kebab-update--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-darkblue&amp;quot;&amp;gt;PUT&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/kebab/update/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;nobis&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the update. Example: &amp;lt;code&amp;gt;nobis&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                            &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Body Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
        &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;name&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;name&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;myjkwmeyvslzly&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must not be greater than 255 characters. Example: &amp;lt;code&amp;gt;myjkwmeyvslzly&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;logo&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;logo&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;perferendis&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;perferendis&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;address&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;address&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;omnis&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;omnis&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;latitude&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;number&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;latitude&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;301&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;301&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;longitude&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;number&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;longitude&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;132.0899471&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;132.0899471&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;year_opened&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;year_opened&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;20&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;20&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;year_closed&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;integer&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;number&amp;quot; style=&amp;quot;display: none&amp;quot;
               step=&amp;quot;any&amp;quot;               name=&amp;quot;year_closed&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;2&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;2&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;opening_hours&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;opening_hours&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;[&amp;quot;repellat&amp;quot;,&amp;quot;cum&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;repellat&amp;quot;,&amp;quot;cum&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;meat_types&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;meat_types&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;[&amp;quot;perferendis&amp;quot;,&amp;quot;consequatur&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;perferendis&amp;quot;,&amp;quot;consequatur&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;sauces&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;sauces&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;[&amp;quot;rem&amp;quot;,&amp;quot;maiores&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;rem&amp;quot;,&amp;quot;maiores&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;status&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;status&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;dolorem&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;dolorem&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;is_craft&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_craft&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_craft&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;is_in_stall&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_in_stall&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_in_stall&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;is_chain_member&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;boolean&amp;lt;/small&amp;gt;&amp;amp;nbsp;
&amp;lt;i&amp;gt;optional&amp;lt;/i&amp;gt; &amp;amp;nbsp;
                &amp;lt;label data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_chain_member&amp;quot;
                   value=&amp;quot;true&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;true&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
        &amp;lt;label data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot; style=&amp;quot;display: none&amp;quot;&amp;gt;
            &amp;lt;input type=&amp;quot;radio&amp;quot; name=&amp;quot;is_chain_member&amp;quot;
                   value=&amp;quot;false&amp;quot;
                   data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
                   data-component=&amp;quot;body&amp;quot;             &amp;gt;
            &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;
        &amp;lt;/label&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;false&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
                &amp;lt;div style=&amp;quot; padding-left: 28px;  clear: unset;&amp;quot;&amp;gt;
            &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;ordering_options&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;ordering_options&amp;quot;                data-endpoint=&amp;quot;PUTapi-kebab-update--id-&amp;quot;
               value=&amp;quot;[&amp;quot;neque&amp;quot;,&amp;quot;repellat&amp;quot;]&amp;quot;
               data-component=&amp;quot;body&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Must be a valid JSON string. Example: &amp;lt;code&amp;gt;[&amp;quot;neque&amp;quot;,&amp;quot;repellat&amp;quot;]&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
        &amp;lt;/div&amp;gt;
        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-DELETEapi-kebab-delete--id-&amp;quot;&amp;gt;DELETE api/kebab/delete/{id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-DELETEapi-kebab-delete--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request DELETE \
    &amp;quot;http://localhost/api/kebab/delete/voluptatem&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/kebab/delete/voluptatem&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;DELETE&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-DELETEapi-kebab-delete--id-&amp;quot;&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-DELETEapi-kebab-delete--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-DELETEapi-kebab-delete--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-DELETEapi-kebab-delete--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-DELETEapi-kebab-delete--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-DELETEapi-kebab-delete--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-DELETEapi-kebab-delete--id-&amp;quot; data-method=&amp;quot;DELETE&amp;quot;
      data-path=&amp;quot;api/kebab/delete/{id}&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;DELETEapi-kebab-delete--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-DELETEapi-kebab-delete--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;DELETEapi-kebab-delete--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-DELETEapi-kebab-delete--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;DELETEapi-kebab-delete--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-DELETEapi-kebab-delete--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-red&amp;quot;&amp;gt;DELETE&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/kebab/delete/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;DELETEapi-kebab-delete--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;DELETEapi-kebab-delete--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;DELETEapi-kebab-delete--id-&amp;quot;
               value=&amp;quot;voluptatem&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the delete. Example: &amp;lt;code&amp;gt;voluptatem&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-kebab-details--id-&amp;quot;&amp;gt;GET api/kebab/details/{id}&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-kebab-details--id-&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/kebab/details/consequatur&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/kebab/details/consequatur&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-kebab-details--id-&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-kebab-details--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-kebab-details--id-&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-kebab-details--id-&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-kebab-details--id-&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-kebab-details--id-&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-kebab-details--id-&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/kebab/details/{id}&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-kebab-details--id-&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-kebab-details--id-&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-kebab-details--id-&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-kebab-details--id-&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-kebab-details--id-&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-kebab-details--id-&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/kebab/details/{id}&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-details--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-details--id-&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;URL Parameters&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                    &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;id&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;lt;small&amp;gt;string&amp;lt;/small&amp;gt;&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;id&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-details--id-&amp;quot;
               value=&amp;quot;consequatur&amp;quot;
               data-component=&amp;quot;url&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;The ID of the detail. Example: &amp;lt;code&amp;gt;consequatur&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                    &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-kebab-filter&amp;quot;&amp;gt;GET api/kebab/filter&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-kebab-filter&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/kebab/filter&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/kebab/filter&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-kebab-filter&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (401):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;{
    &amp;amp;quot;message&amp;amp;quot;: &amp;amp;quot;Unauthenticated.&amp;amp;quot;
}&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-kebab-filter&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-kebab-filter&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-kebab-filter&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-kebab-filter&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-kebab-filter&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-kebab-filter&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/kebab/filter&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-kebab-filter&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-kebab-filter&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-kebab-filter&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-kebab-filter&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-kebab-filter&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-kebab-filter&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/kebab/filter&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-filter&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-kebab-filter&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

                    &amp;lt;h2 id=&amp;quot;endpoints-GETapi-documentation&amp;quot;&amp;gt;Invoke the controller method.&amp;lt;/h2&amp;gt;

&amp;lt;p&amp;gt;
&amp;lt;/p&amp;gt;



&amp;lt;span id=&amp;quot;example-requests-GETapi-documentation&amp;quot;&amp;gt;
&amp;lt;blockquote&amp;gt;Example request:&amp;lt;/blockquote&amp;gt;


&amp;lt;div class=&amp;quot;bash-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-bash&amp;quot;&amp;gt;curl --request GET \
    --get &amp;quot;http://localhost/api/documentation&amp;quot; \
    --header &amp;quot;Content-Type: application/json&amp;quot; \
    --header &amp;quot;Accept: application/json&amp;quot;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;


&amp;lt;div class=&amp;quot;javascript-example&amp;quot;&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-javascript&amp;quot;&amp;gt;const url = new URL(
    &amp;quot;http://localhost/api/documentation&amp;quot;
);

const headers = {
    &amp;quot;Content-Type&amp;quot;: &amp;quot;application/json&amp;quot;,
    &amp;quot;Accept&amp;quot;: &amp;quot;application/json&amp;quot;,
};

fetch(url, {
    method: &amp;quot;GET&amp;quot;,
    headers,
}).then(response =&amp;amp;gt; response.json());&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/div&amp;gt;

&amp;lt;/span&amp;gt;

&amp;lt;span id=&amp;quot;example-responses-GETapi-documentation&amp;quot;&amp;gt;
            &amp;lt;blockquote&amp;gt;
            &amp;lt;p&amp;gt;Example response (200):&amp;lt;/p&amp;gt;
        &amp;lt;/blockquote&amp;gt;
                &amp;lt;details class=&amp;quot;annotation&amp;quot;&amp;gt;
            &amp;lt;summary style=&amp;quot;cursor: pointer;&amp;quot;&amp;gt;
                &amp;lt;small onclick=&amp;quot;textContent = parentElement.parentElement.open ? &amp;#039;Show headers&amp;#039; : &amp;#039;Hide headers&amp;#039;&amp;quot;&amp;gt;Show headers&amp;lt;/small&amp;gt;
            &amp;lt;/summary&amp;gt;
            &amp;lt;pre&amp;gt;&amp;lt;code class=&amp;quot;language-http&amp;quot;&amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
set-cookie: XSRF-TOKEN=eyJpdiI6IlpRaU1rdFFFRjcvOUNSKy8xbTdPUmc9PSIsInZhbHVlIjoiU0w3djNNSjZMN0VtSjdlbjErYS9ERnpBbGdqYXJKYjNtaUhTajN1NElOUWVPT3VRZ09zVSsyNStyd1FycCtHTzNaMStybGVLcTk3UUV6cGtjcGZ5VllnUS9iMVozbmNYemZMandoUnF3L0ZxMzdML2NpNHJYd1hPcFkyMUY3M3QiLCJtYWMiOiJkYjAzODgxNmYwNzYwYzNjM2NmNjRiOWFjNGJlNDNkZjQ3MzEwMjE0MGFhZDc4NzA3NTU4OWMxNTUyYTNhMDY2IiwidGFnIjoiIn0%3D; expires=Thu, 16 Jan 2025 11:53:54 GMT; Max-Age=7200; path=/; samesite=lax; laravel_session=eyJpdiI6ImpvN1FCZHZGV1RmcnorbGpDTnVmTHc9PSIsInZhbHVlIjoiVmlCcEhuVDA2M2tseFlIV0h0Rm5oRkoyVW1HWVArcHhYcXMzUi9FVHNua3IwRGtwM251cUdDQXpPeVNqMnN0WUV3S2IyeENPNW50SloxZGV4aHBnc1lHUmFlOWorNTdxbmNmTnJQQUFTdFlKZE9RTkN0aDJXaytGUGpoWmZkc1kiLCJtYWMiOiI1ZWZmYzY4NWQ4NGEzODYzMWE0Yjc3MzQ5ZjljZDE3MGI5NWVhNjI5NzMyNGE0NDI1ZjA2OTZkMDc2Y2ViYTVlIiwidGFnIjoiIn0%3D; expires=Thu, 16 Jan 2025 11:53:54 GMT; Max-Age=7200; path=/; httponly; samesite=lax
 &amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;&amp;lt;/details&amp;gt;         &amp;lt;pre&amp;gt;

&amp;lt;code class=&amp;quot;language-json&amp;quot; style=&amp;quot;max-height: 300px;&amp;quot;&amp;gt;&amp;amp;lt;!doctype html&amp;amp;gt;
&amp;amp;lt;html lang=&amp;amp;quot;en&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;head&amp;amp;gt;
    &amp;amp;lt;meta charset=&amp;amp;quot;utf-8&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;meta content=&amp;amp;quot;IE=edge,chrome=1&amp;amp;quot; http-equiv=&amp;amp;quot;X-UA-Compatible&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;meta name=&amp;amp;quot;viewport&amp;amp;quot; content=&amp;amp;quot;width=device-width, initial-scale=1, maximum-scale=1&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;title&amp;amp;gt;Laravel Documentation&amp;amp;lt;/title&amp;amp;gt;

    &amp;amp;lt;link href=&amp;amp;quot;https://fonts.googleapis.com/css?family=Open+Sans&amp;amp;amp;display=swap&amp;amp;quot; rel=&amp;amp;quot;stylesheet&amp;amp;quot;&amp;amp;gt;

    &amp;amp;lt;link rel=&amp;amp;quot;stylesheet&amp;amp;quot; href=&amp;amp;quot;http://localhost/vendor/scribe/css/theme-default.style.css&amp;amp;quot; media=&amp;amp;quot;screen&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;link rel=&amp;amp;quot;stylesheet&amp;amp;quot; href=&amp;amp;quot;http://localhost/vendor/scribe/css/theme-default.print.css&amp;amp;quot; media=&amp;amp;quot;print&amp;amp;quot;&amp;amp;gt;

    &amp;amp;lt;script src=&amp;amp;quot;https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/script&amp;amp;gt;

    &amp;amp;lt;link rel=&amp;amp;quot;stylesheet&amp;amp;quot;
          href=&amp;amp;quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;script src=&amp;amp;quot;https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/script&amp;amp;gt;

    &amp;amp;lt;script src=&amp;amp;quot;https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/script&amp;amp;gt;

    &amp;amp;lt;style id=&amp;amp;quot;language-style&amp;amp;quot;&amp;amp;gt;
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            &amp;amp;lt;/style&amp;amp;gt;

    &amp;amp;lt;script&amp;amp;gt;
        var tryItOutBaseUrl = &amp;amp;quot;http://localhost&amp;amp;quot;;
        var useCsrf = Boolean();
        var csrfUrl = &amp;amp;quot;/sanctum/csrf-cookie&amp;amp;quot;;
    &amp;amp;lt;/script&amp;amp;gt;
    &amp;amp;lt;script src=&amp;amp;quot;http://localhost/vendor/scribe/js/tryitout-4.39.0.js&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/script&amp;amp;gt;

    &amp;amp;lt;script src=&amp;amp;quot;http://localhost/vendor/scribe/js/theme-default-4.39.0.js&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/script&amp;amp;gt;

&amp;amp;lt;/head&amp;amp;gt;

&amp;amp;lt;body data-languages=&amp;amp;quot;[&amp;amp;amp;quot;bash&amp;amp;amp;quot;,&amp;amp;amp;quot;javascript&amp;amp;amp;quot;]&amp;amp;quot;&amp;amp;gt;

&amp;amp;lt;a href=&amp;amp;quot;#&amp;amp;quot; id=&amp;amp;quot;nav-button&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;span&amp;amp;gt;
        MENU
        &amp;amp;lt;img src=&amp;amp;quot;http://localhost/vendor/scribe/images/navbar.png&amp;amp;quot; alt=&amp;amp;quot;navbar-image&amp;amp;quot;/&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;/a&amp;amp;gt;
&amp;amp;lt;div class=&amp;amp;quot;tocify-wrapper&amp;amp;quot;&amp;amp;gt;
    
            &amp;amp;lt;div class=&amp;amp;quot;lang-selector&amp;amp;quot;&amp;amp;gt;
                                            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot; class=&amp;amp;quot;lang-button&amp;amp;quot; data-language-name=&amp;amp;quot;bash&amp;amp;quot;&amp;amp;gt;bash&amp;amp;lt;/button&amp;amp;gt;
                                            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot; class=&amp;amp;quot;lang-button&amp;amp;quot; data-language-name=&amp;amp;quot;javascript&amp;amp;quot;&amp;amp;gt;javascript&amp;amp;lt;/button&amp;amp;gt;
                    &amp;amp;lt;/div&amp;amp;gt;
    
    &amp;amp;lt;div class=&amp;amp;quot;search&amp;amp;quot;&amp;amp;gt;
        &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; class=&amp;amp;quot;search&amp;amp;quot; id=&amp;amp;quot;input-search&amp;amp;quot; placeholder=&amp;amp;quot;Search&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;/div&amp;amp;gt;

    &amp;amp;lt;div id=&amp;amp;quot;toc&amp;amp;quot;&amp;amp;gt;
                    &amp;amp;lt;ul id=&amp;amp;quot;tocify-header-introduction&amp;amp;quot; class=&amp;amp;quot;tocify-header&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-1&amp;amp;quot; data-unique=&amp;amp;quot;introduction&amp;amp;quot;&amp;amp;gt;
                    &amp;amp;lt;a href=&amp;amp;quot;#introduction&amp;amp;quot;&amp;amp;gt;Introduction&amp;amp;lt;/a&amp;amp;gt;
                &amp;amp;lt;/li&amp;amp;gt;
                            &amp;amp;lt;/ul&amp;amp;gt;
                    &amp;amp;lt;ul id=&amp;amp;quot;tocify-header-authenticating-requests&amp;amp;quot; class=&amp;amp;quot;tocify-header&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-1&amp;amp;quot; data-unique=&amp;amp;quot;authenticating-requests&amp;amp;quot;&amp;amp;gt;
                    &amp;amp;lt;a href=&amp;amp;quot;#authenticating-requests&amp;amp;quot;&amp;amp;gt;Authenticating requests&amp;amp;lt;/a&amp;amp;gt;
                &amp;amp;lt;/li&amp;amp;gt;
                            &amp;amp;lt;/ul&amp;amp;gt;
                    &amp;amp;lt;ul id=&amp;amp;quot;tocify-header-endpoints&amp;amp;quot; class=&amp;amp;quot;tocify-header&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-1&amp;amp;quot; data-unique=&amp;amp;quot;endpoints&amp;amp;quot;&amp;amp;gt;
                    &amp;amp;lt;a href=&amp;amp;quot;#endpoints&amp;amp;quot;&amp;amp;gt;Endpoints&amp;amp;lt;/a&amp;amp;gt;
                &amp;amp;lt;/li&amp;amp;gt;
                                    &amp;amp;lt;ul id=&amp;amp;quot;tocify-subheader-endpoints&amp;amp;quot; class=&amp;amp;quot;tocify-subheader&amp;amp;quot;&amp;amp;gt;
                                                    &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-POSTapi-register&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-POSTapi-register&amp;amp;quot;&amp;amp;gt;POST api/register&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-POSTapi-login&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-POSTapi-login&amp;amp;quot;&amp;amp;gt;POST api/login&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-profile&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-profile&amp;amp;quot;&amp;amp;gt;GET api/profile&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-user--id-&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-user--id-&amp;amp;quot;&amp;amp;gt;GET api/user/{id}&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-logout&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-logout&amp;amp;quot;&amp;amp;gt;GET api/logout&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-POSTapi-change-password&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-POSTapi-change-password&amp;amp;quot;&amp;amp;gt;POST api/change-password&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-admin&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-admin&amp;amp;quot;&amp;amp;gt;GET api/admin&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-POSTapi-suggest-add&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-POSTapi-suggest-add&amp;amp;quot;&amp;amp;gt;POST api/suggest/add&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-suggest&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-suggest&amp;amp;quot;&amp;amp;gt;GET api/suggest&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-PUTapi-suggest--id--reviewed&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-PUTapi-suggest--id--reviewed&amp;amp;quot;&amp;amp;gt;PUT api/suggest/{id}/reviewed&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-DELETEapi-suggest--id-&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-DELETEapi-suggest--id-&amp;amp;quot;&amp;amp;gt;DELETE api/suggest/{id}&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-kebab-showAll&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-kebab-showAll&amp;amp;quot;&amp;amp;gt;GET api/kebab/showAll&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-kebab-show--id-&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-kebab-show--id-&amp;amp;quot;&amp;amp;gt;GET api/kebab/show/{id}&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-POSTapi-kebab-add&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-POSTapi-kebab-add&amp;amp;quot;&amp;amp;gt;POST api/kebab/add&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-PUTapi-kebab-update--id-&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-PUTapi-kebab-update--id-&amp;amp;quot;&amp;amp;gt;PUT api/kebab/update/{id}&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-DELETEapi-kebab-delete--id-&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-DELETEapi-kebab-delete--id-&amp;amp;quot;&amp;amp;gt;DELETE api/kebab/delete/{id}&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-kebab-details--id-&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-kebab-details--id-&amp;amp;quot;&amp;amp;gt;GET api/kebab/details/{id}&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                                &amp;amp;lt;li class=&amp;amp;quot;tocify-item level-2&amp;amp;quot; data-unique=&amp;amp;quot;endpoints-GETapi-kebab-filter&amp;amp;quot;&amp;amp;gt;
                                &amp;amp;lt;a href=&amp;amp;quot;#endpoints-GETapi-kebab-filter&amp;amp;quot;&amp;amp;gt;GET api/kebab/filter&amp;amp;lt;/a&amp;amp;gt;
                            &amp;amp;lt;/li&amp;amp;gt;
                                                                        &amp;amp;lt;/ul&amp;amp;gt;
                            &amp;amp;lt;/ul&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;

    &amp;amp;lt;ul class=&amp;amp;quot;toc-footer&amp;amp;quot; id=&amp;amp;quot;toc-footer&amp;amp;quot;&amp;amp;gt;
                    &amp;amp;lt;li style=&amp;amp;quot;padding-bottom: 5px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;a href=&amp;amp;quot;http://localhost/docs.postman&amp;amp;quot;&amp;amp;gt;View Postman collection&amp;amp;lt;/a&amp;amp;gt;&amp;amp;lt;/li&amp;amp;gt;
                            &amp;amp;lt;li style=&amp;amp;quot;padding-bottom: 5px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;a href=&amp;amp;quot;http://localhost/docs.openapi&amp;amp;quot;&amp;amp;gt;View OpenAPI spec&amp;amp;lt;/a&amp;amp;gt;&amp;amp;lt;/li&amp;amp;gt;
                &amp;amp;lt;li&amp;amp;gt;&amp;amp;lt;a href=&amp;amp;quot;http://github.com/knuckleswtf/scribe&amp;amp;quot;&amp;amp;gt;Documentation powered by Scribe ✍&amp;amp;lt;/a&amp;amp;gt;&amp;amp;lt;/li&amp;amp;gt;
    &amp;amp;lt;/ul&amp;amp;gt;

    &amp;amp;lt;ul class=&amp;amp;quot;toc-footer&amp;amp;quot; id=&amp;amp;quot;last-updated&amp;amp;quot;&amp;amp;gt;
        &amp;amp;lt;li&amp;amp;gt;Last updated: January 16, 2025&amp;amp;lt;/li&amp;amp;gt;
    &amp;amp;lt;/ul&amp;amp;gt;
&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;div class=&amp;amp;quot;page-wrapper&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;div class=&amp;amp;quot;dark-box&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;
    &amp;amp;lt;div class=&amp;amp;quot;content&amp;amp;quot;&amp;amp;gt;
        &amp;amp;lt;h1 id=&amp;amp;quot;introduction&amp;amp;quot;&amp;amp;gt;Introduction&amp;amp;lt;/h1&amp;amp;gt;
&amp;amp;lt;aside&amp;amp;gt;
    &amp;amp;lt;strong&amp;amp;gt;Base URL&amp;amp;lt;/strong&amp;amp;gt;: &amp;amp;lt;code&amp;amp;gt;http://localhost&amp;amp;lt;/code&amp;amp;gt;
&amp;amp;lt;/aside&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;This documentation aims to provide all the information you need to work with our API.&amp;amp;lt;/p&amp;amp;gt;
&amp;amp;lt;aside&amp;amp;gt;As you scroll, you&amp;amp;#039;ll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&amp;amp;lt;/aside&amp;amp;gt;

        &amp;amp;lt;h1 id=&amp;amp;quot;authenticating-requests&amp;amp;quot;&amp;amp;gt;Authenticating requests&amp;amp;lt;/h1&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;This API is not authenticated.&amp;amp;lt;/p&amp;amp;gt;

        &amp;amp;lt;h1 id=&amp;amp;quot;endpoints&amp;amp;quot;&amp;amp;gt;Endpoints&amp;amp;lt;/h1&amp;amp;gt;

    

                                &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-POSTapi-register&amp;amp;quot;&amp;amp;gt;POST api/register&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-POSTapi-register&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request POST \
    &amp;amp;quot;http://localhost/api/register&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/register&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;POST&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-POSTapi-register&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-POSTapi-register&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-POSTapi-register&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-POSTapi-register&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-POSTapi-register&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-POSTapi-register&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-POSTapi-register&amp;amp;quot; data-method=&amp;amp;quot;POST&amp;amp;quot;
      data-path=&amp;amp;quot;api/register&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;POSTapi-register&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-POSTapi-register&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;POSTapi-register&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-POSTapi-register&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;POSTapi-register&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-POSTapi-register&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-black&amp;amp;quot;&amp;amp;gt;POST&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/register&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-register&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-register&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-POSTapi-login&amp;amp;quot;&amp;amp;gt;POST api/login&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-POSTapi-login&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request POST \
    &amp;amp;quot;http://localhost/api/login&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/login&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;POST&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-POSTapi-login&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-POSTapi-login&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-POSTapi-login&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-POSTapi-login&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-POSTapi-login&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-POSTapi-login&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-POSTapi-login&amp;amp;quot; data-method=&amp;amp;quot;POST&amp;amp;quot;
      data-path=&amp;amp;quot;api/login&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;POSTapi-login&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-POSTapi-login&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;POSTapi-login&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-POSTapi-login&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;POSTapi-login&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-POSTapi-login&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-black&amp;amp;quot;&amp;amp;gt;POST&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/login&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-login&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-login&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-profile&amp;amp;quot;&amp;amp;gt;GET api/profile&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-profile&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/profile&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/profile&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-profile&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-profile&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-profile&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-profile&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-profile&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-profile&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-profile&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/profile&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-profile&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-profile&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-profile&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-profile&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-profile&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-profile&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/profile&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-profile&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-profile&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-user--id-&amp;amp;quot;&amp;amp;gt;GET api/user/{id}&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-user--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/user/fugiat&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/user/fugiat&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-user--id-&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-user--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-user--id-&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-user--id-&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-user--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-user--id-&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-user--id-&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/user/{id}&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-user--id-&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-user--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-user--id-&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-user--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-user--id-&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-user--id-&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/user/{id}&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-user--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-user--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;URL Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                    &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;id&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;id&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-user--id-&amp;amp;quot;
               value=&amp;amp;quot;fugiat&amp;amp;quot;
               data-component=&amp;amp;quot;url&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;The ID of the user. Example: &amp;amp;lt;code&amp;amp;gt;fugiat&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                    &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-logout&amp;amp;quot;&amp;amp;gt;GET api/logout&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-logout&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/logout&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/logout&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-logout&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-logout&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-logout&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-logout&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-logout&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-logout&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-logout&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/logout&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-logout&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-logout&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-logout&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-logout&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-logout&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-logout&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/logout&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-logout&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-logout&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-POSTapi-change-password&amp;amp;quot;&amp;amp;gt;POST api/change-password&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-POSTapi-change-password&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request POST \
    &amp;amp;quot;http://localhost/api/change-password&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/change-password&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;POST&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-POSTapi-change-password&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-POSTapi-change-password&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-POSTapi-change-password&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-POSTapi-change-password&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-POSTapi-change-password&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-POSTapi-change-password&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-POSTapi-change-password&amp;amp;quot; data-method=&amp;amp;quot;POST&amp;amp;quot;
      data-path=&amp;amp;quot;api/change-password&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;POSTapi-change-password&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-POSTapi-change-password&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;POSTapi-change-password&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-POSTapi-change-password&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;POSTapi-change-password&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-POSTapi-change-password&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-black&amp;amp;quot;&amp;amp;gt;POST&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/change-password&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-change-password&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-change-password&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-admin&amp;amp;quot;&amp;amp;gt;GET api/admin&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-admin&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/admin&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/admin&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-admin&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-admin&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-admin&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-admin&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-admin&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-admin&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-admin&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/admin&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-admin&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-admin&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-admin&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-admin&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-admin&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-admin&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/admin&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-admin&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-admin&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-POSTapi-suggest-add&amp;amp;quot;&amp;amp;gt;POST api/suggest/add&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-POSTapi-suggest-add&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request POST \
    &amp;amp;quot;http://localhost/api/suggest/add&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot; \
    --data &amp;amp;quot;{
    \&amp;amp;quot;subject\&amp;amp;quot;: \&amp;amp;quot;k\&amp;amp;quot;
}&amp;amp;quot;
&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/suggest/add&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

let body = {
    &amp;amp;quot;subject&amp;amp;quot;: &amp;amp;quot;k&amp;amp;quot;
};

fetch(url, {
    method: &amp;amp;quot;POST&amp;amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-POSTapi-suggest-add&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-POSTapi-suggest-add&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-POSTapi-suggest-add&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-POSTapi-suggest-add&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-POSTapi-suggest-add&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-POSTapi-suggest-add&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-POSTapi-suggest-add&amp;amp;quot; data-method=&amp;amp;quot;POST&amp;amp;quot;
      data-path=&amp;amp;quot;api/suggest/add&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;POSTapi-suggest-add&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-POSTapi-suggest-add&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;POSTapi-suggest-add&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-POSTapi-suggest-add&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;POSTapi-suggest-add&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-POSTapi-suggest-add&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-black&amp;amp;quot;&amp;amp;gt;POST&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/suggest/add&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-suggest-add&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-suggest-add&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Body Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
        &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;subject&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;subject&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-suggest-add&amp;amp;quot;
               value=&amp;amp;quot;k&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must not be greater than 1000 characters. Example: &amp;amp;lt;code&amp;amp;gt;k&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-suggest&amp;amp;quot;&amp;amp;gt;GET api/suggest&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-suggest&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/suggest&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/suggest&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-suggest&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-suggest&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-suggest&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-suggest&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-suggest&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-suggest&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-suggest&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/suggest&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-suggest&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-suggest&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-suggest&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-suggest&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-suggest&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-suggest&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/suggest&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-suggest&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-suggest&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-PUTapi-suggest--id--reviewed&amp;amp;quot;&amp;amp;gt;PUT api/suggest/{id}/reviewed&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-PUTapi-suggest--id--reviewed&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request PUT \
    &amp;amp;quot;http://localhost/api/suggest/sapiente/reviewed&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/suggest/sapiente/reviewed&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;PUT&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-PUTapi-suggest--id--reviewed&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-PUTapi-suggest--id--reviewed&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-PUTapi-suggest--id--reviewed&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-PUTapi-suggest--id--reviewed&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-PUTapi-suggest--id--reviewed&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-PUTapi-suggest--id--reviewed&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-PUTapi-suggest--id--reviewed&amp;amp;quot; data-method=&amp;amp;quot;PUT&amp;amp;quot;
      data-path=&amp;amp;quot;api/suggest/{id}/reviewed&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;PUTapi-suggest--id--reviewed&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-PUTapi-suggest--id--reviewed&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;PUTapi-suggest--id--reviewed&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-PUTapi-suggest--id--reviewed&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;PUTapi-suggest--id--reviewed&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-PUTapi-suggest--id--reviewed&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-darkblue&amp;amp;quot;&amp;amp;gt;PUT&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/suggest/{id}/reviewed&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-suggest--id--reviewed&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-suggest--id--reviewed&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;URL Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                    &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;id&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;id&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-suggest--id--reviewed&amp;amp;quot;
               value=&amp;amp;quot;sapiente&amp;amp;quot;
               data-component=&amp;amp;quot;url&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;The ID of the suggest. Example: &amp;amp;lt;code&amp;amp;gt;sapiente&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                    &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-DELETEapi-suggest--id-&amp;amp;quot;&amp;amp;gt;DELETE api/suggest/{id}&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-DELETEapi-suggest--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request DELETE \
    &amp;amp;quot;http://localhost/api/suggest/et&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/suggest/et&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;DELETE&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-DELETEapi-suggest--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-DELETEapi-suggest--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-DELETEapi-suggest--id-&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-DELETEapi-suggest--id-&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-DELETEapi-suggest--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-DELETEapi-suggest--id-&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-DELETEapi-suggest--id-&amp;amp;quot; data-method=&amp;amp;quot;DELETE&amp;amp;quot;
      data-path=&amp;amp;quot;api/suggest/{id}&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;DELETEapi-suggest--id-&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-DELETEapi-suggest--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;DELETEapi-suggest--id-&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-DELETEapi-suggest--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;DELETEapi-suggest--id-&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-DELETEapi-suggest--id-&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-red&amp;amp;quot;&amp;amp;gt;DELETE&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/suggest/{id}&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;DELETEapi-suggest--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;DELETEapi-suggest--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;URL Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                    &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;id&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;id&amp;amp;quot;                data-endpoint=&amp;amp;quot;DELETEapi-suggest--id-&amp;amp;quot;
               value=&amp;amp;quot;et&amp;amp;quot;
               data-component=&amp;amp;quot;url&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;The ID of the suggest. Example: &amp;amp;lt;code&amp;amp;gt;et&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                    &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-kebab-showAll&amp;amp;quot;&amp;amp;gt;GET api/kebab/showAll&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-kebab-showAll&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/kebab/showAll&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/kebab/showAll&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-kebab-showAll&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-kebab-showAll&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-kebab-showAll&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-kebab-showAll&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-kebab-showAll&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-kebab-showAll&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-kebab-showAll&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/kebab/showAll&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-kebab-showAll&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-kebab-showAll&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-kebab-showAll&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-kebab-showAll&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-kebab-showAll&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-kebab-showAll&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/kebab/showAll&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-showAll&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-showAll&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-kebab-show--id-&amp;amp;quot;&amp;amp;gt;GET api/kebab/show/{id}&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-kebab-show--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/kebab/show/eligendi&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/kebab/show/eligendi&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-kebab-show--id-&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-kebab-show--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-kebab-show--id-&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-kebab-show--id-&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-kebab-show--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-kebab-show--id-&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-kebab-show--id-&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/kebab/show/{id}&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-kebab-show--id-&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-kebab-show--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-kebab-show--id-&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-kebab-show--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-kebab-show--id-&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-kebab-show--id-&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/kebab/show/{id}&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-show--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-show--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;URL Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                    &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;id&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;id&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-show--id-&amp;amp;quot;
               value=&amp;amp;quot;eligendi&amp;amp;quot;
               data-component=&amp;amp;quot;url&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;The ID of the show. Example: &amp;amp;lt;code&amp;amp;gt;eligendi&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                    &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-POSTapi-kebab-add&amp;amp;quot;&amp;amp;gt;POST api/kebab/add&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-POSTapi-kebab-add&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request POST \
    &amp;amp;quot;http://localhost/api/kebab/add&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot; \
    --data &amp;amp;quot;{
    \&amp;amp;quot;name\&amp;amp;quot;: \&amp;amp;quot;kne\&amp;amp;quot;,
    \&amp;amp;quot;logo\&amp;amp;quot;: \&amp;amp;quot;qui\&amp;amp;quot;,
    \&amp;amp;quot;address\&amp;amp;quot;: \&amp;amp;quot;consequuntur\&amp;amp;quot;,
    \&amp;amp;quot;latitude\&amp;amp;quot;: 43618.91322593,
    \&amp;amp;quot;longitude\&amp;amp;quot;: 73382.80779285,
    \&amp;amp;quot;year_opened\&amp;amp;quot;: 15,
    \&amp;amp;quot;year_closed\&amp;amp;quot;: 19,
    \&amp;amp;quot;opening_hours\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;facere\\\&amp;amp;quot;,\\\&amp;amp;quot;et\\\&amp;amp;quot;]\&amp;amp;quot;,
    \&amp;amp;quot;meat_types\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;error\\\&amp;amp;quot;,\\\&amp;amp;quot;hic\\\&amp;amp;quot;]\&amp;amp;quot;,
    \&amp;amp;quot;sauces\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;quia\\\&amp;amp;quot;,\\\&amp;amp;quot;et\\\&amp;amp;quot;]\&amp;amp;quot;,
    \&amp;amp;quot;status\&amp;amp;quot;: \&amp;amp;quot;tenetur\&amp;amp;quot;,
    \&amp;amp;quot;is_craft\&amp;amp;quot;: true,
    \&amp;amp;quot;is_in_stall\&amp;amp;quot;: true,
    \&amp;amp;quot;is_chain_member\&amp;amp;quot;: false,
    \&amp;amp;quot;ordering_options\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;esse\\\&amp;amp;quot;,\\\&amp;amp;quot;totam\\\&amp;amp;quot;]\&amp;amp;quot;
}&amp;amp;quot;
&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/kebab/add&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

let body = {
    &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;kne&amp;amp;quot;,
    &amp;amp;quot;logo&amp;amp;quot;: &amp;amp;quot;qui&amp;amp;quot;,
    &amp;amp;quot;address&amp;amp;quot;: &amp;amp;quot;consequuntur&amp;amp;quot;,
    &amp;amp;quot;latitude&amp;amp;quot;: 43618.91322593,
    &amp;amp;quot;longitude&amp;amp;quot;: 73382.80779285,
    &amp;amp;quot;year_opened&amp;amp;quot;: 15,
    &amp;amp;quot;year_closed&amp;amp;quot;: 19,
    &amp;amp;quot;opening_hours&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;facere\&amp;amp;quot;,\&amp;amp;quot;et\&amp;amp;quot;]&amp;amp;quot;,
    &amp;amp;quot;meat_types&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;error\&amp;amp;quot;,\&amp;amp;quot;hic\&amp;amp;quot;]&amp;amp;quot;,
    &amp;amp;quot;sauces&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;quia\&amp;amp;quot;,\&amp;amp;quot;et\&amp;amp;quot;]&amp;amp;quot;,
    &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;tenetur&amp;amp;quot;,
    &amp;amp;quot;is_craft&amp;amp;quot;: true,
    &amp;amp;quot;is_in_stall&amp;amp;quot;: true,
    &amp;amp;quot;is_chain_member&amp;amp;quot;: false,
    &amp;amp;quot;ordering_options&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;esse\&amp;amp;quot;,\&amp;amp;quot;totam\&amp;amp;quot;]&amp;amp;quot;
};

fetch(url, {
    method: &amp;amp;quot;POST&amp;amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-POSTapi-kebab-add&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-POSTapi-kebab-add&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-POSTapi-kebab-add&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-POSTapi-kebab-add&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-POSTapi-kebab-add&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-POSTapi-kebab-add&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-POSTapi-kebab-add&amp;amp;quot; data-method=&amp;amp;quot;POST&amp;amp;quot;
      data-path=&amp;amp;quot;api/kebab/add&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;POSTapi-kebab-add&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-POSTapi-kebab-add&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;POSTapi-kebab-add&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-POSTapi-kebab-add&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;POSTapi-kebab-add&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-POSTapi-kebab-add&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-black&amp;amp;quot;&amp;amp;gt;POST&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/kebab/add&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Body Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
        &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;name&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;name&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;kne&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must not be greater than 255 characters. Example: &amp;amp;lt;code&amp;amp;gt;kne&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;logo&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;logo&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;qui&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;qui&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;address&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;address&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;consequuntur&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;consequuntur&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;latitude&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;number&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;latitude&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;43618.91322593&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;43618.91322593&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;longitude&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;number&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;longitude&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;73382.80779285&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;73382.80779285&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;year_opened&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;integer&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;year_opened&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;15&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;15&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;year_closed&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;integer&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;year_closed&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;19&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;19&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;opening_hours&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;opening_hours&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;facere&amp;amp;quot;,&amp;amp;quot;et&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;facere&amp;amp;quot;,&amp;amp;quot;et&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;meat_types&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;meat_types&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;error&amp;amp;quot;,&amp;amp;quot;hic&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;error&amp;amp;quot;,&amp;amp;quot;hic&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;sauces&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;sauces&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;quia&amp;amp;quot;,&amp;amp;quot;et&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;quia&amp;amp;quot;,&amp;amp;quot;et&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;status&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;status&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;tenetur&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;tenetur&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;is_craft&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;boolean&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;label data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_craft&amp;amp;quot;
                   value=&amp;amp;quot;true&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
        &amp;amp;lt;label data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_craft&amp;amp;quot;
                   value=&amp;amp;quot;false&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;is_in_stall&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;boolean&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;label data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_in_stall&amp;amp;quot;
                   value=&amp;amp;quot;true&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
        &amp;amp;lt;label data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_in_stall&amp;amp;quot;
                   value=&amp;amp;quot;false&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;is_chain_member&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;boolean&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;label data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_chain_member&amp;amp;quot;
                   value=&amp;amp;quot;true&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
        &amp;amp;lt;label data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_chain_member&amp;amp;quot;
                   value=&amp;amp;quot;false&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;ordering_options&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;ordering_options&amp;amp;quot;                data-endpoint=&amp;amp;quot;POSTapi-kebab-add&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;esse&amp;amp;quot;,&amp;amp;quot;totam&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;esse&amp;amp;quot;,&amp;amp;quot;totam&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-PUTapi-kebab-update--id-&amp;amp;quot;&amp;amp;gt;PUT api/kebab/update/{id}&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-PUTapi-kebab-update--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request PUT \
    &amp;amp;quot;http://localhost/api/kebab/update/adipisci&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot; \
    --data &amp;amp;quot;{
    \&amp;amp;quot;name\&amp;amp;quot;: \&amp;amp;quot;qao\&amp;amp;quot;,
    \&amp;amp;quot;logo\&amp;amp;quot;: \&amp;amp;quot;aspernatur\&amp;amp;quot;,
    \&amp;amp;quot;address\&amp;amp;quot;: \&amp;amp;quot;est\&amp;amp;quot;,
    \&amp;amp;quot;latitude\&amp;amp;quot;: 4856462,
    \&amp;amp;quot;longitude\&amp;amp;quot;: 705227.1121292,
    \&amp;amp;quot;year_opened\&amp;amp;quot;: 3,
    \&amp;amp;quot;year_closed\&amp;amp;quot;: 12,
    \&amp;amp;quot;opening_hours\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;delectus\\\&amp;amp;quot;,\\\&amp;amp;quot;aut\\\&amp;amp;quot;]\&amp;amp;quot;,
    \&amp;amp;quot;meat_types\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;harum\\\&amp;amp;quot;,\\\&amp;amp;quot;non\\\&amp;amp;quot;]\&amp;amp;quot;,
    \&amp;amp;quot;sauces\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;rerum\\\&amp;amp;quot;,\\\&amp;amp;quot;reiciendis\\\&amp;amp;quot;]\&amp;amp;quot;,
    \&amp;amp;quot;status\&amp;amp;quot;: \&amp;amp;quot;qui\&amp;amp;quot;,
    \&amp;amp;quot;is_craft\&amp;amp;quot;: false,
    \&amp;amp;quot;is_in_stall\&amp;amp;quot;: true,
    \&amp;amp;quot;is_chain_member\&amp;amp;quot;: false,
    \&amp;amp;quot;ordering_options\&amp;amp;quot;: \&amp;amp;quot;[\\\&amp;amp;quot;harum\\\&amp;amp;quot;,\\\&amp;amp;quot;suscipit\\\&amp;amp;quot;]\&amp;amp;quot;
}&amp;amp;quot;
&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/kebab/update/adipisci&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

let body = {
    &amp;amp;quot;name&amp;amp;quot;: &amp;amp;quot;qao&amp;amp;quot;,
    &amp;amp;quot;logo&amp;amp;quot;: &amp;amp;quot;aspernatur&amp;amp;quot;,
    &amp;amp;quot;address&amp;amp;quot;: &amp;amp;quot;est&amp;amp;quot;,
    &amp;amp;quot;latitude&amp;amp;quot;: 4856462,
    &amp;amp;quot;longitude&amp;amp;quot;: 705227.1121292,
    &amp;amp;quot;year_opened&amp;amp;quot;: 3,
    &amp;amp;quot;year_closed&amp;amp;quot;: 12,
    &amp;amp;quot;opening_hours&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;delectus\&amp;amp;quot;,\&amp;amp;quot;aut\&amp;amp;quot;]&amp;amp;quot;,
    &amp;amp;quot;meat_types&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;harum\&amp;amp;quot;,\&amp;amp;quot;non\&amp;amp;quot;]&amp;amp;quot;,
    &amp;amp;quot;sauces&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;rerum\&amp;amp;quot;,\&amp;amp;quot;reiciendis\&amp;amp;quot;]&amp;amp;quot;,
    &amp;amp;quot;status&amp;amp;quot;: &amp;amp;quot;qui&amp;amp;quot;,
    &amp;amp;quot;is_craft&amp;amp;quot;: false,
    &amp;amp;quot;is_in_stall&amp;amp;quot;: true,
    &amp;amp;quot;is_chain_member&amp;amp;quot;: false,
    &amp;amp;quot;ordering_options&amp;amp;quot;: &amp;amp;quot;[\&amp;amp;quot;harum\&amp;amp;quot;,\&amp;amp;quot;suscipit\&amp;amp;quot;]&amp;amp;quot;
};

fetch(url, {
    method: &amp;amp;quot;PUT&amp;amp;quot;,
    headers,
    body: JSON.stringify(body),
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-PUTapi-kebab-update--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-PUTapi-kebab-update--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-PUTapi-kebab-update--id-&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-PUTapi-kebab-update--id-&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-PUTapi-kebab-update--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-PUTapi-kebab-update--id-&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-PUTapi-kebab-update--id-&amp;amp;quot; data-method=&amp;amp;quot;PUT&amp;amp;quot;
      data-path=&amp;amp;quot;api/kebab/update/{id}&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;PUTapi-kebab-update--id-&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-PUTapi-kebab-update--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;PUTapi-kebab-update--id-&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-PUTapi-kebab-update--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;PUTapi-kebab-update--id-&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-PUTapi-kebab-update--id-&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-darkblue&amp;amp;quot;&amp;amp;gt;PUT&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/kebab/update/{id}&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;URL Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                    &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;id&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;id&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;adipisci&amp;amp;quot;
               data-component=&amp;amp;quot;url&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;The ID of the update. Example: &amp;amp;lt;code&amp;amp;gt;adipisci&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                            &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Body Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
        &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;name&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;name&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;qao&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must not be greater than 255 characters. Example: &amp;amp;lt;code&amp;amp;gt;qao&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;logo&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;logo&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;aspernatur&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;aspernatur&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;address&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;address&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;est&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;est&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;latitude&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;number&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;latitude&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;4856462&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;4856462&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;longitude&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;number&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;longitude&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;705227.1121292&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;705227.1121292&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;year_opened&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;integer&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;year_opened&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;3&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;3&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;year_closed&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;integer&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;number&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
               step=&amp;amp;quot;any&amp;amp;quot;               name=&amp;amp;quot;year_closed&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;12&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;12&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;opening_hours&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;opening_hours&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;delectus&amp;amp;quot;,&amp;amp;quot;aut&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;delectus&amp;amp;quot;,&amp;amp;quot;aut&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;meat_types&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;meat_types&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;harum&amp;amp;quot;,&amp;amp;quot;non&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;harum&amp;amp;quot;,&amp;amp;quot;non&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;sauces&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;sauces&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;rerum&amp;amp;quot;,&amp;amp;quot;reiciendis&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;rerum&amp;amp;quot;,&amp;amp;quot;reiciendis&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;status&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;status&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;qui&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;qui&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;is_craft&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;boolean&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;label data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_craft&amp;amp;quot;
                   value=&amp;amp;quot;true&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
        &amp;amp;lt;label data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_craft&amp;amp;quot;
                   value=&amp;amp;quot;false&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;is_in_stall&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;boolean&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;label data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_in_stall&amp;amp;quot;
                   value=&amp;amp;quot;true&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
        &amp;amp;lt;label data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_in_stall&amp;amp;quot;
                   value=&amp;amp;quot;false&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;is_chain_member&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;boolean&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
&amp;amp;lt;i&amp;amp;gt;optional&amp;amp;lt;/i&amp;amp;gt; &amp;amp;amp;nbsp;
                &amp;amp;lt;label data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_chain_member&amp;amp;quot;
                   value=&amp;amp;quot;true&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;true&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
        &amp;amp;lt;label data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;input type=&amp;amp;quot;radio&amp;amp;quot; name=&amp;amp;quot;is_chain_member&amp;amp;quot;
                   value=&amp;amp;quot;false&amp;amp;quot;
                   data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
                   data-component=&amp;amp;quot;body&amp;amp;quot;             &amp;amp;gt;
            &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;
        &amp;amp;lt;/label&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;false&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
                &amp;amp;lt;div style=&amp;amp;quot; padding-left: 28px;  clear: unset;&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;ordering_options&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;ordering_options&amp;amp;quot;                data-endpoint=&amp;amp;quot;PUTapi-kebab-update--id-&amp;amp;quot;
               value=&amp;amp;quot;[&amp;amp;quot;harum&amp;amp;quot;,&amp;amp;quot;suscipit&amp;amp;quot;]&amp;amp;quot;
               data-component=&amp;amp;quot;body&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Must be a valid JSON string. Example: &amp;amp;lt;code&amp;amp;gt;[&amp;amp;quot;harum&amp;amp;quot;,&amp;amp;quot;suscipit&amp;amp;quot;]&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/div&amp;amp;gt;
        &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-DELETEapi-kebab-delete--id-&amp;amp;quot;&amp;amp;gt;DELETE api/kebab/delete/{id}&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-DELETEapi-kebab-delete--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request DELETE \
    &amp;amp;quot;http://localhost/api/kebab/delete/quos&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/kebab/delete/quos&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;DELETE&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-DELETEapi-kebab-delete--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-DELETEapi-kebab-delete--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-DELETEapi-kebab-delete--id-&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-DELETEapi-kebab-delete--id-&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-DELETEapi-kebab-delete--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-DELETEapi-kebab-delete--id-&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-DELETEapi-kebab-delete--id-&amp;amp;quot; data-method=&amp;amp;quot;DELETE&amp;amp;quot;
      data-path=&amp;amp;quot;api/kebab/delete/{id}&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;DELETEapi-kebab-delete--id-&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-DELETEapi-kebab-delete--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;DELETEapi-kebab-delete--id-&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-DELETEapi-kebab-delete--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;DELETEapi-kebab-delete--id-&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-DELETEapi-kebab-delete--id-&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-red&amp;amp;quot;&amp;amp;gt;DELETE&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/kebab/delete/{id}&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;DELETEapi-kebab-delete--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;DELETEapi-kebab-delete--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;URL Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                    &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;id&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;id&amp;amp;quot;                data-endpoint=&amp;amp;quot;DELETEapi-kebab-delete--id-&amp;amp;quot;
               value=&amp;amp;quot;quos&amp;amp;quot;
               data-component=&amp;amp;quot;url&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;The ID of the delete. Example: &amp;amp;lt;code&amp;amp;gt;quos&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                    &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-kebab-details--id-&amp;amp;quot;&amp;amp;gt;GET api/kebab/details/{id}&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-kebab-details--id-&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/kebab/details/eum&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/kebab/details/eum&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-kebab-details--id-&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-kebab-details--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-kebab-details--id-&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-kebab-details--id-&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-kebab-details--id-&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-kebab-details--id-&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-kebab-details--id-&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/kebab/details/{id}&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-kebab-details--id-&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-kebab-details--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-kebab-details--id-&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-kebab-details--id-&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-kebab-details--id-&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-kebab-details--id-&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/kebab/details/{id}&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-details--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-details--id-&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;URL Parameters&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                    &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;id&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;lt;small&amp;amp;gt;string&amp;amp;lt;/small&amp;amp;gt;&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;id&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-details--id-&amp;amp;quot;
               value=&amp;amp;quot;eum&amp;amp;quot;
               data-component=&amp;amp;quot;url&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;The ID of the detail. Example: &amp;amp;lt;code&amp;amp;gt;eum&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                    &amp;amp;lt;/form&amp;amp;gt;

                    &amp;amp;lt;h2 id=&amp;amp;quot;endpoints-GETapi-kebab-filter&amp;amp;quot;&amp;amp;gt;GET api/kebab/filter&amp;amp;lt;/h2&amp;amp;gt;

&amp;amp;lt;p&amp;amp;gt;
&amp;amp;lt;/p&amp;amp;gt;



&amp;amp;lt;span id=&amp;amp;quot;example-requests-GETapi-kebab-filter&amp;amp;quot;&amp;amp;gt;
&amp;amp;lt;blockquote&amp;amp;gt;Example request:&amp;amp;lt;/blockquote&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;bash-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-bash&amp;amp;quot;&amp;amp;gt;curl --request GET \
    --get &amp;amp;quot;http://localhost/api/kebab/filter&amp;amp;quot; \
    --header &amp;amp;quot;Content-Type: application/json&amp;amp;quot; \
    --header &amp;amp;quot;Accept: application/json&amp;amp;quot;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;


&amp;amp;lt;div class=&amp;amp;quot;javascript-example&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-javascript&amp;amp;quot;&amp;amp;gt;const url = new URL(
    &amp;amp;quot;http://localhost/api/kebab/filter&amp;amp;quot;
);

const headers = {
    &amp;amp;quot;Content-Type&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
    &amp;amp;quot;Accept&amp;amp;quot;: &amp;amp;quot;application/json&amp;amp;quot;,
};

fetch(url, {
    method: &amp;amp;quot;GET&amp;amp;quot;,
    headers,
}).then(response =&amp;amp;amp;gt; response.json());&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/div&amp;amp;gt;

&amp;amp;lt;/span&amp;amp;gt;

&amp;amp;lt;span id=&amp;amp;quot;example-responses-GETapi-kebab-filter&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;blockquote&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;Example response (401):&amp;amp;lt;/p&amp;amp;gt;
        &amp;amp;lt;/blockquote&amp;amp;gt;
                &amp;amp;lt;details class=&amp;amp;quot;annotation&amp;amp;quot;&amp;amp;gt;
            &amp;amp;lt;summary style=&amp;amp;quot;cursor: pointer;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;small onclick=&amp;amp;quot;textContent = parentElement.parentElement.open ? &amp;amp;#039;Show headers&amp;amp;#039; : &amp;amp;#039;Hide headers&amp;amp;#039;&amp;amp;quot;&amp;amp;gt;Show headers&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;/summary&amp;amp;gt;
            &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code class=&amp;amp;quot;language-http&amp;amp;quot;&amp;amp;gt;cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 &amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;&amp;amp;lt;/details&amp;amp;gt;         &amp;amp;lt;pre&amp;amp;gt;

&amp;amp;lt;code class=&amp;amp;quot;language-json&amp;amp;quot; style=&amp;amp;quot;max-height: 300px;&amp;amp;quot;&amp;amp;gt;{
    &amp;amp;amp;quot;message&amp;amp;amp;quot;: &amp;amp;amp;quot;Unauthenticated.&amp;amp;amp;quot;
}&amp;amp;lt;/code&amp;amp;gt;
 &amp;amp;lt;/pre&amp;amp;gt;
    &amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-results-GETapi-kebab-filter&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Received response&amp;amp;lt;span
                id=&amp;amp;quot;execution-response-status-GETapi-kebab-filter&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/span&amp;amp;gt;:
    &amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre class=&amp;amp;quot;json&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-response-content-GETapi-kebab-filter&amp;amp;quot;
      data-empty-response-text=&amp;amp;quot;&amp;amp;lt;Empty response&amp;amp;gt;&amp;amp;quot; style=&amp;amp;quot;max-height: 400px;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;span id=&amp;amp;quot;execution-error-GETapi-kebab-filter&amp;amp;quot; hidden&amp;amp;gt;
    &amp;amp;lt;blockquote&amp;amp;gt;Request failed with error:&amp;amp;lt;/blockquote&amp;amp;gt;
    &amp;amp;lt;pre&amp;amp;gt;&amp;amp;lt;code id=&amp;amp;quot;execution-error-message-GETapi-kebab-filter&amp;amp;quot;&amp;amp;gt;

Tip: Check that you&amp;amp;amp;#039;re properly connected to the network.
If you&amp;amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/pre&amp;amp;gt;
&amp;amp;lt;/span&amp;amp;gt;
&amp;amp;lt;form id=&amp;amp;quot;form-GETapi-kebab-filter&amp;amp;quot; data-method=&amp;amp;quot;GET&amp;amp;quot;
      data-path=&amp;amp;quot;api/kebab/filter&amp;amp;quot;
      data-authed=&amp;amp;quot;0&amp;amp;quot;
      data-hasfiles=&amp;amp;quot;0&amp;amp;quot;
      data-isarraybody=&amp;amp;quot;0&amp;amp;quot;
      autocomplete=&amp;amp;quot;off&amp;amp;quot;
      onsubmit=&amp;amp;quot;event.preventDefault(); executeTryOut(&amp;amp;#039;GETapi-kebab-filter&amp;amp;#039;, this);&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;h3&amp;amp;gt;
        Request&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
                    &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-tryout-GETapi-kebab-filter&amp;amp;quot;
                    onclick=&amp;amp;quot;tryItOut(&amp;amp;#039;GETapi-kebab-filter&amp;amp;#039;);&amp;amp;quot;&amp;amp;gt;Try it out ⚡
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-canceltryout-GETapi-kebab-filter&amp;amp;quot;
                    onclick=&amp;amp;quot;cancelTryOut(&amp;amp;#039;GETapi-kebab-filter&amp;amp;#039;);&amp;amp;quot; hidden&amp;amp;gt;Cancel 🛑
            &amp;amp;lt;/button&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
            &amp;amp;lt;button type=&amp;amp;quot;submit&amp;amp;quot;
                    style=&amp;amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;amp;quot;
                    id=&amp;amp;quot;btn-executetryout-GETapi-kebab-filter&amp;amp;quot;
                    data-initial-text=&amp;amp;quot;Send Request 💥&amp;amp;quot;
                    data-loading-text=&amp;amp;quot;⏱ Sending...&amp;amp;quot;
                    hidden&amp;amp;gt;Send Request 💥
            &amp;amp;lt;/button&amp;amp;gt;
            &amp;amp;lt;/h3&amp;amp;gt;
            &amp;amp;lt;p&amp;amp;gt;
            &amp;amp;lt;small class=&amp;amp;quot;badge badge-green&amp;amp;quot;&amp;amp;gt;GET&amp;amp;lt;/small&amp;amp;gt;
            &amp;amp;lt;b&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;api/kebab/filter&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;
        &amp;amp;lt;/p&amp;amp;gt;
                &amp;amp;lt;h4 class=&amp;amp;quot;fancy-heading-panel&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;b&amp;amp;gt;Headers&amp;amp;lt;/b&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Content-Type&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Content-Type&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-filter&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                                &amp;amp;lt;div style=&amp;amp;quot;padding-left: 28px; clear: unset;&amp;amp;quot;&amp;amp;gt;
                &amp;amp;lt;b style=&amp;amp;quot;line-height: 2;&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;code&amp;amp;gt;Accept&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/b&amp;amp;gt;&amp;amp;amp;nbsp;&amp;amp;amp;nbsp;
&amp;amp;amp;nbsp;
 &amp;amp;amp;nbsp;
                &amp;amp;lt;input type=&amp;amp;quot;text&amp;amp;quot; style=&amp;amp;quot;display: none&amp;amp;quot;
                              name=&amp;amp;quot;Accept&amp;amp;quot;                data-endpoint=&amp;amp;quot;GETapi-kebab-filter&amp;amp;quot;
               value=&amp;amp;quot;application/json&amp;amp;quot;
               data-component=&amp;amp;quot;header&amp;amp;quot;&amp;amp;gt;
    &amp;amp;lt;br&amp;amp;gt;
&amp;amp;lt;p&amp;amp;gt;Example: &amp;amp;lt;code&amp;amp;gt;application/json&amp;amp;lt;/code&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
                        &amp;amp;lt;/form&amp;amp;gt;

            

        
    &amp;amp;lt;/div&amp;amp;gt;
    &amp;amp;lt;div class=&amp;amp;quot;dark-box&amp;amp;quot;&amp;amp;gt;
                    &amp;amp;lt;div class=&amp;amp;quot;lang-selector&amp;amp;quot;&amp;amp;gt;
                                                        &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot; class=&amp;amp;quot;lang-button&amp;amp;quot; data-language-name=&amp;amp;quot;bash&amp;amp;quot;&amp;amp;gt;bash&amp;amp;lt;/button&amp;amp;gt;
                                                        &amp;amp;lt;button type=&amp;amp;quot;button&amp;amp;quot; class=&amp;amp;quot;lang-button&amp;amp;quot; data-language-name=&amp;amp;quot;javascript&amp;amp;quot;&amp;amp;gt;javascript&amp;amp;lt;/button&amp;amp;gt;
                            &amp;amp;lt;/div&amp;amp;gt;
            &amp;amp;lt;/div&amp;amp;gt;
&amp;amp;lt;/div&amp;amp;gt;
&amp;amp;lt;/body&amp;amp;gt;
&amp;amp;lt;/html&amp;amp;gt;
&amp;lt;/code&amp;gt;
 &amp;lt;/pre&amp;gt;
    &amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-results-GETapi-documentation&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Received response&amp;lt;span
                id=&amp;quot;execution-response-status-GETapi-documentation&amp;quot;&amp;gt;&amp;lt;/span&amp;gt;:
    &amp;lt;/blockquote&amp;gt;
    &amp;lt;pre class=&amp;quot;json&amp;quot;&amp;gt;&amp;lt;code id=&amp;quot;execution-response-content-GETapi-documentation&amp;quot;
      data-empty-response-text=&amp;quot;&amp;lt;Empty response&amp;gt;&amp;quot; style=&amp;quot;max-height: 400px;&amp;quot;&amp;gt;&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;span id=&amp;quot;execution-error-GETapi-documentation&amp;quot; hidden&amp;gt;
    &amp;lt;blockquote&amp;gt;Request failed with error:&amp;lt;/blockquote&amp;gt;
    &amp;lt;pre&amp;gt;&amp;lt;code id=&amp;quot;execution-error-message-GETapi-documentation&amp;quot;&amp;gt;

Tip: Check that you&amp;amp;#039;re properly connected to the network.
If you&amp;amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&amp;lt;/code&amp;gt;&amp;lt;/pre&amp;gt;
&amp;lt;/span&amp;gt;
&amp;lt;form id=&amp;quot;form-GETapi-documentation&amp;quot; data-method=&amp;quot;GET&amp;quot;
      data-path=&amp;quot;api/documentation&amp;quot;
      data-authed=&amp;quot;0&amp;quot;
      data-hasfiles=&amp;quot;0&amp;quot;
      data-isarraybody=&amp;quot;0&amp;quot;
      autocomplete=&amp;quot;off&amp;quot;
      onsubmit=&amp;quot;event.preventDefault(); executeTryOut(&amp;#039;GETapi-documentation&amp;#039;, this);&amp;quot;&amp;gt;
    &amp;lt;h3&amp;gt;
        Request&amp;amp;nbsp;&amp;amp;nbsp;&amp;amp;nbsp;
                    &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-tryout-GETapi-documentation&amp;quot;
                    onclick=&amp;quot;tryItOut(&amp;#039;GETapi-documentation&amp;#039;);&amp;quot;&amp;gt;Try it out ⚡
            &amp;lt;/button&amp;gt;
            &amp;lt;button type=&amp;quot;button&amp;quot;
                    style=&amp;quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-canceltryout-GETapi-documentation&amp;quot;
                    onclick=&amp;quot;cancelTryOut(&amp;#039;GETapi-documentation&amp;#039;);&amp;quot; hidden&amp;gt;Cancel 🛑
            &amp;lt;/button&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
            &amp;lt;button type=&amp;quot;submit&amp;quot;
                    style=&amp;quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&amp;quot;
                    id=&amp;quot;btn-executetryout-GETapi-documentation&amp;quot;
                    data-initial-text=&amp;quot;Send Request 💥&amp;quot;
                    data-loading-text=&amp;quot;⏱ Sending...&amp;quot;
                    hidden&amp;gt;Send Request 💥
            &amp;lt;/button&amp;gt;
            &amp;lt;/h3&amp;gt;
            &amp;lt;p&amp;gt;
            &amp;lt;small class=&amp;quot;badge badge-green&amp;quot;&amp;gt;GET&amp;lt;/small&amp;gt;
            &amp;lt;b&amp;gt;&amp;lt;code&amp;gt;api/documentation&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;
        &amp;lt;/p&amp;gt;
                &amp;lt;h4 class=&amp;quot;fancy-heading-panel&amp;quot;&amp;gt;&amp;lt;b&amp;gt;Headers&amp;lt;/b&amp;gt;&amp;lt;/h4&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Content-Type&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Content-Type&amp;quot;                data-endpoint=&amp;quot;GETapi-documentation&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                                &amp;lt;div style=&amp;quot;padding-left: 28px; clear: unset;&amp;quot;&amp;gt;
                &amp;lt;b style=&amp;quot;line-height: 2;&amp;quot;&amp;gt;&amp;lt;code&amp;gt;Accept&amp;lt;/code&amp;gt;&amp;lt;/b&amp;gt;&amp;amp;nbsp;&amp;amp;nbsp;
&amp;amp;nbsp;
 &amp;amp;nbsp;
                &amp;lt;input type=&amp;quot;text&amp;quot; style=&amp;quot;display: none&amp;quot;
                              name=&amp;quot;Accept&amp;quot;                data-endpoint=&amp;quot;GETapi-documentation&amp;quot;
               value=&amp;quot;application/json&amp;quot;
               data-component=&amp;quot;header&amp;quot;&amp;gt;
    &amp;lt;br&amp;gt;
&amp;lt;p&amp;gt;Example: &amp;lt;code&amp;gt;application/json&amp;lt;/code&amp;gt;&amp;lt;/p&amp;gt;
            &amp;lt;/div&amp;gt;
                        &amp;lt;/form&amp;gt;

            

        
    &amp;lt;/div&amp;gt;
    &amp;lt;div class=&amp;quot;dark-box&amp;quot;&amp;gt;
                    &amp;lt;div class=&amp;quot;lang-selector&amp;quot;&amp;gt;
                                                        &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;bash&amp;quot;&amp;gt;bash&amp;lt;/button&amp;gt;
                                                        &amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;lang-button&amp;quot; data-language-name=&amp;quot;javascript&amp;quot;&amp;gt;javascript&amp;lt;/button&amp;gt;
                            &amp;lt;/div&amp;gt;
            &amp;lt;/div&amp;gt;
&amp;lt;/div&amp;gt;
&amp;lt;/body&amp;gt;
&amp;lt;/html&amp;gt;
&lt;/code&gt;
 &lt;/pre&gt;
    &lt;/span&gt;
&lt;span id=&quot;execution-results-GETapi-documentation&quot; hidden&gt;
    &lt;blockquote&gt;Received response&lt;span
                id=&quot;execution-response-status-GETapi-documentation&quot;&gt;&lt;/span&gt;:
    &lt;/blockquote&gt;
    &lt;pre class=&quot;json&quot;&gt;&lt;code id=&quot;execution-response-content-GETapi-documentation&quot;
      data-empty-response-text=&quot;&lt;Empty response&gt;&quot; style=&quot;max-height: 400px;&quot;&gt;&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;span id=&quot;execution-error-GETapi-documentation&quot; hidden&gt;
    &lt;blockquote&gt;Request failed with error:&lt;/blockquote&gt;
    &lt;pre&gt;&lt;code id=&quot;execution-error-message-GETapi-documentation&quot;&gt;

Tip: Check that you&amp;#039;re properly connected to the network.
If you&amp;#039;re a maintainer of ths API, verify that your API is running and you&amp;#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.&lt;/code&gt;&lt;/pre&gt;
&lt;/span&gt;
&lt;form id=&quot;form-GETapi-documentation&quot; data-method=&quot;GET&quot;
      data-path=&quot;api/documentation&quot;
      data-authed=&quot;0&quot;
      data-hasfiles=&quot;0&quot;
      data-isarraybody=&quot;0&quot;
      autocomplete=&quot;off&quot;
      onsubmit=&quot;event.preventDefault(); executeTryOut(&#039;GETapi-documentation&#039;, this);&quot;&gt;
    &lt;h3&gt;
        Request&amp;nbsp;&amp;nbsp;&amp;nbsp;
                    &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-tryout-GETapi-documentation&quot;
                    onclick=&quot;tryItOut(&#039;GETapi-documentation&#039;);&quot;&gt;Try it out ⚡
            &lt;/button&gt;
            &lt;button type=&quot;button&quot;
                    style=&quot;background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-canceltryout-GETapi-documentation&quot;
                    onclick=&quot;cancelTryOut(&#039;GETapi-documentation&#039;);&quot; hidden&gt;Cancel 🛑
            &lt;/button&gt;&amp;nbsp;&amp;nbsp;
            &lt;button type=&quot;submit&quot;
                    style=&quot;background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;&quot;
                    id=&quot;btn-executetryout-GETapi-documentation&quot;
                    data-initial-text=&quot;Send Request 💥&quot;
                    data-loading-text=&quot;⏱ Sending...&quot;
                    hidden&gt;Send Request 💥
            &lt;/button&gt;
            &lt;/h3&gt;
            &lt;p&gt;
            &lt;small class=&quot;badge badge-green&quot;&gt;GET&lt;/small&gt;
            &lt;b&gt;&lt;code&gt;api/documentation&lt;/code&gt;&lt;/b&gt;
        &lt;/p&gt;
                &lt;h4 class=&quot;fancy-heading-panel&quot;&gt;&lt;b&gt;Headers&lt;/b&gt;&lt;/h4&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Content-Type&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Content-Type&quot;                data-endpoint=&quot;GETapi-documentation&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                                &lt;div style=&quot;padding-left: 28px; clear: unset;&quot;&gt;
                &lt;b style=&quot;line-height: 2;&quot;&gt;&lt;code&gt;Accept&lt;/code&gt;&lt;/b&gt;&amp;nbsp;&amp;nbsp;
&amp;nbsp;
 &amp;nbsp;
                &lt;input type=&quot;text&quot; style=&quot;display: none&quot;
                              name=&quot;Accept&quot;                data-endpoint=&quot;GETapi-documentation&quot;
               value=&quot;application/json&quot;
               data-component=&quot;header&quot;&gt;
    &lt;br&gt;
&lt;p&gt;Example: &lt;code&gt;application/json&lt;/code&gt;&lt;/p&gt;
            &lt;/div&gt;
                        &lt;/form&gt;

            

        
    &lt;/div&gt;
    &lt;div class=&quot;dark-box&quot;&gt;
                    &lt;div class=&quot;lang-selector&quot;&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;bash&quot;&gt;bash&lt;/button&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;lang-button&quot; data-language-name=&quot;javascript&quot;&gt;javascript&lt;/button&gt;
                            &lt;/div&gt;
            &lt;/div&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</code>
 </pre>
    </span>
<span id="execution-results-GETapi-documentation" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-documentation"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-documentation"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-documentation" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-documentation">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-documentation" data-method="GET"
      data-path="api/documentation"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-documentation', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-documentation"
                    onclick="tryItOut('GETapi-documentation');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-documentation"
                    onclick="cancelTryOut('GETapi-documentation');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-documentation"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/documentation</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-documentation"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>

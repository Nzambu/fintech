# User

Reset Password endpoints

## Verify Token


Verify the reset password token

> Example request:

```bash
curl -X POST \
    "http://localhost/api/verify_reset_password_token" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"token":"velit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/verify_reset_password_token"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "velit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-verify_reset_password_token" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-verify_reset_password_token"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-verify_reset_password_token"></code></pre>
</div>
<div id="execution-error-POSTapi-verify_reset_password_token" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-verify_reset_password_token"></code></pre>
</div>
<form id="form-POSTapi-verify_reset_password_token" data-method="POST" data-path="api/verify_reset_password_token" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-verify_reset_password_token', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-verify_reset_password_token" onclick="tryItOut('POSTapi-verify_reset_password_token');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-verify_reset_password_token" onclick="cancelTryOut('POSTapi-verify_reset_password_token');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-verify_reset_password_token" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/verify_reset_password_token</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-verify_reset_password_token" data-component="body" required  hidden>
<br>
</p>

</form>


## Change password


Select a new user password

> Example request:

```bash
curl -X POST \
    "http://localhost/api/change_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"token":"sit"}'

```

```javascript
const url = new URL(
    "http://localhost/api/change_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "sit"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-change_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-change_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-change_password"></code></pre>
</div>
<div id="execution-error-POSTapi-change_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-change_password"></code></pre>
</div>
<form id="form-POSTapi-change_password" data-method="POST" data-path="api/change_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-change_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-change_password" onclick="tryItOut('POSTapi-change_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-change_password" onclick="cancelTryOut('POSTapi-change_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-change_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/change_password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTapi-change_password" data-component="body" required  hidden>
<br>
</p>

</form>


## Account change password




> Example request:

```bash
curl -X POST \
    "http://localhost/api/profile_change_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"previous_password":"ut"}'

```

```javascript
const url = new URL(
    "http://localhost/api/profile_change_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "previous_password": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTapi-profile_change_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-profile_change_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-profile_change_password"></code></pre>
</div>
<div id="execution-error-POSTapi-profile_change_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-profile_change_password"></code></pre>
</div>
<form id="form-POSTapi-profile_change_password" data-method="POST" data-path="api/profile_change_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-profile_change_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-profile_change_password" onclick="tryItOut('POSTapi-profile_change_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-profile_change_password" onclick="cancelTryOut('POSTapi-profile_change_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-profile_change_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/profile_change_password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>previous_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="previous_password" data-endpoint="POSTapi-profile_change_password" data-component="body" required  hidden>
<br>
</p>

</form>


## User profile


Get authenticated user profile

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "user",
    "id": "49",
    "attributes": {
        "name": "Ludwig Hill",
        "firstName": "Ludwig",
        "lastName": "Hill",
        "id_number": 36164817
    },
    "relationships": {
        "gender": [
            {
                "type": "gender",
                "id": "1",
                "attributes": {
                    "sex": "Female"
                }
            }
        ],
        "primary_phone": [
            null
        ],
        "primary_email": [
            null
        ],
        "email": [
            []
        ],
        "phone": [
            []
        ],
        "password": [
            null
        ]
    },
    "links": {
        "self": "http:\/\/localhost\/api\/profile"
    }
}
```
<div id="execution-results-GETapi-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-profile"></code></pre>
</div>
<div id="execution-error-GETapi-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-profile"></code></pre>
</div>
<form id="form-GETapi-profile" data-method="GET" data-path="api/profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-profile" onclick="tryItOut('GETapi-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-profile" onclick="cancelTryOut('GETapi-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/profile</code></b>
</p>
</form>


## Update Profile


User can edit the profile data

> Example request:

```bash
curl -X POST \
    "http://localhost/api/update_profile" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"asperiores","last_name":"autem"}'

```

```javascript
const url = new URL(
    "http://localhost/api/update_profile"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "asperiores",
    "last_name": "autem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "user",
    "id": "50",
    "attributes": {
        "name": "Frankie Leffler",
        "firstName": "Frankie",
        "lastName": "Leffler",
        "id_number": 37476631
    },
    "relationships": {
        "gender": [
            {
                "type": "gender",
                "id": "1",
                "attributes": {
                    "sex": "Female"
                }
            }
        ],
        "primary_phone": [
            null
        ],
        "primary_email": [
            null
        ],
        "email": [
            []
        ],
        "phone": [
            []
        ],
        "password": [
            null
        ]
    },
    "links": {
        "self": "http:\/\/localhost\/api\/update_profile"
    }
}
```
<div id="execution-results-POSTapi-update_profile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-update_profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-update_profile"></code></pre>
</div>
<div id="execution-error-POSTapi-update_profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-update_profile"></code></pre>
</div>
<form id="form-POSTapi-update_profile" data-method="POST" data-path="api/update_profile" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-update_profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-update_profile" onclick="tryItOut('POSTapi-update_profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-update_profile" onclick="cancelTryOut('POSTapi-update_profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-update_profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/update_profile</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-update_profile" data-component="body" required  hidden>
<br>
The user baptismal or first name.</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-update_profile" data-component="body" required  hidden>
<br>
The user family name.</p>

</form>


## Change primary email


Switch the emailss to make the other email a primary. The current primary email will be set to false.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/switch_primary_email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"dolores"}'

```

```javascript
const url = new URL(
    "http://localhost/api/switch_primary_email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "dolores"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "type": "email",
        "id": "51",
        "attributes": {
            "email": "uo7iv0irzj@fintech.com",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.560361,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    },
    {
        "type": "email",
        "id": "52",
        "attributes": {
            "email": "tkzthxvigv@fintech.com",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.560462,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    }
]
```
<div id="execution-results-POSTapi-switch_primary_email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-switch_primary_email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-switch_primary_email"></code></pre>
</div>
<div id="execution-error-POSTapi-switch_primary_email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-switch_primary_email"></code></pre>
</div>
<form id="form-POSTapi-switch_primary_email" data-method="POST" data-path="api/switch_primary_email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-switch_primary_email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-switch_primary_email" onclick="tryItOut('POSTapi-switch_primary_email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-switch_primary_email" onclick="cancelTryOut('POSTapi-switch_primary_email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-switch_primary_email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/switch_primary_email</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-switch_primary_email" data-component="body" required  hidden>
<br>
</p>

</form>


## Email Addresses


Select user email addresses

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "type": "email",
        "id": "53",
        "attributes": {
            "email": "ll7m7huqeh@fintech.com",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.581537,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    },
    {
        "type": "email",
        "id": "54",
        "attributes": {
            "email": "bomedlkp5a@fintech.com",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.581614,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    }
]
```
<div id="execution-results-GETapi-email" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-email"></code></pre>
</div>
<div id="execution-error-GETapi-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-email"></code></pre>
</div>
<form id="form-GETapi-email" data-method="GET" data-path="api/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-email" onclick="tryItOut('GETapi-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-email" onclick="cancelTryOut('GETapi-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/email</code></b>
</p>
</form>


## Add email address


Create a new user email address

> Example request:

```bash
curl -X POST \
    "http://localhost/api/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"idare@example.com","primary":false,"verified":false}'

```

```javascript
const url = new URL(
    "http://localhost/api/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "idare@example.com",
    "primary": false,
    "verified": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "email",
    "id": "55",
    "attributes": {
        "email": "kgwrcf2rj5@fintech.com",
        "primary": true,
        "verified": true,
        "created": "2021-02-19T14:44:53.000000Z",
        "difference": {
            "y": 0,
            "m": 0,
            "d": 0,
            "h": 0,
            "i": 0,
            "s": 0,
            "f": 0.597613,
            "weekday": 0,
            "weekday_behavior": 0,
            "first_last_day_of": 0,
            "invert": 0,
            "days": 0,
            "special_type": 0,
            "special_amount": 0,
            "have_weekday_relative": 0,
            "have_special_relative": 0
        }
    }
}
```
<div id="execution-results-POSTapi-email" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-email"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-email"></code></pre>
</div>
<div id="execution-error-POSTapi-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-email"></code></pre>
</div>
<form id="form-POSTapi-email" data-method="POST" data-path="api/email" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-email', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-email" onclick="tryItOut('POSTapi-email');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-email" onclick="cancelTryOut('POSTapi-email');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-email" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/email</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-email" data-component="body" required  hidden>
<br>
The user email The value must be a valid email address.</p>
<p>
<b><code>primary</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-email" hidden><input type="radio" name="primary" value="true" data-endpoint="POSTapi-email" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-email" hidden><input type="radio" name="primary" value="false" data-endpoint="POSTapi-email" data-component="body" ><code>false</code></label>
<br>
True if the number is primary, else, false.</p>
<p>
<b><code>verified</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-email" hidden><input type="radio" name="verified" value="true" data-endpoint="POSTapi-email" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-email" hidden><input type="radio" name="verified" value="false" data-endpoint="POSTapi-email" data-component="body" ><code>false</code></label>
<br>
True if the number is verified, else, false.</p>

</form>


## Edit email address


Update a user email address

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/email/non" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"name.hoppe@example.com","primary":false,"verified":false}'

```

```javascript
const url = new URL(
    "http://localhost/api/email/non"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "name.hoppe@example.com",
    "primary": false,
    "verified": false
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "email",
    "id": "56",
    "attributes": {
        "email": "19knj8i1kw@fintech.com",
        "primary": true,
        "verified": true,
        "created": "2021-02-19T14:44:53.000000Z",
        "difference": {
            "y": 0,
            "m": 0,
            "d": 0,
            "h": 0,
            "i": 0,
            "s": 0,
            "f": 0.618197,
            "weekday": 0,
            "weekday_behavior": 0,
            "first_last_day_of": 0,
            "invert": 0,
            "days": 0,
            "special_type": 0,
            "special_amount": 0,
            "have_weekday_relative": 0,
            "have_special_relative": 0
        }
    }
}
```
<div id="execution-results-PUTapi-email--email-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-email--email-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-email--email-"></code></pre>
</div>
<div id="execution-error-PUTapi-email--email-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-email--email-"></code></pre>
</div>
<form id="form-PUTapi-email--email-" data-method="PUT" data-path="api/email/{email}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-email--email-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-email--email-" onclick="tryItOut('PUTapi-email--email-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-email--email-" onclick="cancelTryOut('PUTapi-email--email-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-email--email-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/email/{email}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/email/{email}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-email--email-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-email--email-" data-component="body" required  hidden>
<br>
The user email The value must be a valid email address.</p>
<p>
<b><code>primary</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-email--email-" hidden><input type="radio" name="primary" value="true" data-endpoint="PUTapi-email--email-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-email--email-" hidden><input type="radio" name="primary" value="false" data-endpoint="PUTapi-email--email-" data-component="body" ><code>false</code></label>
<br>
True if the number is primary, else, false.</p>
<p>
<b><code>verified</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-email--email-" hidden><input type="radio" name="verified" value="true" data-endpoint="PUTapi-email--email-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-email--email-" hidden><input type="radio" name="verified" value="false" data-endpoint="PUTapi-email--email-" data-component="body" ><code>false</code></label>
<br>
True if the number is verified, else, false.</p>

</form>


## Delete email address


Remove a user email address

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/email/corporis" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/email/corporis"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "email",
    "id": "57",
    "attributes": {
        "email": "xgncftggmp@fintech.com",
        "primary": true,
        "verified": true,
        "created": "2021-02-19T14:44:53.000000Z",
        "difference": {
            "y": 0,
            "m": 0,
            "d": 0,
            "h": 0,
            "i": 0,
            "s": 0,
            "f": 0.631641,
            "weekday": 0,
            "weekday_behavior": 0,
            "first_last_day_of": 0,
            "invert": 0,
            "days": 0,
            "special_type": 0,
            "special_amount": 0,
            "have_weekday_relative": 0,
            "have_special_relative": 0
        }
    }
}
```
<div id="execution-results-DELETEapi-email--email-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-email--email-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-email--email-"></code></pre>
</div>
<div id="execution-error-DELETEapi-email--email-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-email--email-"></code></pre>
</div>
<form id="form-DELETEapi-email--email-" data-method="DELETE" data-path="api/email/{email}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-email--email-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-email--email-" onclick="tryItOut('DELETEapi-email--email-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-email--email-" onclick="cancelTryOut('DELETEapi-email--email-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-email--email-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/email/{email}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="DELETEapi-email--email-" data-component="url" required  hidden>
<br>
</p>
</form>


## Change primary phone number


Switch the numbers to make the other number a primary. The current primary phone number will be set to false.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/switch_primary_phone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"phone":5}'

```

```javascript
const url = new URL(
    "http://localhost/api/switch_primary_phone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": 5
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "type": "phone",
        "id": "51",
        "attributes": {
            "phone": "76117204",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.673988,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    },
    {
        "type": "phone",
        "id": "52",
        "attributes": {
            "phone": "75276647",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.674047,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    }
]
```
<div id="execution-results-POSTapi-switch_primary_phone" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-switch_primary_phone"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-switch_primary_phone"></code></pre>
</div>
<div id="execution-error-POSTapi-switch_primary_phone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-switch_primary_phone"></code></pre>
</div>
<form id="form-POSTapi-switch_primary_phone" data-method="POST" data-path="api/switch_primary_phone" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-switch_primary_phone', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-switch_primary_phone" onclick="tryItOut('POSTapi-switch_primary_phone');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-switch_primary_phone" onclick="cancelTryOut('POSTapi-switch_primary_phone');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-switch_primary_phone" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/switch_primary_phone</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="phone" data-endpoint="POSTapi-switch_primary_phone" data-component="body" required  hidden>
<br>
</p>

</form>


## Phone Number/s


Select user phone numbers

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/phone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/phone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "type": "phone",
        "id": "53",
        "attributes": {
            "phone": "72535999",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.690617,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    },
    {
        "type": "phone",
        "id": "54",
        "attributes": {
            "phone": "711793195",
            "primary": true,
            "verified": true,
            "created": "2021-02-19T14:44:53.000000Z",
            "difference": {
                "y": 0,
                "m": 0,
                "d": 0,
                "h": 0,
                "i": 0,
                "s": 0,
                "f": 0.69072,
                "weekday": 0,
                "weekday_behavior": 0,
                "first_last_day_of": 0,
                "invert": 0,
                "days": 0,
                "special_type": 0,
                "special_amount": 0,
                "have_weekday_relative": 0,
                "have_special_relative": 0
            }
        }
    }
]
```
<div id="execution-results-GETapi-phone" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-phone"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-phone"></code></pre>
</div>
<div id="execution-error-GETapi-phone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-phone"></code></pre>
</div>
<form id="form-GETapi-phone" data-method="GET" data-path="api/phone" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-phone', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-phone" onclick="tryItOut('GETapi-phone');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-phone" onclick="cancelTryOut('GETapi-phone');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-phone" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/phone</code></b>
</p>
</form>


## Add phone number


Create a new user phone number

> Example request:

```bash
curl -X POST \
    "http://localhost/api/phone" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"phone":20,"primary":false,"verified":false}'

```

```javascript
const url = new URL(
    "http://localhost/api/phone"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": 20,
    "primary": false,
    "verified": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "phone",
    "id": "55",
    "attributes": {
        "phone": "719015153",
        "primary": true,
        "verified": true,
        "created": "2021-02-19T14:44:53.000000Z",
        "difference": {
            "y": 0,
            "m": 0,
            "d": 0,
            "h": 0,
            "i": 0,
            "s": 0,
            "f": 0.708388,
            "weekday": 0,
            "weekday_behavior": 0,
            "first_last_day_of": 0,
            "invert": 0,
            "days": 0,
            "special_type": 0,
            "special_amount": 0,
            "have_weekday_relative": 0,
            "have_special_relative": 0
        }
    }
}
```
<div id="execution-results-POSTapi-phone" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-phone"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-phone"></code></pre>
</div>
<div id="execution-error-POSTapi-phone" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-phone"></code></pre>
</div>
<form id="form-POSTapi-phone" data-method="POST" data-path="api/phone" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-phone', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-phone" onclick="tryItOut('POSTapi-phone');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-phone" onclick="cancelTryOut('POSTapi-phone');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-phone" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/phone</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="phone" data-endpoint="POSTapi-phone" data-component="body" required  hidden>
<br>
The user phone number.</p>
<p>
<b><code>primary</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-phone" hidden><input type="radio" name="primary" value="true" data-endpoint="POSTapi-phone" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-phone" hidden><input type="radio" name="primary" value="false" data-endpoint="POSTapi-phone" data-component="body" ><code>false</code></label>
<br>
True if the number is primary, else, false.</p>
<p>
<b><code>verified</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="POSTapi-phone" hidden><input type="radio" name="verified" value="true" data-endpoint="POSTapi-phone" data-component="body" ><code>true</code></label>
<label data-endpoint="POSTapi-phone" hidden><input type="radio" name="verified" value="false" data-endpoint="POSTapi-phone" data-component="body" ><code>false</code></label>
<br>
True if the number is verified, else, false.</p>

</form>


## Edit phone number


Update a user phone number

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/phone/explicabo" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"phone":12,"primary":false,"verified":false}'

```

```javascript
const url = new URL(
    "http://localhost/api/phone/explicabo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "phone": 12,
    "primary": false,
    "verified": false
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "phone",
    "id": "56",
    "attributes": {
        "phone": "714301282",
        "primary": true,
        "verified": true,
        "created": "2021-02-19T14:44:53.000000Z",
        "difference": {
            "y": 0,
            "m": 0,
            "d": 0,
            "h": 0,
            "i": 0,
            "s": 0,
            "f": 0.724685,
            "weekday": 0,
            "weekday_behavior": 0,
            "first_last_day_of": 0,
            "invert": 0,
            "days": 0,
            "special_type": 0,
            "special_amount": 0,
            "have_weekday_relative": 0,
            "have_special_relative": 0
        }
    }
}
```
<div id="execution-results-PUTapi-phone--phone-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-phone--phone-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-phone--phone-"></code></pre>
</div>
<div id="execution-error-PUTapi-phone--phone-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-phone--phone-"></code></pre>
</div>
<form id="form-PUTapi-phone--phone-" data-method="PUT" data-path="api/phone/{phone}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-phone--phone-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-phone--phone-" onclick="tryItOut('PUTapi-phone--phone-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-phone--phone-" onclick="cancelTryOut('PUTapi-phone--phone-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-phone--phone-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/phone/{phone}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/phone/{phone}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="PUTapi-phone--phone-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="phone" data-endpoint="PUTapi-phone--phone-" data-component="body" required  hidden>
<br>
The user phone number.</p>
<p>
<b><code>primary</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-phone--phone-" hidden><input type="radio" name="primary" value="true" data-endpoint="PUTapi-phone--phone-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-phone--phone-" hidden><input type="radio" name="primary" value="false" data-endpoint="PUTapi-phone--phone-" data-component="body" ><code>false</code></label>
<br>
True if the number is primary, else, false.</p>
<p>
<b><code>verified</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-phone--phone-" hidden><input type="radio" name="verified" value="true" data-endpoint="PUTapi-phone--phone-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-phone--phone-" hidden><input type="radio" name="verified" value="false" data-endpoint="PUTapi-phone--phone-" data-component="body" ><code>false</code></label>
<br>
True if the number is verified, else, false.</p>

</form>


## Delete phone number


Remove a user phone number

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/phone/distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/phone/distinctio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "type": "phone",
    "id": "57",
    "attributes": {
        "phone": "714317638",
        "primary": true,
        "verified": true,
        "created": "2021-02-19T14:44:53.000000Z",
        "difference": {
            "y": 0,
            "m": 0,
            "d": 0,
            "h": 0,
            "i": 0,
            "s": 0,
            "f": 0.742094,
            "weekday": 0,
            "weekday_behavior": 0,
            "first_last_day_of": 0,
            "invert": 0,
            "days": 0,
            "special_type": 0,
            "special_amount": 0,
            "have_weekday_relative": 0,
            "have_special_relative": 0
        }
    }
}
```
<div id="execution-results-DELETEapi-phone--phone-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-phone--phone-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-phone--phone-"></code></pre>
</div>
<div id="execution-error-DELETEapi-phone--phone-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-phone--phone-"></code></pre>
</div>
<form id="form-DELETEapi-phone--phone-" data-method="DELETE" data-path="api/phone/{phone}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-phone--phone-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-phone--phone-" onclick="tryItOut('DELETEapi-phone--phone-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-phone--phone-" onclick="cancelTryOut('DELETEapi-phone--phone-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-phone--phone-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/phone/{phone}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="DELETEapi-phone--phone-" data-component="url" required  hidden>
<br>
</p>
</form>


## Get gender


Select all the genders

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/gender" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/gender"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "type": "gender",
        "id": "",
        "attributes": {
            "sex": "Female"
        }
    },
    {
        "type": "gender",
        "id": "",
        "attributes": {
            "sex": "Female"
        }
    }
]
```
<div id="execution-results-GETapi-gender" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-gender"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-gender"></code></pre>
</div>
<div id="execution-error-GETapi-gender" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-gender"></code></pre>
</div>
<form id="form-GETapi-gender" data-method="GET" data-path="api/gender" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-gender', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-gender" onclick="tryItOut('GETapi-gender');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-gender" onclick="cancelTryOut('GETapi-gender');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-gender" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/gender</code></b>
</p>
</form>




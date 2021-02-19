# Currency

Currency endpoints

## Currency


This resource will return a collection of the available currencies.
Get the id from the selected resource and use it as currency_id when creating customer.
Each customer is assumed to transact(send) money using his/her selected curreny.
However, one can receive money in other currencies part from his/her selected curreny.
In transactions, use currency from the sender while displaying the record

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/currency" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/currency"
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
        "type": "currency",
        "id": "17",
        "attributes": {
            "currency": "Shilling",
            "slug": "KSHS",
            "sign": "\/=",
            "created_at": "2021-02-19T14:44:53.000000Z",
            "updated_at": "2021-02-19T14:44:53.000000Z"
        }
    },
    {
        "type": "currency",
        "id": "18",
        "attributes": {
            "currency": "Shilling",
            "slug": "KSHS",
            "sign": "\/=",
            "created_at": "2021-02-19T14:44:53.000000Z",
            "updated_at": "2021-02-19T14:44:53.000000Z"
        }
    }
]
```
<div id="execution-results-GETapi-currency" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-currency"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-currency"></code></pre>
</div>
<div id="execution-error-GETapi-currency" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-currency"></code></pre>
</div>
<form id="form-GETapi-currency" data-method="GET" data-path="api/currency" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-currency', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-currency" onclick="tryItOut('GETapi-currency');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-currency" onclick="cancelTryOut('GETapi-currency');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-currency" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/currency</code></b>
</p>
</form>




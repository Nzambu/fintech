# Customer

Customer endpoints

## Customers


This resource will return a collection of the customers.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/customer" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customer"
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
        "type": "customer",
        "id": "5",
        "attributes": {
            "created_at": null,
            "updated_at": null,
            "amount_paid": "4700"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "5",
                    "attributes": {
                        "name": "Delpha Mohr",
                        "firstName": "Delpha",
                        "lastName": "Mohr",
                        "id_number": "37893800"
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
                            {
                                "type": "phone",
                                "id": "4",
                                "attributes": {
                                    "phone": "721884517",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.798816,
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
                        ],
                        "primary_email": [
                            null
                        ],
                        "email": [
                            []
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "4",
                                    "attributes": {
                                        "phone": "721884517",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.799342,
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
                                    "id": "8",
                                    "attributes": {
                                        "phone": "72769383",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.799556,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "1",
                    "attributes": {
                        "group": "Individual"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/5"
        }
    },
    {
        "type": "customer",
        "id": "2",
        "attributes": {
            "created_at": null,
            "updated_at": null,
            "amount_paid": "5017"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "2",
                    "attributes": {
                        "name": "Myrtle Kerluke",
                        "firstName": "Myrtle",
                        "lastName": "Kerluke",
                        "id_number": "37567391"
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
                            {
                                "type": "phone",
                                "id": "3",
                                "attributes": {
                                    "phone": "712790410",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.807754,
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
                        ],
                        "primary_email": [
                            {
                                "type": "email",
                                "id": "2",
                                "attributes": {
                                    "email": "aymz32egr3@fintech.com",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:21.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 32,
                                        "f": 0.80812,
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
                        ],
                        "email": [
                            [
                                {
                                    "type": "email",
                                    "id": "2",
                                    "attributes": {
                                        "email": "aymz32egr3@fintech.com",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:21.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 32,
                                            "f": 0.808457,
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
                                    "id": "3",
                                    "attributes": {
                                        "email": "qe5qejp1bf@fintech.com",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:21.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 32,
                                            "f": 0.808578,
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
                                    "id": "7",
                                    "attributes": {
                                        "email": "kp3u9nydva@fintech.com",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:21.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 32,
                                            "f": 0.808688,
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
                                    "id": "8",
                                    "attributes": {
                                        "email": "avjf9ly7pr@fintech.com",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:21.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 32,
                                            "f": 0.808795,
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
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "3",
                                    "attributes": {
                                        "phone": "712790410",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.809366,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "2",
                    "attributes": {
                        "group": "SME"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/2"
        }
    }
]
```
<div id="execution-results-GETapi-customer" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-customer"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-customer"></code></pre>
</div>
<div id="execution-error-GETapi-customer" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-customer"></code></pre>
</div>
<form id="form-GETapi-customer" data-method="GET" data-path="api/customer" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-customer', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-customer" onclick="tryItOut('GETapi-customer');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-customer" onclick="cancelTryOut('GETapi-customer');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-customer" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/customer</code></b>
</p>
</form>


## Get customer


Select a customer using the id. If the customer exists, the response containes customer data.
Otherwise, return a not found error response.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/customer/ut" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customer/ut"
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
        "type": "customer",
        "id": "8",
        "attributes": {
            "created_at": null,
            "updated_at": null,
            "amount_paid": "16848"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "8",
                    "attributes": {
                        "name": "Rosa Jenkins",
                        "firstName": "Rosa",
                        "lastName": "Jenkins",
                        "id_number": "35549256"
                    },
                    "relationships": {
                        "gender": [
                            {
                                "type": "gender",
                                "id": "2",
                                "attributes": {
                                    "sex": "Male"
                                }
                            }
                        ],
                        "primary_phone": [
                            {
                                "type": "phone",
                                "id": "5",
                                "attributes": {
                                    "phone": "716233638",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.855424,
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
                        ],
                        "primary_email": [
                            null
                        ],
                        "email": [
                            []
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "5",
                                    "attributes": {
                                        "phone": "716233638",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.855591,
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
                                    "id": "7",
                                    "attributes": {
                                        "phone": "79816446",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.855643,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer\/ut"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "3",
                    "attributes": {
                        "group": "Corporate"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/8"
        }
    },
    {
        "type": "customer",
        "id": "8",
        "attributes": {
            "created_at": "2021-02-19T14:37:21.000000Z",
            "updated_at": "2021-02-19T14:37:21.000000Z",
            "amount_paid": "16848"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "8",
                    "attributes": {
                        "name": "Rosa Jenkins",
                        "firstName": "Rosa",
                        "lastName": "Jenkins",
                        "id_number": "35549256"
                    },
                    "relationships": {
                        "gender": [
                            {
                                "type": "gender",
                                "id": "2",
                                "attributes": {
                                    "sex": "Male"
                                }
                            }
                        ],
                        "primary_phone": [
                            {
                                "type": "phone",
                                "id": "5",
                                "attributes": {
                                    "phone": "716233638",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.85832,
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
                        ],
                        "primary_email": [
                            null
                        ],
                        "email": [
                            []
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "5",
                                    "attributes": {
                                        "phone": "716233638",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.858474,
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
                                    "id": "7",
                                    "attributes": {
                                        "phone": "79816446",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.858527,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer\/ut"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "2",
                    "attributes": {
                        "group": "SME"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/8"
        }
    }
]
```
<div id="execution-results-GETapi-customer--customer-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-customer--customer-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-customer--customer-"></code></pre>
</div>
<div id="execution-error-GETapi-customer--customer-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-customer--customer-"></code></pre>
</div>
<form id="form-GETapi-customer--customer-" data-method="GET" data-path="api/customer/{customer}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-customer--customer-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-customer--customer-" onclick="tryItOut('GETapi-customer--customer-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-customer--customer-" onclick="cancelTryOut('GETapi-customer--customer-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-customer--customer-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/customer/{customer}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="customer" data-endpoint="GETapi-customer--customer-" data-component="url" required  hidden>
<br>
The id of the customer</p>
</form>


## Update customer


Update an existing customer. Pick the data based on selected fields stored in the database. Select the status id from customer status, group id from customer group and currency id from a resource in currency collection.
The currency wille be referenced when the user transacts. That is, the currency show for each transaction.

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/customer/doloribus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"first_name":"error","last_name":"explicabo","id_number":2,"system_user":false,"gender_id":18,"phone":6,"email":"delectus","status_id":20,"group_id":14}'

```

```javascript
const url = new URL(
    "http://localhost/api/customer/doloribus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "error",
    "last_name": "explicabo",
    "id_number": 2,
    "system_user": false,
    "gender_id": 18,
    "phone": 6,
    "email": "delectus",
    "status_id": 20,
    "group_id": 14
}

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "type": "customer",
        "id": "8",
        "attributes": {
            "created_at": "2021-02-19T14:37:21.000000Z",
            "updated_at": "2021-02-19T14:37:21.000000Z",
            "amount_paid": "16848"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "8",
                    "attributes": {
                        "name": "Rosa Jenkins",
                        "firstName": "Rosa",
                        "lastName": "Jenkins",
                        "id_number": "35549256"
                    },
                    "relationships": {
                        "gender": [
                            {
                                "type": "gender",
                                "id": "2",
                                "attributes": {
                                    "sex": "Male"
                                }
                            }
                        ],
                        "primary_phone": [
                            {
                                "type": "phone",
                                "id": "5",
                                "attributes": {
                                    "phone": "716233638",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.910723,
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
                        ],
                        "primary_email": [
                            null
                        ],
                        "email": [
                            []
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "5",
                                    "attributes": {
                                        "phone": "716233638",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.910861,
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
                                    "id": "7",
                                    "attributes": {
                                        "phone": "79816446",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.910905,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer\/doloribus"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "2",
                    "attributes": {
                        "group": "SME"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/8"
        }
    },
    {
        "type": "customer",
        "id": "8",
        "attributes": {
            "created_at": "2021-02-19T14:37:21.000000Z",
            "updated_at": "2021-02-19T14:37:21.000000Z",
            "amount_paid": "16848"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "8",
                    "attributes": {
                        "name": "Rosa Jenkins",
                        "firstName": "Rosa",
                        "lastName": "Jenkins",
                        "id_number": "35549256"
                    },
                    "relationships": {
                        "gender": [
                            {
                                "type": "gender",
                                "id": "2",
                                "attributes": {
                                    "sex": "Male"
                                }
                            }
                        ],
                        "primary_phone": [
                            {
                                "type": "phone",
                                "id": "5",
                                "attributes": {
                                    "phone": "716233638",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.912906,
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
                        ],
                        "primary_email": [
                            null
                        ],
                        "email": [
                            []
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "5",
                                    "attributes": {
                                        "phone": "716233638",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.91303,
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
                                    "id": "7",
                                    "attributes": {
                                        "phone": "79816446",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.913074,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer\/doloribus"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "2",
                    "attributes": {
                        "group": "SME"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/8"
        }
    }
]
```
<div id="execution-results-PUTapi-customer--customer-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-customer--customer-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-customer--customer-"></code></pre>
</div>
<div id="execution-error-PUTapi-customer--customer-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-customer--customer-"></code></pre>
</div>
<form id="form-PUTapi-customer--customer-" data-method="PUT" data-path="api/customer/{customer}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-customer--customer-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-customer--customer-" onclick="tryItOut('PUTapi-customer--customer-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-customer--customer-" onclick="cancelTryOut('PUTapi-customer--customer-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-customer--customer-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/customer/{customer}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/customer/{customer}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="customer" data-endpoint="PUTapi-customer--customer-" data-component="url" required  hidden>
<br>
The id of the customer</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="PUTapi-customer--customer-" data-component="body" required  hidden>
<br>
The baptismal or first name of the customer.</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="PUTapi-customer--customer-" data-component="body" required  hidden>
<br>
The family name of the customer.</p>
<p>
<b><code>id_number</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id_number" data-endpoint="PUTapi-customer--customer-" data-component="body" required  hidden>
<br>
A unique identification number from a government issued identification number.</p>
<p>
<b><code>system_user</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
<label data-endpoint="PUTapi-customer--customer-" hidden><input type="radio" name="system_user" value="true" data-endpoint="PUTapi-customer--customer-" data-component="body" ><code>true</code></label>
<label data-endpoint="PUTapi-customer--customer-" hidden><input type="radio" name="system_user" value="false" data-endpoint="PUTapi-customer--customer-" data-component="body" ><code>false</code></label>
<br>
A user can log in or not based on this flag which is false by default.</p>
<p>
<b><code>gender_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="gender_id" data-endpoint="PUTapi-customer--customer-" data-component="body" required  hidden>
<br>
The gender id selected from gender resource.</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="phone" data-endpoint="PUTapi-customer--customer-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="PUTapi-customer--customer-" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status_id" data-endpoint="PUTapi-customer--customer-" data-component="body" required  hidden>
<br>
The status id of the customer selected from customer status resource.</p>
<p>
<b><code>group_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="group_id" data-endpoint="PUTapi-customer--customer-" data-component="body" required  hidden>
<br>
The group id of the customer selected from customer group resource.</p>

</form>


## Delete customer


Provide the id of the customer in the case of deleting the customer. No recovery of data once deleted.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/customer/atque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customer/atque"
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
[
    {
        "type": "customer",
        "id": "8",
        "attributes": {
            "created_at": "2021-02-19T14:37:21.000000Z",
            "updated_at": "2021-02-19T14:37:21.000000Z",
            "amount_paid": "16848"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "8",
                    "attributes": {
                        "name": "Rosa Jenkins",
                        "firstName": "Rosa",
                        "lastName": "Jenkins",
                        "id_number": "35549256"
                    },
                    "relationships": {
                        "gender": [
                            {
                                "type": "gender",
                                "id": "2",
                                "attributes": {
                                    "sex": "Male"
                                }
                            }
                        ],
                        "primary_phone": [
                            {
                                "type": "phone",
                                "id": "5",
                                "attributes": {
                                    "phone": "716233638",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.943709,
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
                        ],
                        "primary_email": [
                            null
                        ],
                        "email": [
                            []
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "5",
                                    "attributes": {
                                        "phone": "716233638",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.943887,
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
                                    "id": "7",
                                    "attributes": {
                                        "phone": "79816446",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.943944,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer\/atque"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "2",
                    "attributes": {
                        "group": "SME"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/8"
        }
    },
    {
        "type": "customer",
        "id": "8",
        "attributes": {
            "created_at": "2021-02-19T14:37:21.000000Z",
            "updated_at": "2021-02-19T14:37:21.000000Z",
            "amount_paid": "16848"
        },
        "relationships": {
            "user": [
                {
                    "type": "user",
                    "id": "8",
                    "attributes": {
                        "name": "Rosa Jenkins",
                        "firstName": "Rosa",
                        "lastName": "Jenkins",
                        "id_number": "35549256"
                    },
                    "relationships": {
                        "gender": [
                            {
                                "type": "gender",
                                "id": "2",
                                "attributes": {
                                    "sex": "Male"
                                }
                            }
                        ],
                        "primary_phone": [
                            {
                                "type": "phone",
                                "id": "5",
                                "attributes": {
                                    "phone": "716233638",
                                    "primary": 1,
                                    "verified": 1,
                                    "created": "2021-02-19T14:37:22.000000Z",
                                    "difference": {
                                        "y": 0,
                                        "m": 0,
                                        "d": 0,
                                        "h": 0,
                                        "i": 7,
                                        "s": 31,
                                        "f": 0.945587,
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
                        ],
                        "primary_email": [
                            null
                        ],
                        "email": [
                            []
                        ],
                        "phone": [
                            [
                                {
                                    "type": "phone",
                                    "id": "5",
                                    "attributes": {
                                        "phone": "716233638",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.945696,
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
                                    "id": "7",
                                    "attributes": {
                                        "phone": "79816446",
                                        "primary": 1,
                                        "verified": 1,
                                        "created": "2021-02-19T14:37:22.000000Z",
                                        "difference": {
                                            "y": 0,
                                            "m": 0,
                                            "d": 0,
                                            "h": 0,
                                            "i": 7,
                                            "s": 31,
                                            "f": 0.945733,
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
                        ],
                        "password": [
                            null
                        ]
                    },
                    "links": {
                        "self": "http:\/\/localhost\/api\/customer\/atque"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Active"
                    }
                }
            ],
            "currency": [
                {
                    "type": "currency",
                    "id": "1",
                    "attributes": {
                        "currency": "Shilling",
                        "slug": "KSHS",
                        "sign": "\/=",
                        "created_at": "2021-02-19T14:37:20.000000Z",
                        "updated_at": "2021-02-19T14:37:20.000000Z"
                    }
                }
            ],
            "group": [
                {
                    "type": "group",
                    "id": "2",
                    "attributes": {
                        "group": "SME"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/customer\/8"
        }
    }
]
```
<div id="execution-results-DELETEapi-customer--customer-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-customer--customer-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-customer--customer-"></code></pre>
</div>
<div id="execution-error-DELETEapi-customer--customer-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-customer--customer-"></code></pre>
</div>
<form id="form-DELETEapi-customer--customer-" data-method="DELETE" data-path="api/customer/{customer}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-customer--customer-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-customer--customer-" onclick="tryItOut('DELETEapi-customer--customer-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-customer--customer-" onclick="cancelTryOut('DELETEapi-customer--customer-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-customer--customer-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/customer/{customer}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>customer</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="customer" data-endpoint="DELETEapi-customer--customer-" data-component="url" required  hidden>
<br>
The id of the customer</p>
</form>


## Status


A customer can exist in different states at different times depending on their activities in the application.
This resource will return a collection of the possible states.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/customer_status" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customer_status"
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
        "type": "status",
        "id": "",
        "attributes": {
            "status": null
        }
    },
    {
        "type": "status",
        "id": "",
        "attributes": {
            "status": null
        }
    }
]
```
<div id="execution-results-GETapi-customer_status" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-customer_status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-customer_status"></code></pre>
</div>
<div id="execution-error-GETapi-customer_status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-customer_status"></code></pre>
</div>
<form id="form-GETapi-customer_status" data-method="GET" data-path="api/customer_status" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-customer_status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-customer_status" onclick="tryItOut('GETapi-customer_status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-customer_status" onclick="cancelTryOut('GETapi-customer_status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-customer_status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/customer_status</code></b>
</p>
</form>


## Groups


This resource will return a collection of the different groups of customers.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/customer_groups" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/customer_groups"
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
        "type": "group",
        "id": "",
        "attributes": {
            "group": null
        }
    },
    {
        "type": "group",
        "id": "",
        "attributes": {
            "group": null
        }
    }
]
```
<div id="execution-results-GETapi-customer_groups" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-customer_groups"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-customer_groups"></code></pre>
</div>
<div id="execution-error-GETapi-customer_groups" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-customer_groups"></code></pre>
</div>
<form id="form-GETapi-customer_groups" data-method="GET" data-path="api/customer_groups" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-customer_groups', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-customer_groups" onclick="tryItOut('GETapi-customer_groups');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-customer_groups" onclick="cancelTryOut('GETapi-customer_groups');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-customer_groups" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/customer_groups</code></b>
</p>
</form>




# Transaction

Transaction method endpoints

## Transactions


This resource will return a collection of the transactions.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transaction" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transaction"
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
        "type": "transaction",
        "id": "50",
        "attributes": {
            "amount": 8983,
            "ref_no": "ref\/s\/\/r\/\/",
            "order_no": "on\/66C",
            "created_at": "2021-02-19T14:44:53.000000Z",
            "updated_at": "2021-02-19T14:44:53.000000Z"
        },
        "relationships": {
            "sender": [
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
                                                    "s": 32,
                                                    "f": 0.000462,
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
                                                        "s": 32,
                                                        "f": 0.000974,
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
                                                        "s": 32,
                                                        "f": 0.001078,
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
                                    "self": "http:\/\/localhost\/api\/transaction"
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
            ],
            "beneficiary": [
                {
                    "type": "customer",
                    "id": "7",
                    "attributes": {
                        "created_at": "2021-02-19T14:37:21.000000Z",
                        "updated_at": "2021-02-19T14:37:21.000000Z",
                        "amount_paid": "17724"
                    },
                    "relationships": {
                        "user": [
                            {
                                "type": "user",
                                "id": "7",
                                "attributes": {
                                    "name": "Alize Lind",
                                    "firstName": "Alize",
                                    "lastName": "Lind",
                                    "id_number": "34269570"
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
                                        null
                                    ],
                                    "primary_email": [
                                        {
                                            "type": "email",
                                            "id": "5",
                                            "attributes": {
                                                "email": "9nsq1zygi1@fintech.com",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:21.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 33,
                                                    "f": 0.008401,
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
                                                "id": "5",
                                                "attributes": {
                                                    "email": "9nsq1zygi1@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.008608,
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
                                        []
                                    ],
                                    "password": [
                                        null
                                    ]
                                },
                                "links": {
                                    "self": "http:\/\/localhost\/api\/transaction"
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
                        "self": "http:\/\/localhost\/api\/customer\/7"
                    }
                }
            ],
            "type": [
                {
                    "type": "type",
                    "id": "2",
                    "attributes": {
                        "type": "Loyalty"
                    }
                }
            ],
            "method": [
                {
                    "type": "method",
                    "id": "2",
                    "attributes": {
                        "method": "Cash"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "2",
                    "attributes": {
                        "status": "Success"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/transaction\/50"
        }
    },
    {
        "type": "transaction",
        "id": "51",
        "attributes": {
            "amount": 6935,
            "ref_no": "ref\/s\/\/r\/\/",
            "order_no": "on\/eng",
            "created_at": "2021-02-19T14:44:53.000000Z",
            "updated_at": "2021-02-19T14:44:53.000000Z"
        },
        "relationships": {
            "sender": [
                {
                    "type": "customer",
                    "id": "6",
                    "attributes": {
                        "created_at": "2021-02-19T14:37:21.000000Z",
                        "updated_at": "2021-02-19T14:37:21.000000Z",
                        "amount_paid": "9527"
                    },
                    "relationships": {
                        "user": [
                            {
                                "type": "user",
                                "id": "6",
                                "attributes": {
                                    "name": "Jarrod West",
                                    "firstName": "Jarrod",
                                    "lastName": "West",
                                    "id_number": "32014865"
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
                                        null
                                    ],
                                    "primary_email": [
                                        {
                                            "type": "email",
                                            "id": "4",
                                            "attributes": {
                                                "email": "ir09lzigla@fintech.com",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:21.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 33,
                                                    "f": 0.013031,
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
                                                "id": "4",
                                                "attributes": {
                                                    "email": "ir09lzigla@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.013171,
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
                                                "id": "6",
                                                "attributes": {
                                                    "email": "moys9vtkws@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.013223,
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
                                        []
                                    ],
                                    "password": [
                                        null
                                    ]
                                },
                                "links": {
                                    "self": "http:\/\/localhost\/api\/transaction"
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
                        "self": "http:\/\/localhost\/api\/customer\/6"
                    }
                }
            ],
            "beneficiary": [
                {
                    "type": "customer",
                    "id": "7",
                    "attributes": {
                        "created_at": "2021-02-19T14:37:21.000000Z",
                        "updated_at": "2021-02-19T14:37:21.000000Z",
                        "amount_paid": "17724"
                    },
                    "relationships": {
                        "user": [
                            {
                                "type": "user",
                                "id": "7",
                                "attributes": {
                                    "name": "Alize Lind",
                                    "firstName": "Alize",
                                    "lastName": "Lind",
                                    "id_number": "34269570"
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
                                        null
                                    ],
                                    "primary_email": [
                                        {
                                            "type": "email",
                                            "id": "5",
                                            "attributes": {
                                                "email": "9nsq1zygi1@fintech.com",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:21.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 33,
                                                    "f": 0.016943,
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
                                                "id": "5",
                                                "attributes": {
                                                    "email": "9nsq1zygi1@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.017062,
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
                                        []
                                    ],
                                    "password": [
                                        null
                                    ]
                                },
                                "links": {
                                    "self": "http:\/\/localhost\/api\/transaction"
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
                        "self": "http:\/\/localhost\/api\/customer\/7"
                    }
                }
            ],
            "type": [
                {
                    "type": "type",
                    "id": "2",
                    "attributes": {
                        "type": "Loyalty"
                    }
                }
            ],
            "method": [
                {
                    "type": "method",
                    "id": "2",
                    "attributes": {
                        "method": "Cash"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "2",
                    "attributes": {
                        "status": "Success"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/transaction\/51"
        }
    }
]
```
<div id="execution-results-GETapi-transaction" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-transaction"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-transaction"></code></pre>
</div>
<div id="execution-error-GETapi-transaction" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-transaction"></code></pre>
</div>
<form id="form-GETapi-transaction" data-method="GET" data-path="api/transaction" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-transaction', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-transaction" onclick="tryItOut('GETapi-transaction');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-transaction" onclick="cancelTryOut('GETapi-transaction');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-transaction" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/transaction</code></b>
</p>
</form>


## Create transaction




> Example request:

```bash
curl -X POST \
    "http://localhost/api/transaction" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type_id":1,"method_id":12,"status_id":7,"sender":8,"beneficiary":12,"amount":6,"order_no":"mollitia"}'

```

```javascript
const url = new URL(
    "http://localhost/api/transaction"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type_id": 1,
    "method_id": 12,
    "status_id": 7,
    "sender": 8,
    "beneficiary": 12,
    "amount": 6,
    "order_no": "mollitia"
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
        "type": "transaction",
        "id": "52",
        "attributes": {
            "amount": 7667,
            "ref_no": "ref\/s\/\/r\/\/",
            "order_no": "on\/6VM",
            "created_at": "2021-02-19T14:44:54.000000Z",
            "updated_at": "2021-02-19T14:44:54.000000Z"
        },
        "relationships": {
            "sender": [
                {
                    "type": "customer",
                    "id": "7",
                    "attributes": {
                        "created_at": "2021-02-19T14:37:21.000000Z",
                        "updated_at": "2021-02-19T14:37:21.000000Z",
                        "amount_paid": "1806"
                    },
                    "relationships": {
                        "user": [
                            {
                                "type": "user",
                                "id": "7",
                                "attributes": {
                                    "name": "Alize Lind",
                                    "firstName": "Alize",
                                    "lastName": "Lind",
                                    "id_number": "34269570"
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
                                        null
                                    ],
                                    "primary_email": [
                                        {
                                            "type": "email",
                                            "id": "5",
                                            "attributes": {
                                                "email": "9nsq1zygi1@fintech.com",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:21.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 33,
                                                    "f": 0.080921,
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
                                                "id": "5",
                                                "attributes": {
                                                    "email": "9nsq1zygi1@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.081467,
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
                                        []
                                    ],
                                    "password": [
                                        null
                                    ]
                                },
                                "links": {
                                    "self": "http:\/\/localhost\/api\/transaction"
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
                        "self": "http:\/\/localhost\/api\/customer\/7"
                    }
                }
            ],
            "beneficiary": [
                {
                    "type": "customer",
                    "id": "6",
                    "attributes": {
                        "created_at": "2021-02-19T14:37:21.000000Z",
                        "updated_at": "2021-02-19T14:37:21.000000Z",
                        "amount_paid": "17194"
                    },
                    "relationships": {
                        "user": [
                            {
                                "type": "user",
                                "id": "6",
                                "attributes": {
                                    "name": "Jarrod West",
                                    "firstName": "Jarrod",
                                    "lastName": "West",
                                    "id_number": "32014865"
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
                                        null
                                    ],
                                    "primary_email": [
                                        {
                                            "type": "email",
                                            "id": "4",
                                            "attributes": {
                                                "email": "ir09lzigla@fintech.com",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:21.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 33,
                                                    "f": 0.09775,
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
                                                "id": "4",
                                                "attributes": {
                                                    "email": "ir09lzigla@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.098107,
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
                                                "id": "6",
                                                "attributes": {
                                                    "email": "moys9vtkws@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.098237,
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
                                        []
                                    ],
                                    "password": [
                                        null
                                    ]
                                },
                                "links": {
                                    "self": "http:\/\/localhost\/api\/transaction"
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
                        "self": "http:\/\/localhost\/api\/customer\/6"
                    }
                }
            ],
            "type": [
                {
                    "type": "type",
                    "id": "1",
                    "attributes": {
                        "type": "Voucher"
                    }
                }
            ],
            "method": [
                {
                    "type": "method",
                    "id": "1",
                    "attributes": {
                        "method": "Debit Card"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "1",
                    "attributes": {
                        "status": "Pending"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/transaction\/52"
        }
    },
    {
        "type": "transaction",
        "id": "53",
        "attributes": {
            "amount": 3327,
            "ref_no": "ref\/s\/\/r\/\/",
            "order_no": "on\/nLB",
            "created_at": "2021-02-19T14:44:54.000000Z",
            "updated_at": "2021-02-19T14:44:54.000000Z"
        },
        "relationships": {
            "sender": [
                {
                    "type": "customer",
                    "id": "6",
                    "attributes": {
                        "created_at": "2021-02-19T14:37:21.000000Z",
                        "updated_at": "2021-02-19T14:37:21.000000Z",
                        "amount_paid": "17194"
                    },
                    "relationships": {
                        "user": [
                            {
                                "type": "user",
                                "id": "6",
                                "attributes": {
                                    "name": "Jarrod West",
                                    "firstName": "Jarrod",
                                    "lastName": "West",
                                    "id_number": "32014865"
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
                                        null
                                    ],
                                    "primary_email": [
                                        {
                                            "type": "email",
                                            "id": "4",
                                            "attributes": {
                                                "email": "ir09lzigla@fintech.com",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:21.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 33,
                                                    "f": 0.108582,
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
                                                "id": "4",
                                                "attributes": {
                                                    "email": "ir09lzigla@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.108833,
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
                                                "id": "6",
                                                "attributes": {
                                                    "email": "moys9vtkws@fintech.com",
                                                    "primary": 1,
                                                    "verified": 1,
                                                    "created": "2021-02-19T14:37:21.000000Z",
                                                    "difference": {
                                                        "y": 0,
                                                        "m": 0,
                                                        "d": 0,
                                                        "h": 0,
                                                        "i": 7,
                                                        "s": 33,
                                                        "f": 0.10893,
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
                                        []
                                    ],
                                    "password": [
                                        null
                                    ]
                                },
                                "links": {
                                    "self": "http:\/\/localhost\/api\/transaction"
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
                        "self": "http:\/\/localhost\/api\/customer\/6"
                    }
                }
            ],
            "beneficiary": [
                {
                    "type": "customer",
                    "id": "5",
                    "attributes": {
                        "created_at": "2021-02-19T14:37:21.000000Z",
                        "updated_at": "2021-02-19T14:37:21.000000Z",
                        "amount_paid": "8027"
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
                                                    "s": 32,
                                                    "f": 0.118055,
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
                                                        "s": 32,
                                                        "f": 0.118336,
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
                                                        "s": 32,
                                                        "f": 0.118432,
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
                                    "self": "http:\/\/localhost\/api\/transaction"
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
                        "self": "http:\/\/localhost\/api\/customer\/5"
                    }
                }
            ],
            "type": [
                {
                    "type": "type",
                    "id": "2",
                    "attributes": {
                        "type": "Loyalty"
                    }
                }
            ],
            "method": [
                {
                    "type": "method",
                    "id": "1",
                    "attributes": {
                        "method": "Debit Card"
                    }
                }
            ],
            "status": [
                {
                    "type": "status",
                    "id": "2",
                    "attributes": {
                        "status": "Success"
                    }
                }
            ]
        },
        "links": {
            "self": "http:\/\/localhost\/api\/transaction\/53"
        }
    }
]
```
<div id="execution-results-POSTapi-transaction" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-transaction"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-transaction"></code></pre>
</div>
<div id="execution-error-POSTapi-transaction" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-transaction"></code></pre>
</div>
<form id="form-POSTapi-transaction" data-method="POST" data-path="api/transaction" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-transaction', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-transaction" onclick="tryItOut('POSTapi-transaction');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-transaction" onclick="cancelTryOut('POSTapi-transaction');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-transaction" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/transaction</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="type_id" data-endpoint="POSTapi-transaction" data-component="body" required  hidden>
<br>
The transaction type id is extracted from a resource in the transactions types collection. Check types under transaction.</p>
<p>
<b><code>method_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="method_id" data-endpoint="POSTapi-transaction" data-component="body" required  hidden>
<br>
The transaction method id is extracted from a resource in the transactions methods collection. Check methods under transaction.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status_id" data-endpoint="POSTapi-transaction" data-component="body"  hidden>
<br>
The status of the transaction which is pending by default. Get the value from a resource selected from the transactions status.</p>
<p>
<b><code>sender</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="sender" data-endpoint="POSTapi-transaction" data-component="body" required  hidden>
<br>
The id of the customer who is making a payment/sending the money. Get the value from customer selected from customer collection.</p>
<p>
<b><code>beneficiary</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="beneficiary" data-endpoint="POSTapi-transaction" data-component="body" required  hidden>
<br>
The id of the customer who will receive the money send in the transaction. Get the value from customer selected from customer collection.</p>
<p>
<b><code>amount</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="amount" data-endpoint="POSTapi-transaction" data-component="body" required  hidden>
<br>
The amount involved in the transaction.</p>
<p>
<b><code>order_no</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order_no" data-endpoint="POSTapi-transaction" data-component="body" required  hidden>
<br>
Assumes the value is from an existing order, user types the order reference.</p>

</form>


## Get transaction


Select a transaction using the id. If the transaction exists, the response containes transaction data.
Otherwise, return a not found error response.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transaction/vero" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transaction/vero"
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
    "type": "transaction",
    "id": "54",
    "attributes": {
        "amount": 4302,
        "ref_no": "ref\/s\/\/r\/\/",
        "order_no": "on\/sxD",
        "created_at": "2021-02-19T14:44:54.000000Z",
        "updated_at": "2021-02-19T14:44:54.000000Z"
    },
    "relationships": {
        "sender": [
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
                                                "s": 32,
                                                "f": 0.190646,
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
                                                    "s": 32,
                                                    "f": 0.191429,
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
                                                    "s": 32,
                                                    "f": 0.191656,
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
                                "self": "http:\/\/localhost\/api\/transaction\/vero"
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
        ],
        "beneficiary": [
            {
                "type": "customer",
                "id": "3",
                "attributes": {
                    "created_at": "2021-02-19T14:37:21.000000Z",
                    "updated_at": "2021-02-19T14:37:21.000000Z",
                    "amount_paid": "4302"
                },
                "relationships": {
                    "user": [
                        {
                            "type": "user",
                            "id": "3",
                            "attributes": {
                                "name": "Santiago Glover",
                                "firstName": "Santiago",
                                "lastName": "Glover",
                                "id_number": "37373114"
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
                                        "id": "6",
                                        "attributes": {
                                            "phone": "710082777",
                                            "primary": 1,
                                            "verified": 1,
                                            "created": "2021-02-19T14:37:22.000000Z",
                                            "difference": {
                                                "y": 0,
                                                "m": 0,
                                                "d": 0,
                                                "h": 0,
                                                "i": 7,
                                                "s": 32,
                                                "f": 0.212191,
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
                                            "id": "6",
                                            "attributes": {
                                                "phone": "710082777",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:22.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 32,
                                                    "f": 0.212634,
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
                                "self": "http:\/\/localhost\/api\/transaction\/vero"
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
                    "self": "http:\/\/localhost\/api\/customer\/3"
                }
            }
        ],
        "type": [
            {
                "type": "type",
                "id": "1",
                "attributes": {
                    "type": "Voucher"
                }
            }
        ],
        "method": [
            {
                "type": "method",
                "id": "2",
                "attributes": {
                    "method": "Cash"
                }
            }
        ],
        "status": [
            {
                "type": "status",
                "id": "1",
                "attributes": {
                    "status": "Pending"
                }
            }
        ]
    },
    "links": {
        "self": "http:\/\/localhost\/api\/transaction\/54"
    }
}
```
<div id="execution-results-GETapi-transaction--transaction-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-transaction--transaction-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-transaction--transaction-"></code></pre>
</div>
<div id="execution-error-GETapi-transaction--transaction-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-transaction--transaction-"></code></pre>
</div>
<form id="form-GETapi-transaction--transaction-" data-method="GET" data-path="api/transaction/{transaction}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-transaction--transaction-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-transaction--transaction-" onclick="tryItOut('GETapi-transaction--transaction-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-transaction--transaction-" onclick="cancelTryOut('GETapi-transaction--transaction-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-transaction--transaction-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/transaction/{transaction}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>transaction</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="transaction" data-endpoint="GETapi-transaction--transaction-" data-component="url" required  hidden>
<br>
The id of the transaction</p>
</form>


## Update transaction




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/transaction/labore" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"type_id":7,"method_id":9,"status_id":6,"sender":13,"beneficiary":2,"amount":6,"order_no":"vero"}'

```

```javascript
const url = new URL(
    "http://localhost/api/transaction/labore"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "type_id": 7,
    "method_id": 9,
    "status_id": 6,
    "sender": 13,
    "beneficiary": 2,
    "amount": 6,
    "order_no": "vero"
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
    "type": "transaction",
    "id": "55",
    "attributes": {
        "amount": 8374,
        "ref_no": "ref\/s\/\/r\/\/",
        "order_no": "on\/KFc",
        "created_at": "2021-02-19T14:44:54.000000Z",
        "updated_at": "2021-02-19T14:44:54.000000Z"
    },
    "relationships": {
        "sender": [
            {
                "type": "customer",
                "id": "8",
                "attributes": {
                    "created_at": "2021-02-19T14:37:21.000000Z",
                    "updated_at": "2021-02-19T14:37:21.000000Z",
                    "amount_paid": "25222"
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
                                                "s": 32,
                                                "f": 0.263198,
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
                                                    "s": 32,
                                                    "f": 0.263763,
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
                                                    "s": 32,
                                                    "f": 0.263982,
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
                                "self": "http:\/\/localhost\/api\/transaction\/labore"
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
        ],
        "beneficiary": [
            {
                "type": "customer",
                "id": "8",
                "attributes": {
                    "created_at": "2021-02-19T14:37:21.000000Z",
                    "updated_at": "2021-02-19T14:37:21.000000Z",
                    "amount_paid": "25222"
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
                                                "s": 32,
                                                "f": 0.277406,
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
                                                    "s": 32,
                                                    "f": 0.27778,
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
                                                    "s": 32,
                                                    "f": 0.27791,
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
                                "self": "http:\/\/localhost\/api\/transaction\/labore"
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
        ],
        "type": [
            {
                "type": "type",
                "id": "2",
                "attributes": {
                    "type": "Loyalty"
                }
            }
        ],
        "method": [
            {
                "type": "method",
                "id": "1",
                "attributes": {
                    "method": "Debit Card"
                }
            }
        ],
        "status": [
            {
                "type": "status",
                "id": "1",
                "attributes": {
                    "status": "Pending"
                }
            }
        ]
    },
    "links": {
        "self": "http:\/\/localhost\/api\/transaction\/55"
    }
}
```
<div id="execution-results-PUTapi-transaction--transaction-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-transaction--transaction-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-transaction--transaction-"></code></pre>
</div>
<div id="execution-error-PUTapi-transaction--transaction-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-transaction--transaction-"></code></pre>
</div>
<form id="form-PUTapi-transaction--transaction-" data-method="PUT" data-path="api/transaction/{transaction}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-transaction--transaction-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-transaction--transaction-" onclick="tryItOut('PUTapi-transaction--transaction-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-transaction--transaction-" onclick="cancelTryOut('PUTapi-transaction--transaction-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-transaction--transaction-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/transaction/{transaction}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/transaction/{transaction}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>transaction</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="transaction" data-endpoint="PUTapi-transaction--transaction-" data-component="url" required  hidden>
<br>
The id of the transaction</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>type_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="type_id" data-endpoint="PUTapi-transaction--transaction-" data-component="body" required  hidden>
<br>
The transaction type id is extracted from a resource in the transactions types collection. Check types under transaction.</p>
<p>
<b><code>method_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="method_id" data-endpoint="PUTapi-transaction--transaction-" data-component="body" required  hidden>
<br>
The transaction method id is extracted from a resource in the transactions methods collection. Check methods under transaction.</p>
<p>
<b><code>status_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status_id" data-endpoint="PUTapi-transaction--transaction-" data-component="body"  hidden>
<br>
The status of the transaction which is pending by default. Get the value from a resource selected from the transactions status.</p>
<p>
<b><code>sender</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="sender" data-endpoint="PUTapi-transaction--transaction-" data-component="body" required  hidden>
<br>
The id of the customer who is making a payment/sending the money. Get the value from customer selected from customer collection.</p>
<p>
<b><code>beneficiary</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="beneficiary" data-endpoint="PUTapi-transaction--transaction-" data-component="body" required  hidden>
<br>
The id of the customer who will receive the money send in the transaction. Get the value from customer selected from customer collection.</p>
<p>
<b><code>amount</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="amount" data-endpoint="PUTapi-transaction--transaction-" data-component="body" required  hidden>
<br>
The amount involved in the transaction.</p>
<p>
<b><code>order_no</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="order_no" data-endpoint="PUTapi-transaction--transaction-" data-component="body" required  hidden>
<br>
Assumes the value is from an existing order, user types the order reference.</p>

</form>


## Delete transaction


Provide the id of the transaction in the case of deleting the transaction. No recovery of deleted data. The action is permanent.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/transaction/exercitationem" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transaction/exercitationem"
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
    "type": "transaction",
    "id": "56",
    "attributes": {
        "amount": 2961,
        "ref_no": "ref\/s\/\/r\/\/",
        "order_no": "on\/aGb",
        "created_at": "2021-02-19T14:44:54.000000Z",
        "updated_at": "2021-02-19T14:44:54.000000Z"
    },
    "relationships": {
        "sender": [
            {
                "type": "customer",
                "id": "3",
                "attributes": {
                    "created_at": "2021-02-19T14:37:21.000000Z",
                    "updated_at": "2021-02-19T14:37:21.000000Z",
                    "amount_paid": 0
                },
                "relationships": {
                    "user": [
                        {
                            "type": "user",
                            "id": "3",
                            "attributes": {
                                "name": "Santiago Glover",
                                "firstName": "Santiago",
                                "lastName": "Glover",
                                "id_number": "37373114"
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
                                        "id": "6",
                                        "attributes": {
                                            "phone": "710082777",
                                            "primary": 1,
                                            "verified": 1,
                                            "created": "2021-02-19T14:37:22.000000Z",
                                            "difference": {
                                                "y": 0,
                                                "m": 0,
                                                "d": 0,
                                                "h": 0,
                                                "i": 7,
                                                "s": 32,
                                                "f": 0.331459,
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
                                            "id": "6",
                                            "attributes": {
                                                "phone": "710082777",
                                                "primary": 1,
                                                "verified": 1,
                                                "created": "2021-02-19T14:37:22.000000Z",
                                                "difference": {
                                                    "y": 0,
                                                    "m": 0,
                                                    "d": 0,
                                                    "h": 0,
                                                    "i": 7,
                                                    "s": 32,
                                                    "f": 0.331914,
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
                                "self": "http:\/\/localhost\/api\/transaction\/exercitationem"
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
                    "self": "http:\/\/localhost\/api\/customer\/3"
                }
            }
        ],
        "beneficiary": [
            {
                "type": "customer",
                "id": "5",
                "attributes": {
                    "created_at": "2021-02-19T14:37:21.000000Z",
                    "updated_at": "2021-02-19T14:37:21.000000Z",
                    "amount_paid": "7661"
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
                                                "s": 32,
                                                "f": 0.343179,
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
                                                    "s": 32,
                                                    "f": 0.343438,
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
                                                    "s": 32,
                                                    "f": 0.34354,
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
                                "self": "http:\/\/localhost\/api\/transaction\/exercitationem"
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
                    "self": "http:\/\/localhost\/api\/customer\/5"
                }
            }
        ],
        "type": [
            {
                "type": "type",
                "id": "2",
                "attributes": {
                    "type": "Loyalty"
                }
            }
        ],
        "method": [
            {
                "type": "method",
                "id": "2",
                "attributes": {
                    "method": "Cash"
                }
            }
        ],
        "status": [
            {
                "type": "status",
                "id": "1",
                "attributes": {
                    "status": "Pending"
                }
            }
        ]
    },
    "links": {
        "self": "http:\/\/localhost\/api\/transaction\/56"
    }
}
```
<div id="execution-results-DELETEapi-transaction--transaction-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-transaction--transaction-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-transaction--transaction-"></code></pre>
</div>
<div id="execution-error-DELETEapi-transaction--transaction-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-transaction--transaction-"></code></pre>
</div>
<form id="form-DELETEapi-transaction--transaction-" data-method="DELETE" data-path="api/transaction/{transaction}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-transaction--transaction-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-transaction--transaction-" onclick="tryItOut('DELETEapi-transaction--transaction-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-transaction--transaction-" onclick="cancelTryOut('DELETEapi-transaction--transaction-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-transaction--transaction-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/transaction/{transaction}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>transaction</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="transaction" data-endpoint="DELETEapi-transaction--transaction-" data-component="url" required  hidden>
<br>
The id of the transaction</p>
</form>


## Status


A transaction can be a success, pending or failed. This resource returns the data for each state/status.
By default each transaction has a pending status as it waiting to be processed. The admin will change state to success or failed.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transaction_status" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transaction_status"
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
<div id="execution-results-GETapi-transaction_status" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-transaction_status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-transaction_status"></code></pre>
</div>
<div id="execution-error-GETapi-transaction_status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-transaction_status"></code></pre>
</div>
<form id="form-GETapi-transaction_status" data-method="GET" data-path="api/transaction_status" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-transaction_status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-transaction_status" onclick="tryItOut('GETapi-transaction_status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-transaction_status" onclick="cancelTryOut('GETapi-transaction_status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-transaction_status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/transaction_status</code></b>
</p>
</form>


## Types


A transaction can be classified into different types. The type is declared when creating the transaction.
It is advisable to pick this field using radio buttons on the transaction form to pick the appropriate type.
This resource gives the data for each type. Use the resource id as the type_id creating a transaction.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transaction_type" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transaction_type"
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
        "type": "type",
        "id": "",
        "attributes": {
            "type": null
        }
    },
    {
        "type": "type",
        "id": "",
        "attributes": {
            "type": null
        }
    }
]
```
<div id="execution-results-GETapi-transaction_type" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-transaction_type"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-transaction_type"></code></pre>
</div>
<div id="execution-error-GETapi-transaction_type" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-transaction_type"></code></pre>
</div>
<form id="form-GETapi-transaction_type" data-method="GET" data-path="api/transaction_type" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-transaction_type', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-transaction_type" onclick="tryItOut('GETapi-transaction_type');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-transaction_type" onclick="cancelTryOut('GETapi-transaction_type');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-transaction_type" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/transaction_type</code></b>
</p>
</form>


## Methods


A transaction can use various methods such as debit card, mobile app or cash. Each resource has method data.
Pass the id of resource as method_id when creating a new transaction.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/transaction_method" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/transaction_method"
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
        "type": "method",
        "id": "",
        "attributes": {
            "method": null
        }
    },
    {
        "type": "method",
        "id": "",
        "attributes": {
            "method": null
        }
    }
]
```
<div id="execution-results-GETapi-transaction_method" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-transaction_method"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-transaction_method"></code></pre>
</div>
<div id="execution-error-GETapi-transaction_method" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-transaction_method"></code></pre>
</div>
<form id="form-GETapi-transaction_method" data-method="GET" data-path="api/transaction_method" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-transaction_method', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-transaction_method" onclick="tryItOut('GETapi-transaction_method');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-transaction_method" onclick="cancelTryOut('GETapi-transaction_method');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-transaction_method" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/transaction_method</code></b>
</p>
</form>




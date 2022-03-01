'use strict';

const NOT_FOUND = 404

const FORBIDDEN = 403

const SUCCESS = 200

const ERROR = 400

const callApi = async (api, method = "GET", data = {}, headers = {}) => {
    method === "GET" && (api += "?" + getQuery(data));

    let config = {
        method,
        url: api,
        headers: {
            'Content-Type': "application/json",
            ...headers
        },
    }
    data && (config = {...config, data});

    return await axios(config)
}

const getQuery = query => {
    let strQuery = "";
    for (let q in query) {
        strQuery += q + "=" + query[q] + "&";
    }
    return strQuery;
};


const getTours = async data => {
    return callApi('/api/tours')
}

const checkPartner = async data => {
    return callApi('/api/check-partner', "POST", data)
}

const getOrder = (data) => {
    return callApi('/api/get-order-detail', 'GET', data)
}

const storeOrder = async data => {
    return callApi('/api/create-order', "POST", data)
}

const removeOrder = async data => {
    return callApi('/api/remove-order', "POST", data)
}

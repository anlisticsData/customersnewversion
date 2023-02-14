const axios  =require("axios")
const crypto = require('crypto')


function generate(size){
    size = (size) ? size : 20
    return crypto.randomBytes(size).toString("hex")
}

function   request(url,method,data,access_token){
    return axios({url,method,data,validateStatus:false ,headers: {
        'Authorization': `token ${access_token}`
      }})
}


module.exports = { generate,request }
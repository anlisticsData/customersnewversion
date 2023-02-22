const axios  =require("axios")
const crypto = require('crypto')


function generate(size){
    size = (size) ? size : 20
    return crypto.randomBytes(size).toString("hex")
}

function   request(url,method,data,access_token){
    return axios({url,method,data,validateStatus:false ,headers: {
<<<<<<< HEAD
        'Authorization': `token ${access_token}`
=======
        'Authorization_': `${access_token}`
>>>>>>> 3499d656ba2a8ae9ac78c7c80cb16b8178f77230
      }})
}


module.exports = { generate,request }
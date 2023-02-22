const CONST =require('./const')
const {generate,request } =require('./utility.js')

test.only('Lista os Tipos de Sensores sem Filtro', async () => {
    const t="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJsb2NhbGhvc3QiLCJzZXJ2ZXIiOiJcL3Zhclwvd3d3XC9odG1sIiwiaXAiOiI6OjEiLCJuYW1lIjoiQXBwbGljYXRpb24iLCJ1dWlkIjoiNjNmMTVlM2JlNzhhOSJ9.8dUEg8sgrvbd954k6R/QaTblQm571dFJcyrITOw1D0Q="
    let response = await request(CONST.URL_BASE_RESOURCE+CONST.GET_RESOURCE_TYPES_SENSOR,"get",null,t)
    console.log(response.data)
    expect(response.status).toBe(200)
    
   

})


 
 
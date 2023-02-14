const CONST =require('./const')
const {generate,request } =require('./utility.js')

test('Lista os Tipos de Sensores sem Filtro', async () => {
    let response = await request(CONST.URL_BASE_RESOURCE+CONST.GET_RESOURCE_TYPES_SENSOR,"get",null,"123")
    expect(response.status).toBe(200)
    console.log(response.data.types)
    expect(response.data.types).toBeDefined()

})


 
#parse("stmpfl_variables.txt")
#parse("stmpfl_header_js.js")

var config = {
    map: {
        '*': {
            ${objectName}: '#[[$vendor$]]#_#[[$package$]]#/#[[$jsFileName$]]#'
        }
    }
};

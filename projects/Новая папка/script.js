function validParentheses(parens) {
    // your code here ..
    let count = 0
    for(let i = 0; i <= parens.length; i++){
        if(parens[i] == '('){
            count++
          }if(parens[i]  == ')'){
            count--
          }if(count < 0){
            break
          }
          debugger
    }
    
    let result
    if(count == 0){
      result = true
    }else{
      result = false
    }
    return result;
  }

  console.log(validParentheses(')'))
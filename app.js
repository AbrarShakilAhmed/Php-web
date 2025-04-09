// let str = 'hello world'

// function replaceword(vars, word, news) {
//   if (vars.includes(word)) {
//     return vars.replace(word, news)
//   }
//   return 0
// }

// console.log(replaceword(str, 'world', 'nes'))

// function replaceword2(vars, word, news) {
//   vars = vars.split(' ')
//   let newarr = []
//   vars.forEach((element) => {
//     if (element == word) {
//       newarr.push(news)
//     } else {
//       newarr.push(element)
//     }
//   })
//   return newarr.join(' ')
// }

// console.log(replaceword2(str, 'world', 'nes'))
// clearImmediate()

// Create a Set
const letters = Object.values({ a: 'a', x: 'b', d: 'c' })

console.table(letters.entries()) // List all Elements
